<div class="col-md-8 mb-3">
	<div class="card mb-3">
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
    <div class="card rounded-3">
        <div class="card-body">
            <div class="clearfix">
                <h5 class="card-title float-start fw-bold">#ORD_0001</h5>
                <span class="float-end">35 min ago</span>
            </div>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

        </div>
    </div>

	<div class="card card-default mt-3">
        <div class="card-header">
            <div class="row">
                <div class="col-md-10">
                    <strong>Order list</strong>
                </div>
            </div>
        </div>
        <table class=" table">
        	<thead>
                <tr>
                    <th>Order No</th>
                    <th>Date Created</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody wire:poll>
            	@foreach($orders as $order)
                <tr>
                    <td>{{$order->order_no}}</td>
                    <td>{{$order->created_at}}</td>
                    <td><button type="button" class="btn btn-primary">Edit</button></td>
                </tr>
                @endforeach
            </tbody> 
        </table>
    </div>
</div>

