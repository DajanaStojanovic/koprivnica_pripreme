<?php include_once "header.php"; ?>

<div class="row pocetna">
	<div class="col-md-4 post">
	<div class="kontent">
		<i class="fa fa-bed" style="font-size:36px"></i>
		<h3>Smještaj</h3>
		<p>Lorem Ipsum je jednostavno probni tekst koji se koristi u tiskarskoj i slovoslagarskoj industriji. Lorem Ipsum postoji kao industrijski standard još od 16-og stoljeća, kada je nepoznati tiskar uzeo tiskarsku galiju slova i posložio ih da bi napravio knjigu s uzorkom tiska. Taj je tekst ne samo preživio pet stoljeća, već se i vinuo u svijet elektronskog slovoslagarstva, ostajući u suštini nepromijenjen. Postao je popularan tijekom 1960-ih s pojavom Letraset listova s odlomcima Lorem Ipsum-a, a u skorije vrijeme sa software-om za stolno izdavaštvo kao što je Aldus PageMaker koji također sadrži varijante Lorem Ipsum-a.</p>
	</div>
	</div>

	<div class="col-md-4 post">
		<div class="kontent">
		<i class="fa fa-users" style="font-size:36px"></i>
		<h3>Usluge</h3>
		<p>Lorem Ipsum je jednostavno probni tekst koji se koristi u tiskarskoj i slovoslagarskoj industriji. Lorem Ipsum postoji kao industrijski standard još od 16-og stoljeća, kada je nepoznati tiskar uzeo tiskarsku galiju slova i posložio ih da bi napravio knjigu s uzorkom tiska. Taj je tekst ne samo preživio pet stoljeća, već se i vinuo u svijet elektronskog slovoslagarstva, ostajući u suštini nepromijenjen. Postao je popularan tijekom 1960-ih s pojavom Letraset listova s odlomcima Lorem Ipsum-a, a u skorije vrijeme sa software-om za stolno izdavaštvo kao što je Aldus PageMaker koji također sadrži varijante Lorem Ipsum-a.</p>
	</div>
	</div>

	<div class="col-md-4 post">
		<div class="kontent">
		<i class="fa fa-spinner" style="font-size:36px"></i>
		<h3>Nadolazeći događaji</h3>
		<p>Lorem Ipsum je jednostavno probni tekst koji se koristi u tiskarskoj i slovoslagarskoj industriji. Lorem Ipsum postoji kao industrijski standard još od 16-og stoljeća, kada je nepoznati tiskar uzeo tiskarsku galiju slova i posložio ih da bi napravio knjigu s uzorkom tiska. Taj je tekst ne samo preživio pet stoljeća, već se i vinuo u svijet elektronskog slovoslagarstva, ostajući u suštini nepromijenjen. Postao je popularan tijekom 1960-ih s pojavom Letraset listova s odlomcima Lorem Ipsum-a, a u skorije vrijeme sa software-om za stolno izdavaštvo kao što je Aldus PageMaker koji također sadrži varijante Lorem Ipsum-a.</p>
	</div>
	</div>
</div>





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
<?php include_once "footer.php"; ?>
<script>
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
