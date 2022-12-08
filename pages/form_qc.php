
<div class="card">
  <div class="table-responsive">
    <table class="table align-items-center mb-0">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Form ID</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal QC</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Note</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php


		      require_once '../config/config.php';


		      $form_qc = $collection->find([]);


		      foreach($form_qc as $formId) {
		         echo "<tr>";
			         echo "<td>".$formId->Form_id."</td>";
			         echo "<td>".$formId->Tanggal_qc."</td>";
			         echo "<td>".$formId->Status."</td>";
			         echo "<td>".$formId->Note."</td>";
		         echo "</tr>";
		      };


	   		?>
          <td class="align-middle">
            <button class="btn btn-link text-secondary mb-0">
              <span class="material-icons">
              more_vert
              </span>
            </button>
          </td>
        </tr>

        

      </tbody>
    </table>
  </div>
  </div>