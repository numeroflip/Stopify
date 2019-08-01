<?php
    include("includes/classes/Account.php");

    $account = new Account();

    include("includes/handlers/register-handler.php");
    include("includes/handlers/login-handler.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to </title>
</head>
<body>

<div class="" id="inputContainer">
    <!-- -----------------------------------------LOGIN HTML PART ----------------------------------------------------- -->

    <form action="register.php" id="loginForm" method="POST">
    <h2>Login to your account</h2>
    <p>
        <label for="loginUsername">Username:</label><br>
        <input type="text" name="loginUsername" id="loginUsername" placeholder="e.g. Homer J. Simpson" required>
    </p>
    <p>
        <label for="loginPassword">Password:</label><br>
        <input type="password" name="loginPassword" id="loginPassword" placeholder="Your password" required>
    </p>
    <button type="submit" name="loginButton">Log in</button>
    </form>


    <!-- -----------------------------------------REGISTER HTML PART ----------------------------------------------------- -->

    <form action="register.php" id="registerForm" method="POST">
    <h2>Create your free account</h2>
    <p>
        <?php echo $account->getError("Your username must be between 5 and 25 characters"); ?>
        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username" placeholder="e.g. Homer J. Simpson" required>
    </p>
    <p>
        <?php echo $account->getError("Your first name must be between 2 and 25 characters"); ?>

        <label for="firstname">First name:</label><br>
        <input type="text" name="firstname" id="firstname" placeholder="e.g. Homer " required>
    </p>
    <p>
        <?php echo $account->getError("Your last name must be between 2 and 25 characters"); ?>

        <label for="lastname">Last name:</label><br>
        <input type="text" name="lastname" id="lastname" placeholder="e.g. Simpson" >
    </p>
    <p>
        <?php echo $account->getError("Your emails don't match"); ?>
        <?php echo $account->getError("Email is invalid"); ?>

        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" placeholder="e.g. homer@gmail.com" required>
    </p>
    <p>        
        <label for="email2">Confirm email:</label><br>
        <input type="email2" name="email2" id="email2" placeholder="e.g. homer@gmail.com" required>
    </p>
    <p>
        <?php echo $account->getError("Your passwords don't match"); ?>
        <?php echo $account->getError("Your passwords can only contain numbers and letters"); ?>

        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password" placeholder="Your password" required>
    </p>
    <p>
        <?php echo $account->getError("Your username must be between 5 and 25 characters"); ?>

        <label for="password2">Password:</label><br>
        <input type="password" name="password2" id="password2" placeholder="Your password" required>
    </p>
    <button type="submit" name="registerButton">Sign up</button>
    </form>
  
</div>
    
</body>
</html>