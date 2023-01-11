<!-- page title -->
	<section class="section section--first section--bg" data-bg="<?= base_url(); ?>assets/img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h2 class="section__title"><?= $title; ?></h2>
						<!-- end section title -->

						<!-- breadcrumb -->
						<ul class="breadcrumb">
							<li class="breadcrumb__item"><a href="<?= base_url('users'); ?>">Home</a></li>
							<li class="breadcrumb__item breadcrumb__item--active">Profile</li>
						</ul>
						<!-- end breadcrumb -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->

	<!-- content -->
	<div class="content content--profile">
		<!-- profile -->
		<div class="profile">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="profile__content">
							<div class="profile__user">
								<div class="profile__avatar">
									<img src="<?= base_url(); ?>assets/img/user.svg" alt="">
								</div>
								<div class="profile__meta">
									<h3><?=$user['name']; ?></h3>
									<span>POV ID: <?=$user['id']; ?></span>
								</div>
							</div>

							<!-- content tabs nav -->
							<ul class="nav nav-tabs content__tabs content__tabs--profile" id="content__tabs" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Profile</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Subscription</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Settings</a>
								</li>
							</ul>
							<!-- end content tabs nav -->

							<!-- content mobile tabs nav -->
							<div class="content__mobile-tabs content__mobile-tabs--profile" id="content__mobile-tabs">
								<div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<input type="button" value="Profile">
									<span></span>
								</div>

								<div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
									<ul class="nav nav-tabs" role="tablist">
										<li class="nav-item"><a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Profile</a></li>

										<li class="nav-item"><a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Subscription</a></li>

										<li class="nav-item"><a class="nav-link" id="3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Settings</a></li>
									</ul>
								</div>
							</div>
							<!-- end content mobile tabs nav -->

							<a href="<?= base_url('auth/signout'); ?>" class="profile__logout" type="button" style="color:white">
								<i class="icon ion-ios-log-out"></i>
								<span>Signout</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end profile -->

		<div class="container">
			<!-- content tabs -->	
			<div class="tab-content">
			<?= $this->session->flashdata('message'); ?>
				<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
					<div class="row row--grid">
						<!-- stats -->
						<div class="col-12 col-sm-6 col-xl-3">
							<div class="stats">
								<span>Premium plan</span>
								<p>Rp 150,000 / month</p>
								<i class="icon ion-ios-card"></i>
							</div>
						</div>
						<!-- end stats -->

						<!-- stats -->
						<div class="col-12 col-sm-6 col-xl-3">
							<div class="stats">
								<span>Films watched</span>
								<p><a href="#">1 678</a></p>
								<i class="icon ion-ios-film"></i>
							</div>
						</div>
						<!-- end stats -->

						<!-- stats -->
						<div class="col-12 col-sm-6 col-xl-3">
							<div class="stats">
								<span>Your comments</span>
								<p><a href="#">2 573</a></p>
								<i class="icon ion-ios-chatbubbles"></i>
							</div>
						</div>
						<!-- end stats -->

						<!-- stats -->
						<div class="col-12 col-sm-6 col-xl-3">
							<div class="stats">
								<span>Your reviews</span>
								<p><a href="#">1 021</a></p>
								<i class="icon ion-ios-star-half"></i>
							</div>
						</div>
						<!-- end stats -->

						<!-- dashbox -->
						<div class="col-12 col-xl-6">
							<div class="dashbox">
								<div class="dashbox__title">
									<h3><i class="icon ion-ios-film"></i> Movies for you</h3>

									<div class="dashbox__wrap">
										<a class="dashbox__refresh" href="#"><i class="icon ion-ios-refresh"></i></a>
										<a class="dashbox__more" href="<?= base_url('user/catalog'); ?>">View All</a>
									</div>
								</div>

								<div class="dashbox__table-wrap">
									<table class="main__table main__table--dash">
										<thead>
											<tr>
												<th>TITLE</th>
												<th>CATEGORY</th>
												<th>RATING</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<div class="main__table-text"><a href="#">I Dream in Another Language</a></div>
												</td>
												<td>
													<div class="main__table-text">Movie</div>
												</td>
												<td>
													<div class="main__table-text main__table-text--rate"><i class="icon ion-ios-star"></i> 9.2</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="main__table-text"><a href="#">Benched</a></div>
												</td>
												<td>
													<div class="main__table-text">Movie</div>
												</td>
												<td>
													<div class="main__table-text main__table-text--rate"><i class="icon ion-ios-star"></i> 9.1</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="main__table-text"><a href="#">Whitney</a></div>
												</td>
												<td>
													<div class="main__table-text">TV Series</div>
												</td>
												<td>
													<div class="main__table-text main__table-text--rate"><i class="icon ion-ios-star"></i> 9.0</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="main__table-text"><a href="#">Blindspotting 2</a></div>
												</td>
												<td>
													<div class="main__table-text">TV Series</div>
												</td>
												<td>
													<div class="main__table-text main__table-text--rate"><i class="icon ion-ios-star"></i> 8.9</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="main__table-text"><a href="#">Blindspotting</a></div>
												</td>
												<td>
													<div class="main__table-text">TV Series</div>
												</td>
												<td>
													<div class="main__table-text main__table-text--rate"><i class="icon ion-ios-star"></i> 8.9</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- end dashbox -->

						<!-- dashbox -->
						<div class="col-12 col-xl-6">
							<div class="dashbox">
								<div class="dashbox__title">
									<h3><i class="icon ion-ios-star-half"></i> Latest reviews</h3>

									<div class="dashbox__wrap">
										<a class="dashbox__refresh" href="#"><i class="icon ion-ios-refresh"></i></a>
										<a class="dashbox__more" href="#">View All</a>
									</div>
								</div>

								<div class="dashbox__table-wrap">
									<table class="main__table main__table--dash">
										<thead>
											<tr>
												<th>ITEM</th>
												<th>AUTHOR</th>
												<th>RATING</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<div class="main__table-text"><a href="#">I Dream in Another Language</a></div>
												</td>
												<td>
													<div class="main__table-text">John Doe</div>
												</td>
												<td>
													<div class="main__table-text main__table-text--rate"><i class="icon ion-ios-star"></i> 7.2</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="main__table-text"><a href="#">Benched</a></div>
												</td>
												<td>
													<div class="main__table-text">John Doe</div>
												</td>
												<td>
													<div class="main__table-text main__table-text--rate"><i class="icon ion-ios-star"></i> 6.3</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="main__table-text"><a href="#">Whitney</a></div>
												</td>
												<td>
													<div class="main__table-text">John Doe</div>
												</td>
												<td>
													<div class="main__table-text main__table-text--rate"><i class="icon ion-ios-star"></i> 8.4</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="main__table-text"><a href="#">Blindspotting</a></div>
												</td>
												<td>
													<div class="main__table-text">John Doe</div>
												</td>
												<td>
													<div class="main__table-text main__table-text--rate"><i class="icon ion-ios-star"></i> 9.0</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="main__table-text"><a href="#">I Dream in Another Language</a></div>
												</td>
												<td>
													<div class="main__table-text">John Doe</div>
												</td>
												<td>
													<div class="main__table-text main__table-text--rate"><i class="icon ion-ios-star"></i> 7.7</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- end dashbox -->
					</div>
				</div>

				<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab">
					<div class="row row--grid">
						<!-- price -->
						<div class="col-12 col-md-6 col-lg-4 order-md-2 order-lg-1">
							<div class="price price--profile">
								<div class="price__item price__item--first"><span>Basic</span> <span>Free</span></div>
								<div class="price__item"><span><i class="icon ion-ios-checkmark"></i> 7 days</span></div>
								<div class="price__item"><span><i class="icon ion-ios-checkmark"></i> 720p Resolution</span></div>
								<div class="price__item price__item--none"><span><i class="icon ion-ios-close"></i> Limited Availability</span></div>
								<div class="price__item price__item--none"><span><i class="icon ion-ios-close"></i> Desktop Only</span></div>
								<div class="price__item price__item--none"><span><i class="icon ion-ios-close"></i> Limited Support</span></div>
								<a href="#" class="price__btn">Choose Plan</a>
							</div>
						</div>
						<!-- end price -->

						<!-- price -->
						<div class="col-12 col-md-12 col-lg-4 order-md-1 order-lg-2">
							<div class="price price--profile price--premium">
								<div class="price__item price__item--first"><span>Premium</span> <span>Rp 150,000 <sub>/ month</sub></span></div>
								<div class="price__item"><span><i class="icon ion-ios-checkmark"></i> 1 Month</span></div>
								<div class="price__item"><span><i class="icon ion-ios-checkmark"></i> Full HD</span></div>
								<div class="price__item"><span><i class="icon ion-ios-checkmark"></i> Lifetime Availability</span></div>
								<div class="price__item price__item--none"><span><i class="icon ion-ios-close"></i> TV & Desktop</span></div>
								<div class="price__item price__item--none"><span><i class="icon ion-ios-close"></i> 24/7 Support</span></div>
								<a href="#" class="price__btn">Choose Plan</a>
							</div>
						</div>
						<!-- end price -->

						<!-- price -->
						<div class="col-12 col-md-6 col-lg-4 order-md-3">
							<div class="price price--profile">
								<div class="price__item price__item--first"><span>Cinematic</span> <span>Rp 250,000 <sub>/ month</sub></span></div>
								<div class="price__item"><span><i class="icon ion-ios-checkmark"></i> 2 Months</span></div>
								<div class="price__item"><span><i class="icon ion-ios-checkmark"></i> Ultra HD</span></div>
								<div class="price__item"><span><i class="icon ion-ios-checkmark"></i> Lifetime Availability</span></div>
								<div class="price__item"><span><i class="icon ion-ios-checkmark"></i> Any Device</span></div>
								<div class="price__item"><span><i class="icon ion-ios-checkmark"></i> 24/7 Support</span></div>
								<a href="#" class="price__btn">Choose Plan</a>
							</div>
						</div>
						<!-- end price -->
					</div>
				</div>

				<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="3-tab">
					<div class="row">
						<!-- details form -->
						<div class="col-12 col-lg-6">
							<?= form_open_multipart('user/profile'); ?>
								<div class="row row--form">
									<div class="col-12">
										<h4 class="form__title">Profile details</h4>
									</div>

									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="form__group">
											<label class="form__label" for="email">Email</label>
											<input id="email" type="text" name="email" class="form__input" value="<?= $user['email']; ?>" readonly>
											
										</div>
									</div>

									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="form__group">
											<label class="form__label" for="name">Full Name</label>
											<input id="name" type="text" name="name" class="form__input" value="<?= $user['name']; ?>" >
											<?= form_error('name', '<small style="color:red">', '</small>');?> 
										</div>
									</div>

									<div class="col-12">
										<button class="form__btn" type="submit">Save</button>
									</div>
								</div>
							</form>
						</div>
						<!-- end details form -->

						<!-- password form -->
						<div class="col-12 col-lg-6">
							<?= form_open_multipart('user/changePassword'); ?>
								<div class="row row--form">
									<div class="col-12">
										<h4 class="form__title">Change password</h4>
									</div>

									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="form__group">
											<label class="form__label" for="oldpass">Old password</label>
											<input id="cPassword" type="password" name="cPassword" class="form__input">
											<?= form_error('cPassword', '<small style="color:red">', '</small>');?> 
										</div>
									</div>

									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="form__group">
											<label class="form__label" for="newpass">New password</label>
											<input id="nPassword1" type="password" name="nPassword1" class="form__input">
											<?= form_error('nPassword1', '<small style="color:red">', '</small>');?> 
										</div>
									</div>

									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="form__group">
											<label class="form__label" for="confirmpass">Confirm new password</label>
											<input id="nPassword2" type="password" name="nPassword2" class="form__input">
											<?= form_error('nPassword2', '<small style="color:red">', '</small>');?> 
										</div>
									</div>

									<div class="col-12">
										<button class="form__btn" type="submit">Change</button>
									</div>
								</div>
							</form>
						</div>
						<!-- end password form -->
					</div>
				</div>
			</div>
			<!-- end content tabs -->
		</div>
	</div>
	<!-- end content -->