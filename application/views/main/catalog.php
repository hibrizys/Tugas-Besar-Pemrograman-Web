	<!-- page title -->
	<section class="section section--first section--bg" data-bg="<?= base_url(); ?>assets/img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h1 class="section__title">Catalog</h1>
						<!-- end section title -->

						<!-- breadcrumb -->
						<ul class="breadcrumb">
							<li class="breadcrumb__item"><a href="<?= base_url('user'); ?>">Home</a></li>
							<li class="breadcrumb__item breadcrumb__item--active">Catalog</li>
						</ul>
						<!-- end breadcrumb -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->

	<!-- filter -->
	<div class="filter">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="filter__content">
						<div class="filter__items">
							<!-- filter item -->
							<div class="filter__item" id="filter__genre">
								<span class="filter__item-label">GENRE:</span>

								<div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-genre" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<input type="button" value="Action/Adventure">
									<span></span>
								</div>

								<ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-genre">
									<li>Action/Adventure</li>
									<li>Animals</li>
									<li>Animation</li>
									<li>Biography</li>
									<li>Comedy</li>
									<li>Cooking</li>
									<li>Dance</li>
									<li>Documentary</li>
									<li>Drama</li>
									<li>Education</li>
									<li>Entertainment</li>
									<li>Family</li>
									<li>Fantasy</li>
									<li>History</li>
									<li>Horror</li>
									<li>Independent</li>
									<li>International</li>
									<li>Kids</li>
									<li>Kids & Family</li>
									<li>Medical</li>
									<li>Military/War</li>
									<li>Music</li>
									<li>Musical</li>
									<li>Mystery/Crime</li>
									<li>Nature</li>
									<li>Paranormal</li>
									<li>Politics</li>
									<li>Racing</li>
									<li>Romance</li>
									<li>Sci-Fi/Horror</li>
									<li>Science</li>
									<li>Science Fiction</li>
									<li>Science/Nature</li>
									<li>Spanish</li>
									<li>Travel</li>
									<li>Western</li>
								</ul>
							</div>
							<!-- end filter item -->

							<!-- filter item -->
							<div class="filter__item" id="filter__quality">
								<span class="filter__item-label">QUALITY:</span>

								<div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-quality" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<input type="button" value="HD 1080">
									<span></span>
								</div>

								<ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-quality">
									<li>HD 1080</li>
									<li>HD 720</li>
									<li>DVD</li>
									<li>TS</li>
								</ul>
							</div>
							<!-- end filter item -->

							<!-- filter item -->
							<div class="filter__item" id="filter__rate">
								<span class="filter__item-label">RATING:</span>

								<div class="filter__item-btn dropdown-toggle" role="button" id="filter-rate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<div class="filter__range">
										<div id="filter__imbd-start"></div>
										<div id="filter__imbd-end"></div>
									</div>
									<span></span>
								</div>

								<div class="filter__item-menu filter__item-menu--range dropdown-menu" aria-labelledby="filter-rate">
									<div id="filter__imbd"></div>
								</div>
							</div>
							<!-- end filter item -->

							<!-- filter item -->
							<div class="filter__item" id="filter__year">
								<span class="filter__item-label">RELEASE YEAR:</span>

								<div class="filter__item-btn dropdown-toggle" role="button" id="filter-year" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<div class="filter__range">
										<div id="filter__years-start"></div>
										<div id="filter__years-end"></div>
									</div>
									<span></span>
								</div>

								<div class="filter__item-menu filter__item-menu--range dropdown-menu" aria-labelledby="filter-year">
									<div id="filter__years"></div>
								</div>
							</div>
							<!-- end filter item -->
						</div>
						
						<!-- filter btn -->
						<button class="filter__btn" type="button">apply filter</button>
						<!-- end filter btn -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end filter -->

	<!-- catalog -->
	<div class="catalog">
		<div class="container">
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

			<div class="row">
				<!-- paginator -->
				<div class="col-12">
					<ul class="paginator">
						<li class="paginator__item paginator__item--prev">
							<a href="#"><i class="icon ion-ios-arrow-back"></i></a>
						</li>
						<li class="paginator__item"><a href="#">1</a></li>
						<li class="paginator__item paginator__item--active"><a href="#">2</a></li>
						<li class="paginator__item"><a href="#">3</a></li>
						<li class="paginator__item"><a href="#">4</a></li>
						<li class="paginator__item paginator__item--next">
							<a href="#"><i class="icon ion-ios-arrow-forward"></i></a>
						</li>
					</ul>
				</div>
				<!-- end paginator -->
			</div>
		</div>
	</div>
	<!-- end catalog -->

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