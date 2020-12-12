<!--
Autor: Davi Borges
Matrícula: 2015208127
-->
<?php
session_start();
$produtos = $_SESSION['produtos'];
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Fast Graphic - Serviços de Gráfica</title>
    <link href="//fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="../assets/css/style-starter.css">
</head>

<body>
    <header id="site-header" class="fixed-top">
        <section class="w3l-header-4">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <h1><a class="navbar-brand" href="../">
                            <img src="../assets/svg/logo.svg" />
                        </a></h1>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa icon-expand fa-bars"></span>
                        <span class="fa icon-close fa-times"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-lg-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="../">Home </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../about.html">Sobre</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../controllers/produtoController.php?option=2">Produtos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Login/Cadastro</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Carrinho</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav search-right mt-lg-0 mt-2">
                            <li class="nav-item mr-3" title="Search"> Pesquisar <a href="#search" class="btn search-search">
                                    <span class="fa fa-search" aria-hidden="true"></span></a></li>
                        </ul>

                        <!-- //toggle switch for light and dark theme -->
                        <!-- search popup -->
                        <div id="search" class="pop-overlay">
                            <div class="popup">
                                <form action="#" method="GET" class="d-sm-flex">
                                    <input type="search" placeholder="Pesquise um produto.." name="search" required="required" autofocus>
                                    <button type="submit">Buscar</button>
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
                    <h3 class="hny-title text-center mb-md-5 mb-4">Exibindo todos os produtos</h3>
                </div>
            </div>
            <div class="form-41-mian mt-5 pt-lg-5 pt-md-4">
                <div class="container">
                    <div class="form-inner-cont">
                        <span class="subhny-title mb-4">Cadastrar ou Editar os dados de um produto</span>
                        <form action="../controllers/produtoController.php" method="post" class="signin-form" id="editForm" name="editForm">
                            <div class="d-grid align-form-map">
                                <div class="form-input">
                                    <label for="fname">Name*</label>
                                    <input type="text" name="fname" id="fname" placeholder="" />
                                </div>
                                <div class="form-input">
                                    <label for="fpreco_base">Preço Base*</label>
                                    <input type="number" name="fpreco_base" id="fpreco_base" placeholder="" required maxlength="200" />

                                    <input type="hidden" name="fid" id="fid" />

                                    <input type="hidden" name="option" value="1" />
                                </div>
                            </div>
                            
                            <div class="form-input">
                                <label for="fdescricao">Descrição*</label>
                                <textarea placeholder="" name="fdescricao" id="fdescricao" required maxlength="200"></textarea>
                            </div>
                            <div class="submit text-right">
                                <button type="submit" class="btn btn-primary btn-style">Salvar Produto</button>
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
                                <th scope="col">Descrição</th>
                                <th scope="col">Preço Base</th>
                                <th scope="col" style="width:10%">Editar</th>
                                <th scope="col" style="width:10%">Excluir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($produtos as $p) {
                                $precoFormatted = number_format($p->preco_base, 2, ",", ".");
                                $objetoProduto = json_encode($p);

                                echo "
                                <tr align='center'>
                                    <th scope='row'>$p->id_produto</th>
                                    <td>$p->nome</td>
                                    <td>$p->descricao</td>
                                    <td>R$ $precoFormatted</td>
                                    <td><a href='#' onclick='getEditData($objetoProduto)'><i class='fa fa-pencil text-warning'></i></a></td>
                                    <td><a href='../controllers/produtoController.php?option=3&id=$p->id_produto'><i class='fa fa-trash'></i></a></td>
                                </tr>
                                ";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
    </section>
    <!-- /contact1 -->
    <!-- footer-28 block -->
    <section class="w3l-footer">
        <?php include_once('../includes/footer.php') ?>

        <script src="../assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->

        <script>
            function getEditData(produto) {
                $('#fid').val(produto.id_produto);
                $('#fname').val(produto.nome);
                $('#fpreco_base').val(produto.preco_base);
                $('#fdescricao').val(produto.descricao);
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