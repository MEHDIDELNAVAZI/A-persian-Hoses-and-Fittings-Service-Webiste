<?php
namespace App\Model ;

use Core\Model;
use Core\View;

class admin extends Model {
    
    public function  user_exist ($email) {
    $model = new Model ;
    $model('admin') ;
    $query  = $model->SELECT(['email','=',$email]) ;
    $query = $model->Query_runner($query) ;     
    if ($model->getrow($query) > 0) {
    return true  ;
    }  else {
    return false  ;
    }
}  
    public function  logincheak_admin($email , $password , $captcha) {
        $email = $this->SQL_inject($email) ;
        $password = $this->SQL_inject($password) ;
        
    $query =  $this->Query_runner("SELECT * FROM admin WHERE  email = '$email' AND password='$password'"); 
    if ($this->getrow($query) == 1 ) {
     if ($captcha == $_SESSION['captcha']) {
      $_SESSION['admin_email'] = $email ;
      header("location:http://sky.test/admin");
     }else {
        $_SESSION['Captcha_error'] = "The Cpatcha code  is not correct ! " ;
        header("location:http://sky.test/admin");
     }
    }else {
        $_SESSION['email_password'] = " Email or password is inccorect ! " ;
        header("location:http://sky.test/admin");
    }
    }

    public function  register_member()
    {
       
    }
    
}
