<?php
   define("TITLE", "PHP Variables & Constants");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE; ?></title>
</head>
<body>
   <?php
   // BOOLEAN: A boolean a variable specifies a value of true or false
   $loggedIn = true;

   // FLOATING POINT: Usually a fractional number, with a decimal
   $totalPrice = 146.28;

   // INTEGER: An integer variable is any whole number
   $myAge = 23;

   // STRING: Simple text that must be enclosed witin double quotation "" or single quotation ''
   $fullName = "Maryam Bello";
   
   // DISPLAY VARIABLES ON SCREEN
   echo "Hello, my name is $fullName and i am $myAge years old!"

   //CONSTANT
   define("TITLE", "PHP Variables & Constants");
   echo TITLE;
   ?> 
</body>
</html>