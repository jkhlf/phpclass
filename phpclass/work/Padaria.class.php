<?php
class Padaria {
    private $nome;
    private $localizacao;
    private $horarioFuncionamento;

    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function setLocalizacao($localizacao) {
        $this->localizacao = $localizacao;
    }
    public function setHorarioFuncionamento($horario) {
        $this->horarioFuncionamento = $horario;
    }
    
    public function getNome() {
        return $this->nome;
    }
    public function getLocalizacao() {
        return $this->localizacao;
    }
    public function getHorarioFuncionamento() {
        return $this->horarioFuncionamento;
    }
}
?>
