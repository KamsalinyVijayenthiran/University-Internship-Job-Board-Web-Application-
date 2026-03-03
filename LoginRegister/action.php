<?php

    session_start();
    require_once 'config.php';

    if(isset($_POST['register'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $role = $_POST['role'];

        $checkEmail = $conn->query("SELECT email FROM student WHERE email='$email' ");
        if($checkEmail->num_rows > 0) {
           $_SESSION['REGISTER_ERROR'] = 'Email already Registered.';
           $_SESSION['ACTIVE_FORM'] = 'register';
        }else{
            $conn->query("INSERT INTO student (name, email, password, role) VALUES ('$name', '$email', '$password', '$role')");
        }

        header("Location: LoginRegister.php");
        exit();
    }



    if(isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $result = $conn->query("SELECT * FROM student WHERE email='$email' ");
        if($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if(password_verify($password, $user['password'])) {
                $_SESSION['name'] = $user['name'];
                $_SESSION['email'] = $user['email'];

                if($user['role'] == 'student') {
                    header("Location: student_dashboard.php");
                }elseif($user['role'] == 'professor') {
                    header("Location: professor_dashboard.php");
                }elseif($user['role'] == 'company') {
                    header("Location: company_dashboard.php");
                }
                exit();
            }
        }

        $_SESSION['LOGIN_ERROR'] = 'Invalid email or password.';
        $_SESSION['ACTIVE_FORM'] = 'login';
        header("Location: LoginRegister.php");
        exit();
    }

?>