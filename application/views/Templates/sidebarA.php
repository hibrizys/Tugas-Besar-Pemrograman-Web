	<!-- sidebar -->
	<div class="sidebar">
		<!-- sidebar logo -->
		<a href="<?= base_url('admin'); ?>" class="sidebar__logo">
			<img src="<?= base_url(); ?>assets2/img/logo.svg" alt="">
		</a>
		<!-- end sidebar logo -->
		
		<!-- sidebar user -->
		<div class="sidebar__user">
			<div class="sidebar__user-img">
				<img src="<?= base_url(); ?>assets2/img/user.svg" alt="">
			</div>

			<div class="sidebar__user-title">
				<span>Admin</span>
				<p><?=$user['name']; ?></p>
			</div>

			<button class="sidebar__user-btn" type="button">
				<a href="<?= base_url('auth/signout'); ?>" style="color: white">
					<i class="icon ion-ios-log-out"></i>
				</a>
			</button>
		</div>
		<!-- end sidebar user -->
        
		<!-- sidebar nav -->
		<div class="sidebar__nav-wrap">
			<ul class="sidebar__nav">
				<li class="sidebar__nav-item">
                    <!-- sidebar__nav-link sidebar__nav-link--active -->
					<a href="<?= base_url('admin'); ?>" class="sidebar__nav-link"><i class="icon ion-ios-keypad"></i> <span>Dashboard</span></a>
				</li>

				<li class="sidebar__nav-item">
					<a href="<?= base_url('admin/catalog'); ?>" class="sidebar__nav-link"><i class="icon ion-ios-film"></i> <span>Catalog</span></a>
				</li>

				<!-- collapse -->
				<li class="sidebar__nav-item">
					<a class="sidebar__nav-link" data-toggle="collapse" href="#collapseMenu" role="button" aria-expanded="false" aria-controls="collapseMenu"><i class="icon ion-ios-copy"></i> <span>Pages</span> <i class="icon ion-md-arrow-dropdown"></i></a>

					<ul class="collapse sidebar__menu" id="collapseMenu">
						<li><a href="<?= base_url('admin/addItem'); ?>">Add item</a></li>
						<li><a href="<?= base_url('admin/addUser'); ?>">Add user</a></li>
						<li><a href="<?= base_url('admin/viewUser'); ?>">View User</a></li>
					</ul>
				</li>
				<!-- end collapse -->

				<li class="sidebar__nav-item">
					<a href="<?= base_url('admin/users'); ?>" class="sidebar__nav-link"><i class="icon ion-ios-contacts"></i> <span>Users</span></a>
				</li>

				<li class="sidebar__nav-item">
					<a href="<?= base_url('admin/comments'); ?>" class="sidebar__nav-link"><i class="icon ion-ios-chatbubbles"></i> <span>Comments</span></a>
				</li>

				<li class="sidebar__nav-item">
					<a href="<?= base_url('admin/reviews'); ?>" class="sidebar__nav-link"><i class="icon ion-ios-star-half"></i> <span>Reviews</span></a>
				</li>

				<li class="sidebar__nav-item">
					<a href="<?= base_url('user'); ?>" class="sidebar__nav-link"><i class="icon ion-ios-arrow-round-back"></i> <span>Back to PointofVilm</span></a>
				</li>
			</ul>
		</div>
		<!-- end sidebar nav -->
		
		<!-- sidebar copyright -->
		<div class="sidebar__copyright">© PointOfVilm, 2022 <br> Create by Kelompok 1</a></div>
		<!-- end sidebar copyright -->
	</div>
	<!-- end sidebar -->