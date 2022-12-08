<?php

if($_SESSION['username']==""){
  header("location:../../index.php?alert=belum_login");
}
include "template/sidebar.php";
include "template/navbar.php";

require '../config/config.php';

// $id = $_GET['id']
$collection->deleteOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
// $collection->deleteOne(array('_id' => new MongoId($id), true);



  $_SESSION['success'] = "Form QC deleted successfully";
      
  header("Location: forms.php ");
  


?>