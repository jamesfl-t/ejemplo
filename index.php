<?php
   include_once('includes/head.php');
?>

   <div class="container">
      <form> 
        <br><br><br>
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
      <button type="button" class="btn btn-sm btn-primary fas fa-plus" style="text-align:right" onclick="clonar()"></button>
      <button type="button" class="btn btn-secondary btn-sm fas fa-minus" style="text-align:right" onclick="remover()"></button>
   </div



<?php
   include_once('includes/footer.php');
?>