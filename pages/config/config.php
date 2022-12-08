<?php


  require_once __DIR__ . "/vendor/autoload.php";


  $collection = (new MongoDB\Client)->qc_barang->form_qc;
  // $barang = (new MongoDB\Client)->qc_barang->Barang;
  $users = (new MongoDB\Client)->qc_barang->users;

  // var_dump($collection);
// require_once __DIR__ . '../vendor/autoload.php';
// // $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
// // $dotenv->load();

// $client = new MongoDB\Client(
//    'mongodb+srv://localhost:27017'
// );

// $collection = $client->selectCollection('qc_barang', 'form_qc');

  // pages dinamis
// $pages_dir = './pages/admin/'; //pages merupakan nama folder
//           if(!empty($_GET['p'])){ //kondisi apakan ada parameter p didalam url
//           $pages = scandir($pages_dir, 0);
//           unset($pages[0], $pages[1]);
                              
//           $p = $_GET['p'];
//           if(in_array($p.'.php', $pages)){
//             include($pages_dir.'/'.$p.'.php');
//           } else {
//             echo "Halaman tidak ditemukan!";       
//             }
//           } else {
//             include($pages_dir.'/home.php');
//           }



  // add users
  // if(isset($_POST['submit'])){
   

  
  //  require 'config.php';
  //  $add_user = $users->insertOne([
  //      'nama' => $_POST['tnama'],
  //      'username' => $_POST['tusername'],
  //      'password' => $_POST['tpassword'],
  //      'role' => $_POST['trole'],
  //  ]);



  //  $_SESSION['success'] = "";
 
  //  echo '<div class="alert alert-success text-white" role="alert">
  //     <strong>Success!</strong> This is a success alert—check it out!
  //     </div>';
  //    // window.location ("?p=users");
   
   
  //   // echo'<div class="alert alert-success text-white" role="alert">
  //   //   <strong>Success!</strong> This is a success alert—check it out!
  //   //   </div>';

  //  }


  // view users
  // require 'config.php';


  //         $users = $users->find([]);



  //         foreach($users as $user) {
  //            echo "<tr>";
               
  //              echo '<td >'.'<div class="d-flex px-2">'.
  //             '<div>'.
  //               '<i class="material-icons">account_circle</i>'.
  //             '</div>'.'<div class="badge badge-dot me-4">'.'<h6 class="text-xs font-weight-bold mb-0">'.$user->nama.'</h6>'.'</td>'.'</div>';
               
  //              echo "<td>"."<p class= 'text-xs font-weight-bold mb-0'>".$user->username."</p>"."</td>";
  //              echo "<td class ='align-middle text-center text-sm'>".$user->role."</td>";
  //              // echo "<td>".$user->role."</td>";
  //              echo '<td class="align-middle text-center">';
  //              echo "<a href='?p=form_qc?id=".$user->_id."' <i class='material-icons'>edit</i>";
  //              echo "<a href='/qc-barang/?p=delete_form_qc?id=".$user->_id."'  <i class='material-icons'>person_remove</i>";
  //              echo '</td>';
  //            echo "</tr>";
  //         };
?>