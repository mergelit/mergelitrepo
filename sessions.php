<?php
session_start();
$_SESSION['logged_in'] = $_SESSION['logged_in'] ?: false;
$logged_in = $_SESSION['logged_in'] ?: false;

$email = 'ivy@eg.link';
$password = 'password';

function login($ssn, $admin){
    session_regenerate_id(true);
    $_SESSION['logged_in'] = true;
    $_SESSION['ssn'] = $ssn;
    $_SESSION['admin'] = $admin;
}

function logout(){
    $_SESSION = [];
    $params = session_get_cookie_params();
    setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);

    session_destroy();
}

function require_login($logged_in){
    if(!$logged_in){
        header('Location: login.php');
    }
}

