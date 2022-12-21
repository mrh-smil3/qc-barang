
<?php

session_start(); 
if($_SESSION['username']==""){
  header("location:../../index.php?alert=belum_login");
}
include "template/sidebar.php";
// include "admin/template/navbar.php";
// include "../template/header.php";

require '../config/config.php';
  
  if (isset($_GET['id'])) {
   $forms = $collection->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
}

?>

<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="../../assets/img/banner.png" alt="" width="100%" height="" class="d-inline-block align-text-top">
    </a>
  </div>
</nav>


<!-- cetak form qc -->
<div class="container-fluid">
  
      <div class="col-md-3 my-4">
        <label class="form-label">FORM ID</label>
        <div class="input-group input-group-outline mb-4">
          <input type="text" class="form-control" name="form_id" placeholder="Form ID" value="<?php echo $forms->Form_id; ?>"  readonly>
        </div>
      </div>

      
        <div class="col-md-3">
          <label class="form-label">Tanggal Quality Control</label>
            <div class="input-group input-group-outline mb-4">
              <input type="text" class="form-control" name="tgl_qc" placeholder="Form ID" value="<?php echo $forms->Tanggal_qc; ?>"  readonly>
            </div>
          </div>
       
            <div class="col-md-3">
              <label class="form-label">User QC</label>
              <div class="input-group input-group-outline mb-4">
                <input type="text" class="form-control" name="user_qc" placeholder="Form ID" value="<?php echo $forms->User_qc; ?>"  readonly>
              </div>
            </div>
        

  <form>
    <table class="table table-bordered table-border-primary">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary text-s font-weight-bolder opacity-7 ps-2">No</th>
          <th class="text-uppercase text-secondary text-s font-weight-bolder opacity-7 ps-2">Nama Barang</th>
          <th class="text-uppercase text-secondary text-s font-weight-bolder opacity-7 ps-2">Quality Control</th>
          <th class="text-uppercase text-secondary text-s font-weight-bolder opacity-7 ps-3">Hasil</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <td rowspan="4">
            <h6 class="ps-2">1</h6>
          </td>
            <td rowspan="4">
              <input type="text" class="form-control ps-2" name="brg"  value="<?php echo $forms->Barang; ?>"  readonly >
            </td>
            <td>
                <span class="text-dark text-xs ps-2">Kondisi Barang</span>
            </td>
            <td>
                <input type="text" class="form-control ps-2" name="kondisi_barang"  value="<?php echo $forms->Kondisi_barang; ?>"  readonly>
            </td>
          </tr>

          <tr>
            <!-- <td colspan="2"></td> -->
              <td>
                  <span class="text-dark text-xs ps-2">Hasil Finishing</span>
              </td>
              <td>
                  <input type="text" class="form-control ps-2" name="kondisi_barang" value="<?php echo $forms->Kondisi_barang; ?>" readonly>
              </td>
          </tr>
          <tr>
            <!-- <td colspan="2"></td> -->
              <td>
                  <span class="text-dark text-xs ps-2">Aksesoris</span>
              </td>
              <td>
                  <input type="text" class="form-control ps-2" name="kondisi_barang"  value="<?php echo $forms->Aksesoris; ?>" readonly>
              </td>
          </tr>
          <tr>
            <!-- <td colspan="2"></td> -->
              <td>
                  <span class="text-dark text-xs ps-2">Jumlah Barang</span>
              </td>
              <td>
                  <input type="text" class="form-control ps-2" name="kondisi_barang"  value="<?php echo $forms->Qty; ?>" readonly>
              </td>
          </tr>
        </tbody>
    </table>
  </form>
  <div class="ps-4">
    <label class="form-label">Catatan :</label>
    <div class="input-group input-group-dynamic mb-4">
      
      <input type="text" class="form-control" value="<?php echo $forms->Note; ?>" readonly>
    </div>
    <td>
      <span class="text-dark text-xs ps-2"><i>Dicetak Oleh <?php echo $_SESSION['nama'] ?> pada tanggal <?php date_default_timezone_set("Asia/Jakarta"); echo date("d F Y H:i:s"); ?></i></span>
    </td>
  </div>



  <!-- <button id="print-button" class="btn btn-outline-info" >Cetak</button> -->

  <button id="print-button" onclick="window.print()" class="btn">Cetak</button>

  <script>
    function hidePrintButton() {
  // Mengakses tombol print
  var printButton = document.getElementById("print-button");
  window.print();


  // Menyembunyikan tombol print
  printButton.style.display = "none";
}

  </script>
</div>



<!-- footer -->
<?php include 'template/footer.php' ?>