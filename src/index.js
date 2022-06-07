$(document).ready(function(){
    $('#cep').on('blur', function(){
        const cep = $(this).val();
        const url = 'https://viacep.com.br/ws/' + cep + '/json/';

        $.ajax({
            url: url,
            success: function(response) {
                $('#logradouro').val(response.logradouro);
                $('#cidade').val(response.localidade);
                $('#estado').val(response.uf);
                $('#bairro').val(response.bairro);
                $('#numero').val(response.numero);
            },
            error: function() {
                alert('tente novamente!');
            }
        });
    });
});