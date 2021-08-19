<div class="col-md-8 mb-3 p-0" wire:poll.keep-alive>
    <div class="input-group input-group-sm mb-3">
        <input type="search" class="form-control form-control-sm rounded-3 " name="keyword" id="keyword" placeholder="Search">
        <button type="button" class="btn btn-icon rounded-3 mx-2 "><i class="fa fa-lg fa-th-large" aria-hidden="true"></i></button>
        <button type="button" class="btn btn-icon rounded-3 "><i class="fa fa-lg fa-th-list" aria-hidden="true"></i></button>
    </div>

    @foreach($orders as $key => $val)
        <span class="badge mb-1 rounded-0 fs-6 fw-bold text-secondary">{{carbonDateSorting($key)}}</span>
        @foreach($val as $order)
        <div class="card rounded-0 border-0 shadow-sm mb-2">
            <div class="card-body">
                <div class="clearfix">
                    <h5 class="card-title float-start fw-bold">#{{$order->order_no}}</h5>
                    <span class="float-end">{{carbonDiffForHumanShort($order->created_at)}}</span>
                </div>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

            </div>
        </div>
        @endforeach
    @endforeach
</div>
@push('scripts')
    <script>

    // Enable pusher logging - don't include this in production
    // Pusher.logToConsole = true;

    // var pusher = new Pusher('008d20185269e76240f3', {
    //     cluster: 'ap1'
    // });

    // var channel = pusher.subscribe('my-channel');
    // channel.bind('my-event', function(data) {
    //     alert(JSON.stringify(data));


    // });
    </script>
@endpush