<?php include_once "header.php"; ?>
<?php include 'konfiguracija.php';
if(!isset($_SESSION["userData"])){
	header("location: index.php");
}
?>
<div class="row">

	<?php 
	$prijave = $veza->prepare("select * from prijava");
	$prijave->execute();
	$popisPrijava = $prijave->fetchAll(PDO::FETCH_OBJ);
	
	foreach($popisPrijava as $p):?>
	<div class="col-md-4 col-sm-6 prijave_admin">
		<div>
			<p class="adresa_prijave"><?php echo $p->adresa;?></p>
			<p class="opis_prijave"><?php echo $p->opis;?></p>
			<hr/>
			<small><?php echo $p->ime . " " . $p->prezime . ", Tel: " . $p->broj_telefona;?></small> 
			
			<img <?php if($_SESSION["userData"]->vrsta==1):?>src="images/delete.png"<?php else:?> src="images/done.png" <?php endif;?> alt="Obriši" title="Obriši" class="obrisi" id="<?php echo $p->sifra;?>" />

		</div>
	</div>
	<?php endforeach;?>

</div>
<?php include_once "footer.php"; ?>
<script>
	$(".obrisi").click(function(){
		var sifra = $(this).attr("id");
		$.ajax({
				type: 'POST',
				url: 'funkcije.php',
				data: "sifra=" + sifra + "&tablica=prijava",
				dataType: 'text'
			}).done(function(rezultat) {
				if(rezultat=="OK"){
					location.reload();
				}else{
					alert(rezultat);
					return false;
				}				
			});
	});
</script>