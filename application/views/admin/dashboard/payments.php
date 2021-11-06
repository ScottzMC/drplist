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
	<title>View Payments || Admin Dashboard</title>
</head>

<body class="bg-theme bg-theme2">
	<!--wrapper-->
	<div class="wrapper">
		<!-- Nav -->
		<?php include 'menu/nav.php'; ?>
		<!-- End of Nav -->
		
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
                  window.location.href="<?php echo site_url('admin/payments'); ?>";
                  $('#ctd').html(data)
                  });
             }
            }
            
        </script>
        <p id='ctd'></p>
        <p id='cte'></p>
        <p id='cti'></p>
		
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Payments</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">List of Payments</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">List of Payments</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
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
	<!--<script src="< ?php echo base_url('assets/js/pace.min.js'); ?>"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="<?php echo base_url('assets/plugins/simplebar/js/simplebar.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/metismenu/js/metisMenu.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/datatable/js/jquery.dataTables.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/datatable/js/dataTables.bootstrap5.min.js'); ?>"></script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script>
	<script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	</script>
	<!--app JS-->
	<script src="<?php echo base_url('assets/js/app.js'); ?>"></script>
</body>

</html>