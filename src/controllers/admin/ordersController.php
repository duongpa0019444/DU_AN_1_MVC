<?php 
    namespace controllers\admin;

    use commons\baseModel;  // Lớp baseModel dùng làm cơ sở cho các controller khác
    use models\donHang;     // Lớp donHang dùng để xử lý các đơn hàng trong hệ thống

    class ordersController extends baseModel{
        public $base_url = BASE_URL; // Định nghĩa biến base_url để lưu trữ URL gốc của trang web

        // Phương thức index - Hiển thị danh sách đơn hàng
        public function index(){
            // Lấy tổng số đơn hàng theo trạng thái từ lớp donHang
            $data = (new donHang())->countStatusOrder([]); 
            
            // Kiểm tra xem có tham số 'id_tt' (trạng thái đơn hàng) trong URL không
            if(isset($_GET['id_tt'])){
                // Nếu có, lọc các đơn hàng theo trạng thái
                $idTT = $_GET['id_tt'];
                $orders = (new donHang())->findOrdersTT([$idTT]); 
            }else{
                // Nếu không, lấy tất cả các đơn hàng quản lý
                $orders = (new donHang())->ordersManage([]); 
            }
            
            // Bao gồm file view để hiển thị danh sách đơn hàng
            require_once "./src/views/Admin/oder/orders-list.php";
        }

        // Phương thức create - Tạo mới đơn hàng
        public function create(){
            // Bao gồm file view để hiển thị form tạo mới đơn hàng
            require_once "./src/views/Admin/order/orders-add.php";
        }

        // Phương thức edit - Sửa thông tin đơn hàng
        public function edit(){
            // Bao gồm file view để hiển thị form chỉnh sửa đơn hàng
            require_once "./src/views/Admin/order/orders-edit.php";
        }

        // Phương thức detail - Chi tiết đơn hàng
        public function detail(){
            // Lấy thông tin sản phẩm trong đơn hàng từ id đơn hàng
            $products = (new donHang())->detailOrderProduct([$_GET['id_DH']]);
            // Lấy thông tin địa chỉ giao hàng từ id đơn hàng
            $information = (new donHang())->detailOrderAdress([$_GET['id_DH']]);
            // Lấy tất cả các trạng thái của đơn hàng
            $trangthais = (new donHang())->trangThai([]);

            // Kiểm tra nếu phương thức là POST, tức là người dùng đang gửi cập nhật trạng thái đơn hàng
            if($_SERVER['REQUEST_METHOD']=="POST"){
                // Kiểm tra nếu có trạng thái đơn hàng được chọn
                if(isset($_POST['id_trang_thai'])){
                    // Cập nhật trạng thái đơn hàng trong cơ sở dữ liệu
                    (new donHang())->updateOrder([$_POST['id_trang_thai'],$_GET['id_DH']]);
                }
            }
            // Bao gồm file view để hiển thị chi tiết đơn hàng
            require_once "./src/views/Admin/oder/order-detail.php";
        }

        // Phương thức deleteOrder - Xóa đơn hàng
        public function deleteOrder(){
            // Lấy id đơn hàng từ URL
            $id = $_GET['id_DH']; 

            // Xóa chi tiết đơn hàng từ cơ sở dữ liệu
            (new donHang())->deleteOrderDetail([$id]);
            // Xóa đơn hàng khỏi cơ sở dữ liệu
            (new donHang())->deleteOrder([$id]);
            
            // Sau khi xóa thành công, chuyển hướng về trang danh sách đơn hàng
            header("location: $this->base_url/admin/orders-list");
        }
    }
?>
