 
          
        <div class="cont_all">
            
              
                <div class="cont_img" >
                    
                </div>

                <div class="cont_form">


                      <h1 class="titulo">Olvidaste tu contraseña?</h1>

                      <form method="post"   >

                              <label>Ingresa tu correo electrónico</label>
                              <input type="email" class="inputs" id="pass_email" name="pass_email" required>

                              <div class="btns">
                                    <input  class="btn" type="submit" value="SEND"> 
                              </div>

                              <?php
                                    $password = new UsuariosController();
                                    $password -> ctrOlvidoPassword();
                              ?>

                      </form>  


                </div> 
       
        </div>
        
