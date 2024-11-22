<?php 
    ob_start();
    session_start();
    require_once "./src/commons/baseModel.php";
    require_once "./src/commons/function.php";
    require_once "./src/commons/env.php";
    
    
?>


<!-- cập nhật ở đây -->
<!DOCTYPE html>
<html lang="en">
<?php require_once "./config/head.php" ?>
<body>
    <div class="page-wrapper">

        <?php require_once "./config/header.php" ?>

        <?php require_once "./router/index.php" ?>
    
        <?php 
            if(!isset($_SESSION['admin'])){
                
                require_once "./config/footer.php" ;

            }
        ?>
        
    </div>




    <?php if(!isset($_SESSION['admin'])): ?>
        <?php require_once "./config/mobile.php" ?>

        
        <!-- Plugins JS File -->
        <script src="<?=BASE_URL?>/assets/Client/js/jquery.min.js"></script>
        <script src="<?=BASE_URL?>/assets/Client/js/bootstrap.bundle.min.js"></script>
        <script src="<?=BASE_URL?>/assets/Client/js/optional/isotope.pkgd.min.js"></script>
        <script src="<?=BASE_URL?>/assets/Client/js/plugins.min.js"></script>
        <script src="<?=BASE_URL?>/assets/Client/js/jquery.appear.min.js"></script>

        <!-- Main JS File -->
        <script src="<?=BASE_URL?>/assets/Client/js/main.min.js"></script>
       
      
    <?php else: ?>


        <!-- Vendor Javascript (Require in all Page) -->
        <script src="<?=BASE_URL?>/assets/Admin/js/vendor.js"></script>

        <!-- App Javascript (Require in all Page) -->
        <script src="<?=BASE_URL?>/assets/Admin/js/app.js"></script>

        <!-- Vector Map Js -->
        <script src="<?=BASE_URL?>/assets/Admin/vendor/jsvectormap/js/jsvectormap.min.js"></script>
        <script src="<?=BASE_URL?>/assets/Admin/vendor/jsvectormap/maps/world-merc.js"></script>
        <script src="<?=BASE_URL?>/assets/Admin/vendor/jsvectormap/maps/world.js"></script>

        <!-- Dashboard Js -->
        <script src="<?=BASE_URL?>/assets/Admin/js/pages/dashboard.js"></script>

    <?php endif ?>
    </body>
</html>