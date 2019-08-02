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
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,600,500,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="includes/assets/css/register.css">

    

</head>
<body>
  

    <!-- -----------------------------------------LOGIN HTML PART ----------------------------------------------------- -->
    <div  id="loginForm" class="login" >
            
             <h1 class="login__hero">Stopify</h1>
            <button class="btn login__fb-btn">Log in with Facebook</button>
            <p class="login__or">Or</p>

                <form action="register.php" class="login__form" method="POST" id="loginForm">
                    <p class="input-cont">
                        
                        <input class="input" type="text" name="loginUsername" id="loginUsername" placeholder="Username" value='<?php getInputValue("loginUsername") ?>' required>
                        <?php echo $account->getError(Constants::$loginFailed); ?>
                        
                    </p>
                   
                    <p class="input-cont">
                    
                    <input class="input input-1" type="password" name="loginPassword" id="loginPassword" placeholder="Password" required>
                    </p>
                    <div class="login__rem-cont">
                        <label for="rem-radio" class="login__rem-cont--rem-p">Remember me</label>
                        <input type="checkbox" class="login__radio" id="rem-radio">
                    </div>
                    <button type="submit" name="loginButton" class="btn login__btn">Log in</button>
                </form>

        
            <ul class="links">
                <li class="link"><a href="#" class="link hasAccountText" id="hideLogin">Sign up</a></li>
                <li class="link"><a href="#" class="link">Reset Password</a></li>
                <li class="link"><a href="#" class="link">Settings</a></li>
            </ul>
      
    </div>

        <!-- -----------------------------------------REGISTER HTML PART ----------------------------------------------------- -->

    <div id="registrationForm" class="regForm login">

        <h1 class="login__hero">Stopify</h1>
        <form action="register.php" id="registerForm" method="POST" hidden>
            <h2>Create your free account</h2>
            <p class="input-cont">
                <label for="username">Username:</label>
                <input class="input" type="text" name="username" id="username"  value='<?php getInputValue("username") ?>' required>
                <?php echo $account->getError(Constants::$userNameChars); ?>
                <?php echo $account->getError(Constants::$userNameTaken); ?>
            </p>
            <p class="input-cont">
                
                <label for="firstname">First name:</label>
                <input class="input" type="text" name="firstname" id="firstname" value='<?php getInputValue("firstname") ?>'  required>
                <?php echo $account->getError(Constants::$firstNameChars); ?>
            </p>
            <p class="input-cont">
                
                <label for="lastname">Last name:</label>
                <input class="input" type="text" name="lastname" id="lastname"  value='<?php getInputValue("lastname") ?>'  >
                <?php echo $account->getError(Constants::$lastNameChars); ?>
            </p>
            <p class="input-cont">
               

                <label for="email">Email:</label>
                <input class="input" type="email" name="email" id="email"  value='<?php getInputValue("email") ?>'  required>
                <?php echo $account->getError(Constants::$emailInvalid); ?>
                <?php echo $account->getError(Constants::$emailsDoNoMatch); ?>
                <?php echo $account->getError(Constants::$emailTaken); ?>
            </p>
            <p class="input-cont">        
                <label for="email2">Confirm email:</label>
                <input class="input" type="email2" name="email2" id="email2"  value='<?php getInputValue("email2") ?>'  required>
            </p>
            <p class="input-cont">
                

                <label class="login__label" for="password">Password:</label>
                <input class="input" type="password" name="password" id="password"   required>
                <?php echo $account->getError(Constants::$passwordsDoNoMatch); ?>
                <?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
            </p>
            <p class="input-cont">
                <label for="password2">Confirm password:</label>
                <input class="input" type="password" name="password2" id="password2"   required>
            </p>
            <button type="submit" class="btn login__btn" name="registerButton">Sign up</button>
        </form>
        
            <ul class="links">
                <li class="link"><a href="#" class="link hasAccountText" id="hideReg">Log in</a></li>
                <li class="link"><a href="#" class="link">Settings</a></li>
            </ul>
        
    </div>
    <script>document.getElementById("registrationForm").style.display = "none";
        document.getElementById("loginForm").style.display = "none";</script>
 <!-- ----------------------Checks if you pushed the register button, and send you back to register, not login in that case -->
    <?php 
    if(isset($_POST['registerButton'])) {
        echo '<script>document.getElementById("registrationForm").style.display = "flex";
        document.getElementById("loginForm").style.display = "none";</script>';
      
    } else {
        echo '<script>document.getElementById("registrationForm").style.display = "none";
        document.getElementById("loginForm").style.display = "flex";</script>';
      
    }
    ?>
    <script src="includes/assets/js/register.js"></script>
</body>

</html>