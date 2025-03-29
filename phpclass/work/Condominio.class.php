<?php

//Exercício 2: Escrever código que represente a abstração de um condomínio, com atributos pertinentes e os respectivos métodos set( ) e get( ) para inserir e retornar os valores dos atributos. 

class Condominio {
    private $nome;
    private $endereco;
    private $numeroUnidades;

    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }
    public function setNumeroUnidades($numero) {
        $this->numeroUnidades = $numero;
    }
    
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
?>
