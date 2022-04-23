/*#######################################################
    Validar email repetido Ajax 
#######################################################*/

let validarEmailRepetido = false;

let rutaOculta = $("#rutaOculta").val();

$("#regEmail").change(function(){

    let email = $("#regEmail").val();

    let datos = new FormData();
    datos.append('validarEmail', email);

    $.ajax({
        url: rutaOculta+"ajax/usuarios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success:function(respuesta){
            
            if(respuesta == "false"){

                $(".alert").remove();
                validarEmailRepetido = false;

            }else{

                let nombre = JSON.parse(respuesta).nombre;

                $(".alertReg").before('<div class="alert alert-warning"><strong>ATENCION:</strong> El correo electronico es utilizado por el usuario: '+nombre+' </div>');

                validarEmailRepetido = true;

            }
            
        }
    });

});

/*#######################################################
    Validar Password Repetida Ajax
#######################################################*/
$("#regPassword").change(function(){

    let password = $("#regPassword").val();

    let datos = new FormData();
    datos.append('validarPassword', password);

    $.ajax({
        url: rutaOculta+"ajax/usuarios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success:function(respuesta){
            
            if(respuesta == "false"){

                $(".alert").remove();

            }else{

                let nombre = JSON.parse(respuesta).nombre;
                let email = JSON.parse(respuesta).email;
                console.log(nombre);

                $(".alertReg").before('<div class="alert alert-warning"><strong>ATENCION:</strong> La contraseña es utilizada por el usuario: '+nombre+' con el correo: '+ email +' </div>');

            }
            
        }
    })

});

/*#######################################################
    Validar el registro de usuarios
#######################################################*/
function registroUsuario(){

    /*Podriamos agregar la validacion de politicas de privacidad*/

    /*###################
    REMOVER ALERTS*/
    $("input").focus(function(){
        $(".alert-warning").remove();
    
    })

    /*###################
    VALIDAR NOMBRE*/
    const nombre = $("#regNombre").val();

    if(nombre != ""){

        const expresion = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9 ]*$/;

        if(!expresion.test(nombre)){

            $(".alertReg").parent().before('<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>ATENCION:</strong> No se permiten caracteres especiales <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>')

            return false;

        }

    }else{

        $(".alertReg").before('<div class="alert alert-warning"><strong>ATENCION:</strong> Necesita agregar un nombre </div>');

        return false;

    }

    /*###################
    VALIDAR APELLIDO*/
    const apellido = $("#regApellido").val();

    if(apellido != ""){

        const expresion = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9 ]*$/;

        if(!expresion.test(apellido)){

            $(".alertReg").parent().before('<div class="alert alert-warning"><strong>ATENCION:</strong> No se permiten caracteres especiales </div>')
            return false;

        }

    }else{

        $(".alertReg").before('<div class="alert alert-warning"><strong>ATENCION:</strong> Necesita agregar un apellido </div>');
        return false;

    }

    /*###################
    VALIDAR EMAIL*/
    const email = $("#regEmail").val();

    if(email != ""){

        const expresion = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

        if(!expresion.test(email)){

            $(".alertReg").parent().before('<div class="alert alert-warning"><strong>ATENCION:</strong> El correo electronico contiene caracteres especiales no validos </div>')
            return false;

        }

        if(validarEmailRepetido){

            $(".alertReg").before('<div class="alert alert-danger"><strong>ATENCION:</strong> El correo electronico ya existe en la base de datos no entiendes!!!!!!</div>');

            return false;

        }

    }else{

        $(".alertReg").before('<div class="alert alert-warning"><strong>ATENCION:</strong> Necesita agregar un email </div>');
        return false;

    }

    /*###################
    VALIDAR CONTRASEÑA*/
    const password = $("#regPassword").val();

    if(password == ""){

        $(".alertReg").before('<div class="alert alert-warning"><strong>ATENCION:</strong> Necesita agregar una contraseña </div>');
        return false;

    }

    return true;
}


function noPaso() {
    Swal.fire({
        icon: "warning",
        title: "Necesitas registrarte",
        text: "Para ingresar al test necesitas tener una cuenta",
        confirmButtonText: "ok"
    }).then((result) => {
        if(result.isConfirmed){
            window.location.href = "http://localhost/simulador_toefl/";
        }
    })
}