<?php 
    namespace models;

    use commons\baseModel;
    
    class home extends baseModel
    {
        // Lấy tất cả sản phẩm có khuyến mãi
        public function getAllProduct()
        {
            $sql = "SELECT 
                SP.id AS id_SP, 
                SP.ten_san_pham, 
                SP.gia_san_pham, 
                SP.khuyen_mai, 
                HA.hinh_anh_1, 
                HA.hinh_anh_2, 
                DMSM.id_danh_muc,
                (select dm.ten_danh_muc from danh_muc dm where dm.id = DMSM.id_danh_muc) as ten_danh_muc
                
            FROM 
                san_pham AS SP 
            JOIN 
                hinh_anh AS HA ON SP.id = HA.id_san_pham 
            JOIN 
                danh_muc_small AS DMSM ON SP.id_DM_small = DMSM.id
            WHERE 
                SP.khuyen_mai > 0
            ";
            // Trả về tất cả các sản phẩm có chương trình khuyến mãi
            return parent::pdoQueryAll($sql, []);
        }
    
        // Lấy danh sách tất cả sản phẩm, sắp xếp theo ngày thêm mới
        public function getAllProducts()
        {
            $sql = "SELECT 
                SP.id AS id_SP, 
                SP.ten_san_pham, 
                SP.gia_san_pham, 
                SP.ngay_them, 
                SP.khuyen_mai, 
                HA.hinh_anh_1, 
                HA.hinh_anh_2, 
                DMSM.id_danh_muc,
                (select dm.ten_danh_muc from danh_muc dm where dm.id = DMSM.id_danh_muc) as ten_danh_muc
                
            FROM 
                san_pham AS SP 
            JOIN 
                hinh_anh AS HA ON SP.id = HA.id_san_pham 
            JOIN 
                danh_muc_small AS DMSM ON SP.id_DM_small = DMSM.id
            ORDER BY 
                SP.ngay_them DESC  -- Sắp xếp sản phẩm theo ngày thêm mới
            LIMIT 10
            ";
            // Trả về danh sách sản phẩm, giới hạn 10 sản phẩm mới nhất
            return parent::pdoQueryAll($sql, []);
        }
    
        // Lấy tất cả danh mục sản phẩm và số lượng sản phẩm trong mỗi danh mục
        public function getAllCate()
        {
            $sql = "SELECT 
                DM.id,
                DM.hinh_anh,
                DM.ten_danh_muc,
                COUNT(SP.id) AS total_san_pham  -- Đếm số lượng sản phẩm trong mỗi danh mục
            FROM 
                san_pham AS SP
            JOIN 
                danh_muc_small AS DMS ON SP.id_DM_small = DMS.id
            JOIN 
                danh_muc AS DM ON DMS.id_danh_muc = DM.id
            GROUP BY 
                DM.id, DM.ten_danh_muc  -- Nhóm theo danh mục
            ORDER BY 
                DM.ten_danh_muc;  -- Sắp xếp theo tên danh mục
            ";
            // Trả về danh sách danh mục sản phẩm và số lượng sản phẩm trong mỗi danh mục
            return parent::pdoQueryAll($sql, []);
        }
    
        // Lấy tất cả bài viết blog
        public function getAllBlog()
        {
            $sql = "SELECT * FROM bai_viet";  // Truy vấn tất cả bài viết
            // Trả về danh sách bài viết blog
            return parent::pdoQueryAll($sql, []);
        }
    
        // Lấy tất cả sản phẩm có khuyến mãi
        public function getAllProd()
        {
            $sql = "SELECT 
                SP.id AS id_SP, 
                SP.ten_san_pham, 
                SP.gia_san_pham, 
                SP.khuyen_mai, 
                HA.hinh_anh_1, 
                HA.hinh_anh_2, 
                DMSM.id_danh_muc,
                (select dm.ten_danh_muc from danh_muc dm where dm.id = DMSM.id_danh_muc) as ten_danh_muc
                
            FROM 
                san_pham AS SP 
            JOIN 
                hinh_anh AS HA ON SP.id = HA.id_san_pham 
            JOIN 
                danh_muc_small AS DMSM ON SP.id_DM_small = DMSM.id
            WHERE 
                SP.khuyen_mai > 0  -- Lọc sản phẩm có khuyến mãi
            ";
            // Trả về tất cả sản phẩm có khuyến mãi
            return parent::pdoQueryAll($sql, []);
        }
    
        // Tính tổng số liệu cho bảng điều khiển (Dashboard)
        public function countAllDashboard($data)
        {
            $sql = "SELECT 
                        (SELECT COUNT(1) FROM san_pham) AS sl_san_pham,  -- Đếm tổng số sản phẩm
                        (SELECT COUNT(1) FROM don_hang) AS sl_don_hang,  -- Đếm tổng số đơn hàng
                        (SELECT COUNT(1) FROM users) AS sl_users,  -- Đếm tổng số người dùng
                        (SELECT COUNT(1) FROM danh_muc) AS sl_danh_muc,  -- Đếm tổng số danh mục
                        (SELECT SUM(tong_tien) FROM don_hang WHERE trang_thai = 4) AS tong_doanh_thu  -- Tính tổng doanh thu từ đơn hàng đã hoàn thành (trạng thái = 4)
                    FROM DUAL";
            // Trả về tổng số liệu (sản phẩm, đơn hàng, người dùng, danh mục, và doanh thu)
            return parent::pdoQuery($sql, $data);
        }
    }
    
?>