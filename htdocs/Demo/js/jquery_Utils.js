/**
 * 
 */
var Utilities = (function () {
return {
	/**
	 * Carga select con jquery ui
	 */
	createSelect : function (selector,titulo,clear,changeCallback){
		$(selector).select2({
			placeholder:titulo,
			allowClear:clear
		}).on("change", changeCallback);
	},
	/**
	 * Carga datepicker jquery ui
	 */
	createDatepicker : function (selector,format) {
		$(selector).datepicker({dateFormat:format});
	},
	/**
	 * Carga contenido mediante ajax a un div y lo convierte en dialogo modal
	 */
	createDialog : function (selector,Url,data) {
		$(selector).load(Url, data);
		$(selector).show();
	    $(selector).dialog();
	},
	/**
	 * Crea un boton mediante jquery
	 */
	createButton : function (selector,icon,text,height,width,icallback) {
		$(selector).button({
	        icons: {primary: icon},
			text: text
		  }).click(function( event ) {
			  icallback( event );
		  });
		$(selector).tooltip();
		$(selector).css('height',height).css('width',width);
	},
	/**
	 * Crea un colorpicker mediante jquery
	 */
	createColorpicker : function (selector,defaultColor,callback){
		$(selector).colpick({color:defaultColor,submit:0,onChange:callback});
	},
	/**
	 * Crea un calendario mediante jquery
	 */
	createCalendar : function (selector,feedurl,clickcallback,eventRenderCallback){
		$(selector).fullCalendar({
			monthNames:['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
			monthNamesShort:['ene','feb','mar','abr','may','jun','jul','ago','sept','oct','nov','dic'],
			dayNames: ['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado'],
			dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mier', 'Jue', 'Vie', 'Sab'],
			buttonText: {
			    today: 'Hoy',
			    day: 'Dia',
			    week:'Semana',
			    month:'Mes'
			},
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			allDaySlot: false,
			events: {
		        url: feedurl,
		        type: 'POST'
		    },
		    eventRender: eventRenderCallback,
		    eventClick: clickcallback
		});
	},
	createDatatable : function(selector)
	{
		var oTable = $(selector).dataTable({
	    	"language": {
    			"emptyTable":     "No hay datos disponibles en la tabla",
    		    "info":           "Mostrando _START_ de _END_ de _TOTAL_ registros",
    		    "infoEmpty":      "No hay registros disponibles",
    		    "infoFiltered":   "(filtrados de _MAX_ registros totales)",
    		    "infoPostFix":    "",
    		    "thousands":      ",",
    		    "lengthMenu":     "Mostrando _MENU_ registros por pagina",
    		    "loadingRecords": "Cargando...",
    		    "processing":     "Procesando...",
    		    "search":         "Buscar:",
    		    "zeroRecords":    "No hay coincidencias encontradas",
    		    "paginate": {
    		        "first":      "Primero",
    		        "last":       "Ultimo",
    		        "next":       "Siguiente",
    		        "previous":   "Anterior"
    		    },
    		    "aria": {
    		        "sortAscending":  ": activar orden de columna acendente",
    		        "sortDescending": ": activar orden de columna decendente"
    		    }	
    	}
    });
	},
}})();

