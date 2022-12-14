
<?php

include "../template/sidebar.php";
include "../template/header.php";

require '../config/config.php';
  
  if (isset($_GET['id'])) {
   $forms = $collection->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
}
if(isset($_POST['submit'])){


   $collection->updateOne(
       ['_id' => new MongoDB\BSON\ObjectID($_GET['id'])],
       ['$set' => [
        'Form_id' => $_POST['form_id'],
       'Barang' => array (
              'Id_barang' => $_POST['id_barang'],
              'Nama_barang' => $_POST['nama_barang']
       ),
       'Kondisi_barang' => $_POST['kondisi_barang'],
       'Hasil_finishing' => $_POST['hasil_finishing'],
       'Aksesoris' => $_POST['aksesoris'],
       'Qty' => $_POST['jml_barang'],
       'Status' => $_POST['status'],
       'Note' => $_POST['note'],
       'Tanggal_qc' => $_POST['date'],]]
   );


   $_SESSION['success'] = "Form QC updated successfully";
   header("Location: forms.php");
}




?>

<div class="container">
   <h1>Edit Form QC</h1>
   <a href="forms.php" class="btn btn-primary">Back</a>

<div class="card-body">
<div class="table-responsive">
<form method="POST" action="">
  <div class="row">
    <div class="col-md-6">
      <div class="input-group input-group-outline my-3">
        <input type="text" class="form-control" name="form_id" placeholder="Form ID" value="<?php echo $forms->Form_id; ?>"  required>
      </div>
    </div>
</div>

    <div class="row">
    <div class="col-md-6">
      <div class="input-group input-group-outline my-3">
        <input type="text" class="form-control" name="id_barang" placeholder="ID Barang" value="<?php echo $forms->Barang->Id_barang; ?>" required>
        <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang" value="<?php echo $forms->Barang->Nama_barang; ?>"required>
      </div>
    </div>

    <div class="row">
      <label>Kondisi barang</label>
      <div class="form-check mb-3">
        <div class="">
          <input class="form-check-input" type="radio" name="kondisi_barang" value="Baik" <?php if ($forms->Kondisi_barang == 'Baik') echo 'checked="checked"'; ?> id="customRadio1" required>
            <label class="custom-control-label" for="customRadio1">Baik</label>
          <div class="form-check form-check-inline"></div>
          <input class="form-check-input" type="radio" name="kondisi_barang" value="Kurang Baik" id="customRadio2" <?php if ($forms->Kondisi_barang == 'Kurang Baik') echo 'checked="checked"'; ?> required>
            <label class="custom-control-label" for="customRadio2">Kurang Baik</label>
        </div>
      </div>
    </div>

    <div class="row">
      <label>Hasil Finishing</label>
      <div class="form-check mb-3">
        <div class="">
          <input class="form-check-input" type="radio" name="hasil_finishing" value="Baik" <?php if ($forms->Hasil_finishing == 'Baik') echo 'checked="checked"'; ?> id="customRadio1" required>
            <label class="custom-control-label" for="customRadio1">Baik</label>
          <div class="form-check form-check-inline"></div>
          <input class="form-check-input" type="radio" name="hasil_finishing" value="Kurang Baik" <?php if ($forms->Hasil_finishing == 'Kurang Baik') echo 'checked="checked"'; ?> id="customRadio2" required>
            <label class="custom-control-label" for="customRadio2">Kurang Baik</label>
        </div>
      </div>
    </div>

    <div class="row">
      <label>Aksesoris</label>
      <div class="form-check mb-3">
        <div class="">
          <input class="form-check-input" type="radio" name="aksesoris" value="Lengkap" <?php if ($forms->Aksesoris == 'Lengkap') echo 'checked="checked"'; ?> id="customRadio1" required>
            <label class="custom-control-label" for="customRadio1">Lengkap</label>
          <div class="form-check form-check-inline"></div>
          <input class="form-check-input" type="radio" name="aksesoris" value="Kurang Lengkap" <?php if ($forms->Aksesoris == 'Kurang Lengkap') echo 'checked="checked"'; ?> id="customRadio2" required>
            <label class="custom-control-label" for="customRadio2">Kurang Lengkap</label>
        </div>
      </div>
    </div>
 

    <div class="row">
    <div class="col-md-6">
      <div class="input-group input-group-outline my-3">
        <input type="number" class="form-control" name="jml_barang" value="<?php echo $forms->Qty; ?>"placeholder="Jumlah Barang" required>
      </div>
    </div>


   
  
  <div class="row">
      <label>Status</label>
      <div class="form-check mb-3">
        <div class="">
          <input class="form-check-input" type="radio" name="status" value="Closed" <?php if ($forms->Status == 'Closed') echo 'checked="checked"'; ?> id="customRadio1" required>
            <label class="custom-control-label" for="customRadio1">Closed</label>
          <div class="form-check form-check-inline"></div>
          <input class="form-check-input" type="radio" name="status" value="Open" <?php if ($forms->Status == 'Open') echo 'checked="checked"'; ?> id="customRadio2" required>
            <label class="custom-control-label" for="customRadio2">Open</label>
        </div>
      </div>
    </div>

    <div class="row">
    <div class="col-md-6">
      <div class="input-group input-group-outline my-3">
        <input type="text" class="form-control" name="note" value="<?php echo $forms->Note; ?>" placeholder="Note">
      </div>
    </div>
    
  
    <div class="input-group input-group-static my-3">
      <label>Date</label>
      <input type="date" class="form-control" name="date" value="<?php echo $forms->Tanggal_qc; ?>" required>
    </div>

    <div class="col-md-4">
      <a href="forms.php"><button name="submit" type="submit" class="btn bg-gradient-success btn-block mb-3" data-bs-toggle="modal" data-bs-target="">Submit</button>
      
    </div>
    </div>   
  </form>
</div>
</div>
