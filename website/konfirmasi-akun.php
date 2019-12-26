<?php
if (isset($_GET['email'])) {
    $email = $_GET['email'];

    $cek = $mysqli->query("SELECT * FROM pendaftar WHERE email='$email'");
    $jml = $cek->num_rows;
    if ($jml>0) {
        $query = $mysqli->query("UPDATE pendaftar SET konfirmasi_email='Y' ");
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

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    

    <section class="ftco-section services-section bg-light">
      <div class="container">
	  		<div class="row justify-content-center pb-3">
				<div class="col-md-12 text-center heading-section ftco-animate">
					<!-- <span class="subheading">Speaker</span> -->
					<h2 class="mb-4">Akun Anda telah terverifikasi<span></h2>
					<h4 >Silahkan melakukan pembayaran sebesar <b style="color: #6a76fe;">Rp 3.300.000,-.</b></h4>
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
            <div class="row justify-content-center pb-3">
				<div class="col-md-12 text-center heading-section ftco-animate">
					<!-- <span class="subheading">Speaker</span> -->
					<h2 class="mb-4">Jika sudah melakukan pembayaran<span></h2>
                    <h4 >Silahkan melakukan konfirmasi melalui WhatsApp ke <b>Nomor Berikut:</b>
                        <ul style="list-style:none">
							<li>
								<b style="color: #5ed964;">+628977000090 (Ari)</b>
							</li>
						</ul>
                    </h4>
					
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
			  	<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
				<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
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
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@merajutnusantara2020.com</span></a></li>
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo base_url("website/");?>js/google-map.js"></script>
  <script src="<?php echo base_url("website/");?>js/main.js"></script>
    
  </body>
</html>
<?php
    }
    else {
        header('Location:'.base_url("konfirmasi"));
    }
} else {
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

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    

    <section class="ftco-section services-section bg-light">
      <div class="container">
            <div class="row justify-content-center pb-3">
				<div class="col-md-12 text-center heading-section ftco-animate">
					<!-- <span class="subheading">Speaker</span> -->
					<h2 class="mb-4">Jika sudah melakukan pembayaran<span></h2>
                    <h4 >Silahkan melakukan konfirmasi melalui WhatsApp ke <b>Nomor Berikut:</b>
                        <ul style="list-style:none">
							<li>
								<b style="color: #5ed964;">+628977000090 (Ari)</b>
							</li>
						</ul>
                    </h4>
					
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
			  	<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
				<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
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
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@merajutnusantara2020.com</span></a></li>
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo base_url("website/");?>js/google-map.js"></script>
  <script src="<?php echo base_url("website/");?>js/main.js"></script>
    
  </body>
</html>
<?php
}
?>