<?php
    $_SESSION['security'] = hash('ripemd128', $_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT']);

    if ($_SESSION['security'] != hash('ripemd128', $_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT'])) 
        header("Location: ../authentication/logout.php");  
?>