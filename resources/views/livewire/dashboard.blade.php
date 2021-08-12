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
	<div class="card card-default">
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
            <tbody wire:poll.keep-alive>
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

