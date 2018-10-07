<?php 
session_start();
if(isset($_POST['cerrarSesion'])){
    unset($_SESSION['usuario']);
    header('Location: index.php');
}
?>

<?php if(isset($_SESSION['usuario'])) { ?>
<?php include 'partials/header.php' ?>

    <div class="container">
        <div class="row mt-3 justify-content-md-center">
            <div class="col-md-6">
                <h1>Hola, bienvenido <?php echo '<strong>'.$_SESSION['usuario'].'</strong>'; ?></h1>
            </div>

            </div>
                <div class="row mt-3 justify-content-md-center">
                    <form action="" method="POST">
                    <button type="submit" class="btn btn-primary btn-block" name="cerrarSesion"> Cerrar Sesion </button>
                    </form>
                </div>
    </div>

<?php include 'partials/footer.php'; ?>
<?php }else{ 
    header('Location: index.php');
 } ?>