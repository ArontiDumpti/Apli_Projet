<?php
	require_once "../inc/session_start.php";

	require_once "main.php";

    /*== Almacenando id ==*/
    $id=limpiar_cadena($_POST['id_proveedor']);

    /*== Verificando proveedor ==*/
	$check_proveedor=conexion();
	$check_proveedor=$check_proveedor->query("SELECT * FROM proveedores WHERE id_proveedor='$id'");

    if($check_proveedor->rowCount()<=0){
    	echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El proveedor no existe en el sistema
            </div>
        ';
        exit();
    }else{
    	$datos=$check_proveedor->fetch();
    }
    $check_proveedor=null;



    /*== Almacenando datos del proveedor ==*/
    $nombre=limpiar_cadena($_POST['nombre']);
    $direccion=limpiar_cadena($_POST['direccion']);

    $celular=limpiar_cadena($_POST['celular']);
    $email=limpiar_cadena($_POST['correo']);


    /*== Verificando campos obligatorios del proveedor ==*/
    if($nombre=="" || $direccion=="" || $celular==""|| $email==""){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No has llenado todos los campos que son obligatorios
            </div>
        ';
        exit();
    }


    /*== Verificando integridad de los datos (proveedor) ==*/
    if(verificar_datos("[a-zA-ZáéíóúÁÉÍÓÚ0-9., ]{0,100}",$nombre)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El NOMBRE no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verificar_datos("[a-zA-ZáéíóúÁÉÍÓÚ0-9., ]{0,100}",$direccion)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                La DIRECCION no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verificar_datos("[a-zA-Z0-9]{4,20}",$celular)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El CELULAR no coincide con el formato solicitado
            </div>
        ';
        exit();
    }


    /*== Verificando email ==*/
    if($email!="" && $email!=$datos['correo']){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $check_email=conexion();
            $check_email=$check_email->query("SELECT correo FROM proveedores WHERE correo='$email'");
            if($check_email->rowCount()>0){
                echo '
                    <div class="notification is-danger is-light">
                        <strong>¡Ocurrio un error inesperado!</strong><br>
                        El correo electrónico ingresado ya se encuentra registrado, por revise de nuevo
                    </div>
                ';
                exit();
            }
            $check_email=null;
        }else{
            echo '
                <div class="notification is-danger is-light">
                    <strong>¡Ocurrio un error inesperado!</strong><br>
                    Ha ingresado un correo electrónico no valido
                </div>
            ';
            exit();
        } 
    }


    /*== Verificando proveedor ==*/
    if($celular!=$datos['celular']){
	    $check_proveedor=conexion();
	    $check_proveedor=$check_proveedor->query("SELECT celular FROM proveedores WHERE celular='$celular'");
	    if($check_proveedor->rowCount()>0){
	        echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado!</strong><br>
	                El PROVEEDOR ingresado ya se encuentra registrado, por favor elija otro
	            </div>
	        ';
	        exit();
	    }
	    $check_proveedor=null;
    }



    /*== Actualizar datos ==*/
    $actualizar_proveedor=conexion();
    $actualizar_proveedor=$actualizar_proveedor->prepare("UPDATE proveedores SET nombre=:nombre,direccion=:direccion,correo=:correo,celular=:celular WHERE id_proveedor=:id");

    $marcadores=[
        ":nombre"=>$nombre,
        ":direccion"=>$direccion,
        ":correo"=>$email,
        ":celular"=>$celular,
        ":id"=>$id
    ];

    if($actualizar_proveedor->execute($marcadores)){
        echo '
            <div class="notification is-info is-light">
                <strong>¡PROVEEDOR ACTUALIZADO!</strong><br>
                El proveedor se actualizo con exito
            </div>
        ';
    }else{
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No se pudo actualizar el proveedor, por favor intente nuevamente
            </div>
        ';
    }
    $actualizar_proveedor=null;