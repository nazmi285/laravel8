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

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script> 
<script type="text/javascript"> 
    var geocoder;

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(successFunction, errorFunction);
    } 
    //Get the latitude and the longitude;
    function successFunction(position) {
        var lat = position.coords.latitude;
        var lng = position.coords.longitude;
        codeLatLng(lat, lng)
    }

    function errorFunction(){
        alert("Geocoder failed");
    }

    function initialize() {
        geocoder = new google.maps.Geocoder();
    }

    function codeLatLng(lat, lng) {

        var latlng = new google.maps.LatLng(lat, lng);
        geocoder.geocode({'latLng': latlng}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                console.log(results)
                if (results[1]) {
    //formatted address
    alert(results[0].formatted_address)
    //find country name
    for (var i=0; i<results[0].address_components.length; i++) {
        for (var b=0;b<results[0].address_components[i].types.length;b++) {

    //there are different types that might hold a city admin_area_lvl_1 usually does in come cases looking for sublocality type will be more appropriate
    if (results[0].address_components[i].types[b] == "administrative_area_level_1") {
        //this is the object you are looking for
        city= results[0].address_components[i];
        break;
    }
    }
    }
    //city data
    alert(city.short_name + " " + city.long_name)


    } else {
        alert("No results found");
    }
    } else {
        alert("Geocoder failed due to: " + status);
    }
    });

    initialize();
}
</script> 