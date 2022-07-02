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

$(function() {
    $("#datadenascimento").datepicker({
        dateFormat: 'dd/mm/yy',
        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
    });
});

$("input[id='cpfcnpj']").inputmask({
  mask: ['999.999.999-99', '99.999.999/9999-99'],
  keepStatic: true
});
const campo = $("#cpf-cpnj").val();
if(campo <= 11){
    alert("CPF") ;
}else{
    alert("validade");
}