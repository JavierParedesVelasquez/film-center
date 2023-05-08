//ME DEVUELVE LA LISTA DE TODAS LAS PERSONAS 	
function personalist(){
	//JQuery 
 	//va enviar y recibir datos en segundo plano
 	$.ajax({
 		//va consultar las personas y las va imprimir en la pagina
 		//url: que archivo voy a cargar
 		url:"estrenolist.php",
 		type:"post",
 		data:{ },
 		success: function(data){
 			//todos los objetos que se imprime en data que lo haga en id= tblista.
 			$("#tblista").html(data);
 		}
 	});
}

//deja en blanco las cajas de texto
function personanueva(){
	$("#id_pelicula").val();
	$("#txtpelicula").val('');
 	$("#txtcategoria").val('');
 	$("#txttiempo").val('');
 	$("#txturl").val('');
 	$("#txtactivo").val('');
}

//preguntar si el objeto cuyo id es xxx mayor que 0 entonces llama a la funcion :
function usuarioguardar(){
 		if ($("#id_pelicula").val()>0) {
 			usuarioActualizar($("#id_pelicula").val());
 		} else {
 			usuarioinsertar();
 		}
}
//funcion que necesita que enviemos datos a un archivo php , los inserta en la base de datos y asi se aumentaria un nuevo registro
function usuarioinsertar(){
 	$.ajax({
 		//va consultar las personas y las va imprimir en la pagina
 		//url: que archivo voy a cargar
 		url:"insertar-estreno.php",
 		type:"post",
 		data:{ 
 			'nombre_pelicula': $("#txtpelicula").val(),
 			'categoria': $("#txtcategoria").val(),
 			'tiempo': $("#txttiempo").val(),
 			'descripcion': $("#txtdescripcion").val(),
 			'imagen': $("#txtimagen").val(),
 			'url_video': $("#txturl").val(),
 			'idioma': $("#txtidioma").val(),
 			'disponible': $("#txtdisponible").val(),
 			'calificacion': $("#txtcalificacion").val(),
 			'activo': $("#txtactivo").val()
 		},
 		//la pagina form.php me va devolver una respuesta, esa respuesta viene en "data", los datos que vienen de respuesta
 		success: function(data){
 			//imprimir en la consola/ DAATA: informacion que ah llegado del url
 			console.log(data);
 			//si data es igual a 1 entonces : se actualice
 			//ya no se necesita que se actualice la pagina para que carge el dato que llego
 			if(data==1){
 				personalist();
 				$('#exampleModal').modal('hide');
 			}
 		}
 	});
}
//funcion editar persona
function abrirModal(id){
 	$.ajax({
 		//id es parametro
 		//se envia a traves del metodo post al archivo actualizar.php
 		//haciendo una consulta sql a la base de datos
 		url:"actualizar-estreno.php?id_pelicula="+ id,
 		type:"get",
 		
 		
 		success: function(data){
 			
 			//console.log(data);
 			//datos vendra a recoger los datos que han llegado
 			//pasando cada dato
 			var datos = JSON.parse(data);
 			$("#id_pelicula").val(datos.id_pelicula);
 			$("#txtpelicula").val(datos.nombre_pelicula);
 			$("#txtcategoria").val(datos.categoria);
 			$("#txttiempo").val(datos.tiempo);
 			$("#txtdescripcion").val(datos.descripcion);
 			$("#txtimagen").val(datos.imagen);
 			$("#txturl").val(datos.url_video);
 			$("#txtidioma").val(datos.idioma);
 			$("#txtdisponible").val(datos.disponible);
 			$("#txtcalificacion").val(datos.calificacion);
 			$("#txtactivo").val(datos.activo);

 			$("#exampleModal").modal('show');
 		}
 	});
}

function usuarioActualizar(id){
console.log ('actualizar'+ id);
	$.ajax({
 		//va consultar las personas y las va imprimir en la pagina
 		//url: que archivo voy a cargar
 		url:"estrenos-actualizar.php",
 		type:"post",
 		data:{ 
 			'id_pelicula': $("#id_pelicula").val(),
 			'nombre_pelicula': $("#txtpelicula").val(),
 			'categoria': $("#txtcategoria").val(),
 			'tiempo': $("#txttiempo").val(),
 			'descripcion': $("#txtdescripcion").val(),
 			'imagen': $("#txtimagen").val(),
 			'url_video': $("#txturl").val(),
 			'idioma': $("#txtidioma").val(),
 			'disponible': $("#txtdisponible").val(),
 			'calificacion': $("#txtcalificacion").val(),
 			'activo': $("#txtactivo").val()
 		},
 		//la pagina form.php me va devolver una respuesta, esa respuesta viene en "data", los datos que vienen de respuesta
 		success: function(data){
 			//imprimir en la consola/ DAATA: informacion que ah llegado del url
 			console.log(data);
 			//si data es igual a 1 entonces : se actualice
 			//ya no se necesita que se actualice la pagina para que carge el dato que llego
 			if(data==1){
 				personalist();	

 			}
 		}
 	});
}
