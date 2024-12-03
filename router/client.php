<?php 
    autoloadFile('./src/controllers/client/');  //Hàm require_once tất cả các file trong Controller để làm việc
    
    //Router của trang chủ - client
    $router->add("GET", "client", "/", "homeController@index");
    $router->add("POST", "client", "/", "homeController@index");

    //Router của phần Đăng xuất
    $router->add("GET", "client", "/dangxuat", "acoutController@dangxuat");
    
    //Router của trang Product - client
    $router->add("GET", "client", "/product", "productController@index");
    $router->add("POST", "client", "/product", "productController@index");

    //Router của trang Blog - client
    $router->add("GET", "client", "/blog", "blogController@index");

    //Router của trang About - client
    $router->add("GET", "client", "/about", "aboutController@index");

    //Router của trang contact - client
    $router->add("GET", "client", "/contact", "contactController@index");

    //Router của trang Tài khoản - client
    $router->add("GET", "client", "/acout", "acoutController@index");
    $router->add("POST", "client", "/acout", "acoutController@index");

    //Router của trang Giỏ hàng - client
    $router->add("GET", "client", "/cart", "cartController@index");
    $router->add("GET", "client", "/cart/delete", "cartController@delete");
    $router->add("GET", "client", "/addCart", "addCartController@index");
    
    //Router của trang Hoàn tất đơn hàng - client
    $router->add("GET", "client", "/completedOrder", "completedController@index");
    $router->add("POST", "client", "/completedOrder", "completedController@index");

    //Router của trang Kiểm tra đơn hàng - client
    $router->add("GET", "client", "/checkout", "checkoutController@index");
    $router->add("POST", "client", "/checkout", "checkoutController@index");
    
    //Router của trang Chi tiết product - client
    $router->add("GET", "client", "/detailProduct", "detailProductController@index");
    $router->add("POST", "client", "/detailProduct", "detailProductController@index");

    //Router của trang chi tiết bài viết - client
    $router->add("GET", "client", "/single", "singleController@index");

    //Hàm thực hiện việc gọi những function có trong Controller
    $router->solve("client");
?>