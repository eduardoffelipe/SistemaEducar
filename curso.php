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

    <!-- about breadcrumb -->
    <section class="w3l-about-breadcrumb text-left">
        <div class="breadcrumb-bg breadcrumb-bg-about py-3">
            <div class="container grid-breadcrumb">
                <ul class="breadcrumbs-custom-path mt-md-2">
                    <li><a href="../index.php">Home</a></li>
                    <li class="active"><span class="fa fa-angle-double-right mx-2" aria-hidden="true"></span> Listar Produtos
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- contact1 -->
    <section class="w3l-contact-11 py-5" id="contact">
        <div class="contacts-main py-lg-5 py-md-4">
            <div class="contant11-top-bg">
                <div class="container">
                    <span class="subhny-title text-center mb-2">você é o admin</span>
                    <h3 class="hny-title text-center mb-md-5 mb-4">Exibindo todos os Cursos</h3>
                </div>
            </div>
            <div class="form-41-mian mt-5 pt-lg-5 pt-md-4">
                <div class="container">
                    <div class="form-inner-cont">
                        <span class="subhny-title mb-4">Cadastrar ou Editar os dados de um Curso</span>
                        <form action="./controllers/CursoController/create.php" method="post" class="signin-form" id="editForm" name="editForm">
                            <div class="d-grid align-form-map">
                                <div class="form-input">
                                  <label for="fnome">Nome*</label>
                                    <input type="text" name="fnome" id="fnome" placeholder="" />
                                </div>
                                <div class="form-input">
                                  <label for="fidCurso">Id Curso*</label>
                                    <input type="text" name="fidCurso" id="fidCurso" placeholder="" required maxlength="200" />

                                </div>
                            </div>
                            <div class="form-input">
                                    <label for="fcargaHoraria">Carga Horaria*</label>
                                    <input type="text" name="fcargaHoraria" id="fcargaHoraria" placeholder="" required maxlength="200" />
                            <div class="form-input">
                                <label for="fdescricao">Descrição*</label>
                                <textarea placeholder="" name="fdescricao" id="fdescricao" required maxlength="400"></textarea>
                            </div>
                            <div class="form-input">
                                <label for="fcertificacao">Cetificacao*</label>
                                <textarea placeholder="" name="fcertificacao" id="fcertificacao" required maxlength="400"></textarea>
                            </div>
                            <div class="form-input">
                                <label for="fpreRequisito">Pre Requisito*</label>
                                <textarea placeholder="" name="fpreRequisito" id="fpreRequisito" required maxlength="400"></textarea>
                            </div>
                            <div class="form-input">
                                <label for="fpublicoAlvo">Público Alvo*</label>
                                <textarea placeholder="" name="fpublicoAlvo" id="fpublicoAlvo" required maxlength="400"></textarea>
                            </div>

                            <div class="d-grid align-form-map">
                                <div class="form-input">
                                    <label for="fidCategoria">Id Categoria*</label>
                                    <input type="text" name="fidCategoria" id="fidCategoria" placeholder="" />
                                </div>
                                <div class="form-input">
                                    <label for="fidArea">Id Area*</label>
                                    <input type="text" name="fidArea" id="fidArea" placeholder="" required maxlength="200" />

                                </div>
                            </div>
                            <div class="submit text-right">
                                <button type="submit" class="btn btn-primary btn-style">Salvar Curso</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="container mt-5">
                    <table class="table table-dark">
                        <thead>
                            <tr align="center">
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Area</th>
                                <th scope="col" style="width:10%">Visualizar</th>
                                <th scope="col" style="width:10%">Excluir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($cursos as $c) {
                                $objetoCurso = json_encode($c);
                                echo "
                                <tr align='center'>
                                    <th scope='row'>$c->ID</th>
                                    <td>$c->NomeCurso</td>
                                    <td>$c->NomeCategoria</td>
                                    <td>$c->NomeArea</td>
                                    <td><a href='./controllers/CursoController/loadSingle.php?idCurso=$c->ID'><i class='fa fa-eye text-light'></i></a></td>
                                    <td><a href='./controllers/CursoController/delete.php?idCurso=$c->ID'><i class='fa fa-trash'></i></a></td>
                                </tr>
                                ";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="form-41-mian mt-5 pt-lg-5 pt-md-4">
                    <div class="container">
                        <div class="form-inner-cont">
                            <span class="subhny-title mb-4">Edite os dados de um Curso</span>
                            <form action="./controllers/CursoController/pageUpdate.php" method="post" class="signin-form" id="editForm" name="editForm">
                                <div class="d-grid align-form-map">
                                    <div class="form-input">
                                    <label for="fidEdit">Id do curso*</label>
                                        <input type="text" name="fidEdit" id="fidEdit" placeholder="" />
                                    </div>                      
                                </div>
                                <div class="submit text-left">
                                    <button type="submit" class="btn btn-primary btn-style">Editar Curso</button>
                                </div>
                            </form>
                        </div>
                    </div>  
                </div>
            </div>
    </section>
    <!-- /contact1 -->
    <!-- footer-28 block -->
    <section class="w3l-footer">

        <script src="../assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->

        <script>
            function getEditData(curso) {
                $('#fidCurso').val(curso.idCurso);
                $('#fnome').val(curso.nome);
                $('#fcursoDescriocao').val(curso.descricao);
                $('#fcertificacao').val(curso.certificacao);
                $('#fpreRequisito').val(curso.preRequisito);
                $('#fpublicoAlvo').val(curso.publicoAlvo);
                $('#fcargaHoraria').val(curso.cargaHoraria);
                $('#fidCategoria').val(curso.idCategoria);
                $('#fidArea').val(curso.idArea);
            }
        </script>

        <script src="../assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->
        <!-- responsive tabs -->
        <!--/MENU-JS-->
        <script>
            $(window).on("scroll", function() {
                var scroll = $(window).scrollTop();

                if (scroll >= 80) {
                    $("#site-header").addClass("nav-fixed");
                } else {
                    $("#site-header").removeClass("nav-fixed");
                }
            });

            //Main navigation Active Class Add Remove
            $(".navbar-toggler").on("click", function() {
                $("header").toggleClass("active");
            });
            $(document).on("ready", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
                $(window).on("resize", function() {
                    if ($(window).width() > 991) {
                        $("header").removeClass("active");
                    }
                });
            });
        </script>
        <!--//MENU-JS-->

        <!-- disable body scroll which navbar is in active -->
        <script>
            $(function() {
                $('.navbar-toggler').click(function() {
                    $('body').toggleClass('noscroll');
                })
            });
        </script>
        <!-- //disable body scroll which navbar is in active -->

        <!--bootstrap-->
        <script src="../assets/js/bootstrap.min.js"></script>
        <!-- //bootstrap-->

</body>

</html>