
             <html>
             <head>
              <link rel="stylesheet" type="text/css" href="../main/main.css" />
             </head>
             <body>
             <?php
              require("../main/menu.php"); 
              $actual_link = "$_SERVER[REQUEST_URI]";
              $profilescanner = substr(substr($actual_link,23),0,-4);
              if($profilescanner == $user_name)
              {
                echo "Hello";
              }else{
                echo "World!";
              }

              ?>
              </body>
              </html>
              