<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php

$name = $address = $age = $groupNo = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $name = test_input($_POST["name"]);
  $address = test_input($_POST["address"]);
  $groupNo = test_input($_POST["groupNo"]);
  $age = test_input($_POST["age"]);
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h3> GROUP 4 SUBMISSION </h3>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>
  Name: <input type="text" name="name"><br><br>
  
  Address: <input type="text" name="address"><br><br>
  
  Group No: <input type="text" name="groupNo"><br><br>
  
  Age: <input type="text" name="age"><br><br>
  
    
  <input type="submit" name="submit" value="Submit">  
</form>

