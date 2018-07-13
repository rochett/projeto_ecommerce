$(document).ready(function($){
   	$('#accordion-1').dcAccordion({
       	eventType   : 'click',
        autoClose   : true,
		saveState   : true,
        disableLink : false,
        speed       : 'slow',
        showCount   : false,
        autoExpand  : false,
        cookie	    : 'dcjq-accordion-1',
        classExpand : 'dcjq-current-parent'
    });
});
