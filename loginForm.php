
<?php
if(!isset($_SESSION["userData"])):?>
<div class="row pocetna" id="kontakt">
	<div class="col-md-12">
		<form class="form-horizontal" role="form">
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="korisnickoime">Korisničko ime:</label>
			    <div class="col-sm-10"> 
			      <input type="text" class="form-control" id="korisnickoime" placeholder="Korisničko ime">
			    </div>
			  </div>

			 <div class="form-group">
			    <label class="control-label col-sm-2" for="lozinka">Lozinka:</label>
			    <div class="col-sm-10">
			      <input type="password" class="form-control" id="lozinka" placeholder="Lozinka">
			    </div>
			  </div>

			
			  <div class="form-group"> 
			    <div class="col-sm-offset-2 col-sm-10">
			      <button id="login" class="btn btn-default">Prijavi se</button>
			    </div>
			  </div>
			</form>
			<hr/>
			<p id="error"></p>
	</div>
</div>
<?php else:?>
	<p> <?php echo $_SESSION["userData"]->korisnickoime;?> </p>
	<a href="odjava.php"> Odjava </a>
<?php endif;?>
<script>
$("#login").click(function(){
	var korisnickoime = $.trim($("#korisnickoime").val());
	var lozinka = $.trim($("#lozinka").val());
	$.ajax({
				type: 'POST',
				url: '<?php echo $put;?>login.php',
				data: "korisnickoime=" + korisnickoime + "&lozinka" + lozinka,
				dataType: 'text'
			}).done(function(rezultat) {
				if(rezultat=="OK"){
					alert(<?php echo $_SESSION["userData"]->sifra;?>//location.reload();
				}else{
					$("#error").html(rezultat);
				}				
			});
	return false;
});
	
</script>