<?php
$name = file_get_contents('https://joshuad.xyz/4chr/check.php');

echo'<html>
<head>
<title>4 Character Name Generator</title>
</head>
<body>
<p><a href="/4chr/">Click here to generate a new name or refresh the page.</a></p>
<p>' . htmlspecialchars($name) . '</p>
<p>You can view a list of logged 4 character names that were generated on this site.</p>
<p><a target="_blank" href="names.txt">View list</a></p>
<p>Made by Joshua.</p>
</body>
</html>';

?>