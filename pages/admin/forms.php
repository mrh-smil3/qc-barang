<?php 
session_start(); 
if($_SESSION['username']==""){
  header("location:../../index.php?alert=belum_login");
}
include 'template/sidebar.php';
include 'template/navbar.php';




?>

<header></header>
<div class="col-md-4">
    <a href="create-forms.php"><button type="button" class="btn bg-gradient-success btn-block mb-3" data-bs-toggle="modal" data-bs-target="#modal-form"><span class="material-icons">note_add </span>Tambah Form QC</button></a>
    <?php

   // if(isset($_SESSION['success'])){

   //    echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";

   // }


?>
</div>


<div class="card">
  <div class="table-responsive">
    <table class="table align-items-center mb-0">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Form ID</th>
          <!-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Barang</th> -->
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal QC</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Note</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>
          
        </tr>
      </thead>
      <tbody>
        <?php
          
          require "../config/config.php";
          $cursor = $collection->find([], ['sort' => ['_id' => -1]]);

          $form_qc = $collection->find([]);

          foreach($form_qc as $formId) {
             echo "<tr>";
               
               echo '<td >'.'<div class="d-flex px-2">'.
              '<div>'.
                '<i class="material-icons">feed</i>'.
              '</div>'.'<div class="badge badge-dot me-4">'.'<h6 class="text-xs font-weight-bold mb-0">'.$formId->Form_id.'</h6>'.'</td>'.'</div>';
               
               echo "<td>".$formId->Tanggal_qc."</td>";
               echo '<td class="align-middle ">'.$formId->Status.'</td>';
               echo "<td>".$formId->Note."</td>";
               echo '<td class ="align-middle">';
               echo "<a href='edit-forms.php?id=".$formId->_id."'<i class='material-icons'>edit_note</i>";
               echo "<a onClick=\"javascript: return confirm('Apakah Anda Yakin Untuk Menghapus?');\" name='delete' href='delete-forms.php?id=".$formId->_id."'<i class='material-icons'>delete</i>";
               echo "<a href='print-qc.php?id=".$formId->_id."'<i class='material-icons'>print</i>";
               echo '</td>';
             echo "</tr>";
          };

?>        



      </tbody>
    </table>
  </div>
  </div>
  <?php include 'template/footer.php' ?>