<?php
$page = (isset($_GET['loadpage']) && $_GET['loadpage'] != '') ? $_GET['loadpage'] : '';
?>
<!DOCTYPE html>
<html>
<head>
<title>Doggie Shop</title>
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>
<body>
<div id="container">
	<div id="header">
		<div id="logo"></div>
		<div id="shop-name"><h2>Dogs Life</h2></div>
		<div id="navigation">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="index.php?loadpage=care">Care</a></li>
				<li><a href="index.php?loadpage=stories">Stories</a></li>
				<li><a href="index.php?loadpage=training">Training</a></li>
				<li><a href="index.php?loadpage=about">About</a></li>
			</ul>
		</div>
	</div>
	<div id="content">
	<?php
		switch($page){
			case 'about': 
				require_once 'about.php';
				break;
			;
			case 'care': 
				require_once 'care.php';
				break;
			;
		}
	?>
	</div>
	<div id="footer">
	
	</div>
</div>
</body>
</html>