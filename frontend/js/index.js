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

$("input[id='cnpj']").inputmask({
  mask: ['99.999.999/9999-99'],
  keepStatic: true
});
$("input[id='cpf']").inputmask({
  mask: ['999.999.999-99'],
  keepStatic: true
});
$("input[id='telefone']").inputmask({
  mask: ['(99)9999-9999', '(99)99999-9999'],
  keepStatic: true
});



const campo = $("#cpfcpnj").val();
if(campo <= 11){
    valida("cpfcpnj") ;
}else{
    valida("cpfcpnj ");
}

function verificaForcaSenha() 
{ 
	const numeros = /([0-9])/;
	const alfabeto = /([a-zA-Z])/;
	const chEspeciais = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;

	if($('#password').val().length<6) 
	{
		$('#password-status').html("<span style='color:red'>Fraco, insira no mínimo 6 caracteres</span>");
	} else {  	
		if($('#password').val().match(numeros) && $('#password').val().match(alfabeto) && $('#password').val().match(chEspeciais))
		{            
			$('#password-status').html("<span style='color:green'><b>Forte</b></span>");
		} else {
			$('#password-status').html("<span style='color:orange'>Médio, insira um caracter especial</span>");
		}
  }
} 
