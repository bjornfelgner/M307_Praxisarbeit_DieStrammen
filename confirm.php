<?php
require_once './inc/util.php';
_log('confirmatio', info);

?><!DOCTYPE html>-
<html lang="de">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="scripts/autosave-form.js" defer></script>
	<link rel="stylesheet" href="styles/style.css">
	<title>Form Fetch</title>
	<style>

	</style>
</head>
<body>

		<form id="mainForm" action="save.php?action=save" method="post">
			<header><h2>Erfolgreich angemeldet</h2></header>
			<label for="name">Name</label>
			<input readonly value=" id="name" type="text" name="name" title="Kompletter Name einfügen" >
			
			<label for="email">E-Mail</label>
			<input readonly value="" id="email" type="email" name="email" title="Email-Addresse haben einen @ und mindestens ein ."">
			
			<label for="birthday">Geburtstag</label>
			<input readonly value="" id="birthday" type="date" name="birthday" title="Geburtsdatum">

			<label for="farbe">Favourite Farbe</label>
			<input readonly value="" id="farbe" type="color" name="farbe">

			<label for="lang">Lieblingssprache</label>
			<input readonly value="<" id="lang" type="input" name="lang">
    </form>
<a href='/'>Back</a>
</body>