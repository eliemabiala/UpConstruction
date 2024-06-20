<?php
require_once 'Moto.php';

class MotoCross extends Moto {
    private string $suspension;

    public function __construct(string $marque, string $modele, int $annee, string $typeGuidon, string $suspension) {
        parent::__construct($marque, $modele, $annee, $typeGuidon);
        $this->suspension = $suspension;
    }

    public function sauter(): int {
        return 1;
    }

}