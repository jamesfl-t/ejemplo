<?php
$res = array('respuesta' => false);
$clave = $_POST['valor'];

//echo"tu clave ".$clave;

$sql = new MySQLi('localhost','root', '', 'pruebas');
$q = "SELECT * FROM usuarios WHERE clave = '".$clave."'";
$con = $sql->Query($q);
$contar = $con->num_rows;    

if ($contar > 0) {
   $info = $con->fetch_object();

   $res = array('respuesta' => true, 'info' => $info);

}
print_r(json_encode($res));
?>