<?php

namespace App\Controller\Admin;

use App\Model\admin;
use Core\controllers;
use Core\Model;

class acount extends controllers
{

    public function logincheak()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            // Redirect the user to a different page or show an error message.
            header('Location:sky.test/admin/acount');
            exit;
        }
        $model = new Model();
        $admin = new admin();
        $email =  $model->SQL_inject($_POST['email']);
        $password =  $model->SQL_inject($_POST['password']);
        $cpatchacode = $model->SQL_inject($_POST['captcha']);
        $admin->logincheak_admin($email, $password, $cpatchacode);
    }

}
