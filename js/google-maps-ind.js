jQuery(document).ready(function($){
	//set your google maps parameters

	var archiveMap = function () {

	var $latitude = 51.5255069,
		$longitude = -0.0836207,
		$map_zoom = 14;

	//google map custom marker icon - .png fallback for IE11
	var is_internetExplorer11= navigator.userAgent.toLowerCase().indexOf('trident') > -1;
	var $marker_url = ( is_internetExplorer11 ) ? 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/cd-icon-location.png' : 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/cd-icon-location_1.svg';
		
	//define the basic color of your map, plus a value for saturation and brightness
	var	$main_color = '#2d313f',
		$saturation= -20,
		$brightness= 5;

	//we define here the style of the map
	var style= [
    {
        "featureType": "administrative",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "gamma": "1.00"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "lightness": "32"
            },
            {
                "invert_lightness": true
            },
            {
                "weight": "0.75"
            },
            {
                "saturation": "30"
            },
            {
                "color": "#6a1717"
            },
            {
                "gamma": "3.27"
            }
        ]
    },
    {
        "featureType": "administrative.province",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#7c1e1e"
            }
        ]
    },
    {
        "featureType": "administrative.locality",
        "elementType": "labels",
        "stylers": [
            {
                "color": "#ba5858"
            }
        ]
    },
    {
        "featureType": "administrative.locality",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#7e0d0d"
            }
        ]
    },
    {
        "featureType": "administrative.neighborhood",
        "elementType": "labels",
        "stylers": [
            {
                "color": "#7f2727"
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "lightness": "65"
            },
            {
                "saturation": "-100"
            },
            {
                "hue": "#ff0000"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "saturation": "-100"
            },
            {
                "lightness": "80"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi.attraction",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#7b1f1f"
            },
            {
                "weight": "0.75"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "color": "#dddddd"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road.highway.controlled_access",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "road.highway.controlled_access",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "color": "#dddddd"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "color": "#eeeeee"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#ba5858"
            },
            {
                "saturation": "-100"
            }
        ]
    },
    {
        "featureType": "transit.station",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit.station",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#ba5858"
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "transit.station",
        "elementType": "labels.icon",
        "stylers": [
            {
                "hue": "#ff0036"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "color": "#dddddd"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#ba5858"
            }
        ]
    }
];

	//set google map options
	for (i = 0; i < locations.length; i++) { 

	var map_options = {
      	center: new google.maps.LatLng(locations[i][0], locations[i][1]),
      	zoom: $map_zoom,
      	panControl: false,
      	zoomControl: false,
      	mapTypeControl: false,
      	streetViewControl: false,
      	mapTypeId: google.maps.MapTypeId.ROADMAP,
      	scrollwheel: false,
      	styles: style,
    }

}



    //inizialize the map
	var map = new google.maps.Map(document.getElementById('google-container'), map_options);

	//add a custom marker to the map				
	//var marker = new google.maps.Marker({
	//  	position: new google.maps.LatLng($latitude, $longitude),
	//    map: map,
	//    visible: true,
	// 	icon: $marker_url,
	//});


    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) { 
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
        icon: $marker_url
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
	//add custom buttons for the zoom-in/zoom-out on the map
	function CustomZoomControl(controlDiv, map) {
		//grap the zoom elements from the DOM and insert them in the map 
	  	var controlUIzoomIn= document.getElementById('cd-zoom-in'),
	  		controlUIzoomOut= document.getElementById('cd-zoom-out');
	  	controlDiv.appendChild(controlUIzoomIn);
	  	controlDiv.appendChild(controlUIzoomOut);

		// Setup the click event listeners and zoom-in or out according to the clicked element
		google.maps.event.addDomListener(controlUIzoomIn, 'click', function() {
		    map.setZoom(map.getZoom()+1)
		});
		google.maps.event.addDomListener(controlUIzoomOut, 'click', function() {
		    map.setZoom(map.getZoom()-1)
		});
	}

	var zoomControlDiv = document.createElement('div');
 	var zoomControl = new CustomZoomControl(zoomControlDiv, map);

  	//insert the zoom div on the top left of the map
  	map.controls[google.maps.ControlPosition.LEFT_TOP].push(zoomControlDiv);

};

var geodude = function() {
            var geocoder;
        var ZipCode;
        var SaleArr = [];
        var UnitsArr = [];
        var status;
    for (var i = 0; i < locations.length; i++) {

                var latlng = new google.maps.LatLng(locations[i][0], locations[i][1]),
                   geocoder = new google.maps.Geocoder();

        geocoder.geocode({'latLng': latlng}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {

                console.log(results[0]);
                if (results[0].address_components[6].types[0] === "postal_code") {
                  ZipCode = results[0].address_components[6].short_name;
                }

                else {
                  ZipCode = results[0].address_components[7].short_name;
                }
$.ajax({
    url: 'https://search.onboard-apis.com/propertyapi/v1.0.0/salestrend/snapshot?geoid=ZI' + ZipCode + '&interval=quarterly&startyear=2017&endyear=2017&startmonth=january&endmonth=december',
    headers: {
        'Accept':'application/json',
         'apikey':'f4a500f797d24450ca2f34f5187bb3c3'

    },
    method: 'GET',
    dataType: 'json',
    success: function(data){
      console.log('succes: '+ data.status.msg);
              for (var i = 0; i < data.salestrends.length; i++) {
            console.log(data.salestrends[i])
            if (data.salestrends[i].daterange.start === "Q1 2017") {
            UnitsArr[0] = data.salestrends[i].SalesTrend.homesalecount;
            SaleArr[0] = data.salestrends[i].SalesTrend.avgsaleprice;
            }
            
            else if (data.salestrends[i].daterange.start === "Q2 2017") {
            UnitsArr[1] = data.salestrends[i].SalesTrend.homesalecount;
            SaleArr[1] = data.salestrends[i].SalesTrend.avgsaleprice;
            }

             else if (data.salestrends[i].daterange.start === "Q3 2017") {
            UnitsArr[2] = data.salestrends[i].SalesTrend.homesalecount;
            SaleArr[2] = data.salestrends[i].SalesTrend.avgsaleprice;
            }
             else if (data.salestrends[i].daterange.start === "Q4 2017") {
            UnitsArr[3] = data.salestrends[i].SalesTrend.homesalecount;
            SaleArr[3] = data.salestrends[i].SalesTrend.avgsaleprice;
            }

        }    
                console.log(SaleArr)

    new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
labels: ["Q1", "Q2", "Q3", "Q4"],
    datasets: [{
        fillColor: "rgba(220,220,220,0)",
        strokeColor: "rgb(143,9,9)",
        pointColor: "rgb(143,9,9)",
        data: SaleArr

    }]
    },
    options: {
      
      legend: { display: false },
      title: {
        display: true,
        text: 'Average Sales Price per Quarter (2017)'
      }
}
});


    new Chart(document.getElementById("bar-chart-horizontal"), {
    type: 'bar',
    data: {
labels: ["Q1", "Q2", "Q3", "Q4"],
    datasets: [{
        fillColor: "rgba(220,220,220,0)",
        strokeColor: "rgb(143,9,9)",
        pointColor: "rgb(143,9,9)",
        data: UnitsArr

    }]
    },
    options: {
      
      legend: { display: false },
      title: {
        display: true,
        text: 'Average Home Sold Per Quarter'
      }
}
});
    
}
  });

            }
             else {
                alert("Geocoder failed due to: " + status);
            }
        });
    }
}


archiveMap();
geodude();



});


