<?php
require('config.php');
include_once('includes/head.php');

if (isset($_POST['guardarCambios'])) {

   $id = $_POST['clave'];
   $dir = $_POST['direccion'];
   $tel = $_POST['telefono'];
   $correo = $_POST['e-mail'];

   $sqls = "UPDATE usuarios set direccion ='".$dir."',telefono = '".$tel."',correo ='".$correo."'where claves = '".$id."'";
   $con = $sql->Query($sqls);
   $rec = header('Location: index.php'); 
   exit('Los registros se actualizaron exitosamente '+$rec);

}

if (isset($_POST['insertar'])) {

   $id = $_POST['clave'];
   $nom = $_POST['nombre'];
   $dir = $_POST['direccion'];
   $tel = $_POST['telefono'];
   $correo = $_POST['correo'];
   $qry = "INSERT INTO usuarios (claves, nombre, direccion, telefono, correo) VALUES ('".$id."','".$nom."','".$dir."','".$tel."','".$correo."')";
   //$sqls = "UPDATE usuarios set direccion ='".$dir."',telefono = '".$tel."',correo ='".$correo."'where claves = '".$id."'";
   $con = $sql->Query($qry); 
//exit();

}
?>

<!--habilitar boton si se encuentra un registro-->
<div class="container" id="usuario">
   <strong><label for="" id="etiqueta">Ingresar clave</label></strong>
   <div><label>Nombre: <span id="msgUsuario"></span></label></div>
   <form method="post">
      <div class="form-inline" name="busqueda" id="formulario">
         <div class="form-group mb-2">
            <input type="text" class="form-control" id="clave" placeholder="Clave" name="clave" autocomplete="off">
            <!--<span class="far fa-check-circle"></span>-->
         </div>
         <button class="btn btn-primary mb-2  mx-sm-3 " id="buscar" onclick="return false;">Buscar  <span class="fas fa-search"></span></button>
         <button type="button" class="btn btn-success mb-2  mx-sm-3 " id="nuevo" data-toggle="modal" data-target="#exampleModalCenter">Agregar nuevo  <span class="fas fa-plus"></span></button>
      </div>
      <div class="form-group">
         <label for="">Direccion:</label>
         <input type="text" class="form-control" id="direccion" placeholder="direccion" name="direccion" autocomplete="off">
      </div>
      <div class="form-group">
         <label for="">Telefono</label>
         <input type="text" class="form-control" id="telefono" placeholder="telefono" name="telefono" autocomplete="off">
      </div>
      <div class="form-group">
         <label for="">E-mail</label>
         <input type="text" class="form-control" id="e-mail" placeholder="e-mail" name="e-mail" autocomplete="off">
      </div>
      <div id=""><span id="exito"></span></div>
      <br>
      <div class="container" id="resultado">
         <button type="submit" class="btn btn-primary btn-lg btn-block" id="pba" disabled="true" name="guardarCambios">Guardar Cambios</button>
      </div>
   </form>



</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title text-muted" id="exampleModalLongTitle">Agregar nuevo registro</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>

         <div class="modal-body">
            <form name="" action="" method="post">
               <!--<table>-->
                  <tr>
                     <div class="form-group">
                        <label for="formGroupExampleInput">Clave</label>
                        <input name="clave" type="text" class="form-control" id="clave1" placeholder="Clave" autocomplete="off">
                     </div>
                  </tr>
                  <tr>
                     <div class="form-group">
                        <label for="formGroupExampleInput">Nombre</label>
                        <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre" autocomplete="off">
                     </div>
                  </tr>
                  <tr>
                     <div class="form-group">
                        <label for="formGroupExampleInput2">Direccion</label>
                        <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Direccion" autocomplete="off">
                     </div>
                  </tr>
                  <tr>
                     <div class="form-group">
                        <label for="formGroupExampleInput3">Telefono</label>
                        <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Telefono" autocomplete="off">
                     </div>
                  </tr>
                  <tr>
                     <div class="form-group">
                        <label for="formGroupExampleInput4">Correo</label>
                        <input name="correo" type="text" class="form-control" id="correo" placeholder="Correo" autocomplete="off">
                     </div>
                  </tr>
                  <tr>
                     <!--<td><label><input type="submit" name="Submit" value="Grabar" /></label></td>-->
                     <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" name="insertar" value="" class="btn btn-primary">Guardar cambios</button>
                     </div>
                  </tr>
                  <!--</table>-->
            </form>
         </div>
      </div>
   </div>
</div>

   <!--fin habilitar boton-->



   <!--clonar elementos de un formulario-->
   <div class="container">
      <form> 
         <br>
         <div class="form-group" id="lista">
            <label for="exampleInputEmail1">Departamentos</label>

            <select class="form-control" id="com">
               <option>tecnologia</option>
               <option>ventas</option>
               <option>soporte</option>
               <option>nomina</option>
            </select>
         </div>

         <button type="submit" class="btn btn-primary">Submit</button>
      </form>
   </div>
   <br><br>
   <div class="container">
      <button type="button" class="btn btn-sm btn-primary fas fa-plus"  onclick="clonar()"></button>
      <button type="button" class="btn btn-secondary btn-sm fas fa-minus"  onclick="remover()"></button>
   </div><br><br>
   <!--fin clonar-->
   <!--copiar texto de input en textarea-->
   <div class="container">
      <form method="POST">
         <div class="form-group">
            <label for="">Agregar texto</label>
            <input class="form-control" type="text" name="" id="pasa" autocomplete="off"><br>


            <textarea class="form-control" id="texto">

            </textarea>
         </div>
      </form>
   </div>
   <!--fin copiar-->
   <?php

   include_once('includes/footer.php');
   ?>