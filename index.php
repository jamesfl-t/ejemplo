<?php
require('config.php');
include_once('includes/head.php');
require('cnn.php');
if (isset($_POST['guardarCambios'])) {
  // $res = array('resp' => false);
   $id = $_POST['clave'];
   $dir = $_POST['direccion'];
   $tel = $_POST['telefono'];
   $correo = $_POST['e-mail'];

   $sqls = "UPDATE usuarios set direccion ='".$dir."',telefono = '".$tel."',correo ='".$correo."'where claves = '".$id."'";
   $con = $sql->Query($sqls);


   
   
   exit();
}
?>

<!--habilitar boton si se encuentra un registro-->
<div class="container" id="usuario">
   <strong><label for="">Ingresar clave</label></strong>
   <div><label>Nombre: <span id="msgUsuario"></span></label></div>
   <form method="post" action="index.php">
   <div class="form-inline" name="busqueda" id="formulario">
      <div class="form-group mb-2">
         <input type="text" class="form-control" id="clave" placeholder="Clave" name="clave" autocomplete="off">
      </div>
      <button class="btn btn-primary mb-2  mx-sm-3 " id="buscar" onclick="return false;">Buscar  <span class="fas fa-search"></span></button>
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
      <br>
      <div class="container" id="resultado">
         <button type="submit" class="btn btn-primary btn-lg btn-block" id="pba" disabled="true" name="guardarCambios">Guardar Cambios</button>
      </div>
   </form>
   
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