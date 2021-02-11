<?php

session_start();

# Removing each values of session
//unset($_SESSION["ID"]);
//unset($_SESSION["TYPE"]);
//unset($_SESSION["PWD"]);

# Another way to do this is by destroying session
session_unset();    #Remove every session value
session_destroy();  #Destroys entire session

header("location:index.php");
//echo
//    '<script type="text/javascript">
//        window.open("index.html", "_self");
//    </script>';
?>