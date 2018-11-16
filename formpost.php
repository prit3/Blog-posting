<html>
<head><link rel="stylesheet" type="text/css" href="formstyle.css">
	<script src='https://www.google.com/recaptcha/api.js'></script></head>
<body>
	
<?php include ('header.php'); ?>
	
	<form onsubmit="sorteer()" action="getpost.php"  method="post">
		 Auteurs Naam: 
		<br> 
			<input type="text" name="auteur" placeholder="Naam">
		<br>
		<br>
		 Title: 
		<br> 
			<input type="text" name="title" placeholder="Title">
		<br>
		<br>
		 comment: 
		<br> 
			<textarea name="comment" cols="32" rows="4" placeholder="Say something nice"></textarea>
		<br>
		<br>
			<input type="submit" value="Send">
		<br>
		<br>
		<div class="g-recaptcha" data-sitekey="6Ld8_3oUAAAAAL_PjvSkECDnAYpKThxOxHAT0DP-"></div>
	</form>
	

</body>

</html>