<div class="col-md-8 mb-3">
    <div class="input-group input-group-sm mb-3">
        <input type="search" class="form-control form-control-sm rounded-3 " name="keyword" id="keyword" placeholder="Search">
        <button type="button" class="btn btn-icon rounded-3 mx-2 "><i class="fa fa-lg fa-th-large" aria-hidden="true"></i></button>
        <button type="button" class="btn btn-icon rounded-3 "><i class="fa fa-lg fa-th-list" aria-hidden="true"></i></button>
    </div>

    @foreach($orders as $key => $val)
        <span class="badge rounded-pill alert-primary mb-3 px-5 fs-6">{{carbonDateSorting($key)}}</span>
        @foreach($val as $order)
        <div class="card rounded-3 mb-3">
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
