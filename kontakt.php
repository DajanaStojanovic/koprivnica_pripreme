<?php include_once "header.php"; ?>
<div class="row pocetna">
	<div class="col-md-6">
	<div class="kontent">
		Ovdje se nalazimo: tu neka mapa
		</div>
	</div>
	<div class="col-md-6">
	<div class="kontent">
		ovo su naši kontakt podaci
		</div>
	</div>

	<div class="col-md-6">
	<p>Ovdje nas možete kontaktirati</p>
		<form class="form-horizontal" role="form">
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="email">Email:</label>
			    <div class="col-sm-10">
			      <input type="email" class="form-control" id="email" placeholder="Vaš email">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="ime">Ime:</label>
			    <div class="col-sm-10"> 
			      <input type="password" class="form-control" id="ime" placeholder="Vaše ime">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="poruka">Vaša poruka:</label>
			    <div class="col-sm-10"> 
			      <textarea type="poruka" class="form-control" id="poruka" placeholder="Napišite poruku"></textarea>
			    </div>
			  </div>
			  <div class="form-group"> 
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-default">Pošalji</button>
			    </div>
			  </div>
			</form>
	</div>
</div>



<?php include_once "footer.php"; ?>