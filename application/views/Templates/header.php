<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/nouislider.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ionicons.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/plyr.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/photoswipe.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/default-skin.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/main.css">
	
	<!-- Favicons -->
	<link rel="icon" type="image/png" href="<?= base_url(); ?>assets/icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="<?= base_url(); ?>assets/icon/favicon-32x32.png">
	
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Kelompok 1">
	<title><?= $title; ?></title>
	<script src="https://kit.fontawesome.com/1d92ed9294.js" crossorigin="anonymous"></script>
</head>

<body class="body">
	<!-- header -->
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="header__content">
						<!-- header logo -->
						<a href="<?= base_url('user'); ?>" class="header__logo">
							<img src="<?= base_url(); ?>assets/img/logo.svg" alt="">
						</a>
						<!-- end header logo -->

						<!-- header nav -->
						<ul class="header__nav">
							<!-- dropdown -->
							<li class="header__nav-item">
								<a class="dropdown-toggle header__nav-link" href="<?= base_url('user'); ?>" role="button"  aria-haspopup="true" aria-expanded="false">Home</a>
							</li>
							<!-- end dropdown -->

							<!-- dropdown -->
							<li class="header__nav-item">
								<a class="dropdown-toggle header__nav-link" href="<?= base_url('user/catalog'); ?>" role="button" aria-haspopup="true" aria-expanded="false">Catalog</a>
							</li>
							<!-- end dropdown -->

							<li class="header__nav-item">
								<a href="<?= base_url('user/pricing'); ?>" class="header__nav-link">Pricing plan</a>
							</li>

							<!-- dropdown -->
							<li class="dropdown header__nav-item">
								<a class="dropdown-toggle header__nav-link header__nav-link--more" href="#" role="button" id="dropdownMenuMore" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon ion-ios-more"></i></a>

								<ul class="dropdown-menu header__dropdown-menu scrollbar-dropdown" aria-labelledby="dropdownMenuMore">
									<li><a href="<?= base_url('user/about'); ?>">About</a></li>
									<li><a href="<?= base_url('user/profile'); ?>">Profile</a></li>
									<li><a href="<?= base_url('user/contacts'); ?>">Contacts</a></li>
									<li><a href="<?= base_url('user/faq'); ?>">Help center</a></li>
									<li><a href="<?= base_url('user/privacy'); ?>">Privacy policy</a></li>
									<li><a href="<?= base_url('auth/signout'); ?>">Signout</a></li>
									
								</ul>
							</li>
							<!-- end dropdown -->
						</ul>
						<!-- end header nav -->

						<!-- header auth -->
						<div class="header__auth">
							<form action="#" class="header__search">
								<input class="header__search-input" type="text" placeholder="Search...">
								<button class="header__search-button" type="button">
									<i class="icon ion-ios-search"></i>
								</button>
								<button class="header__search-close" type="button">
									<i class="icon ion-md-close"></i>
								</button>
							</form>

							<button class="header__search-btn" type="button">
								<i class="icon ion-ios-search"></i>
							</button>

							<!-- dropdown -->
							<div class="dropdown header__lang">
								<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuLang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EN <i class="icon ion-ios-arrow-down"></i></a>

								<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuLang">
									<li><a href="<?= base_url('user'); ?>">English</a></li>
									<li><a href="<?= base_url('user/notFound2'); ?>">Indonesian</a></li>
									<li><a href="<?= base_url('user/notFound2'); ?>">Spanish</a></li>
									<li><a href="<?= base_url('user/notFound2'); ?>">Russian</a></li>
								</ul>
							</div>
							<!-- end dropdown -->
								<span class="header__sign-in" style="color : white; font-size: 14px;"><?=$user['name']; ?></span>
							
						</div>
						<!-- end header auth -->

						<!-- header menu btn -->
						<button class="header__btn" type="button">
							<span></span>
							<span></span>
							<span></span>
						</button>
						<!-- end header menu btn -->
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- end header -->
