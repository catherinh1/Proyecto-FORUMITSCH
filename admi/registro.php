<?php include("template/cabecera.php"); ?>
<?php include("conexion/conexion.php");?>

<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            Registro de noticias
        </div>
        <div class="card-body">
            <!-- Inicio del form -->
            <form method="POST" enctype="multipart/form-data" id="form1" onsubmit="return validarForm" action="alta_noticia.php">
            <!-- enctype="multipart/form-data" recepciona los archivos png -->
            <div class="form-group">
                <label for="txtCategoria">Categoria</label>
                <input type="text" class="form-control" name="txtCategoria" id="txtCategoria" placeholder="Categoria de la Noticia" onkeyup="javascript:this.values=this.value.toUpperCase();">
            </div>
            <div class="form-group">
                <label for="txtTitulo">Titulo:</label>
                <input type="text" class="form-control" name="txtTitulo" id="txtTitulo" placeholder="Titulo">
            </div>
            <div class="form-group">
                <label for="txtDescripcion">Descripción:</label>
                <input type="text" class="form-control" name="txtDescripcion" id="txtDescripcion" placeholder="Descripcion">
            </div>
            <div class="form-group">
                <label for="txtImagen">Imagen:</label>
                <input type="file" class="form-control" name="txtImagen" id="txtImagen" placeholder="Imagen de la noticia">
            </div>
            <div class="btn-group" role="group" aria-label="">
                <button type="submit" name="accion" value="Agregar" class="btn btn-success">Agregar</button>
            </div>
            </form>
        </div>
    </div>
</div>
<br>
<?php
$result =select("noticias","*");
?>
<div class="col-md-12">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Categoria</th>
                <th>Titulo</th>
                <th>Descripcion</th>
                <th>Imagen</th>
            </tr>
        </thead> 
        <!-- Se hace la coneccion de la tabla -->
        <tbody>
            <?php 
            if(mysqli_num_rows($result) > 0){
                while ($row = mysqli_fetch_object($result)){
                    ?>

                    <tr>
                    <td><?php echo $row->id ?></td>
                <td><?php echo $row->categoria ?></td>
                <td><?php echo $row->titulo ?></td>
                <td><?php echo $row->descripcion ?></td>
                <td><img src="../img/<?php echo $row->imagen; ?>" width="75" alt="">
                   
                </td>
                 <td>  
                    <a href="modificar_noticias.php?id=<?php echo  
                    $row->id; ?>" class="btn btn-warning" >Modificar</a>
                    <a href="eliminar_noticia.php?id=<?php echo
                    $row->id; ?>" onclick="return confirmation()" class="btn btn-danger">Eliminar</a>
                    <hr>
                    
                </td> 
                    </tr>
                    <?php
                }
            } else {
                echo "no hay ningun registro";
            }
            ?>
        </tbody>
    </table>
</div>

<?php include("template/pie.php");?>