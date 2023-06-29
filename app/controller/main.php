<?php
namespace  App\Controller ;
use App\Model\pages;
use Core\controllers as CoreControllers;
use Core\view;
use Core\View as CoreView;

class main extends CoreControllers {
    public function  loadpage() {
    if(!empty($this->params[0])) {
    $page  = $this->params[0] ;
    } else {
    $page ="home" ;
    }
    $pages= new pages;
    $pages("pages") ;
    CoreView::render("app/view/main/".$page.".php" ) ;
    }
}
