<?php

class dier {
    private $id;
    private $naam;
    private $stamboomnaam;
    private $soort;
    private $ras;
    private $geboortedatum;
    private $chipnummer;
    private $paspoortnummer;
    private $kleur;    
    private $klantId;
    /*Sarah: klantId bij dier, geen dierId bbij klant anders maar 1 dier per klant */
    
   
    public function __construct($id, $naam, $stamboomnaam, $soort, $ras,$geboortedatum, 
            $chipnummer, $paspoortnummer, $kleur,  $klantId) {
                $this->id=$id;
                $this->naam=$naam;
                $this->stamboomnaam=$stamboomnaam;
                $this->soort=$soort;
                $this->ras=$ras;
                $this->geboortedatum=$geboortedatum;
                $this->chipnummer=$chipnummer;
                $this->paspoortnummer=$paspoortnummer;
                $this->kleur=$kleur;
                
                $this->klantId=$klantId;
    }
    
    public function getId() {
        return $this->id;
    }
    public function getNaam() {
        return $this->naam;
    }
     public function getStamboomnaam() {
         return $this->stamboomnaam;
    }
     public function getSoort() {
         return $this->soort;
    }
     public function getRas() {
         return $this->ras;
    }
     public function getGeboortedatum() {
         return $this->geboortedatum;
    }
     
     public function getChipnummer() {
         return $this->chipnummer;
    }
     public function getPaspoortnummer() {
         return $this->paspoortnummer;
    }
     public function getKleur() {
         return $this->kleur;
    }
    
     public function getKlantId() {
         return $this->klantId;
    }
    
    
     public function setNaam($naam) {
         $this->naam=$naam;
    }
     public function setStamboomnaam($stamboomnaam) {
         $this->stamboomnaam=$stamboomnaam;
    }
    public function setSoort($soort) {
        $this->soort=$soort;
    }
    public function setRas($ras) {
        $this->ras=$ras;
    }
    public function setGeboortedatum($geboortedatum) {
        $this->geboortedatum=$geboortedatum;
    }
    
    public function setChipnummer($chipnummer) {
        $this->chipnummer=$chipnummer;
    }
    public function setPaspoortnummer($paspoortnummer) {
        $this->paspoortnummer=$paspoortnummer;
    }
    public function setKleur($kleur) {
        $this->kleur=$kleur;
    }
   
    public function setklantId($klantId) {
        $this->klantId=$klantId;
    }
}