<?php
require_once '.\Entities\Dier.php';
require_once '.\Business\DierService.php';
if (isset($_GET['action']) && $_GET["action"] == "process") {
    $dier= new dier(-1,$_POST["naam"],$_POST["stamboomnaam"], $_POST["soort"],$_POST["ras"],
            $_POST["geboortedatum"], $_POST["chipnr"], $_POST["paspoortnr"], 
            $_POST["kleur"], -1);
    $service=new dierService();
    $service->dierToevoegen($dier);
  }
  else {
      include '.\Presentation\DierForm.php';
  }

