$(function(){

	var map;
	
	function initialize() {

	  var mapProp = {
	    center:new google.maps.LatLng(-27.609959,-48.576585),
	    zoom:14,
	    mapTypeId:google.maps.MapTypeId.ROADMAP
	  };
	  
	  map=new google.maps.Map(document.getElementById("mapa"),mapProp);
	}

	function addMarker(lat,long,icon,content,showInfoWindow,openInfoWindow){
		  var myLatLng = {lat:lat,lng:long};

		  if(icon === ''){
			   var marker = new google.maps.Marker({
			    position: myLatLng,
			    map: map,
			    icon:icon
			  });
		  }else{
			  var marker = new google.maps.Marker({
			    position: myLatLng,
			    map: map,
			    icon:icon
			  });
		}

		  var infoWindow = new google.maps.InfoWindow({
	                content: content,
	                maxWidth:200
	        });

		  google.maps.event.addListener(infoWindow, 'domready', function() {

		   var iwOuter = $('.gm-style-iw');
		
		   var iwBackground = iwOuter.prev();

		   iwBackground.children(':nth-child(2)').css({'background' : 'rgb(255,255,255)'}).css({'border-radius':'0px'});

		   iwBackground.children(':nth-child(4)').css({'background' : 'rgb(255,255,255)'}).css({'border-radius':'0px'});


		});
		  	if(showInfoWindow == undefined){
		        google.maps.event.addListener(marker, 'click', function () {
		              infoWindow.open(map, marker);
		         });
	    	}else if(openInfoWindow == true){
	    		infoWindow.open(map, marker);
	    	}
	}

		initialize();
		addMarker(-27.609959,-48.576585,'',"Minha casa",undefined,false);

})