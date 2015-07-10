<?php
require_once ("Business/KlantService.php");
$svc=new klantService();
$iets=$svc->klantToevoegen($naam, $voornaam, $straat, $huisnummer, $postcode, $woonplaats, $email, $wachtwoord, $tel);

echo $iets;
