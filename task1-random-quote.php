<?php
require_once 'task1-quote-list.php';
$todays_quote = $quotes[rand(0,(count($quotes)-1))];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Random Quote Generator</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		body{
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
		}
		blockquote footer{
			text-align: right;
			margin: 20px 20px 0 0;
			font-style: italic;
			font-size: 1rem;
		}
		blockquote{
			font-size: 3rem;
		}
	</style>
</head>
<body>
	<div class="container">
		<?=$todays_quote['h']?>
	</div>
</body>
</html>