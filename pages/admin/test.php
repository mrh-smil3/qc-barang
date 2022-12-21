
<?php 
session_start(); 
if($_SESSION['username']==""){
  header("location:../../index.php?alert=belum_login");
}
  include "template/sidebar.php";
  include "template/navbar.php";
  
 ?>
<!DOCTYPE html>
            <html lang="en">
            
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
                <!-- import bootstrap  -->
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
                    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
            </head>
            
            <body>
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
                <!-- membuat container dengan lebar colomn col-lg-10  -->
                <div class="container col-lg-10">
                    <!-- membuat tulisan alert berwarna hijau dengan tulisan di tengah  -->
                    
                    <!-- membuat card untuk membungkus tabel bootstrap  -->
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark">
                                    <!-- set table header  -->
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama Barang</th>
                                        <!-- <th scope="col">Deskripsi Barang</th>
                                        <th scope="col">Jenis Barang</th>
                                        <th scope="col">Harga Barang</th> -->
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        
                                        require '../config/config.php';


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
                                                            <form>
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlInput1">Nama Barang</label>
                                                                    <input type="text" class="form-control"
                                                                        value="<?php echo $data['nama_barang']; ?>">
                                                                </div>
                                                                
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
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
            