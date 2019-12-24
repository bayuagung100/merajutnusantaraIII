<?php
session_start();
error_reporting();
ob_start();
include "admin/config.php";

$content  = (isset($_GET['content'])) ? $_GET['content'] : "index";
$kosong   = true;
$page     = array('index','konfirmasi-akun');
foreach($page as $pg){
  if($content == $pg and $kosong){
    
      include 'website/'.$pg.'.php';
      $kosong = false;
    
  }
}

if($kosong) include 'website/404.php';
?>
