<!DOCTYPE html>
<html>
    <head>
    
        <?php
           $pcodeErr = $emailErr = $numberErr = "";
           $email = $pcode = $number = "";
            
             if (empty($_POST["email"])) {
               $emailErr = "Email is required";
             } else {
               $email = test_input($_POST["email"]);
               // check if e-mail address is well-formed
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                 $emailErr = "Invalid email format";
               }
             }
               
             if (empty($_POST["number"])) {
               $number = "";
             } else {
               $number = test_input($_POST["number"]);
               // check if URL address syntax is valid
               if (!preg_match('/^[0-9]*$/',$number)) {
                 $numberErr = "Invalid URL";
               }    
             }
             
             function test_input($data) {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
            }
           
             echo ($email);
             echo($number);

        ?>
    </head>
</html>