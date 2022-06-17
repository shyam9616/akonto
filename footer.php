<!--Footer Section Start-->

<style type="text/css">
    a{
        color: #002854 !important;
    }
</style>

<section class="Foter Section">

    <div class="container-fluid">

      

        <hr>

        <div class="row">

            <div class="col-md-6">

                <div class="footer-link">

                    <ul>

                        <li><a href="terms-and-conditions.php">Term of use</a></li>

                        <li><a href="privacy-policy.php">Privacy Policy</a></li>

                        <li><a href="cookie-policy.php">Cookie Policy</a></li>

                        <li><a href="Do-Not-Sell-My-Personal-Information.php">Do Not Sell My Personal Information</a></li>

                    </ul>

                </div>



            </div>

            <div class="col-md-6">

                <div class="Recevd-sec">

                    <p>Copyright © 2022 UBank Connect, All rights reserved.</p>

                </div>

            </div>

        </div>

    </div>

</section>

<!--Footer Section End-->



<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>









<style>

    .header.Sticky{

        position:sticky;

        z-index: 9999;

        top: 0;

        left:0;

        width: 100%;

        background: #fff;

        box-shadow: 0 0px 8px #333;

        opacity: 1;

    }

</style>

<!--Script Section-->

<script>

$(window).scroll(function() {    

    var scroll = $(window).scrollTop();



    if (scroll >= 200) {

        $(".header").addClass("Sticky");

    } else {

        $(".header").removeClass("Sticky");

    }

});

</script>

<script>

    $(document).ready(function () {

            $('.customer-logos').slick({

                slidesToShow: 3,

                slidesToScroll: 1,

                autoplay: true,

                autoplaySpeed: 1000,

                arrows: false,

                dots: false,

                pauseOnHover: false,

                responsive: [{

                    breakpoint: 768,

                    settings: {

                        slidesToShow: 4

                    }

                }, {

                    breakpoint: 520,

                    settings: {

                        slidesToShow: 3

                    }

                }]

            });

        });

</script>

<script>

    //Get the button

    var mybutton = document.getElementById("myBtn");



    // When the user scrolls down 20px from the top of the document, show the button

    window.onscroll = function () { scrollFunction() };



    function scrollFunction() {

        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {

            mybutton.style.display = "block";

        } else {

            mybutton.style.display = "none";

        }

    }



    // When the user clicks on the button, scroll to the top of the document

    function topFunction() {

        document.body.scrollTop = 0;

        document.documentElement.scrollTop = 0;

    }

</script>

    <script>

    var frmvalidator  = new Validator("contactform");

    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("number","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email");

    frmvalidator.addValidation("email","email",

      "Please enter a valid email address");

    </script>

<!--Script Section-->

<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">



<script src="js/script.js"></script>

<script>

  AOS.init();

</script>

</body>

</html>

