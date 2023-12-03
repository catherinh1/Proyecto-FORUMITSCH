<?php include("template/cabecera.php");?>
<?php include("conexion/conexion.php");?>
<div>
    <div>
        <h2>Muestra las Noticias insertadas</h2>
        <hr>
        <?php 

        //Obtenemos las variables

       $categoria=(isset($_POST['txtCategoria']))?$_POST['txtCategoria']:"";
       $titulo=(isset($_POST['txtTitulo']))?$_POST['txtTitulo']:"";
       $descripcion=(isset($_POST['txtDescripcion']))?$_POST['txtDescripcion']:"";
       $imagen=(isset($_FILES['txtImagen']['name']))?$_FILES['txtImagen']['name']:"";
       $accion=(isset($_POST['accion']))?$_POST['accion']:"";
       $fecha = new DateTime();
       $nombreArchivo=($imagen!="")?$_FILES["txtImagen"]["name"]:"imagen.jpg";

       $tmpImagen = $_FILES["txtImagen"]["tmp_name"];

       if($tmpImagen!=""){
        move_uploaded_file($tmpImagen,"../img/".$nombreArchivo);
       }
       

        ?>

        <h2>Datos Recibidos</h2>
        <hr>
        <p>Se ingresaron los siguientes datos</p>
        <?php 
        //Se muestran los datos recibidos <h3>$id</h3>
        echo "
            <h3>$categoria</h3>
            <h3>$titulo</h3>
            <h3>$descripcion</h3>
            <h3>$imagen</h3>";


        //Se realiza la insercion de los datos de las noticias
        $cons = insert(
               'noticias',
               "NULL,'$categoria','$titulo','$descripcion','$imagen' ");
        if($cons){
        ?>
             <p>La noticia se ha agregado correctamente a la Base de Datos</p>
             <meta http-equiv="refresh" content="5; URL=index.php">
        <?php
        } else {
        ?>
                <p>El producto no pudo ser insertado a la Base de Datos</p>
        <?php
        }
        ?>        
    </div>
</div>
<?php include("template/pie.php");?>