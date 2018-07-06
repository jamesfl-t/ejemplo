<?php
include_once('includes/head.php');
require('cnn.php');
?>
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

<!--habilitar boton si se encuentra un registro-->
<div class="container" id="">
   <label for="">Ingresar clave</label>
   <div id="msgUsuario"></div>
   <div class="form-inline" name="busqueda" id="formulario">
      <div class="form-group mb-2">
         <input type="text" class="form-control" id="clave" placeholder="Clave" name="clave">
      </div>
      <button class="btn btn-primary mb-2  mx-sm-3 " id="buscar" onclick="return false;">Buscar  <span class="fas fa-search"></span></button>
   </div>
   <br>
</div>
<div class="container" id="resultado">
   <button type="button" class="btn btn-primary btn-lg btn-block" id="pba" disabled="true">Guardar Cambios</button>
</div>
<!--fin habilitar boton-->

<?php
include_once('includes/footer.php');
?>