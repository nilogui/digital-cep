<?php

namespace Max3d\DigitalCep;

class Search{
    private $url = "http://viacep.com.br/ws/";
    
    public function getAddressFromZipcode(string $zipCode): mixed{
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode); // https://www.w3schools.com/php/php_ref_regex.asp

        $get = file_get_contents($this -> url . $zipCode . "/json");

        // print_r($get);
        return (array) json_decode($get);
    }
}

