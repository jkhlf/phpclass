<?php
 include 'Condominio.class.php';
 include 'Padaria.class.php';

$Stark = new Condominio();
$Stark->setNome("Condomínio Jardim");
$Stark->setEndereco("Rua das Flores, 123");
$Stark->setNumeroUnidades(20);

$ZeDoPao = new Padaria();
$ZeDoPao->setNome("ZeDoPao Padaria");
$ZeDoPao->setLocalizacao("Av. Central, 456");
$ZeDoPao->setHorarioFuncionamento("07:00 - 18:00");

echo nl2br("<h2>Dados do Condomínio</h2>\n");
echo nl2br("Nome: " . $Stark->getNome() . "\n");
echo nl2br("Endereço: " . $Stark->getEndereco() . "\n");
echo nl2br("Número de Unidades: " . $Stark->getNumeroUnidades() . "\n");

echo nl2br("<h2>Dados da Padaria</h2>\n");
echo nl2br("Nome: " . $ZeDoPao->getNome() . "\n");
echo nl2br("Localização: " . $ZeDoPao->getLocalizacao() . "\n");
echo nl2br("Horário de Funcionamento: " . $ZeDoPao->getHorarioFuncionamento() . "\n");
