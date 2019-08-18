<?php

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// define variables and set to empty values
$nameErr = $emailErr = $passworderr= $genderErr = $addresserr = $phoneerr = $countryerr = "";
$name = $email = $password = $gender = $address = $phone = $country = "";
//Name
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

//Email
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

//Password
  if (empty($_POST["password"])) {
    $passworderr = "password is required";
  } else {
    $password = test_input($_POST["password"]);
  }

//Phone
  if (empty($_POST["phone"])) {
    $phoneerr = "Enter Ph. no.";
  } else {
    $phone = test_input($_POST["phone"]);
  }

//Address
  if (empty($_POST["address"])) {
    $addresserr = "Address is required";
  }
  else {
    $address = test_input($_POST["address"]);
  }

//Gender
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

//country
  if(empty($_POST['country']))
  {
  $countryerr = "Country is required";
  }
  else
  {
  $country = test_input($_POST['country']);
  }
}

//Below are FORGOT PASSWORD PAGE validations

$emailferr = $oldpass = $newpass = "";

//Email for password change

if (empty($_POST["emailferr"])) {
  $emailErr = "Email is required";
} else {
  $email = test_input($_POST["emailferr"]);
  // check if e-mail address is well-formed
  if (!filter_var($emailferr, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
  }
}

//oldpass

if(empty($_POST['oldpass']))
{
$oldpass = "Incorrect old password";
}
else
{
$oldpass = test_input($_POST['oldpass']);
}

//newpass
if(empty($_POST['newpass']))
{
$newpass = "Password cannot be blank";
}
else
{
$newpass = test_input($_POST['newpass']);
}
?>
