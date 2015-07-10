<?php

require_once("./Entities/Klant.php");
require_once ("./datalaag/dbconfigclass.php");

class KlantDAO {
    /* klanten per ID ophalen */

    public function getById($id) {

        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);

        $sql = "select klant.id as klantid , naam , voornaam,email, straat, wachtwoord,
            huisnummer, postcode, woonplaats, tel, dierid from
           klant , dier where dierid = dier.id and klanten.id = " . $id;        //aangepast naar $id anders werkt het niet

        $resultset = $dbh->query($sql);
        $rij = $resultset->fetch();
        $dier = Dier::create($rij["dierid"], $rij["naam"]);
        $klant = Klant::create($rij["dierid"], $rij["naam"], $dier);
        $dbh = null;
        return $klant;
    }

    /* Sarah: klant toevoegen, dit werkt */

    public function create($naam, $voornaam, $straat, $huisnummer, $postcode, $woonplaats, $email, $wachtwoord, $tel) {        
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $statement = $dbh->prepare("insert into klant (naam, voornaam, straat, huisnummer, postcode, woonplaats, email, wachtwoord, tel) "
                . "values (:naam, :voornaam, :straat, :huisnummer, :postcode, :woonplaats, :email, :wachtwoord, :tel)");
        $statement->bindParam(':voornaam', $voornaam);
        $statement->bindParam(':naam', $naam);
        $statement->bindParam(':straat', $straat);
        $statement->bindParam(':huisnummer', $huisnummer);
        $statement->bindParam(':postcode', $postcode);
        $statement->bindParam(':woonplaats', $woonplaats);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':wachtwoord', $wachtwoord);
        $statement->bindParam(':tel', $tel);
        
        $result = $statement->execute();
        if(!$result) {
            $error = $statement->errorInfo();
            echo var_dump($error);
        }
        $klantID = $dbh->lastInsertId();
        $klant = Klant::create($klantID, $naam, $voornaam, $straat, $huisnummer, $postcode, $woonplaats, $email, $wachtwoord, $tel);

        return $klant;
    }

    /* klant verwijderen */
    /*
      public function delete($id){
      $sql = " delete from klant where id = ".$id;
      $dbh = new PDO($DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
      $dbh->exec ($sql);
      $dbh = null;
      }
     * */




    /* klant bijwerken */
/*Sarah: hier staat nog fout in*/
    public function update($klant) {
        $sql = "update klant set naam ='" . $klant->getNaam() .
                "',dierID" . $klant->getDier()->getId();
        $dbh = new PDO($DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $dbh->exec($sql);
        $dbh = null;
    }

}
