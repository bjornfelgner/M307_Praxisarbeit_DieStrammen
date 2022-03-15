<?php
require_once './inc/util.php';
_log('try to save', info);
print_r( $_POST );
/*
$mail = $_GET['email'];
$name = $_GET['name'];
$vorname = $_GET['vorname'];
$passwort = $_GET['password'];

$kundenname = $_GET['kundenname'];
$firma = $_GET['firma'];
$mail_kunde = $_GET['email_kunde'];
$projektart = $_GET['projektart'];
$projektstart = $_GET['projektstart'];
$projektnummer = $_GET['projektnummer'];
*/


if(isset($_POST['kundeanfrage'])){
    echo $kundenname = $_GET['kundenname'];
    echo $firma = $_GET['firma'];
    echo $mail_kunde = $_GET['email_kunde'];
    echo $projektart = $_GET['projektart'];
    echo $projektstart = $_GET['projektstart'];
    echo $projektnummer = $_GET['projektnummer'];
}

?>
