<?php 
namespace controllers\client;

use models\cart; // Model xử lý dữ liệu liên quan đến giỏ hàng
use models\checkOut; // Model xử lý logic thanh toán
use models\donHang; // Model quản lý dữ liệu đơn hàng

class checkoutController {
    public $Base_url = BASE_URL; // URL gốc để điều hướng

    public function index() {
        $id_user = $_SESSION['user_id']; // Lấy ID người dùng từ session
        $checkOrders = (new checkOut())->check([$id_user]); 
        // Lấy danh sách các sản phẩm trong giỏ hàng của người dùng

        $tong_tien = 0;
        foreach ($checkOrders as $checkOrder) {
            $tong_tien += $checkOrder['tong_phu']; 
            // Tính tổng tiền của toàn bộ sản phẩm trong giỏ hàng
        }

        // Biến chứa dữ liệu nhập từ form
        $diachi = []; // Dữ liệu địa chỉ
        $donhang = []; // Dữ liệu đơn hàng
        $detailOrder = []; // Dữ liệu chi tiết đơn hàng

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            // Xử lý khi người dùng gửi form thanh toán
            foreach ($_POST as $key => $value) {
                if ($key == 'ho_va_ten' || $key == 'so_dien_thoai' || $key == 'chi_tiet_dia_chi') {
                    $diachi[$key] = $value; // Lấy thông tin địa chỉ từ form
                } elseif ($key == 'ghi_chu' || $key == 'id_thanh_toan') {
                    $donhang[$key] = $value; // Lấy ghi chú và phương thức thanh toán
                } elseif ($key != 'ho_va_ten' && $key != 'so_dien_thoai' && $key != 'chi_tiet_dia_chi' 
                          && $key != 'ghi_chu' && $key != 'id_thanh_toan') {
                    $detailOrder[$key] = $value; // Lấy thông tin sản phẩm chi tiết
                }
            }

            $diachi['id_user'] = $id_user; // Gắn ID người dùng vào dữ liệu địa chỉ
            $donhang['id_user'] = $id_user; // Gắn ID người dùng vào dữ liệu đơn hàng
            $donhang['tong_tien'] = $tong_tien; // Gắn tổng tiền vào đơn hàng

            $id_dia_chi = (new checkOut())->insertDiachi($diachi); 
            // Thêm địa chỉ vào cơ sở dữ liệu
            $donhang['id_dia_chi'] = $id_dia_chi; // Gắn ID địa chỉ vào đơn hàng

            $id_don_hang = (new donHang())->insertDonHang($donhang); 
            // Thêm đơn hàng vào cơ sở dữ liệu

            $chi_tiet_dh = []; // Mảng lưu chi tiết đơn hàng
            foreach ($detailOrder as $key => $value) {
                if (strpos($key, 'id_san_pham') === 0) {
                    // Tìm chuỗi con 'id_san_pham' trong key
                    $index = str_replace('id_san_pham', '', $key); 
                    // Lấy index của sản phẩm để xác định số lượng
                    if (isset($detailOrder['sl_san_pham' . $index])) {
                        // Nếu tìm thấy số lượng tương ứng, thêm vào mảng chi tiết đơn hàng
                        $chi_tiet_dh[] = [
                            'id_san_pham' => $value,
                            'sl_san_pham' => $detailOrder['sl_san_pham' . $index],
                            'id_don_hang' => $id_don_hang
                        ];
                    }
                }
            }

            // Duyệt mảng chi tiết đơn hàng và thêm từng chi tiết vào cơ sở dữ liệu
            foreach ($chi_tiet_dh as $item_chi_tiet) {
                (new donHang())->insertDetailOrder($item_chi_tiet); 
                // Thêm chi tiết đơn hàng vào cơ sở dữ liệu
            }

            (new cart())->deleteCartUser([$_SESSION['user_id']]); 
            // Xóa toàn bộ sản phẩm trong giỏ hàng sau khi đã đặt hàng

            header("location: $this->Base_url/completedOrder"); 
            // Chuyển hướng người dùng đến trang xác nhận hoàn tất đơn hàng
            exit; // Kết thúc script
        }

        require_once "./src/views/Client/checkout.php"; 
        // Gọi view để hiển thị giao diện thanh toán
    }
}
?>
