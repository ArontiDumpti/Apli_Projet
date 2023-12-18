<?php
	require_once "./php/main.php";

    $id = (isset($_GET['id_proveedor_up'])) ? $_GET['id_proveedor_up'] : 0;
    $id=limpiar_cadena($id);
?>
<div class="container is-fluid mb-6">
		<h1 class="title">Proveedores</h1>
		<h2 class="subtitle">Actualizar proveedor</h2>
	
</div>

<div class="container pb-6 pt-6">
	<?php

		include "./inc/btn_back.php";

        /*== Verificando proveedor ==*/
    	$check_proveedor=conexion();
    	$check_proveedor=$check_proveedor->query("SELECT * FROM proveedores WHERE id_proveedor='$id'");

        if($check_proveedor->rowCount()>0){
        	$datos=$check_proveedor->fetch();
	?>

	<div class="form-rest mb-6 mt-6"></div>

	<form action="./php/proveedor_actualizar.php" method="POST" class="FormularioAjax" autocomplete="off" >

		<input type="hidden" name="id_proveedor" value="<?php echo $datos['id_proveedor']; ?>" required >
		
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Nombre</label>
				  	<input class="input" type="text" name="nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚ0-9.,   ]{3,100}" maxlength="100" required value="<?php echo $datos['nombre']; ?>" >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Dirección</label>
				  	<input class="input" type="text" name="direccion" pattern="[a-zA-ZáéíóúÁÉÍÓÚ0-9.,  ]{3,100}" maxlength="100" required value="<?php echo $datos['direccion']; ?>" >
				</div>
		  	</div>
		</div>
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Celular</label>
				  	<input class="input" type="text" name="celular" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required value="<?php echo $datos['celular']; ?>" >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Email</label>
				  	<input class="input" type="email" name="correo" maxlength="70" value="<?php echo $datos['correo']; ?>" >
				</div>
		  	</div>
		</div>
		<br><br>
	
		<p class="has-text-centered">
			<button type="submit" class="button is-success is-rounded">Actualizar</button>
		</p>
	</form>
	<?php 
		}else{
			include "./inc/error_alert.php";
		}
		$check_proveedor=null;
	?>
</div>