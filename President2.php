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
    <h2>My President PT 2</h2>
    <?php 
    $presidents = "David Dobrik;Jason Nash;;Zane Hijazi;Heath Hussar;Scotty Sire";
    $thisPresident = strtok($presidents, ";");
    while($thisPresident != NULL ){
        echo "$thisPresident<br>";
        $thisPresident = strtok(";");
    }
    
    ?>
</body>
</html>