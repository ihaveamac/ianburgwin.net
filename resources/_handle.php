<?php
if(!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == ""){
    $redirect = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: $redirect");
    die;
}?>
<!DOCTYPE html>
<html>
	<head>
		<title>Ian Burgwin</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="/favicon.png">
		<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<!-- taken from bettermotherfuckingwebsite.com -->
		<style>
		body {
			margin: 40px auto;
			max-width: 670px;
			line-height: 1.6;
			font-size: 18px;
			color: #444;
			padding: 0 10px;
			font-family: 'Ubuntu', sans-serif;
		}
		h1, h2, h3 {
			line-height:1.2;
		}
		hr {
			border-style: solid;
			color: #444;
		}
		img {
			max-width: 100%;
		}
		#systems div {
			line-height: 32px;
		}
		#systems div img {
			float: left;
			margin-right: 1em;
			width: 32px;
			height: 32px;
		}
		.sub {
			font-size: 11px;
		}
		</style>
	</head>
	<body>
		<ul>
			<li><a href="?3DS">Nintendo 3DS software</a></li>
			<li><a href="?contact">Methods of contact</a></li>
			<li><a href="?extras">Extras</a></li>
			<li><a href="/">Front</a></li>
		</ul>
		<hr>
<?php
			if (isset($_GET["contact"])) {
				include_once("resources/contact.html");
			} elseif (isset($_GET["3DS"])) {
				include_once("resources/3DS.html");
			} elseif (isset($_GET["extras"])) {
				include_once("resources/extras.html");
			} else {
				include_once("resources/index.php");
			}
		?>
	</body>
</html>
