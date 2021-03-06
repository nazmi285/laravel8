<div>
    @section('title')
    <h4 class="fw-bold p-2 mb-0">My Family</h4>
    @endsection

    <div class="d-flex justify-content-center">
        <div class="col-12 col-md-6 mb-3">
            
            <div class="py-5">
                <small class="text-muted">{{dateTranslatedDFY(now())}}</small>
                <h4 class="fw-bold">Hello, {{Auth::user()->name}}</h4>
            </div>
            
            {{-- <h5 class="d-grid"> My Family </h5> --}}
            <div class="card text-center rounded-3 shadow">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Family Saalim Tupen</h5>
                    {{-- <a href="#" class="btn btn-primary">Go my big family tree</a> --}}
                </div>
            </div>
            {{-- @foreach($orders as $key => $val)
                <div class="clearfix">
                    <span class="mt-3 rounded-0 fs-6 fw-normal text-muted float-end">{{carbonDateSorting($key)}}</span>
                </div>
                
                @foreach($val as $order)
                <div class="card border-0 rounded-0 border-bottom bg-white">
                    <div class="card-body rounded-0 px-0">
                        <div class="clearfix">
                            <h5 class="card-title float-start">#{{$order->order_no}}</h5>
                            <span class="float-end text-muted">{{dateConvertHIa($order->created_at)}}</span>
                        </div>
                        <p class="card-texttext-muted ">With supporting text below as a natural lead-in to additional content.</p>

                    </div>
                </div>
                @endforeach
            @endforeach --}}
            

        </div>
    </div>
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