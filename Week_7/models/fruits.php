<?php

class Fruit {
    public string $name;
    public string $color;

    public function __construct(string $name = "Banaan", string $color = "gele") 
    {
        $this->name = $name;
        $this->color = $color;
    }

    protected function getFullName() {
        return $this->name . ' heeft een ' . $this->color . ' kleur';
    }
}   