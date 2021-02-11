<?php
    // Starting Session
    session_start();

// Create connection
$conn = new mysqli("localhost", "root", "", "hackathon");

// Check connection
if ($conn->connect_error) {
    die ("Connection failed: " . $conn->connect_error);
}

//Code to verify user
if (isset($_POST["login"])) {
    $id = $_POST["id"];
    $type = $_POST["type"];
    $pwd = $_POST["pwd"];
    $sql = "SELECT * FROM user where ID='$id' and PWD='$pwd' and TYPE='$type'";

    //$conn->query($sql);
    //print_r ($conn->query($sql));
    $result = $conn->query($sql);
    if ($result->num_rows === 1) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
//            echo "Name : " . $row["NAME"]. "<br>Account Type : ". $row["TYPE"]. "<br>";
            $_SESSION["ID"] = $id;
            $_SESSION["PWD"] = $pwd;
            $_SESSION["TYPE"] = $type;
        }
        if ($type === "seller") {
            header ("location:seller.php");
        }
        else {
            header ("location:customer.php");
        }
    }
    else {
        echo 
            '<script type="text/javascript">
                alert("Login failed!!!\nUser does not exist or invalid id or password.");
                window.open("index.php", "_self");
            </script>';
//        header ("location:index.html");  
    }
}
$conn->close();
?>
