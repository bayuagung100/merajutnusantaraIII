<?php

include "../../admin/config.php";
$dncart = $mysqli->query("SELECT COUNT(*) as total FROM pendaftar WHERE bidang='Kesehatan' ");
$dn = mysqli_fetch_assoc($dncart);

echo $dn['total'];
?>