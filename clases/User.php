<?php

require_once ("../Conexion.php");

class User
{
  //registro usuario
      public function registro( $name,$last_name,$cc,$phone,$salary)
      {
        $sql="INSERT INTO users (name,last_name,cc,phone,salary) 
        VALUES ('".$name."', '".$last_name."', '".$cc."', '".$phone."', '".$salary."')";
        $res=mysql_query( $sql, Conectar::con() );
              if( $res  != 1 )
              {
               return 0;
              }else{   
               return 1; 
               
              }
       }
  
       public function consulta($cc)
      {
        $sql="SELECT * FROM users WHERE cc='".$cc."'";
        $res=mysql_query( $sql, Conectar::con() );
              if( mysql_num_rows( $res ) == 0 ){  
                     return 0;
                    }else{
                     if( $reg = mysql_fetch_array( $res ) ){
                      
                      $_SESSION["name"] = $reg["name"];
                      $_SESSION["last_name"] = $reg["last_name"];
                      $_SESSION["cc"] = $reg["cc"];
                      $_SESSION["phone"] = $reg["phone"];
                      $_SESSION["salary"] = $reg["salary"];
                      return 1; 
                     }}
       }

}
?>