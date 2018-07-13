$(document).ready(function() {
	$('#limpar_filtros').click(function () {		
    	$('input, select, textarea').val('');
        $('.select2-me').trigger('change');  
    });
});