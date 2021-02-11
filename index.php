<?php
    session_start();
    session_unset();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Agriculture Website">
    <meta name="application-name" content="Agro India">
    <meta name="author" content="Bhavesh Kothari">
    <meta name="description" content="Connecting farmers and customers accross India">
    <title>Agro India</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-5.14.0/css/all.min.css">
    <!--        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <header id="home">
        <nav class="navbar navbar-expand-md bg-dark mb-5 navbar-dark fixed-top">
            <!-- Brand -->
            <img src="logo.jpg" alt="Logo" class="d-inline" id="logo">
            <a class="navbar-brand" href="#">
                Agro India
            </a>
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                <ul class="navbar-nav text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#home"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about"><i class="fas fa-info"></i> About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service"><i class="fab fa-servicestack fa-lg"></i> Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact"><i class="fas fa-id-badge"></i> Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#login" href="#"><i class="fas fa-sign-in-alt"></i> Login/Register</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Modal ---Login  -->
    <div class="modal fade align-self-center" id="login">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content theme">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title text-danger">Login</h4>
                    <button type="button" id="cross" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="login.php" method="post">
                        <div class="form-group">
                            <label for="username"><i class="fas fa-id-badge"></i> Agro ID</label>
                            <input type="text" placeholder="Agro ID" name="id" class="form-control" required>
                        </div>
                        <h6 class="pb-2">SELECT TYPE OF ACCOUNT</h6>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="type" value="seller" required>
                                <label for="type" class="form-check-label">Seller</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="type" value="customer">
                                <label for="type" class="form-check-label">Customer</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pwd"><i class="fas fa-unlock"></i> PASSWORD</label>
                            <input type="password" name="pwd" class="form-control" placeholder="Enter Password" required>
                        </div>
                        <div class="form-group">
                            <a href="#">
                                <p>Forgotten your Agro ID or password?</p>
                            </a>
                            <a href="#" data-toggle="modal" data-target="#register">
                                <p>Don't have an Agro ID? Create one now. </p>
                            </a>
                        </div>
                        <button type="submit" class="btn btn-primary w-100" name="login">Login</button>
                    </form>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <!--                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>-->
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Register -->
    <div class="modal fade align-self-center" id="register">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content theme">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title text-danger">Register</h4>
                    <button type="button" id="cross" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="register.php" method="post">
                        <div class="form-group">
                            <label for="username"><i class="fas fa-user"></i> Username</label>
                            <input type="text" placeholder="Enter Full Name" name="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="id"><i class="fas fa-id-badge"></i> Agro ID</label>
                            <input type="text" placeholder="Example: Prince@81" name="id" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="mob_no"><i class="fas fa-mobile"></i> Mobile Number</label>
                            <input type="mobile" name="mob_no" class="form-control" placeholder="Enter Mobile Number" required>
                        </div>
                        <h6 class="pb-2">SELECT TYPE OF ACCOUNT</h6>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="type" value="seller" required>
                                <label for="type" class="form-check-label">Seller</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="type" value="customer">
                                <label for="type" class="form-check-label">Customer</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pwd"><i class="fas fa-unlock"></i> PASSWORD</label>
                            <input type="password" name="pwd" class="form-control" placeholder="Create Password" required>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input " type="checkbox" checked> Accept all terms & conditon
                            </label>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Register</button>
                    </form>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <!--                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>                        -->
                </div>
            </div>
        </div>
    </div>

    <main>
        <!-- Carousel -->
        <div id="demo" class="carousel slide mt-5" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="pexels-rattasat-2804327.jpg" alt="Farmer">
                </div>
                <div class="carousel-item">
                    <img src="pexels-pixabay-247597.jpg" alt="Farmer">
                </div>
                <div class="carousel-item">
                    <img src="pexels-quang-nguyen-vinh-2131784.jpg" alt="Farmers">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <!-- Awareness Sidebar -->
        <section class="container my-5">
            <h1 class="text-center">Bill Details</h1>
            <hr class="w-25 mx-auto">
            <div id="navbar-example2" class="position-relative">
                <nav class="navbar navbar-expand-sm navbar-light bg-light">
                    <a class="navbar-brand" href="#">Awareness</a>
                    <!-- Button toggle -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#aware">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="aware">
                        <ul class="nav nav-pills justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link" href="#bill">Bills</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#why">Why?</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#sum">Summary</a>
                            </li>

                        </ul>
                    </div>
                </nav>
                <div class="awareness" data-spy="scroll" data-target="#navbar-example2" data-offset="0">
                    <h4 id="bill">Basic content of bill:-</h4>
                    <p> <b>1. </b>Farmers Produce Trade and Commerce (Production and Facilitation) Act, 2020

                        expands the scope of trade areas of farmers' produce from select areas to "any place of production, collection, aggregation".

                        allows electronic trading and e-commerce of scheduled farmers' produce.

                        prohibits state governments from levying any market fee, cess or levy on farmers, traders, and electronic trading platforms for trade of farmers' produce conducted in an 'outside trade area'.</p>
                    <p><b>2. </b> Farmers (Empowerment and Protection) Agreement on Price Assurance and Farm Services Act, 2020

                        provides a legal framework for farmers to enter into pre-arranged contracts with buyers including mention of pricing.
                        defines a dispute resolution mechanism.</p>
                    <p>
                        <b>3. </b>Essential Commodities (Amendment) Act, 2020
                        removes foodstuff such as cereals, pulses, potato, onions, edible oilseeds and oils, from the list of essential commodities, removing stockholding limits on such items except under "extraordinary circumstances"
                        requires that imposition of any stock limit on agricultural produce be based on price rise.
                    </p>
                    <h4 id="why">Why bill came?</h4>
                    <p>In 2017, the central government had released model farming acts. The Standing Committee on Agriculture (2018-19), however, noted that a number of reforms suggested in the model acts had not been implemented by the states. In particular, the Committee found that the laws that regulated Indian agricultural markets (such as those related to agricultural produce market committees or AMCs) were not being implemented fairly and honestly or serving their purpose. Centralization was thought to be reducing competition and (accordingly) participation, with undue commissions, market fees, and monopoly of associations damaging the agricultural sector.
                        The key provisions of new farm laws are intended to help small and marginal farmers (86% of total farmers) who don’t have means to either bargain for their produce to get a better price or invest in technology to improve the productivity of farms. The Act on Agri market allows farmers to sell their produce outside APMC ‘mandis’ to whoever they want. Anyone can buy their produce even at their farm gates. Though ‘commission agents’ of the ‘mandis’ and states could lose 'commissions' and 'mandi fees' respectively (the main reasons for the current protests), farmers will get better prices through competition and cost-cutting on transportation
                        .The law on contract farming will, on the other hand, allow farmers to enter into a contract with agri-business firms or large retailers on pre-agreed prices of their produce. This will help small and marginal farmers as the legislation will transfer the risk of market unpredictability from the farmer to the sponsor. The third law seeks to remove commodities like cereals, pulses, oilseeds, edible oils, onion and potatoes from the list of essential commodities. This provision will attract private sector/foreign direct investment into the agriculture sector.
                    <h4 id="sum">Summary of bill:-</h4>
                    <p>The bills collectively seek to provide farmers with multiple marketing channels and provide a legal framework for farmers to enter into pre-arranged contracts among other things.</p>
                </div>
            </div>
        </section>
        <!-- About Us -->
        <section id="about" class="mt-5 container-fluid mb-5">
            <h1 class="text-center">About Us</h1>
            <hr class="w-25 mx-auto">

            <div class="row mt-5">
                <div class="col-md-6 col-12">
                    <img src="pexels-iconcom-226615.jpg" class="img-fluid" alt="About Us">
                </div>
                <div class="col-md-6 col-12">
                    <p>
                        Agro India is a network that helps famers sell or provide Certified Products to customers through door to door service over large city. Agro India is a platform that shares light of knowledge to farmers, in order for them to be more aware about the surroundings. We are focused towards not only the betterment of the farmers but also towards providing best quality of products to consumers.
                        <br>
                        Our Food Inspectors are under the age of 40 and have passed qualifications, for being one, with flying colors. They have completed graduation in medicine or have a bachelor’s degree in agriculture, pharmacy, food technology and dairy technology. They have the following qualities for being a Food Inspector :
                    </p>
                    <ol>
                        <li>Thorough knowledge about food laws and principles.</li>
                        <li>Knowledge about Legal Proceedings.</li>
                        <li>Detailed knowledge of food safety and quality.</li>
                        <li>Detailed knowledge of laboratory handling and rules.</li>
                        <li>Aware of required sanitation, hygiene and pest control practices.</li>
                        <li>Be strong in General knowledge and General Aptitude.</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- Services -->
        <section id="service" class="container-fluid text-center py-3 bg-light">
            <h1 class="display-4 font-weight-bold">Services</h1>
            <p>At the best, even in the worst.</p>
            <div class="row row-arrange mt-5">
                <div class="col-lg-4 col-md-4 col-12 m-auto d-block">
                    <div class="d-block m-auto icon-setting bg-warning">
                        <i class="fas fa-shopping-cart fa-4x text-white"></i>
                    </div>
                    <h2 class="mt-3">E-Commerce</h2>
                    <p>Best of the quality product to you. Our website provides farmers to sell every edible raw product that has been certified by the Food Inspector.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-12 m-auto d-block">
                    <div class="d-block m-auto icon-setting bg-warning">
                        <i class="fas fa-truck-moving fa-4x text-white "></i>
                    </div>
                    <h2 class="mt-3">Transportation</h2>
                    <p>Your shipment will be transferred to you in the safest and cheapest way possible, so that it won’t be hefty on your pocket. </p>
                </div>
                <div class="col-lg-4 col-md-4 col-12 m-auto d-block">
                    <div class="d-block m-auto icon-setting bg-warning">
                        <i class="fas fa-shield-alt fa-4x text-white"></i>
                    </div>
                    <h2 class="mt-3">Non-Profit Service</h2>
                    <p>The price of the product will be set that would satisfy “Farmers (Empowerment and Protection) Agreement on Price Assurance and Farm Services Act, 2020”.</p>
                </div>
            </div>
        </section>
        <!-- Contact Us -->
        <section id="contact">
            <div class="container">
                <h1 class="text-center text-capitalize pt-4">Contact Us</h1>
                <hr class="w-50">
                <div class="row">
                    <div class="col-12 col-md-6 mx-auto">
                        <form action="complain.php" method="post">
                            <div class="form-group">
                                <label><i class="fas fa-user"></i> Your Name</label>
                                <input type="text" name="name" placeholder="Enter Your Name " class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label><i class="fas fa-envelope-square"></i> EMAIL</label>
                                <input type="email" placeholder="Enter Your Email" autocomplete="off" name="mail" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="textArea"><i class="fas fa-comment-alt"></i> Query Details</label>
                                <textarea name="message" id="textArea" rows="5" class="form-control" placeholder="Enter Your Message..."></textarea>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input name="contact" class="form-check-input" type="checkbox" value="yes" checked> Contact Me
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3 w-100">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Login/Register -->
        <!--
            <section id="loginReg">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 offset-md-3">
                            <div class="btn-group" role="group">
                                <a class="btn btn-primary">Login</a>
                                <a class="btn btn-success">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
-->
    </main>

    <footer class="bg-light mt-4">
        <div class="container">
            <!-- Social Media Handlers -->
            <div class="row pt-3 pl-3 pr-3 pb-2">
                <div class="col-lg-3.5 col-md-3.5 col-3.5 mx-auto">
                    <a href="#" class="social"><i class="fab fa-facebook-square"></i></a>
                    <a href="#" class="social"><i class="fab fa-instagram-square"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="social"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social"><i class="fab fa-github-square"></i></a>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-3.5 col-md-3.5 col-3.5 mx-auto">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#service">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid text-center mt-2">
            <h6 class="mt-3 ftext">Made With Love <i class="fas fa-heart text-danger"></i> Agro India</h6>
            <p class="mt-3 ftext">&copy; Agro India | All Rigths Are Reserved</p>
        </div>
    </footer>

    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
