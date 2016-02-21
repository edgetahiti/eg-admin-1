<?php
session_start();
//my page name
$myactivepage = basename($_SERVER['SCRIPT_NAME']);
//to get all my post easly
foreach($_POST as $key => $val) ${$key}=htmlspecialchars($_POST["$key"]);
//redirection function
function eg_redirect($url) {    
    header('Location: ' . $url);
} 
//timezone
date_default_timezone_set("Pacific/Tahiti");
