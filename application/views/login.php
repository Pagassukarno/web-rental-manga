<!doctype html>
<html lang="en">
  <head>
  	<title>REMANG - Rental Manga</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?php echo base_url ('css/css/style.css') ?>">

	</head>
	<body class="img js-fullheight" style="background-image: url(<?php echo base_url ('img/login1.jpg')?>">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h1 style="color: white; margin-top: 40px;">Rental Manga</h1>
				</div>
			</div>
			<div class="row justify-content-center" >
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
				  <h4 class="mb-4 text-center" style="color: white;">Udah Punya Akun ? </h4>
				  <?php 
				if($this->session->flashdata('error') !='')
				{
					echo '<div class="alert alert-danger" role="alert">';
					echo $this->session->flashdata('error');
					echo '</div>';
				}
				?>

				<?php 
				if($this->session->flashdata('success_register') !='')
				{
					echo '<div class="alert alert-info" role="alert">';
					echo $this->session->flashdata('success_register');
					echo '</div>';
				}
				?>

		      	<form  action="<?php echo base_url(); ?>login/proses" method="post" class="signin-form">
		      		<div class="form-group">
		      			<input  type="text" class="form-control" name="email" id="email" placeholder="E-mail">
					
					</div>
	            <div class="form-group">
	              <input name="password" id="password-field" type="password" class="form-control" placeholder="Password">
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
				</div>
	            
				<div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Masuk</button>
	            </div>
				
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Lupa Password</a>
								</div>
	            </div>
				
	          </form>
			  <a href="daftar">
	          <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Buat Akun</button>
	            </div>
			  </a>
		      </div>
				</div>
			</div>
		</div>

	<script src="<?php echo base_url ('js/js/jquery.min.js')?>"></script>
  <script src="<?php echo base_url ('js/js/popper.js')?>"></script>
  <script src="<?php echo base_url ('js/js/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url ('js/js/main.js')?>"></script>

	</body>
</html>

