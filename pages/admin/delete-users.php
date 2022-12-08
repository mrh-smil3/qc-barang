<?php
include "template/sidebar.php";
include "template/navbar.php";



require '../config/config.php';

// $id = $_GET['id']
$users->deleteOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
// $collection->deleteOne(array('_id' => new MongoId($id), true);



  $_SESSION['success'] = "User deleted successfully";
      
  header("Location: users.php ");
  


?>