<?php
class Automovel {
    private $marca;
    private $cor;
    private $modelo;
    private $preco;
    
    public function setMarca($marca) {
        $this->marca = $marca;
    }
    public function setCor($cor) {
        $this->cor = $cor;
    }
    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }
    public function setPreco($preco) {
        $this->preco = $preco;
    }
    
    public function getMarca() {
        return $this->marca;
    }
    public function getCor() {
        return $this->cor;
    }
    public function getModelo() {
        return $this->modelo;
    }
    public function getPreco() {
        return $this->preco;
    }
}

{
$automovel = new Automovel();

$automovel->setMarca($_POST['marca']);
$automovel->setCor($_POST['cor']);
$automovel->setModelo($_POST['modelo']);
$automovel->setPreco($_POST['preco']);

// Exibe os dados do automóvel
echo "<h2>Dados do Automóvel</h2>";
echo "Marca: " . $automovel->getMarca() . "<br>";
echo "Cor: " . $automovel->getCor() . "<br>";
echo "Modelo: " . $automovel->getModelo() . "<br>";
echo "Preço: R$ " . number_format($automovel->getPreco(), 2, ',', '.') . "<br>";

}
?>
