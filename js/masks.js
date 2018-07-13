function mascara(telefone) {
    if (telefone.value.length == 0)
        telefone.value = '(' + telefone.value;
    if (telefone.value.length == 3)
        telefone.value = telefone.value + ') ';
    if (telefone.value.length == 10)
        telefone.value = telefone.value + '-';
}

$(function () {
    $('#telefone').blur(function () {
        if (telefone.value.length == 14) {
            var texto = telefone.value.replace(/[^\d]/g, '');
            texto = "(" + texto;

            if (texto.length > 3) {
                texto = [texto.slice(0, 3), ") ", texto.slice(3)].join('');
            }
            if (texto.length > 12) {
                if (texto.length > 13)
                    texto = [texto.slice(0, 10), "-", texto.slice(10)].join('');
                else
                    texto = [texto.slice(0, 9), "-", texto.slice(9)].join('');
            }
            if (texto.length > 15)
                texto = texto.substr(0, 15);            
        }else{
			var texto = telefone.value;
		}
		$('#telefone').val(texto);
    });
});

function mascara_cnpj(cnpj) {
    if (cnpj.value.length == 0)
        cnpj.value = '' + cnpj.value;
    if (cnpj.value.length == 2)
        cnpj.value = cnpj.value + '.';
    if (cnpj.value.length == 6)
        cnpj.value = cnpj.value + '.';
    if (cnpj.value.length == 10)
        cnpj.value = cnpj.value + '/';
    if (cnpj.value.length == 15)
        cnpj.value = cnpj.value + '-';
}
