<?php

require_once ".\Entities\Dier.php";
require_once '.\Data\DBconfig.php';

class DierDAO {
    /* dieren per ID ophalen */
    private $dbh = null;
    public function __construct() {
        $this->dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    }

    public function getById($id) {
        $dbh = new PDO($DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);

        $sql = "select naam , stamboomnaam, soort, ras, geboortedatum, chipnummer,
           paspoortnummer,kleur, medbeeld, klantid
           from dier , klant    where dierId=dier.id and klant.id = " . $id;


        $resultset = $dbh->query($sql);
        $rij = $resultSet->fetch();
        $genre = Genre::create($id, $rij["naam"]);
        $dbh = null;
        return $dier;
    }

    /*  dier toevoegen */
    /* hier staan fouten in - prepare en execute gebruiken dan statement aanpassen tegen sql injection */

    public function create($dier) {
        $bestaat = $this->dierExists($dier->getPaspoortnummer());
        if (!$bestaat) {
            //$dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
            $statement = $this->dbh->prepare("insert into dier (naam, stamboomnaam, soort, ras, geboortedatum, "
                    . "chipnummer, paspoortnummer, kleur,  klantId) "
                    . "values (:naam, :stamboomnaam, :soort, :ras, :geboortedatum,"
                    . ":chipnummer, :paspoortnummer, :kleur, :klantId)");

            $statement->bindParam(":naam", $dier->getNaam());
            $statement->bindParam(":stamboomnaam", $dier->getStamboomnaam());
            $statement->bindParam(":soort", $dier->getSoort());
            $statement->bindParam(":ras", $dier->getRas());
            $statement->bindParam(":geboortedatum", $dier->getGeboortedatum());
            $statement->bindParam(":chipnummer", $dier->getChipnummer());
            $statement->bindParam(":paspoortnummer", $dier->getPaspoortnummer());
            $statement->bindParam(":kleur", $dier->getKleur());
            $statement->bindParam(":klantId", $a = 2); /* later aanpassen als login af is */
            $statement->execute();
            $error = $statement->errorInfo();
            $dierID = $this->dbh->lastInsertId();

            $dier->setId = $dierID;

            return $dier;
        } else {
            echo 'Dier bestaat al';
        }
    }

    private function dierExists($paspoortnummer) {
        //$dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $statement = $this->dbh->prepare("select * from dier where paspoortnummer = :paspoortnummer");
        $statement->bindParam(":paspoortnummer", $paspoortnummer); /* dier bestaat hier niet */
       $statement->execute();
        $exists = $statement->fetch();
        $error = $statement->errorInfo();
        return $exists;
    }

    /* dier verwijderen */

    /*  public function delete($id){
      $sql = " delete from dier where id = ".$id;
      $dbh = new PDO($DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
      $dbh->exec ($sql);
      $dbh = null;
      }
     */
    /* dier bijwerken */

    public function update($dier) {
        $sql = "update dier set naam ='" . $dier->getNaam() .
                "',dierID" . $dier->getKlant()->getId();
        $dbh = new PDO($DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $dbh->exec($sql);
        $dbh = null;
    }

}
