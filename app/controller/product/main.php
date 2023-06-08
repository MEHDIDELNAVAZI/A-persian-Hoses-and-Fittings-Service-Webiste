<?php

namespace  App\Controller\Product;

use Core\controllers;
use Core\View;

class main extends controllers
{
    public function index()
    {
        $product_id = array();
        array_push($product_id, $this->params[0]);
        View::render("app/view/detailprodutcs/showproducts.php", $product_id);
    }
}
