<?php
require_once './inc/util.php';
_log('try to save', info);
print_r( $_POST );

$mail = $_POST['email'];
$name = $_POST['name'];
$vorname = $_POST['vorname'];
$passwort = $_POST['password'];

$kundenname = $_POST['kundenname'];
$firma = $_POST['firma'];
$mail_kunde = $_POST['email_kunde'];
$projektart = $_POST['projektart'];
$projektstart = $_POST['projektstart'];
$projektnummer = $_POST['projektnummer'];

if(isset($_POST['submit'])){
    echo $kundenname = $_POST['kundenname'];
    echo $firma = $_POST['firma'];
    echo $mail_kunde = $_POST['email_kunde'];
    echo $projektart = $_POST['projektart'];
    echo $projektstart = $_POST['projektstart'];
    echo $projektnummer = $_POST['projektnummer'];
}

?>
