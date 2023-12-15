<?php

	/*== Almacenando datos ==*/
    $id_proveedor_del=limpiar_cadena($_GET['id_proveedor_del']);

    /*== Verificando proveedor ==*/
    $check_proveedor=conexion();
    $check_proveedor=$check_proveedor->query("SELECT id_proveedor FROM proveedores WHERE id_proveedor='$id_proveedor_del'");
    
    if($check_proveedor->rowCount()==1){

        /*

    	$check_productos=conexion();
    	$check_productos=$check_productos->query("SELECT id_proveedor FROM producto WHERE id_proveedor='$id_proveedor_del' LIMIT 1");
if($check_productos->rowCount()<=0){
		*/
          
	    	$eliminar_proveedor=conexion();
	    	$eliminar_proveedor=$eliminar_proveedor->prepare("DELETE FROM proveedores WHERE id_proveedor=:id");

	    	$eliminar_proveedor->execute([":id"=>$id_proveedor_del]);

	    	if($eliminar_proveedor->rowCount()==1){
		        echo '
		            <div class="notification is-info is-light">
		                <strong>PROVEEDOR ELIMINADO!</strong><br>
		                Los datos del proveedor se eliminaron con exito
		            </div>
		        ';
		    }else{
		        echo '
		            <div class="notification is-danger is-light">
		                <strong>¡Ocurrio un error inesperado!</strong><br>
		                No se pudo eliminar el proveedor, por favor intente nuevamente
		            </div>
		        ';
		    }
		    $eliminar_proveedor=null;
    	}else{
    		echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado!</strong><br>
	                No podemos eliminar el proveedor ya que tiene productos registrados por el
	            </div>
	        ';
    	}
    	$check_proveedor=null;

	?>