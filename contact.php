<!DOCTYPE html>
<html lang="pl">
<head>
	<title>Zdeb Photography</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Oswald:400,700&amp;subset=latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/showing.js"></script>
</head>
<body>
	<div class="container">
	
	<header><div class="menu_link" style="visibility: hidden; margin-right: 1%;">MENU</div><div class="logo"><a href="index.html">ZDEB PHOTOGRAPHY</a></div><div class="menu_link" style="margin-right: 1%;">MENU</div></header>
		<div class="contactX">
			<div class="side_menu"><ul>
				<li><a href="gallery2.html">GALLERY</a></li>
				<li><a href="contact.php">CONTACT</a></li>
				<li><a href="offert.html">OFFERT</a></li>
			</ul></div>
			
			<div class="self_img">
				<img src="img/kmc.png">
				<p>tel.693 092 787</p>
			</div>
			

			<form class="contact_form" action="" method="POST">
				<h1>KONTAKT</h1>
				Imie:<br/>
				<input type="text" name="imie"><br/>
				E-mail:<br/>
				<input type="email" name="email"><br/>
				Temat:<br/>
				<input type="text" name="temat"><br/>
				Treść:<br/>
				<textarea name="wiadomosc" cols="52" rows="5"></textarea>
				<input id="submit" name="submit" type="submit" value='Wyślij'>
			</form>
			<?php

				if($_POST["submit"]){
					
					$msg = "Wiadomość od:".$_POST['imie']."  ".$_POST["email"]."  ". $_POST['wiadomosc'];
					$to = "mikozdeb@gmail.com";
					$subject = "ZE STRONY:". $_POST['temat'];
					$headers = 'From: olov21r@dspo.ugu.pl';

					mail($to, $subject, $msg, $headers);

				}
			?>

			
		
		</div>
		
	</div>
</body>
</html>