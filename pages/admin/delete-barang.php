<?php

include "template/sidebar.php";
include "template/navbar.php";



require '../config/config.php';

// $id = $_GET['id']
$barang->deleteOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
// $collection->deleteOne(array('_id' => new MongoId($id), true);



  $_SESSION['delete-brg'] = "Barang deleted successfully";
      
  header("Location: barang.php ");
  


?>