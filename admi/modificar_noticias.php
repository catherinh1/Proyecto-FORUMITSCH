<?php include("template/cabecera.php") ?>
<?php include("conexion/conexion.php");?>
<div>
    <div>
        <h1>Modificar Noticia</h1>
        <hr>
        <?php 
        echo "Este es el Id de la Noticia ha Modificar = " . $_GET['id'];
        //Invocamos el function, select y la tabla
        $result = select_id("noticias","id", $_GET['id']);
        //Se realiza un bucle para mostrar un resultado
        if(mysqli_num_rows($result) > 0 )  {
            while($row = mysqli_fetch_object($result)) {
        ?>
         <div class="card-body">
<!-- Inicio del form -->    
<form method="POST" enctype="multipart/form-data" id="form1" onsubmit="return validarForm" action="actualizar_producto.php" > <!-- enctype="multipart/form-data" recepciona los archivos png -->
<table>
    <div class = "form-group">
    <label for="txtCategoria">Categoria:</label>
    <input type="text" class="form-control" name="txtId" id="txtId" placeholder="Categoria de la noticia" onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row->id; ?>" hidden />
    <input type="text" class="form-control" name="txtCategoria" id="txtCategoria" placeholder="Categoria de la Noticia" onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $row->categoria; ?>"/>
    </div>

    <div class = "form-group">
    <label for="txtTitulo">Titulo:</label>
    <input type="text" class="form-control" name="txtTitulo" id="txtTitulo" placeholder="Titulo de la noticia" value="<?php echo $row->date; ?>"/>
    </div>

    <div class = "form-group">
    <label for="txtDescripcion">Descripcion:</label>
    <input type="text" class="form-control" name="txtDescripcion" id="txtFecha" placeholder="Descripcion de la noticia" value="<?php echo $row->date; ?>"/>
    </div>

    <div class = "form-group">
    <label for="txtImagen">Imagen:</label>
    <input type="file" class="form-control" name="txtImagen" id="txtImagen" placeholder="Imagen de la noticia"/>
    </div>

    <div class="btn-group" role="group" aria-label="">
        <button type="submit" name="accion" value="Actualizar" class="btn btn-success">Actualizar</button>
    </div>
</form>
    </div>
            <tr>
                <td><?php echo $row->id ?></td>
                <td><?php echo $row->nombre ?></td>
                <td><?php echo $row->fecha ?></td>
                <td><img src="../img/<?php echo $row->imagen; ?>" width="75" alt="">
            </tr>
        <?php

            }
        } else {
            echo "No hay ningun Registro";
        }
        ?>
        </table>
    </div>
</div>
<?php include("template/pie.php") ?>