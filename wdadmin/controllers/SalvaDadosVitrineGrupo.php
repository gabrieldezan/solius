<?php

require_once "../class/Arquivos.class.php";
require_once "../class/VitrineGrupos.class.php";

include 'MontaUrlAmigavel.php';

$Arquivos = new Arquivos();
$VitrineGrupos = new VitrineGrupos();

$VitrineGrupos->setId_vitrine_grupo($_POST['inputIdVitrineGrupos']);
$VitrineGrupos->setDescricao($_POST['inputDescricao']);

$Arquivos->setArquivo_atual($_POST['inputImagemAtual']);
$Arquivos->setNovo_arquivo($_FILES['inputImagem']);
$Arquivos->setNome_amigavel(url_amigavel($_POST['inputDescricao']));
$Arquivos->setPasta("vitrine_grupo");
$Arquivos->insere_arquivo();
$VitrineGrupos->setImagem($Arquivos->getRetorno_arquivo());

$VitrineGrupos->setStatus($_POST['inputStatus']);

if ($VitrineGrupos->salva_dados()):
    print $VitrineGrupos->getRetorno_dados();
else:
    print 0;
endif;