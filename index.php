<?php include_once "header.php"; ?>
<div class="row pocetna">

</div>
<style>
	html, body, #map{
		height: 100%;
		width: 100%;
	}
</style>




<!--Kontakt forma -->
<div class="row pocetna" id="kontakt">
	<div class="col-md-6">
	<p>Ovdje nas možete kontaktirati</p>
		<form class="form-horizontal" role="form" id="forma">
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="ime">Ime:</label>
			    <div class="col-sm-10"> 
			      <input type="text" class="form-control" id="ime" placeholder="Vaše ime">
			    </div>
			  </div>

			 <div class="form-group">
			    <label class="control-label col-sm-2" for="prezime">Prezime:</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="prezime" placeholder="Vaše prezime">
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="control-label col-sm-2" for="email">E-mail:</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="email" placeholder="E-mail">
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="control-label col-sm-2" for="email">Broj telefona:</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="brojtelefona" placeholder="Broj telefona">
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="control-label col-sm-2" for="grad">Grad:</label>
			    <div class="col-sm-10"> 
			      <input type="text" class="form-control" id="grad" placeholder="Grad">
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="control-label col-sm-2" for="adresa">Adresa:</label>
			    <div class="col-sm-10"> 
			      <input type="text" class="form-control" id="adresa" placeholder="Adresa">
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="control-label col-sm-2" for="poruka">Opis problema:</label>
			    <div class="col-sm-10"> 
			      <textarea type="text" class="form-control" id="opis" placeholder="Opis problema"></textarea>
			    </div>
			  </div>

			  <div class="form-group"> 
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" id="send" class="btn btn-default">Pošalji</button>
			    </div>
			  </div>
			</form>
	</div>
</div>
<!--kraj kontakt-->





<!--google mapa-->
<div class="googlemapa">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44210.43858368393!2d16.786181290969715!3d46.16762169639677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476627031a318147%3A0xbe043a049b25af09!2sKoprivnica!5e0!3m2!1shr!2shr!4v1467450420289" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<!--kraj mape -->

<?php include_once "prijava.php"; ?>

<!-- 
NEPOTREBNO 
    <div id="floating-panel">
      <input id="address" type="textbox" value="Sydney, NSW">
      <input id="submit" type="button" value="Geocode">
    </div>
-->

	
	<div style="width: 75%; height: 75%;">
		<div id="map"></div>
	</div>


<script>
//GOOGLE MAPS
function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: {lat: 46.164114, lng: 16.830127}
        });
        var geocoder = new google.maps.Geocoder();

        /*
		NEPOTREBNO
		document.getElementById('submit').addEventListener('click', function() {
          geocodeAddress(geocoder, map);
        });
		*/
      }

      function geocodeAddress(geocoder, resultsMap) {
		  //FOR EACH PRIJAVA
        var address = document.getElementById('address').value;
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === google.maps.GeocoderStatus.OK) {
            resultsMap.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
              map: resultsMap,
              position: results[0].geometry.location
            });
          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }
	  
	  
//KONTAKT FORMA
$("#send").click(function(){
var ime = $("#ime").val();
var prezime = $("#prezime").val()
var tel = $("#brojtelefona").val();
var adresa = $("#adresa").val();
var opis = $("#opis").val();
var email = $("#email").val();
	$.ajax({
				type: 'POST',
				url: 'kontakt.php',
				data: "ime=" + ime + "&prezime=" + prezime + "&tel=" + tel + "&adresa=" + adresa + "&email=" + email + "&opis=" + opis,
				dataType: 'text'
			}).done(function(rezultat) {
				if(rezultat=="OK"){
					alert("Prijava problema uspješna!")
				}else{
					alert(rezultat);
				}				
			});
	return false;
});

</script>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOCim7sdyd7HCXCVDAKE3p5mvufO8xkDc&callback=initMap">
    </script>
<?php include_once "footer.php"; ?>

