//ME DEVUELVE LA LISTA DE TODAS LAS PERSONAS 	
function personalist2(){
	//JQuery 
 	//va enviar y recibir datos en segundo plano
 	$.ajax({
 		//va consultar las personas y las va imprimir en la pagina
 		//url: que archivo voy a cargar
 		url:"administradorlist.php",
 		type:"post",
 		data:{ },
 		success: function(data){
 			//todos los objetos que se imprime en data que lo haga en id= tblista.
 			$("#tblista2").html(data);
 		}
 	});
}

//deja en blanco las cajas de texto
function usuarionuevo(){
	$("#idusuario").val();
 	$("#txtnombres").val('');
 	$("#txtusuario").val('');
 	$("#txtclave").val('');
}
//preguntar si el objeto cuyo id es xxx mayor que 0 entonces llama a la funcion :
function usuarioguardar(){
 		if ($("#idusuario").val()>0) {
 			usuarioActualizar($("#idusuario").val());
 		} else {
 			usuarioinsertar();
 		}
}
//funcion que necesita que enviemos datos a un archivo php , los inserta en la base de datos y asi se aumentaria un nuevo registro
function usuarioinsertar(){
 	$.ajax({
 		//va consultar las personas y las va imprimir en la pagina
 		//url: que archivo voy a cargar
 		url:"insertar-admin.php",
 		type:"post",
 		data:{ 
 			'nombres': $("#txtnombres").val(),
 			'usuario': $("#txtusuario").val(),
 			'clave': $("#txtclave").val()
 		},
 		//la pagina form.php me va devolver una respuesta, esa respuesta viene en "data", los datos que vienen de respuesta
 		success: function(data){
 			//imprimir en la consola/ DAATA: informacion que ah llegado del url
 			console.log(data);
 			//si data es igual a 1 entonces : se actualice
 			//ya no se necesita que se actualice la pagina para que carge el dato que llego
 			if(data==1){
 				personalist2();
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
 		url:"actualizar-admin.php?idusuario="+ id,
 		type:"get",
 		
 		
 		success: function(data){
 			
 			//console.log(data);
 			//datos vendra a recoger los datos que han llegado
 			//pasando cada dato
 			var datos = JSON.parse(data);
 			$("#idusuario").val(datos.idusuario);
 			$("#txtnombres").val(datos.nombres);
 			$("#txtusuario").val(datos.usuario);
 			$("#txtclave").val(datos.clave);

 			$("#exampleModal").modal('show');
 		}
 	});
}

function usuarioActualizar(id){
	$.ajax({
 		//va consultar las personas y las va imprimir en la pagina
 		//url: que archivo voy a cargar
 		url:"usuarioActualizar.php",
 		type:"post",
 		data:{ 
 			'idusuario': $("#idusuario").val(),
 			'nombres': $("#txtnombres").val(),
 			'usuario': $("#txtusuario").val(),
 			'clave': $("#txtclave").val()
 		},
 		//la pagina form.php me va devolver una respuesta, esa respuesta viene en "data", los datos que vienen de respuesta
 		success: function(data){
 			//imprimir en la consola/ DAATA: informacion que ah llegado del url
 			console.log(data);
 			//si data es igual a 1 entonces : se actualice
 			//ya no se necesita que se actualice la pagina para que carge el dato que llego
 			if(data==1){
 				personalist2();	
 			}
 		}
 	});
}
