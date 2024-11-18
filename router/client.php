<?php 
    autoloadFile('./src/controllers/client/');
    autoloadFile('./src/models/client/');

    $router->add("GET", "client", "/", "homeController@index");
    $router->add("POST", "client", "/", "homeController@index");
    $router->add("GET", "client", "/dangxuat", "acoutController@dangxuat");
    
    $router->add("GET", "client", "/product", "productController@index");
    $router->add("GET", "client", "/blog", "blogController@index");
    $router->add("GET", "client", "/about", "aboutController@index");
    $router->add("GET", "client", "/contact", "contactController@index");
    $router->add("GET", "client", "/acout", "acoutController@index");
    $router->add("POST", "client", "/acout", "acoutController@index");
    $router->add("GET", "client", "/cart", "cartController@index");
    $router->add("GET", "client", "/checkout", "checkoutController@index");
    $router->add("GET", "client", "/detailProduct", "detailProductController@index");
    $router->add("GET", "client", "/single", "singleController@index");





    $router->solve("client");
?>