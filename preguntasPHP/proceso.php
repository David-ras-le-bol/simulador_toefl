<?php
include('conexion.php');

$np=$_POST['num_pregunta'];
echo $np;
$num_pregunta=intval( $np );  
$preguntas_t=Preguntas_Totales($conexion);
echo "Total de preguntas  ". $preguntas_t;



//muestra las preguntas restantes
    
        //incremento el numero de pregunta
        if($num_pregunta<$preguntas_t){
            
            $num_pregunta=$num_pregunta+1;
            echo $num_pregunta;
           
            header("Location: preguntas.php?pregunta=$num_pregunta");
            
            
        }else{
            
            header('Location: final.php');
        }
       

         

      
        


//...........FUNCIONES..............................

function Preguntas_Totales($conexion){
    
        //Calcula en numero de preguntas totales registradas en la BD
         $consultaPT="SELECT * FROM preguntas ";
         $resultadoPT= mysqli_query($conexion,$consultaPT); //realiza la consulta
         $total_preguntas=mysqli_num_rows($resultadoPT);
         
         mysqli_free_result($resultadoPT);
         return $total_preguntas;
}
               



?>