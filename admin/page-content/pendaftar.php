<?php
if (!defined("INDEX")) header('location: ../index.php');
$show = isset($_GET['show']) ? $_GET['show'] : "";
$link = "?content=pendaftar";
switch ($show) {
    default:
        echo '
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pendaftar</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Pendaftar</h3>
                    
                </div>
    ';  
        
        buka_datatables(array("Institusi","Jurusan","Nama","Email","Status Konfirmasi Email"));
        $no = 1;
        $query = $mysqli->query("SELECT * FROM pendaftar ORDER BY id DESC");
        while ($data = $query->fetch_array()) {
            $kampus = $data['kampus'];
            $jurusan = $data['jurusan'];
            $nama = $data['nama'];
            $email = $data['email'];
            $status = $data['konfirmasi_email'];
            isi_datatables($no, array($kampus, 
            $jurusan, $nama, $email,$status), $link, $data['id']);
            $no++;
        }

        tutup_datatables(array("Institusi","Jurusan","Nama","Email","Status Konfirmasi Email"));
        echo '
            </div>
        </div>
    </section>
    ';
        break;

    case "form":
        if (isset($_GET['id'])) {
            $query     = $mysqli->query("SELECT * FROM pendaftar WHERE id='$_GET[id]'");
            $data = $query->fetch_array();
            $aksi     = "Edit";
        } else {
            $data = array("id" => "", "kampus" => "", "jurusan" => "", "foto_ktm" => "", "minat" => "", "nama" => "", "tanggal_lahir" => "", "foto_profile" => "", "no_hp" => "", "email" => "", "alamat" => "", "konfirmasi_email" => "");
            $aksi     = "Tambah";
        }
        echo '
        <section class="content">
            <div class="container-fluid">
            <br>
                <div class="card ">
                <div class="card-header">
                    <h3 class="card-title">'.$aksi.' Pendaftar</h3>
                </div>
                <div class="card-body">';
                buka_form($link, $data['id'], strtolower($aksi));
                buat_textbox("Instansi/Kampus", "kampus", $data['kampus'],"Instansi/kampus");
                buat_textbox("Jurusan", "jurusan", $data['jurusan'],"Jurusan");
                buat_imagepicker_pendaftar("Foto KTM", "foto_ktm", $data['foto_ktm'],12);
                buat_textbox("Minat", "minat", $data['minat'],"Minat");
                buat_textbox("Nama Lengkap", "nama", $data['nama'],"Nama lengkap");
                buat_textbox("Tanggal Lahir", "tanggal_lahir", $data['tanggal_lahir'],"Tanggal Lahir", "date");
                buat_imagepicker_pendaftar("Foto Profile", "foto_profile", $data['foto_profile'],12);
                buat_textbox("Email", "email", $data['email'],"Email");

               
                $list = array();
                $list[] = array('val'=>'N', 'cap'=>'Tidak');
                $list[] = array('val'=>'Y', 'cap'=>'Ya');
                buat_combobox("Status Konfirmasi Email", "konfirmasi_email", $list, $data['konfirmasi_email']);
                buat_tinymce("Alamat", "alamat", $data['alamat'],"Alamat","richtext");

                tutup_form($link);
        echo'                
                </div>
                </div>
            </div>
        </section>
        ';
        break;
        
    case "action":
        $kampus = addslashes(ucwords($_POST['kampus']));
        $jurusan = addslashes(ucwords($_POST['jurusan']));
        $ktm = addslashes($_POST['foto_ktm']);
        $minat = addslashes(ucwords($_POST['minat']));
        $nama = addslashes(ucwords($_POST['nama']));
        $tanggal_lahir = addslashes($_POST['tanggal_lahir']);
        $foto_profile = addslashes($_POST['foto_profile']);
        $hp = addslashes($_POST['hp']);
        $email = addslashes($_POST['email']);
        $alamat = addslashes($_POST['alamat']);
        $konfirmasi = addslashes($_POST['konfirmasi_email']);
               
        // if ($_POST['aksi']=="tambah") {
        //     $query = $mysqli->query("INSERT INTO pembicara
        //     (
        //         nama,
        //         jabatan,
        //         gambar
        //     )
        //     VALUES
        //     (
        //         '$nama',
        //         '$jabatan',
        //         '$gambar'
        //     )
        //     ");
        // }
        if ($_POST['aksi']=="edit") {
            $query = $mysqli->query("UPDATE pendaftar SET
            kampus = '$kampus',
            jurusan = '$jurusan',
            foto_ktm = '$ktm',
            minat = '$minat',
            nama = '$nama',
            tanggal_lahir = '$tanggal_lahir',
            foto_profile = '$foto_profile',
            no_hp = '$no_hp',
            email = '$email',
            alamat = '$alamat',
            konfirmasi_email = '$konfirmasi'
            WHERE id='$_POST[id]'
            ");
        }
        header('location:'.$link);
        break;
    
    case "delete":
        $query = $mysqli->query("DELETE FROM pendaftar WHERE id='$_GET[id]'");
        header('location:'.$link);
        break;

}
