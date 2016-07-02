<?php include 'konfiguracija.php';

if(!$_POST){
	exit;
}
$tablica = $_POST["tablica"];
$obrisi = $veza->prepare("delete from $tablica where sifra=:sifra");
$obrisi->bindParam(":sifra", $_POST["sifra"]);
$obrisi->execute();
echo "OK";


?>
