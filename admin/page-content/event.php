<?php
if (!defined("INDEX")) header('location: ../index.php');
$show = isset($_GET['show']) ? $_GET['show'] : "";
$link = "?content=event";
switch ($show) {
    default:
        echo '
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Event</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Event</h3>
                    <a href="' . $link . '&show=form" class="btn btn-primary btn-icon-split" style="float: right!important;">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Tambah</span>
                    </a>
                </div>
    ';  
        
        buka_datatables(array("Judul Event","Deskripsi","Pembicara","Tanggal"));
        $no = 1;
        $query = $mysqli->query("SELECT * FROM event ORDER BY id DESC");
        while ($data = $query->fetch_array()) {
            $judul = $data['judul'];
            $deskripsi = $data['deskripsi'];
            $jam_mulai = $data['jam_mulai'];
            $jam_selesa = $data['jam_selesai'];

            $pembicara = $data['pembicara'];
            $pquery = $mysqli->query("SELECT * FROM pembicara WHERE id='$pembicara' ");
            $pdata = $pquery->fetch_array();

            $tanggal = $data['tanggal'];
            isi_datatables($no, array($judul, $deskripsi, $pdata['nama'], $tanggal), $link, $data['id']);
            $no++;
        }

        tutup_datatables(array("Judul Event","Deskripsi","Pembicara","Tanggal"));
        echo '
            </div>
        </div>
    </section>
    ';
        break;

    case "form":
        if (isset($_GET['id'])) {
            $query     = $mysqli->query("SELECT * FROM event WHERE id='$_GET[id]'");
            $data = $query->fetch_array();
            $aksi     = "Edit";
        } else {
            $data = array("id" => "", "judul" => "", "deskripsi" => "", "jam_mulai" => "", "jam_selesai" => "", "pembicara" => "", "tanggal" => "");
            $aksi     = "Tambah";
        }
        echo '
        <section class="content">
            <div class="container-fluid">
            <br>
                <div class="card ">
                <div class="card-header">
                    <h3 class="card-title">'.$aksi.' Event</h3>
                </div>
                <div class="card-body">';
                buka_form($link, $data['id'], strtolower($aksi));
                buat_textbox("Judul Event", "judul", $data['judul'],"Judul event");
                buat_textbox("Tanggal", "tanggal", $data['tanggal'],"", "date");
                buat_textbox("Jam Mulai", "jam_mulai", $data['jam_mulai'],"ex: 10:20");
                buat_textbox("Jam Selesai", "jam_selesai", $data['jam_selesai'],"ex: 12:00");

                $pemquery = $mysqli->query("SELECT * FROM pembicara");
                $list = array();
                $list[] = array('val'=>'', 'cap'=>'Pilih Pembicara');
                while ($p = $pemquery->fetch_array()) {
                    $list[] = array('val'=>$p['id'], 'cap'=>$p['nama']);
                }
                buat_combobox("Pembicara", "pembicara", $list, $data['pembicara']);
                buat_tinymce("Deskripsi Event", "deskripsi", $data['deskripsi'], 'Deskripsi event', 'richtext');
                tutup_form($link);
        echo'                
                </div>
                </div>
            </div>
        </section>
        ';
        break;
        
    case "action":
        $judul	= addslashes(ucwords($_POST['judul']));
        $jam_mulai	= addslashes($_POST['jam_mulai']); 
        $jam_selesai	= addslashes($_POST['jam_selesai']);
        $pembicara = addslashes($_POST['pembicara']);
        $deskripsi = addslashes($_POST['deskripsi']);
        $tanggal = addslashes($_POST['tanggal']);
               
        if ($_POST['aksi']=="tambah") {
            $query = $mysqli->query("INSERT INTO event
            (
                judul,
                deskripsi,
                jam_mulai,
                jam_selesai,
                pembicara,
                tanggal
            )
            VALUES
            (
                '$judul',
                '$deskripsi',
                '$jam_mulai',
                '$jam_selesai',
                '$pembicara',
                '$tanggal'
            )
            ");
        }
        if ($_POST['aksi']=="edit") {
            $query = $mysqli->query("UPDATE event SET
            judul = '$judul',
            deskripsi = '$deskripsi',
            jam_mulai = '$jam_mulai',
            jam_selesai = '$jam_selesai',
            pembicara = '$pembicara',
            tanggal = '$tanggal'
            WHERE id='$_POST[id]'
            ");
        }
        header('location:'.$link);
        break;
    
    case "delete":
        $query = $mysqli->query("DELETE FROM event WHERE id='$_GET[id]'");
        header('location:'.$link);
        break;

}
