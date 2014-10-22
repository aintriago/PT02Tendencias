/**
 * 
 */
var Module = (function () {
	var activateModify = function (id,Tag){
		Utilities.createButton(id +'_Button','ui-icon-pencil',false,"1.5em","1.5em",function(){
		  	if($(id).prop('disabled'))
		  		{
		  			$(id).prop('disabled', false);	
		  			$(id + "_Button").button("option", {icons: { primary: "ui-icon-disk" }});
		  		} else {
		  			$(id).prop('disabled', true);
		  			$(id + "_Button" ).button("option", {icons: { primary: "ui-icon-pencil" }});
		  			$(id + "_Status").load(Params.ProyectName+"perfil/done", {Tag:Tag,Value:$(id).val()});
		  		}
		});
	}; 
	return {
	  // public	
	/**
	 * Trigger view home_main.php
	 */
	  home_onReady: function () {
		  Utilities.createCalendar("#calendar",Params.ProyectName+"home/calendario_feed",
			    function(calEvent, jsEvent){
			  		Utilities.createDialog("#dialogDelEvent",Params.ProyectName+"home/loadEvent",{id:calEvent.id,desc:calEvent.descripcion});
			    },
			    function(event, element){
			    	
			    	switch($.trim(event.tipo)){
			    	case Params.TipoPrueba:
			    		element.css('background-color',$("#colorpicker1").css("background-color"));
			    		break;
			    	case Params.TipoReunionApod:
			    		element.css('background-color',$("#colorpicker2").css("background-color"));
			    		break;
			    	case Params.TipoReunionProf:
			    		element.css('background-color',$("#colorpicker3").css("background-color"));
			    		break;
		    	}
		    });
	  },
	  /**
	 * Trigger view login.php
	 */
	  login_onReady: function(){
		  /* Tabs Activiation
			================================================== */
			var tabs = $('ul.tabs'),
			    tabsContent = $('ul.tabs-content');
			tabs.each(function(i) {
				//Get all tabs
				var tab = $(this).find('> li > a');
				tab.click(function(e) {
					//Get Location of tab's content
					var contentLocation = $(this).attr('href') + "Tab";
					//Let go if not a hashed one
					if(contentLocation.charAt(0)=="#") {
						e.preventDefault();
						//Make Tab Active
						tab.removeClass('active');
						$(this).addClass('active');
						//Show Tab Content
						$(contentLocation).show().siblings().hide();
					} 
				});
			});
	  },
	  /**
		 * Trigger view home_leyenda.php
		 */
	  home_leyenda_onReady: function(){
		  Utilities.createColorpicker('#colorpicker1','3289c7',function(Hsb,Hex,Rgb,ele){
			  $("#colorpicker1").css("background-color", "#"+Hex);
			  $('#calendar').fullCalendar('rerenderEvents');
		  });
		  Utilities.createColorpicker('#colorpicker2','44d134',function(Hsb,Hex,Rgb,ele){
			  $("#colorpicker2").css("background-color", "#"+Hex);
			  $('#calendar').fullCalendar('rerenderEvents');
		  }); 
		  Utilities.createColorpicker('#colorpicker3','f50505',function(Hsb,Hex,Rgb,ele){
			  $("#colorpicker3").css("background-color", "#"+Hex);
			  $('#calendar').fullCalendar('rerenderEvents');
		  }); 
		  
	  },
	  /**
		 * Trigger view home_menu.php
		 */
	  home_menu_onReady: function(){
		  Utilities.createButton('#newEventButton','ui-icon-plus',true,"2em","10em",function(){
			  	window.location = Params.ProyectName+"home/newEvent";	
		  });
		  Utilities.createButton('#backCaledarButton','ui-icon-seek-prev',true,"2em","10em",function(){
			  	window.location = Params.ProyectName+"home/load_Home";	
		  });
		  Utilities.createButton('#saveAndExitButton','ui-icon-disk',true,"2em","10em",function(){
			  	alert("test");
			  	$("#Home_New_Event_Form").submit();	
		  });
		  
		  
	  },
	  /**
		 * Trigger view header.php
		 */
	  header_verperfil_click : function(){
		  window.location = Params.ProyectName+"perfil?User="+$("#header_username").text();
	  },
	  /**
		 * Trigger view home_new.php
		 */
	  home_new_onReady : function(){
		  $("#Home_New_Tipo").append("<option value='"+Params.TipoPrueba+"'>"+Params.TipoPrueba+"</option>");
		  $("#Home_New_Tipo").append("<option value='"+Params.TipoReunionApod+"'>"+Params.TipoReunionApod+"</option>");
		  $("#Home_New_Tipo").append("<option value='"+Params.TipoReunionProf+"'>"+Params.TipoReunionProf+"</option>");
		  Utilities.createSelect("#Home_New_Tipo","Tipo de evento",true,function(e){
			  alert(e.val);
		  });
		  $('#Home_New_Start').datetimepicker({lang:'es'});
		  $('#Home_New_Fin').datetimepicker();
		  
		  $('#Home_New_Description').YellowText({
			  width : "33em",
			  height : "10em"
		  });
	  },
	  /**
		 * Trigger view perfil_menu.php
		 */
	  perfil_menu_onReady : function(){
		  Utilities.createButton('#backCaledarButton','ui-icon-seek-prev',true,"2em","10em",function(){
			  	window.location = Params.ProyectName+"home/load_Home";	
		  });
		  
	  },
	  /**
		 * Trigger view perfil_main.php
		 */
	  perfil_main_onReady : function(){
		  Utilities.createDatepicker('#Perfil_Fecha_Nacimiento','yy-mm-dd');
		  activateModify('#Perfil_Rut_Usuario',"RUT_USUARIO");
		  activateModify('#Perfil_Fecha_Nacimiento',"FECHA_NACIMIENTO");
		  activateModify('#Perfil_Telefono_Fijo',"NRO_FONO");
		  activateModify('#Perfil_Telefono_Celular',"NRO_CELULAR");
		  activateModify('#Perfil_Mail',"CORREO");
	  },
	  /**
		 * Trigger view perfil_main.php
		 */
	  planificacion_main_onReady : function(){
		  Utilities.createDatatable("#Planificacion_Tabla");
		  Utilities.createButton('.Planificacion_Abrir','ui-icon-document',false,"1.5em","1.5em",function(event){
			  alert("Abrir");
		  });
		  Utilities.createButton('.Planificacion_Ver','ui-icon-mail-open',false,"1.5em","1.5em",function(event){
			  alert("Ver");
		  });
		  Utilities.createButton('.Planificacion_Elimina','ui-icon-trash',false,"1.5em","1.5em",function(event){
			  alert("Elimina");
		  });
		  Utilities.createButton('.Planificacion_Edita','ui-icon-pencil',false,"1.5em","1.5em",function(event){
			  alert("Editar");	
		  });
		  Utilities.createButton('.Planificacion_Copia','ui-icon-copy',false,"1.5em","1.5em",function(event){
			  alert("copiar");	
		  });
	  },
	  /**
		 * Trigger view perfil_main.php
		 */
	  planificacion_menu_onReady : function (){
		  Utilities.createSelect("#Planificacion_Prof_Select","Profesor a filtrar",true,function(e){
			  alert(e.val);
		  });
		  Utilities.createSelect("#Planificacion_Nivel_Select","Nivel a filtrar",true);
		  Utilities.createSelect("#Planificacion_Asignatura_Select","Asignatura a filtrar",true);
		  Utilities.createButton('#CrearUnidadButton','ui-icon-plus',true,"2em","10em",function(){
			  	alert("Crear Unidad");	
		  });
		  Utilities.createButton('#ImportarUnidadButton','ui-icon-folder-open',true,"2em","10em",function(){
			  	alert("Importar Unidad");	
		  });
	  },
  };
})();