<?php
if (!defined("INDEX")) header('location: ../index.php');
$show = isset($_GET['show']) ? $_GET['show'] : "";
$link = "?content=pembicara";
switch ($show) {
    default:
        echo '
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pembicara</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Pembicara</h3>
                    <a href="' . $link . '&show=form" class="btn btn-primary btn-icon-split" style="float: right!important;">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Tambah</span>
                    </a>
                </div>
    ';  
        
        buka_datatables(array("Foto","Nama","Jabatan"));
        $no = 1;
        $query = $mysqli->query("SELECT * FROM pembicara ORDER BY id DESC");
        while ($data = $query->fetch_array()) {
            $nama = $data['nama'];
            $jabatan = $data['jabatan'];
            $gambar = $data['gambar'];
            isi_datatables($no, array("<img src='../images/source/".$gambar."' width='100' style='margin-bottom: 10px'>", 
            $nama, $jabatan), $link, $data['id']);
            $no++;
        }

        tutup_datatables(array("Foto","Nama","Jabatan"));
        echo '
            </div>
        </div>
    </section>
    ';
        break;

    case "form":
        if (isset($_GET['id'])) {
            $query     = $mysqli->query("SELECT * FROM pembicara WHERE id='$_GET[id]'");
            $data = $query->fetch_array();
            $aksi     = "Edit";
        } else {
            $data = array("id" => "", "nama" => "", "gambar" => "", "jabatan" => "");
            $aksi     = "Tambah";
        }
        echo '
        <section class="content">
            <div class="container-fluid">
            <br>
                <div class="card ">
                <div class="card-header">
                    <h3 class="card-title">'.$aksi.' Pembicara</h3>
                </div>
                <div class="card-body">';
                buka_form($link, $data['id'], strtolower($aksi));
                buat_textbox("Nama", "nama", $data['nama'],"Nama lengkap");
                buat_textbox("Jabatan", "jabatan", $data['jabatan'],"Jabatan");
                buat_imagepicker("Foto", "gambar", $data['gambar'],12);
                tutup_form($link);
        echo'                
                </div>
                </div>
            </div>
        </section>
        ';
        break;
        
    case "action":
        $nama	= addslashes(ucwords($_POST['nama']));
        $jabatan	= addslashes(ucwords($_POST['jabatan'])); 
        $gambar	= addslashes($_POST['gambar']);
               
        if ($_POST['aksi']=="tambah") {
            $query = $mysqli->query("INSERT INTO pembicara
            (
                nama,
                jabatan,
                gambar
            )
            VALUES
            (
                '$nama',
                '$jabatan',
                '$gambar'
            )
            ");
        }
        if ($_POST['aksi']=="edit") {
            $query = $mysqli->query("UPDATE pembicara SET
            nama = '$nama',
            jabatan = '$jabatan',
            gambar = '$gambar'
            WHERE id='$_POST[id]'
            ");
        }
        header('location:'.$link);
        break;
    
    case "delete":
        $query = $mysqli->query("DELETE FROM pembicara WHERE id='$_GET[id]'");
        header('location:'.$link);
        break;

}
