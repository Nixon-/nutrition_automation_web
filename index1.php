<?php include($_SERVER['DOCUMENT_ROOT'] . "/assets/php_includes.php"); ?>

<?php
  // Check active session
  if(!isset($_SESSION)){ session_start(); }
  //Check for user details/authenticate that the page is being visited by an authenticated user
  if(empty($_SESSION['user']))
  {
   // if not redirect to login page
    header("Location: login.php");
    exit;
  }

?>

<!DOCTYPE html>
<html lang="en">

		 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nutrition Automation - Home</title>


</head>



<?php

 $conn = new Mongo('localhost');


 $db = $conn->Nutrition_Automation;


 $collection = $db->food_data;


 $cursor = $collection->find();


 echo $cursor->count() . ' document(s) found. <br/>'; 

 foreach ($cursor as $obj) {

 echo 'Name: ' . $obj['name'] . '<br/>';

 echo 'Quantity: ' . $obj['quantity'] . '<br/>';

 echo 'Price: ' . $obj['price'] . '<br/>';

 echo '<br/>';
}
?>

</html>
