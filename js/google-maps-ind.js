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
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ff0000"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "labels.text",
        "stylers": [
            {
                "hue": "#ff0000"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#612020"
            },
            {
                "weight": "6.40"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "color": "#939292"
            },
            {
                "weight": "3.00"
            },
            {
                "lightness": "-15"
            }
        ]
    },
    {
        "featureType": "administrative.country",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "hue": "#ff0000"
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "administrative.country",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "hue": "#ff0000"
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "administrative.land_parcel",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "color": "#f2f2f2"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#5e5e5e"
            },
            {
                "weight": "1"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 45
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "color": "#46bcec"
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#282828"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "labels.text",
        "stylers": [
            {
                "visibility": "off"
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

archiveMap();



});


