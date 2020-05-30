
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my restuarent</title>

    <!--Bootstarp CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--font awesome-->
    <script src="https://kit.fontawesome.com/4ef090d2d7.js" crossorigin="anonymous"></script>
    <!--Slick-sliders-->
    <link rel="stylesheet" href="./css/slick.css">
    <!--custome stylesheet-->
    <link rel="stylesheet" href="./css/style.css">
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Gugi&family=Roboto:ital,wght@1,900&display=swap"
        rel="stylesheet">

</head>

<body>
    <!------------------------------------------------------------header--------------------------------------------------------------->

    <header>
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-4  col-sm-12 col-12">
                    <img src="./assets/logo3.png" width="20%" alt="log">
                </div>
                <div class="col-md-4 col-12 text-center">
                    <h2 class="my-md-3 site-title primary-color text-white">FOODABLE RESTAURANT & CAFE</h2>
                </div>
            
            </div>
        </div>
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="RestroGirls/index.php">MORE <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="menu.php">MENU</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="gallary.php">Gallary</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact us.php">CONTACT US</a>
                        </li>
                    </ul>
                    <button onclick="myFunction()"><i class="fas fa-toggle-on"></i></button>
                </div>
            </nav>
        </div>

    </header>

    <!--------------------------------------------------------------/header-------------------------------------------------------------->

    <!--main section-->
    <main>
        <!--------------------------------------------------------------first slider-------------------------------------------------------->
        <div class="contanier-fluid p-0">
            <div class="site-slider">
                <div class="slider-one ">
                    <div>
                        <img src="./assets/pic1-resiz.jpg" width="100%" alt="photo1">
                    </div>
                    <div>
                        <img src="./assets/pic3-res.jpg" width="100%" alt="photo3">
                    </div>
                    <div>
                        <img src="./assets/pic4-res.jpg" width="100%" alt="photo4">
                    </div>
                    <div>
                        <img src="./assets/pic5-res.jpg" width="100%" alt="photo5">
                    </div>
                </div>

                <div class="slider-btn">
                    <span class="prev position-top">
                        <i class="fas fa-chevron-left"></i></span>
                    <span class="next position-top right-0">
                        <i class="fas fa-chevron-right"></i></span>
                </div>
            </div>
        </div>
        <!--------------------------------------------------------------/first slider-------------------------------------------------------------->

        <!--------------------------------------------------------------second slider-------------------------------------------------------------->

        <div class="container-fluid">
            <br><br>
            <center>
                <h2 class="munu"> Our Menu</h2>
            </center>
            <div class="site-slider-two px md-4">
                <div class="row slider-two text-center">
                    <div class="col-md-2 product pt-md-5 pt-4">
                        <img src="./assets/soups.jpeg" alt="soups">
                        <a href="soupMenu.html">
                            <span class="border site-btn btn span">SOUPS</span></a>
                    </div>
                    <div class="col-md-2 product pt-md-5 pt-4">
                        <img src="./assets/main.jpeg" alt="mainDish">
                        <a href="menu.html">
                            <span class="border site-btn btn span">MAIN DISHES </span></a>
                    </div>
                    <div class="col-md-2 product pt-md-5 pt-4">
                        <img src="./assets/piza.jpeg" alt="img9">
                        <a href="pizaMenu.html">
                            <span class="border site-btn btn span"> PIZA</span></a>
                    </div>
                    <div class="col-md-2 product pt-md-5 pt-4">
                        <img src="./assets/fruits.jpeg" alt="img2">
                        <a href="fruitsMenu.html">
                            <span class="border site-btn btn span"> FRUITS</span></a>
                    </div>
                    <div class="col-md-2 product pt-md-5 pt-4">
                        <img src="./assets/cake.jpeg" alt="img9">
                        <a href="cakeMenu.html">
                            <span class="border site-btn btn span"> CAKE</span></a>
                    </div>
                    <div class="col-md-2 product pt-md-5 pt-4">
                        <img src="./assets/cookies.jpeg" alt="img9">
                        <a href="cookiesMenu.html">
                            <span class="border site-btn btn span"> COOKIES</span></a>
                    </div>
                    <div class="col-md-2 product pt-md-5 pt-4">
                        <img src="./assets/freshJuices.jpeg" alt="img9">
                        <a href="fruitsMenu.html">
                            <span class="border site-btn btn span"> FRESH JUICES</span></a>
                    </div>
                    <div class="col-md-2 product pt-md-5 pt-4">
                        <img src="./assets/coffes.jpeg" alt="img9">
                        <a href="CoffeMenu.html">
                            <span class="border site-btn btn span"> COFFEES</span></a>
                    </div>
                </div>
                <div class="slider-btn">
                    <span class="prev position-top">
                        <i class="fas fa-chevron-left fa-2x text-secondary"></i></span>
                    <span class="next position-top right-0">
                        <i class="fas fa-chevron-right fa-2x text-secondary"></i></span>
                </div>
            </div>
        </div>
        <br><br>
        <!--------------------------------------------------------------/dosra slider-------------------------------------------------------------->

        <!------------------------------------------------------------gallry--------------------------------------------------------------------->

        <div class="container-fluid">
            <h2 class="munu">&nbsp;&nbsp;Gallary</h2>
            <br>
            <div class="gallry">
                <div class="row">
                    <div class="col">
                        <img src="./assets/im1.jpeg" alt="img1">
                    </div>
                    <div class="col">
                        <img src="./assets/im2.jpeg" alt="img2">
                    </div>
                    <div class="col">
                        <img src="./assets/im3.jpeg" alt="img3">
                    </div>
                    <div class="col">
                        <img src="./assets/im4.jpeg" alt="img4">
                    </div>
                    <div class="col">
                        <img src="./assets/im5.jpeg" alt="img5">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="./assets/im6.jpeg" alt="img6">
                    </div>
                    <div class="col">
                        <img src="./assets/im7.jpeg" alt="img7">
                    </div>
                    <div class="col">
                        <img src="./assets/im8.jpeg" alt="img8">
                    </div>
                    <div class="col">
                        <img src="./assets/im9.jpeg" alt="img9">
                    </div>
                    <div class="col">
                        <img src="./assets/im10.jpeg" alt="img10">
                    </div>
                </div>

            </div>

        </div>
        <br>
        <!------------------------------------------------------------end gallry--------------------------------------------------------------------->

        <!-------------------------------------------------about Us--------------------------------------------------------------->
        <div class="container ABOT">
            <div class="row abtrow">
                <div class="col-12 aboot">
                    <h3 class="abt">
                        <hr>
                        <h2 class="munu">&nbsp;ABOUT US</h2>
                        <hr>
                    </h3>

                </div>
            </div>

            <div class="row">
                <div class="col-6 mycolpho">
                    <h3>who we are<i class="fab fa-angellist"></i></h3>
                    <p>We Foodable have the vider range of restuarant and cafes in PAKISTAN.
                        We have five outlet in Lahore in differnet areas,
                        We provide best quality of food and our rates are very low as compare to
                        other outlet.
                        We have sisha bar open from 12 Am to 4Am .

                    </p>
                    <h3>Our mission?<i class="far fa-grin-alt"></i></h3>
                    <p>Our mission is provide best servise as possible
                        We are always looking to privide our customers
                        internation menu.
                        Our mission is to make FOODABLE the best
                        restuarant accros PAKISTAN.
                        AS we have acomplished the title of (THE BEST CAFE OF PUNJAB)
                    </p>
                    <h3>FREE SERVICES</h3>
                    <p><i class="fas fa-arrow-circle-right"></i> FREE WIFI<br>
                        <i class="fas fa-arrow-circle-right"></i> FREE PATKING<br>
                        <i class="fas fa-arrow-circle-right"></i> BUFFET ON WEEKEND<br>
                        <i class="fas fa-arrow-circle-right"></i> SMOKE FREE ZOON<br>
                        <i class="fas fa-arrow-circle-right"></i> CHAILD FRENDLY<br>
                        <i class="fas fa-arrow-circle-right"></i> FAMILY FREINDLY<br>
                        <i class="fas fa-arrow-circle-right"></i> FREE DISCOUNT VOUCERS<br>
                        <i class="fas fa-arrow-circle-right"></i> FREE 1 PERSON MEAL ON 10 BOOKNG<br>

                    </p>
                </div>
                <div class="col-6">
                    <img src="./assets/pic5.jpeg" class="aboutimg" alt="">
                </div>
            </div>
            <br><br>
            <div class="panel" id="Business_hour_panel">
                <center>
                    <div class="panel-heading"><i class="fa fa-clock-o" id="clock"></i> Business Hours
                </center>
                <p class="btn btn-primary" id="btn">
                    <a href="booking.html">Book Online</p></a>
            </div>
            <div class="body">
                <table class="table">
                    <tbody>
                        <tr class="danger">
                            <td>Sunday</td>
                            <td>Close <spa class="close"></spa>
                            </td>
                        </tr>
                        <tr class="success">
                            <td>Monday</td>
                            <td>8am to 7pm</td>
                        </tr>
                        <tr class="success">
                            <td>Tuesday</td>
                            <td>8am to 7pm</td>
                        </tr>
                        <tr class="success">
                            <td>Wendsday</td>
                            <td>8am to 7pm</td>
                        </tr>
                        <tr class="success">
                            <td>Thursday</td>
                            <td>8am to 7pm</td>
                        </tr>
                        <tr class="success">
                            <td>friday</td>
                            <td>8am to 7pm</td>
                        </tr>
                        <tr class="success">
                            <td>Saturday</td>
                            <td>8am to 7pm</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </div>

        <!--------------------------------------------------------------end about us-------------------------------------------------------------->

        <!--------------------------------------------------------------------------Start Chef Area------------------------------------------------------------>
        <br><br><br><br>
        <div class="chef-area section_gap_top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="left-chef">
                            <img class="img-fluid" src="assets/chef1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="left-content">
                            <h1>Daily Food Courses with Drinks </h1>
                            <p>I am happy to spread the word that our experience with Top Chef Meals has been
                                wonderful during the over five years we have been ordering from them on a regular
                                basis. The meals are substantial and tasty and suit our needs perfectly. We have
                                been very happy with the customer support and feel that the company understands the
                                needs of seniors like us. We highly recommend Top Chef Meals.</p>
                            <p>I’ve been using Top Chefs for over 5 years. 90% of my breakfasts and dinners are from
                                TC. That’s a lot of meals.</p>
                            <img src="assets/signature.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="row chef-items">
                    <div class="col-lg-12 offset-lg-1">
                        <div class="row">
                            <!-- single chef item -->
                            <div class="col-lg-2 col-md-5">
                                <div class="single-chef-item">
                                    <a href="assets/food5.jpg" class="img-popup"><img src="assets/item1.png" alt=""></a>
                                </div>
                            </div>
                            <!-- single chef item -->
                            <div class="col-lg-2 col-md-5">
                                <div class="single-chef-item">
                                    <a href="assets/food6.jpg" class="img-popup"><img src="assets/item2.png" alt=""></a>
                                </div>
                            </div>
                            <!-- single chef item -->
                            <div class="col-lg-2 col-md-5">
                                <div class="single-chef-item">
                                    <a href="assets/food7.jpg" class="img-popup"><img src="assets/item3.png" alt=""></a>
                                </div>
                            </div>
                            <!-- single chef item -->
                            <div class="col-lg-2 col-md-5">
                                <div class="single-chef-item">
                                    <a href="assets/food8.jpg" class="img-popup"><img src="assets/item4.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!------------!----------------------------------------------------------------------------- End Chef Area-------!------------------------------------->
        <br><br>

        <!--!--------------------------------------------------------------------------find us section-!--------------------------------------------------------------->

        <div class="container-fluid bg-light">
            <br><br><br><br>
            <center>
                <h2 class="col col-lg-2">FIND US</h2>
            </center><br><br><br>
            <div class="row justify-content-md-center">
                <div class="col col-lg-2 ">
                    <div class="pt-20 pb-20 pb-xs-0">
                        <div class="contact-item">
                            <div class="ci-icon ">
                                <i class="fas fa-phone-square-alt"> CALL US</i>
                            </div>
                            <div class="ci-text" style="font-size:15px;">&nbsp;&nbsp;&nbsp;- 0349-4637002
                                <br>&nbsp;&nbsp;&nbsp;- 0333-2222222
                            </div>
                        </div>
                    </div>
                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="col col-lg-2 ">
                    <div class="pt-20 pb-20 pb-xs-0">
                        <div class="contact-item">
                            <div class="ci-icon ">
                                <i class="fas fa-map-marker-alt"> ADDRESS</i>
                            </div>
                            <div class="ci-text" style="font-size:15px;">
                                &nbsp;&nbsp;&nbsp;- 121 SUPERIOR TOWN
                                <br>
                                &nbsp;&nbsp;&nbsp;- LAHORE
                                <br>
                                &nbsp;&nbsp;&nbsp;- PUNJAB
                                <br>
                                &nbsp;&nbsp;&nbsp;- PAKISTAN
                            </div>
                        </div>
                    </div>
                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="col col-lg-2 ">
                    <div class="pt-20 pb-20 pb-xs-0">
                        <div class="contact-item">
                            <div class="ci-icon ">
                                <i class="fa fa-envelope"> EMAIL </i>
                            </div>
                            <a class="email" href="mailto:usmanbabar56@gmail.com">
                                usmanbabar56@gmail.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br><br>

            <!----------------------------------------------------------------------------/find us section------------------------------------------------------>
         

    </main>
    <!----------------------------------------------------------------------------footer---------------------------------------------------------------------------->

    <footer class="new_footer_area bg_color">
        <div class="new_footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s"
                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">Get in Touch</h3>
                            <p>Don’t miss any updates about our leteat discount voucers, and letest menus!</p>
                            <form action="#" class="f_subscribe_two mailchimp" method="post" novalidate="true"
                                _lpchecked="1">
                                <input type="text" name="EMAIL" class="form-control memail" placeholder="Email">
                                <button class="btn btn_get btn_get_two" type="submit">Subscribe</button>
                                <p class="mchimp-errmessage" style="display: none;"></p>
                                <p class="mchimp-sucmessage" style="display: none;"></p>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s"
                            style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">Download App</h3>
                            <ul class="list-unstyled f_list">
                                <li><a href="#">Android App</a></li>
                                <li><a href="#">IOS App</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s"
                            style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">Help</h3>
                            <ul class="list-unstyled f_list">
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Term &amp; conditions</a></li>
                                <li><a href="#">Reporting</a></li>
                                <li><a href="#">Complains</a></li>
                                <li><a href="#">Privacy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s"
                            style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">Follow on social media</h3>
                            <div class="f_social_icon">
                                <a href="#" class="fab fa-facebook"></a>
                                <a href="#" class="fab fa-twitter"></a>
                                <a href="#" class="fab fa-linkedin"></a>
                                <a href="#" class="fab fa-pinterest"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bg">
                <div class="footer_bg_one"></div>
                <div class="footer_bg_two"></div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-7 ">
                        <b>
                            <p class="mb-0 f_400 t_color primary-color">© FOODABLE RESTAURANT AND CAFE.. 2020 All rights
                                reserved.</p>
                        </b>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--------------------------------------------------end footer------------------------------------------------------------->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <!---------------------------------------------------booking script--------------------------------------------------->

    <script>
        $('.form-control').each(function () {
            floatedLabel($(this));
        });

        $('.form-control').on('input', function () {
            floatedLabel($(this));
        });

        function floatedLabel(input) {
            var $field = input.closest('.form-group');
            if (input.val()) {
                $field.addClass('input-not-empty');
            } else {
                $field.removeClass('input-not-empty');
            }
        }
    </script>

    <script>
        function myFunction() {
            var element = document.body;
            element.classList.toggle("dark-mode");
        }
    </script>

    <!---------------------------------------------------/booking script--------------------------------------------------->

    <!---------------------slick_wali-script--------------------------------------------------->
    <script src="./js/slick.min.js"></script>


    <script src="./js/main.js"></script>

</body>

</html>
<!---------------------------------------------------kahani khatm--------------------------------------------------->