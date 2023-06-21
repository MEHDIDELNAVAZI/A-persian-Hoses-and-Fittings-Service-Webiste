<?php

namespace App\Model;


use Core\Model;

class products extends Model
{
  public function AddTopCategory($name)
  {
    include "/Applications/XAMPP/xamppfiles/htdocs/sky/core/conf.php";
    $query = $mysqli->query("INSERT INTO top_cat (name) VALUES ('$name')");
    if ($query) {
      return true;
    } else {
      return false;
    }
  }

  public function AddMidCategory($tcat_id, $mcat_name)
  {
    include "/Applications/XAMPP/xamppfiles/htdocs/sky/core/conf.php";
    $query = $mysqli->query("INSERT INTO mcat_name (tcat_id,mcat_name) VALUES ('$tcat_id' ,'$mcat_name')");
    if ($query) {
      return true;
    } else {
      return false;
    }
  }


  public function AddEndCategory($ecat_name, $tcat_id, $mcat_id)
  {
    include "/Applications/XAMPP/xamppfiles/htdocs/sky/core/conf.php";

    $query = $mysqli->query("INSERT INTO end_category (ecat_name,tcat_id,mctat_id) VALUES ('$ecat_name' ,'$tcat_id','$mcat_id')");
    if ($query) {
      return true;
    } else {
      return false;
    }
  }


  public function getproduct_ids($topcat = 0, $midcat = 0, $endcat = 0)
  {
    if ($topcat != 0) {
      $products = array();
      include "/Applications/XAMPP/xamppfiles/htdocs/sky/core/conf.php";
      $query  = $mysqli->query(("SELECT * FROM  products WHERE  tcat_id = '$topcat' "));
      while ($row = mysqli_fetch_assoc($query)) {
        array_push($products, $row['p_id']);
      }
      return $products;
    }


    if ($midcat != 0) {
      $products = array();
      include "/Applications/XAMPP/xamppfiles/htdocs/sky/core/conf.php";
      $query2  = $mysqli->query(("SELECT * FROM  products WHERE   mcat_id= '$midcat' "));
      while ($row2 = mysqli_fetch_assoc($query2)) {
        array_push($products, $row2['p_id']);
      }
      return $products;
    }

    if ($endcat != 0) {
      $products = array();
      include "/Applications/XAMPP/xamppfiles/htdocs/sky/core/conf.php";
      $query3  = $mysqli->query(("SELECT * FROM  products WHERE  ecat_id = '$endcat' "));
      while ($row3 = mysqli_fetch_assoc($query3)) {
        array_push($products, $row3['p_id']);
      }
      return $products;
    }
  }


  public function makeproduct_url_mcat($mcat_id)
  {
    include "/Applications/XAMPP/xamppfiles/htdocs/sky/core/conf.php";
    $query = $mysqli->query("SELECT * FROM mcat_name WHERE midcat_id='$mcat_id'");
    $row = mysqli_fetch_assoc($query);
    $topcat_id  = $row['tcat_id'];
    $query2 = $mysqli->query("SELECT * FROM top_cat WHERE id='$topcat_id'");
    $row2 = mysqli_fetch_assoc($query2);
    $topcat_name = $row2['name'];
    $topcat_name = str_replace(" ", "-", $topcat_name);
    return  $topcat_name;
  }


  public function makeproduct_url_ecat_mcat($ecat_id)
  {
    include "/Applications/XAMPP/xamppfiles/htdocs/sky/core/conf.php";
    $query = $mysqli->query("SELECT * FROM end_category WHERE id='$ecat_id'");
    $row = mysqli_fetch_assoc($query);
    $midcat_id  = $row['mctat_id'];

    $query2 = $mysqli->query("SELECT * FROM mcat_name WHERE midcat_id='$midcat_id'");
    $row2 = mysqli_fetch_assoc($query2);
    $midcat_name = $row2['mcat_name'];

    $midcat_name = str_replace(" ", "-", $midcat_name);
    return  $midcat_name;
  }

