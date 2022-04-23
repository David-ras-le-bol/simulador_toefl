<div class="alertReg"></div>
        
<div class="cont_all">
             
     <div class="cont_img"> 
     </div>
          
          
     <div class="cont_form">
               

          <form method="post" onsubmit="return registroUsuario()">
               
               <h1 class="titulo">Crear nuevo usuario</h1>

               <label for="regnombre">Nombre</label>
               <input type="text" class="inputs" name="regNombre" id="regNombre" required>

               <label for="regApellido">Apellido</label>
               <input type="text" class="inputs" name="regApellido" id="regApellido" required>
          
               <label for="regEmail">Correo electrónico <span></span></label>
               <input type="email" class="inputs regEmail" name="regEmail" id="regEmail" required>

               <label for="regPassword">Contraseña</label>
               <input type="password" class="inputs regPassword" name="regPassword" id="regPassword" required>

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
