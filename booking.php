<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my booking</title>

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
    <!--header-->

    <header>
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-4  col-sm-12 col-12">
                    <img src="./assets/logo3.png" width="20%" alt="log">
                </div>
                <div class="col-md-4 col-12 text-center">
                    <h2 class="my-md-3 site-title primary-color text-white">FOODABLE RESTAURANT & CAFE</h2>
                </div>
                <div class="col-md-4 col-12 text-right">
                    <p class="my-md-4 header-links">
                        <a href="/Sign-in and Up/Sign-in.html" class="px-2">Sign in</a>
                        <a href="/Sign-in and Up/Sign-up.html" class="px-1">Create an Account</a>
                    </p>
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
                            <a class="nav-link" href="#">ABOUT US <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="menu.php">MENU</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="booking.php">BOOK TABEL</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gallary.php">Gallary</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact us.php">CONTACT US</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

<br>
    <!--/header-->

     <!--booking-->
     <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                        <div class="form-header">
                            <h1>Table Reservation</h1>
                        </div>
                        <form action="/restuarant/recordBooking.php" method="post">
                            <div class="form-group">
                                <input class="form-control" type="text"  name="city" placeholder="City...">
                                <span class="form-label">city</span>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" type="date"  name="date" required>
                                        <span class="form-label">Date</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" type="time"  name="time" required>
                                        <span class="form-label">Time</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="form-control"  name="people" required>
                                            <option value="" selected hidden>No of people </option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                        <span class="select-arrow"></span>
                                        <span class="form-label">People</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" type="email"  name="email" placeholder="Enter your Email">
                                        <span class="form-label">Email</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" type="tel"  name="phone" placeholder="Enter you Phone">
                                        <span class="form-label">Phone</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-btn">
                                <button class="submit-btn" type="submit">Book Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br><br>
    <!--booking-->

    <!--footer-->

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

    <!--booking script-->

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

    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
    <!--/booking script-->
    
    <!--slick_wali-script-->
    <script src="./js/slick.min.js"></script>

    <!--customn js-->
    <script src="./js/main.js"></script>

        
    </body>