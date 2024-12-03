<?php 
    autoloadFile('./src/controllers/admin/');//Hàm require_once tất cả các file trong Controller để làm việc

    //Router của trang chủ admin
    $router->add("GET", "admin", "/admin", "AdminController@repload");
    $router->add("GET", "admin", "/admin/dashboard", "AdminController@index");

    //Router của Trang sản phẩm
    $router->add("GET", "admin", "/admin/product-list", "productController@index"); 
    $router->add("GET", "admin", "/admin/product-add", "productController@create");
    $router->add("POST", "admin", "/admin/product-add", "productController@create");
    $router->add("GET", "admin", "/admin/product-edit", "productController@edit");
    $router->add("POST", "admin", "/admin/product-edit", "productController@edit");
    $router->add("GET", "admin", "/admin/product-delete", "productController@delete");
    
    //Router của Trang danh mục
    $router->add("GET", "admin", "/admin/category-list", "categoryController@index");
    $router->add("GET", "admin", "/admin/category-add", "categoryController@create");
    $router->add("POST", "admin", "/admin/category-add", "categoryController@create");
    $router->add("GET", "admin", "/admin/category-edit", "categoryController@edit");
    $router->add("POST", "admin", "/admin/category-edit", "categoryController@edit");
    $router->add("GET", "admin", "/admin/category-delete", "categoryController@delete");

    //Router của Trang danh mục con
    $router->add("GET", "admin", "/admin/category-detail", "categoryController@detail");
    $router->add("GET", "admin", "/admin/category-smallcreate", "categoryController@createSmall");
    $router->add("POST", "admin", "/admin/category-smallcreate", "categoryController@createSmall");
    $router->add("GET", "admin", "/admin/category-smalldelete", "categoryController@deleteSmall");
    $router->add("GET", "admin", "/admin/category-smalledit", "categoryController@editSmall");
    $router->add("POST", "admin", "/admin/category-smalledit", "categoryController@editSmall");
    
       
    //Router của Trang quản lý đơn hàng
    $router->add("GET", "admin", "/admin/orders-list", "ordersController@index");
    $router->add("GET", "admin", "/admin/orders-detail", "ordersController@detail");
    $router->add("POST", "admin", "/admin/orders-detail", "ordersController@detail");
    $router->add("GET", "admin", "/admin/orders-delete", "ordersController@deleteOrder");
    
    //Router của Trang quản lý Users
    $router->add("GET", "admin", "/admin/users-list", "usersController@index");
    $router->add("GET", "admin", "/admin/users-add", "usersController@create");
    $router->add("POST", "admin", "/admin/users-add", "usersController@create");
    $router->add("GET", "admin", "/admin/users-edit", "usersController@update");
    $router->add("POST", "admin", "/admin/users-edit", "usersController@update");
    $router->add("GET", "admin", "/admin/users-delete", "usersController@delete");
    
    // đăng xuất
    $router->add("GET", "admin", "/admin/dangxuat", "AdminController@dangxuat");

    //Router của chuyển đến trang quản trị của Admin
    $router->add("GET", "admin", "/taikhoanAdmin", "acountController@acount");

    //Hàm thực hiện việc gọi những function có trong Controller
    $router->solve("admin");
?>