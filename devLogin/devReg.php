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

   <select>
      <option value="Afghanistan">Afghanistan</option>
      <option value="Albania">Albania</option>
      <option value="Algeria">Algeria</option>
      <option value="American Samoa">American Samoa</option>
      <option value="Andorra">Andorra</option>
      <option value="Angola">Angola</option>
      <option value="Anguilla">Anguilla</option>
      <option value="Antarctica">Antarctica</option>
      <option value="Antigua and Barbuda">Antigua and Barbuda</option>
      <option value="Argentina">Argentina</option>
      <option value="Armenia">Armenia</option>
      <option value="Aruba">Aruba</option>
      <option value="Australia">Australia</option>
      <option value="Austria">Austria</option>
      <option value="Azerbaijan">Azerbaijan</option>
      <option value="Bahamas">Bahamas</option>
      <option value="Bahrain">Bahrain</option>
      <option value="Bangladesh">Bangladesh</option>
      <option value="Barbados">Barbados</option>
      <option value="Belarus">Belarus</option>
      <option value="Belgium">Belgium</option>
      <option value="Belize">Belize</option>
      <option value="Benin">Benin</option>
      <option value="Bermuda">Bermuda</option>
      <option value="Bhutan">Bhutan</option>
      <option value="Bolivia">Bolivia</option>
      <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
      <option value="Botswana">Botswana</option>
      <option value="Brazil">Brazil</option>
      <option value="Brunei Darussalam">Brunei Darussalam</option>
      <option value="Bulgaria">Bulgaria</option>
      <option value="Burkina Faso">Burkina Faso</option>
      <option value="Burundi">Burundi</option>
      <option value="Cambodia">Cambodia</option>
      <option value="Cameroon">Cameroon</option>
      <option value="Canada">Canada</option>
      <option value="Cape Verde">Cape Verde</option>
      <option value="Cayman Islands">Cayman Islands</option>
      <option value="Central African Republic">Central African Republic</option>
      <option value="Chad">Chad</option>
      <option value="Chile">Chile</option>
      <option value="China">China</option>
      <option value="Christmas Island">Christmas Island</option>
      <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
      <option value="Colombia">Colombia</option>
      <option value="Comoros">Comoros</option>
      <option value="Democratic Republic of the Congo (Kinshasa)">Democratic Republic of the Congo (Kinshasa)</option>
      <option value="Congo, Republic of (Brazzaville)">Congo, Republic of (Brazzaville)</option>
      <option value="Cook Islands">Cook Islands</option>
      <option value="Costa Rica">Costa Rica</option>
      <option value="Ivory Coast">Ivory Coast</option>
      <option value="Croatia">Croatia</option>
      <option value="Cuba">Cuba</option>
      <option value="Cyprus">Cyprus</option>
      <option value="Czech Republic">Czech Republic</option>
      <option value="Denmark">Denmark</option>
      <option value="Djibouti">Djibouti</option>
      <option value="Dominica">Dominica</option>
      <option value="Dominican Republic">Dominican Republic</option>
      <option value="East Timor (Timor-Leste)">East Timor (Timor-Leste)</option>
      <option value="Ecuador">Ecuador</option>
      <option value="Egypt">Egypt</option>
      <option value="El Salvador">El Salvador</option>
      <option value="Equatorial Guinea">Equatorial Guinea</option>
      <option value="Eritrea">Eritrea</option>
      <option value="Estonia">Estonia</option>
      <option value="Ethiopia">Ethiopia</option>
      <option value="Falkland Islands">Falkland Islands</option>
      <option value="Faroe Islands">Faroe Islands</option>
      <option value="Fiji">Fiji</option>
      <option value="Finland">Finland</option>
      <option value="France">France</option>
      <option value="French Guiana">French Guiana</option>
      <option value="French Polynesia">French Polynesia</option>
      <option value="French Southern Territories">French Southern Territories</option>
      <option value="Gabon">Gabon</option>
      <option value="Gambia">Gambia</option>
      <option value="Georgia">Georgia</option>
      <option value="Germany">Germany</option>
      <option value="Ghana">Ghana</option>
      <option value="Gibraltar">Gibraltar</option>
      <option value="Great Britain">Great Britain</option>
      <option value="Greece">Greece</option>
      <option value="Greenland">Greenland</option>
      <option value="Grenada">Grenada</option>
      <option value="Guadeloupe">Guadeloupe</option>
      <option value="Guam">Guam</option>
      <option value="Guatemala">Guatemala</option>
      <option value="Guinea">Guinea</option>
      <option value="Guinea-Bissau">Guinea-Bissau</option>
      <option value="Guyana">Guyana</option>
      <option value="Haiti">Haiti</option>
      <option value="Holy See">Holy See</option>
      <option value="Honduras">Honduras</option>
      <option value="Hong Kong">Hong Kong</option>
      <option value="Hungary">Hungary</option>
      <option value="Iceland">Iceland</option>
      <option value="India">India</option>
      <option value="Indonesia">Indonesia</option>
      <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
      <option value="Iraq">Iraq</option>
      <option value="Ireland">Ireland</option>
      <option value="Israel">Israel</option>
      <option value="Italy">Italy</option>
      <option value="Jamaica">Jamaica</option>
      <option value="Japan">Japan</option>
      <option value="Jordan">Jordan</option>
      <option value="Kazakhstan">Kazakhstan</option>
      <option value="Kenya">Kenya</option>
      <option value="Kiribati">Kiribati</option>
      <option value="Korea, Democratic People's Rep. (North Korea)">Korea, Democratic People's Rep. (North Korea)</option>
      <option value="Korea, Republic of (South Korea)">Korea, Republic of (South Korea)</option>
      <option value="Kosovo">Kosovo</option>
      <option value="Kuwait">Kuwait</option>
      <option value="Kyrgyzstan">Kyrgyzstan</option>
      <option value="Lao, People's Democratic Republic">Lao, People's Democratic Republic</option>
      <option value="Latvia">Latvia</option>
      <option value="Lebanon">Lebanon</option>
      <option value="Lesotho">Lesotho</option>
      <option value="Liberia">Liberia</option>
      <option value="Libya">Libya</option>
      <option value="Liechtenstein">Liechtenstein</option>
      <option value="Lithuania">Lithuania</option>
      <option value="Luxembourg">Luxembourg</option>
      <option value="Macau">Macau</option>
      <option value="Macedonia, Rep. of">Macedonia, Rep. of</option>
      <option value="Madagascar">Madagascar</option>
      <option value="Malawi">Malawi</option>
      <option value="Malaysia">Malaysia</option>
      <option value="Maldives">Maldives</option>
      <option value="Mali">Mali</option>
      <option value="Malta">Malta</option>
      <option value="Marshall Islands">Marshall Islands</option>
      <option value="Martinique">Martinique</option>
      <option value="Mauritania">Mauritania</option>
      <option value="Mauritius">Mauritius</option>
      <option value="Mayotte">Mayotte</option>
      <option value="Mexico">Mexico</option>
      <option value="Micronesia, Federal States of">Micronesia, Federal States of</option>
      <option value="Moldova, Republic of">Moldova, Republic of</option>
      <option value="Monaco">Monaco</option>
      <option value="Mongolia">Mongolia</option>
      <option value="Montenegro">Montenegro</option>
      <option value="Montserrat">Montserrat</option>
      <option value="Morocco">Morocco</option>
      <option value="Mozambique">Mozambique</option>
      <option value="Myanmar, Burma">Myanmar, Burma</option>
      <option value="Namibia">Namibia</option>
      <option value="Nauru">Nauru</option>
      <option value="Nepal">Nepal</option>
      <option value="Netherlands">Netherlands</option>
      <option value="Netherlands Antilles">Netherlands Antilles</option>
      <option value="New Caledonia">New Caledonia</option>
      <option value="New Zealand">New Zealand</option>
      <option value="Nicaragua">Nicaragua</option>
      <option value="Niger">Niger</option>
      <option value="Nigeria">Nigeria</option>
      <option value="Niue">Niue</option>
      <option value="Northern Mariana Islands">Northern Mariana Islands</option>
      <option value="Norway">Norway</option>
      <option value="Oman">Oman</option>
      <option value="Pakistan">Pakistan</option>
      <option value="Palau">Palau</option>
      <option value="Palestinian territories">Palestinian territories</option>
      <option value="Panama">Panama</option>
      <option value="Papua New Guinea">Papua New Guinea</option>
      <option value="Paraguay">Paraguay</option>
      <option value="Peru">Peru</option>
      <option value="Philippines">Philippines</option>
      <option value="Pitcairn Island">Pitcairn Island</option>
      <option value="Poland">Poland</option>
      <option value="Portugal">Portugal</option>
      <option value="Puerto Rico">Puerto Rico</option>
      <option value="Qatar">Qatar</option>
      <option value="Reunion Island">Reunion Island</option>
      <option value="Romania">Romania</option>
      <option value="Russian Federation">Russian Federation</option>
      <option value="Rwanda">Rwanda</option>
      <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
      <option value="Saint Lucia">Saint Lucia</option>
      <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
      <option value="Samoa">Samoa</option>
      <option value="San Marino">San Marino</option>
      <option value="Sao Tome and Principe">Sao Tome and Principe</option>
      <option value="Saudi Arabia">Saudi Arabia</option>
      <option value="Senegal">Senegal</option>
      <option value="Serbia">Serbia</option>
      <option value="Seychelles">Seychelles</option>
      <option value="Sierra Leone">Sierra Leone</option>
      <option value="Singapore">Singapore</option>
      <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
      <option value="Slovenia">Slovenia</option>
      <option value="Solomon Islands">Solomon Islands</option>
      <option value="Somalia">Somalia</option>
      <option value="South Africa">South Africa</option>
      <option value="South Sudan">South Sudan</option>
      <option value="Spain">Spain</option>
      <option value="Sri Lanka">Sri Lanka</option>
      <option value="Sudan">Sudan</option>
      <option value="Suriname">Suriname</option>
      <option value="Swaziland">Swaziland</option>
      <option value="Sweden">Sweden</option>
      <option value="Switzerland">Switzerland</option>
      <option value="Syria, Syrian Arab Republic">Syria, Syrian Arab Republic </option>
      <option value="Taiwan (Republic of China)">Taiwan (Republic of China)</option>
      <option value="Tajikistan">Tajikistan</option>
      <option value="Tanzania; officially the United Republic of Tanzania">Tanzania; officially the United Republic of Tanzania</option>
      <option value="Thailand">Thailand</option>
      <option value="Tibet">Tibet</option>
      <option value="Timor-Leste (East Timor)">Timor-Leste (East Timor)</option>
      <option value="Togo">Togo</option>
      <option value="Tokelau">Tokelau</option>
      <option value="Tonga">Tonga</option>
      <option value="Trinidad and Tobago">Trinidad and Tobago</option>
      <option value="Tunisia">Tunisia</option>
      <option value="Turkey">Turkey</option>
      <option value="Turkmenistan">Turkmenistan</option>
      <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
      <option value="Tuvalu">Tuvalu</option>
      <option value="Ugandax">Ugandax</option>
      <option value="Ukraine">Ukraine</option>
      <option value="United Arab Emirates">United Arab Emirates</option>
      <option value="nited Kingdom">nited Kingdom</option>
      <option value="United States">United States</option>
      <option value="Uruguay">Uruguay</option>
      <option value="Uzbekistan">Uzbekistan</option>
      <option value="Vanuatu">Vanuatu</option>
      <option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
      <option value="Venezuela">Venezuela</option>
      <option value="Vietnam">Vietnam</option>
      <option value="Virgin Islands (British)">Virgin Islands (British)</option>
      <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
      <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
      <option value="Western Sahara">Western Sahara</option>
      <option value="Yemen">Yemen</option>
      <option value="Zambia">Zambia</option>
      <option value="Zimbabwe">Zimbabwe</option>


   </select>
   
            <input type="submit" name="reg" value="Join" />
     </form>
     </div>
EOT;

  echo $form;
   }
   
   ?>
   </body>
   </html>