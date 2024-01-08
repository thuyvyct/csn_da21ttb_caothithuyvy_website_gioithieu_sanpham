<?php
    session_start();
    if(isset($_GET["flag"]))
    {
        //Huy cac session
        // remove all session variables
        session_unset();

        // destroy the session
        session_destroy();  
        header("Location:DangKy.php");
    }
?>