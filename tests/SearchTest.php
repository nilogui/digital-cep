<?php

use PHPUnit\Framework\TestCase;
use Max3d\DigitalCep\Search;

class SearchTest extends TestCase{

    /**
     * @dataProvider dadosTeste
     */
    public function testGetAddressFromZipcodeDefaultUsage(string $input, array $esperado){
        $resultado = new Search;
        $resultado = $resultado -> getAddressFromZipcode($input); // ('01001000'); ('93044-555');

/*        $esperado = [
            "cep"=> "93044-555",
            "logradouro"=> "Avenida Alta Tensão",
            "complemento"=> "",
            "bairro"=> "Campestre",
            "localidade"=> "São Leopoldo",
            "uf"=> "RS",
            "ibge"=> "4318705",
            "gia"=> "",
            "ddd"=> "51",
            "siafi"=> "8877"
        ];

         {
            "cep": "93044-555",
            "logradouro": "Avenida Alta Tensão",
            "complemento": "",
            "bairro": "Campestre",
            "localidade": "São Leopoldo",
            "uf": "RS",
            "ibge": "4318705",
            "gia": "",
            "ddd": "51",
            "siafi": "8877"
          }

        print_r($resultado);
        exit;    */     

        // print_r($esperado); print_r($resultado);
        // $esperado = 'ok'; $resultado = 'pk1';

        $this->assertEquals($esperado, $resultado);
    }

    public function dadosTeste(){
        return [
            'Endereço Praça da Sé' => [
                "01001000",
                [
                    "cep"=> "01001-000",
                    "logradouro"=> "Praça da Sé",
                    "complemento"=> "lado ímpar",
                    "bairro"=> "Sé",
                    "localidade"=> "São Paulo",
                    "uf"=> "SP",
                    "ibge"=> "3550308",
                    "gia"=> "1004",
                    "ddd"=> "11",
                    "siafi"=> "7107"
                ]
            ],    
            'Endereço Qualquer' => [
                "93044-555",
                [
                    "cep"=> "93044-555",
                    "logradouro"=> "Avenida Alta Tensão",
                    "complemento"=> "",
                    "bairro"=> "Campestre",
                    "localidade"=> "São Leopoldo",
                    "uf"=> "RS",
                    "ibge"=> "4318705",
                    "gia"=> "",
                    "ddd"=> "51",
                    "siafi"=> "8877"
                ]
            ]            
        ];
    }
}