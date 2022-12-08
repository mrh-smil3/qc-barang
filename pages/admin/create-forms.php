
<?php
    include 'template/sidebar.php';
    include 'template/navbar.php';
    

   require '../config/config.php';
   // $barang = array('B01' => 'Kursi' , 'B02' => 'Meja', 'B03' => 'Almari' );

    if(isset($_POST['submit'])){

   $insertOneResult = $collection->insertOne([
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
       'Tanggal_qc' => $_POST['date'],

   ]);


   $_SESSION['success'] = "Form QC created successfully";
   header("Location: forms.php");
      
# lang = []
        # for i in "1234567":
        #     try:
        #         if request.form['language' + i] != "":
        #             lang.append(request.form['language' + i])
        #     except Exception as e:
        #         pass
        # update_data['Language'] = lang

}

?>

<div class="card-body">
<div class="table-responsive">
<form method="POST" action="">
  <div class="row">
    <div class="col-md-6">
      <div class="input-group input-group-outline my-3">
        <input type="text" class="form-control" name="form_id" placeholder="Form ID" required>
      </div>
    </div>
</div>

    <div class="row">
    <div class="col-md-6">
      <div class="input-group input-group-outline my-3">
        <input type="text" class="form-control" name="id_barang" placeholder="ID Barang" required>
        <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang" required>
      </div>
    </div>

    <div class="row">
      <label>Kondisi barang</label>
      <div class="form-check mb-3">
        <div class="">
          <input class="form-check-input" type="radio" name="kondisi_barang" value="Baik" id="customRadio1" required>
            <label class="custom-control-label" for="customRadio1">Baik</label>
          <div class="form-check form-check-inline"></div>
          <input class="form-check-input" type="radio" name="kondisi_barang" value="Kurang Baik" id="customRadio2" required>
            <label class="custom-control-label" for="customRadio2">Kurang Baik</label>
        </div>
      </div>
    </div>

    <div class="row">
      <label>Hasil Finishing</label>
      <div class="form-check mb-3">
        <div class="">
          <input class="form-check-input" type="radio" name="hasil_finishing" value="Baik" id="customRadio1" required>
            <label class="custom-control-label" for="customRadio1">Baik</label>
          <div class="form-check form-check-inline"></div>
          <input class="form-check-input" type="radio" name="hasil_finishing" value="Kurang Baik" id="customRadio2" required>
            <label class="custom-control-label" for="customRadio2">Kurang Baik</label>
        </div>
      </div>
    </div>

    <div class="row">
      <label>Aksesoris</label>
      <div class="form-check mb-3">
        <div class="">
          <input class="form-check-input" type="radio" name="aksesoris" value="Lengkap" id="customRadio1" required>
            <label class="custom-control-label" for="customRadio1">Lengkap</label>
          <div class="form-check form-check-inline"></div>
          <input class="form-check-input" type="radio" name="aksesoris" value="Kurang Lengkap" id="customRadio2" required>
            <label class="custom-control-label" for="customRadio2">Kurang Lengkap</label>
        </div>
      </div>
    </div>
 

    <div class="row">
    <div class="col-md-6">
      <div class="input-group input-group-outline my-3">
        <input type="number" class="form-control" name="jml_barang" placeholder="Jumlah Barang" required>
      </div>
    </div>


   
  
  <div class="row">
      <label>Status</label>
      <div class="form-check mb-3">
        <div class="">
          <input class="form-check-input" type="radio" name="status" value="Closed" id="customRadio1" required>
            <label class="custom-control-label" for="customRadio1">Closed</label>
          <div class="form-check form-check-inline"></div>
          <input class="form-check-input" type="radio" name="status" value="Open" id="customRadio2" required>
            <label class="custom-control-label" for="customRadio2">Open</label>
        </div>
      </div>
    </div>

    <div class="row">
    <div class="col-md-6">
      <div class="input-group input-group-outline my-3">
        <input type="text" class="form-control" name="note" placeholder="Note">
      </div>
    </div>
    
  
    <div class="input-group input-group-static my-3">
      <label>Date</label>
      <input type="date" class="form-control" name="date" required>
    </div>

    <div class="col-md-4">
      <a href="forms.php"><button name="submit" type="submit" class="btn bg-gradient-success btn-block mb-3" data-bs-toggle="modal" data-bs-target="">Submit</button>
      <a href="forms.php"><button type="button" name="cancel" class="btn bg-gradient-danger btn-block mb-3" data-bs-toggle="modal" data-bs-target="#modal-form">Back</button>
    </div>
    </div>   
  </form>
</div>
</div>
