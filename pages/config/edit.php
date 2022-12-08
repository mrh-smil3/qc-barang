
<?php






if(isset($_POST['submit'])){


   require 'config.php';

}

?>
<header></header>

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
        
        <input type="text" class="form-control" name="status" placeholder="Status" required>
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
      <a href="?p=form_qc"><button name="submit" type="submit" class="btn bg-gradient-success btn-block mb-3" data-bs-toggle="modal" data-bs-target="">Submit</button>
      <a href="?p=form_qc"><button type="button" name="cancel" class="btn bg-gradient-danger btn-block mb-3" data-bs-toggle="modal" data-bs-target="#modal-form">Back</button>
    </div>
    </div>   
  </form>