  public function makeproduct_url_ecat_tcat($ecat_id)
  {
    include "/Applications/XAMPP/xamppfiles/htdocs/sky/core/conf.php";
    $query = $mysqli->query("SELECT * FROM end_category WHERE id='$ecat_id'");
    $row = mysqli_fetch_assoc($query);
    $midcat_id  = $row['mctat_id'];
    $query2 = $mysqli->query("SELECT * FROM mcat_name WHERE midcat_id='$midcat_id'");
    $row2 = mysqli_fetch_assoc($query2);
    $topcat_id = $row2['tcat_id'];
    $query3 = $mysqli->query("SELECT * FROM top_cat WHERE id='$topcat_id'");
    $row3 = mysqli_fetch_assoc($query3);
    $topcat_name = $row3['name'];
    $topcat_name = str_replace(" ", "-", $topcat_name);
    return  $topcat_name;
  }


  public function  get_tcat_name_by_tcat_id($tcat_id)
  {
    include "/Applications/XAMPP/xamppfiles/htdocs/sky/core/conf.php";
    $query = $mysqli->query("SELECT * FROM top_cat WHERE id='$tcat_id'");
    $row = mysqli_fetch_assoc($query);
    return $row['name'];
  }


  public function  get_dastebandi_mcat_id($mcat_id)
  {
    include "/Applications/XAMPP/xamppfiles/htdocs/sky/core/conf.php";
    $query = $mysqli->query("SELECT * FROM mcat_name WHERE midcat_id='$mcat_id'");
    $row = mysqli_fetch_assoc($query);
    $mcat_name =  $row['mcat_name'];
    $tcat_id = $row["tcat_id"];

    $query2 = $mysqli->query("SELECT * FROM top_cat WHERE id='$tcat_id'");
    $row2 = mysqli_fetch_assoc($query2);
    $tcat_name =  $row2['name'];
    return   $tcat_name . " / " . $mcat_name;
  }




  public function  get_dastebandi_ecat_id($ecat_id)
  {
    include "/Applications/XAMPP/xamppfiles/htdocs/sky/core/conf.php";
    $query = $mysqli->query("SELECT * FROM end_category WHERE id='$ecat_id'");
    $row = mysqli_fetch_assoc($query);
    $ecat_name = $row['ecat_name'];
    $mcat_id =  $row['mctat_id'];
    $tcat_id = $row["tcat_id"];

    $query2 = $mysqli->query("SELECT * FROM mcat_name WHERE midcat_id='$mcat_id'");
    $row2 = mysqli_fetch_assoc($query2);
    $mcat_name =  $row2['mcat_name'];


    $query2 = $mysqli->query("SELECT * FROM top_cat WHERE id='$tcat_id'");
    $row2 = mysqli_fetch_assoc($query2);
    $tcat_name =  $row2['name'];

    return   $tcat_name . "  /  " . $mcat_name . "  /  " . $ecat_name;
  }





  public function  get_dastebandi_mahsol($p_id)
  {
    include "/Applications/XAMPP/xamppfiles/htdocs/sky/core/conf.php";
    $query = $mysqli->query("SELECT * FROM products WHERE p_id='$p_id'");
    $row = mysqli_fetch_assoc($query);
    $ecat_id = $row['ecat_id'];
    $mcat_id =  $row['mcat_id'];
    $tcat_id = $row["tcat_id"];
    $pname  = $row['p_name'];


    $query2 = $mysqli->query("SELECT * FROM mcat_name WHERE midcat_id='$mcat_id'");
    $row2 = mysqli_fetch_assoc($query2);
    $mcat_name =  $row2['mcat_name'];


    if ($ecat_id != 0) {
      $query3 = $mysqli->query("SELECT * FROM end_category WHERE id='$ecat_id'");
      $row3 = mysqli_fetch_assoc($query3);
      $ecat_name =  $row2['mcat_name'];
    }

    $query2 = $mysqli->query("SELECT * FROM top_cat WHERE id='$tcat_id'");
    $row2 = mysqli_fetch_assoc($query2);
    $tcat_name =  $row2['name'];

    return   $tcat_name . "  /  " . $mcat_name . "  /  " . $ecat_name . $pname;
  }


  public function get_product_id_serached($search_for)
  {
    $products = array();
    include "/Applications/XAMPP/xamppfiles/htdocs/sky/core/conf.php";

      $query3 = $mysqli->query(("SELECT p_id FROM  products WHERE  (p_name LIKE '%$search_for%' OR  tcat_name LIKE '%$search_for%' OR mcat_name LIKE '%$search_for%' OR ecat_name LIKE '%$search_for%')"));
      while ($row3 = mysqli_fetch_assoc($query3)) {
        array_push($products, $row3['p_id']);
      }
    

    return $products;
  }
}
