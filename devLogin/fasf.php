
             <html>
             <head>
              <link rel="stylesheet" type="text/css" href="../main/main.css" />
             </head>
             <body>
             <?php
              require("../main/menu.php"); 
              $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
              echo $actual_link;
              echo $user_name; 
              ?></body></html>
              