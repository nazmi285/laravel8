<div class="container">
	<div class="row justify-content-center">
		<div class="col-12 col-md-8 mb-3">
			<div class="row justify-content-center mb-3">
				<div class="d-flex justify-content-between">
		            <h3>Profile Information</h3>
		        </div>
		    </div>
		    <div class="col-12 col-lg-8 col-md-12 col-sm-12 d-none" id="filtered">
		        <span class="d-inline">Filter by</span>  <div class="d-inline" id="show-filtered" ></div>
		    </div>
		</div>
		<div class="col-12 col-md-8 mb-3">
			<div class="d-flex">
			  	<div class="flex-shrink-0">
			    	<img class="img-fluid rounded-circle" src="https://github.com/mdo.png" width="78px" alt="...">
			  	</div>
			  	<div class="flex-grow-1 ms-3">
			    	{{Auth::user()->name}}<br>
			    	<span class="text-muted">{{Auth::user()->email}}</span>
			  	</div>
			</div>
		</div>
	</div>
</div>