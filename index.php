<?php include 'function/function.php' ?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style/master.css">
<body>
</head>
<h2 class="signup">Registration Form</h2>
<p class="error"><span>* required field</span></p>
<form class="signup" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

  Name: <br><input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>

  E-mail: <br><input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>

  Password: <br><input type="password" name="password" value="<?php echo $password; ?>">
  <span class="error">* <?php echo $passworderr; ?></span>
  <br><br>

  Phone: <br><input type="phone" name="phone" value="<?php echo $phone;?>">
  <span class="error">* <?php echo $phoneerr;?></span>
  <br><br>

  Address:<br><textarea name="address" rows="2" cols="20"><?php echo $address;?></textarea>
  <span class="error">* <?php echo $addresserr;?></span>
  <br><br>

  Gender:<br>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>

  Country:<br>
  <select name="country">
  <option value="">Select Country</option>
  <?php foreach ($result as $res) { ?>
  <option value="<?php echo $res['country_name']; ?>"><?php echo $res['country_name']." [".$res['country_code']."]"; ?></option>
  <?php } ?>
  <!--<button name="Submit"></button>-->
  </select>
  <span class="error">*</span>
  <br><br>
  <input type="submit" name="submit" value="Submit"></input>
  <br>
  <a class="link" href="forgot.php">Forgot Password</a>
  <span class="error"><?php echo $statusfail; ?></span>
  <span class="success"><?php echo $statussuccess; ?></span>
</form>
<div class="center">
<?php
echo "<h2>Your Input:</h2>";
echo "Name : ".$name;
echo "<br>Email : ".$email;
echo "<br>Password : ".$password;
echo "<br>Phone : ".$phone;
echo "<br>Address : ".$address;
echo "<br>Gender : ".$gender;
echo "<br>Country : ".$country;
?>
</div>
</form>
</body>
</html>
