<?php include("template/cabecera.php") ?>
<?php include("conexion/conexion.php");?>
<div>
    <div>
        <h1> Eliminar Noticia</h1>
        <hr>
        <?php 
        echo 'Este es el Id recibido = ' . $_GET['id']; // mostramos el id que se desea eliminar
        //Invocamos del function el select y la tabla
        $result = select_id("noticias","id", $_GET['id']);
        //Realizamos un bucle que muestra el resultado
        if (mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_object($result)) {
        ?>
        <h3>Datos a Eliminar</h3>
        <p>id: <?php echo $row->id; ?></p>
        <p>Categoria: <?php echo $row->categoria; ?></p>
        <p>Titulo: <?php echo $row->titulo; ?></p>
        <p>Descripcion: <?php echo $row->descripcion; ?></p>
        <p>Imagen: <?php echo $row->imagen; ?></p>
        <?php
            }
            $result = delete("noticias","id", $_GET['id']);
        } else {
            echo "El registro no existe";
        }
        ?>
         <meta http-equiv="refresh" content="5; URL=registro.php">
    </div>
</div>
<?php include("template/pie.php") ?>