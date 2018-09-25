<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Presidents</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src = "modernizr.custom.65897.js" > </script> 
</head>
<body>
    <h2>My Presidents</h2>
    <?php 
    $presidents = array("David Dobrik", "Jason Nash", "Zane Hijazi", "Heath Hussar", "Scotty Sire");
    $yearsInOffice = array("9,035,982",
    "1,550,926", 
    "2,493,200", 
    "1,345,248",
    "2,279,453");
    $outputTemplate = "<p> [NAME] currently has [TERM] subscribers </p>\n";

    foreach ($presidents as $sequence => $value) {
     $tempString = str_replace("[NAME]", $value,$outputTemplate);
     $outputString = str_replace("[TERM]", $yearsInOffice[$sequence],$tempString );
     echo $outputString;
    }
    ?>
</body>
</html>