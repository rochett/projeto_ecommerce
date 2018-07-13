$(document).ready(function() {		
						
		$('.dataTable').each(function(){
			if(!$(this).hasClass("dataTable-custom")) {
				var opt = {
					"sPaginationType": "full_numbers",
					"oLanguage":{
						"sSearch": "<span>Busca:</span> ",
						"sInfo": "Mostrando <span>_START_</span> a <span>_END_</span> de <span>_TOTAL_</span> registros",
						"sLengthMenu": "_MENU_ <span>registros por página</span>"
					},
					'sDom': "lfrtip",
					'buttons': [						
						{
                			extend:    'copyHtml5',
	                		text:      '<i class="icon-copy"></i>',
    	            		titleAttr: 'Copiar',
							exportOptions: {
                    			columns: ':visible'
                			}
        	    		},
            			{
                			extend:    'excelHtml5',
			                text:      '<i class="glyphicon glyphicon-calendar"></i>',
            			    titleAttr: 'Excel',
							exportOptions: {
                    			columns: ':visible'
                			}
			            },
            			{
			                extend:    'csvHtml5',
            			    text:      '<i class="glyphicon glyphicon-file"></i>',
			                titleAttr: 'CSV',
							exportOptions: {
                    			columns: ':visible'
                			}
            			},
			            {
            			    extend:    'pdfHtml5',
							pageSize:  'A4', 
							orientation: 'landscape',
			                text:      '<i class="icon-paste"></i>',
			                titleAttr: 'PDF',														
							exportOptions: {
                    			columns: ':visible'
                			}
            			},
						{
            			    extend:    'print',
			                text:      '<i class="glyphicon glyphicon-print"></i>',
			                titleAttr: 'Imprimir',
							customize: function(win) 
								{ 
                					var last = null;
					                var current = null;
					                var bod = [];
 
                					var css = '@page { size: landscape; }',
                    					head = win.document.head || win.document.getElementsByTagName('head')[0],
                    					style = win.document.createElement('style');
 
                					style.type = 'text/css';
                					style.media = 'print';
 
                					if (style.styleSheet)
                					{
                  						style.styleSheet.cssText = css;
                					}
                					else
                					{
                  						style.appendChild(win.document.createTextNode(css));
                					} 
                						head.appendChild(style);
         					},
							exportOptions: {
                    			columns: ':visible'
                			}
            			},
						{
            			    extend:    'colvis',
			                text:      '<i class="icon-eye-open"></i>',
			                titleAttr: 'Ocultar/Exibir Coluna'
            			}
					]
				};
				
				if($(this).hasClass("dataTable-buttonTools")){					
						opt.sDom = 'Blfrtip';							
				}				
				
				if($(this).hasClass("dataTable-noheader")){
					opt.bFilter = false;
					opt.bLengthChange = false;
				}
				if($(this).hasClass("dataTable-nofooter")){
					opt.bInfo = false;
					opt.bPaginate = false;
				}
				if($(this).hasClass("dataTable-nosort")){
					var column = $(this).attr('data-nosort');
					column = column.split(',');
					for (var i = 0; i < column.length; i++) {
						column[i] = parseInt(column[i]);
					};
					opt.aoColumnDefs =  [{ 
						'bSortable': false, 
						'aTargets': column 
					}];
				}
				if($(this).hasClass("dataTable-scroll-x")){
					opt.sScrollX = "100%";
					opt.bScrollCollapse = true;
					$(window).resize(function(){
						oTable.fnAdjustColumnSizing();
					});
				}
				if($(this).hasClass("dataTable-scroll-y")){
					opt.sScrollY = "300px";
					opt.bPaginate = false;
					opt.bScrollCollapse = true;
					$(window).resize(function(){
						oTable.fnAdjustColumnSizing();
					});
				}
				if($(this).hasClass("dataTable-reorder")){
					opt.sDom = "R"+opt.sDom;
				}
				if($(this).hasClass("dataTable-colvis")){
					opt.sDom = "C"+opt.sDom;
					opt.oColVis = {
						"buttonText": "Change columns <i class='icon-angle-down'></i>"
					};
				}
				if($(this).hasClass('dataTable-tools')){
					opt.sDom= "T"+opt.sDom;
					opt.oTableTools = {
						"sSwfPath": "js/plugins/datatable/swf/copy_csv_xls_pdf.swf"
					};
				}
				if($(this).hasClass("dataTable-scroller")){
					opt.sScrollY = "300px";
					opt.bDeferRender = true;
					if($(this).hasClass("dataTable-tools")){
						opt.sDom = 'TfrtiS';
					} else {
						opt.sDom = 'frtiS';
					}
					opt.sAjaxSource = "js/plugins/datatable/demo.txt";
				}
				if($(this).hasClass("dataTable-grouping") && $(this).attr("data-grouping") == "expandable"){
					opt.bLengthChange = false;
					opt.bPaginate = false;
				}
				
				if($(this).hasClass("dataTable-nordering")){
					opt.order = [];
				}

				var oTable = $(this).dataTable(opt);
				$(this).css("width", '100%');
				$('.dataTables_filter input').attr("placeholder", "Pesquisar...");
				$(".dataTables_length select").wrap("<div class='input-mini'></div>").chosen({
					disable_search_threshold: 9999999
				});
				$("#check_all").click(function(e){
					$('input', oTable.fnGetNodes()).prop('checked',this.checked);
				});
				if($(this).hasClass("dataTable-fixedcolumn")){
					new FixedColumns( oTable );
				}
				if($(this).hasClass("dataTable-columnfilter")){
					oTable.columnFilter({
						"sPlaceHolder" : "head:after"
					});
				}
				if($(this).hasClass("dataTable-grouping")){
					var rowOpt = {};

					if($(this).attr("data-grouping") == 'expandable'){
						rowOpt.bExpandableGrouping = true;
					}
					oTable.rowGrouping(rowOpt);
				}

				oTable.fnDraw();
				oTable.fnAdjustColumnSizing();
			}
		});
	
	});	