<?php
if (!defined("INDEX")) header('location: ../index.php');
$show = isset($_GET['show']) ? $_GET['show'] : "";
$link = "?content=message";
switch ($show) {
    default:
        echo '
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Message</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Message</h3>
                </div>
    ';  
        
        buka_datatables(array("Nama","Email","Pesan"));
       
        tutup_datatables(array("Nama","Email","Pesan"));
        echo '
            </div>
        </div>
    </section>
    ';
        break;

}
?>