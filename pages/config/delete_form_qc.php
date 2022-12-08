<?php




require 'config.php';

// $id = $_GET['id']
$collection->deleteOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
// $collection->deleteOne(array('_id' => new MongoId($id), true);

$_SESSION['success'] = "";
echo '<div class="alert alert-danger text-white" role="alert">
      <strong>Deleted!</strong> This is a danger alert—check it out!
  </div>';


?>