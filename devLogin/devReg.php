<html>
<head>

  <link rel="stylesheet" type="text/css" href="../main/main.css" />

</head>
<body style="margin: 0; padding: 0;">
   <?php
  require("../main/menu.php");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "guildmanager";

 //Skapa kontakt med databasen
  $db = mysql_connect("$servername","$username","$password");
  mysql_select_db("$dbname");

   if(isset($_POST['reg'])) {
   
   $uname = mysql_escape_string($_POST['uname']);
   $namn = mysql_escape_string($_POST['name']);
   $efternamn = mysql_escape_string($_POST['eftername']);
   $pass2 = mysql_escape_string($_POST['pass2']);
   $email2 = mysql_escape_string($_POST['email2']);
   $pass = mysql_escape_string($_POST['pass']);
   $email = mysql_escape_string($_POST['email']);
   $spacebar = "";
   $idtest = 0;
   $rank = "defult";
 

   if($pass == $pass2){
    }else{
    echo " Wrong password";
    $idtest = 1;
   }
   

    if($email == $email2){
     }else{
     echo " Wrong Email";
     $idtest = 1;
    }

     if($uname != $spacebar){
      }else{
      echo " You forgot to enter a username";
      $idtest = 1;
     }

      if($namn != $spacebar){
       }else{
       echo " You forgot to enter a Firstname";
       $idtest = 1;
      }
  
       if($efternamn != $spacebar){
        }else{
       echo " You forgot to enter a Lastname";
       $idtest = 1;
       }
   
        if($pass2 != $spacebar){
         }else{
        echo " You forgot to enter a confrimed Password";
        $idtest = 1;
        }
       
         if($email2 != $spacebar){
          }else{
         echo " You forgot to enter a Confrimed Email";
         $idtest = 1;
         }
      
          if($pass != $spacebar){
          }else{
          echo " You forgot to enter a Password";
          $idtest = 1;
          }
      
           if($email != $spacebar){
             }else{
           echo " You forgot to enter a Email";
           $idtest = 1;
           }
           
      
            if($idtest == 0)
            {
    
             echo " You Have Joined The PlantetPort.";
             
              $sqlpoints = "INSERT INTO users (rank, username, firstname, lastname, password, email) VALUES ('$rank','$uname','$namn','$efternamn','$pass','$email')";
     
          
              $retval = mysql_query($sqlpoints);


             $profile = fopen("$uname.php", "w");

             echo '$name="kalle"';


             $profilewrite = '
             <html>
             <head>
              <link rel="stylesheet" type="text/css" href="../main/main.css" />
             </head>
             <body>
             <?php
              require("../main/menu.php"); 
              $actual_link = "$_SERVER[REQUEST_URI]";
              echo substr($actual_link,12);
              
              echo $actual_link;
              ?></body></html>
              ';

             fwrite($profile, $profilewrite);

             fclose($profile);


            
             
            }else{

            	echo "Failed";

            }
      
          
      

      
         
      
        
      
       

     
    
  
   }else{
    $form = <<<EOT
   
<div class="headbox"></div>
 <div class="box">
  <form method="POST" style="margin-left: 40%; margin-top: 3%;">

           <p> Username:</p><input type="text" name="uname" /><br /><br />
   
   <p> Firstname: </p><input type="text" name="name" /><br /><br />
   
   <p> Lastname: </p><input type="text" name="eftername" /><br /><br />
   
           <p> Password: </p><input type="password"  name="pass" /><br /><br />
   
   <p> Confrim Password:</p><input type="password"  name="pass2" /><br /><br />
   
   <p> Email: </p><input type="email"  name="email" /><br /><br />
   
   <p> Confrim Email:</p><input type="email"  name="email2" /><br /><br />
   
            <input type="submit" name="reg" value="Join" />
     </form>
     </div>
EOT;

  echo $form;
   }
   
   ?>
   </body>
   </html>