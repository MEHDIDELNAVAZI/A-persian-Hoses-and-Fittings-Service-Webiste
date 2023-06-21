<?php

namespace   App\Controller\Search;

use App\Model\products;
use Core\controllers;
use Core\View;

class main extends controllers
{
    public function index()
    {
        $category = $this->params[0];
        $category_id = $this->params[1];
        $product = new products;

        if (isset($category) && ($category == 'topcategory' || $category == 'midcategory' || $category == 'endcategory') && isset($category_id)) {

            if ($category == 'topcategory') {
                $prs = array();
                $category_array = array();
                $category_name = $product->get_tcat_name_by_tcat_id($category_id);
                array_push($category_array, $category_name);
                $prs = $product->getproduct_ids($this->params[1], 0, 0);
                View::render("app/view/search/search.php", $prs, $category_array);
            }

            if ($category == 'midcategory') {
                $prs = array();
                $category_array = array();
                $category_name = $product->get_dastebandi_mcat_id($category_id);
                array_push($category_array, $category_name);
                $prs = $product->getproduct_ids(0, $this->params[1], 0);
                View::render("app/view/search/search.php", $prs, $category_array);
            }

            if ($category == 'endcategory') {
                $prs = array();
                $category_array = array();
                $category_name = $product->get_dastebandi_ecat_id($category_id);
                array_push($category_array, $category_name);

                $prs = $product->getproduct_ids(0, 0, $this->params[1]);

                View::render("app/view/search/search.php", $prs,  $category_array);
            }
        } else {

            if ($this->params[0] == "searchfor") {
                $searchedprs = array();
                if (isset ($_GET["s_f"])) {
                    $searchedprs = $product->get_product_id_serached($_GET["s_f"]);
                    View::render("app/view/search/search.php", $searchedprs);
                }else {
                    echo  "error 4040 page not found ";
                }
            } else {
                echo  "error 4040 page not found ";
            }
        }
    }
}
