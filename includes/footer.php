<footer class="footer-28 py-5">
    <div class="container py-md-5">
        <div class="footer-top-28 text-center">


            <h2><a class="navbar-brand" href="index.html">
                    <img src="../assets/svg/logo.svg" />
                </a></h2>
            <p class="f-para mt-3">Com a Fast Graphic você tem um acervo de banners, impressões e canecas totalmente personalizáveis ao seu gosto.</p>
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