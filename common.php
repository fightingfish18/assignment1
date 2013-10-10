//William Smyth May
//These are the common php functions used across all three pages.

<?php function metaData() { //Metadata for page.?> 
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<meta name="author" content="wsmay1">
	<link rel="shortcut icon" href="img/logo.png">
<?php } ?>

<?php function heading() { //Header on each page?>
	<div id="heading">
		<a href="index.php"><img src="img/logo.png" alt="pizzaLogo" id="logo"></a>
		<h1>Dawg Pizza</h1>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="menu.php">Menu</a></li>
				<li><a href="about.php">About Us</a></li>
			</ul>
		</nav>
	</div>
<?php } ?>

<?php function footing() { //Footer on each page ?>
	<div id="footing">
		<p>&copy; Dawg Pizza 2013, Call us for delivery: 206-555-1212</p>
	</div>
<?php } ?>