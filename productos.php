<?php include ("template/header.php"); ?>

<?php
include ("admin/config/bd.php"); // para leer la información de la Base de Datos

$sentenciaSQL= $conexion->prepare( "SELECT * FROM libros");
$sentenciaSQL->execute();
$listaLibros=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC); // Seleccionamos todo lo que hay en la tabla y fetchAll recupera todo

?>


<!--plantilla para mostrar los libros-->
<?php foreach($listaLibros as $libro ) {?> 
<div class="col-md-2">
    <div class="card">
        <img class="card-img-top" src="./img/<?php echo $libro ['imagen'] ?>" alt="">
        <div class="card-body">
            <h4 class="card-title"><?php echo $libro ['nombre'] ?></h4>
            <a name="" id="" class="btn btn-primary" href="https://www.w3schools.com/" role="button">Tutorials</a>
        </div>
    </div> 
</div>

<?php }?>


<?php include ("template/footer.php"); ?>