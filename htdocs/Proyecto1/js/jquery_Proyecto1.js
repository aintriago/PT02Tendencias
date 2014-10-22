/**
 * 
 */
var Module = (function () {
	/**
	 * Carga asincronicamente un contenedor div con una peticion POST
	 */
	var loadIn = function (id,url,params){
		$.ajax({
			type: "POST",
			url: url,
			data: params
		}).done(function( data ) {
			$("#"+id).html(data);
		});
	};
	/**
	 * Crea un boton mediante jquery
	 */
	var createButton = function (id,icon,callback) {
		$('#'+id).button({
	        icons: {primary: icon}
		  }).click(function( event ) {
			callback( event );
		  });
	};
	/**
	 * Crea un datepicker mediante jquery
	 */
	var createDatepicker = function (id,format){
		$( "#"+id ).datepicker({ dateFormat: format });
	};
	/**
	 * Crea un timepicker mediante jquery
	 */
	var createTimepicker = function (id){
		$('#'+id).timepicker();
	};
	/**
	 * Crea un calendario mediante jquery
	 */
	var createCalendar = function (id,feedurl,clickcallback){
		$('#'+id).fullCalendar({
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
		    eventClick: function(calEvent, jsEvent, view) {
		    	clickcallback(calEvent, jsEvent, view);
		    }
		});
	};
	/**
	 * Crea un Datatables mediante jquery
	 */
	var createDatatable = function (id){
		$('#'+id).dataTable({
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
	};
	/**
	 * Validacion de un mail
	 */
	var IsEmail = function (email) {
		  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		  return regex.test(email);
	};
	/**
	 * Validacion de un formulario
	 */
	var validateForm = function (){
	    var name = $("#nombre").val();
	    var mail = $("#mail").val();
	    var fecnac = $("#fecnac").val();
	    var pass = $("#clave").val();
	    if (IsEmail(mail)) { } else {
	        alert("mail invalido");
	        return false;
	    }
	    if ($.trim(name)) { } else {
	        alert("nombre vacio");
	        return false;
	    }
	    if ($.trim(fecnac)) { } else {
	        alert("fecha vacio");
	        return false;
	    }
	    if ($.trim(pass)) { } else {
	        alert("clave vacia");
	        return false;
	    }
	    return true;
	 };   
  return {
	  // public	
	/**
	 * Trigger view secc4_main.php
	 */
	  calendario_onReady: function () {
		  createButton("newevent","ui-icon-save",function(){
			  	$( "#dialogNewEvent" ).load("/Proyecto1/secc3/calendario_newform");
				$( "#dialogNewEvent" ).show();
				$( "#dialogNewEvent" ).dialog();  
		  });
		  createCalendar("calendar","/Proyecto1/secc3/calendario_feed",function(calEvent, jsEvent, view){
			  	loadIn("dialogDelEvent","/Proyecto1/mantenedor/prompt_del",{id:calEvent.id});
			  	$( "#dialogDelEvent" ).show()
		        $( "#dialogDelEvent" ).dialog();
		  });
	  },
    /**
	 * Trigger view secc3_main.php
	 */
	  mantenedor_onReady: function () {
		  createDatatable("Mantenedor");
		  createButton("newbutton","ui-icon-plus",function(){
			  	$( "#dialog" ).load( "/Proyecto1/mantenedor");
	            $( "#dialog" ).show()
	            $( "#dialog" ).dialog();
		  });
	  },
  /**
   * Trigger view secc3_main.php
   */
	  modal_onReady: function (){
		  createButton("submit_form","ui-icon-save",function(){});
		  createDatepicker("fecnac","yy-mm-dd");
	  },
  /**
   * Trigger view newEventForm.php
   */
	  newevent_onReady: function(){
		  createTimepicker("tini");
		  createDatepicker("ini","yy-mm-dd");
		  createTimepicker("tfin");
		  createDatepicker("fin","yy-mm-dd");
		  createButton("submit_form","ui-icon-save",function(){});
	  },
  /**
   * Trigger view promptDelEvent.php
   */
	  promptDelEvent_onReady: function(){
		  createButton("submit_form_del_event","ui-icon-save",function(){});
		  $('#submit_form_del_event').show();
	  } 
  };
})();