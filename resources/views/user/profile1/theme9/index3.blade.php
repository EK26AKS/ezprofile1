<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive Portfolio Template">
    <meta name="author" content="Suvrat Jain">
    <title>Responsive Bootstrap Template for Portfolio</title>
    <!-- Bootstrap core CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
        html {
            scroll-behavior: smooth;
        }

        * {
            box-sizing: border-box;
        }

        #menu {
            background-color: #ffffff79;
        }

        .starter-template {
            padding: 40px 15px;
            text-align: center;
        }

        ul.navbar-nav {
            float: right;
            text-align: center;
        }

        ul.navbar-nav li {
            padding: 0 10px;
        }

        @media only screen and (max-width:767px) {
            ul.navbar-nav {
                float: none;
            }
        }

        .container-fluid {
            padding: 0 1em;
        }

        .navbar-nav li a {
            color: black !important;
            font-size: 1.2em;
            font-family: Century gothic, sans-serif;
            font-weight: 600;
            transition: 0.4s ease;
        }

        .navbar-nav li a:hover {
            color: #fff !important;
            background-color: black !important;
        }

        .navbar-brand {
            padding: 10px 15px !important;
        }

        a.navbar-brand .fa-globe {
            font-size: 30px;
            color: black;
            transition: 0.5s ease;
        }

        a.navbar-brand .fa-globe:hover {
            color: #3935e6;
        }

        .navbar-inverse .navbar-toggle .icon-bar {
            background-color: black !important;
        }

        .navbar-inverse .navbar-toggle:hover,
        .navbar-inverse .navbar-toggle:focus {
            background-color: #fff !important;
        }

        .container {
            margin: 0 auto;
            max-width: 996px;
        }

        .splash {
            background: url("https://unsplash.com/photos/nd_6z4JFK4g/download?force=true") no-repeat fixed center bottom;
            background-size: cover;
            color: #fff;
        }

        .splash .container {
            padding-top: 15vh;
            /* No JS fallback*/
            padding-bottom: 10vh;
            /* No JS fallback*/
        }

        .profile-image {
            border-radius: 50%;
            display: block;
            max-height: 250px;
            max-width: 250px;
            margin: 0 auto 1em;
            width: 100%;
            opacity: 0.85;
        }

        .splash h1 {
            font-size: 40px;
            margin-bottom: .15em;
            text-align: center;
        }

        .splash .lead,
        .splash .continue {
            display: inline-block;
            text-align: center;
        }

        h1.intro-text {
            margin: 0;
            color: #fff;
        }

        .splash .lead {
            font-size: 30px;
            margin-bottom: 1em;
            font-family: Rockwell;
        }

        .navbar-inverse {
            border: none !important;
        }

        @keyframes blink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-webkit-keyframes blink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-moz-keyframes blink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-ms-keyframes blink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-o-keyframes blink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        /* code for animated blinking cursor */
        #typed-cursor {
            opacity: 1;
            font-size: 40px;
            color: #fff;
            font-weight: 50;
            -webkit-animation: blink 1s infinite;
            -moz-animation: blink 1s infinite;
            -ms-animation: blink 1s infinite;
            -o-animation: blink 1s infinite;
            animation: blink 1s infinite;
        }

        .splash .continue {
            font-size: 3em;
            display: block;
        }

        .splash .continue a {
            border: 2px solid #fff;
            border-radius: 100%;
            color: #fff;
            display: inline-block;
            text-decoration: none;
            width: 40px;
            height: 40px;
            font-size: 30px;
        }

        .splash .continue a:hover {
            background-color: rgba(255, 255, 255, .25);
        }

        #about,
        #portfolio,
        #contact {
            padding-top: 4em !important;
        }

        section h2 {
            margin: 0;
            font-size: 3em;
        }

        section.success {
            color: #fff;
            background: rgb(13, 79, 136);
            padding: 2%;
        }

        section.success a {
            color: black;
            transition: 0.4s ease;
        }

        section.success a:hover {
            outline: 0;
            color: #fff;
            border: 2px solid #fff;
        }

        .contact-button {
            padding-bottom: 2%;
        }

        hr.star-light,
        hr.star-portfolio {
            margin: 25px auto 30px;
            padding: 0;
            max-width: 250px;
            border: 0;
            border-top: solid 3px;
            text-align: center;
        }

        hr.star-light:after,
        hr.star-portfolio:after {
            content: "\f005";
            display: inline-block;
            position: relative;
            top: -.8em;
            padding: 0 .25em;
            font-family: FontAwesome;
            font-size: 2em;
        }

        hr.star-light {
            border-color: #fff;
        }

        hr.star-portfolio {
            border-color: black;
        }

        hr.star-portfolio:after {
            color: black;
            background-color: #eee;
        }

        hr.star-light:after {
            color: #fff;
            background-color: rgb(13, 79, 136);
        }

        p.content-text {
            font-size: 25px;
        }

        /* PORTFOLIO */
        .portfolio-card {
            box-shadow: 0px 2px 5px #888888;
            background: #eee;
            border-radius: 4px;

        }

        .portfolio-card:hover {
            box-shadow: 0px 10px 10px #888888;
            cursor: pointer
        }

        .portfolio-container-holder {
            background: #eee;
            padding-bottom: 20px;
        }


        .portfolio-card-holder {
            padding: 5px;
            margin-bottom: 5px;
        }

        .portfolio-img {
            width: 100%;
            border-radius: 4px 4px 0 0;
        }

        .portfolio-img-desc {
            position: relative;
            bottom: 0px;
            left: 0px;
            right: 0px;
            background: #fff;
            color: #000;
            text-align: center;
            padding: 5px;
        }

        /* Contact */
        .contact-me-container {
            padding: 3%;
            background: rgb(13, 79, 136);
        }

        .fa-user,
        .fa-at,
        .fa-phone {
            color: black;
        }

        .submit-button {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        /* ========================
Footer
======================== */

        footer {
            background-color: #2C3E50;
            color: #fff;
            font-size: 1.5em;
            text-align: center;
            padding: 3%;
        }

        a.tel,
        a.tel:hover {
            text-decoration: none;
            color: #fff;
        }

        a.social-button {
            background: #fff;
            font-size: 20px;
            border-radius: 50%;
            margin: 5px;
        }

        .address-container {
            display: inline-block;
            margin: 0 auto;
        }

        a.link-facebook,
        a.link-twitter,
        a.link-codepen,
        a.link-linkedin,
        a.link-instagram {
            transition: 0.4s ease;
        }

        a.link-twitter {
            color: #1DA1F2;
        }

        a.link-facebook {
            color: #3b5998;
        }

        a.link-linkedin {
            color: #007bb6;
        }

        a.link-instagram {
            color: #e95950;
        }

        a.link-facebook:hover {
            background-color: #3b5998;
            color: #fff;
        }

        a.link-twitter:hover {
            background-color: #1DA1F2;
            color: #fff;
        }

        a.link-codepen:hover {
            background-color: black;
            color: #fff;
        }

        a.link-linkedin:hover {
            background-color: #007bb6;
            color: #fff;
        }

        a.link-instagram:hover {
            background-color: #e95950;
            color: #fff;
        }

        .btn-default {
            color: #333;
            background-color: #fff;
            border-color: transparent !important;
        }

        .fa-heart {
            color: #f32323;
        }

        h4.author {
            letter-spacing: 4px;
        }

        hr.footer-hr {
            width: 50%;
        }

        hr.copyright {
            opacity: 0.4;
        }
    </style>
</head>

<body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><i class="fa fa-globe"></i></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>

    <div class="container-fluid splash" id="splash">
        <div class="container">
            <img src="https://s-media-cache-ak0.pinimg.com/736x/71/9e/59/719e59481d2be40a77ab6c3386fc0a45--photoshop-illustrator-illustrator-tutorials.jpg"
                alt="Portrait of Mr. Roboto" class="profile-image">
            <h1>HELLO!</h1>
            <h1 class="intro-text"><span class="lead" id="typed">I am a </span></h1>
            <span class="continue"><a href="#about"><i class="fa fa-angle-down"></i></a></span>
        </div>
    </div>
    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About Me</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p class="content-text" style="text-align:justify;">Hey there! I am a junior software developer
                        based in Mumbai, India. I work with some of the popular front end technologies to create
                        beautiful websites that get noticed. I seek experience to gain more knowledge in the web
                        development field.
                    </p>
                </div>
                <div class="col-lg-4">
                    <p class="content-text">If you are in need of a beautiful simple website, I'm your guy. I look
                        forward to talking to you soon!</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center contact-button">
                    <a href="#contact" class="btn btn-lg btn-outline">
                        <i class="fa fa-envelope"></i> Contact Me
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio -->
    <div class="container-fluid portfolio-container-holder content-section" id="portfolio">
        <div class="portfolio-container container">
            <h1 class="text-center">My Portfolio</h1>
            <hr class="star-portfolio">
            <div class="row">

                <div class="col-md-6 col-xs-12 col-sm-6 portfolio-card-holder">
                    <div class=" portfolio-card">
                        <img src="https://cdn2.hubspot.net/hubfs/145335/responsive-vs-adaptive-design-compressor.jpg"
                            alt="Portfolio" class="img-responsive portfolio-img">

                        <div class="portfolio-img-desc">
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 col-sm-6 portfolio-card-holder">
                    <div class=" portfolio-card">
                        <img src="https://cdn2.hubspot.net/hubfs/145335/responsive-vs-adaptive-design-compressor.jpg"
                            alt="Portfolio" class="img-responsive portfolio-img">

                        <div class="portfolio-img-desc">
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 col-sm-6 portfolio-card-holder">
                    <div class=" portfolio-card">
                        <img src="https://cdn2.hubspot.net/hubfs/145335/responsive-vs-adaptive-design-compressor.jpg"
                            alt="Portfolio" class="img-responsive portfolio-img">

                        <div class="portfolio-img-desc">
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 col-sm-6 portfolio-card-holder">
                    <div class=" portfolio-card">
                        <img src="https://cdn2.hubspot.net/hubfs/145335/responsive-vs-adaptive-design-compressor.jpg"
                            alt="Portfolio" class="img-responsive portfolio-img">

                        <div class="portfolio-img-desc">
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 col-sm-6 portfolio-card-holder">
                    <div class=" portfolio-card">
                        <img src="https://cdn2.hubspot.net/hubfs/145335/responsive-vs-adaptive-design-compressor.jpg"
                            alt="Portfolio" class="img-responsive portfolio-img">

                        <div class="portfolio-img-desc">
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 col-sm-6 portfolio-card-holder">
                    <div class=" portfolio-card">
                        <img src="https://cdn2.hubspot.net/hubfs/145335/responsive-vs-adaptive-design-compressor.jpg"
                            alt="Portfolio" class="img-responsive portfolio-img">

                        <div class="portfolio-img-desc">
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Contact form -->
    <div class="container-fluid contact-me-container content-section" id="contact">
        <div class="container">
            <h1 class="intro-text text-center">Contact Me</h1>
            <hr class="star-light">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            <input type="text" class="form-control" id="name" placeholder="Name">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-at"></i></div>
                            <input type="text" class="form-control" id="email" placeholder="Email ID">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                            <input type="text" class="form-control" id="phone" placeholder="Phone Number">
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                </div>
            </div>

            <div class="text-center">
                <button class="btn btn-default submit-button btn-lg btn-primary"><i class="fa fa-paper-plane"></i>
                    Send</button>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer>
        <div class="container footer-container">
            <div class="row footer-row">
                <div class="col-xs-12 col-sm-6 col-md-6 text-center">
                    <h4 class="text-center">Find me here</h4>
                    <address>
                        <strong><i class="fa fa-location-arrow"></i> Monsters Inc.</strong><br>Lorem ipsum dolor, sir
                        amet,<br>Mumbai, India 400050<br><br>
                        <a class="tel" href="tel:9999988888" type="tel"><i class="fa fa-mobile"></i><span>
                                +91 9876543210</span></a>
                    </address>
                </div>

                <div class="col-xs-12 col-md-6 col-sm-6 social-section">
                    <div class="text-center">
                        <h4 class="text-center">Also, I can be found here</h4>
                        <div class="text-center social-buttons">
                            <a href="#" class="btn btn-default btn-lg social-button link-facebook"><i
                                    class="fa fa-facebook"></i>
                            </a>

                            <a href="https://codepen.io/simplysuvi/"
                                class="btn btn-default btn-lg social-button link-codepen"><i
                                    class="fa fa-codepen"></i>
                            </a>

                            <a href="#" class="btn btn-default btn-lg social-button link-twitter"><i
                                    class="fa fa-twitter"></i>
                            </a>

                            <a href="https://www.linkedin.com/in/simplysuvi"
                                class="btn btn-default btn-lg social-button link-linkedin"><i
                                    class="fa fa-linkedin"></i>
                            </a>
                            <a href="https://instagram.com/simplysuvi"
                                class="btn btn-default btn-lg social-button link-instagram"><i
                                    class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <hr class="footer-hr">
                        <h4 class="author">Made with <i class="fa fa-heart"></i> by <strong>Suvrat Jain</strong></h4>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
</body>

</html>
