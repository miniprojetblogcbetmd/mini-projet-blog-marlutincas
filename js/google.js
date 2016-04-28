function initialisation(){
				var centreCarte = new google.maps.LatLng(47.614036, 1.365478); //lat long
				var optionsCarte = {
					zoom: 8,  //zoom possible <22
					center: centreCarte,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				var maCarte = new google.maps.Map(document.getElementById("map"), optionsCarte); //où la mettre
				var optionsMarqueur = {
					position: maCarte.getCenter(),
					map: maCarte
				};
				var marqueur = new google.maps.Marker(optionsMarqueur);
			 }
			 google.maps.event.addDomListener(window, 'load', initialisation); //pour afficher

