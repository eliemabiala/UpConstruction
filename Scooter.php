<?php
require_once 'Moto.php';

class Scooter extends Moto {
    private int $capaciteStockage;

    public function __construct(string $marque, string $modele, int $annee, string $typeGuidon, int $capaciteStockage) {
        parent::__construct($marque, $modele, $annee, $typeGuidon);
        $this->capaciteStockage = $capaciteStockage;
    }

    public function rangements(): array {
       return [$this->capaciteStockage];
    }
}

   