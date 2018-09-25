<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Validate Credit Card</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src = "modernizr.custom.65897.js"> </script>
</head>
<body>
    <h2>Validate Credit Card</h2>
<?php
    $creditCard = array("8910-1234-567-6543",
    "oooo-9123-4567-0123");
    foreach ($creditCard as $indexNumber => $cardNumber) {
       if ($cardNumber) {
           echo " <p>Credit Card Numbers $indexNumber is invalid because it contains an empty string.</p>";
       }
       else{
           $creditCardNumber = $cardNumber;
           $creditCardNumber = str_replace("-","", $creditCardNumber);
           $creditCardNumber = str_replace(" ","", $creditCardNumber);
           echo"<p>Credit Card Number $indexNumber $creditCardNumber removed dashes and spaces.</p>";
    if(!is_numeric($creditCardNumber)){
        if ($firstString == $secondString) {
    echo "<p>Both strings are the same.</p>";
        }
        else {
            echo "<p>Both strings have " . similar_text($firstString,$secondString) . " character(s) in common.</p>";
            echo "<p>You must change ". levenshtein($firstString,$secondString) . " chracter(s)to make the strings the same.</p>";
        }
    }
        else{
            echo "<p>Credit Crad Number $indexNumber $creditCardNumber is a valid Credit Card Number.</p>";
    }

       }
    }
?>
</body>
</html>