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
		
		<title>Forgot Password || Admin Dashboard</title>
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
										<h3 class="">Forgot Password</h3>
										<p>Put your email and password 
										</p>
									</div>
									<!--<div class="d-grid">
										<a class="btn my-4 shadow-sm btn-light" href="#"> <span class="d-flex justify-content-center align-items-center">
                                          <img class="me-2" src="<?php echo base_url('assets/images/icons/search.svg'); ?>" width="16" alt="Image Description">
                                          <span>Sign in with Google</span>
											</span>
										</a> <a href="javascript:;" class="btn btn-light"><i class="bx bxl-facebook"></i>Sign in with Facebook</a>
									</div>-->
									<div class="login-separater text-center mb-4"> <span>FORGOT PASSWORD</span>
										<hr/>
									</div>
									<div class="form-body">
										<form action="<?php echo base_url('admin/forgot_password'); ?>" method="POST" class="row g-3">
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email Address</label>
												<input type="email" name="email" class="form-control" placeholder="Email Address">
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" name="forgot" class="btn btn-light"><i class="bx bxs-lock-open"></i>Submit</button>
												</div>
											</div>
										</form>
										<?php
                                    	echo $this->session->flashdata('msg');
                                    	echo $this->session->flashdata('msgError');
                                    	?>
									</div>
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