<?php

    // session_start();
    // print 'Выход';
    // $_COOKIE['PHPSESSID'] = false;
    // print_r($_SESSION);
    // print_r($_COOKIE);
    //
    // session_destroy();
    // setcookie(session_name(), "", time()-3600);

    session_start();
    $_SESSION = array();
    session_destroy();
    setcookie(session_name(), "", time()-3600);

    // $user = false;
    header("Location: index.php");
