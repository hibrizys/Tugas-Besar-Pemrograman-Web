<!-- main content -->
<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Add user</h2>
					</div>
				</div>
				<!-- end main title -->
				<!-- content tabs -->
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
						<div class="col-12">
							<div class="row">
								<!-- details form -->
								<div class="col-12 col-lg-6">
                                <form action="<?= base_url('admin/addUser');?>" class="form form--profile" method="post">
										<div class="row row--form">
											<div class="col-12">
												<h4 class="form__title">Profile details</h4>
											</div>

											<div class="col-12 col-md-6 col-lg-12 col-xl-6">
												<div class="form__group">
													<label class="form__label" >Email</label>
													<input id="email" type="text" name="email" class="form__input" placeholder="Email" value="<?= set_value('email'); ?>">
								                    <?= form_error('email', '<small style="color:red">', '</small>');?> 
                                                </div>
											</div>

											<div class="col-12 col-md-6 col-lg-12 col-xl-6">
												<div class="form__group">
													<label class="form__label" >Full Name</label>
													<input id="name" type="text" name="name" class="form__input" placeholder="Full Name" value="<?= set_value('name'); ?>">
									                <?= form_error('name', '<small style="color:red">', '</small>');?> 

												</div>
											</div>

                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
												<div class="form__group">
													<label class="form__label" >Password</label>
													<input id="password1" type="password" name="password1" class="form__input">
								                    <?= form_error('password1', '<small style="color:red">', '</small>');?> 

												</div>
											</div>

											<div class="col-12 col-md-6 col-lg-12 col-xl-6">
												<div class="form__group">
													<label class="form__label" >Confirm Password</label>
													<input id="password2" type="password" name="password2" class="form__input">
												</div>
											</div>
										
											<!-- <div class="col-12 col-md-6 col-lg-12 col-xl-6">
												<div class="form__group">
													<label class="form__label" for="subscription">Subscription</label>
													<select class="js-example-basic-single" id="subscription">
														<option value="Basic">Basic</option>
														<option value="Premium">Premium</option>
														<option value="Cinematic">Cinematic</option>
													</select>
												</div>
											</div> -->

											<!-- <div class="col-12 col-md-6 col-lg-12 col-xl-6">
												<div class="form__group">
													<label class="form__label" for="rights">Rights</label>
													<select class="js-example-basic-single" id="rights">
														<option value="User">User</option>
														
														<option value="Admin">Admin</option>
													</select>
												</div>
											</div> -->

											<div class="col-12">
												<button class="sign__btn" type="submit">Save</button>
												<button class="sign__btn" type="reset" type="submit">Reset</button>
											</div>
										</div>
									</form>
								</div>
								<!-- end details form -->
							</div>
						</div>	
					</div>
				</div>
			</div>
				<!-- end content tabs -->
		</div>
	
</main>
	<!-- end main content -->