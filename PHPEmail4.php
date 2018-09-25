<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"> </script>
</head>

<body>
    <h2>PHP EMAIL 4</h2>
    <?php
   $emailAddresses = array("josh.peck@php.test",
    "thefat.jonah@php.example",
    "lizza.koshy@danceinc",
    "theviewspodcast.com",
    "vlogthe.squad@flamethrower.okur");


    function sortAddresses($addresses){
 $sortedAddresses = array();
 $ilimit = count($addresses) - 1;
 $jlimit = count($addresses);
 for ($i=0; $i < $ilimit; $i++) { 
  $currentAddress = $addresses[$i];
  for ($j = $i + 1; $j < $jlimit; $j++) { 
if(strcasecmp($currentAddress, $addresses[$j])> 0){
$tempVal = $addresses[$j];
$addresses[$j] = $currentAddress;
$currentAddress = $tempVal;
}
  }
$sortedAddresses[] = $currentAddress;
  }
 
 return($sortedAddresses);
     }
     $sortedAddresses = sortAddresses($emailAddresses);
     $sortedAddressesList = implode(", ", $sortedAddresses);
     echo"<p> Sorted Addresses: $sortedAddressesList</p>\n";

    function validateAddress($address){
        if (preg_match("/^[\w-]+(\.[\w-]+)*@[\w-]+(\.[w-]+)*(\.[A-Za-z]{2,})$/i", $address)==1) {
return true;
        } else {
          return false;
        }
        
    }
    foreach ($sortedAddresses as $value) {
if(validateAddress($value) === false){
echo "<p>The email address <em>$value</em> does not appear to be valid.</p>";
}
}
    ?>

</body>

</html>