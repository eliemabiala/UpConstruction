<?php
namespace App;
use app\Vehicule;

class Voiture extends Vehicule {
    private int $nombrePorte;

    public function __construct(string $marque, string $modele, int $annee, int $nombrePorte) {
        parent::__construct($marque, $modele, $annee);
        $this->nombrePorte = $nombrePorte;
    }

    public function afficherDetails(): string {
        return $this->nombrePorte;
    }
}

