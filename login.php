<?php
include_once 'konfiguracija.php';
if(!$_POST){
	echo "Polja za prijavu ne smiju biti prazna";
}else{
	$lozinka = md5($_POST["lozinka"]);
	$login = $veza->prepare("select * from operater where korisnicko_ime=:korisnickoIme and lozinka=:lozinka");
	$login->bindParam(":korisnickoIme", $_POST["korisnickoime"]);
	$login->bindParam(":lozinka", $lozinka);
	$login->execute();
	$userdata = $login->fetch(PDO::FETCH_OBJ);
	
	if($userdata!=null){
		session_start();
		$_SESSION["userData"] = $userdata;
		echo "OK";
	}else{
		echo "Nepostojeći korisnik";
	}
}