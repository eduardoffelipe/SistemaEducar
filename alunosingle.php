<!--
Autor 1: Eduardo Toledo
Matrícula: 2016203716

------------------------

Autor 2: Devair Silva
Matrícula: 2016204168

-->
<?php


  session_start();
  $aluno = $_SESSION['aluno'];
  
  if($aluno){
      $_SESSION['aluno'] = $aluno;
  }else{
      $_SESSION['aluno'] = null;
  }

if (empty($aluno)) {
    header('Location: controllers/AlunosController/loadSingle.php');
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

    <!-- about breadcrumb -->
    <section class="w3l-about-breadcrumb text-left">
        <div class="breadcrumb-bg breadcrumb-bg-about py-3">
            <div class="container grid-breadcrumb">
                <ul class="breadcrumbs-custom-path mt-md-2">
                    <li><a href="../index.php">Home</a></li>
                    <li class="active"><span class="fa fa-angle-double-right mx-2" aria-hidden="true"></span> Listar um Curso
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
                    <h3 class="hny-title text-center mb-md-5 mb-4">Aluno <?= $aluno->Aluno?></h3>
                    
                    <h5>CPF</h5>
                    <div class="mb-2"></div>
                    <p><?= $aluno->CPF?></p>
                    <div class="mb-2"></div>
                    <hr/>
                    <div class="mb-2"></div>

                    <h5>RG</h5>
                    <div class="mb-2"></div>
                    <p><?= $aluno->RG?>/<?= $aluno->OrgaoEmissor?></p>
                    <div class="mb-2"></div>
                    <hr/>
                    <div class="mb-2"></div>

                    <h5>Data de Nascimento</h5>
                    <div class="mb-2"></div>
                    <p><?= $aluno->DataNascimento?></p>
                    <div class="mb-2"></div>
                    <hr/>
                    <div class="mb-2"></div>


                    <h5>Telefone</h5>
                    <div class="mb-2"></div>
                    <p><?= $aluno->Telefone?></p>
                    <div class="mb-2"></div>
                    <hr/>
                    <div class="mb-2"></div>

                    <h5>Sexo</h5>
                    <div class="mb-2"></div>
                    <p><?= $aluno->Sexo?></p>
                    <div class="mb-2"></div>
                    <hr/>
                    <div class="mb-2"></div>

                    <h5>Nível Acadêmico</h5>
                    <div class="mb-2"></div>
                    <p><?= $aluno->NivelAcademico?></p>
                    <div class="mb-2"></div>
                    <hr/>
                    <div class="mb-2"></div>
        

                    <h5>Endereco</h5>
                    <div class="mb-2"></div>
                    <p><span style="font-weight:bold">CEP: </span><?= $aluno->CEP?></p>
                    <p><span style="font-weight:bold">Rua: </span><?= $aluno->Rua?>, <?= $aluno->Numero?> - <?= $aluno->Complemento?></p>
                    <p><span style="font-weight:bold">Bairro: </span><?= $aluno->Bairro?></p>
                    <p><span style="font-weight:bold">Cidade: </span><?= $aluno->Cidade?> - <?= $aluno->Estado?></p>
                    <div class="mb-2"></div>
                    <hr/>
                    <div class="mb-2"></div>


                </div>
            </div>
            <div class="form-41-mian mt-5 pt-lg-5 pt-md-4">
                <div class="container">

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