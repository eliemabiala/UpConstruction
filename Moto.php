<?php
app\Vehicule

abstract class Moto extends Vehicule {
    protected string $typeGuidon;

    public function __construct(string $marque, string $modele, int $annee, string $typeGuidon) {
        parent::__construct($marque, $modele, $annee);
        $this->typeGuidon = $typeGuidon;
    }

    abstract public function faireWheelie(): string;
}
?>
