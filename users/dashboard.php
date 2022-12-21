
<?php
session_start(); 
if($_SESSION['username']==""){
  header("location:../../index.php?alert=belum_login");
}
include 'template/sidebar.php';
include 'template/navbar.php';

        ?>
<div class="container">
  <h3>Welcome <?php echo $_SESSION['nama'];?> !!</span></h3>
</div>
<div class="container text-center">
  <div class="row table-responsive">
    <div class="col">
      <div class="card">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Form ID</th>
                <!-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Barang</th> -->
                <!-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal QC</th> -->
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
            
                
              </tr>
            </thead>
            <tbody>
              <?php

                
                require "../config/config.php";


                $form_qc = $collection->find(['Status' => 'Open']);



                foreach($form_qc as $formId) {
                   echo '<tr class="table table-danger">';
                    
                     echo '<td >'.'<div class="d-flex px-2">'.
                    '<div>'.
                      '<i class="material-icons">feed</i>'.
                    '</div>'.'<div class="badge badge-dot me-4">'.'<h6 class="text-xs font-weight-bold mb-0">'.$formId->Form_id.'</h6>'.'</td>'.'</div>';
                     
                     // echo "<td>".$formId->Tanggal_qc."</td>";
                     echo '<td class="align-middle ">'.$formId->Status.'</td>';
                     // echo "<td>".$formId->Note."</td>";
                     // echo '<td class ="align-middle">';
                     // echo "<a href='edit-forms.php?id=".$formId->_id."'<i class='material-icons'>edit_note</i>";
                     // echo "<a onClick=\"javascript: return confirm('Apakah Anda Yakin Untuk Menghapus?');\" href='delete-forms.php?id=".$formId->_id."'<i class='material-icons'>delete</i>";
                     // echo "<a href='print-qc.php?id=".$formId->_id."'<i class='material-icons'>print</i>";
                     // echo '</td>';
                   echo "</tr>";
                
                };

      ?>        



          </tbody>
        </table>
      </div>
    </div>


    <div class="col">
      <div class="card">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Form ID</th>
                <!-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Barang</th> -->
                <!-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal QC</th> -->
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
            
                
              </tr>
            </thead>
            <tbody>
              <?php

                
                require "../config/config.php";


                $form_qc_2 = $collection->find(['Status' => 'Closed']);



                foreach($form_qc_2 as $formId) {
                   echo '<tr class="table table-success">';
                    
                     echo '<td >'.'<div class="d-flex px-2">'.
                    '<div>'.
                      '<i class="material-icons">feed</i>'.
                    '</div>'.'<div class="badge badge-dot me-4">'.'<h6 class="text-xs font-weight-bold mb-0">'.$formId->Form_id.'</h6>'.'</td>'.'</div>';
                     
                     // echo "<td>".$formId->Tanggal_qc."</td>";
                     echo '<td class="align-middle ">'.$formId->Status.'</td>';
                     // echo "<td>".$formId->Note."</td>";
                     // echo '<td class ="align-middle">';
                     // echo "<a href='edit-forms.php?id=".$formId->_id."'<i class='material-icons'>edit_note</i>";
                     // echo "<a onClick=\"javascript: return confirm('Apakah Anda Yakin Untuk Menghapus?');\" href='delete-forms.php?id=".$formId->_id."'<i class='material-icons'>delete</i>";
                     // echo "<a href='print-qc.php?id=".$formId->_id."'<i class='material-icons'>print</i>";
                     // echo '</td>';
                   echo "</tr>";
                
                };

      ?>        



          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
