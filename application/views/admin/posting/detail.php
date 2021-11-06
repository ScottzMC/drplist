<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="<?php echo base_url('assets/images/favicon-32x32.png'); ?>" type="image/png" />
	<!--plugins-->
	<link href="<?php echo base_url('assets/plugins/simplebar/css/simplebar.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/plugins/metismenu/css/metisMenu.min.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/plugins/datatable/css/dataTables.bootstrap5.min.css'); ?>" rel="stylesheet" />
	<!-- loader-->
	<link href="<?php echo base_url('assets/css/pace.min.css'); ?>" rel="stylesheet" />
	<!-- Bootstrap CSS -->
	<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/app.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/icons.css'); ?>" rel="stylesheet">
	<?php foreach($posting as $post){}?>
	<title><?php echo str_replace('-', ' ', $post->title); ?> Posting || Admin Dashboard</title>
</head>

<body class="bg-theme bg-theme2">
	<!--wrapper-->
	<div class="wrapper">
		<!-- Nav -->
		<?php include 'menu/nav.php'; ?>
		<!-- End of Nav -->
		
			<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">

				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Posting</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page"><?php echo str_replace('-', ' ', $post->title); ?> Posting</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
				
				<script>
                    function rejectPost(id){
                      var order_id = id;
                       if(confirm("Are you sure you want to reject this post?")){
                        $.post('<?php echo base_url('admin/reject_post'); ?>', {"order_id": order_id}, function(data){
                          location.reload();
                          $('#cti').html(data)
                          });
                     }
                    }
                    
                    function sendPayment(id){
                      var order_id = id;
                       if(confirm("Are you sure you want to send a payment request to this user?")){
                        $.post('<?php echo base_url('admin/send_payment'); ?>', {"order_id": order_id}, function(data){
                          alert('Send Payment Request Successfully');
                          location.reload();
                          $('#cte').html(data)
                          });
                     }
                    }
                    
                    function deletePost(id){
                      var order_id = id;
                       if(confirm("Are you sure you want to delete this post?")){
                        $.post('<?php echo base_url('admin/delete_post'); ?>', {"order_id": order_id}, function(data){
                          window.location.href="<?php echo site_url('admin/posting'); ?>";
                          $('#ctd').html(data)
                          });
                     }
                    }
                    
                </script>
                <p id='ctd'></p>
                <p id='cte'></p>
                <p id='cti'></p>

				 <div class="card">
					<div class="row g-0">
					  <div class="col-md-4 border-end">
						<img src="<?php echo base_url('uploads/posting/'.$post->image); ?>" class="img-fluid" alt="<?php echo $post->title; ?>">
						<!--<div class="row mb-3 row-cols-auto g-2 justify-content-center mt-3">
							<div class="col"><img src="<?php echo base_url('assets/images/products/12.png'); ?>" width="70" class="border rounded cursor-pointer" alt=""></div>
							<div class="col"><img src="<?php echo base_url('assets/images/products/11.png'); ?>" width="70" class="border rounded cursor-pointer" alt=""></div>
							<div class="col"><img src="<?php echo base_url('assets/images/products/14.png'); ?>" width="70" class="border rounded cursor-pointer" alt=""></div>
							<div class="col"><img src="<?php echo base_url('assets/images/products/15.png'); ?>" width="70" class="border rounded cursor-pointer" alt=""></div>
						</div>-->
					  </div>
					  <div class="col-md-8">
						<div class="card-body">
						  <h4 class="card-title"><?php echo str_replace('-', ' ', $post->title); ?></h4>
						  <div class="d-flex gap-3 py-3">
							  <!--<div class="cursor-pointer">
								<i class='bx bxs-star text-warning'></i>
								<i class='bx bxs-star text-warning'></i>
								<i class='bx bxs-star text-warning'></i>
								<i class='bx bxs-star text-warning'></i>
								<i class='bx bxs-star'></i>
							  </div>-->	
							  <div class="text-white">
							      <a href="<?php echo site_url('admin/edit_posting/'.$post->id); ?>">Edit Post</a>
							      <br>
							      <button type="button" onclick="rejectPost(<?php echo $post->id; ?>)">Reject Post</button>
							      <button type="button" onclick="deletePost(<?php echo $post->id; ?>)">Delete Post</button>
							      <button type="button" onclick="sendPayment(<?php echo $post->id; ?>)">Send Payment Request</button>
							  </div>
						  </div
						  >
						  <div class="mb-3"> 
							<span class="price h4">$<?php echo number_format($post->price); ?></span> 
						</div>
						  <dl class="row">
							<dt class="col-sm-3">Category</dt>
							<dd class="col-sm-9"><?php echo $post->category; ?></dd>
							
							<dt class="col-sm-3">Status</dt>
							<dd class="col-sm-9"><?php echo $post->status; ?></dd>
						  </dl>
						  <hr>
						</div>
					  </div>
					</div>
                    <hr/>
					<div class="card-body">
						<ul class="nav nav-tabs mb-0" role="tablist">
							<li class="nav-item" role="presentation">
								<a class="nav-link active" data-bs-toggle="tab" href="#primaryhome" role="tab" aria-selected="true">
									<div class="d-flex align-items-center">
										<div class="tab-icon"><i class='bx bx-comment-detail font-18 me-1'></i>
										</div>
										<div class="tab-title"> Product Description </div>
									</div>
								</a>
							</li>
						</ul>
						<div class="tab-content pt-3">
							<div class="tab-pane fade show active" id="primaryhome" role="tabpanel">
								<p><?php echo $post->description; ?></p>
							</div>
						</div>
					</div>

				  </div>
				  
			</div>
		</div>
		<!--end page wrapper -->
		
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2021. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
	
	
	<!-- Bootstrap JS -->
	<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
	<!--plugins-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    	<!--<script src="< ?php echo base_url('assets/js/pace.min.js'); ?>"></script>-->
	<script src="<?php echo base_url('assets/plugins/simplebar/js/simplebar.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/metismenu/js/metisMenu.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js'); ?>"></script>
	<!--app JS-->
	<script src="<?php echo base_url('assets/js/app.js'); ?>"></script>
</body>

</html>