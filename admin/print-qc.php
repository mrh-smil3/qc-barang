
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

<div class="card-body">
<div class="table-responsive">
<form method="POST" action="">
  <div class="row">
    <div class="col-md-4">
      <br>
      <label>Form ID</label>
      <div class="input-group input-group-outline my-3">
        <input type="text" class="form-control" name="form_id" placeholder="Form ID" value="<?php echo $forms->Form_id; ?>" disabled required>
      </div>
    </div>
</div>

    <div class="row">
    <div class="col-md-6">
      <label>ID Barang</label>
      <div class="form-check form-check-inline col-md-4"></div>
      <label>Nama Barang</label>
      <div class="input-group input-group-outline my-3">
        <input type="text" class="form-control" name="id_barang" placeholder="ID Barang" value="<?php echo $forms->Barang->Id_barang; ?>" disabled required>
        <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang" value="<?php echo $forms->Barang->Nama_barang; ?>" disabled required>
      </div>
    </div>

    <div class="row">
      <label>Kondisi barang</label>
      <div class="form-check mb-3">
        <div class="">
          <input class="form-check-input" type="radio" name="kondisi_barang" value="Baik" <?php if ($forms->Kondisi_barang == 'Baik') echo 'checked="checked"'; ?> id="customRadio1" disabled required>
            <label class="custom-control-label" for="customRadio1">Baik</label>
          <div class="form-check form-check-inline"></div>
          <input class="form-check-input" type="radio" name="kondisi_barang" value="Kurang Baik" id="customRadio2" <?php if ($forms->Kondisi_barang == 'Kurang Baik') echo 'checked="checked"'; ?> disabled required>
            <label class="custom-control-label" for="customRadio2">Kurang Baik</label>
        </div>
      </div>
    </div>

    <div class="row">
      <label>Hasil Finishing</label>
      <div class="form-check mb-3">
        <div class="">
          <input class="form-check-input" type="radio" name="hasil_finishing" value="Baik" <?php if ($forms->Hasil_finishing == 'Baik') echo 'checked="checked"'; ?> id="customRadio1" disabled required>
            <label class="custom-control-label" for="customRadio1">Baik</label>
          <div class="form-check form-check-inline"></div>
          <input class="form-check-input" type="radio" name="hasil_finishing" value="Kurang Baik" <?php if ($forms->Hasil_finishing == 'Kurang Baik') echo 'checked="checked"'; ?> id="customRadio2" disabled required>
            <label class="custom-control-label" for="customRadio2">Kurang Baik</label>
        </div>
      </div>
    </div>

    <div class="row">
      <label>Aksesoris</label>
      <div class="form-check mb-3">
        <div class="">
          <input class="form-check-input" type="radio" name="aksesoris" value="Lengkap" <?php if ($forms->Aksesoris == 'Lengkap') echo 'checked="checked"'; ?> id="customRadio1" disabled required>
            <label class="custom-control-label" for="customRadio1">Lengkap</label>
          <div class="form-check form-check-inline"></div>
          <input class="form-check-input" type="radio" name="aksesoris" value="Kurang Lengkap" <?php if ($forms->Aksesoris == 'Kurang Lengkap') echo 'checked="checked"'; ?> id="customRadio2" disabled required>
            <label class="custom-control-label" for="customRadio2">Kurang Lengkap</label>
        </div>
      </div>
    </div>
 

    <div class="row">
    <div class="col-md-2">
      <label>Jumlah Barang</label>
      <div class="input-group input-group-outline my-3">
        <input type="number" class="form-control" name="jml_barang" value="<?php echo $forms->Qty; ?>"placeholder="Jumlah Barang" disabled required>
      </div>
    </div>


   
  
  <div class="row">
      <label>Status</label>
      <div class="form-check mb-3">
        <div class="">
          <input class="form-check-input" type="radio" name="status" value="Closed" <?php if ($forms->Status == 'Closed') echo 'checked="checked"'; ?> id="customRadio1" disabled required>
            <label class="custom-control-label" for="customRadio1">Closed</label>
          <div class="form-check form-check-inline"></div>
          <input class="form-check-input" type="radio" name="status" value="Open" <?php if ($forms->Status == 'Open') echo 'checked="checked"'; ?> id="customRadio2" disabled required>
            <label class="custom-control-label" for="customRadio2">Open</label>
        </div>
      </div>
    </div>

    <div class="row">
    <div class="col-md-6">
      <label>Note</label>
      <div class="input-group input-group-outline my-3">
        <input type="text" class="form-control" name="note" value="<?php echo $forms->Note; ?>" disabled placeholder="Note">
      </div>
    </div>
    
  
    <div class="input-group input-group-static my-3">
      <label>Tanggal Quality Control</label>
      <input type="date" class="form-control" name="date" value="<?php echo $forms->Tanggal_qc; ?>" disabled required>
    </div>

    <div class="col-md-4">
      <button onclick="window.print();" name="print" type="submit" class="btn" data-bs-toggle="modal" data-bs-target="">Print</button>
      
    </div>
    </div>   
  </form>
</div>
</div>
