<!doctype html>
<!--
William Smyth May
Dawg Pizza homepage.
-->
<html>
<head>
	<title>Dawg Pizza</title>
	<?php 
	include 'common.php'; //php used in place of SSI.  Common file where php functions are stored.
	metaData(); //All metadata included in common.php
	?>
	
</head>
<body>
	<div id="contentArea">	
		<?php heading() ?>
		<div class="bkg3">
			<p id="description">Awesome wood-fired pizza with fresh ingredients baked to order. Come in and eat, or call us for delivery!</p>
			<ul id="details">
				<li>Our Business Hours: 10:00 AM - 11:00 PM, Monday through Saturday.</li>
				<li>206-555-1212</li>
				<li>4306 University Way NE, Seattle, WA, 98105</li>
				<li><a href="mailto:dawgpizzaseattle@gmail.com">dawgpizzaseattle@gmail.com</a></li>
				<li><a href="http://www.twitter.com/DawgPizzaSea" id="twitter">Check us out on Twitter!</a></li>
			</ul>
			<?php footing() ?>
		</div>
	</div>
</body>
</html>