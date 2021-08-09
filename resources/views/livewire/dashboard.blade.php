<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8 mb-3">
			<div class="card">
				<div class="card-header">{{ __('Dashboard') }}</div>

				<div class="card-body">
					@if (session('status'))
					<div class="alert alert-success" role="alert">
						{{ session('status') }}
					</div>
					@endif

					{{ __('You are logged in!') }}
				</div>
			</div>
		</div>
		<div class="col-md-8 mb-3">
		    <div class="card" style="height: 250px">
		        <div class="card-body position-relative">
		            <div class="position-absolute top-0 start-0 bg-dark">xxx</div>
		            <div class="position-absolute top-0 end-0 bg-dark">xxx</div>
		            <div class="position-absolute top-50 start-50 bg-dark">xxx</div>
		            <div class="position-absolute bottom-50 end-50 bg-dark">xxx</div>
		            <div class="position-absolute bottom-0 start-0 bg-dark">xxx</div>
		            <div class="position-absolute bottom-0 end-0 bg-dark">xxx</div>
		        </div>
		    </div>
		</div>
		<div class="col-md-8 mb-3">
		    <div class="card" style="height: 250px">
		        <div class="card-body position-relative ">
		            <div class="position-absolute top-0 start-0 translate-middle bg-dark">xxx</div>
		            <div class="position-absolute top-0 start-50 translate-middle bg-dark">xxx</div>
		            <div class="position-absolute top-0 start-100 translate-middle bg-dark">xxx</div>
		            <div class="position-absolute top-50 start-0 translate-middle bg-dark">xxx</div>
		            <div class="position-absolute top-50 start-50 translate-middle bg-dark">xxx</div>
		            <div class="position-absolute top-50 start-100 translate-middle bg-dark">xxx</div>
		            <div class="position-absolute top-100 start-0 translate-middle bg-dark">xxx</div>
		            <div class="position-absolute top-100 start-50 translate-middle bg-dark">xxx</div>
		          <div class="position-absolute top-100 start-100 translate-middle bg-dark">xxx</div>
		      </div>
		  </div>
		</div>
		<div class="col-md-8 mb-3">
		    <div class="card" style="height: 250px">
		        <div class="card-body position-relative">
		            <div class="position-absolute top-0 start-0 bg-dark">xxx</div>
		            <div class="position-absolute top-0 start-50 translate-middle-x bg-dark">xxx</div>
		            <div class="position-absolute top-0 end-0 bg-dark">xxx</div>
		            <div class="position-absolute top-50 start-0 translate-middle-y bg-dark">xxx</div>
		            <div class="position-absolute top-50 start-50 translate-middle bg-dark">xxx</div>
		            <div class="position-absolute top-50 end-0 translate-middle-y bg-dark">xxx</div>
		            <div class="position-absolute bottom-0 start-0 bg-dark">xxx</div>
		            <div class="position-absolute bottom-0 start-50 translate-middle-x bg-dark">xxx</div>
		            <div class="position-absolute bottom-0 end-0 bg-dark">xxx</div>
		        </div>
		  </div>
		</div>
	</div>
</div>