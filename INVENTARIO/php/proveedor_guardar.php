<?php
    
    require_once "main.php";

    /*== Almacenando datos ==*/
    $nombre=limpiar_cadena($_POST['nombre']);
    $direccion=limpiar_cadena($_POST['direccion']);

    $celular=limpiar_cadena($_POST['celular']);
    $email=limpiar_cadena($_POST['correo']);



    /*== Verificando campos obligatorios ==*/
    if($nombre=="" || $direccion=="" || $celular=="" || $email==""){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No has llenado todos los campos que son obligatorios
            </div>
        ';
        exit();
    }


    /*== Verificando integridad de los datos ==*/
    if(verificar_datos("[a-zA-ZáéíóúÁÉÍÓÚ0-9., ]{3,100}",$nombre)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El NOMBRE no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verificar_datos("[a-zA-ZáéíóúÁÉÍÓÚ0-9., ]{3,100}",$direccion)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                La DIRECCIÓN no coincide con el formato solicitado
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
    if($email!=""){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $check_email=conexion();
            $check_email=$check_email->query("SELECT correo FROM proveedores WHERE correo='$email'");
            if($check_email->rowCount()>0){
                echo '
                    <div class="notification is-danger is-light">
                        <strong>¡Ocurrio un error inesperado!</strong><br>
                        El correo electrónico ingresado ya se encuentra registrado, revise nuevamente
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
    $check_proveedor=conexion();
    $check_proveedor=$check_proveedor->query("SELECT celular FROM proveedores WHERE celular='$celular'");
    if($check_proveedor->rowCount()>0){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El CELULAR ingresado ya se encuentra registrado, por favor elija otro
            </div>
        ';
        exit();
    }
    $check_proveedor=null;




    /*== Guardando datos ==*/
    $guardar_proveedor=conexion();
    $guardar_proveedor=$guardar_proveedor->prepare("INSERT INTO proveedores(nombre,direccion,correo,celular) VALUES(:nombre,:direccion,:correo,:celular)");

    $marcadores=[
        ":nombre"=>$nombre,
        ":direccion"=>$direccion,
        ":correo"=>$email,
        ":celular"=>$celular,

    ];

    $guardar_proveedor->execute($marcadores);

    if($guardar_proveedor->rowCount()==1){
        echo '
            <div class="notification is-info is-light">
                <strong>¡PROVEEDOR REGISTRADO!</strong><br>
                El proveedor se registro con exito
            </div>
        ';
    }else{
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No se pudo registrar el proveedor, por favor intente nuevamente
            </div>
        ';
    }
    $guardar_proveedor=null;