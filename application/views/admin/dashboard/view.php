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
	<title>Welcome to Admin Dashboard</title>
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
			    
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
									    <?php foreach($payment_count as $pay_cnt){} ?>
										<p class="mb-0">Revenue</p>
										<h4 class="my-1">$<?php echo number_format($pay_cnt->payment_count); ?></h4>
									</div>
									<div class="widgets-icons ms-auto"><i class='bx bxs-wallet'></i>
									</div>
								</div>
								<div id="chart1"></div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
									    <?php foreach($user_count as $usr_cnt){} ?>
										<p class="mb-0">Total Users</p>
										<h4 class="my-1"><?php echo number_format($usr_cnt->user_count); ?></h4>
									</div>
									<div class="widgets-icons ms-auto"><i class='bx bxs-group'></i>
									</div>
								</div>
								<div id="chart2"></div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
									    <?php foreach($posting_count as $post_cnt){} ?>
										<p class="mb-0">Total Posting</p>
										<h4 class="my-1"><?php echo number_format($post_cnt->posting_count); ?></h4>
									</div>
									<div class="widgets-icons ms-auto"><i class='bx bxs-binoculars'></i>
									</div>
								</div>
								<div id="chart3"></div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
				
				<div class="row row-cols-1 row-cols-xl-2">
					<!--<div class="col d-flex">
						<div class="card radius-10 w-100">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-0">Top Categories</h5>
									</div>
									<div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
									</div>
								</div>
								<div class="mt-5" id="chart15"></div>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Kids <span class="badge bg-light-white-2 rounded-pill">25</span>
								</li>
								<li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Women <span class="badge bg-light-white-3 rounded-pill">10</span>
								</li>
								<li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Men <span class="badge bg-white rounded-pill text-dark">65</span>
								</li>
								<li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Furniture <span class="badge bg-light-white-4 text-white rounded-pill">14</span>
								</li>
							</ul>
						</div>
					</div>
					
					<div class="col d-flex">
						<div class="card radius-10 w-100 overflow-hidden">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-0">Sales Overiew</h5>
									</div>
									<div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
									</div>
								</div>
								<div class="mt-5" id="chart20"></div>
							</div>
							<div class="card-footer bg-transparent border-top-0">
								<div class="d-flex align-items-center justify-content-between text-center">
									<div>
										<h6 class="mb-1 font-weight-bold">$289.42</h6>
										<p class="mb-0">Last Week</p>
									</div>
									<div class="mb-1">
										<h6 class="mb-1 font-weight-bold">$856.14</h6>
										<p class="mb-0">Last Month</p>
									</div>
									<div>
										<h6 class="mb-1 font-weight-bold">$987,25</h6>
										<p class="mb-0">Last Year</p>
									</div>
								</div>
							</div>
						</div>
					</div>-->
					
				</div>
				
				<!--end row-->
				
				<div class="row">
					<div class="col-xl-8 d-flex">
						<div class="card radius-10 w-100">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-1">Transaction History</h5>
										<p class="mb-0 font-13"><i class='bx bxs-calendar'></i>in the month of <?php echo date('M'); ?>last 30 days revenue</p>
									</div>
									<div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
									</div>
								</div>
								<div class="table-responsive mt-4">
									<table class="table align-middle mb-0 table-hover" id="Transaction-History">
										<thead class="table-light">
											<tr>
												<th>Payment Name</th>
												<th>Date</th>
												<th>Payment Type</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
										    <?php if(!empty($transaction)){ foreach($transaction as $trans){ ?>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="ms-2">
															<h6 class="mb-1 font-14"><?php echo $trans->firstname; ?> <?php echo $trans->lastname; ?></h6>
														</div>
													</div>
												</td>
												<td><?php echo date('j M Y', strtotime($trans->created_date)); ?></td>
												<td><?php echo $trans->payment_type; ?></td>
												<td>
													<div class="badge rounded-pill bg-light text-white w-100"><?php echo $trans->payment_status; ?></div>
												</td>
											</tr>
											<?php } }else{ echo ''; } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4">
						<div class="card radius-10 overflow-hidden">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div class="">
									    <?php foreach($user_percent as $usr_per){} 
									    ?>
										<p class="mb-1">Users</p>
										<h4 class="mb-0"><?php echo $usr_per-> user_percentage; ?></h4>
									</div>
								</div>
							</div>
							<div id="chart12"></div>
						</div>
						<div class="card radius-10 overflow-hidden">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div class="">
									    <?php foreach($location_percent as $loc_per){} 
									    ?>
										<p class="mb-1">Location</p>
										<h4 class="mb-0"><?php echo $loc_per-> location_percentage; ?></h4>
									</div>
								</div>
							</div>
							<div id="chart13"></div>
						</div>
						<div class="card radius-10 overflow-hidden">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div class="">
									    <?php foreach($posting_percent as $pst_per){} 
									    ?>
										<p class="mb-1">Posting</p>
										<h4 class="mb-0"><?php echo $pst_per->posting_percentage; ?></h4>
									</div>
								</div>
							</div>
							<div id="chart14"></div>
						</div>
					</div>
				</div>
				<!--end row-->
				
				<div class="row">
					<div class="col-12 col-xl-6 d-flex">
						<div class="card radius-10 w-100">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-0">Users</h5>
									</div>
									<div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
									</div>
								</div>
							</div>
							<div class="customers-list p-3 mb-3">
								<?php if(!empty($users)){ foreach($users as $usr){ ?>
								<div class="customers-list-item d-flex align-items-center border-top border-bottom p-2 cursor-pointer">
									<div class="">
										<img src="<?php echo base_url('assets/images/original.jpg'); ?>" class="rounded-circle" width="46" height="46" alt="" />
									</div>
									<div class="ms-2">
										<h6 class="mb-1 font-14"><?php echo $usr->firstname; ?> <?php echo $usr->lastname; ?></h6>
										<p class="mb-0 font-13"><?php echo $usr->email; ?></p>
									</div>
								</div>
								<?php } }else{ echo ''; } ?>
								
							</div>
						</div>
					</div>
					
					<div class="col-12 col-xl-6 d-flex">
						<div class="card radius-10 w-100">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-0">Posting</h5>
									</div>
									<div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
									</div>
								</div>
							</div>
							<div class="customers-list p-3 mb-3">
								<?php if(!empty($posting)){ foreach($posting as $post){ ?>
								<div class="customers-list-item d-flex align-items-center border-top border-bottom p-2 cursor-pointer">
									<div class="">
										<img src="<?php echo base_url('uploads/posting/'.$post->image); ?>" class="rounded-circle" width="46" height="46" alt="<?php echo $post->title; ?>" />
									</div>
									<div class="ms-2">
										<h6 class="mb-1 font-14"><?php echo str_replace('-', ' ', $post->title); ?></h6>
										<p class="mb-0 font-13"><?php echo $post->category; ?></p>
									</div>
								</div>
								<?php } }else{ echo ''; } ?>
								
							</div>
						</div>
					</div>
					
					<!--<div class="col-12 col-xl-6 d-flex">
						<div class="card radius-10 w-100">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-0">Orders Summary</h5>
									</div>
									<div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
									</div>
								</div>
								<hr/>
								<div class="row m-0 row-cols-1 row-cols-md-3">
									<div class="col border-end">
										<div id="chart16"></div>
									</div>
									<div class="col border-end">
										<div id="chart17"></div>
									</div>
									<div class="col">
										<div id="chart18"></div>
									</div>
								</div>
								<div id="chart19"></div>
							</div>
						</div>
					</div>-->
				</div>
				<!--end row-->
				
				<script>
                    function approveOrder(id){
                      var order_id = id;
                      if(confirm("Are you sure you want to approve this payment?")){
                      $.post('<?php echo base_url('admin/approve_payment'); ?>', {"order_id": order_id}, function(data){
                        location.reload();
                        $('#cte').html(data)
                        });
                      }
                    }
                    
                    function cancelOrder(id){
                      var order_id = id;
                       if(confirm("Are you sure you want to cancel this payment?")){
                        $.post('<?php echo base_url('admin/cancel_payment'); ?>', {"order_id": order_id}, function(data){
                          location.reload();
                          $('#cti').html(data)
                          });
                     }
                    }
                    
                    function deleteOrder(id){
                      var order_id = id;
                       if(confirm("Are you sure you want to delete this payment?")){
                        $.post('<?php echo base_url('admin/delete_payment'); ?>', {"order_id": order_id}, function(data){
                          location.reload();
                          $('#ctd').html(data)
                          });
                     }
                    }
                    
                </script>
                <p id='ctd'></p>
                <p id='cte'></p>
                <p id='cti'></p>
                
				<div class="card radius-10">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<h5 class="mb-0">Payment Summary</h5>
							</div>
							<div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
							</div>
						</div>
						<hr/>
						<div class="table-responsive">
							<table class="table align-middle mb-0">
								<thead class="table-light">
									<tr>
										<th>FullName</th>
										<th>Telephone</th>
										<th>Town</th>
										<th>State</th>
										<th>Zip code</th>
										<th>Payment Type</th>
										<th>Payment Status</th>
										<th>Date</th>
										<th>Action</th>
										<th>Action</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								    <?php if(!empty($payment)){ foreach($payment as $pay){ ?>
									<tr>
										<td><?php echo $pay->firstname; ?> <?php echo $pay->lastname; ?></td>
										<td><?php echo $pay->telephone; ?></td>
										<td><?php echo $pay->town; ?></td>
										<td><?php echo $pay->state; ?></td>
										<td><?php echo $pay->zipcode; ?></td>
										<td><?php echo $pay->payment_type; ?></td>
										<td>
											<div class="d-flex align-items-center text-white">	<i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
												<span><?php echo $pay->payment_status; ?></span>
											</div>
										</td>
										<td><?php echo date('j M Y', strtotime($pay->created_date)); ?></td>
										<td>
											<div class="d-flex order-actions">	<button type="button" class="" title="Approved" onclick="approveOrder(<?php echo $pay->id; ?>)">Approve</button>
											</div>
										</td>
										<td>
										    <div class="d-flex order-actions">
											<button type="button" class="" title="Cancelled" onclick="cancelOrder(<?php echo $pay->id; ?>)">Cancel</button>
											</div>
										</td>
										<td>
										    <div class="d-flex order-actions">
										<button type="button" class="ms-4" title="Delete Payment" onclick="deleteOrder(<?php echo $pay->id; ?>)">Delete</button>
											</div>
										</td>
									</tr>
									<?php } }else{ echo ''; } ?>
								</tbody>
							</table>
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
	<script src="<?php echo base_url('assets/plugins/apexcharts-bundle/js/apexcharts.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/datatable/js/jquery.dataTables.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/datatable/js/dataTables.bootstrap5.min.js'); ?>"></script>
	<script>
		$(document).ready(function() {
			$('#Transaction-History').DataTable({
				lengthMenu: [[6, 10, 20, -1], [6, 10, 20, 'Todos']]
			});
		  } );
	</script>
	<script src="<?php echo base_url('assets/js/dashboard-eCommerce.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/app.js'); ?>"></script>
	<!--app JS-->
	<script>
		new PerfectScrollbar('.product-list');
		new PerfectScrollbar('.customers-list');
	</script>
	
</body>

</html>