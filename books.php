<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Books and Authors</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="sty<script src="modernizr.custom.65897.js">lesheet" type="text/css" 

<body>
    <h2>Books and Authors</h2>
    <?php
  $books = array("The Adventures of David Dobrik", "Jason Nash's Fountain of Youth" , "Zane and The Key" , "The Death of Soundcloud Scott", "Todd the Toad", "The Rise of the Vlog Squad");

  $authors = array("David Dobrik","Jason Nash", "Zane Hijazi", "Scotty Sire", "Toddy Smith", "Tiffany Altagracia");

  $realNames = array("D.D.", "J.S.","Z.H.","S.S.", "T.S.", "T.A.");

  for  ($i = 0; $i < count($books);$i++){
      echo "<p>The initials of {$authors[$i]}, " . "the author of \"{$books[$i]}\", " . "is {$realNames[$i]} </p>";
  }
  echo "<br>";
  for ($i=0; $i < count($books) ; $i++) { 
echo "<p>The title \"{$books[$i]}\" contains " . strlen($books[$i]) . " characters and " . str_word_count($books[$i]) . " words.</p>";
  }
  echo "<br>";
  $startingtext = "cLiCkBaIt?"; 
  echo "<h2>for the views</h2>";
  $uppercaseText = strtoupper($startingtext);
  $lowercaseText = strtolower($startingtext);
  echo "<h2>SpongeBob is sponsporing this video</h2>";
  echo "<p>$startingtext</p>";
  echo "<p>$startingtext</p>";
  echo "<p>$startingtext</p>";
  echo "<p>$startingtext</p>";
  echo "<p>$startingtext</p>";
  echo "<br>";
  echo "<h2>david vs jason</h2>";
  echo "<p>$uppercaseText</p>\n";
  echo "<p>$lowercaseText</p>\n";
  echo "<p>$uppercaseText</p>\n";
  echo "<p>$lowercaseText</p>\n";
  echo "<p>$uppercaseText</p>\n";
  echo "<p>$lowercaseText</p>\n";
  echo "<p>$uppercaseText</p>\n";
  echo "<p>$lowercaseText</p>\n";
  echo "<p>$uppercaseText</p>\n";
  echo "<p>$lowercaseText</p>\n";
  echo "<p>$uppercaseText</p>\n";
  echo "<p>$lowercaseText</p>\n";
  echo "<p>$uppercaseText</p>\n";
  echo "<p>$lowercaseText</p>\n";
  echo "<p>$uppercaseText</p>\n";
  echo "<p>$lowercaseText</p>\n";
  echo "<br>";

  echo "<h2>Reverse Reverse</h2>";
echo "<p>" . ucfirst($lowercaseText) . "</p>\n";
echo "<p>" . lcfirst($uppercaseText) . "</p>\n";
echo "<br>";
$workingText = ucwords($lowercaseText);
echo "<h2>4 minutes and 20 Seconds</h2>";
echo "<p>$workingText</p>\n";

echo "<br>";
echo "<h2>Secret Tricks</h2>";
echo "<p>" . md5($workingText) . "</p>";
echo substr($workingText, 0, 6) . "</p>\n";
echo "<p>" . substr($workingText, 7) . "</p>\n";
echo "<p>" . strrev($workingText) . "</p>\n";
echo "<p>" . str_shuffle($workingText) . "</p>\n";

  ?>
</body>

</html>