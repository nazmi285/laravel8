<div class="col-md-8 mb-3">
    <div class="input-group input-group-sm mb-3">
        <input type="search" class="form-control form-control-sm rounded-3 " name="keyword" id="keyword" placeholder="Search">
        <button type="button" class="btn btn-icon rounded-3 mx-2 "><i class="fa fa-lg fa-th-large" aria-hidden="true"></i></button>
        <button type="button" class="btn btn-icon rounded-3 "><i class="fa fa-lg fa-th-list" aria-hidden="true"></i></button>
    </div>

    @foreach($orders as $order)
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
</div>

<script type="text/javascript">
    //request for location
    getLocation();
    //function that gets the location and returns it
        function getLocation() {
            if(navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                console.log("Geo Location not supported by browser");
            }
        }
        //function that retrieves the position
        function showPosition(position) {
            var location = {
                longitude: position.coords.longitude,
                latitude: position.coords.latitude
            }
            console.log(location)
        }
</script>