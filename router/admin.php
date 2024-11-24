<?php 
    autoloadFile('./src/controllers/admin/');


    //trang chủ admin
    $router->add("GET", "admin", "/admin", "AdminController@repload");
    $router->add("GET", "admin", "/admin/dashboard", "AdminController@index");

    //Trang sản phẩm
    $router->add("GET", "admin", "/admin/product-list", "productController@index");
    $router->add("GET", "admin", "/admin/product-add", "productController@create");
    $router->add("GET", "admin", "/admin/product-edit", "productController@edit");
    
    //Trang danh mục
    $router->add("GET", "admin", "/admin/category-list", "categoryController@index");
    $router->add("GET", "admin", "/admin/category-add", "categoryController@create");
    $router->add("GET", "admin", "/admin/category-edit", "categoryController@edit");
    $router->add("GET", "admin", "/admin/category-detail", "categoryController@detail");
    $router->add("GET", "admin", "/admin/category-smalledit", "categoryController@editSmall");
       
    //Trang quản lý đơn hàng
    $router->add("GET", "admin", "/admin/orders-list", "ordersController@index");


    // đăng xuất
    $router->add("GET", "admin", "/admin/dangxuat", "AdminController@dangxuat");


    $router->add("GET", "admin", "/taikhoanAdmin", "acountController@acount");



    $router->solve("admin");
?>