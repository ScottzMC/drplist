<!doctype html>
<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--favicon-->
		<link rel="icon" href="<?php echo base_url('assets/images/favicon-32x32.png'); ?>" type="image/png" />
		<!-- loader-->
		<link href="<?php echo base_url('assets/css/pace.min.css'); ?>" rel="stylesheet" />
		<!-- Bootstrap CSS -->
		<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/css/app.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/css/icons.css'); ?>" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
		
		<title>Create an Account || Admin Dashboard</title>
	</head>

<body class="bg-theme bg-theme1">
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="mb-4 text-center">
							<img src="<?php echo base_url('assets/images/logo-img.png'); ?>" width="180" alt="" />
						</div>
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="text-center">
										<h3 class="">Create an account</h3>
										<p>Do you have an account? <a href="<?php echo site_url('admin/login'); ?>">Login to your account here</a>
										</p>
									</div>
									<!--<div class="d-grid">
										<a class="btn my-4 shadow-sm btn-light" href="#"> <span class="d-flex justify-content-center align-items-center">
                                          <img class="me-2" src="<?php echo base_url('assets/images/icons/search.svg'); ?>" width="16" alt="Image Description">
                                          <span>Sign in with Google</span>
											</span>
										</a> <a href="javascript:;" class="btn btn-light"><i class="bx bxl-facebook"></i>Sign in with Facebook</a>
									</div>-->
									<div class="login-separater text-center mb-4"> <span>CREATE AN ACCOUNT WITH EMAIL</span>
										<hr/>
									</div>
									<div class="form-body">
										<form action="<?php echo base_url('admin/register'); ?>" method="POST" class="row g-3">
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email Address</label>
												<input type="email" name="email" class="form-control" placeholder="Email Address">                              <span class="text-danger" style="color: red;"><?php echo form_error('email'); ?></span>
											</div>
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Confirm Password</label>
												<input type="password" name="password" class="form-control" placeholder="Password">  
											<span class="text-danger" style="color: red;"><?php echo form_error('password'); ?></span>
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Confirm Password</label>
										<div class="input-group">
											<input type="password" name="cpassword" class="form-control border-end-0" placeholder="Enter Password">
												</div>                        <span class="text-danger" style="color: red;"><?php echo form_error('cpassword'); ?></span>
											</div>
											<!--<div class="col-md-6">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
													<label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
												</div>
											</div>-->
											<!--<div class="col-md-6 text-end">	<a href="#">Forgot Password ?</a>
											</div>-->
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" name="register" class="btn btn-light"><i class="bx bxs-lock-open"></i>Register</button>
												</div>
											</div>
										</form>
									</div>
									<?php
                                    	echo $this->session->flashdata('msg');
                                    	echo $this->session->flashdata('msgError');
                                    	?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->


	<!--plugins-->
	<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
	<!--<script src="< ?php echo base_url('assets/js/pace.min.js'); ?>"></script>-->
</body>

</html>