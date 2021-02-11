<?php
// Starting Sessions
session_start();

// Create connection
$conn = new mysqli("localhost", "root", "", "hackathon");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM user WHERE ID='$_SESSION[ID]'";
$result = $conn->query($sql);
if ($row = $result->fetch_assoc()) {
    $_SESSION['NAME'] = $row['NAME'];
}
$sql2 = "SELECT * FROM product";
$result2 = $conn->query($sql2);
?>
<!DCOTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Agro Customer</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="fontawesome-5.14.0/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <style>
            main {
                padding-top: 6vh;
            }
        </style>
    </head>
    <body>
        <header class="jumbotron mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-4 offset-sm-1 text-center text-sm-left">
                        <img src="logo.jpg" alt="Logo" class="img-fluid" id="logo">
                    </div>
                    <div class="col-12 offset-sm-1 col-sm-6 text-center align-self-center">
                        <h1>Agro India</h1>
                        <caption>Kisaan ki unnati! Desh ki pragati!!</caption>
                    </div>
                </div>
            </div>
        </header>
        <nav class="navbar navbar-expand-sm bg-secondary navbar-dark sticky justify-content-center justify-content-sm-between text-center text-sm-left">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link text-capitalize" href="#"><?php echo $_SESSION['TYPE']?></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-capitalize" href="#"><?php echo $_SESSION['NAME']?></a>
                </li>
            </ul>
            <form class="form-inline mb-0" action="logout.php" method="post">
                <button class="btn btn-danger" type="submit"><i class="fas fa-sign-out-alt"></i> Logout</button>
            </form>
        </nav>

        <main>
            <div class="container">
                <div class="row text-capitalize">
                    <?php
                        if ($result2->num_rows > 0) {
                            while ($row2 = $result2->fetch_assoc()) {
                                echo
                                    '<div class="col-12 col-sm-4 col-lg-3">
                                        <div class="card">
                                        <img class="card-img-top" src="wheat.jpg" alt="Product Image">
                                        <div class="card-body">
                                            <h4 class="card-title">'.$row2["PRODUCTNAME"].'</h4>
                                            <p class="card-text">
                                                Price <sub>(In Quintal)</sub> : '.$row2["PRICE"].'<br>
                                                Stock Available <sub>(In Quintal)</sub> : '.$row2["STOCK"].'<br>
                                                Location : '.$row2["LOCATION"].'
                                            </p>
                                            <input type="number" name="stk" value="stk" placeholder="Stocks to Purchase" min=0 id="stk">
                                            <button class="btn btn-warning" onclick="popUp();">Buy Now</button>
                                        </div>
                                        </div>
                                    </div>';
                            }
                        }
                    ?>
                </div>
            </div>
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
            </div>
            <div class="container-fluid text-center mt-2">
                <h6 class="mt-3 ftext">Made With Love <i class="fas fa-heart text-danger"></i> Agro India</h6>
                <p class="mt-3 ftext">&copy; Agro India | All Rigths Are Reserved</p>
            </div>
        </footer>
        <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
        	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <script type="text/javascript">
//            function purchase () {
//                var x=document.getElementById("stk").value, loc=prompt("Enter your Location", "Ahmedabad");
//                if (isNaN(x) || x < 0 || x > 10000)
//                    alert("Enter a valid stock!!!");
//                else {
//                    var pr=1925;
//                    alert ("Total Price = " + pr + " * " + x + " = " + pr*x + "\nDelivery charge at " + loc + " = " + 5000 + "\nTotal Amount = " + (pr*x+5000) + "\nCurrently only cash on delivery is availabe so keep the amount ready before delivery...");
//                }
//            }
            const popUp = () => {
			swal("ThankYou!", "Your order has been confirmed.\n Check your email for details.", "success");

		}
        </script>
    </body>
</html>