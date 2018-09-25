<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Email</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"> </script>
    </head>

<body>
<h2>PHP Emails</h2>
    <?php
   $emailAddresses = array("josh.peck@php.test",
    "the.fat.jonah@php.example",
    "lizzakoshydanceinc",
    "theviewspodcastcom",
    "vlogthe.squad@flamethrower.okur");

    function validateAddress($address){
        if (strpos($address, '@')!== false && strpos($address, '.') !== false) {
return true;
        } else {
          return false;
        }
        
    }
    foreach ($emailAddresses as $value) {
if(validateAddress($value) === false){
echo "<p>The email address <em>$value</em> does not appear to be valid.</p>";
}
}
    ?>
</body>

</html>