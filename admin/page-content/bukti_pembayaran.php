<?php
if (!defined("INDEX")) header('location: ../index.php');
$show = isset($_GET['show']) ? $_GET['show'] : "";
$link = "?content=bukti_pembayaran";
switch ($show) {
    default:
        echo '
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Bukti Pembayaran</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Bukti Pembayaran</h3>
                    
                </div>
    ';  
        
        buka_datatables(array("Nama Peserta","Email Peserta","Bank Tujuan","Tanggal Transfer"));
        $no = 1;
        $query = $mysqli->query("SELECT * FROM bukti_pembayaran ORDER BY id DESC");
        while ($data = $query->fetch_array()) {
            $nama_peserta = $data['nama_peserta'];
            $email_peserta = $data['email_peserta'];
            $bank_tujuan = $data['bank_tujuan'];
            $tanggal_transfer = $data['tanggal_transfer'];
            isi_datatables_bukti($no, array($nama_peserta,$email_peserta, $bank_tujuan, $tanggal_transfer), $link, $data['id']);
            $no++;
        }

        tutup_datatables(array("Nama Peserta","Email Peserta","Bank Tujuan","Tanggal Transfer"));
        echo '
            </div>
        </div>
    </section>
    ';
        break;

    case "form":
        if (isset($_GET['id'])) {
            $query     = $mysqli->query("SELECT * FROM bukti_pembayaran WHERE id='$_GET[id]'");
            $data = $query->fetch_array();
            $aksi     = "Detail";
        } 
        echo '
        <section class="content">
            <div class="container-fluid">
            <br>
                <div class="card ">
                <div class="card-header">
                    <h3 class="card-title">'.$aksi.' Bukti Pembayaran</h3>
                </div>
                <div class="card-body">';
                buka_form($link, $data['id'], strtolower($aksi));
                buat_rowtabsbuka();
                    buat_label("Nama Peserta :",2);
                    buat_col($data['nama_peserta'],4);
                    buat_label("Email Peserta:",2);
                    buat_col($data['email_peserta'],4);
                buat_rowtabstutup();
                buat_rowtabsbuka();
                    buat_label("Nama Pengirim :",2);
                    buat_col($data['nama_pengirim'],4);
                    buat_label("Tanggal Transfer:",2);
                    buat_col($data['tanggal_transfer'],4);
                buat_rowtabstutup();
                buat_rowtabsbuka();
                    buat_label("Bank Pengirim :",2);
                    buat_col($data['bank_pengirim'],4);
                    buat_label("No Rek Pengirim :",2);
                    buat_col($data['no_rek_pengirim'],4);
                buat_rowtabstutup();
                
                buat_tag("Bukti Transfer :", '<img id="myImg" src="../images/bukti_pembayaran/'.$data['bukti_pembayaran'].'" alt="Bukti Transfer" style="width:100%;max-width:300px">');
                echo "<hr>";
                echo'<div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
                </div>';
                echo'
                <script>
                // Get the modal
                var modal = document.getElementById("myModal");

                // Get the image and insert it inside the modal - use its "alt" text as a caption
                var img = document.getElementById("myImg");
                var modalImg = document.getElementById("img01");
                var captionText = document.getElementById("caption");
                img.onclick = function(){
                modal.style.display = "block";
                modalImg.src = this.src;
                captionText.innerHTML = this.alt;
                }

                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];

                // When the user clicks on <span> (x), close the modal
                span.onclick = function() { 
                modal.style.display = "none";
                }
                </script>
                    ';
                buat_tag("Bank Tujuan :", $data['bank_tujuan'],6);
                tutup_form_bukti($link);
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
