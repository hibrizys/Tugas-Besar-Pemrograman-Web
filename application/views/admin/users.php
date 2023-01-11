<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
				
						<h2>Users</h2>
						<span class="main__title-stat">4 Total</span>
						
						<div class="main__title-wrap">
							<!-- filter sort -->
							<div class="filter" id="filter__sort">
								<span class="filter__item-label">Sort by:</span>

								<div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-sort" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<input type="button" value="Date created">
									<span></span>
								</div>

								<ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-sort">
									<li>Date created</li>
									<li>Pricing plan</li>
									<li>Status</li>
								</ul>
							</div>
							<!-- end filter sort -->

							<!-- search -->
							<form action="#" class="main__title-form">
								<input type="text" placeholder="Find user..">
								<button type="button">
									<i class="icon ion-ios-search"></i>
								</button>
							</form>
							<!-- end search -->
						</div>
					</div>
				</div>
				<!-- end main title -->
				<!-- users -->

				<div class="col-md-1 p-3 ">

				<a href="<?= base_url('admin/addUser'); ?>" class="main__title-link">add User</a>

				</div>
				<?= $this->session->flashdata('message'); ?>
				
				<div class="col-12">
					<div class="main__table-wrap">
						<table class="main__table">
							<thead>
								<tr>
									<th>ID</th>
									<th>BASIC INFO</th>
									<th>PRICING PLAN</th>
									<th>COMMENTS</th>
									<th>REVIEWS</th>
									<th>STATUS</th>
									<th>CREATED DATE</th>
									<th>ACTIONS</th>
								</tr>
							</thead>
							<?php $id = 1;
							foreach($users as $u) :
							?>
							<tbody>
								<tr>
									<td>
										<div class="main__table-text"><?= $u->id?></div>
									</td>
									<td>
										<div class="main__user">
											<div class="main__avatar">
												<img src="<?= base_url(); ?>assets2/img/user.svg" alt="">
											</div>
											<div class="main__meta">
												<h3><?= $u->name ?></h3>
												<span><?= $u->email ?></span>
											</div>
										</div>
									</td>
									
									<td>
										<div class="main__table-text"><?= $u->role?></div>
									</td>
									<td>
										<div class="main__table-text"><?= $u->Comments ?></div>
									</td>
									<td>
										<div class="main__table-text"><?= $u->Reviews ?></div>
									</td>
									<td>
										<div class="main__table-text main__table-text--green"><?= $u->status ?></div>
									</td>
									<td>
										<div class="main__table-text"><?= date('d F Y',$u->date_created) ?></div>
									</td>
									<td>
										<div class="main__table-btns">
											<a href="#modal-status" class="main__table-btn main__table-btn--banned open-modal">
												<i class="icon ion-ios-lock"></i>
											</a>
											
											<a href="<?= base_url('admin/viewUser/' . $u->id); ?>" class="main__table-btn main__table-btn--view">
												<i class="icon ion-ios-eye"></i>
											</a>

											<button href="#editUser<?= $u->id ?>" class="main__table-btn main__table-btn--edit open-modal"  data-toggle="modal" data-target="#editUser<?= $u->id ?>">
												<i class="icon ion-ios-create"></i>
											</button>
											<a href="<?= base_url('admin/deleteUser/'). $u->id ?>" class="main__table-btn main__table-btn--delete " onclick="return confirm('Are you sure to permanently delete <?= $u->name ?> ?')" >
												<i class="icon ion-ios-trash"></i>
											</a>
										</div>
									</td>
								</tr>
								<?php endforeach ?>
							</tbody>
							
						</table>
					</div>
				</div>
				<!-- end users -->

				<!-- paginator -->
				<div class="col-12">
					<div class="paginator-wrap">
						<span>10 from 3 702</span>

						<ul class="paginator">
							<li class="paginator__item paginator__item--prev">
								<a href="#"><i class="icon ion-ios-arrow-back"></i></a>
							</li>
							<li class="paginator__item paginator__item--active"><a href="#">1</a></li>
							<li class="paginator__item "><a href="#">2</a></li>
							<li class="paginator__item"><a href="#">3</a></li>
							<li class="paginator__item"><a href="#">4</a></li>
							<li class="paginator__item paginator__item--next">
								<a href="#"><i class="icon ion-ios-arrow-forward"></i></a>
							</li>
						</ul>
					</div>
				</div>
				<!-- end paginator -->
			</div>
		</div>
	</main>
	<!-- end main content -->
	
	<?php foreach($users as $u) : ?>
	<div class="zoom-anim-dialog mfp-hide modal"  role="dialog" id="editUser<?= $u->id ?>">
		<div class="modal-dialog" role="document">
									<form action="<?= base_url('admin/editUser/'). $u->id ?>" method="post")?>">
									
										<div class="row row--form">
											<div class="col-12">
												<h4 class="form__title">Profile details</h4>
											</div>

											<div class="col-12 col-md-6 col-lg-12 col-xl-6" >
												<div class="form__group" >
													<label class="form__label" for="email">Email</label>
													<input id="email" type="text" name="email" class="form__input" value="<?= $u->email ?>">
									                <?= form_error('email', '<small style="color:red">', '</small>');?> 

												</div>
											</div>

											<div class="col-12 col-md-6 col-lg-12 col-xl-6" >
												<div class="form__group" >
													<label class="form__label" for="name">Full Name</label>
													<input id="name" type="text" name="name" class="form__input" value="<?= $u->name ?>">
									                <?= form_error('name', '<small style="color:red">', '</small>');?> 

												</div>
											</div>
											<div class="col-10">
												<button class="modal__btn modal__btn--apply" type="submit">Save</button>
												<button class="modal__btn modal__btn--apply" type="reset">Reset</button>
											</div>
												
										</div>
									</form>
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<?php endforeach ?>
	<!-- modal status -->
	<div id="modal-status" class="zoom-anim-dialog mfp-hide modal">
		<h6 class="modal__title">Status change</h6>

		<p class="modal__text">Are you sure about immediately change status?</p>

		<div class="modal__btns">
			<button class="modal__btn modal__btn--apply" type="button">Apply</button>
			<button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
		</div>
	</div>
	<!-- end modal status -->


	<!-- <?php foreach($users as $u) : ?>
	<!-- modal delete -->
	<div id="deleteUser<?= $u->id ?>" class="zoom-anim-dialog mfp-hide modal"  >
		<h6 class="modal__title">User delete</h6>

		<p class="modal__text">Are you sure to permanently delete <?= $u->name ?> ?</p>

		<div class="modal__btns">
			<button class="modal__btn modal__btn--apply" type="submit">Delete</button>
			<button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
		</div>
	</div>
	<?php endforeach ?> -->
	<!-- end modal delete -->