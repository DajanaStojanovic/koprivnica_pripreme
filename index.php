<?php include 'konfiguracija.php';?>
<?php include_once "header.php"; ?>
<div class="row pocetna">
	<div class="col-md-12 prijavi">
	<div>
		<h1>PROBLEMI SA ŠTAKORIMA</h1>
		<p>Pozivaju se građani na prijavljivanje problema sa štakorima, jer će za svu štetu, kao i za eventualno oštećenje zdravlja snositi odgovornost svaki za sebe, a roditelji za djecu.</p>
	</div>
	</div>
</div>
<style>
	html, body, #map{
		height: 100%;
		width: 100%;
	}
	#map{
		left: 16%;
	}
</style>






<!-- 
NEPOTREBNO 
    <div id="floating-panel">
      <input id="address" type="textbox" value="Sydney, NSW">
      <input id="submit" type="button" value="Geocode">
    </div>
-->

	
	<div style="width: 75%; height: 75%;" id="rijeseni_problemi">
		<div id="map"></div>
		
	</div>
<button id="prikazi" class="prikazi"> Prikaži problematična područja </button>


<!--Kontakt forma -->
<div class="row pocetna" id="prijavi_problem">
	<div class="col-md-12 kontakt">
	<div class="kontakt_kontent">
	<h2>Ovdje možete prijaviti problem</h2>
		<form class="form-horizontal" role="form" id="forma">
			  <div class="form-group">
			    
			    <div class="col-sm-12"> 
			      <input type="text" class="form-control" id="ime" placeholder="Vaše ime">
			    </div>
			  </div>

			 <div class="form-group">
			    
			    <div class="col-sm-12">
			      <input type="text" class="form-control" id="prezime" placeholder="Vaše prezime">
			    </div>
			  </div>

			  <div class="form-group">
			    
			    <div class="col-sm-12">
			      <input type="text" class="form-control" id="email" placeholder="E-mail">
			    </div>
			  </div>

			  <div class="form-group">
			    
			    <div class="col-sm-12">
			      <input type="tel" class="form-control" id="brojtelefona" placeholder="Broj telefona">
			    </div>
			  </div>

			  <div class="form-group">

			    <div class="col-sm-12"> 
			      <select class="form-control" id="ulica">
					<?php 
					$ulice = $veza->prepare("select naziv_ulice from ulice order by naziv_ulice");
					$ulice->execute();
					$popisUlica = $ulice->fetchAll(PDO::FETCH_OBJ);
					
					foreach($popisUlica as $u):?>
						<option value="<?php echo $u->naziv_ulice;?>"> <?php echo $u->naziv_ulice;?> </option>
					<?php endforeach;?>
				  </select>
			    </div>
			  </div>

			  <div class="form-group">
			    
			    <div class="col-sm-12"> 
			      <input type="text" class="form-control" id="kucniBroj" placeholder="Kućni broj">
			    </div>
			  </div>

			  <div class="form-group">
			
			    <div class="col-sm-12"> 
			      <textarea type="text" class="form-control" id="opis" placeholder="Opis problema"></textarea>
			    </div>
			  </div>

			  <div class="form-group"> 
			    <div class="col-sm-12">
			      <button type="submit" id="send" class="btn btn-default">Pošalji</button>
			    </div>
			  </div>
			</form>
		</div>
	</div>
</div>
<!--kraj kontakt-->

<script>
//GOOGLE MAPS
	function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: {lat: 46.164114, lng: 16.830127}
        });
        var geocoder = new google.maps.Geocoder();

		$("#prikazi").click(function(){
			geocodeAddress(geocoder, map);
			$("#prikazi").hide();
			return false;
		});
          

      }

      function geocodeAddress(geocoder, resultsMap) {
		  <?php 
		  $prijave = $veza->prepare("select adresa from prijava order by datum_prijave limit 15");
		  $prijave->execute();
		  $popisPrijava = $prijave->fetchAll(PDO::FETCH_OBJ);
		  ?>
		<?php foreach($popisPrijava as $p){?>
			var address = "<?php echo $p->adresa;?>";
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
		<?php };?>
      }
	  

	  
//KONTAKT FORMA
$("#send").click(function(){
	var ime = $.trim($("#ime").val());
	var prezime = $.trim($("#prezime").val());
	var tel = $.trim($("#brojtelefona").val());
	var adresa = $.trim($("#ulica").val() + " " + $("#kucniBroj").val()) + ", Koprivnica";
	var opis = $.trim($("#opis").val());
	var email = $.trim($("#email").val());
	if(ime=="" || prezime=="" || tel=="" || adresa=="" || $("#kucniBroj").val()==""){
		alert("Podaci označeni s * moraju biti unešeni i ispravni");
		return false;
	}
	$.ajax({
					type: 'POST',
					url: 'kontakt.php',
					data: "ime=" + ime + "&prezime=" + prezime + "&tel=" + tel + "&adresa=" + adresa + "&email=" + email + "&opis=" + opis,
					dataType: 'text'
				}).done(function(rezultat) {
					if(rezultat=="OK"){
						alert("Prijava uspješna!");
						location.reload();
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

