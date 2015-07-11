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
  
    
    /*public function klantTonen($id) {
        $klantDAO= new klantDAO();
        $klant=$klantDAO->getById($id);
        return $klant;
    }
    public function klantDelete($id) {
     $klantDAO= new klantDAO();
     $klantDAO->delete($id);
    }*/
    
}
