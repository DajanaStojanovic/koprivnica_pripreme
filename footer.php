
<?php include_once "loginForm.php"; ?>
<div class="footer">

<div class="row">
	<div class="col-md-offest-2 col-md-4 col-sm-offset-2 col-sm-4 podaci">
	<h4>Podaci o gradskoj upravi:</h4>
	<p>Adresa: Zrinski trg 1, 48000 Koprivnica</p>
	<p>Telefon: +385 48 279 555</p>
	<p>Fax: +385 48 279 543</p>
	<p>E-mail: <a href="mailto:grad.koprivnica@koprivnica.hr">grad.koprivnica@koprivnica.hr</a></p>
	<p>Web: <a href="http://www.koprivnica.hr">www.koprivnica.hr</a></p>
	</div>

	<div class="col-sm-6 partneri">
	<h4>Partneri:</h4>
	<img src="images/san.png" alt="Sanacija" />
	<img src="images/grb.png" alt="Grb" />
	</div>
</div>


	<div class="prava">
	Sva prava pridržana | Izrada: IT@FFOS team
	</div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/scrollreveal.js/3.1.4/scrollreveal.min.js"></script>
<script>

window.sr = ScrollReveal();
sr.reveal('.prijavi div', {reset: false, viewOffset: { top: 64 } });
sr.reveal('#rijeseni_problemi', {reset: false, viewOffset: { top: 64 } });
sr.reveal('.prikazi', {reset: false, viewOffset: { top: 64 } });
sr.reveal('.kontakt .kontakt_kontent', {reset: false, viewOffset: { top: 64 } });
sr.reveal('.prijave_admin div', {reset: false, viewOffset: { top: 64 } });

</script>
<script>
	$('#myModal').on('shown.bs.modal', function () {
	  $('#myInput').focus()
	})
</script>


</body>