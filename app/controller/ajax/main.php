<?php

namespace App\Controller\Ajax;

use App\Model\products;
use Core\controllers;
use Core\Model;
use Core\View;

class main  extends controllers
{
   public function AddTopCategory()
   {
      $topcat_name = $_POST['topcat_name'];
      $product = new products;

      if ($product->AddTopCategory($topcat_name)) {
         $message = "Added  succefully";
         $response = array('message' => $message);
         echo json_encode($response);
      } else {
         $message = " Adding topcategory failed !";
         $response = array('message' => $message);
         echo json_encode($response);
      }
   }


   public function AddMidCategory()
   {
      $midcat_name = $_POST['mcat_name'];
      $tcat_id = $_POST['tcat_id'];

      $product = new products;

      if ($product->AddMidCategory($tcat_id, $midcat_name)) {
         $message = "Added  succefully";
         $response = array('message' => $message);
         echo json_encode($response);
      } else {
         $message = " Adding topcategory failed !";
         $response = array('message' => $message);
         echo json_encode($response);
      }
   }

   public function AddEndCategory()
   {
      $ecat_name = $_POST['ecat_name'];
      $tcat_id = $_POST['tcat_id'];
      $mcat_id = $_POST['mcat_id'];
      $product = new products;

      if ($product->AddEndCategory($ecat_name, $tcat_id, $mcat_id)) {
         $message = "Added  succefully";
         $response = array('message' => $message);
         echo json_encode($response);
      } else {
         $message = " Adding topcategory failed !";
         $response = array('message' => $message);
         echo json_encode($response);
      }
   }


   public function fetchmidcategory()
   {
      $tcat_id = $_POST['tcat_id'];
      include "/Applications/XAMPP/xamppfiles/htdocs/sky/core/conf.php";
      $query  = $mysqli->query("SELECT * FROM mcat_name WHERE tcat_id='$tcat_id'");
      while ($row = mysqli_fetch_assoc($query)) {
         echo   "<option value= " . $row['midcat_id'] . ">"  . $row['mcat_name'] . "</option>";
      }
   }


   public function fetchendcategory()
   {
      $mcat_id = $_POST['mcat_id'];
      include "/Applications/XAMPP/xamppfiles/htdocs/sky/core/conf.php";
      $query  = $mysqli->query("SELECT * FROM end_category WHERE mctat_id='$mcat_id'");
      if (mysqli_num_rows($query) > 0) {
         while ($row = mysqli_fetch_assoc($query)) {
            echo   "<option value= " . $row['id'] . ">"  . $row['ecat_name'] . "</option>";
         }
      } else {
         echo   "<option value= " . "0" . ">"  . "هیچ دسته بندی یافت نشد " . "</option>";
      }
   }

   public function addprodut()
   {
      $model  = new  Model;
      $model("product");
      $tcat_id = $_POST["tcat_id"];
      $mcat_id = $_POST["mcat_id"];
      $ecat_id = $_POST["ecat_id"];
      $description = $_POST["description"];
      $product_name = $_POST["product_name"];
      $isavailble = $_POST["isavailble"];
      $photo = $_FILES["file"]["name"];
      $tozihat_array =  $_POST['tozihat'];
      $tozihat_takmili_array =  $_POST['tozihat_takmili'];
      $tozihat_array = json_decode($tozihat_array, true);
      $tozihat_takmili_array = json_decode($tozihat_takmili_array, true);


      if (isset($_FILES['file']['name']) && isset($product_name) && isset($description)) {
         /* Getting file name */
         $filename = $_FILES['file']['name'];
         /* Location */
         $location = "/Applications/XAMPP/xamppfiles/htdocs/sky/public/assets/uploaded_images/" . $filename;
         $imageFileType = pathinfo($location, PATHINFO_EXTENSION);
         $imageFileType = strtolower($imageFileType);
         /* Valid extensions */
         $valid_extensions = array("jpg", "jpeg", "png");
         $response = 0;
         /* Check file extension */
         if (in_array(strtolower($imageFileType), $valid_extensions)) {
            /* Upload file */
            if (move_uploaded_file($_FILES['file']['tmp_name'], $location)) {

               if (
                  $model->Query_runner("INSERT INTO  products (tcat_id,mcat_id,ecat_id,p_name,description,status,photo) VALUES 
                 ('$tcat_id' , '$mcat_id' ,'$ecat_id' , '$product_name' ,'$description' ,'$isavailble','$photo')
                 ")
               ) {

                  include "//Applications/XAMPP/xamppfiles/htdocs/sky/core/conf.php";
                  $getnextid = $mysqli->query(
                     "SELECT p_id FROM   products ORDER BY p_id DESC LIMIT 1"
                  );
                  while ($r = mysqli_fetch_assoc($getnextid)) {
                     $lastid = $r["p_id"];
                  };




                  if (count($tozihat_array) > 0) {

                     for ($i = 0; $i < count($tozihat_array); $i++) {
                        $name  = $tozihat_array[$i]['key'];
                        $content = $tozihat_array[$i]["value"];
                        $query = $mysqli->query("INSERT INTO tozihat  (name,content,p_id) VALUES
                     ( '$name', '$content' , $lastid) ");
                     
                  }

                  if (count($tozihat_takmili_array) > 0) {

                     for ($i = 0; $i < count($tozihat_takmili_array); $i++) {
                        $name  = $tozihat_takmili_array[$i]['key'];
                        $tozihattakmili = $tozihat_takmili_array[$i]["value"];
                        $query = $mysqli->query("INSERT INTO tozihate_takmili  (p_id,name,content) VALUES
                     ( $lastid , '$name' ,'$tozihattakmili' )");
                     }
                  }

                  $message = "Added  succefully";
                  $response = array('message' => $message);
                  echo json_encode($response);
               } else {
                  $message = "Adding product failed ! ";
                  $response = array('message' => $message);
                  echo json_encode($response);
               }
            } else {
               $message = " Uplouding failed ! ";
               $response = array('message' => $message);
               echo json_encode($response);
            }
         }
      }
   }

}
}
