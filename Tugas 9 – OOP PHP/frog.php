<?php

class frog extends animal{

    function __construct(string $nama) {
        $this->nama = $nama;
    }

    function jump() {
        echo "hop hop\n";
    }
}

?>