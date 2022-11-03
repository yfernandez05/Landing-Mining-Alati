import intlTelInput from 'intl-tel-input';
import 'intl-tel-input/build/css/intlTelInput.css';
//import utils from 'intl-tel-input/build/js/utils';


const input = document.querySelector("#celular");
var errorMsg = document.querySelector("#error-msg"),
validMsg = document.querySelector("#valid-msg");

var errorMap = ["Número invalido","Código de país inválido","Demasiado corto","Demasiado largo","Número invalido"];

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

//seleccionamos el boton del fomrulario
let btnSendFrom = document.getElementById('send-form');
let errorMessaje = document.getElementById('cel-alert-erro');

// on blur: validate
input.addEventListener('blur', function() {
  reset();
  if (input.value.trim()) {
    if (iti.isValidNumber()) {
      validMsg.classList.remove("hide");
      btnSendFrom.disabled = false;
      errorMessaje.style.display = "none";
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

