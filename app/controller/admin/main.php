<?php
namespace  App\Controller\Admin  ;

use Core\controllers as CoreControllers;
use Core\View;

class main extends CoreControllers {
  

public function index() {
  if (!empty($_SESSION["admin_email"])) {
    View::render("app/view/admin/adminpannel.php") ;
  }else {
    View::render("app/view/admin/login.php") ;
  }
}




}
