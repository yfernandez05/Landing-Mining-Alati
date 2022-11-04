var $ = require('jquery');
import intlTelInput from 'intl-tel-input';
import 'intl-tel-input/build/css/intlTelInput.css';
//import utils from 'intl-tel-input/build/js/utils';

//variables
let celularError = $('#celularError');
const input = document.querySelector("#celular");
var errorMsg = document.querySelector("#error-msg"),
    validMsg = document.querySelector("#valid-msg");
var errorMap = ["Número invalido","Código de país inválido","Demasiado corto","Demasiado largo","Número invalido"];
//seleccionamos el boton del fomrulario
let btnSendFrom = document.getElementById('send-form');
let errorMessaje = document.getElementById('cel-alert-erro');

//obtenemos repetidos y posiiones array
let repetidos = [], celularposition = [], contador = 0;

function cantidadRepetido(celular){
    repetidos = [];
    celularposition = [];
    contador = 1;
    let arr=[];

    arr = Array.from(celular);

    for (let index = 0; index < arr.length; index++) {
        if(arr[index+1] === arr[index]){
            contador++;
        }else{
            celularposition.push(arr[index]);
            //console.log(celularposition);
            repetidos.push(contador);
            //console.log(repetidos);
            contador = 1;
        }                
    }

    saverarrayvalidate();
}

//calculamos l aposion de duplicados numeros
let dataNumber = [], cantidadrepetido = 0, numerorepetido = 0;

function saverarrayvalidate(){
    dataNumber = [];

    for(let j = 0; j< celularposition.length; j++){
        //console.log("El valor : " + celularposition[j] + " se repite " +repetidos[j] );
        if(repetidos[j] >=5){
            activeErroCel(true);
            dataNumber.push( {'numero':celularposition[j],'cantidadrepetido': repetidos[j]});
        }                
        //console.log(dataNumber);
    }
    cantidadrepetido = 0,numerorepetido = 0;
    dataNumber.length ? cantidadrepetido = dataNumber[0].cantidadrepetido : cantidadrepetido = 0;
    dataNumber.length ? numerorepetido = dataNumber[0].numero : numerorepetido = 0;
    
    if(numerorepetido <5 ){
        activeErroCel(false);
        validMsg.classList.remove("hide");
        btnSendFrom.disabled = false;
    }
    console.log('num repetido ' ,numerorepetido, 'cantidad repetido ',cantidadrepetido);
}

function activeErroCel(estado){
  var errorMsg = document.querySelector("#error-msg"),
      validMsg = document.querySelector("#valid-msg"); 
  //console.log(estado);

  //console.log(estado);            
  if(!estado){
      $('#celular').removeClass('is-invalid');
      if(celularError) celularError.text('');
      validMsg.classList.add("hide");
      btnSendFrom.disabled = false;
      errorMessaje.style.display = "none";
      return
  }
  $('#celular').addClass('is-invalid');
  //errorMsg.classList.add("hide");
  if(celularError) celularError.text('El campo celular debe ser un numero válido.');
  btnSendFrom.disabled = true; 
  //errorMessaje.style.display = "block";
}


// initialise plugin
var iti = intlTelInput(input, {
  formatOnDisplay: true,
  hiddenInput: "full_number",
  utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.2/js/utils.js",
  initialCountry:"pe",
  separateDialCode: true,
  onlyCountries:["pe","ec","mx","cl","bo","ar","co"],
});


var reset = function() {
  input.classList.remove("error");
  errorMsg.innerHTML = "";
  errorMsg.classList.add("hide");
  validMsg.classList.add("hide");
};


// on blur: validate
input.addEventListener('blur', function() {
  reset();
  if (input.value.trim()) {
    if (iti.isValidNumber()) {
      cantidadRepetido(input.value.trim());
      //validMsg.classList.remove("hide");
      /* btnSendFrom.disabled = false; */
      /* errorMessaje.style.display = "none"; */
    } else {
      input.classList.add("error");
      var errorCode = iti.getValidationError();
      //console.log(errorCode);
      errorMsg.innerHTML = errorMap[errorCode];
      errorMsg.classList.remove("hide");
      btnSendFrom.disabled = true;      
    }
  }
});

var iti = window.intlTelInputGlobals.getInstance(input);

input.addEventListener('input', function() { 
  var countryName = iti.getSelectedCountryData().name;
  document.getElementById('country').value = countryName;
});

// on keyup / change flag: reset
input.addEventListener('change', reset);
input.addEventListener('keyup', reset);

