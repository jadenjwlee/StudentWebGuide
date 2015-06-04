 function initialize() 
 {
 	//Declare canvas
 	var mapCanvas = document.getElementById('north');

 	//Declare location with coordinates
 	var interCenterLocation = new google.maps.LatLng(43.727509, -79.608171);
    var healthCenterLocation = new google.maps.LatLng(43.729287, -79.609023);
    var gymLocation = new google.maps.LatLng(43.730566, -79.608722);
    var ITLocation = new google.maps.LatLng(43.728442, -79.607354);
    var registLocation = new google.maps.LatLng(43.729008, -79.608749);
    var bookstoreLocation = new google.maps.LatLng(43.728694, -79.608213);

    //Set up initial map
    var mapOptions = {
    	center: new google.maps.LatLng(43.728711,-79.6073311),
        zoom: 17,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }

    var map = new google.maps.Map(mapCanvas, mapOptions)

    var interCenterDesc = '<div id="description" style = "width:250px; height:100px"><h1>International Center</h1> <h2>Location: LRC-2</h2> <h2>Open Hours 9AM - 5PM</h2></div>';
    var healthCenterDesc = '<div id="description" style = "width:250px; height:100px"><h1>Health Center</h1> <h2>Location: LRC-2</h2> <h2>Open Hours 10AM - 8PM</h2></div>';
    var gymDesc = '<div id="description" style = "width:250px; height:100px"><h1>Fitness Center</h1> <h2>Location: A-2</h2> <h2>Open Hours: 9AM - 10PM</h2></div>';
    var ITDesc = '<div id="description" style = "width:250px; height:100px"><h1>IT Support Center</h1> <h2>Location: NX-2</h2> <h2>Open Hours: 10AM - 6PM</h2></div>';
    var registDesc = '<div id="description" style = "width:250px; height:100px"><h1>Register Office</h1> <h2>Location: LRC-1</h2> <h2>Open Hours: 9AM - 5PM</h2></div>';
    var bookstoreDesc = '<div id="description" style = "width:250px; height:100px"><h1>BookStore</h1> <h2>Location: H-1</h2> <h2>Open Hours: 10AM - 5PM</h2></div>';
    
    //InfoBox
    var infoInterCenter = new google.maps.InfoWindow({
        content: interCenterDesc,
    });

    var infoHealthCenter = new google.maps.InfoWindow({
        content: healthCenterDesc
    });

    var infoGym = new google.maps.InfoWindow({
        content: gymDesc
    });

    var infoIT = new google.maps.InfoWindow({
    	content: ITDesc
    });

    var infoRegist = new google.maps.InfoWindow({
    	content: registDesc
    });

    var infoBookstore = new google.maps.InfoWindow({
    	content: bookstoreDesc
    });

        
    // ===================================================================
    // Markers
    // ===================================================================
    var interCenterMarker = new google.maps.Marker({
        position: interCenterLocation,
        title: "interCenter",
        map: map
    });

    var healthCenterMarker = new google.maps.Marker({
        position: healthCenterLocation,
        title: "healthCenter",
        map: map
    });

    var gymMarker = new google.maps.Marker({
        position: gymLocation,
        title: "Fitness Center",
       	map: map
    });

    var ITMarker = new google.maps.Marker({
    	position: ITLocation,
    	title: "IT Support Center",
    	map: map
    })

    var registMarker = new google.maps.Marker({
    	position: registLocation,
    	title: "Register Office",
    	map: map
    })

    var bookstoreMarker = new google.maps.Marker({
    	position: bookstoreLocation,
    	title: "BookStore",
    	map: map
    })

    // ===================================================================
    // Click events
    // ===================================================================
    interCenterMarker.setMap(map);
    google.maps.event.addListener(interCenterMarker, 'click', function() {
        infoInterCenter.open(interCenterMarker.get('map'), interCenterMarker);
    });
    
    healthCenterMarker.setMap(map);
    google.maps.event.addListener(healthCenterMarker, 'click', function() {
        infoHealthCenter.open(healthCenterMarker.get('map'), healthCenterMarker);
    });
    
    gymMarker.setMap(map);
    google.maps.event.addListener(gymMarker, 'click', function() {
        infoGym.open(gymMarker.get('map'), gymMarker);
    });

    ITMarker.setMap(map);
    google.maps.event.addListener(ITMarker, 'click', function() {
    	infoIT.open(ITMarker.get('map'), ITMarker);
    });

    registMarker.setMap(map);
    google.maps.event.addListener(registMarker, 'click', function() {
    	infoRegist.open(registMarker.get('map'), registMarker);
    });

    bookstoreMarker.setMap(map);
    google.maps.event.addListener(bookstoreMarker, 'click', function() {
    	infoBookstore.open(bookstoreMarker.get('map'), bookstoreMarker);
    });

}

google.maps.event.addDomListener(window, 'load', initialize);
