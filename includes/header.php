<!--
Autor 1: Eduardo Toledo
Matrícula: 2016203716

------------------------

Autor 2: Devair Silva
Matrícula: 2016204168

-->
<?php

session_start();
$cursos = $_SESSION['cursos'];

if (empty($cursos)) {
    header('Location: controllers/CursoController/load.php');
}

?>

<!doctype html>
<html lang="pt">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Educar - Sistema Educacional</title>
    <link href="//fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
    <header id="site-header" class="fixed-top">
        <section class="w3l-header-4">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <h1><a class="navbar-brand" href="./">
                            <img src="assets/images/logoEducar.png" />
                        </a></h1>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa icon-expand fa-bars"></span>
                        <span class="fa icon-close fa-times"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-lg-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./login.php">Login/Cadastro</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="controllers/CursoController/load.php">Cursos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="controllers/AlunosController/load.php">Alunos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="controllers/FuncionariosController/load.php">Funcionários</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <h4><i class="fa fa-shopping-cart"></i></h4>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav search-right mt-lg-0 mt-2">
                            <li class="nav-item mr-3" title="Search"> Pesquisar <a href="#search" class="btn search-search">
                                    <span class="fa fa-search pt-1 mt-2" aria-hidden="true"></span></a></li>
                        </ul>

                        <!-- //toggle switch for light and dark theme -->
                        <!-- search popup -->
                        <div id="search" class="pop-overlay">
                            <div class="popup">
                                <form action="#" method="GET" class="d-sm-flex">
                                    <input type="search" placeholder="Search.." name="search" required="required" autofocus>
                                    <button type="submit">Search</button>
                                    <a class="close" href="#url">&times;</a>
                                </form>
                            </div>
                        </div>
                        <!-- /search popup -->
                    </div>
                    <!-- toggle switch for light and dark theme -->
                    <div class="mobile-position">
                        <nav class="navigation">
                            <div class="theme-switch-wrapper">
                                <label class="theme-switch" for="checkbox">
                                    <input type="checkbox" id="checkbox">
                                    <div class="mode-container">
                                        <i class="gg-sun"></i>
                                        <i class="gg-moon"></i>
                                    </div>
                                </label>
                            </div>
                        </nav>
                    </div>
                </nav>
            </div>
        </section>
    </header>