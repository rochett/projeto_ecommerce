function confirmDelete(arquivo,variavel) {	
    var txt;
    var r = confirm("Deseja excluir o item?");
    if (r == true) {        
		txt = arquivo+variavel;		
		window.location = txt;
    } else {
        alert('Exclusão Cancelada!');
    }    
};