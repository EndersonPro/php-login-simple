<?php 


    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(empty($username) || empty($password)){
            echo '<div class="alert alert-danger">Nombre de usuario o contraseña vacio</div>';
        }else{
            $user = new User;

            if($user->getUser($username,$password)){
                session_start();
                $_SESSION['usuario'] = $username;
                header('Location: welcome.php');
            }else{
             echo '<div class="alert alert-danger">Usuario no existe</div>';
            }
        }

    }