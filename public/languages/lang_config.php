<?php
session_start();

//Check whether the language is set in session or not
if(!isset($_SESSION['lang']))
{
    //If Language is not set in session then set default language as Dutch
    $_SESSION['lang'] = 'nl';
}
else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])){
    if($_GET['lang'] == 'nl'){
        $_SESSION['lang'] = 'nl';
    }
    else if ($_GET['lang'] == 'en') {
        $_SESSION['lang'] = 'en';
    }
}

require_once $_SESSION['lang']. '.php';