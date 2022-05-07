
<?php include ("template/header.php"); ?>

<div class="col-md-12">
    <div class="jumbotron">
        <h3 class="display-3">Welcome <?php echo $nombreUsuario;?></h3>
        <p class="lead">We go to the books admin</p>
        <hr class="my-2">
       
       <?php echo date("Y-m-d");?>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="section/productos.php" role="button">Books Admin</a>
        </p>
    </div>
</div>

<?php include ("template/footer.php"); ?>
