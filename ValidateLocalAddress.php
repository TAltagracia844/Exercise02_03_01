<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VALIDATE LOCAL ADDRESS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>
<?php
$email = array("jsmith123@example.org", "john.smith.mail@example.org", "john.smith@example.org", "john.smith@example", "jmsith123@mail.example.org");
        
        foreach ($email as $emailAddress) {
            echo "The email address &ldquo;" . $emailAddress . "&rdquo; ";
            if (preg_match("/^(([A-Za-z]+\d+)|" . "([A-Za-z]+\.[A-Za-z]+))" . "@((mail\.)?)example\.org$/i", $emailAddress) == 1) {
                echo " is a valid e-mail address. <br>";
            }
            else {
                echo " is not a valid e-mail address. <br>";
            }
        }
        ?>
</body>
</html>