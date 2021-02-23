<!DOCTYPE html>
<html>
<body>
<?php
if(isset($_POST["set"]))
{
    $FirstName=$_POST["fname"];
    $LastName=$_POST["lname"];
    $Gender=$_POST["gen"];
    $UserName=$_POST["uname"];
    $Password=$_POST["pwd"];
    $Email=$_POST["email"];
    $RecoveryEmail=$_POST["rmail"];

    if(empty($FirstName) or empty($LastName) or empty($Gender) or
    empty($UserName) or empty($Password) or empty($Email) or empty($RecoveryEmail) )
    {
       echo "Please fill all information <br>";
    }

    else{
      echo "Registration Done!! <br>";
    }
   
    
}
?>

<form method="POST">

<h1>Registration Form</h1>
<p>Basic Information:</p>
<label>FirstName <input type="text" name="fname"></label>
<br>
<br>

<label> LastName: <input type="text" name="lname"></label>
<br>
<br>

<label for="Gender">Gender:</label>
 <input type="radio" name="gen" id="male"> 
    <label for="m">Male</label>
    
    <input type="radio" name="gen" id="female"> 
    <label for="f">Female</label>
    <br>
    <br>

    <label> Email: <input type="email" name="email"></label>
<br>
<br>

   
<p>User Account Information</p>

<label> UserName: <input type="text" name="uname"></label>
<br>
<br>
<label> Password: <input type="password" name="pwd"></label>
<br>
<br>

<label> RecoveryEmail: <input type="email" name="rmail"></label>
<br>
<br>

<input  type="submit" name="set" value="submit">









</form>
</body>
</html>