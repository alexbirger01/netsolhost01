<?php
// prints e.g. 'Current PHP version: 4.1.1'
echo 'Current PHP version: ' . phpversion();

// prints e.g. '2.0' or nothing if the extension isn't enabled
echo phpversion('tidy');


?>



<?php
if((!($_POST["name"])) Or (!($_POST["email"]))) {
	
?>
	<form action="login.php" method="post">
	Name: <input type="text" name="name"><br>
	E-mail: <input type="text" name="email"><br>
	<input type="submit">
	</form>
<?php
}
	else {
		echo 'Welcome '.$_POST["name"].'<br>';
		echo 'Your email address is: '.$_POST["email"]; 
		redirect('account_services.html');
		

}

function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
}
?>
