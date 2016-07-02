<?php
include 'konfiguracija.php';


//UNOS U BAZU
$prijava = $veza->prepare("insert into prijava(ime, prezime, adresa, email, broj_telefona, opis, datum_prijave) values (:ime, :prezime, :adresa, :email, :broj_telefona, :opis, now())");
$prijava->bindParam(":ime", $_POST["ime"]);
$prijava->bindParam(":prezime", $_POST["prezime"]);
$prijava->bindParam(":adresa", $_POST["adresa"]);
$prijava->bindParam(":email", $_POST["email"]);
$prijava->bindParam(":broj_telefona", $_POST["tel"]);
$prijava->bindParam(":opis", $_POST["opis"]);
$prijava->execute();

/*
$to = "deratizerskafirma@email.com";
$subject = "Posao " . date("d.m.Y.");
$message = "
<h3> Ponuđač: </h3>
<p>" . $_POST["ime"] . " " . $_POST["prezime"] . "</p>
<h3> Kontakt: </h3>
<p>" . $_POST["tel"] . " " . $_POST["email"] . "</p>
<h3> Adresa </h3>
<p>" . $_POST["adresa"] . "</p>
<hr/>
<h3> Opis problema: </h3>
<p>" . $_POST["opis"] . "</p>";


// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

//FROM
$headers .= 'From: Koprivnica Deratizacija <kpd@example.com>' . "\r\n";

// Mail it
mail($to, $subject, $message, $headers);*/
echo "OK";
