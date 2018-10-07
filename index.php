<?php 
session_start();
    if($_SESSION['usuario']){
        header('Location: welcome.php');
    }

include 'Database/Db.php';
include 'UserModel.php';
include 'UserController.php';

?>

<?php include 'partials/header.php'?>

<div class="container">
    <div class="row mt-3 justify-content-md-center">
        <div class="col-md-6">
            <form action="" method="POST">
                <div class="form-group">
                <label for="username">Nombre:</label>
                    <input class="form-control" name="username" placeholder="Nombre" value="enderson" type="text">
                </div>
                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input class="form-control" name="password" value="1234" type="password">
                </div>
                <button type="submit" name="submit" class="btn btn-sm btn-block btn-primary">Iniciar Sesion</button>
            </form>
        </div>
    </div>
</div>


<?php include 'partials/footer.php'?>
