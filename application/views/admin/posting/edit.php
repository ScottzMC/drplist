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
	<?php foreach($edit_posting as $edt_pt){} ?>
	<title>Edit <?php echo str_replace('-', ' ', $edt_pt->title); ?> Posting || Admin Dashboard</title>
</head>

<style>
    option{
        color: black;
    }
</style>

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
								<li class="breadcrumb-item active" aria-current="page">Edit <?php echo $edt_pt->title; ?> Posting</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->

              <div class="card">
				  <div class="card-body p-4">
					  <h5 class="card-title">Edit Posting</h5>
					  <hr/>
                       <div class="form-body mt-4">
                        <form action="<?php echo base_url('admin/edit_posting/'.$edt_pt->id); ?>" method="POST" enctype="multipart/form-data" accept-charset="UTF-8">
					    <div class="row">
						   <div class="col-lg-8">
                           <div class="border border-3 p-4 rounded">
							<div class="mb-3">
								<label for="inputProductTitle" class="form-label">Title</label>
								<input type="text" class="form-control" name="title" placeholder="Enter post title" value="<?php echo str_replace('-', ' ', $edt_pt->title); ?>">
							  </div>
							  <div class="mb-3">
								<label for="inputProductDescription" class="form-label">Description</label>
								<textarea class="form-control" name="description" rows="3"><?php echo $edt_pt->description; ?></textarea>
							  </div>
                            </div>
						   </div>
						   <div class="col-lg-4">
							<div class="border border-3 p-4 rounded">
                              <div class="row g-3">
								<div class="col-md-6">
									<label for="inputPrice" class="form-label">Price</label>
									<input type="number" class="form-control" name="price" placeholder="00.00" value="<?php echo $edt_pt->price; ?>">
								  </div>
								  <div class="col-12">
									<label for="inputProductType" class="form-label">Category</label>
									<select class="form-select" name="category">
									    <?php if(!empty($option_category)){ foreach($option_category as $opt_cat){ ?>
										<option value="<?php echo $opt_cat->category; ?>"><?php echo $opt_cat->category; ?></option>
										<?php } }else{ echo ''; } ?>
									  </select>
								  </div>
								  
								  <div class="col-12">
									<label for="inputVendor" class="form-label">Country</label>
									<select name="country" id="country" class="form-control">
                                        <option value="">Select Country</option>
                                        <option value="224">United States</option>
                                    </select>
								  </div>
								  
								  <div class="col-12">
									<label for="inputVendor" class="form-label">Town</label>
									<select id="state" name="state" class="form-control">
                                        <option value="">Select country first</option>
									</select>
								  </div>
								  
								  <div class="col-12">
									<label for="inputVendor" class="form-label">Town</label>
									<select name="town" id="city" class="form-control">
                                        <option value="">Select state first</option>
                                    </select>
								  </div>
								  
								  <div class="col-12">
									  <div class="d-grid">
                                         <button type="submit" name="btn_edit" class="btn btn-light">Save</button>
									  </div>
								  </div>
							  </div> 
						  </div>
						  </div>
					   </div>
					   </form>
					   <!--end row-->
					</div>
				  </div>
			  </div>
			  
			  <div class="card">
				  <div class="card-body p-4">
					  <h5 class="card-title">Edit Image</h5>
					  <hr/>
                       <div class="form-body mt-4">
                        <form action="<?php echo base_url('admin/update_image/'.$edt_pt->id); ?>" method="POST" enctype="multipart/form-data" accept-charset="UTF-8">
					    <div class="row">
						   <div class="col-lg-8">
                           <div class="border border-3 p-4 rounded">
							  <div class="mb-3">
								<label for="inputProductDescription" class="form-label">Images</label>
								<input type="file" name="fileToUpload[]">
							  </div>
                            </div>
						   </div>
						   <div class="col-12">
							  <div class="d-grid">
                                 <button type="submit" name="btn_image" class="btn btn-light">Save</button>
							  </div>
						  </div>
					   </div>
					   </form>
					   <!--end row-->
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
	<script src="<?php echo base_url('assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js'); ?>"></script>
	<script>
		$(document).ready(function () {
			$('#image-uploadify').imageuploadify();
		})
	</script>
	<!--app JS-->
	<script src="<?php echo base_url('assets/js/app.js'); ?>"></script>
	
	<script type="text/javascript">
    $(document).ready(function(){
        $('#country').on('change',function(){
            var countryID = $(this).val();
            if(countryID){
                $.ajax({
                    type:'POST',
                    url: "<?php echo base_url('admin/select_location'); ?>",
                    data:'country_id='+countryID,
                    success:function(html){
                        $('#state').html(html);
                        $('#city').html('<option value="">Select state first</option>'); 
                    }
                }); 
            }else{
                $('#state').html('<option value="">Select country first</option>');
                $('#city').html('<option value="">Select state first</option>'); 
            }
        });
        
        $('#state').on('change',function(){
            var stateID = $(this).val();
            if(stateID){
                $.ajax({
                    type:'POST',
                    url: "<?php echo base_url('admin/select_location'); ?>",
                    data:'state_id='+stateID,
                    success:function(html){
                        $('#city').html(html);
                    }
                }); 
            }else{
                $('#city').html('<option value="">Select state first</option>'); 
            }
        });
    });
    </script>
    
</body>

</html>