<?php 
    namespace controllers\admin;

    use commons\baseModel;
    use models\donHang;
    class ordersController extends baseModel{
        public $base_url = BASE_URL;

        public function index(){
            $data = (new donHang())->countStatusOrder([]);
            $orders = (new donHang())->ordersManage([]);
            require_once "./src/views/Admin/oder/orders-list.php";
        }

        public function create(){
            require_once "./src/views/Admin/order/orders-add.php";
        }

        public function edit(){
            require_once "./src/views/Admin/order/orders-edit.php";
        }

        public function detail(){
            $products = (new donHang())->detailOrderProduct([$_GET['id_DH']]);
            $information = (new donHang())->detailOrderAdress([$_GET['id_DH']]);
            $trangthais = (new donHang())->trangThai([]);

            if($_SERVER['REQUEST_METHOD']=="POST"){
                if(isset($_POST['id_trang_thai'])){
                    (new donHang())->updateOrder([$_POST['id_trang_thai'],$_GET['id_DH']]);
                }
            }
            require_once "./src/views/Admin/oder/order-detail.php";

        }


        public function deleteOrder(){
            $id = $_GET['id_DH'];

            (new donHang())->deleteOrderDetail([$id]);
            (new donHang())->deleteOrder([$id]);
            header("location: $this->base_url/admin/orders-list");
        }
    }

?>