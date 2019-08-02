<?php

if(isset($_POST['loginButton'])) {
        // ¨Login button is pressed

 $username = $_POST['loginUsername'];
 $password = $_POST['loginPassword'];

 $result = $account->login($username, $password);

 if($result == true) {
     $_SESSION['userLoggedin'] = $username;
    header("Location: index.php");
 }

//  Login function

} 



?>