<script type='text/javascript'>

	$(document).ready(function() {

    	var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();		
		
		$('#calendar').fullCalendar({

            monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro',
                'Outubro', 'Novembro', 'Dezembro'],
            monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Aug', 'Set', 'Out', 'Nov', 'Dez'],
            dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
            dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
            titleFormat: {
                month: 'MMMM yyyy',
                week: "d[ yyyy]{ '...'[ MMM] d, MMM yyyy}",
                day: 'dddd, d MMM yyyy'
            },
            buttonText: {
                today:    'Hoje',
                month:    'Mês',
                week:     'Semana',
                day:      'Dia'
            },

			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},
			editable: false,
			
			events: [
			
			   <?php do { ?>
			   
			   <?php

               $data_comeco_evento = strtotime($row['dat_comeco']);
               $data_fim_evento = strtotime($row['dat_final']);
               $hora_comeco_evento = strtotime($row['hor_inicial']);
               $hora_fim_evento = strtotime($row['hor_final']);
			   
			   $dia_inicio = date('d', $data_comeco_evento);
			   $mes_inicio = date('m', $data_comeco_evento);
			   $ano_inicio = date('Y', $data_comeco_evento);
			   $dia_fim = date('d', $data_fim_evento);
			   $mes_fim = date('m', $data_fim_evento);
			   $ano_fim = date('Y', $data_fim_evento);
			   
			   $hora_inicio = date('H', $hora_comeco_evento);
			   $minuto_inicio = date('i', $hora_comeco_evento);
			   $hora_fim = date('H', $hora_fim_evento);
			   $minuto_fim = date('i', $hora_fim_evento);
			   
			   $dia_todo = $row['dia_inteiro'];
			   
			   if ($dia_todo == "n") {
    				$acerta_evento = "false";			   
			   } else {
				    $acerta_evento = "true";
			   }			   
			   			   
			   ?>
												 				
				{
					title: '<?php echo utf8_encode($row['titulo']); ?>',
					start: new Date(<?php echo $ano_inicio ?>, <?php echo $mes_inicio-1 ?>,<?php echo $dia_inicio ?>, <?php echo $hora_inicio ?>, <?php echo $minuto_inicio ?>),
					end: new Date(<?php echo $ano_fim ?>, <?php echo $mes_fim-1 ?>, <?php echo $dia_fim ?>, <?php echo $hora_fim ?>, <?php echo $minuto_fim ?>),
					allDay: <?php echo $acerta_evento ?>,
					url: 'ver_evento.php?var_even=<?php echo $row['id']; ?>'
				},
				
				<?php } while ($row = mysqli_fetch_assoc($query)); ?>
			]
		});
		
	});
	
</script>