<div class="sign section--bg" data-bg="<?= base_url(); ?>assets/img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- registration form -->
						<form action="<?= base_url('auth/signup');?>" class="sign__form" method="post">
							<a href="<?= base_url('user'); ?>" class="sign__logo">
								<img src="<?= base_url(); ?>assets/img/logo.png" alt="">
							</a>

							<div class="sign__group">
								<input type="text" class="sign__input" placeholder="Full Name" id="name" name="name" value="<?= set_value('name'); ?>">
								
									<?= form_error('name', '<small style="color:red">', '</small>');?> 
								 
							</div>

							<div class="sign__group">
								<input type="text" class="sign__input" placeholder="Email" id="email" name="email" value="<?= set_value('email'); ?>">
								<?= form_error('email', '<small style="color:red">', '</small>');?> 
							</div>

							<div class="sign__group">
								<input type="password" class="sign__input" placeholder="Password" id="password1" name="password1">
								<?= form_error('password1', '<small style="color:red">', '</small>');?> 

							</div>

							<div class="sign__group">
								<input type="password" class="sign__input" placeholder="Repeat Password" id="password2" name="password2">
							</div>
							
							<button type="submit" class="sign__btn" type="button">Sign up</button>

							<span class="sign__delimiter">or</span>
							<span class="sign__text">Already have an account? <a href="<?= base_url('auth'); ?>">Sign in!</a></span>
						</form>
						<!-- registration form -->
					</div>
				</div>
			</div>
		</div>
</div>