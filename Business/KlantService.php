<?php
//Sarah: check this- is ok 

require_once ("Data/KlantDAO.php");

class klantService{
    /*Sarah: werkt!*/
    public function klantToevoegen($naam, $voornaam, $straat, $huisnummer,
            $postcode, $woonplaats, $email, $wachtwoord, $tel) {
        $klantDAO=new klantDAO();
        $klantDAO->create($naam, $voornaam, $straat, $huisnummer,
            $postcode, $woonplaats, $email, $wachtwoord, $tel);
            }
        
     public function klantTonen($id) {
        $klantDAO= new klantDAO();
        $klant=$klantDAO->tonen($id);
        return $klant;
    }
    public function klantAanpassen($id, $naam, $voornaam,$email,$straat,$wachtwoord,
            $huisnummer,$postcode,$woonplaats,$tel) {
        $klantDAO= new klantDAO(); 
        $klant= $klantDAO->getByID($id);
        $klant->setNaam($naam);
        $klant->setVoornaam($voornaam);
        $klant->setEmail($email);
        $klant->setStraat($straat);
        $klant->setWachtwoord($wachtwoord);
        $klant->setHuisnummer($huisnummer);
        $klant->setPostcode($postcode);
        $klant->setWoonplaats($woonplaats);
        $klant->setTel($tel);
    }
    
}
