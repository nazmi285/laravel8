
@if(Auth::guard('web')->check() || Auth::guard('customer')->check())
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8 mb-3">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 mb-3">
					<div class="input-group input group-sm">
						<input type="search" class="form-control rounded-3 " name="keyword" id="keyword">
						<button type="button" class="btn btn-icon rounded-3 mx-2"><i class="fa fa-th-large" aria-hidden="true"></i></button>
						<button type="button" class="btn btn-icon rounded-3"><i class="fa fa-th-list" aria-hidden="true"></i></button>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-4">
					<a href="#" class="product-sm mb-3 text-decoration-none position-relative" data-bs-toggle="modal" data-bs-target="#exampleModal">

						<div class="img-wrap"> <img src="{{asset('images/items/item.jpg')}}"> </div>
							<span class="position-absolute top-0 end-0 btn btn-sm btn-danger shadow-sm rounded-0"><span class="visually">Sale</span></span>
						<div class="text-wrap">
							<p class="title text-truncate">Great product name is here</p>
							<div class="price">RM17.00</div> <!-- price-wrap.// -->
						</div>
					</a>
				</div>
				<div class="col-6 col-sm-6 col-md-4">
					<a href="#" class="product-sm mb-3 text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
						<div class="img-wrap"> <img src="{{asset('images/items/item.jpg')}}"> </div>
						<div class="text-wrap">
							<p class="title text-truncate">Skillmax bike black</p>
							<div class="price">RM35.00</div> <!-- price-wrap.// -->
						</div>
					</a>
			    </div>
			    <div class="col-6 col-sm-6 col-md-4">
					<a href="#" class="product-sm mb-3 text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
						<div class="img-wrap"> <img src="{{asset('images/items/item.jpg')}}"> </div>
						<div class="text-wrap">
							<p class="title text-truncate">Apple ipad pro 32Gb white</p>
							<div class="price">RM12.50</div> <!-- price-wrap.// -->
						</div>
					</a>
			    </div>
			    <div class="col-6 col-sm-6 col-md-4">
					<a href="#" class="product-sm mb-3 text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
						<div class="img-wrap"> <img src="{{asset('images/items/item.jpg')}}"> </div>
						<div class="text-wrap">
							<p class="title text-truncate">Headset for laptop</p>
							<div class="price">RM17.00</div> <!-- price-wrap.// -->
						</div>
					</a>
				</div>
			    <div class="col-6 col-sm-6 col-md-4">
					<a href="#" class="product-sm mb-3 text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
						<div class="img-wrap"> <img src="{{asset('images/items/item.jpg')}}"> </div>
						<div class="text-wrap">
							<p class="title text-truncate">TP link modem</p>
							<div class="price">RM17.00</div> <!-- price-wrap.// -->
						</div>
					</a>
				</div>
			    <div class="col-6 col-sm-6 col-md-4">
					<a href="#" class="product-sm mb-3 text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
						<div class="img-wrap"> <img src="{{asset('images/items/item.jpg')}}"> </div>
						<div class="text-wrap">
							<p class="title text-truncate">Great product name is here</p>
							<div class="price">RM36.00</div> <!-- price-wrap.// -->
						</div>
					</a>
				</div>
				<div class="col-6 col-sm-6 col-md-4">
					<a href="#" class="product-sm mb-3 text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
						<div class="img-wrap"> <img src="{{asset('images/items/item.jpg')}}"> </div>
						<div class="text-wrap">
							<p class="title text-truncate">Great product name is here</p>
							<div class="price">RM99.00</div> <!-- price-wrap.// -->
						</div>
					</a>
				</div>
			    <div class="col-6 col-sm-6 col-md-4">
					<a href="#" class="product-sm mb-3 text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
						<div class="img-wrap"> <img src="{{asset('images/items/item.jpg')}}"> </div>
						<div class="text-wrap">
							<p class="title text-truncate">Great product name is here</p>
							<div class="price">RM218.00</div> <!-- price-wrap.// -->
						</div>
					</a>
				</div>
			    <div class="col-6 col-sm-6 col-md-4">
					<a href="#" class="product-sm mb-3 text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
						<div class="img-wrap"> <img src="{{asset('images/items/item.jpg')}}"> </div>
						<div class="text-wrap">
							<p class="title text-truncate">Great product name is here</p>
							<div class="price">RM17.00</div> <!-- price-wrap.// -->
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade p-0" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-fullscreen">
		<div class="modal-content">
			<div class="modal-body p-0">
				<div class="screen-wrap">

					<header class="app-header fixed-top">
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</header>

					<main class="app-content">
					<section class="gallery-wrap scroll-horizontal">
						<div class="item-slider"><img src="{{asset('images/items/item.jpg')}}"></div>
						<div class="item-slider"><img src="{{asset('images/items/item.jpg')}}"></div>
						<div class="item-slider"><img src="{{asset('images/items/item.jpg')}}"></div>
					</section>

					<section class="padding-around">

					<div class="rating-wrap mb-2">
					    <ul class="rating-stars">
					        <li style="width:80%" class="stars-active">
					            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
					            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
					            <i class="fa fa-star"></i>
					        </li>
					        <li>
					            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
					            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
					            <i class="fa fa-star"></i>
					        </li>
					    </ul>
					    <small class="label-rating text-muted">7/10</small>
					</div> <!-- rating-wrap.// -->

					<h6 class="title-detail">Mayin matodan tikilgan xalat, Zara  </h6>	
					<div class="price-wrap mb-3">
						<span class="h6 price text-warning">179 000 sum</span> 
					</div> <!-- price-wrap.// -->


					<div class="d-flex">
						<div class="flex-grow-1 mr-2"><a href="page-cart.html" class="btn btn-primary btn-block">Savatga solish</a></div>
						<div><a href="page-cart.html" class="btn btn-light btn-icon"><i class="fa fa-heart"></i></a></div>
					</div>

					<article class="info-detail-wrap mt-2">
						Great words is nothing but just sounds tovar xarakteristikasi uchun tekst shunchaki aliquid molestias ipsum tenetur nesciunt assumenda sequi, dolor doloremque quo nam earum.
							 <a href="#" class="btn-link"> Read more</a>
					</article>

					</section>
					</main>

					</div>
			</div>
			<div class="modal-footer">

                    <a href="#" class="btn btn-primary">  <i class="fa fa-shopping-cart"></i> Add To Cart  </a>
                    <a href="#" class="btn btn-light">  <i class="fa fa-heart"></i> </a>
              

			</div>
		</div>
	</div>
</div>
@endif


    <link href="{{ asset('vendor/calendar/css/calendar.css') }}" rel="stylesheet">
		<div class="col-12 col-sm-12 col-md-8 mb-3">
			<div class="elegant-calencar d-md-flex">
				<div class="wrap-header d-flex align-items-center">
					<p id="reset">reset</p>
					<div id="header" class="p-0">
						<div class="pre-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-left"></i></div>
						<div class="head-info">
							<div class="head-day"></div>
							<div class="head-month"></div>
						</div>
						<div class="next-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-right"></i></div>
					</div>
				</div>
				<div class="calendar-wrap">
					<table id="calendar">
						<thead>
							<tr>
								<th>Sun</th>
								<th>Mon</th>
								<th>Tue</th>
								<th>Wed</th>
								<th>Thu</th>
								<th>Fri</th>
								<th>Sat</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="wrap-header bg-white d-flex align-items-center">

				</div>
			</div>
		</div>
		<div class="col-12 col-sm-12 col-md-8 mb-5">
		</div>
		
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="{{asset('vendor/calendar/js/calendar.js')}}"></script>