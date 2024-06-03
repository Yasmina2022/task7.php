<?php
session_start();             // start session 
$fname="";
$email="";
$pw="";
//if($_SERVER["REQUEST_METHOD"]="POST"){
    if(isset($_POST["signup"])){
    $fname=$_POST["full_name"];
    $email=$_POST["mail"];
    $pw=$_POST["password"];
 }
 if(!empty($fname) && !empty($email) && !empty($pw)){
    $_SESSION["FULL_NAME"]=$fname;        // set variables
    $_SESSION["email"]=$email;
 }
?>
<!DOCTYPE html>
<html>
<body>

<h2>SIGN Up FORM</h2>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>"
    <label for="fname">FULL NAME :</label>
<input type="text" id="fname" name="full_name"><br><br>

<label for="Email">Email :</label>
<input type="email" id="Email" name="mail"><br><br>

<label for="Password">password :</label>
<input type="password" id="password" name="password"><br><br>
<input type="submit" value="Sign Up" name="signup">
</form>
<h3>welcome <?=$_SESSION["FULL_NAME"]?> </h3>
<p style= "font-size:medium;color:blue;">your email is :<?= $_SESSION["email"]?> </p>

</body>
</html>
