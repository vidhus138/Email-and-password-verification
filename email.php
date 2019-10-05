<html>
<body>
<form name="m" method="POST">
Enter your email:<input type="text" name="email">
Enter your password<input type="text" name="password">
<input type="submit">
</form>
</body>
</html>

<?php
if($_POST)
{
$count=0;
$email=$_POST['email'];
$password=$_POST['password'];
if(strpos($email,'@')==true){
$count++;}
if(strpos($email,'.com')==true){
$count++;}
if($count==2)
echo"email is correct";
else
echo"invalid email";
$a="/ ^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}/";
if(!preg_match($a,$password)&&strlen($password)>=8)
echo"password correct";
else
echo"password incorrect";
}
?>