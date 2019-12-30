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
        
        buka_datatables(array("Institusi","Jurusan","Nama","Email","Status Konfirmasi Email", "Status Pembayaran"));
        $no = 1;
        $query = $mysqli->query("SELECT * FROM pendaftar ORDER BY id DESC");
        while ($data = $query->fetch_array()) {
            $kampus = $data['kampus'];
            $jurusan = $data['jurusan'];
            $nama = $data['nama'];
            $email = $data['email'];
            $status = $data['konfirmasi_email'];
            $status_bayar = $data['status_pembayaran'];

            isi_datatables($no, array($kampus, $jurusan, $nama, $email,$status, $status_bayar), $link, $data['id'], true, false);
                $no++;
        }

        tutup_datatables(array("Institusi","Jurusan","Nama","Email","Status Konfirmasi Email","Status Pembayaran"));
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
                buat_rowtabsbuka();
                    buat_label("Instansi/Kampus :",2);
                    buat_col($data['kampus'],4);
                    buat_label("Program Studi :",2);
                    buat_col($data['jurusan'],4);
                buat_rowtabstutup();
                buat_rowtabsbuka();
                    buat_label("Jenis Peserta :",2);
                    buat_col($data['jenis_peserta'],4);
                    buat_label("Status Konfirmasi Email:",2);
                    buat_col($data['konfirmasi_email'],4);
                buat_rowtabstutup();
                buat_tag("Foto KTM/KTP :", '<img src="../images/pendaftar/'.$data['foto_ktm'].'" alt="Foto KTM/KTP" style="width:100%;max-width:300px">');

                buat_rowtabsbuka();
                    buat_label("Nama Lengkap :",2);
                    buat_col($data['nama'],4);
                    buat_label("Tempat dan Tanggal Lahir :",2);
                    buat_col($data['tempat_lahir'].", ".$data['tanggal_lahir'],4);
                buat_rowtabstutup();
                buat_tag("Foto Profile :", '<img src="../images/pendaftar/'.$data['foto_profile'].'" alt="Foto Profile" style="width:100%;max-width:300px">');
                
                buat_rowtabsbuka();
                    buat_label("No Hp :",2);
                    buat_col($data['no_hp'],4);
                    buat_label("Email :",2);
                    buat_col($data['email'],4);
                buat_rowtabstutup();
                buat_rowtabsbuka();
                    buat_label("Alamat :",2);
                    buat_col($data['alamat'],4);
                    buat_label("Minat :",2);
                    buat_col($data['minat'],4);
                buat_rowtabstutup();
                buat_rowtabsbuka();
                    buat_label("Bidang yang diikuti :",2);
                    buat_col($data['bidang'],4);
                    buat_label("Penggunaan asuransi:",2);
                    buat_col($data['asuransi'],4);
                buat_rowtabstutup();
                buat_rowtabsbuka();
                    buat_label("Penyakit yang pernah/sedang di derita :",2);
                    buat_col($data['penyakit'],4);
                    buat_label("Alasan mengikuti KKN :",2);
                    buat_col($data['alasan'],4);
                buat_rowtabstutup();
                $list = array();
                $list[] = array('val'=>'N', 'cap'=>'Tidak');
                $list[] = array('val'=>'Y', 'cap'=>'Ya');
                buat_combobox("Status Pembayaran", "status_pembayaran", $list, $data['status_pembayaran']);

                tutup_form($link);
        echo'                
                </div>
                </div>
            </div>
        </section>
        ';
        break;
        
    case "action":
        // $kampus = addslashes(ucwords($_POST['kampus']));
        // $jurusan = addslashes(ucwords($_POST['jurusan']));
        // $ktm = addslashes($_POST['foto_ktm']);
        // $minat = addslashes(ucwords($_POST['minat']));
        // $nama = addslashes(ucwords($_POST['nama']));
        // $tanggal_lahir = addslashes($_POST['tanggal_lahir']);
        // $foto_profile = addslashes($_POST['foto_profile']);
        // $hp = addslashes($_POST['hp']);
        // $email = addslashes($_POST['email']);
        // $alamat = addslashes($_POST['alamat']);
        // $konfirmasi = addslashes($_POST['konfirmasi_email']);
        $status_pembayaran = addslashes($_POST['status_pembayaran']);
               
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
            status_pembayaran = '$status_pembayaran'
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
