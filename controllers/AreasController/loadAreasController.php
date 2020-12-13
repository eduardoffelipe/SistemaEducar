<!--
Autor 1: Eduardo Toledo
Matrícula: 2016203716

------------------------

Autor 2: Devair Silva
Matrícula: 2016204168

-->
<?php 
require_once('../database/Conexao.php');
require_once('../models/area.class.php');
require_once('../dao/AreaDao.php');


$conexao = new Conexao();

$areaDao = new AreaDao($conexao);


$areas = $areaDao->listAll();



session_start();

if($areas){
    $_SESSION['areas'] = $areas;
}else{
    $_SESSION['areas'] = null;
}


header('Location:../index.php');