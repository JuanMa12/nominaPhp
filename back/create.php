 <?php
require_once( "../clases/User.php" );

$objClases = new Clases();

$respuesta = $objClases->registro( $_POST["name"], $_POST["last_name"], $_POST["cc"], $_POST["phone"]
	                               , $_POST["salary"]);

if( $respuesta == 1 ){
 echo "<h2>Registro Exitoso</h2>";
}else{
 echo "<h2>Error al Registrar los Datos</h2>";
}
?>

