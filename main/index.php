		<?PHP

			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "guildmanager";


		  $db = mysql_connect("$servername","$username","$password");
		  mysql_select_db("$dbname");

		  	session_start();

				if(isset($_POST['submit'])){

				
					$user_name = mysql_escape_string($_POST['username']);
					$pass_word = mysql_escape_string($_POST['password']);

					$sql = mysql_query("SELECT * FROM users WHERE `username` = '$user_name' and `password` = '$pass_word'");

					if(mysql_num_rows($sql) > 0){
						$_SESSION['username'] = $user_name;
					}

				
		}

		?>

		<html>
		<head>
				<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
					<link rel="stylesheet" type="text/css" href="main.css" />

					<script type="text/javascript">
					<!--
					    function toggle_visibility(id) {
					       var e = document.getElementById(id);
					       if(e.style.display == 'block')
					          e.style.display = 'none';
					       else
					          e.style.display = 'block';
					    }
					//-->
				</script>
				</head>
		<body>

		<div id="popup-box1" class="popup-position">
			<div id="popup-wrapper">
				
				<div id="popup-container">

						<form  method="POST">
							<h2>Login</h2><br/>

								<span>Username</span></br>

									<input type="text" name="username"/><br/>

								<span>Password</span></br>

									<input type="password" name="password"/></br></br>

										<input type="submit" name="submit" value="Log in" />
				</form>

				<p style="text-decoration: none;"><a href="javascript:void(0)"onclick="toggle_visibility('popup-box1');">Close</a></p>

				</div>
			</div>
		</div>

		<div class="header">
		<?php

	$defult = "defult";
	$admin = "admin";
	$owner = "owner";
	$welcomecounter = 0;
	$welcomediffrent = 0;

		if (isset($_SESSION['username'])){

			$rank = "";

			 $user_name = $_SESSION['username'];

			$conn = mysqli_connect($servername, $username, $password, $dbname);
		 
		 if (!$conn) {
		  die("Connection failed: " . mysqli_connect_error());
		 
		 }
		 
		 
		 $sql = "SELECT * FROM users WHERE `username` = '$user_name'";
		 $result = $conn ->query($sql);
		 if($result -> num_rows > 0)
		 {

		  while($row = $result->fetch_assoc())
		  {

		   $rank = $row['rank'];
		   
		   }


			
			if($rank == $defult){
	
				$welcomecounter = 1;
			}

				if($rank == $admin){
	
				$welcomecounter = 2;
			}

					if($rank == $owner){

					$welcomecounter = 3;
				}

			}

		}

			if($welcomecounter == $welcomediffrent) {
			
?>
			<div id ="wrapper">

				<input style="float: right;" name="login" type="submit" value="Login" href="javascript:void(0)"onclick="toggle_visibility('popup-box1');"></input>
</div>	

				<div class="user">

					<span>User</span>
</div>

<?PHP
				$welcomecounter = 0;
?>
		<div class="welcomeu">
			<span> Welcome, Unknown User to PlanetPort! </span>
			</div>	
<?php

		}else{
?>

							<form style="float: right;" method="POST">
							
					<input type='submit' name='logout' value='Log Out' />

				</form>


<?php
	
	echo "<div class='profile'><a href='../devLogin/".$user_name.".php' style='float: right;'>".$user_name."</a></div>";

		if($welcomecounter == 1) {
?>
				<div class="default">
					<span>Default</span>
				</div>
<?PHP
				}


		if($welcomecounter == 2) {
?>
				<div class="admin">
					<span>Admin</span>
				</div>
<?PHP
				}

		if($welcomecounter == 3) {
?>
				<div class="owner">
					<span>Owner</span>
				</div>
<?PHP
				}
				?>
	<div class="welcome">		
	<?php	
	echo "<span>Welcome, ".$_SESSION["username"]." to PlanetPort</span>";
	?>
	</div>
	<?php
		}

			if(isset($_POST['logout'])){
			session_destroy();
			header("Location:index.php");
		}

			 ?>
		</div>
		<div class="blockhead">
		</div>
		<div class="img">
		<img src="Test.jpg" />
		</div>

		
	</body>
</html>