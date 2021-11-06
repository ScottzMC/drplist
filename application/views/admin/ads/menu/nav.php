<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="<?php echo base_url('assets/images/logo-icon.png'); ?>" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Admin</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-home-circle'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
					<ul>
						<li> <a href="<?php echo site_url('site/home'); ?>"><i class="bx bx-right-arrow-alt"></i>Back to Home</a>
						</li>
						<li> <a href="<?php echo site_url('admin/dashboard'); ?>"><i class="bx bx-right-arrow-alt"></i>Default</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-cart'></i>
						</div>
						<div class="menu-title">Posting</div>
					</a>
					<ul>
						<li> <a href="<?php echo site_url('admin/posting'); ?>"><i class="bx bx-right-arrow-alt"></i>View Postings</a>
						</li>
						<li> <a href="<?php echo site_url('admin/add_posting'); ?>"><i class="bx bx-right-arrow-alt"></i>Add Postings</a>
						</li>
					</ul>
				</li>
				
				<!--<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-home-circle'></i>
						</div>
						<div class="menu-title">Personalised Ads</div>
					</a>
					<ul>
						<li> <a href="<?php echo site_url('admin/personalised_ad'); ?>"><i class="bx bx-right-arrow-alt"></i>View Personalised Ads</a>
						</li>
						<li> <a href="<?php echo site_url('admin/add_personalised_ad'); ?>"><i class="bx bx-right-arrow-alt"></i>Add Personalised Ads</a>
						</li>
					</ul>
				</li>-->
				
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-cart'></i>
						</div>
						<div class="menu-title">Options</div>
					</a>
					<ul>
						<li> <a href="<?php echo site_url('admin/options'); ?>"><i class="bx bx-right-arrow-alt"></i>View Options</a>
						</li>
						<li> <a href="<?php echo site_url('admin/add_options'); ?>"><i class="bx bx-right-arrow-alt"></i>Add Options</a>
						</li>
					</ul>
				</li>
				
				<li class="menu-label">Pages</li>
				
				<li>
					<a href="<?php echo site_url('admin/profile'); ?>">
						<div class="parent-icon"><i class="bx bx-user-circle"></i>
						</div>
						<div class="menu-title">User Profile</div>
					</a>
				</li>
				<li>
					<a href="<?php echo site_url('admin/users'); ?>">
						<div class="parent-icon"><i class="bx bx-user-circle"></i>
						</div>
						<div class="menu-title">User Lists</div>
					</a>
				</li>
				
				<li>
					<a href="<?php echo site_url('admin/payments'); ?>">
						<div class="parent-icon"><i class="bx bx-user-circle"></i>
						</div>
						<div class="menu-title">Payment</div>
					</a>
				</li>
				
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					<!--<div class="search-bar flex-grow-1">
						<div class="position-relative search-bar-box">
							<input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
							<span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
						</div>
					</div>-->
					<div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center">
							<li class="nav-item dropdown dropdown-large">
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Notifications</p>
											<p class="msg-header-clear ms-auto">Marks all as read</p>
										</div>
									</a>
									<div class="header-notifications-list">
									</div>
								</div>
							</li>
							
							<li class="nav-item dropdown dropdown-large">
								<div class="dropdown-menu dropdown-menu-end">
									<div class="header-message-list">
									</div>
								</div>
							</li>
						</ul>
					</div>
					
					<div class="user-box dropdown">
						<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="<?php echo base_url('assets/images/avatars/avatar-2.png'); ?>" class="user-img" alt="user avatar">
							<div class="user-info ps-3">
							    <?php if(!empty($user_profile)){ foreach($user_profile as $user){} ?>
								<p class="user-name mb-0"><?php echo $user->firstname; ?> <?php echo $user->lastname; ?></p>
								<?php }else{ echo ''; } ?>
								<p class="designattion mb-0">Admin</p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profile</span></a>
							</li>
							<li>
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
							</li>
						</ul>
					</div>
					
				</nav>
			</div>
		</header>
		<!--end header -->