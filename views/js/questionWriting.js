function alert() {
    Swal.fire({
        icon: 'success',
        title: 'Correcto',
    })
}

function alert2() {
    Swal.fire({
        icon: 'error',
        title: 'Incorrecto',
        allowOutsideClick: false,
        html: '<p>Aqui se pondra todo el codigo HTML<p>' +
        '<h5>Podria ser de esta forma</h5>'
    }).then((result) => {
        if(result.isConfirmed){
            window.location.href = "file:///C:/Users/wicho/Documents/ToeflSimulator/simulador_toefl/modules/index.html";
        }
    })
    console.log(window.location.href);
    console.log("Hacer validacion en php por si es correcta o incerrecta la pregunta");
}

function canceltest() {
    Swal.fire({
        icon: 'question',
        title: 'Seguro que quieres cancelar el test?',
        confirmButtonText: 'Yes',
        cancelButtonText: 'No',
        showCancelButton: true,
        cancelButtonColor: '#d33',
    }).then((result) => {
        if(result.isConfirmed){
            window.location.href = "file:///C:/Users/wicho/Documents/ToeflSimulator/simulador_toefl/modules/index.html";
        }
    })
}


// ================================
// TEMPORIZADOR
// ================================
let minutos = 1;
let segundos = 0;
cargarSegundo();

//Definimos y ejecutamos los segundos
function cargarSegundo(){
    let txtSegundos;

    if(segundos < 0){
        segundos = 59;
    }

    //Mostrar segundos en pantalla
    if(segundos < 10){
        txtSegundos = `0${segundos}`
    }else{
        txtSegundos = segundos;
    }
    document.getElementById('segundos').innerHTML = txtSegundos;
    segundos --;

    cargarMinutos(segundos);
};

//Definimos y ejecutamos los minutos
function cargarMinutos(segundos){
    let txtMinutos;

    if(segundos == -1 && minutos !== 0){
        setTimeout(() => {
            minutos --;
        }, 500)
    }else if(segundos == -1 && minutos == 0){
        setTimeout(() => {
           minutos = 59; 
        }, 500)
    }

    //Mostrar minutos en pantalla
    if(minutos < 10){
        txtMinutos = `0${minutos}`;
    }else{
        txtMinutos = minutos;
    }
    document.getElementById('minutos').innerHTML = txtMinutos;

}

setInterval(cargarSegundo, 1000);