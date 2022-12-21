<?php 
session_start(); 
if($_SESSION['username']==""){
  header("location:../../index.php?alert=belum_login");
}
  include "template/sidebar.php";
  include "template/navbar.php";
  
 ?>

<?php
require '../config/config.php';

if (isset($_GET['edit'])) {
   $barang = $barang->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
}

if(isset($_POST['t-barang'])){
   

  function getNextSequenceValue($idBarang) {
       global $counters;
       $result = $counters->findOneAndUpdate(
          ['_id' => $idBarang],
          ['$inc' => ['seq' => 1]],
          ['returnDocument' => MongoDB\Operation\FindOneAndUpdate::RETURN_DOCUMENT_AFTER]
       );
       return "BR-".$result->seq;
    }

// Menambahkan document baru ke collection "idbarang"
    $newId = getNextSequenceValue("idbarang");
   
   $add_barang = $barang->insertOne([
       'id_barang' => $newId,
       'nama_barang' => $_POST['nama_barang'],
       
   ]);



   $_SESSION['success'] = "";
 
   echo '<div class="alert alert-success text-white" role="alert">
      <strong>Success!</strong> Add Barang
      </div>';
     // window.location ("?p=users");
   
   
    // echo'<div class="alert alert-success text-white" role="alert">
    //   <strong>Success!</strong> This is a success alert—check it out!
    //   </div>';

   };
   if (isset($_SESSION['delete-brg'])){
    echo '<div class="alert alert-success text-white" role="alert">
      <strong>Success!</strong> Delte Barang
      </div>';
   }

?>


<div class="col-md-4">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-form">Tambah Barang</button>
    
    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card card-plain">
              <div class="card-header pb-0 text-left">
                <h5 class="">Tambah Barang</h5>
              </div>
              <div class="card-body">
                <form role="form text-left" method="POST" action="">
                  
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" required >
                  </div>
                  <div class="text-center">
                    <button type="submit" name="t-barang" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Tambah</button>
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



<!-- view all data barang and edit barang -->

<div class="card">
  <div class="table-responsive">
    <form method="POST">
    <table class="table align-items-center mb-0">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID Barang</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Barang</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
        </tr>
      </thead>
      <tbody>

                                        <?php
                                        
                                        require '../config/config.php';

                                        // update barang

                                        if(isset($_POST['edit'])){

                                         $barang->updateOne(
                                             ['id_barang' => $_POST['id_barang']],
                                             ['$set' => [

                                              'nama_barang' => $_POST['nama_barang'],]]
                                         );
                                         $_SESSION['success'] = "Form QC updated successfully";
                                         echo '<div class="alert alert-success text-white" role="alert">
                                            <strong>Success!</strong> Edit Barang
                                            </div>';
                                         
                                      }

                                      // hapus barang
                                      if(isset($_POST['hapus'])){
                                        $barang->deleteOne(['id_barang' => $_POST['id_barang']]);
                                        $_SESSION['success'] = "Form QC updated successfully";
                                         echo '<div class="alert alert-danger text-white" role="alert">
                                            <strong>Success!</strong> Barang dihapus
                                            </div>';
                                      }

                                      $barang = $barang->find([]);

                                      foreach($barang as $data) {
                                    ?>
                                    <tr>
            
                                        <!-- menampilkan data dengan menggunakan array  -->
                                        <td><?php echo $data['id_barang']; ?></td>
                                        <td><?php echo $data['nama_barang']; ?></td>
                                        <!-- <td><?php echo $data['deskripsi_barang']; ?></td>
                                        <td><?php echo $data['jenis_barang']; ?></td>
                                        <td><?php echo $data['harga_barang']; ?></td> -->
                                        <td>
            
                                            <!-- membuat tombol dengan ukuran small berwarna biru  -->
                                            <!-- data-target setiap modal harus berbeda, karena akan menampilkan data yang berbeda pula
                                            caranya membedakannya, gunakan id_barang sebagai pembeda data-target di setiap modal -->
                                            <a href="" class="btn btn-sm btn-info" data-toggle="modal"
                                                data-target="#modal<?php echo $data['id_barang']; ?>">Edit</a>
                                            
                                            <button type="submit" name="hapus"  onclick="return confirm('Apakah kamu yakin ingin menghapus ?')" class="btn btn-sm btn-danger" ata-target="<?php echo $data['id_barang']; ?>">Delete</button>
            
                                            <!-- untuk melihat bentuk-bentuk modal kalian bisa mengunjungi laman bootstrap dan cari modal di kotak pencariannya -->
                                            <!-- id setiap modal juga harus berbeda, cara membedakannya dengan menggunakan id_barang -->
                                            <div class="modal fade" id="modal<?php echo $data['id_barang']; ?>" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Barang</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <!-- di dalam modal-body terdapat 4 form input yang berisi data.
                        data-data tersebut ditampilkan sama seperti menampilkan data pada tabel. -->
                                                        <div class="modal-body">
                                                            <form method="POST" action="">
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlInput1">Nama Barang</label>
                                                                    <input type="text" name="id_barang" class="form-control"
                                                                        value="<?php echo $data['id_barang']; ?>" readonly>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlInput1">Nama Barang</label>
                                                                    <input type="text" name="nama_barang" class="form-control"
                                                                        value="<?php echo $data['nama_barang']; ?>">
                                                                </div>
                                                                
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" name="edit" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } ?>
            
          

      </tbody>
    </table>
    </form>
  </div>
</div>
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
                </script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
                </script>
            </body>
            
            </html>
<?php include 'template/footer.php' ?>