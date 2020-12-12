<!--
Autor: Davi Borges
Matrícula: 2015208127
-->

<?php
session_start();
$produto = $_SESSION['produto'];
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
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link rel="stylesheet" href="assets/css/product.css">
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

    <!-- about breadcrumb -->
    <section class="w3l-about-breadcrumb text-left">
        <div class="breadcrumb-bg breadcrumb-bg-about py-3">
            <div class="container grid-breadcrumb">
                <ul class="breadcrumbs-custom-path mt-md-2">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><span class="fa fa-angle-double-right mx-2" aria-hidden="true"></span><?php echo $produto->nome ?>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- contact1 -->
    <section class="w3l-contact-11 py-5 mx-auto" id="contact">
        <div class="contacts-main py-lg-5 py-md-4">
            <div class="contant11-top-bg">
                <div class="container">
                    <span class="subhny-title text-center mb-2">detalhes</span>
                    <h3 class="hny-title text-center"><?php echo $produto->nome ?></h3>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="card">
                <div class="container-fliud">
                    <div class="wrapper row">
                        <div class="preview col-md-6">
                            <div class="preview-pic tab-content">
                                <div class="tab-pane active" id="pic-1">
                                    <?php
                                    $caneca = stripos($produto->nome, 'caneca');
                                    $banner = stripos($produto->nome, 'banner');

                                    if ($caneca === 0 || !empty($caneca)) {
                                        echo "<img src='assets/svg/caneca_$produto->id_produto.svg' class='img-fluid' />";
                                    } else  if ($banner === 0 || !empty($banner)) {
                                        echo "<img src='assets/svg/banner.svg' />";
                                    } else {
                                        echo " <img src='assets/svg/impressao.svg'/>";
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                        <div class="details col-md-6">
                            <h3 class="product-title">Descrição</h3>

                            <p class="product-description"><?php echo $produto->descricao ?></p>
                            <h4 class="price">preço base:
                                <span><?php $p = number_format($produto->preco_base, 2, ",", ".");
                                        echo "R$ $p" ?></span></h4>

                            <?php
                            if ($caneca === 0 || !empty($caneca)) {
                                echo "
                                <h5 class='sizes'>tam (ml):
                                    <span class='size' data-toggle='tooltip' title='300'>300</span>
                                    <span class='size' data-toggle='tooltip' title='500'>500</span>
                                </h5>
                                <h5 class='colors'>cor:
                                    <span class='color orange' data-toggle='tooltip' title='orange'></span>
                                    <span class='color green' data-toggle='tooltip' title='green'></span>
                                    <span class='color blue' data-toggle='tooltip' title='blue'></span>
                                </h5>
                                ";
                            } else  if ($banner === 0 || !empty($banner)) {
                                echo "
                                <h5 class='sizes'>tam:
                                    <span class='size' data-toggle='tooltip' title='P'>P &nbsp;|</span>
                                    <span class='size' data-toggle='tooltip' title='M'>M &nbsp;|</span>
                                    <span class='size' data-toggle='tooltip' title='G'>G</span>
                                </h5>
                                <h5 class='colors'>cor:
                                    <span class='color orange' data-toggle='tooltip' title='orange'></span>
                                    <span class='color green' data-toggle='tooltip' title='green'></span>
                                    <span class='color blue' data-toggle='tooltip' title='blue'></span>
                                </h5>
                                ";
                            } else {
                                echo "
                                <h5 class='sizes'>tam:
                                    <span class='size' data-toggle='tooltip' title='P'>A3 &nbsp;|</span>
                                    <span class='size' data-toggle='tooltip' title='M'>A4 &nbsp;|</span>
                                    <span class='size' data-toggle='tooltip' title='G'>Cartaz</span>
                                </h5>
                                <h5 class='colors'>cor:
                                    <span class='color orange' data-toggle='tooltip' title='orange'></span>
                                    <span class='color green' data-toggle='tooltip' title='green'></span>
                                    <span class='color blue' data-toggle='tooltip' title='blue'></span>
                                </h5>
                                ";
                            }
                            ?>

                            <div class="action">
                                <button class="add-to-cart btn btn-default" type="button">adicionar ao carrinho</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="form-41-mian mt-4 pt-lg-5 pt-md-4">
            <div class="container">

                <div class="form-inner-cont">
                    <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
                        <div class="d-grid align-form-map">
                            <div class="form-input">
                                <label for="w3lName">Name</label>
                                <input type="text" name="w3lName" id="w3lName" placeholder="" />
                            </div>
                            <div class="form-input">
                                <label for="w3lSender">Email(Required)*</label>
                                <input type="email" name="w3lSender" id="w3lSender" placeholder="" required="" />
                            </div>
                            <div class="form-input">
                                <label for="w3lSender">Subject*</label>
                                <input type="text" name="w3lSubect" placeholder="" class="contact-input">
                            </div>
                            <div class="form-input">
                                <label for="w3lSender">Phone Number*</label>
                                <input type="number" name="w3lPhone" placeholder="" class="contact-input">
                            </div>
                        </div>
                        <div class="form-input">
                            <label for="w3lMessage">Message(Required)*</label>
                            <textarea placeholder="" name="w3lMessage" id="w3lMessage" required=""></textarea>
                        </div>
                        <div class="submit text-right">
                            <button type="submit" class="btn btn-primary btn-style">Submit
                                Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> -->


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