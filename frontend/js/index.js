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
const btncadastrar = $('#btncadastrar')

form.addEventListener('submit', (evente) => {

    const erro = document.getElementById( 'email','nome', 'sobrenome','cpf',);
    const cpf = document.getElementById('cpf')
    const cnpj = document.getElementById('cnpj');
    const cep = document.getElementById('cep');
    const telefone = document.getElementById('tele')
    const nome = document.getElementById('nome')
    const sobrenome = document.getElementById('sobrenome')
    const data = document.getElementById('data')
    const senha = document.getElementById('senha')
    const rsenha = document.getElementById('senha2')
    const logradouro = document.getElementById('logradouro')
    const cidade = document.getElementById('cidade')
    const estado = document.getElementById('uf')
    const bairro = document.getElementById('bairro')
    const numero = document.getElementById('numero')

    if (erro.value == "") {
        erro.classList.add("is-invalid");
        erro.focus();
    } else {
        erro.classList.remove("is-invalid");
    }
    if (data.value == "") {
        data.classList.add("is-invalid");
        data.focus();
    } else {
        data.classList.remove("is-invalid");
    }
    if (senha.value == "") {
        senha.classList.add("is-invalid");
        senha.focus()
    } else {
        senha.classList.remove("is-invalid")
    }
    if (rsenha.value == "") {
        rsenha.classList.add("is-invalid");
        rsenha.focus();
    } else {
        rsenha.classList.remove("is-invalid");
    }
    if (cpf.value == false) {
        cpf.classList.add("is-invalid");
        cpf.focus();
    } else {
        cpf.classList.remove("is-invalid");
    }
    if (cep.value == false) {
        cep.classList.add("is-invalid");
        cep.focus();
    } else {
        cep.classList.remove("is-invalid");
    }
    if (cnpj.value == false) {
        cnpj.classList.add("is-invalid");
        cnpj.focus();
    } else {
        cnpj.classList.remove("is-invalid");
    }
    if (telefone.value == "") {
        telefone.classList.add("is-invalid");
        telefone.focus();
    } else {
        telefone.classList.remove("is-invalid");
    }
    if (nome.value == "") {
        nome.classList.add("is-invalid");
        nome.focus();
    } else {
        nome.classList.remove("is-invalid");
    }
    if (sobrenome.value == "") {
        sobrenome.classList.add("is-invalid");
        sobrenome.focus();
    } else {
        sobrenome.classList.remove("is-invalid");
    }
    if (logradouro.value == "") {
        logradouro.classList.add("is-invalid");
        logradouro.focus();
    } else {
        logradouro.classList.remove("is-invalid");
    }
    if (cidade.value == "") {
        cidade.classList.add("is-invalid");
        cidade.focus();
    } else {
        cidade.classList.remove("is-invalid");
    }
    if (estado.value == "") {
        estado.classList.add("is-invalid");
        estado.focus()
    } else {
        estado.classList.remove("is-invalid");
    }
    if (bairro.value == "") {
        bairro.classList.add("is-invalid");
        bairro.focus();
    } else {
        bairro.classList.remove("is-invalid");
    }
    if (numero.value == "") {
        numero.classList.add("is-invalid");
        numero.focus();
    } else {
        numero.classList.remove("is-invalid");
    }
})