<?php

 include('conexion.php');
       
?> 


<!DOCTYPE html>
<html lang="es">
   
   <head>
      <title>Preguntas</title>
      <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1, maximum-scale=1,minimum-scale=1">
      <meta charset="utf-8">
      <link rel="stylesheet" href="#">
       
   </head>
   
   <body>
     
    <header>
           <h1>PREGUNTAS</h1>
    </header>
     
   
     
    <form action="proceso.php" method="post">
    <?php
        $num_pregunta=$_GET['pregunta'];
        $consulta="SELECT * FROM preguntas where id=$num_pregunta";
        $resultado= mysqli_query($conexion,$consulta); //realiza la consulta
         while($row=mysqli_fetch_assoc($resultado))
           { ?>
               
               
               <input type="text" readonly="read_only" name="num_pregunta" value="<?php echo $row["num_pregunta"];?>">
               <p><?php echo $row["pregunta"];?> </p>
               
               <button type="button"><?php echo $row["opcion_1"];?></button>
               <button type="button"><?php echo $row["opcion_2"];?></button>
               <button type="button"><?php echo $row["opcion_3"];?></button>
               <button type="button"><?php echo $row["opcion_4"];?></button>
             <?php
           } 
       
           mysqli_free_result($resultado);
    ?>     
                
        <input type="submit" value="Next">
        
    </form>
      
   
   </body>
    
</html>


      
    
    