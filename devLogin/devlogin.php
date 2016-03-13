<?PHP

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "guildmanager";


  $db = mysql_connect("$servername","$username","$password");
  mysql_select_db("$dbname");

		if(isset($_POST['submit'])){

			session_start();
		
			$user_name = mysql_escape_string($_POST['username']);
			$pass_word = mysql_escape_string($_POST['password']);

			$sql = mysql_query("SELECT * FROM users WHERE `username` = '$user_name' and `password` = '$pass_word'");

			if(mysql_num_rows($sql) > 0){
				echo "Your Now Logged in ".$user_name."!";
				$_SESSION['username'] = $user_name;
			}else{
				echo "Wrong Username or Password!";
			}

		
}

?>
<html>
	<head>
	</head>
		<body>
		<form  method="POST">
					<h2>Login</h2><br/>

					<span>Username</span></br>

					<input type="text" name="username"/><br/>

					<span>Password</span></br>

					<input type="password" name="password"/></br></br>

					<input type="submit" name="submit" />
		</form>
		</body>
	</html>