<?php 
  include "template/sidebar.php";
  include "template/navbar.php";
  
 ?>

<?php

require "../config/config.php";

if (isset($_GET['id'])) {
   $users = $users->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
}

if(isset($_POST['submit'])){
   

  
   require '../config/config.php';

   $users->updateOne(
       ['_id' => new MongoDB\BSON\ObjectID($_GET['id'])],
       ['$set' => [
       'user_id' => $_POST['user_id'],
       'nama' => $_POST['nama'],
       'username' => $_POST['username'],
       'password' => $_POST['password'],
       'role' => $_POST['role'],]]
     );



   $_SESSION['success'] = "Edit User Success";
   header("Location:users.php");
 
   // echo '<div class="alert alert-success text-white" role="alert">
   //    <strong>Success!</strong> Edit Users
   //    </div>';

   }

?>

<div class="col-md-4">
    <!-- Button trigger modal -->
    <a href="users.php"><button type="button" class="btn bg-gradient-danger btn-block" data-bs-toggle="modal" data-bs-target="#exampleModalSignUp">
      back
    </button></a>

    <!-- Modal -->
    
      <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card">
              <div class="card-header pb-0 text-cener">
                  <h5 class="">Edit</h5>

              </div>
              <div class="card-body pb-3">
                <form role="form text-center" method="POST" action="">

                  <label class="form-label">User ID</label>
                  <div class="input-group input-group-outline my-0">
                      <input type="text" name="user_id" value="<?php echo $users->user_id; ?>" class="form-control">
                  </div>

                  <label>Nama</label>
                  <div class="input-group input-group-outline my-0">
                      <input type="text" name="nama" value="<?php echo $users->nama; ?>" class="form-control">
                  </div>

                  <label class="form-label">Username</label>
                  <div class="input-group input-group-outline my-0">
                      <input type="text" name="username" value="<?php echo $users->username; ?>" class="form-control">
                  </div>

                  <label class="form-label">Password</label>
                  <div class="input-group input-group-outline my-0">
                      <input type="password" name="password" value="<?php echo $users->password; ?>" class="form-control">
                  </div>

                  <label class="form-label">Role</label>
                  <div class="input-group input-group-outline my-0">
                      <select class="form-control" name="role" aria-label="Default select example">
                          <option selected disabled >Pilih Role</option>
                          <option value="Admin" <?php if ($users->role == 'Admin') echo 'selected="selected"'; ?> >Admin</option>
                          <option value="QC" <?php if ($users->role == 'QC') echo 'selected="selected"'; ?> >QC</option>
                          <option value="Customer" <?php if ($users->role == 'Customer') echo 'selected="selected"'; ?>>Customer</option>
                      </select>
                  </div>
                  
                  <div class="text-center">
                    <a href="users.php"> <button type="submit" name="submit" class="btn bg-gradient-primary btn-lg btn-rounded w-100 mt-4 mb-0">Edit</button></a>
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