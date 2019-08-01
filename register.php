<?php
    include("includes/config.php");
    include("includes/classes/Account.php");
    include("includes/classes/Constants.php");

    $account = new Account($con);

    include("includes/handlers/register-handler.php");
    include("includes/handlers/login-handler.php");

    function getInputValue($name) {
        if(isset($_POST[$name])) {
            echo $_POST[$name];

        }
    }
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
        <?php echo $account->getError(Constants::$userNameChars); ?>
        <?php echo $account->getError(Constants::$userNameTaken); ?>
        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username" placeholder="e.g. Homer J. Simpson" value='<?php getInputValue("username") ?>' required>
    </p>
    <p>
        <?php echo $account->getError(Constants::$firstNameChars); ?>

        <label for="firstname">First name:</label><br>
        <input type="text" name="firstname" id="firstname" placeholder="e.g. Homer " value='<?php getInputValue("firstname") ?>'  required>
    </p>
    <p>
        <?php echo $account->getError(Constants::$lastNameChars); ?>

        <label for="lastname">Last name:</label><br>
        <input type="text" name="lastname" id="lastname" placeholder="e.g. Simpson" value='<?php getInputValue("lastname") ?>'  >
    </p>
    <p>
        <?php echo $account->getError(Constants::$emailInvalid); ?>
        <?php echo $account->getError(Constants::$emailsDoNoMatch); ?>
        <?php echo $account->getError(Constants::$emailTaken); ?>

        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" placeholder="e.g. homer@gmail.com" value='<?php getInputValue("email") ?>'  required>
    </p>
    <p>        
        <label for="email2">Confirm email:</label><br>
        <input type="email2" name="email2" id="email2" placeholder="e.g. homer@gmail.com" value='<?php getInputValue("email2") ?>'  required>
    </p>
    <p>
        <?php echo $account->getError(Constants::$passwordsDoNoMatch); ?>
        <?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>

        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password" placeholder="Your password"  required>
    </p>
    <p>
        <label for="password2">Password:</label><br>
        <input type="password" name="password2" id="password2" placeholder="Your password"  required>
    </p>
    <button type="submit" name="registerButton">Sign up</button>
    </form>
  
</div>
    
</body>
</html>