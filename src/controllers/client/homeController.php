<?php

namespace controllers\client;

use models\home;

class homeController
{
    public $modelOject;

    public function __construct()
    {
        $this->modelOject = new home();
    }

    public function index()
    {
        $products = $this->modelOject->getAllProduct();
        $productss = $this->modelOject->getAllProducts();
        $categories = $this->modelOject->getAllCate();
        $blogs = $this->modelOject->getAllBlog();

        require_once "./src/views/Client/home.php";
    }
}