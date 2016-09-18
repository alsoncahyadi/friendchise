<style>
  #map-canvas{
    width: 100%;
    height: 100%;	
  }
</style>

<style>
      html, body {
        height: 100%;
		width:100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
		width:100%;
      }
      #floating-panel {
        position:absolute;
        top: 40px;
        left: 80%;
        z-index: 5;
        background-color: rgba(249,249,249,0.40);
        padding: 8px 8px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
    </style>

<!DOCTYPE html>
<html>
  <head>
    <title>FriendChise</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
    <script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var franchisee = {!! json_encode($franchiseeInput->toArray()) !!};

      var map;
      var infowindow;

      var position = {lat: -6.402484, lng: 106.794241};
      var positionDB = {lat: -6.402484, lng: 106.794241};
      var stringPlace = new String("test");
	  
	  var arrayType = [];

      function initMap() {
        //var pyrmont = {lat: -33.867, lng: 151.195};
        //console.log(franchisee[0]['alamat']);
        //console.log(position);
        map = new google.maps.Map(document.getElementById('map-canvas'), {
          //center: pyrmont,
          center: position,
          zoom: 10
        });

        //createMarker(positionDB);

        infowindow = new google.maps.InfoWindow();
        var service = new google.maps.places.PlacesService(map);
		
		for (var i=0; i<arrayType.length;i++) {
			service.nearbySearch({
          	location: position,
          	radius: 3000,
          	type: [arrayType[i].value.toString()],
        	}, callback);			
			console.log(arrayType[i].value.toString());
		}
		
        var geocoder = new google.maps.Geocoder();

        //geocodeAddress2(geocoder);

        document.getElementById('submit').addEventListener('click', function() {
          var address = document.getElementById('address');
          //console.log(address.geometry);
          geocodeAddress(geocoder);
        });
      }

      function callback(results, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
          for (var i = 0; i < results.length; i++) {
            createMarker(results[i]);
          }          
          /*
          for (var i = 0; i < jumlahmitra; i++) {
              var marker = new google.maps.Marker({
                map: map,
                position: arrayposisi[i];
              });    
          }
          */
        }
      }

      function createMarker(place) {
        var placeLoc = place.geometry.location;
		//console.log(place.result[0].address_component.long_name);
		//console.log(place.type);
        var image = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
        var marker = new google.maps.Marker({
          map: map,
          position: place.geometry.location,
          icon: image
        });

        google.maps.event.addListener(marker, 'click', function() {
          infowindow.setContent(place.name);
          infowindow.open(map, this);
        });
      }    

      function geocodeAddress(geocoder) {
        var geocoder = new google.maps.Geocoder();
        //console.log(position);
        var address = document.getElementById('address').value;
        giveKeterangan();
        stringPlace = address.toString();
        console.log(stringPlace);
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
            console.log('status OK');
            position = results[0].geometry.location;
            initMap();
          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }

      function geocodeAddress2(geocoder) {
        var geocoder = new google.maps.Geocoder();
        geocoder.geocode({'address' : stringPlace.toString()}, function(results, status) {
          if (status === 'OK') {
            console.log('status OK 2');
            positionDB = results[0].geometry.location;
            createMarker(results[0]);
            console.log(results.address_components[0].long_name);
          } else {
            alert('Geocode 2 was not successful for the following reason: ' + status);
          }
        });
      }

      function giveKeterangan() {
          var namaFranchiseeKecamatan = [];
          var alamatFranchiseeKecamatan = [];

          for (var i=0; i<franchisee.length; i++) {
            if (franchisee[i]['kecamatan']==address.value.toString()) {
                namaFranchiseeKecamatan.push(franchisee[i]['nama']);
                alamatFranchiseeKecamatan.push(franchisee[i]['alamat']);
            }
          }

          document.getElementById('keterangan').innerHTML = "";
          for (var i=0; i<namaFranchiseeKecamatan.length; i++) {
            document.getElementById('keterangan').innerHTML += "<h2>";
            document.getElementById('keterangan').innerHTML += namaFranchiseeKecamatan[i];
            document.getElementById('keterangan').innerHTML += "   ";
            document.getElementById('keterangan').innerHTML += alamatFranchiseeKecamatan[i];
            document.getElementById('keterangan').innerHTML += "</h2>";
          }
      }

    </script>
     <!--<link href="{{ asset('bootstrap_3_3_6/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">-->
	<!-- CSS -->
        <link href="<?php public_path()?>/css/bootstrap.min.css" rel="stylesheet" type = "text/css" />
        <link href="<?php public_path()?>/css/flexslider.css" rel="stylesheet" type = "text/css" />
        <link href="<?php public_path()?>/css/prettyPhoto.css" rel="stylesheet" type = "text/css" />
        <link href="<?php public_path()?>/css/animate.css" rel="stylesheet" type = "text/css" media="all" />
        <link href="<?php public_path()?>/css/owl.carousel.css" rel="stylesheet" />
        <link href="<?php public_path()?>/css/style.css" rel="stylesheet" type = "text/css" />
        <link href="<?php public_path()?>/bootstrap_3_3_6/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php public_path()?>/css/style.css" rel="stylesheet" />
        
    <!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">	
    
        <!--[if lt IE 9]-->
          <!--<script src="{{ asset('http://laravelapp.dev/js/html5shiv_3_7_2.min.js') }}"></script>
          <script src="{{ asset('http://laravelapp.dev/js/respond_1_4_2.min.js') }}"></script>-->

          <script src="<?php echo asset('http://laravelapp.dev/js/html5shiv_3_7_2.min.js') ?>"></script>
          <script src="<?php echo asset('http://laravelapp.dev/js/respond_1_4_2.min.js') ?>"></script>
        <!--[endif]-->
  </head>
  <body>
  <!-- PRELOADER -->
    <img id="preloader" src="<?php public_path() ?>/images/preloader.gif" alt="" />
    <!-- //PRELOADER -->
    <div class="preloader_hide">

    <!-- PAGE -->
    <div id="page" class="single_page">
    
        <!-- HEADER -->
        <header>
            
            <!-- MENU BLOCK -->
            <div class="menu_block">
            
                <!-- CONTAINER -->
                <div class="container clearfix">
                    
                    <!-- LOGO -->
                    <div class="logo pull-left">
                        <a href="/" >
                        <span class="b1">F</span>
                        <span class="b1">R</span>
                        <span class="b2">I</span>
                        <span class="b2">E</span>
                        <span class="b3">N</span>
                        <span class="b3">D</span>
                        <span class="b4">C</span>
                        <span class="b4">H</span>
                        <span class="b4">I</span>
                        <span class="b5">S</span>
                        <span class="b5">E</span>
                        </a>
                    </div><!-- //LOGO -->
                    
                    <!-- MENU -->
					<div class="pull-right">
						<nav class="navmenu center">
							<ul>
								<li ><a href="/franchiser/1/list/franchisee" >Daftar Mitra</a></li>
								<li><a href="/franchiser/1/list/schedule" >Daftar Penjadwalan</a></li>
                                <li ><a href="/franchiser/1/rekomendasitempat" >Rekomendasi Tempat</a></li>
								<li ><a href="/" >Log Out</a></li>
							</ul>
						</nav>
					</div><!-- //MENU -->
                    
                </div><!-- //MENU BLOCK -->
            </div><!-- //CONTAINER -->
        </header><!-- //HEADER -->
        
        
        <!-- BREADCRUMBS -->
        <section class="breadcrumbs_block clearfix parallax">
            <div class="container center">
                <h2><b>REKOMENDASI</b> TEMPAT</h2>
                <p>Silahkan masukan daerah yang diinginkan, sistem akan memberikan rekomendasi tempat yang strategis</p>
            </div>
        </section><!-- //BREADCRUMBS -->
         <!-- CONTAINER -->
            <div class="container">
                    <div class="row">
                            <div class="col-lg-9">
                            
                            <br /> <br />
                            <div id="floating-panel">
                              <input id="address" class="controls" type="text">
                              <input id="submit" type="button" class="mitra_btn" value="Cari Kecamatan">
                            </div>
                            <div id="map-canvas"></div>
                            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCK4ZOyA74VQeqw3DV_EzeR_tXdPzeglo8&libraries=places&callback=initMap" async defer></script>
                            <div id="keterangan">
                          
                            </div>
                            </div>
                            <div class="col-lg-3">
                            	<br />
                                <br />
                                <form style="margin: 20px"> 
                                     <div class ="checkbox">
                                        <input type="checkbox" value="school" name="optradio" onClick="radio_check()">Sekolah</input>
                                      </div>
                                       <div class ="checkbox">
                                        <input type="checkbox" value="hospital" name="optradio" onClick="radio_check()">Rumah Sakit</input>
                                        </div>
                                         <div class ="checkbox">
                                        <input type="checkbox" value="bus_station" name="optradio" onClick="radio_check()">Terminal Bis</input>
                                        </div>
                                         <div class ="checkbox">
                                        <input type="checkbox" value="gas_station" name="optradio" onClick="radio_check()">Pom Bensin</input> 
                                        </div>
                                        <div class ="checkbox">
                                        <input type="checkbox" value="train_station" name="optradio" onClick="radio_check()">Stasiun Kereta</input>
                                        </div>
                                  </form>
                                  <script>
								  		function radio_check() {
											var radios = document.getElementsByName('optradio');
	
											for (var i = 0, length = radios.length; i < length; i++) {
												if (radios[i].checked) {
													if (arrayType.indexOf(radios[i], 0)==-1) {
														arrayType.push(radios[i]);	
													}
														
													// do whatever you want with the checked radio
													//console.log(radios[i].value);
											
													// only one radio can be logically checked, don't check the rest
													break;
												}
												else{
														if (arrayType.indexOf(radios[i], 0)!=-1) {
															arrayType.pop(radios[i]);
														}
												}
											}
										}
								</script>
                                     </div>
                     </div>
                     
    	</div><!-- //CONTAINER -->
        </section><!-- //BLOG -->
    </div><!-- //PAGE -->

    <!-- CONTACTS -->
    <section id="contacts">
    </section><!-- //CONTACTS -->
    
    </div>	
    
    
    
    
    	<script src="<?php echo asset('js/jquery_2_2_1.min.js')?>"></script>
        <script src="<?php echo asset('bootstrap_3_3_6/js/bootstrap.min.js')?>"></script>
        <script src="<?php echo asset('js/jquery.prettyPhoto.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset('js/jquery.nicescroll.min.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset('js/superfish.min.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset('js/jquery.flexslider-min.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset('js/owl.carousel.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset('js/animate.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset('js/jquery.BlackAndWhite.js') ?>"></script>
		<script src="<?php echo asset('js/myscript.js') ?>" type="text/javascript"></script>
  </body>
</html>