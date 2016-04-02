		<?php

			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "guildmanager";


		  $db = mysql_connect("$servername","$username","$password");
		  mysql_select_db("$dbname");


		  	
			require("menu.php");


				if(isset($_POST['send'])){

				
					$atom = mysql_escape_string($_POST['atom']);

					$date = date("Y/m/d");

					$time = date("h:i:sa");

					$sql = "INSERT INTO atomize (atomtext, username, name, dateon, timeon) VALUES ('$atom','$user_name','$user_name','$date','$time')";

					$retval = mysql_query($sql);

					break;

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

		<br/>
		<br/>

						<div id="popup-box2" class="popup-position">
			<div id="popup-wrapper">
				
				<div id="popup-container">

						<form  method="POST">
							<h2>sssssogin</h2><br/>

								<span>Password</span></br>

									<div class="TextAtom"><textarea rows="4" cols="62" maxlength="237" name="atom"></textarea></div></br></br>

										<input type="submit" name="send" value="Atomize" />
				</form>

				<p style="text-decoration: none;"><a href="javascript:void(0)"onclick="toggle_visibility('popup-box2');">Close</a></p>

				</div>
			</div>
		</div>

		<div class="container">
		<?php if($welcomecounter == $welcomediffrent)
		 {

		 	}else{ ?>
		<div class="atomize"><input type="submit" value="Atomize" href="javascript:void(0)"onclick="toggle_visibility('popup-box2');"></input></div>
</div>	
<?php         
		 		}

		 		$result = mysql_query("SELECT atomtext, username, dateon, timeon FROM atomize");
		 
		 			while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {

   										 echo  "<div class='atomizer'><br/><br/>". $row['username']."<br/>".$row['dateon']. " " .$row['timeon']."<br/>". $row['atomtext']."</div>";  
}


		 		?>

</div>
		
	</body>
</html>