<?php

    session_start();
    
    $errors = [
        'login' => $_SESSION['LOGIN_ERROR'] ?? '',
        'register' => $_SESSION['REGISTER_ERROR'] ?? '',
    ];
    $activeForm = $_SESSION['ACTIVE_FORM'] ?? 'login';

    session_unset();

    function showError($error) {
        return !empty($error) ? "<p class='error-message'>$error</p>" : '';
    }

    function isActiveForm($formName, $activeForm) {
        return $formName === $activeForm ? 'active' : '';
    }
       
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="loginRegister.css" >
    
</head>
<body>


    <div class="nav__header">
        <nav>
            <div class="navbar__logo">
                <a href="#" class="logo">Campus<span>Hire</span></a>
            </div>

            <div class="nav__menu__btn" id="menu-btn">
                <i class="ri-menu-line"></i>
            </div>

            <ul class="nav-links" id="nav-links">
                <li><a href="../index.php#home">Home</a></li>
                <li><a href="../index.php#about">About</a></li>
                <li><a href="../index.php#jobs">Jobs</a></li>
                <li><a href="../index.php#service">Services</a></li>
                <li><a href="../index.php#client">Client</a></li>
                <li><a href="../index.php#contact">Contact</a></li>
            </ul>
        </nav>
    </div>





    








    
    <div class = "container">
        <!--Login Form-->
        <div class="form-box <?= isActiveForm('login', $activeForm) ?>" id = "login-form">
            <form action="action.php" method = "post">
                <h2>Login</h2>
                <?= showError($errors['login']); ?>
                <input type="email" name ="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>

                <button type="submit" name = "login">Login</button>

                <p class="message">Don't have an account? <a href="#" onclick="showFprm('register-form')">Register</a></p>
            </form>
        </div>


        <!--Register Form-->
        <div class="form-box <?= isActiveForm('register', $activeForm) ?>" id = "register-form">
            <form action="action.php" method = "post">
                <h2>Register</h2>
                <?= showError($errors['register']); ?>
                <input type="text" name ="name" placeholder="Name" required>
                <input type="email" name ="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>

                <select name="role" required>
                    <option value="">Select Role</option>
                    <option value="student">Student</option>
                    <option value="professor">Professor</option>  
                    <option value="company">Company</option>
                </select>

                <button type="submit" name = "register">Register</button>
                <p class="message">Already have an account? <a href="#" onclick="showFprm('login-form')">Login</a></p>
            </form>
        </div>
    </div>
        

    <script src="loginRegister.js"></script>
</body>
</html>