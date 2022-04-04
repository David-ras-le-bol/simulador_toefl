
        
       <div class="cont_all">
             
            <div class="cont_img">
                  
            </div>
              
              
            <div class="cont_form">
                  

                      <form method="post">
                            
                            <h1 class="titulo">Crear nuevo usuario</h1>

                            <label>Nombre</label>
                            <input type="text" class="inputs" name="nombre" required>

                            <label>Apellido</label>
                            <input type="text" class="inputs" name="apellido" required>

                            <label>Correo electrónico</label>
                            <input type="email" class="inputs" name="email" required>

                             <label>Contraseña</label>
                            <input type="password" class="inputs" name="password" required>

                           <div class="btns">
                               <input  class="btn" type="submit" value="REGISTRAR"> 
                           </div>

                           <?php
                                $registro = new UsuariosController();
                                $registro -> registroUsuarioCtr();
                           ?>

                       </form>

               
            </div>
           
        
           
       </div> 
