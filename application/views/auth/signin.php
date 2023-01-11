<div class="sign section--bg" data-bg="<?= base_url();?>assets/img/section/section.jpg">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="sign__content">
					<!-- authorization form -->
					<form action="<?= base_url('auth');?>" class="sign__form" method="post">
						<a href="<?= base_url('user'); ?>" class="sign__logo">
							<img src="assets/img/logo.png" alt="">
						</a>
						<?= $this->session->flashdata('message'); ?>
						<div class="sign__group">
							<input type="text" class="sign__input" placeholder="Email" id="email" name="email" value="<?= set_value('email'); ?>">
							<?= form_error('email', '<small style="color:red">', '</small>');?> 
						</div>

						<div class="sign__group">
							<input type="password" class="sign__input" placeholder="Password" id="password" name="password">
							<?= form_error('password', '<small style="color:red">', '</small>');?> 
						</div>

						<button type="submit" class="sign__btn" type="button">Sign in</button>

						<span class="sign__delimiter">or</span>

						<span class="sign__text">Don't have an account? <a href="<?= base_url('auth/signup'); ?>">Sign up!</a></span>

						<span class="sign__text"><a href="forgot.php">Forgot password?</a></span>
					</form>
					<!-- end authorization form -->
				</div>
			</div>
		</div>
	</div>
</div>