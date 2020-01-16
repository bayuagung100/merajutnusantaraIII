<?php 
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Merajut Nusantara III 2020</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url("website/");?>css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url("website/");?>css/animate.css">
    
    <link rel="stylesheet" href="<?php echo base_url("website/");?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url("website/");?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url("website/");?>css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url("website/");?>css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url("website/");?>css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url("website/");?>css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url("website/");?>css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?php echo base_url("website/");?>css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url("website/");?>css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url("website/");?>css/style.css">

	<style>
	.surat-edaran{
		width: 100%;
		max-width: 600px;
		height: auto;
	}
	@media screen and (max-width: 768px) {
		.surat-edaran{
			width: 100%;
			height: auto;
		}
	}
	</style>
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="<?php echo base_url("");?>">Merajut Nusantara III</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="<?php echo base_url("");?>" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="#pembicara" class="nav-link">Pembicara</a></li>
			  <li class="nav-item"><a href="#jadwal" class="nav-link">Jadwal</a></li>
			  <li class="nav-item"><a href="<?php echo base_url("konfirmasi");?>" class="nav-link">Konfirmasi Pembayaran</a></li>
	          <li class="nav-item cta mr-md-2"><a href="#daftar" class="nav-link">Daftar Sekarang</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('<?php echo base_url("images/icon/logo-merajut-nusantara4.png");?>');background-position: center center;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-xl-10 ftco-animate" data-scrollax=" properties: { translateY: '70%' }"><b>
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> <span>Merajut<br> Nusantara III 2020</span></h1></b>
            <div id="timer" class="d-flex mb-3">
				<div class="time" id="days"></div>
				<div class="time pl-4" id="hours"></div>
				<div class="time pl-4" id="minutes"></div>
				<div class="time pl-4" id="seconds"></div>
			</div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section services-section bg-light">
      <div class="container">
	  		<div class="row justify-content-center pb-3">
				<div class="col-md-12 text-center heading-section ftco-animate">
					<!-- <span class="subheading">Speaker</span> -->
					<img src="<?php echo base_url("images/icon/Surat-Edaran-KKN-Tematik-Merajut-Nusantara-2020.png");?>" class="surat-edaran"/>
					<h2 class="mb-4">Kontribusi Peserta <span>dan</span> Perguruan Tinggi</h2>
					<h4 >Masing-masing peserta dikenakan biaya sebesar <b style="color: #6a76fe;">Rp 3.300.000,- /Orang.</b></h4>
					<h5>
						Dana dapat disalurkan ke <b>No.Rekening:</b>
						<ul style="list-style:none">
							<li>
								<b style="color: #5ed964;">BNI (0899162399 a.n Roesfiansjah Rasjidin)</b>
							</li>
							<li>
								<b style="color: #5ed964;">BCA (4740816069 a.n Roesfiansjah Rasjidin)</b>
							</li>
						</ul>
					</h5>
					<p>Untuk keperluan :</p>
				</div>
        	</div>
			<div class="row d-flex">
				<div class="col-md-3 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services d-block">
					<div class="icon"><span class="flaticon-placeholder"></span></div>
					<div class="media-body">
						<h3 class="heading mb-3">Lokasi</h3>
						<p>Palu, Sigi dan Donggala, Sulawesi Tengah.</p>
					</div>
					</div>      
				</div>
				<div class="col-md-3 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services d-block">
					<div class="icon"><span class="flaticon-world"></span></div>
					<div class="media-body">
						<h3 class="heading mb-3">Transport</h3>
						<p>Disediakan.</p>
					</div>
					</div>    
				</div>
				<div class="col-md-3 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services d-block">
					<div class="icon"><span class="flaticon-hotel"></span></div>
					<div class="media-body">
						<h3 class="heading mb-3">Pemondokan</h3>
						<p>Disediakan.</p>
					</div>
					</div>      
				</div>
				<div class="col-md-3 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services d-block">
					<div class="icon"><span class="flaticon-cooking"></span></div>
					<div class="media-body">
						<h3 class="heading mb-3">Rumah Makan</h3>
						<p>Disediakan.</p>
					</div>
					</div>      
				</div>
			</div>

			<div class="row d-flex text-center">
				<div class="col-md-12 heading-section ftco-animate">
					<h2 class="mb-4">Peserta Terdaftar</h2>
					<h4>Pendaftaran dan pembayaran diperpanjang sampai tanggal 30 April 2020</h4>
					<br/>
				</div>
				
				<div class="col-md-3 ftco-animate">
					<div class="media block-6 services d-block">
						<div class="media-body">
							<h3 class="heading mb-3">Pemuda dan Olahraga</h3>
							<p id="count_po" style="font-size:38px;color:#6b76ff">0</p>
						</div>
					</div>      
				</div>
				<div class="col-md-2 ftco-animate">
					<div class="media block-6 services d-block">
						<div class="media-body">
							<h3 class="heading mb-3">Pendidikan</h3>
							<p id="count_pendidikan" style="font-size:38px;color:#6b76ff">0</p>
						</div>
					</div>    
				</div>
				<div class="col-md-2 ftco-animate">
					<div class="media block-6 services d-block">
						<div class="media-body">
							<h3 class="heading mb-3">Kesehatan</h3>
							<p id="count_kesehatan" style="font-size:38px;color:#6b76ff">0</p>
						</div>
					</div>      
				</div>
				<div class="col-md-2 ftco-animate">
					<div class="media block-6 services d-block">
						<div class="media-body">
							<h3 class="heading mb-3">Pariwisata</h3>
							<p id="count_pariwisata" style="font-size:38px;color:#6b76ff">0</p>
						</div>
					</div>      
				</div>
				<div class="col-md-3 ftco-animate">
					<div class="media block-6 services d-block">
						<div class="media-body">
							<h3 class="heading mb-3">Ekonomi Kreatif</h3>
							<p id="count_ek" style="font-size:38px;color:#6b76ff">0</p>
						</div>
					</div>      
				</div>
			</div>
      </div>
    </section>

    <section id="pembicara" class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<!-- <span class="subheading">Speaker</span> -->
					<h2 class="mb-4">Pembicara <span>dan</span> Pembimbing</h2>
				</div>
        	</div>
        <div class="row">
        	<div class="col-md-12 ftco-animate">
        		<div class="carousel-testimony owl-carousel">
				<?php
					$pquery = $mysqli->query("SELECT * FROM pembicara ORDER BY id DESC");
					while ($pdata = $pquery->fetch_array()) {
						$nama = $pdata['nama'];
						$jabatan = $pdata['jabatan'];
						$gambar = $pdata['gambar'];
				
						echo'
						<div class="item">
							<div class="speaker">
								<img src="'.base_url("images/source/").$gambar.'" class="img-fluid" alt="'.$nama.'">
								<div class="text text-center py-3">
									<h3>'.$nama.'</h3>
									<span class="position">'.$jabatan.'</span>
								</div>
							</div>
						</div>
						';
					
					}
				?>

        			
        		</div>
        	</div>
        </div>
    	</div>
    </section>
		

	<section id="jadwal" class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<!-- <span class="subheading">Schedule</span> -->
					<h2 class="mb-4">Jadwal Acara</h2>
				</div>
			</div>
			<div class="ftco-search">
				<div class="row">
					
					<div class="tab-content" id="v-pills-tabContent">
				<?php 
					$equery = $mysqli->query("SELECT * FROM event ORDER BY tanggal DESC");
					while ($edata = $equery->fetch_array()) {
						$id = $edata['id'];
						$judul = $edata['judul'];
						$deskripsi = $edata['deskripsi'];
						$jam_mulai = $edata['jam_mulai'];
						$jam_selesai = $edata['jam_selesai'];
						$pembicara = $edata['pembicara'];
						$pemquery = $mysqli->query("SELECT * FROM pembicara WHERE id='$pembicara' ");
						$pemdata = $pemquery->fetch_array();
						$tanggal = $edata['tanggal'];

						
						// echo'
						// <a class="nav-link ftco-animate active" id="v-pills-'.$id.'-tab" data-toggle="pill" href="#v-pills-'.$id.'" role="tab" aria-controls="v-pills-'.$id.'" aria-selected="false"><span>'.$tanggal.'</span></a>
						// ';
						echo '
						<div class="speaker-wrap ftco-animate d-flex">
							<div class="img speaker-img" style="background-image: url(images/source/'.$pemdata['gambar'].');"></div>
							<div class="text pl-md-5">
								<span class="time">'.$tanggal.'</span>,
								<span class="time">'.$jam_mulai.' - '.$jam_selesai.'</span>
								<h2><a href="#">'.$judul.'</a></h2>
								<p>'.$deskripsi.'</p>
								<h3 class="speaker-name">&mdash; <a href="#">'.$pemdata['nama'].'</a> <span class="position">'.$pemdata['jabatan'].'</span></h3>
							</div>
						</div>
						';
					}
				?>
				
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="daftar" class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Siap untuk ikut ?</h2>
              <p>Daftarkan diri anda sekarang.<br>
			  Tanda (<span style="color:red">*</span>) wajib diisi.<br/>
			  Syarat & Ketentuan lihat <a href="<?php echo base_url("SURAT%20PEMBERITAHUAN%20KKN%20PTS.pdf");?>" target="_blank" style="color:white"><b><u>disini.</u></b></a>
			  </p>
			  <?php
			  if(isset($_POST['submit'])=="Daftar"){
				$kampus = ucwords($_POST['kampus']);
				$jurusan = ucwords($_POST['jurusan']);
				$jenis_peserta = $_POST['peserta'];

				$ktm = $_FILES['ktm']['name'];
				$type_ktm = $_FILES['ktm']['type'];
				$size_ktm = $_FILES['ktm']['size'];
				$x_ktm = explode('.', $ktm);
				$ekstensi_ktm = strtolower(end($x_ktm));
				$file_tmp_ktm = $_FILES['ktm']['tmp_name'];

				
				$minat = ucwords($_POST['minat']);
				$nama = ucwords($_POST['nama']);
				$tempat_lahir = ucwords($_POST['tempat_lahir']);
				$tanggal_lahir = $_POST['tanggal_lahir'];

				$foto_profile = $_FILES['foto_profile']['name'];
				$type_foto_profile = $_FILES['foto_profile']['type'];
				$size_foto_profile = $_FILES['foto_profile']['size'];
				$x_foto_profile = explode('.', $foto_profile);
				$ekstensi_foto_profile = strtolower(end($x_foto_profile));
				$file_tmp_foto_profile = $_FILES['foto_profile']['tmp_name'];

				$hp = $_POST['hp'];
				$email = $_POST['email'];
				$alamat = $_POST['alamat'];
				$bidang = $_POST['bidang'];
				$asuransi = $_POST['asuransi'];
				$penyakit = $_POST['penyakit'];
				$alasan = $_POST['alasan'];

				$cek = $mysqli->query("SELECT * FROM pendaftar WHERE email='$email' ");
				$jml = $cek->num_rows;
				
				if ($jml > 0) {
					echo'
					<div class="alert alert-danger" role="alert"><b>Sorry!</b> Email yang anda masukkan sudah digunakan.</div>
					';
				} else {
					if ($type_ktm == "image/jpeg" || $type_ktm == "image/png" || $type_ktm == "image/jpg" || $type_foto_profile == "image/jpeg" || $type_foto_profile == "image/png" || $type_foto_profile == "image/jpg") {
						if ($size_ktm <= 100000) {
							if ($size_foto_profile <= 100000) {
								if (move_uploaded_file($file_tmp_ktm, "./images/pendaftar/".$ktm)) {
									if (move_uploaded_file($file_tmp_foto_profile, "./images/pendaftar/".$foto_profile)) {
										$insert = $mysqli->query("INSERT INTO pendaftar
											(
												kampus,
												jurusan,
												jenis_peserta,
												foto_ktm,
												minat,
												nama,
												tempat_lahir,
												tanggal_lahir,
												foto_profile,
												no_hp,
												email,
												alamat,
												bidang,
												asuransi,
												penyakit,
												alasan,
												konfirmasi_email,
												status_pembayaran
											)
											VALUES
											(
												'$kampus',
												'$jurusan',
												'$jenis_peserta',
												'$ktm',
												'$minat',
												'$nama',
												'$tempat_lahir',
												'$tanggal_lahir',
												'$foto_profile',
												'$hp',
												'$email',
												'$alamat',
												'$bidang',
												'$asuransi',
												'$penyakit',
												'$alasan',
												'N',
												'N'
											)
										");
										if ($insert) {
											// Instantiation and passing `true` enables exceptions
											$mail = new PHPMailer(true);

											try {
												//Server settings
												//$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
												$mail->isSMTP();                                            // Send using SMTP
												$mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
												$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
												$mail->Username   = 'merajutnusantara2020@gmail.com';                     // SMTP username
												$mail->Password   = 'synded-marjux-5wyPdy';                               // SMTP password
												$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
												$mail->Port       = 587;                                    // TCP port to connect to
											
												//Recipients
												$mail->setFrom('merajutnusantara2020@gmail.com', 'Merajut Nusantara III 2020');
												$mail->addAddress($email);     // Add a recipient
												//$mail->addAddress('ellen@example.com');               // Name is optional
												$mail->addReplyTo('merajutnusantara2020@gmail.com', 'Merajut Nusantara III 2020');
												//$mail->addCC('cc@example.com');
												//$mail->addBCC('bcc@example.com');
											
												// Attachments
												// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
												// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
											
												// Content
												$mail->isHTML(true);                                  // Set email format to HTML
												$mail->Subject = 'Konfirmasi Pendaftaran';
												$mail->Body    = '
												<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
												<html style="width:100%;font-family:lato, helvetica neue, helvetica, arial, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0;">

												<head>
												<meta charset="UTF-8">
												<meta content="width=device-width, initial-scale=1" name="viewport">
												<meta name="x-apple-disable-message-reformatting">
												<meta http-equiv="X-UA-Compatible" content="IE=edge">
												<meta content="telephone=no" name="format-detection">
												<title>forgot password</title>
												<!--[if (mso 16)]>
													<style type="text/css">
													a {text-decoration: none;}
													</style>
													<![endif]-->
												<!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]-->
												<!--[if !mso]><!-- -->
												<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i" rel="stylesheet">
												<!--<![endif]-->
												<style type="text/css">
													@media only screen and (max-width:600px) {

													p,
													ul li,
													ol li,
													a {
														font-size: 16px !important;
														line-height: 150% !important
													}

													h1 {
														font-size: 30px !important;
														text-align: center;
														line-height: 120% !important
													}

													h2 {
														font-size: 26px !important;
														text-align: center;
														line-height: 120% !important
													}

													h3 {
														font-size: 20px !important;
														text-align: center;
														line-height: 120% !important
													}

													h1 a {
														font-size: 30px !important
													}

													h2 a {
														font-size: 26px !important
													}

													h3 a {
														font-size: 20px !important
													}

													.es-menu td a {
														font-size: 16px !important
													}

													.es-header-body p,
													.es-header-body ul li,
													.es-header-body ol li,
													.es-header-body a {
														font-size: 16px !important
													}

													.es-footer-body p,
													.es-footer-body ul li,
													.es-footer-body ol li,
													.es-footer-body a {
														font-size: 16px !important
													}

													.es-infoblock p,
													.es-infoblock ul li,
													.es-infoblock ol li,
													.es-infoblock a {
														font-size: 12px !important
													}

													*[class="gmail-fix"] {
														display: none !important
													}

													.es-m-txt-c,
													.es-m-txt-c h1,
													.es-m-txt-c h2,
													.es-m-txt-c h3 {
														text-align: center !important
													}

													.es-m-txt-r,
													.es-m-txt-r h1,
													.es-m-txt-r h2,
													.es-m-txt-r h3 {
														text-align: right !important
													}

													.es-m-txt-l,
													.es-m-txt-l h1,
													.es-m-txt-l h2,
													.es-m-txt-l h3 {
														text-align: left !important
													}

													.es-m-txt-r img,
													.es-m-txt-c img,
													.es-m-txt-l img {
														display: inline !important
													}

													.es-button-border {
														display: block !important
													}

													a.es-button {
														font-size: 20px !important;
														display: block !important;
														border-width: 15px 25px 15px 25px !important
													}

													.es-btn-fw {
														border-width: 10px 0px !important;
														text-align: center !important
													}

													.es-adaptive table,
													.es-btn-fw,
													.es-btn-fw-brdr,
													.es-left,
													.es-right {
														width: 100% !important
													}

													.es-content table,
													.es-header table,
													.es-footer table,
													.es-content,
													.es-footer,
													.es-header {
														width: 100% !important;
														max-width: 600px !important
													}

													.es-adapt-td {
														display: block !important;
														width: 100% !important
													}

													.adapt-img {
														width: 100% !important;
														height: auto !important
													}

													.es-m-p0 {
														padding: 0px !important
													}

													.es-m-p0r {
														padding-right: 0px !important
													}

													.es-m-p0l {
														padding-left: 0px !important
													}

													.es-m-p0t {
														padding-top: 0px !important
													}

													.es-m-p0b {
														padding-bottom: 0 !important
													}

													.es-m-p20b {
														padding-bottom: 20px !important
													}

													.es-mobile-hidden,
													.es-hidden {
														display: none !important
													}

													.es-desk-hidden {
														display: table-row !important;
														width: auto !important;
														overflow: visible !important;
														float: none !important;
														max-height: inherit !important;
														line-height: inherit !important
													}

													.es-desk-menu-hidden {
														display: table-cell !important
													}

													table.es-table-not-adapt,
													.esd-block-html table {
														width: auto !important
													}

													table.es-social {
														display: inline-block !important
													}

													table.es-social td {
														display: inline-block !important
													}
													}

													#outlook a {
													padding: 0;
													}

													.ExternalClass {
													width: 100%;
													}

													.ExternalClass,
													.ExternalClass p,
													.ExternalClass span,
													.ExternalClass font,
													.ExternalClass td,
													.ExternalClass div {
													line-height: 100%;
													}

													.es-button {
													mso-style-priority: 100 !important;
													text-decoration: none !important;
													}

													a[x-apple-data-detectors] {
													color: inherit !important;
													text-decoration: none !important;
													font-size: inherit !important;
													font-family: inherit !important;
													font-weight: inherit !important;
													line-height: inherit !important;
													}

													.es-desk-hidden {
													display: none;
													float: left;
													overflow: hidden;
													width: 0;
													max-height: 0;
													line-height: 0;
													mso-hide: all;
													}
												</style>
												</head>

												<body
												style="width:100%;font-family:lato, helvetica neue, helvetica, arial, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0;">
												<div class="es-wrapper-color" style="background-color:#F4F4F4;">
													<!--[if gte mso 9]>
															<v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
																<v:fill type="tile" color="#f4f4f4"></v:fill>
															</v:background>
														<![endif]-->
													<table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0"
													style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;">
													<tr class="gmail-fix" height="0" style="border-collapse:collapse;">
														<td style="padding:0;Margin:0;">
														<table width="600" cellspacing="0" cellpadding="0" border="0" align="center"
															style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;">
															<tr style="border-collapse:collapse;">
															<td cellpadding="0" cellspacing="0" border="0" style="padding:0;Margin:0;line-height:1px;min-width:600px;"
																height="0"><img src="https://esputnik.com/repository/applications/images/blank.gif"
																style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;max-height:0px;min-height:0px;min-width:600px;width:600px;"
																alt width="600" height="1"></td>
															</tr>
														</table>
														</td>
													</tr>
													<tr style="border-collapse:collapse;">
														<td valign="top" style="padding:0;Margin:0;">
														<table class="es-content" cellspacing="0" cellpadding="0" align="center"
															style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;">
															<tr style="border-collapse:collapse;">
															<td style="padding:0;Margin:0;background-color:transparent;" bgcolor="transparent" align="center">
																<table class="es-content-body"
																style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;"
																width="600" cellspacing="0" cellpadding="0" align="center">
																<tr style="border-collapse:collapse;">
																	<td align="left" style="padding:0;Margin:0;">
																	<table width="100%" cellspacing="0" cellpadding="0"
																		style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;">
																		<tr style="border-collapse:collapse;">
																		<td width="600" valign="top" align="center" style="padding:0;Margin:0;">
																			<table
																			style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:separate;border-spacing:0px;background-color:#FFFFFF;border-radius:4px;"
																			width="100%" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
																			<tr style="border-collapse:collapse;">
																				<td align="center"
																				style="Margin:0;padding-bottom:5px;padding-left:30px;padding-right:30px;padding-top:35px;">
																				<h1
																					style="Margin:0;line-height:58px;mso-line-height-rule:exactly;font-family:lato, helvetica neue, helvetica, arial, sans-serif;font-size:48px;font-style:normal;font-weight:normal;color:#111111;">
																					Konfirmasi Pendaftaran</h1>
																				</td>
																			</tr>
																			<tr style="border-collapse:collapse;">
																				<td bgcolor="#ffffff" align="center"
																				style="Margin:0;padding-top:5px;padding-bottom:5px;padding-left:20px;padding-right:20px;">
																				<table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0"
																					style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;">
																					<tr style="border-collapse:collapse;">
																					<td
																						style="padding:0;Margin:0px;border-bottom:1px solid #FFFFFF;background:rgba(0, 0, 0, 0) none repeat scroll 0% 0%;height:1px;width:100%;margin:0px;">
																					</td>
																					</tr>
																				</table>
																				</td>
																			</tr>
																			</table>
																		</td>
																		</tr>
																	</table>
																	</td>
																</tr>
																</table>
															</td>
															</tr>
														</table>
														<table class="es-content" cellspacing="0" cellpadding="0" align="center"
															style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;">
															<tr style="border-collapse:collapse;">
															<td align="center" style="padding:0;Margin:0;">
																<table class="es-content-body"
																style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;"
																width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
																<tr style="border-collapse:collapse;">
																	<td align="left" style="padding:0;Margin:0;">
																	<table width="100%" cellspacing="0" cellpadding="0"
																		style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;">
																		<tr style="border-collapse:collapse;">
																		<td width="600" valign="top" align="center" style="padding:0;Margin:0;">
																			<table
																			style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;"
																			width="100%" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
																			<tr style="border-collapse:collapse;">
																				<td class="es-m-txt-l" bgcolor="#ffffff" align="left"
																				style="Margin:0;padding-bottom:15px;padding-top:20px;padding-left:30px;padding-right:30px;">
																				<p
																					style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:18px;font-family:lato, helvetica neue, helvetica, arial, sans-serif;line-height:27px;color:#666666;">
																					Dear '.$nama.',</p>
																				</td>
																			</tr>
																			<tr style="border-collapse:collapse;">
																				<td class="es-m-txt-l" bgcolor="#ffffff" align="left"
																				style="Margin:0;padding-bottom:15px;padding-top:20px;padding-left:30px;padding-right:30px;">
																				<p
																					style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:18px;font-family:lato, helvetica neue, helvetica, arial, sans-serif;line-height:27px;color:#666666;">
																					Klik tombol dibawah ini untuk mengkonfirmasi pendaftaran Anda.</p>
																				</td>
																			</tr>
																			</table>
																		</td>
																		</tr>
																	</table>
																	</td>
																</tr>
																<tr style="border-collapse:collapse;">
																	<td align="left"
																	style="padding:0;Margin:0;padding-bottom:20px;padding-left:30px;padding-right:30px;">
																	<table width="100%" cellspacing="0" cellpadding="0"
																		style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;">
																		<tr style="border-collapse:collapse;">
																		<td width="540" valign="top" align="center" style="padding:0;Margin:0;">
																			<table width="100%" cellspacing="0" cellpadding="0"
																			style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;">
																			<tr style="border-collapse:collapse;">
																				<td align="center"
																				style="Margin:0;padding-left:10px;padding-right:10px;padding-top:40px;padding-bottom:40px;">
																				<span class="es-button-border"
																					style="border-style:solid;border-color:#7C72DC;background:#D7B6A3;border-width:1px;display:inline-block;border-radius:2px;width:auto;"><a
																					href="'.base_url("konfirmasi/").$email.'" class="es-button" target="_blank"
																					style="mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:helvetica, helvetica neue, arial, verdana, sans-serif;font-size:20px;color:#FFFFFF;border-style:solid;border-color:#D7B6A3;border-width:15px 25px 15px 25px;display:inline-block;background:#D7B6A3;border-radius:2px;font-weight:normal;font-style:normal;line-height:24px;width:auto;text-align:center;">Konfirmasi Pendaftaran</a></span></td>
																			</tr>
																			</table>
																		</td>
																		</tr>
																	</table>
																	</td>
																</tr>
																</table>
															</td>
															</tr>
														</table>
														</td>
													</tr>
													</table>
												</div>
												</body>

												</html>
												';

												if($mail->send()){
													echo'
													<div class="alert alert-success" role="alert"><b>Success</b> Silahkan cek Email Anda untuk konfirmasi pendaftaran.</div>
													';
													echo "<script> 
													window.location = '".base_url("#daftar")."';
													</script>";
												}
											} catch (Exception $e) {
												echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
											}
										} else {
											$mysqli->error;
										}
									} else {
										echo'
										<div class="alert alert-danger" role="alert"><b>Sorry!</b> Format foto profile tidak sesuai.</div>
										';
									}
								} else {
									echo'
									<div class="alert alert-danger" role="alert"><b>Sorry!</b> Format foto ktm tidak sesuai.</div>
									';
								}
							} else {
								echo'
								<div class="alert alert-danger" role="alert"><b>Sorry!</b> Ukuran foto profile terlalu besar, maks 100kb.</div>
								';
							}
						} else {
							echo'
							<div class="alert alert-danger" role="alert"><b>Sorry!</b> Ukuran foto ktm terlalu besar, maks 100kb.</div>
							';
						}
					}
				}
			  }
			  ?>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-8">
                  <form action="" method="post" enctype="multipart/form-data" class="contact-form">
                    <div class="form-group">
						<label for="kampus" style="float: left; color:white">Institusi/Kampus <span style="color:red">*</span></label>
                      	<input id="kampus" name="kampus" type="text" class="form-control" placeholder="Nama Universitas" required>
					</div>
					<div class="form-group">
						<label for="jurusan" style="float: left; color:white">Program Studi <span style="color:red">*</span></label>
                      	<input id="jurusan" name="jurusan" type="text" class="form-control" placeholder="Program Studi" required>
					</div>
					<div class="form-group">
						<label for="peserta" style="float: left; color:white">Jenis peserta (Mahasiswa minimal semester 5)<span style="color:red">*</span></label>
						<select id="peserta" name="peserta" class="form-control" required>
							<option value="">Pilih jenis peserta</option>
							<option value="Mahasiswa">Mahasiswa</option>
							<option value="Dosen">Dosen Pendamping Lapangan</option>
						</select>
					</div>
					<div class="form-group">
						<label for="ktm" style="float: left; color:white">Foto KTM/KTP (mahasiswa/dosen) <span style="color:red">*</span>  (Maks 100kb)</label>
                      	<input id="ktm" name="ktm" type="file" class="form-control" required>
						<span style="float: left;color:white">Format yang didukung: .jpeg, .jpg, .png</span><br>
					</div>	
					<div class="form-group">
						<label for="nama" style="float: left; color:white">Nama <span style="color:red">*</span></label>
                      	<input id="nama" name="nama" type="text" class="form-control" placeholder="Nama Lengkap" required>
					</div>
					<div class="form-group">
						<label for="tanggal_lahir" style="float: left; color:white">Tempat dan Tanggal Lahir <span style="color:red">*</span></label>
                      	<input id="tempat_lahir" name="tempat_lahir" type="text" class="form-control" style="max-width:230px;float:left;margin-right:5px" placeholder="Tempat Lahir" required>
						<input id="tanggal_lahir" name="tanggal_lahir" type="date" class="form-control" style="max-width:170px;float:left" required>
						
					</div>
					<div class="form-group">
						<label for="foto_profile" style="float: left; color:white">Foto Profile <span style="color:red">*</span>  (Maks 100kb)</label>
                      	<input id="foto_profile" name="foto_profile" type="file" class="form-control" required>
						<span style="float: left;color:white">Format yang didukung: .jpeg, .jpg, .png</span><br>
					</div>
					<div class="form-group">
						<label for="hp" style="float: left; color:white">No Hp <span style="color:red">*</span></label>
                      	<input id="hp" name="hp" type="tel" class="form-control" placeholder="08xxxxxxxxxx" required>
					</div>
					<div class="form-group">
						<label for="email" style="float: left; color:white">Email <span style="color:red">*</span></label>
                      	<input id="email" name="email" type="email" class="form-control" placeholder="example@email.com" required>
					</div>
					<div class="form-group">
						<label for="alamat" style="float: left; color:white">Alamat <span style="color:red">*</span></label>
                      	<textarea id="alamat" name="alamat" type="text" class="form-control" placeholder="Alamat" required></textarea>
					</div>
					<div class="form-group">
						<label for="minat" style="float: left; color:white">Minat <span style="color:red">*</span></label>
                      	<input id="minat" name="minat" type="text" class="form-control" placeholder="ex: Tari, Seni, Pemrograman, Dll" required>
					</div>
					<div class="form-group">
						<label for="bidang" style="float: left; color:white">Bidang yang diikuti <span style="color:red">*</span></label>
						<select id="bidang" name="bidang" class="form-control" required>
							<option value="">Pilih bidang yang diikuti</option>
							<option value="Pemuda dan Olahraga">Pemuda dan Olahraga</option>
							<option value="Pendidikan">Pendidikan</option>
							<option value="Kesehatan">Kesehatan</option>
							<option value="Pariwisata">Pariwisata</option>
							<option value="Ekonomi Kreatif">Ekonomi Kreatif</option>
						</select>
					</div>
					<div class="form-group">
						<label for="asuransi" style="float: left; color:white">Penggunaan asuransi <span style="color:red">*</span></label>
						<select id="asuransi" name="asuransi" class="form-control" required>
							<option value="">Pilih penggunaan asuransi</option>
							<option value="BPJS">BPJS</option>
							<option value="Non BPJS">Non BPJS</option>
						</select>
					</div>
					<div class="form-group">
						<label for="penyakit" style="float: left; color:white">Penyakit yang pernah/sedang di derita <span style="color:red">*</span></label>
                      	<textarea id="penyakit" name="penyakit" type="text" class="form-control" placeholder="Penyakit yang pernah/sedang di derita." required></textarea>
					</div>
					<div class="form-group">
						<label for="alasan" style="float: left; color:white">Alasan mengikuti KKN <span style="color:red">*</span></label>
                      	<textarea id="alasan" name="alasan" type="text" class="form-control" placeholder="Alasan mengikuti KKN." required></textarea>
					</div>
					<div class="form-group">
                      	<input style="width:100%" name="submit" type="submit" class="btn btn-default py-3 px-5" value="Daftar">
					</div>
					
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Merajut Nusantara III</h2>
              <p>Tak ada yang lebih baik antara suku yang satu dengan suku lainnya. Semua sama, satu negara, satu bangsa, menjunjung tinggi satu bahasa, yaitu Indonesia.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
			  	<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a><span style="font-size:26px;padding-left: 10px;">kkntematikIII2020</span></li><br>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a><span style="font-size:26px;padding-left: 10px;">kkntematikIII2020</span></li><br>
				<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a><span style="font-size:26px;padding-left: 10px;">kkntemetikIII2020</span></li>
              </ul>
            </div>
          </div>
          <!-- <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Useful Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Speakers</a></li>
                <li><a href="#" class="py-2 d-block">Shcedule</a></li>
                <li><a href="#" class="py-2 d-block">Events</a></li>
                <li><a href="#" class="py-2 d-block">Blog</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Privacy</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Career</a></li>
                <li><a href="#" class="py-2 d-block">About Us</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                <li><a href="#" class="py-2 d-block">Services</a></li>
              </ul>
            </div>
          </div> -->
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Hubungi Kami</h2>
            	<div class="block-23 mb-3">
				  <ul>
				  	<li><p>Sekretariat I :</p></li>
	                <li><span class="icon icon-map-marker"></span><span class="text">UNIVERSITAS ESA UNGGUL, Jl.Arjuna Utara No.9, Kb.Jeruk, Kota Jakarta Barat 11510</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+62 21 5674223</span></a></li>
				  	<li><p>Sekretariat II :</p></li>
	                <li><span class="icon icon-map-marker"></span><span class="text">Kantor LLLDIKTI Wilayah III, Jl.SMA Negri 14, RT.4/RW.9, Cawang, Kramatjati, Jakarta Timur 13630</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+62 21 8090275</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">merajut.nusantara2019@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright Merajut Nusantara III &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?php echo base_url("website/");?>js/jquery.min.js"></script>
  <script src="<?php echo base_url("website/");?>js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url("website/");?>js/popper.min.js"></script>
  <script src="<?php echo base_url("website/");?>js/bootstrap.min.js"></script>
  <script src="<?php echo base_url("website/");?>js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url("website/");?>js/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url("website/");?>js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url("website/");?>js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url("website/");?>js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url("website/");?>js/aos.js"></script>
  <script src="<?php echo base_url("website/");?>js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo base_url("website/");?>js/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url("website/");?>js/jquery.timepicker.min.js"></script>
  <script src="<?php echo base_url("website/");?>js/scrollax.min.js"></script>
  <script src="<?php echo base_url("website/");?>js/google-map.js"></script>
  <script src="<?php echo base_url("website/");?>js/main.js"></script>
	
	<script>
  	$(document).ready(function() {
        setInterval(function() {
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("website/"); ?>ajax/count-po.php',
                success: function(html) {
                    $('#count_po').html(html);
                }
            });
        }, 1000);
	});
	$(document).ready(function() {
        setInterval(function() {
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("website/"); ?>ajax/count-pendidikan.php',
                success: function(html) {
                    $('#count_pendidikan').html(html);
                }
            });
        }, 1000);
	});
	$(document).ready(function() {
        setInterval(function() {
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("website/"); ?>ajax/count-kesehatan.php',
                success: function(html) {
                    $('#count_kesehatan').html(html);
                }
            });
        }, 1000);
	});
	$(document).ready(function() {
        setInterval(function() {
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("website/"); ?>ajax/count-pariwisata.php',
                success: function(html) {
                    $('#count_pariwisata').html(html);
                }
            });
        }, 1000);
	});
	$(document).ready(function() {
        setInterval(function() {
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("website/"); ?>ajax/count-ek.php',
                success: function(html) {
                    $('#count_ek').html(html);
                }
            });
        }, 1000);
    });
    </script>
  </body>
</html>