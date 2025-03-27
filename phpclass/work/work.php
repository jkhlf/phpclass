<?php 

//Exercício 1: Seguindo a estrutura do arranjo $carro dada acima, criar um arranjo Cidade com atributos pertinentes, e mostrar no navegador os dados relativos a estes atributos.

$cidades = array ("São Paulo" => array (
    "populacao" => 12000000,
    "area" => 1521,
    "estado" => "SP"
), "Rio de Janeiro" => array (
    "populacao" => 6000000,
    "area" => 1200,
    "estado" => "RJ"
), "Curitiba" => array (
    "populacao" => 2000000,
    "area" => 500,
    "estado" => "PR"
));

echo $cidades["São Paulo"]["populacao"];
echo $cidades["São Paulo"]["area"];
echo $cidades["São Paulo"]["estado"];   


echo $cidades["Rio de Janeiro"]["populacao"];
echo $cidades["Rio de Janeiro"]["area"];
echo $cidades["Rio de Janeiro"]["estado"];

echo $cidades["Curitiba"]["populacao"];
echo $cidades["Curitiba"]["area"];
echo $cidades["Curitiba"]["estado"];


//Exercício 2: Escrever código que represente a abstração de um condomínio, com atributos pertinentes e os respectivos métodos set( ) e get( ) para inserir e retornar os valores dos atributos. 

class Condomínio {
    private $nome;
    private $endereco;
    private $numeroUnidades;
 
    // Métodos set
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }
    public function setNumeroUnidades($numero) {
        $this->numeroUnidades = $numero;
    }
    
    // Métodos get
    public function getNome() {
        return $this->nome;
    }
    public function getEndereco() {
        return $this->endereco;
    }
    public function getNumeroUnidades() {
        return $this->numeroUnidades;
    }
}
 
