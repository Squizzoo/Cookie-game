<?php
include 'php/functions/linkCss.php';

$css = bootstrap('css');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php echo $css ?>
	<title>Game Masters</title>
</head>
<body>
	<div id="container">
		<div id="left">
			<h2>Game instruction</h2>
		</div>
		<div id="middel">
            <div id="img">
            	<img src='img/cookie.png'>
            </div>
            <div id="scoreboard">
                <h2>Score</h2>
                <p id='scoreCount'>0</p>
            </div>
		</div>

		<div id="right">
            <div id='wrapperBtn'>
            <button id='showUG'>Show Upgrades</button>
            <button id='showStat'>Show Stats</button>
            </div>
		</div>
		<div id="content">

		</div>
	</div>

    <script src='js/jquery/jquery-3.2.0.min.js'></script>
    <script src='js/functions/cookieHandler.js'></script>
</body>
</html>
