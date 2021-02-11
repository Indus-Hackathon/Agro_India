<?php
// Create connection
//$conn = new mysqli("localhost", "root", "", "hackathon");
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//
//$conn->close();
$name = $_POST["name"];
$mail = $_POST["mail"];
$msg = $_POST["message"];
$contact = $_POST["contact"];
if ($contact === "yes")
    $contact = "Contact me.";
else
    $contact = "";
$message = "From : $name <br> ID : $mail <br> $msg <br> $contact";

echo $message;

//$sent = mail ('agroindia1@gmail.com', 'Facing Error', $message);
//if ($sent)
//    echo '<script type="text/javascript">alert("Complain Sent");</script>';
//else
//    echo '<script type="text/javascript">alert("Failed to send complain");</script>'; 
echo 
    '<script>
        alert("Query Registered");
        setTimeout(function(){window.open("index.php", "_self");}, 2000);
    </script>';
?>