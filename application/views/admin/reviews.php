<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Reviews</h2>

						<span class="main__title-stat">9,071 Total</span>

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
									<li>Rating</li>
								</ul>
							</div>
							<!-- end filter sort -->

							<!-- search -->
							<form action="#" class="main__title-form">
								<input type="text" placeholder="Key word..">
								<button type="button">
									<i class="icon ion-ios-search"></i>
								</button>
							</form>
							<!-- end search -->
						</div>
					</div>
				</div>
				<!-- end main title -->

				<!-- reviews -->
				<div class="col-12">
					<div class="main__table-wrap">
						<table class="main__table">
							<thead>
								<tr>
									<th>NAME USER</th>
									<th>EMAIL</th>
									<th >REVIEW</th>
									<th>RATING</th>
								</tr>
							</thead>

							<tbody id="idbody">
							</tbody>
						</table>
					</div>
				</div>
				<!-- end reviews -->
				
				<!-- paginator -->
				<div class="col-12">
					<div class="paginator-wrap">
						<span>10 from 9 071</span>

						<ul class="paginator">
							<li class="paginator__item paginator__item--prev">
								<a href="#"><i class="icon ion-ios-arrow-back"></i></a>
							</li>
							<li class="paginator__item paginator__item--active"><a href="#">1</a></li>
							<li class="paginator__item"><a href="#">2</a></li>
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

	<!-- modal view -->
	<div id="modal-view" class="zoom-anim-dialog mfp-hide modal modal--view">
		<div class="reviews__autor">
			<img class="reviews__avatar" src="img/user.svg" alt="">
			<span class="reviews__name">Best Marvel movie in my opinion</span>
			<span class="reviews__time">24.08.2018, 17:53 by John Doe</span>

			<span class="reviews__rating"><i class="icon ion-ios-star"></i>8.4</span>
		</div>
		<p class="reviews__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
	</div>
	<!-- end modal view -->

	<!-- modal delete -->
	<div id="modal-delete" class="zoom-anim-dialog mfp-hide modal">
		<h6 class="modal__title">Review delete</h6>

		<p class="modal__text">Are you sure to permanently delete this review?</p>

		<div class="modal__btns">
			<button class="modal__btn modal__btn--apply" type="button">Delete</button>
			<button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
		</div>
	</div>
	<!-- end modal delete -->
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
