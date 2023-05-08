//ME DEVUELVE LA LISTA DE TODAS LAS PERSONAS 	
function personalist(){
	//JQuery 
 	//va enviar y recibir datos en segundo plano
 	$.ajax({
 		//va consultar las personas y las va imprimir en la pagina
 		//url: que archivo voy a cargar
 		url:"personalist.php",
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
	$("#cod_usuario").val();
 	$("#txtnombres").val('');
 	$("#txtapellidos").val('');
 	$("#txtdni").val('');
 	$("#txttelefono").val('');
 	$("#txtdireccion").val('');
 	$("#txtpassword").val('');
}
//preguntar si el objeto cuyo id es xxx mayor que 0 entonces llama a la funcion :
function personaguardar(){
 		if ($("#cod_usuario").val()>0) {
 			personaActualizar($("#cod_usuario").val());
 		} else {
 			personainsertar();
 		}
}
//funcion que necesita que enviemos datos a un archivo php , los inserta en la base de datos y asi se aumentaria un nuevo registro
function personainsertar(){
 	$.ajax({
 		//va consultar las personas y las va imprimir en la pagina
 		//url: que archivo voy a cargar
 		url:"insertar.php",
 		type:"post",
 		data:{ 
 			'nombres': $("#txtnombres").val(),
 			'apellidos': $("#txtapellidos").val(),
 			'dni': $("#txtdni").val(),
 			'telefono': $("#txttelefono").val(),
 			'direccion': $("#txtdireccion").val(),
 			'passwor_cliente': $("#txtpassword").val()
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
//funcion editar persona
function abrirModal(id){

 	$.ajax({
 		//id es parametro
 		//se envia a traves del metodo post al archivo actualizar.php
 		//haciendo una consulta sql a la base de datos
 		url:"obtener.php?cod_usuario="+ id,
 		type:"get",
 		
 		
 		success: function(data){
 			
 			//console.log(data);
 			//datos vendra a recoger los datos que han llegado
 			//pasando cada dato
 			var datos = JSON.parse(data);
 			$("#cod_usuario").val(datos.cod_usuario);
 			$("#txtnombres").val(datos.nombres);
 			$("#txtapellidos").val(datos.apellidos);
 			$("#txtdni").val(datos.dni);
 			$("#txttelefono").val(datos.telefono);
 			$("#txtdireccion").val(datos.direccion);
 			$("#txtpassword").val(datos.passwor_cliente);
 			
 			$("#exampleModal").modal('show');
 			
 		}
 	});
}

function personaActualizar(id){
 	$.ajax({
 		//va consultar las personas y las va imprimir en la pagina
 		//url: que archivo voy a cargar
 		url:"personaActualizar.php",
 		type:"post",
 		data:{ 
 			'cod_usuario': $("#cod_usuario").val(),
 			'nombres': $("#txtnombres").val(),
 			'apellidos': $("#txtapellidos").val(),
 			'dni': $("#txtdni").val(),
 			'telefono': $("#txttelefono").val(),
 			'direccion': $("#txtdireccion").val(),
 			'passwor_cliente': $("#txtpassword").val()
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