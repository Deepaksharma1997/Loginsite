<?php
include 'function/function.php';
?>
<h2>Forgot Password</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
E-mail: <br><input type="text" name="emailferr" value="<?php echo $email;?>">
<span class="error">* <?php echo $emailferr;?></span>
<br><br>

Old Password: <br><input type="password" name="oldpass" value="<?php echo $oldpass; ?>">
<span class="error">* <?php echo $oldpass; ?></span>
<br><br>

New Password: <br><input type="password" name="newpass" value="<?php echo $newpass; ?>">
<span class="error">* <?php echo $newpass; ?></span>
<br><br>

<input type="submit" name="submit" value="submit"></value>
</form>
