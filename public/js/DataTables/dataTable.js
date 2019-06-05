$(document).ready(function() {			   
	$('#datatable').DataTable( {	
		"bDeferRender": true,			
		"sPaginationType": "full_numbers",
		"oLanguage": {
            "sProcessing":     "Procesando...",
			"sLengthMenu": 'Mostrar <select>'+
		        '<option value="5">5</option>'+
		        '<option value="10">10</option>'+
		        '<option value="15">15</option>'+
		        '<option value="-1">Todos</option>'+
		        '</select> registros',    
		    "sZeroRecords":    "No se encontraron resultados",
		    "sEmptyTable":     "Ningún dato disponible en esta tabla",
		    "sInfo":           "Mostrando del (_START_ al _END_) de un total de _TOTAL_ registros",
		    "sInfoEmpty":      "Mostrando del 0 al 0 de un total de 0 registros",
		    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		    "sInfoPostFix":    "",
		    "sSearch":         "Buscar:",
		    "sUrl":            "",
		    "sInfoThousands":  ",",
		    "sLoadingRecords": "Por favor espere - cargando...",
		    "oPaginate": {
		    	"sFirst": "",
		    	"sLast": "",
		        "sNext":     "Siguiente",
		        "sPrevious": "Anterior"
		    },
		    "oAria": {
		        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
		        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
		    }
        }
	});
});