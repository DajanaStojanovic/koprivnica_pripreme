<?php
include_once 'konfiguracija.php';
if(!$_POST){
	echo "Polja za prijavu ne smiju biti prazna";
}else{
	$login = $veza->prepare("select * from operater where korisnickoIme=:korisnickoIme and lozinka=:lozinka");
	$login->bindParam(":korisnickoIme", $_POST["korisnickoime"]);
	$login->bindParam(":lozinka", md5($_POST["lozinka"]);
	$login->execute();
	$userdata = $login->fetch(PDO::FETCH_OBJ);
	
	if($userdata!=null){
		$_SESSION["userData"] = $userdata;
		echo "OK";
	}else{
		echo "Nepostojeći korisnik";
	}
}