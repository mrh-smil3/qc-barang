
<?php 
session_start();
if($_SESSION['username']==""){
  header("location:../../index.php?alert=belum_login");
}
include 'template/sidebar.php';
include 'template/navbar.php';

// require "config/config.php";

// $forms = $collection->find([]);




          // include "header.php";

          // if(isset($_GET["dashboard"])){
          //   include "admin.php";
          // }else if(isset($_GET["users"])){
          //   include "users.php";
          // }else if(isset($_GET["forms"])){
          //   include "forms.php";
          // }else{
          //   include "admin.php";
          // }

          // include  "footer.php";
        ?>
<script src="../../assets/js/plugins/chartjs.min.js"></script>

<div class="row mt-4">
  <div class="col-lg-5 mb-lg-0 mb-4">
    <div class="card z-index-2 mt-4">
  <div class="card-body mt-n5 px-3">
    <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1 mb-3">
      <div class="chart">
        <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
      </div>
    </div>
    <h6 class="ms-2 mt-4 mb-0"> Active Users </h6>
    <p class="text-sm ms-2"> (<span class="font-weight-bolder">+11%</span>) than last week </p>
    <div class="container border-radius-lg">
      <div class="row">
        <div class="col-3 py-3 ps-0">
          <div class="d-flex mb-2">
            <div class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">groups</i>
            </div>
            <p class="text-xs my-auto font-weight-bold">Users</p>
          </div>
          <h4 class="font-weight-bolder">42K</h4>
          <div class="progress w-75">
            <div class="progress-bar bg-dark w-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="col-3 py-3 ps-0">
          <div class="d-flex mb-2">
            <div class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-info text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">ads_click</i>
            </div>
            <p class="text-xs mt-1 mb-0 font-weight-bold">Clicks</p>
          </div>
          <h4 class="font-weight-bolder">1.7m</h4>
          <div class="progress w-75">
            <div class="progress-bar bg-dark w-90" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="col-3 py-3 ps-0">
          <div class="d-flex mb-2">
            <div class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-warning text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt</i>
            </div>
            <p class="text-xs mt-1 mb-0 font-weight-bold">Sales</p>
          </div>
          <h4 class="font-weight-bolder">399$</h4>
          <div class="progress w-75">
            <div class="progress-bar bg-dark w-30" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="col-3 py-3 ps-0">
          <div class="d-flex mb-2">
            <div class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-danger text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">category</i>
            </div>
            <p class="text-xs mt-1 mb-0 font-weight-bold">Items</p>
          </div>
          <h4 class="font-weight-bolder">74</h4>
          <div class="progress w-75">
            <div class="progress-bar bg-dark w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 
<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">feed</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">OPEN</p>
                <h4 class="mb-0">2,300</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
            </div>
          </div>
        </div> -->