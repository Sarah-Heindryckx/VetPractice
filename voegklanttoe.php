<?php
//Sarah: check this 
require_once (".\Business\KlantService.php");

if (isset($_GET['action']) && $_GET["action"] == "process") {
    $klantsvc = new klantService();
    $klantsvc->klantToevoegen($_POST["naam"], $_POST["voornaam"], 
    $_POST["straat"], $_POST["nr"], $_POST["postcode"],
    $_POST["woonplaats"], $_POST["email"], $_POST["wachtwoord"], $_POST["tel"]);
   header("location:kiesdier.php");
   exit(0);
}


include (".\Presentation\KlantForm.php");