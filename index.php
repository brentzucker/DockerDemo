<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php

$pics = [
			"logo" => "docker_logo.png",
			"meme" => "meme.jpg"
		];

$content = [
				"h1" => "Docker Demo",
				"h2" => "Georgia Tech",
				"h3" => "Linux Users Group",
				"h4" => "Jay Kamat and Brent Zucker",
			];

echo "<img src=\"$pics[logo]\">";

foreach ($content as $tag => $text) {
	echo "<$tag>$text</$tag>";
}

echo "<img class=\"meme\" src=\"$pics[meme]\">";
?>

<h3><a href="https://www.docker.com/">docker.io</a></h3>
</body>
</html>