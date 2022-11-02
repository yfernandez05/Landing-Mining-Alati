import intlTelInput from 'intl-tel-input';
import 'intl-tel-input/build/css/intlTelInput.css';
//import utils from 'intl-tel-input/build/js/utils';


const input = document.querySelector("#celular");
var errorMsg = document.querySelector("#error-msg"),
validMsg = document.querySelector("#valid-msg");

/* intlTelInput(input, {
  initialCountry:"pe",
  separateDialCode: true,
  onlyCountries:["pe","ec","mx","cl","bo","ar","co"],
    // any initialisation options go here
}); */

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

// on blur: validate
input.addEventListener('blur', function() {
  reset();
  if (input.value.trim()) {
    if (iti.isValidNumber()) {
      validMsg.classList.remove("hide");
    } else {
      input.classList.add("error");
      var errorCode = iti.getValidationError();
      console.log(errorCode);
      errorMsg.innerHTML = errorMap[errorCode];
      errorMsg.classList.remove("hide");
    }
  }
});

// on keyup / change flag: reset
input.addEventListener('change', reset);
input.addEventListener('keyup', reset);

// telefono prefijos 
/* var input = document.querySelector("#celular"),
errorMsg = document.querySelector("#error-msg"),
validMsg = document.querySelector("#valid-msg"); */

/* intlTelInput(input, {
  initialCountry: "pe",   
  //separateDialCode: true,
  //customContainer: "col-md-12 no-padding intelinput-styles",
}); */


/* const input = document.querySelector("#celular");
intlTelInput(input, {
  initialCountry:"pe",
  separateDialCode: true,
  onlyCountries:["pe","ec","mx","cl","bo","ar","co"],
}); */
/* intlTelInput(input,{
;input.addEventListener('countrychange',function(e){$('#form__country').val(iti.getSelectedCountryData().iso2);});var errorMsg=document.querySelector("#error-msg"),validMsg=document.querySelector("#valid-msg");var errorMap=["Número invalido","Código de país inválido","Demasiado corto","Demasiado largo","Número invalido"];var reset=function(){input.classList.remove("error");errorMsg.innerHTML="";errorMsg.classList.add("hide");validMsg.classList.add("hide");};input.addEventListener('blur',function(){reset();if(input.value.trim()){if(iti.isValidNumber()){validMsg.classList.remove("hide");}else{input.classList.add("error");var errorCode=iti.getValidationError();errorMsg.innerHTML=errorMap[errorCode];console.log("errorCode => "+errorCode);errorMsg.classList.remove("hide");}}});input.addEventListener('change',reset);input.addEventListener('keyup',reset);}
*/