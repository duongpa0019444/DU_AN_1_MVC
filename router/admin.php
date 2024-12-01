<?php 
    autoloadFile('./src/controllers/admin/');


    //trang chủ admin
    $router->add("GET", "admin", "/admin", "AdminController@repload");
    $router->add("GET", "admin", "/admin/dashboard", "AdminController@index");

    //Trang sản phẩm
    $router->add("GET", "admin", "/admin/product-list", "productController@index");
    $router->add("GET", "admin", "/admin/product-add", "productController@create");
    $router->add("POST", "admin", "/admin/product-add", "productController@create");
    $router->add("GET", "admin", "/admin/product-edit", "productController@edit");
    $router->add("POST", "admin", "/admin/product-edit", "productController@edit");
    $router->add("GET", "admin", "/admin/product-delete", "productController@delete");
    
    //Trang danh mục
    $router->add("GET", "admin", "/admin/category-list", "categoryController@index");
    $router->add("GET", "admin", "/admin/category-add", "categoryController@create");
    $router->add("POST", "admin", "/admin/category-add", "categoryController@create");
    $router->add("GET", "admin", "/admin/category-edit", "categoryController@edit");
    $router->add("POST", "admin", "/admin/category-edit", "categoryController@edit");
    $router->add("GET", "admin", "/admin/category-delete", "categoryController@delete");

    //Trang danh mục con
    $router->add("GET", "admin", "/admin/category-detail", "categoryController@detail");
    $router->add("GET", "admin", "/admin/category-smallcreate", "categoryController@createSmall");
    $router->add("POST", "admin", "/admin/category-smallcreate", "categoryController@createSmall");
    $router->add("GET", "admin", "/admin/category-smalldelete", "categoryController@deleteSmall");
    $router->add("GET", "admin", "/admin/category-smalledit", "categoryController@editSmall");
    $router->add("POST", "admin", "/admin/category-smalledit", "categoryController@editSmall");
    
       
    //Trang quản lý đơn hàng
    $router->add("GET", "admin", "/admin/orders-list", "ordersController@index");
    $router->add("GET", "admin", "/admin/orders-detail", "ordersController@detail");
    $router->add("POST", "admin", "/admin/orders-detail", "ordersController@detail");
    $router->add("GET", "admin", "/admin/orders-delete", "ordersController@deleteOrder");
    

    //Trang quản lý Users
    $router->add("GET", "admin", "/admin/users-list", "usersController@index");
    $router->add("GET", "admin", "/admin/users-create", "usersController@create");

    
    // đăng xuất
    $router->add("GET", "admin", "/admin/dangxuat", "AdminController@dangxuat");


    $router->add("GET", "admin", "/taikhoanAdmin", "acountController@acount");



    $router->solve("admin");
?>