<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Rental Manga</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?php echo base_url ('css/css/style.css') ?>">

	</head>
	<body class="img js-fullheight" style="background-image: url(img/login1.jpg);">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-4">
					<h1 style="color: white; margin-top: 40px;">Rental Manga</h1>
				</div>
			</div>
			
			<div class="row justify-content-center" >
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h4 class="mb-2 text-center" style="color: white;"> Membuat Akun </h4>
				  <?php 
				if($this->session->flashdata('error') !='')
				{
					echo '<div class="alert alert-danger" role="alert">';
					echo $this->session->flashdata('error');
					echo '</div>';
				}
				?>
		      	<form name="forminput" method="post" action="<?php echo base_url(); ?>daftar/proses" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control" name="email" id="email"  placeholder="Email" >
		
					</div>
					  <div class="form-group">
		      			<input type="text" class="form-control" name="nama_user" id="nama_user" placeholder="Nama">
						  
					</div>
					  <div class="form-group">
		      			<input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat"  >
			
					</div>
					  <div class="form-group">
		      			<input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="No. Handphone" >
		
					</div>
	            <div class="form-group">
	              <input id="password-field" type="password" name="password" id="password" class="form-control" placeholder="Password" >
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
			
	            </div>
			 	          <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3" name="daftar" value="Daftar">Daftar</button>
	            </div>
				</form>
				</div>
			</div>
		</div>

        <script src="<?php echo base_url ('js/js/jquery.min.js')?>"></script>
  <script src="<?php echo base_url ('js/js/popper.js')?>"></script>
  <script src="<?php echo base_url ('js/js/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url ('js/js/main.js')?>"></script>

	</body>
</html>

