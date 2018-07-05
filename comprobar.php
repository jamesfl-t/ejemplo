<?php
      $user = $_POST['b'];
       
      if(!empty($user)) {
            comprobar($user);
      }
       
      function comprobar($b) {
            $con = mysql_connect('localhost','root', '');
            mysql_select_db('pruebas', $con);
       
            $sql = mysql_query("SELECT * FROM usuarios WHERE clave = '".$b."'",$con);
             
            $contar = mysql_num_rows($sql);
             
            if($contar == 0){
                 

            }else{

                  
                  
            }
      }     
?>