<?php 
  include "template/sidebar.php";
  include "template/navbar.php";
  
 ?>

<?php




if(isset($_POST['submit'])){
   

  
   require '../config/config.php';
   $add_user = $users->insertOne([
       'user_id' => $_POST['user_id'],
       'nama' => $_POST['nama'],
       'username' => $_POST['username'],
       'password' => $_POST['password'],
       'role' => $_POST['role'],
   ]);



   $_SESSION['success'] = "";
 
   echo '<div class="alert alert-success text-white" role="alert">
      <strong>Success!</strong> Add Users
      </div>';
     // window.location ("?p=users");
   
   
    // echo'<div class="alert alert-success text-white" role="alert">
    //   <strong>Success!</strong> This is a success alert—check it out!
    //   </div>';

   }
    
  
   
   // $add_user = NULL;
   // echo . is_null($add_user) .'<div class="alert alert-success text-white" role="alert">
   //    <strong>Success!</strong> This is a success alert—check it out!
   //    </div>';
  

?>
<div class="col-md-4">
    <!-- Button trigger modal -->
    <button type="button" class="btn bg-gradient-info btn-block" data-bs-toggle="modal" data-bs-target="#exampleModalSignUp">
      Add User
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalSignUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalSignTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card card-plain">
              <div class="card-header pb-0 text-left">
                  <h5 class="">Tambah User</h5>

              </div>
              <div class="card-body pb-3">
                <form role="form text-left" method="POST" action="">
                  <div class="input-group input-group-outline my-3">
                      <label class="form-label">User ID</label>
                      <input type="text" name="user_id" class="form-control">
                  </div>
                  <div class="input-group input-group-outline my-3">
                      <label class="form-label">Nama</label>
                      <input type="text" name="nama" class="form-control">
                  </div>
                  <div class="input-group input-group-outline my-3">
                      <label class="form-label">Username</label>
                      <input type="text" name="username" class="form-control">
                  </div>
                  <div class="input-group input-group-outline my-3">
                      <label class="form-label">Password</label>
                      <input type="password" name="password" class="form-control">
                  </div>
                  <div class="input-group input-group-outline my-3">
                      <label class="form-label"></label>
                      <select class="form-control" name="role" aria-label="Default select example">
                          <option selected disabled>Pilih Role</option>
                          <option value="Admin">Admin</option>
                          <option value="QC">QC</option>
                          <option value="Customer">Customer</option>
                      </select>
                  </div>
                  
                  <div class="text-center">
                    <button type="submit" name="submit" class="btn bg-gradient-primary btn-lg btn-rounded w-100 mt-4 mb-0">Add User</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<div class="card">
  <div class="table-responsive">
    <table class="table align-items-center mb-0">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Username</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Role</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
        </tr>
      </thead>
      <tbody>
        
            <?php

          
          require '../config/config.php';


          $users = $users->find([]);



          foreach($users as $user) {
             echo "<tr>";
               
               echo '<td >'.'<div class="d-flex px-2">'.
              '<div>'.
                '<i class="material-icons">account_circle</i>'.
              '</div>'.'<div class="badge badge-dot me-4">'.'<h6 class="text-xs font-weight-bold mb-0">'.$user->nama.'</h6>'.'</td>'.'</div>';
               
               echo "<td>"."<p class= 'text-xs font-weight-bold mb-0'>".$user->username."</p>"."</td>";
               echo "<td class ='align-middle text-center text-sm'>".$user->role."</td>";
               // echo "<td>".$user->role."</td>";
               echo '<td class="align-middle text-center">';
               echo "<a href='edit-users.php?id=".$user->_id."' <i class='material-icons'>edit</i>";
               echo "<a onClick=\"javascript: return confirm('Apakah Anda Yakin Untuk Menghapus?');\" href='delete-users.php?id=".$user->_id."'  <i class='material-icons'>person_remove</i>";
               echo '</td>';
             echo "</tr>";
          };

?>        
          
          
          

      </tbody>
    </table>
  </div>
</div>

<?php include 'template/footer.php' ?>
