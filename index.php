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
    header('Location: controllers/loadController.php');
}

?>

<!doctype html>
<html lang="pt">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Fast Graphic - Serviços de Gráfica</title>
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
                            <img src="assets/svg/logo.svg" />
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
                                <a class="nav-link" href="about.html">Sobre</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="controllers/produtoController.php?option=2">Produtos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Login/Cadastro</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contato</a>
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

    <!-- banner section -->
    <section id="home" class="w3l-banner py-5">
        <div class="container py-lg-5 py-md-4">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12 mt-lg-0 mt-4">
                    <span class="subhny-title mb-2">Rápido e fácil</span>
                    <h3 class="mb-4">Sua<br>
                        Gráfica Online</h3>
                    <p>Com a Fast Graphic você tem um acervo de banners, impressões e canecas totalmente personalizáveis ao seu gosto.</p>
                    <div class="mt-sm-5 mt-4">
                        <a class="btn btn-outline-primary btn-style mr-2" href="about.html"> Saiba mais <span class="fa fa-chevron-right"></span></a>
                        <a class="btn btn-primary btn-style" href="#projects"> Pedir Agora <span class="fa fa-chevron-right"></span></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8 col-sm-10 mt-lg-0 mt-5">
                    <div class="img-effect text-lg-center">
                        <img src="assets/svg/teamwork.svg" alt="banner" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner section -->
    <section class="w3l-products py-5" id="projects">
        <div class="container py-lg-3">
            <div class="header-section text-center mx-auto">
                <span class="subhny-title text-center mb-2">Escolha rápida</span>
                <h3 class="hny-title text-center mb-5">Nossos Produtos</h3>
            </div>
            <div class="mt-5">
                <div class="mx-auto">
                    <!--Horizontal Tab-->
                    <div id="parentHorizontalTab">
                        <ul class="resp-tabs-list hor_1">
                            <li>Canecas</li>
                            <li>Banners</li>
                            <li>Impressões</li>
                            <div class="clear"></div>
                        </ul>
                        <div class="resp-tabs-container hor_1">
                            <div class="products-content">
                                <div class="row">
                                    <?php
                                    foreach ($produtos as $p) {
                                        $find = stripos($p->nome, 'caneca');
                                        $precoFormatted = number_format($p->preco_base, 2, ",", ".");


                                        if ($find === 0 || !empty($find)) {
                                            echo "
                                            <div class='col-lg-3 col-sm-6 mt-4'>
                                                <div class='content mb-4'>
                                                    <a href='controllers/produtoController.php?option=4&id=$p->id_produto'>
                                                        <img src='assets/svg/caneca_$p->id_produto.svg' class='img-fluid' alt='>
                                                            <div class='lte-item-descr text-center'>
                                                        <h4 class='product-title'>$p->nome</h4>
    
                                                        <p class='mb-4'>$p->descricao</p>
                                                        <span class='price'><span class='amount'><span class='price-currency='>R$</span>$precoFormatted</span></span>
                                                    </a>
                                                </div>
                                            </div>
                                           ";
                                        }
                                    }
                                    ?>
                                </div>
                            </div>

                            <div class="products-content">
                                <div class="row">
                                    <?php
                                    foreach ($produtos as $p) {
                                        $find = stripos($p->nome, 'banner');
                                        $precoFormatted = number_format($p->preco_base, 2, ",", ".");

                                        if ($find === 0 || !empty($find)) {
                                            echo "
                                            <div class='col-lg-3 col-sm-6 mt-4'>
                                                <div class='content mb-4'>
                                                    <a href='controllers/produtoController.php?option=4&id=$p->id_produto'>
                                                        <img src='assets/svg/banner.svg' class='img-fluid' alt='>
                                                            <div class='lte-item-descr text-center'>
                                                        <h4 class='product-title'>$p->nome</h4>
    
                                                        <p class='mb-4'>$p->descricao</p>
                                                        <span class='price'><span class='amount'><span class='price-currency='>R$</span>$precoFormatted</span></span>
                                                    </a>
                                                </div>
                                            </div>
                                           ";
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="products-content">
                                <div class="row">
                                    <?php
                                    foreach ($produtos as $p) {
                                        $find = stripos($p->nome, 'impressão');
                                        $precoFormatted = number_format($p->preco_base, 2, ",", ".");

                                        if ($find === 0 || !empty($find)) {
                                            echo "
                                            <div class='col-lg-3 col-sm-6 mt-4'>
                                                <div class='content mb-4'>
                                                    <a href='controllers/produtoController.php?option=4&id=$p->id_produto'>
                                                        <img src='assets/svg/impressao.svg' class='img-fluid' alt='>
                                                            <div class='lte-item-descr text-center'>
                                                        <h4 class='product-title'>$p->nome</h4>
    
                                                        <p class='mb-4'>$p->descricao</p>
                                                        <span class='price'><span class='amount'><span class='price-currency='>R$</span>$precoFormatted</span></span>
                                                    </a>
                                                </div>
                                            </div>
                                           ";
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //our products -->

    <!-- /bottom-grids-->
    <section class="w3l-bottom-grids-6 py-5">
        <div class="container py-lg-5 py-md-4">
            <span class="subhny-title text-center mb-2">Totalmente Online</span>
            <h3 class="hny-title text-center mb-5">Como funciona?</h3>
            <div class="grids-area-hny main-cont-wthree-fea row">
                <div class="col-lg-4 col-md-6 grids-feature">
                    <div class="area-box">
                        <span class="fa fa-list"></span>
                        <h4><a href="#feature" class="title-head">Faça seu pedido Online</a></h4>
                        <p>Temos uma equipe preparada para receber seu pedido e confeccioná-lo o quanto antes!</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-4">
                    <div class="area-box box-active">
                        <span class="fa fa-gift"></span>
                        <h4><a href="#feature" class="title-head">Preparação</a></h4>
                        <p>Em um período de até 3 dias úteis, isso mesmo, TRÊS DIAS úteis sua encomenda é finalizada e enviada.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-4">
                    <div class="area-box">
                        <span class="fa fa-home"></span>
                        <h4><a href="#feature" class="title-head">Entrega em casa</a></h4>
                        <p>O pedido vai diretamente para sua casa! Simples assim. Não perca tempo e faça sua encomenda agora!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //bottom-grids-->

    
    <!-- home page block2 grids -->
    <section class="w3l-grids-3 py-5">
        <div class="container py-lg-5 py-md-4">
            <div class="row bottom-ab-grids">
                <div class="col-lg-6 bottom-ab-left pr-lg-5">
                    <span class="subhny-title mb-2">Mais rápido que a luz</span>
                    <h3 class="hny-title mb-4">Vantagens de pedir na Fast Graphic</h3>
                    <p class="">Aqui você é quem manda. Estamos prontos para lhe adender com rapidez e qualidade.
                        Pediu, chegou! Chora mais The Flash!</p>
                    <ul class="cont-4 mt-4">
                        <li><span class="fa fa-check"></span>Compre no conforto da sua casa!</li>
                        <li><span class="fa fa-check"></span>Temos os melhores preços do Mercado.</li>
                        <li><span class="fa fa-check"></span>Entregamos mais rápido que uma gráfica convencional.</li>
                    </ul>
                    <!-- <a href="about.html" class="btn btn-style btn-primary mt-lg-5 mt-4">Read More <span class="fa fa-chevron-right"></span></a> -->
                </div>
                <div class="col-lg-6 bottom-right-grids mt-lg-0 mt-5">
                    <img src="assets/svg/delivery.svg" alt="" class="img-fluid" />
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- //home page block2 grids -->
    <!-- stats -->
    <section class="w3l-stats py-lg-5 py-4" id="stats">
        <div class="container py-md-5 py-4">
            <span class="subhny-title mb-2 text-center">BOA E RÁPIDA.</span>
            <h3 class="hny-title mb-md-4 mb-2 text-center">
                Conheça nossa estrura</h3>
            <div class="row stats-con">
                <div class="col-lg-4 col-md-6 stats_info counter_grid">

                    <p class="counter">54+</p>
                    <h4>+54 bases de produção pelo Brasil</h4>
                </div>
                <div class="col-lg-4 col-md-6 stats_info counter_grid1">
                    <p class="counter">600.000+</p>
                    <h4>+600 mil Pedidos entregues por mês. Ta esperando o que?</h4>
                </div>
                <div class="col-lg-4 col-md-6 stats_info counter_grid mt-md-0 mt-5">

                    <p class="counter">10+</p>
                    <h4>10+ anos de experiência em gráfica.</h4>
                </div>

            </div>
        </div>
    </section>
    <!-- //stats -->

    <!-- testimonials -->
    <section class="w3l-clients-1" id="testimonials">
        <!-- /grids -->
        <div class="cusrtomer-layout py-5">
            <div class="container py-md-4">
                <div class="heading align-self text-center">
                    <span class="subhny-title mb-2">Clientes Satisfeitos</span>
                    <h3 class="hny-title mb-md-4 mb-2">
                        Opiniões de Nossos Clientes</h3>
                </div>
                <!-- /grids -->
                <div class="testimonial-row">
                    <div id="owl-demo1" class="owl-two owl-carousel owl-theme mb-md-3 mb-sm-5 mb-4">
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <div class="test-img">
                                        <img src="assets/images/team1.jpg" class="img-fluid" alt="client-img">
                                    </div>
                                    <blockquote>
                                        <q>A entrega foi rápida mesmo. Os produtos são de extrema qualidade.
                                            Estou muito feliz por ser cliente na melhor gráfica do país. Obrigada Fast Graphic</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="peopl align-self">
                                            <h3>Gloria Pires</h3>
                                            <p class="indentity">Cliente</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <div class="test-img"><img src="assets/images/team2.jpg" class="img-fluid" alt="client-img">
                                    </div>
                                    <blockquote>
                                        <q>Em tempos de pandemia, conhecer a Fast Graphic foi a melhor coisa que eu fiz.
                                            Qualidade e velocidade definem essa gráfica incrível.
                                        </q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="peopl align-self">
                                            <h3>Tomás Aquino</h3>
                                            <p class="indentity">Cliente</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <div class="test-img"><img src="assets/images/team3.jpg" class="img-fluid" alt="client-img">
                                    </div>
                                    <blockquote>
                                        <q>A Fast Graphic fez a boa e me ajudou no banner do meu trabalho acadêmico. Eles são incríveis
                                            e estão presentes em todos os cantos desse Brasil. Os caras são feras demais. Vlw pessoal, amo vocês.
                                        </q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="peopl align-self">
                                            <h3>Bruce Carvalho </h3>
                                            <p class="indentity">Cliente</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /grids -->
        </div>
        <!-- //grids -->
    </section>
    <!-- //testimonials -->
    <!-- footer-28 block -->

    <section class="w3l-footer">
        <footer class="footer-28 py-5">
            <div class="container py-md-5">
                <div class="footer-top-28 text-center">
                    <h2><a class="navbar-brand" href="/">
                            <img src="assets/svg/logo.svg" />
                        </a></h2>
                    <p class="f-para mt-3"> Pediu, chegou! Velocidade e praticidade. Somos muito mais que uma gráfica.</p>
                </div>
                <div class="footer-social-accounts text-center mt-lg-5 mt-4">

                    <ul class="social-icons mt-4">
                        <li class="facebook">
                            <a href="#link" title="Facebook">
                                <span class="fa fa-facebook" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li class="twitter">
                            <a href="#link" title="Twitter">
                                <span class="fa fa-twitter" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li class="dribbble">
                            <a href="#link" title="Dribbble">
                                <span class="fa fa-dribbble" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li class="google mr-0">
                            <a href="#link" title="Google">
                                <span class="fa fa-google" aria-hidden="true"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="midd-footer-28 align-center mt-lg-0 mt-4">
                <p class="copy-footer-28 text-center"> &copy; 2020 FastGraphic. All Rights Reserved.</p>

            </div>
            <!-- move top -->
            <button onclick="topFunction()" id="movetop" title="Go to top">
                <span class="fa fa-angle-up"></span>
            </button>
            <script>
                // When the user scrolls down 20px from the top of the document, show the button
                window.onscroll = function() {
                    scrollFunction()
                };

                function scrollFunction() {
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        document.getElementById("movetop").style.display = "block";
                    } else {
                        document.getElementById("movetop").style.display = "none";
                    }
                }

                // When the user clicks on the button, scroll to the top of the document
                function topFunction() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                }
            </script>
            <!-- /move top -->
        </footer>

        <script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->

        <script src="assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->
        <!-- responsive tabs -->
        <script src="assets/js/jquery-1.9.1.min.js"></script>

        <script src="assets/js/easyResponsiveTabs.js"></script>

        <!--Plug-in Initialisation-->
        <script type="text/javascript">
            $(document).ready(function() {
                //Horizontal Tab
                $('#parentHorizontalTab').easyResponsiveTabs({
                    type: 'default', //Types: default, vertical, accordion
                    width: 'auto', //auto or any width like 600px
                    fit: true, // 100% fit in a container
                    tabidentify: 'hor_1', // The tab groups identifier
                    activate: function(event) { // Callback function if tab is switched
                        var $tab = $(this);
                        var $info = $('#nested-tabInfo');
                        var $name = $('span', $info);
                        $name.text($tab.text());
                        $info.show();
                    }
                });
            });
        </script>
        <!-- //counter-->
        <script src="assets/js/owl.carousel.js"></script><!-- owl carousel -->
        <!-- script for tesimonials carousel slider -->
        <script>
            $(document).ready(function() {
                $("#owl-demo1").owlCarousel({
                    loop: true,
                    margin: 20,
                    nav: false,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false
                        },
                        1000: {
                            items: 1,
                            nav: false,
                            loop: false
                        }
                    }
                })
            })
        </script>
        <!-- //script for tesimonials carousel slider -->
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
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- //bootstrap-->

</body>

</html>