<?php


  require_once __DIR__ . "/vendor/autoload.php";


  $collection = (new MongoDB\Client)->qc_barang->form_qc;
  // $barang = (new MongoDB\Client)->qc_barang->Barang;
  $users = (new MongoDB\Client)->qc_barang->users;
  $counters = (new MongoDB\Client)->qc_barang->counters;
  $barang = (new MongoDB\Client)->qc_barang->barang;


?>