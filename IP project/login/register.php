<?php

$submit=$_POST['submit'];
$fullname=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];

$date=date("Y-m-d");
if ($submit)
{
$connect=mysqli_connect("localhost", "root", "","phplogin")or die("couldn't find server");
$write=mysqli_query($connect,"INSERT INTO login (username,password)VALUES('$username','$password')")or die("sql error");	

}

?>
<html>
<h1>Registration Form</h1>
<form action='register.php' method='POST'>
	<table>
		<tr>
		<td>Your Full Name
		</td>
				<td><input type='text' name='name' value=<?php echo $fullname?>>
		</td>
		</tr>
		<tr>
		<tr>
		<td>Your UserName
		</td>
				<td><input type='text' name='username'>
		</td>
		</tr>
		<td>Your Password
		</td>
				<td><input type='password' name='password'>
		</td>
		</tr>
		<tr>
		<td>Repeat Password
		</td>
				<td><input type='password' name='repeatpwd'>
		</td>
		</tr>
	</table>
<p>
		<input type='submit' name='submit' value='register'>
		

</form>
</html>