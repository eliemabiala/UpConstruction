<?php
namespace App;

abstract class Vehicle
{
    private string $brand;
    private string $model;
    private int $year;
    public function __construct(string $brand, string $model, int $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

public function getBrand(): string {
    return $this->brand;
}
public function setBrand(string $brand): void{
    $this->brand = $brand;
}
public function getModel(): string {
    return $this->model;
}
public function setModel(string $model): void{
    $this->model = $model;
}
public function getYear(): int {
    return $this->year;
}
public function setYear(int $year): void{
    $this->year = $year;
}
public function start(): string{
    return "vehicule démarré";
}
public function stop(): string{
    return "vehicule arreté";
}
abstract public function displayDetails(): string;

}