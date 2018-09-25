<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Passwor fields</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src = "modernizr.custom.65897.js" > </script> 
</head>
<body>
    <h2>My President PT 2</h2>
    <?php 
   $record = "jdoe:8w4dso3a39Yk2:1463:24:John Doe:/home/jdoe:/bin/bash:extra 1:extra 2";
$passwordFields = array("login name", "optional encrypted password", "numerical user ID", "numerical group ID", "user name of comment field", "user home directory",
"optional user command interpreter");

$fieldIndex = 0;
$extraFields = 0;
$currField = strtok($record, ":");
echo $currField;
while ($currField != NUll) {
    if ($fieldIndex < count($passwordFields)) {
        echo "<p>The {$passwordFields[$fieldIndex]} is <em>$currField</em></p>\n";
    
    } else {
       ++$extraFields;
       echo "<p>Extra field # $extraFields is <em>$currField</em></p>\n";
    }
    
    $currField = strtok(":");
    ++$fieldIndex;
}
?>
</body>
</html>