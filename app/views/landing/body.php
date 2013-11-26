 <style>
      #map-canvas {
        height: 600px;
        margin-top: 110px;
        padding: 0px;
        border: 1px solid black;

      }
      img[src*="gstatic.com/"], img[src*="googleapis.com/"] {
       max-width: none;
      }
    </style>
   
<div class="navbar-fixed-top" style="margin-top:50px; background:#ECF0F1; padding:20px;">
<center>
  Select your Region <select>
      <option>All</option>
  </select>
  <button class="btn ">Contribute</button>
</div>
 <div id="map-canvas"></div>



 <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true"></script>

<script>
// $(document).ready(function(){
//  initialize();
// });
var map;

function initialize() {
  var mapOptions = {
    zoom: 6,
    center: new google.maps.LatLng(12.404389, 122.594719),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

  // Try HTML5 geolocation
  if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = new google.maps.LatLng(position.coords.latitude,
                                       position.coords.longitude);
      var myPoints = [
           [14.583583,120.979729, 'assets/images/photos/1.jpg'],
           [16.393931,120.606194, 'assets/images/photos/2.jpg'],
           [13.421681,123.429680, 'assets/images/photos/3.jpg'],
           [12.060809,124.616203, 'assets/images/photos/4.jpg'],
           [10.703792,122.583733, ''],
           [10.325728,123.891106, ''],
           [11.824341,119.936028, ''],
           [8.472372,125.330315, ''],
           [6.937333,122.078362, '']
        ];
      var myMarkers = [];
      for (var i in myPoints) {
          // myMarkers.push (new google.maps.LatLng (myPoints[i][0], myPoints[i][1]) );
          var points = new google.maps.LatLng (myPoints[i][0], myPoints[i][1]); 
          var infowindow = new google.maps.InfoWindow({
            map: map,
            position: points,
            content: '<img style="height:30px; width:30px;" src="'+ myPoints[i][2]+'">'
          });
      }
        marker = new RichMarker({
          position: pos,
          map: map,
          draggable: true,
          content: '<div>hey</div>'
          });
      // var center = new google.maps.LatLng(12.404389, 122.594719);
      // map.setCenter(center);

    }, function() {
      handleNoGeolocation(true);
    });
  } else {
    // Browser doesn't support Geolocation
    handleNoGeolocation(false);
  }
}

function handleNoGeolocation(errorFlag) {
  if (errorFlag) {
    var content = 'Error: The Geolocation service failed.';
  } else {
    var content = 'Error: Your browser doesn\'t support geolocation.';
  }

  var options = {
    map: map,
    position: new google.maps.LatLng(60, 105),
    content: content
  };

  var infowindow = new google.maps.InfoWindow(options);
  map.setCenter(options.position);
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>