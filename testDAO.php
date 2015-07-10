<?php

require_once ("datalaag/Klantdao.php");

$dao= new KlantDAO();
$lijst=$dao->create("Vervaele", "Arne", "Eenstraat", "1", "1111", "plaats", "test@test.com", "ww", "0497455712");
print ("<pre>");
print_r($lijst);
print ("</pre>");
//dit is een programma om te testen of de DAO werkt