
<?php

    include 'template/sidebar.php';
    include 'template/navbar.php';
    

   require '../config/config.php';

    if(isset($_POST['submit'])){

    function getNextSequenceValue($sequenceName) {
       global $counters;
       $result = $counters->findOneAndUpdate(
          ['_id' => $sequenceName],
          ['$inc' => ['seq' => 1]],
          ['returnDocument' => MongoDB\Operation\FindOneAndUpdate::RETURN_DOCUMENT_AFTER]
       );
       return "FQC-".$result->seq;
    }

// Menambahkan document baru ke collection "formid"
    $newId = getNextSequenceValue("formid");
   $insertOneResult = $collection->insertOne([
        'Form_id'=> $newId,
        'Barang' => $_POST['brg'],
      
       'Kondisi_barang' => $_POST['kondisi_barang'],
       'Hasil_finishing' => $_POST['hasil_finishing'],
       'Aksesoris' => $_POST['aksesoris'],
       'Qty' => $_POST['jml_barang'],
       'Status' => $_POST['status'],
       'Note' => $_POST['note'],
       'User_qc' => $_POST['user_qc'],
       'Tanggal_qc' => $_POST['date'],

   ]);


   $_SESSION['success'] = "Form QC created successfully";
   echo '<div class="alert alert-success text-white" role="alert">
      <strong>Success!</strong> Add Forms
      </div>';
   header("Location: forms.php");
      


}

?>

<div class="card-body">
<div class="table-responsive">
<form method="POST" action="" class="was-validated">

  

    <div class="row">
      <div class="form-check mb-3 col-md-3">
        <label>Nama Barang</label>
          <div class="">
            <?php 
              $cursor = $barang->find();

              // Buat dropdown HTML
              echo '<div class="input-group input-group-outline my-3">';
              echo '<select class="form-select" name="brg" required aria-label="Pilih barang">';
              echo '<option value="">'. ' Pilih Barang' . '</option>';

              // Tampilkan semua dokumen dari collection sebagai option dropdown
              foreach ($cursor as $brg) {

                 echo '<option value="' . $brg['nama_barang'] . '">' . $brg['nama_barang'] . '</option>';
              }

              echo '</select>';
              echo '</div>';
            ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="form-check mb-3">
          <label>Kondisi barang</label>
          <div class="">
            <input class="form-check-input" type="radio" name="kondisi_barang" value="Baik" id="validationFormCheck2" required>
              <label class="custom-control-label form-check-label" for="validationFormCheck2" >Baik</label>
            <div class="form-check form-check-inline"></div>
            <input class="form-check-input" type="radio" name="kondisi_barang" value="Kurang Baik" id="customRadio2" id="validationFormCheck3" required>
              <label class="custom-control-label form-check-label" for="customRadio2">Kurang Baik</label>
              <div class="invalid-feedback">Pilih Kondisi Barang</div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="form-check mb-3">
          <label>Hasil Finishing</label>
          <div class="">
            <input class="form-check-input" type="radio" name="hasil_finishing" value="Baik" id="customRadio1" required>
              <label class="custom-control-label form-check-label" for="customRadio1">Baik</label>
            <div class="form-check form-check-inline"></div>
            <input class="form-check-input" type="radio" name="hasil_finishing" value="Kurang Baik" id="customRadio2" required>
              <label class="custom-control-label form-check-label" for="customRadio2">Kurang Baik</label>
              <div class="invalid-feedback">Pilih Hasi Finishing</div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="form-check mb-3">
          <label>Aksesoris</label>
          <div class="">
            <input class="form-check-input" type="radio" name="aksesoris" value="Lengkap" id="customRadio1" required>
              <label class="custom-control-label form-check-label" for="customRadio1">Lengkap</label>
            <div class="form-check form-check-inline"></div>
            <input class="form-check-input" type="radio" name="aksesoris" value="Kurang Lengkap" id="customRadio2" required>
              <label class="custom-control-label form-check-label" for="customRadio2">Kurang Lengkap</label>
              <div class="invalid-feedback">Pilih kelengkapan aksesoris</div>
          </div>
        </div>
      </div>
   

      <div class="row">
        <div class="form-check mb-3 col-md-3">
          <div class="input-group input-group-outline mb-4">
            <label class="form-label form-check-label">Jumlah Barang</label>
            <input type="number" class="form-control" name="jml_barang"  required>
            <div class="invalid-feedback">Masukkan jumlah barang</div>
          </div>
        </div>
      </div>


   
      
      <div class="row">
          <div class="form-check mb-3">
            <label>Status</label>
            <div class="">
              <input class="form-check-input" type="radio" name="status" value="Closed" id="customRadio1" required>
                <label class="custom-control-label form-check-label" for="customRadio1">Closed</label>
              <div class="form-check form-check-inline"></div>
              <input class="form-check-input " type="radio" name="status" value="Open" id="customRadio2" required>
                <label class="custom-control-label form-check-label" for="customRadio2">Open</label>
              <div class="invalid-feedback">Pilih status barang</div>
            </div>
          </div>
      </div>

    <div class="row">
      <div class="form-check mb-3">
        <div class="input-group input-group-outline mb-3">
            <label class="form-label">Note</label>
            <input type="text" name="note" class="form-control">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="form-check mb-3 col-md-3">
        <label>User QC</label>
          <div class="">
            <?php 
              $user = $users->find();

              // Buat dropdown HTML
              echo '<div class="input-group input-group-outline my-3">';
              echo '<select class="form-select" name="user_qc" required aria-label="Pilih User QC">';
              echo '<option value="">'. ' Pilih User QC' . '</option>';

              // Tampilkan semua dokumen dari collection sebagai option dropdown
              foreach ($user as $usr) {

                 echo '<option value="' . $usr['nama'] . '">' . $usr['nama'] . '</option>';
              }

              echo '</select>';
              echo '</div>';
            ?>
          </div>
        </div>
      </div>
    
    <div class="row">
      <div class="form-check mb-3">
        <div class="input-group input-group-static mb-4">
          <label >Date</label>
          <input type="date" class="form-control" name="date" required>
          <div class="invalid-feedback">Masukkan tanggal qc</div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="form-check mb-3 col-md-4">
        <a href="forms.php"><button name="submit" type="submit" class="btn bg-gradient-success btn-block mb-3" data-bs-toggle="modal" data-bs-target="">Submit</button></a>
        <a href="forms.php"><button type="button" name="cancel" class="btn bg-gradient-danger btn-block mb-3" data-bs-toggle="modal" data-bs-target="#modal-form">Back</button></a>
      </div>
    </div>   
  </form>
</div>
</div>

<!-- footer -->
<?php include 'template/footer.php' ?>
