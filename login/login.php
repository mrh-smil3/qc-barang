
<?php 
// berfungsi mengaktifkan session
session_start();
 
// berfungsi menghubungkan koneksi ke database
include '../config/config.php';
 
// berfungsi menangkap data yang dikirim

$users = $users->find([]);

$username = $_POST['username'];
$password = $_POST['password'];


if (isset($_POST['login'])){
    foreach($users as $data) {

        // if($data['role'] == 'Admin'){
            if($data['role'] == 'Admin' && $data['username'] == $username && $data['password'] == $password){
                $_SESSION['username'] = $data['username'];
                $_SESSION['nama'] = $data['nama'];
                $_SESSION['role'] = $data['role'];
                header("Location:../admin/dashboard.php");
            }
        // }elseif($data['role'] == 'QC'){
            elseif($data['role'] == 'QC' && $data['username'] == $username && $data['password'] == $password){
                $_SESSION['username'] = $data['username'];
                $_SESSION['nama'] = $data['nama'];
                $_SESSION['role'] = $data['role'];
                header("Location:../users/dashboard.php");
            }elseif($data['role'] != 'QC' && $data['username'] != $username && $data['password'] != $password){
                echo'login gagal';
                header("Location:../../index.php?alert=gagal");
        }    
        }
    }



?>