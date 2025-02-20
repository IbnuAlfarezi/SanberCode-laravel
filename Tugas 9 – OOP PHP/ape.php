<?php

class ape extends animal{
    function __construct(string $nama) {
        $this->nama = $nama;
    }

    function yell(){
        echo "Auooo\n";
    }
}

?>