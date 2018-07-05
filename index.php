<?php
   include_once('includes/head.php');
   require('cnn.php');
?>

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

   <div class="container">
    <form>
      <div class="form-group">
         <label for="">Agregar texto</label>
         <input class="form-control" type="text" name="" id="pasa" autocomplete="off"><br>
         
      
         <textarea class="form-control" id="texto">
           
         </textarea>
      </div>
    </form>
   </div>

   <div class="container" id="">
      <label for="">Ingresar clave</label>
      <form class="form-inline">

        <div class="form-group mb-2">
          
          <input type="text" class="form-control" id="clave" placeholder="Clave" name="clave">
        </div>
        <button type="submit" class="btn btn-primary mb-2  mx-sm-3 " id="buscar">Buscar  <span class="fas fa-search"></span></button>
      </form>
      <br>

    </div>

    <div class="container" id="resultado">
      <button type="button" class="btn btn-primary btn-lg btn-block" id="pba" disabled="true">Guardar Cambios</button>
   </div>

   



<?php
   include_once('includes/footer.php');
?>