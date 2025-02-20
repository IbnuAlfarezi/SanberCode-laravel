<?php

class Animal{
    public $nama;
    public $legs = 4;
    public $cold_blooded;

    function __construct(string $nama) {
        $this->nama = $nama;
    }
    public function get_nama() : string{
        return $this->nama;
    }
    public function get_legs() : string{
        return $this->legs;
    }
    public function get_cold_blooded() : bool{
        return $this->cold_blooded;
    }

    public function set_cold_blooded(bool $cold_blooded) : void{
        $this->cold_blooded = $cold_blooded;
    }

    public function set_legs(string $legs) : void{
        $this->legs = $legs;
    }

}

?>