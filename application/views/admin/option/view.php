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
	<title>View Options || Admin Dashboard</title>
</head>

<body class="bg-theme bg-theme2">
	<!--wrapper-->
	<div class="wrapper">
		<!-- Nav -->
		<?php include 'menu/nav.php'; ?>
		<!-- End of Nav -->
		
		<script>
	        function deleteCategory(id){
              var del_id = id;
               if(confirm("Are you sure you want to delete this category?")){
                $.post('<?php echo base_url('admin/delete_category'); ?>', {"del_id": del_id}, function(data){
                  location.reload();
                  $('#ctd').html(data)
                  });
             }
            }
            
            function deleteTown(id){
              var del_id = id;
               if(confirm("Are you sure you want to delete this town?")){
                $.post('<?php echo base_url('admin/delete_town'); ?>', {"del_id": del_id}, function(data){
                  location.reload();
                  $('#cte').html(data)
                  });
             }
            }
            
	    </script>
	    <p id='ctd'></p>
        <p id='cte'></p>
		
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Options</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">List of various Options</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">List of Categories</h6>
				<hr/>
				<?php if(!empty($option_category)){ ?>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Name</th>
										<th>Action</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								    <?php foreach($option_category as $opt_cat){ ?>
									<tr>
										<td><?php echo $opt_cat->category; ?></td>
										<td>
											<div class="d-flex order-actions">	<a href="<?php echo site_url('admin/edit_options/'.$opt_cat->id); ?>" class="">Edit</a>
											</div>
										</td>
										<td>
											<div class="d-flex order-actions">
											  <button type="button" title="Delete Category" onclick="deleteCategory(<?php echo $opt_cat->id; ?>)" class="ms-4">Delete</button>
											</div>
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<?php }else{ echo ''; } ?>

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