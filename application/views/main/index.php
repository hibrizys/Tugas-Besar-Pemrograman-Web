	<!-- home -->
	<section class="home">
		<!-- home bg -->
		<div class="owl-carousel home__bg">
			<div class="item home__cover" data-bg="<?= base_url(); ?>assets/img/home/home__bg.jpg"></div>
			<div class="item home__cover" data-bg="<?= base_url(); ?>assets/img/home/home__bg2.jpg"></div>
			<div class="item home__cover" data-bg="<?= base_url(); ?>assets/img/home/home__bg3.jpg"></div>
			<div class="item home__cover" data-bg="<?= base_url(); ?>assets/img/home/home__bg4.jpg"></div>
			<div class="item home__cover" data-bg="<?= base_url(); ?>assets/img/home/home__bg5.jpg"></div>
		</div>
		<!-- end home bg -->
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="home__title"><b>NEW ITEMS</b> OF THIS SEASON</h1>

					<button class="home__nav home__nav--prev" type="button">
						<i class="icon ion-ios-arrow-round-back"></i>
					</button>
					<button class="home__nav home__nav--next" type="button">
						<i class="icon ion-ios-arrow-round-forward"></i>
					</button>
				</div>

				<div class="col-12">
					<div class="owl-carousel home__carousel home__carousel--bg">
						<div class="card card--big">
							<div class="card__cover">
								<img src="<?= base_url(); ?>assets/img/covers/cover.jpg" alt="">
								<a href="<?= base_url('user/details'); ?>" class="card__play">
									<i class="icon ion-ios-play"></i>
								</a>
								<span class="card__rate card__rate--green">8.4</span>
							</div>
							<div class="card__content">
								<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">I Dream in Another Language</a></h3>
								<span class="card__category">
									<a href="#">Action</a>
									<a href="#">Triler</a>
								</span>
							</div>
						</div>

						<div class="card card--big">
							<div class="card__cover">
								<img src="<?= base_url(); ?>assets/img/covers/cover2.jpg" alt="">
								<a href="<?= base_url('user/details'); ?>" class="card__play">
									<i class="icon ion-ios-play"></i>
								</a>
								<span class="card__rate card__rate--green">7.1</span>
							</div>
							<div class="card__content">
								<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Benched</a></h3>
								<span class="card__category">
									<a href="#">Comedy</a>
								</span>
							</div>
						</div>

						<div class="card card--big">
							<div class="card__cover">
								<img src="<?= base_url(); ?>assets/img/covers/cover3.jpg" alt="">
								<a href="<?= base_url('user/details'); ?>" class="card__play">
									<i class="icon ion-ios-play"></i>
								</a>
								<span class="card__rate card__rate--green">7.9</span>
							</div>
							<div class="card__content">
								<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Whitney</a></h3>
								<span class="card__category">
									<a href="#">Romance</a>
									<a href="#">Drama</a>
								</span>
							</div>
						</div>

						<div class="card card--big">
							<div class="card__cover">
								<img src="<?= base_url(); ?>assets/img/covers/cover4.jpg" alt="">
								<a href="<?= base_url('user/details'); ?>" class="card__play">
									<i class="icon ion-ios-play"></i>
								</a>
								<span class="card__rate card__rate--yellow">6.8</span>
							</div>
							<div class="card__content">
								<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Blindspotting</a></h3>
								<span class="card__category">
									<a href="#">Comedy</a>
									<a href="#">Drama</a>
								</span>
							</div>
						</div>

						<div class="card card--big">
							<div class="card__cover">
								<img src="<?= base_url(); ?>assets/img/covers/cover5.jpg" alt="">
								<a href="<?= base_url('user/details'); ?>" class="card__play">
									<i class="icon ion-ios-play"></i>
								</a>
								<span class="card__rate card__rate--yellow">6.2</span>
							</div>
							<div class="card__content">
								<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Blindspotting</a></h3>
								<span class="card__category">
									<a href="#">Comedy</a>
									<a href="#">Drama</a>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end home -->
	
	<!-- content -->
	<section class="content">
		<div class="content__head">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- content title -->
						<h2 class="content__title">New items</h2>
						<!-- end content title -->

						<!-- content tabs nav -->
						<ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">NEW RELEASES</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">MOVIES</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">TV SERIES</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">CARTOONS</a>
							</li>
						</ul>
						<!-- end content tabs nav -->

						<!-- content mobile tabs nav -->
						<div class="content__mobile-tabs" id="content__mobile-tabs">
							<div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<input type="button" value="New releases">
								<span></span>
							</div>

							<div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item"><a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">NEW RELEASES</a></li>

									<li class="nav-item"><a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">MOVIES</a></li>

									<li class="nav-item"><a class="nav-link" id="3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">TV SERIES</a></li>

									<li class="nav-item"><a class="nav-link" id="4-tab" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">CARTOONS</a></li>
								</ul>
							</div>
						</div>
						<!-- end content mobile tabs nav -->
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<!-- content tabs -->
			<div class="tab-content">
				<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
					<div class="row row--grid">
						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">8.4</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover2.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">7.1</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover3.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--red">6.3</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Whitney</a></h3>
									<span class="card__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover4.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--yellow">6.9</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Blindspotting</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover5.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">8.4</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover6.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">7.1</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover7.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">7.1</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover8.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--red">5.5</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover9.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--yellow">6.7</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Blindspotting</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover10.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--red">5.6</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Whitney</a></h3>
									<span class="card__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover11.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">9.2</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover12.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">8.4</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover13.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">8.0</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover14.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">7.2</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover15.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--yellow">5.9</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Whitney</a></h3>
									<span class="card__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover16.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">8.3</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Blindspotting</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover17.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">8.0</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover18.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">7.1</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->
					</div>
				</div>

				<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab">
					<div class="row row--grid">
						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">8.4</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover2.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">7.1</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover3.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--red">6.3</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Whitney</a></h3>
									<span class="card__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover4.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--yellow">6.9</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Blindspotting</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover5.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">8.4</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover6.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">7.1</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover7.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">7.1</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover8.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--red">5.5</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover9.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--yellow">6.7</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Blindspotting</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover10.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--red">5.6</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Whitney</a></h3>
									<span class="card__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover11.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">9.2</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover12.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">8.4</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover13.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">8.0</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover14.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">7.2</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover15.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--yellow">5.9</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Whitney</a></h3>
									<span class="card__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover16.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">8.3</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Blindspotting</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover17.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">8.0</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover18.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">7.1</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->
					</div>
				</div>

				<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="3-tab">
					<div class="row row--grid">
						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">8.4</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover2.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">7.1</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover3.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--red">6.3</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Whitney</a></h3>
									<span class="card__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover4.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--yellow">6.9</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Blindspotting</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover5.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">8.4</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover6.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">7.1</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover7.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">7.1</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover8.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--red">5.5</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover9.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--yellow">6.7</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Blindspotting</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover10.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--red">5.6</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Whitney</a></h3>
									<span class="card__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover11.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">9.2</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover12.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">8.4</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover13.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">8.0</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover14.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">7.2</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover15.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--yellow">5.9</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Whitney</a></h3>
									<span class="card__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover16.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">8.3</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Blindspotting</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover17.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">8.0</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover18.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">7.1</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->
					</div>
				</div>

				<div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="4-tab">
					<div class="row row--grid">
						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">8.4</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover2.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">7.1</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover3.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--red">6.3</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Whitney</a></h3>
									<span class="card__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover4.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--yellow">6.9</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Blindspotting</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover5.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">8.4</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover6.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">7.1</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover7.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">7.1</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover8.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--red">5.5</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover9.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--yellow">6.7</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Blindspotting</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover10.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--red">5.6</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Whitney</a></h3>
									<span class="card__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover11.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">9.2</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover12.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">8.4</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover13.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">8.0</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover14.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">7.2</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover15.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--yellow">5.9</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Whitney</a></h3>
									<span class="card__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover16.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">8.3</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Blindspotting</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover17.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">8.0</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="<?= base_url(); ?>assets/img/covers/cover18.jpg" alt="">
									<a href="<?= base_url('user/details'); ?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
									<span class="card__rate card__rate--green">7.1</span>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->
					</div>
				</div>
			</div>
			<!-- end content tabs -->
		</div>
	</section>
	<!-- end content -->

	<!-- section -->
	<section class="section section--border">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<div class="section__title-wrap">
						<h2 class="section__title">Expected premiere</h2>

						<div class="section__nav-wrap">
							<a href="<?= base_url('user/catalog'); ?>" class="section__view">View All</a>

							<button class="section__nav section__nav--prev" type="button" data-nav="#carousel1">
								<i class="icon ion-ios-arrow-back"></i>
							</button>

							<button class="section__nav section__nav--next" type="button" data-nav="#carousel1">
								<i class="icon ion-ios-arrow-forward"></i>
							</button>
						</div>
					</div>
				</div>
				<!-- end section title -->

				<!-- carousel -->
				<div class="col-12">
					<div class="owl-carousel section__carousel" id="carousel1">
						<div class="card">
							<div class="card__cover">
								<img src="<?= base_url(); ?>assets/img/covers/cover.jpg" alt="">
								<a href="<?= base_url('user/details'); ?>" class="card__play">
									<i class="icon ion-ios-play"></i>
								</a>
								<span class="card__rate card__rate--green">8.4</span>
							</div>
							<div class="card__content">
								<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">I Dream in Another Language</a></h3>
								<span class="card__category">
									<a href="#">Action</a>
									<a href="#">Triler</a>
								</span>
							</div>
						</div>

						<div class="card">
							<div class="card__cover">
								<img src="<?= base_url(); ?>assets/img/covers/cover2.jpg" alt="">
								<a href="<?= base_url('user/details'); ?>" class="card__play">
									<i class="icon ion-ios-play"></i>
								</a>
								<span class="card__rate card__rate--green">7.1</span>
							</div>
							<div class="card__content">
								<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Benched</a></h3>
								<span class="card__category">
									<a href="#">Comedy</a>
								</span>
							</div>
						</div>

						<div class="card">
							<div class="card__cover">
								<img src="<?= base_url(); ?>assets/img/covers/cover3.jpg" alt="">
								<a href="<?= base_url('user/details'); ?>" class="card__play">
									<i class="icon ion-ios-play"></i>
								</a>
								<span class="card__rate card__rate--red">6.3</span>
							</div>
							<div class="card__content">
								<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Whitney</a></h3>
								<span class="card__category">
									<a href="#">Romance</a>
									<a href="#">Drama</a>
									<a href="#">Music</a>
								</span>
							</div>
						</div>

						<div class="card">
							<div class="card__cover">
								<img src="<?= base_url(); ?>assets/img/covers/cover4.jpg" alt="">
								<a href="<?= base_url('user/details'); ?>" class="card__play">
									<i class="icon ion-ios-play"></i>
								</a>
								<span class="card__rate card__rate--yellow">6.9</span>
							</div>
							<div class="card__content">
								<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Blindspotting</a></h3>
								<span class="card__category">
									<a href="#">Comedy</a>
									<a href="#">Drama</a>
								</span>
							</div>
						</div>

						<div class="card">
							<div class="card__cover">
								<img src="<?= base_url(); ?>assets/img/covers/cover5.jpg" alt="">
								<a href="<?= base_url('user/details'); ?>" class="card__play">
									<i class="icon ion-ios-play"></i>
								</a>
								<span class="card__rate card__rate--green">8.4</span>
							</div>
							<div class="card__content">
								<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">I Dream in Another Language</a></h3>
								<span class="card__category">
									<a href="#">Action</a>
									<a href="#">Triler</a>
								</span>
							</div>
						</div>

						<div class="card">
							<div class="card__cover">
								<img src="<?= base_url(); ?>assets/img/covers/cover6.jpg" alt="">
								<a href="<?= base_url('user/details'); ?>" class="card__play">
									<i class="icon ion-ios-play"></i>
								</a>
								<span class="card__rate card__rate--green">7.1</span>
							</div>
							<div class="card__content">
								<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Benched</a></h3>
								<span class="card__category">
									<a href="#">Comedy</a>
								</span>
							</div>
						</div>

						<div class="card">
							<div class="card__cover">
								<img src="<?= base_url(); ?>assets/img/covers/cover7.jpg" alt="">
								<a href="<?= base_url('user/details'); ?>" class="card__play">
									<i class="icon ion-ios-play"></i>
								</a>
								<span class="card__rate card__rate--green">7.1</span>
							</div>
							<div class="card__content">
								<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Benched</a></h3>
								<span class="card__category">
									<a href="#">Comedy</a>
								</span>
							</div>
						</div>

						<div class="card">
							<div class="card__cover">
								<img src="<?= base_url(); ?>assets/img/covers/cover8.jpg" alt="">
								<a href="<?= base_url('user/details'); ?>" class="card__play">
									<i class="icon ion-ios-play"></i>
								</a>
								<span class="card__rate card__rate--red">5.5</span>
							</div>
							<div class="card__content">
								<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">I Dream in Another Language</a></h3>
								<span class="card__category">
									<a href="#">Action</a>
									<a href="#">Triler</a>
								</span>
							</div>
						</div>

						<div class="card">
							<div class="card__cover">
								<img src="<?= base_url(); ?>assets/img/covers/cover9.jpg" alt="">
								<a href="<?= base_url('user/details'); ?>" class="card__play">
									<i class="icon ion-ios-play"></i>
								</a>
								<span class="card__rate card__rate--yellow">6.7</span>
							</div>
							<div class="card__content">
								<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Blindspotting</a></h3>
								<span class="card__category">
									<a href="#">Comedy</a>
									<a href="#">Drama</a>
								</span>
							</div>
						</div>

						<div class="card">
							<div class="card__cover">
								<img src="<?= base_url(); ?>assets/img/covers/cover10.jpg" alt="">
								<a href="<?= base_url('user/details'); ?>" class="card__play">
									<i class="icon ion-ios-play"></i>
								</a>
								<span class="card__rate card__rate--red">5.6</span>
							</div>
							<div class="card__content">
								<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Whitney</a></h3>
								<span class="card__category">
									<a href="#">Romance</a>
									<a href="#">Drama</a>
									<a href="#">Music</a>
								</span>
							</div>
						</div>

						<div class="card">
							<div class="card__cover">
								<img src="<?= base_url(); ?>assets/img/covers/cover11.jpg" alt="">
								<a href="<?= base_url('user/details'); ?>" class="card__play">
									<i class="icon ion-ios-play"></i>
								</a>
								<span class="card__rate card__rate--green">9.2</span>
							</div>
							<div class="card__content">
								<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">Benched</a></h3>
								<span class="card__category">
									<a href="#">Comedy</a>
								</span>
							</div>
						</div>

						<div class="card">
							<div class="card__cover">
								<img src="<?= base_url(); ?>assets/img/covers/cover12.jpg" alt="">
								<a href="<?= base_url('user/details'); ?>" class="card__play">
									<i class="icon ion-ios-play"></i>
								</a>
								<span class="card__rate card__rate--green">8.4</span>
							</div>
							<div class="card__content">
								<h3 class="card__title"><a href="<?= base_url('user/details'); ?>">I Dream in Another Language</a></h3>
								<span class="card__category">
									<a href="#">Action</a>
									<a href="#">Triler</a>
								</span>
							</div>
						</div>
					</div>
				</div>
				<!-- carousel -->
			</div>
		</div>
	</section>
	<!-- end section -->
	<div class="col-10 container">
		<h2 class="section__title" style="margin-bottom: 50px">Review User</h2>
		<div class="main__table-wrap">
			<table class="main__table">
				<thead>
					<tr>
						<th>NAME USER</th>
						<th>EMAIL</th>
						<th>REVIEW</th>
						<th>RATING</th>
					</tr>
				</thead>

				<tbody id="idbody">
				</tbody>
			</table>
		</div>
	</div>
	<!-- section -->
	<section class="section section--border">
		<div class="container">
			<div class="row">
				<div class="col-12 col-xl-10">
					<h2 class="section__title section__title--mb"><b>PointOfVilm</b> – Best Place for Movies</h2>

					<p class="section__text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of <b>using Lorem</b> Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>

					<p class="section__text">Content here, content here, making it look like <a href="#">readable</a> English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
				</div>
			</div>
		</div>
	</section>
	<!-- end section -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>
		$(document).ready( function () {
			clear();
		} );
            
		function clear() {
			setTimeout(function() {
				update();
				clear();
			}, 1000); //Every 1500 milliseconds
		}
		
		function update() {
			$.ajax({
				url: 'http://localhost:3000/getReview',
				type: 'get',
				dataType: 'json',
				success: function(response){
					response = response.data;
					var len = 0;
					$('#idbody').empty(); 
					if(response != null){
						len = response.length;
					}
					if(len > 0){
						for(var i=0; i<len; i++){
							//Attribute
							var nama = response[i].name;
							var email = response[i].email;
							var review = response[i].review;
							var rate = response[i].rating;
							var create = response[i].date_created;
							var tr_str = 
								"<tr>" +
									"<td>"+
										"<div class='main__table-text'>"+ nama + "</div>"+
									"</td>" +
									"<td>"+
										"<div class='main__table-text'>"+ email + "</div>"+
									"</td>" +
									"<td>"+
										"<div class='main__table-text'>"+ review + "</div>"+
									"</td>" +
									"<td>"+
										"<div class='main__table-text'>"+"<i class='fa-solid fa-star text-warning'></i>" + rate + "</div>"+
									"</td>" +
								"</tr>" ;
							$("#idbody").append(tr_str);
						}
					}else{
						var tr_str = 
							"<h5>Empty Data</h5>";
						$("#idbody").append(tr_str);
					}
				}
			});
		}
	</script>

	