$(document).ready(function () {
  $("#cep").on("blur", function () {
    const cep = $(this).val();
    const url = "https://viacep.com.br/ws/" + cep + "/json/";

    $.ajax({
      url: url,
      success: function (response) {
        $("#logradouro").val(response.logradouro);
        $("#cidade").val(response.localidade);
        $("#estado").val(response.uf);
        $("#bairro").val(response.bairro);
        $("#numero").val(response.numero);
      },
      error: function () {
        alert("tente novamente!");
      },
    });
  });
});
function mascara(o, f) {
  v_obj = o;
  v_fun = f;
  setTimeout("telemascara()", 1);
}
function telemascara() {
  v_obj.value = v_fun(v_obj.value);
}
function mtel(v) {
  v = v.replace(/\D/g, ""); 
  v = v.replace(/^(\d{2})(\d)/g, "($1) $2"); 
  v = v.replace(/(\d)(\d{4})$/, "$1-$2"); 
  return v;
}
function cpf(v){
if (v.length <= 14) {
  v = v.replace(/\D/g, "")
  v = v.replace(/(\d{3})(\d)/, "$1.$2")
  v = v.replace(/(\d{3})(\d)/, "$1.$2")
  v = v.replace(/(\d{3})(\d{1,2})$/, "$1-$2")
} else {
  v = v.replace(/\D/g, "")
  v = v.replace(/^(\d{2})(\d)/, "$1.$2")
  v = v.replace(/^(\d{2})\.(\d{3})(\d)/, "$1.$2.$3")
  v = v.replace(/\.(\d{3})(\d)/, ".$1/$2")
  v = v.replace(/(\d{4})(\d)/, "$1-$2")  
}
  return v;
}
function datadenascimento(v){
  v = v.replace(/\D/g, "")
  v = v.replace(/(\d{2})(\d)/, "$1/$2")
  v = v.replace(/(\d{2})(\d)/, "$1/$2")
  v = v.replace(/(\d{4})(\d)/, "$1");
  return v;
}
function id(el) {
  return document.getElementById(el);
}
window.onload = function () {
  id("telefone").onkeyup = function () {
    mascara(this, mtel);
  };
  id("cpf").onkeyup = function () {
    mascara(this,cpf);
  };  
  id("datadenascimento").onkeyup = function () {
    mascara(this,datadenascimento);
  };
}
function pessoaJuridica(){
  
  if ($("#juridica").is(":checked")) {
          
    $('.camposExtras').show();  
  } else {
    $('.camposExtras').hide();   
  }
}
function pessoaFisica(){
  if ($("#fisica").is(":checked")) {      
    $('.camposExtras').hide();
  } else {
    $('.camposExtras').show();
  }
}
pessoaFisica();