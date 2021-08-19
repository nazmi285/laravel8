
    <div class="col-12 col-md-8">
		<div class="row justify-content-center mb-3">
			<div class="d-flex justify-content-between">
	            <h3>Products</h3>
	        </div>
	    </div>
	    <div class="col-12 col-lg-8 col-md-12 col-sm-12 d-none" id="filtered">
	        <span class="d-inline">Filter by</span>  <div class="d-inline" id="show-filtered" ></div>
	    </div>
	    <div class="row justify-content-left mb-3">
	    	@forelse($products as $product)
	    		<div class="col-12 col-md-12 col-lg-12 mb-2 px-0">

						<div class="card rounded-0 border-0 shadow-sm mb-2">
				            <div class="card-body">
				                <div class="clearfix">
				                    <h5 class="card-title float-start fw-bold">#{{$product->product_no}}</h5>
				                    <span class="float-end">{{carbonDiffForHumanShort($product->created_at)}}</span>
				                </div>
				                <p class="card-text">{{$product->name}}<br>{{$product->description}}</p>

				            </div>
				        </div>

				</div>
	    	@empty
			    <div class="col-12 col-md-4 col-lg-4">
			    	<a href="{{route('product.create')}}">
						<div class="card rounded-3 alert-primary h-100">
							<div class="card-body my-5 position-relative">
								<div class="position-absolute top-50 start-50 translate-middle text-center">
									<i class="fa fa-plus" aria-hidden="true"></i><br> Add New Product
								</div>
							</div>
						</div>
					</a>
				</div>
			@endforelse
		</div>
	</div>

