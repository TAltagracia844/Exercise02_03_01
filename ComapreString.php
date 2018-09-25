<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Compare String</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
</head>
<body>
<h2>Compare strings</h2>
    <?php 
    $firstString = "Geek2Geek";
    $secondString = "Geezer2Geek";
    if (!empty($firstString)&& !empty($secondString)) {
    echo "No strings empty.";
    } else {
        echo "<p>Either the \$firstString  variable or the \$secondString variable does not contain a value so the two strings cannot be compared.</p>";
    }
    
    ?>
</body>
</html>