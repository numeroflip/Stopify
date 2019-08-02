<?php


function sanitazeFormPassword($inputText) {
    $inputText = strip_tags($inputText);
    return $inputText;
}
function sanitazeFormUsername($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    return $inputText;
}
function sanitazeFormString($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    $inputText = ucfirst(strtolower($inputText));
    return $inputText;
}






if(isset($_POST['registerButton'])) {
    $username = sanitazeFormUsername($_POST['username']);  
    $firstname = sanitazeFormString($_POST['firstname']);
    $lastname = sanitazeFormString($_POST['lastname']);
    $email = sanitazeFormString($_POST['email']);
    $email2 = sanitazeFormString($_POST['email2']);
    $password = sanitazeFormPassword($_POST['password']);
    $password2 = sanitazeFormPassword($_POST['password2']);

    $wasSuccessful = $account->register($username, $firstname, $lastname, $email, $email2, $password, $password2 );

    if($wasSuccessful) {
        $_SESSION['userLoggedin'] = $username;

        header("Location: index.php");
    }
    
} 


?>