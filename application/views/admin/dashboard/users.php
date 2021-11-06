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
	<title>View Users || Admin Dashboard</title>
</head>

<body class="bg-theme bg-theme2">
	<!--wrapper-->
	<div class="wrapper">
		<!-- Nav -->
		<?php include 'menu/nav.php'; ?>
		<!-- End of Nav -->
		
    		<script>
            function activateUser(id){
              var user_id = id;
              if(confirm("Are you sure you want to activate this user?")){
              $.post('<?php echo base_url('admin/activate_user'); ?>', {"user_id": user_id}, function(data){
                location.reload();
                $('#cte').html(data)
                });
              }
            }
            
            function deactivateUser(id){
              var user_id = id;
               if(confirm("Are you sure you want to deactivate this user?")){
                $.post('<?php echo base_url('admin/deactivate_user'); ?>', {"user_id": user_id}, function(data){
                  location.reload();
                  $('#cti').html(data)
                  });
             }
            }
            
            function deleteUser(id){
              var user_id = id;
               if(confirm("Are you sure you want to delete this user?")){
                $.post('<?php echo base_url('admin/delete_user'); ?>', {"user_id": user_id}, function(data){
                  location.reload();
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
					<div class="breadcrumb-title pe-3">Users</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">List of Users</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">List of Users</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Full Name</th>
										<th>Email</th>
										<th>Role</th>
										<th>User Status</th>
										<th>Telephone</th>
										<th>Address</th>
										<th>Town</th>
										<th>State</th>
										<th>Registered</th>
										<th>Action</th>
										<th>Action</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								    <?php if(!empty($users)){ foreach($users as $usr){ ?>
								    <?php foreach($country as $count){} ?>
									<?php foreach($state as $sta){} ?>
									<?php foreach($town as $twn){} ?>
									
									<?php 
									$query = $this->db->query("SELECT * FROM states WHERE state_id = '$usr->state' ")->result();
									foreach($query as $qry){}
									
									$sequel = $this->db->query("SELECT * FROM cities WHERE city_id = '$usr->town' ")->result();
									foreach($sequel as $sql){}
									?>
									<tr>
										<td><?php echo $usr->firstname; ?> <?php echo $usr->lastname; ?></td>
										<td><?php echo $usr->email; ?></td>
										<td><?php echo $usr->role; ?></td>
										<td><?php echo $usr->status; ?></td>
										<td><?php echo $usr->telephone; ?></td>
										<td><?php echo $usr->address; ?></td>
										<td><?php echo $sql->city_name; ?></td>
										<td><?php echo $qry->state_name; ?></td>
										<td><?php echo date('j M Y', strtotime($usr->created_date)); ?></td>
										<td>
											<div class="d-flex order-actions">	<button type="button" class="" title="Activate User" onclick="activateUser(<?php echo $usr->id; ?>)">Activate</button>
											</div>
										</td>
										<td>
										    <div class="d-flex order-actions">
										<button type="button" class="ms-4" title="Deactivate User" onclick="deactivateUser(<?php echo $usr->id; ?>)">Deactivate</button>
										 </div>
										</td>
										<td>
										    <div class="d-flex order-actions">
										<button type="button" class="ms-4" title="Delete User" onclick="deleteUser(<?php echo $usr->id; ?>)">Delete User</button>
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