<?php
include_once("../models/classCoordinador.php");

    if(!isset($_REQUEST['id'])){
        $_REQUEST['id'] = 0;
    }


    if(!isset($_REQUEST["Coordinador"])){
        if(($_REQUEST['id'] != null) && ($_REQUEST["value"] == "Borra")){
            $id = $_REQUEST['id'];
            $Coordinador = new Coordinador();
            $Coordinador -> borrarCoordinador( $id );
            
        }elseif(isset($_REQUEST["btnactualizarCoordinador"])){
            
            $Coordinador = new Coordinador();
            header("location:../Coordinador/ActCoordinador.php");
            $Coordinador -> ActualizarCoordinador(12,"hola", "hola","hola","Hola","hola");
            
        }elseif(isset($_REQUEST["btnRegresar"])){
            header("location:../index.php");
        }elseif(isset($_REQUEST["btnCoordinador"])){
            header("location:../Coordinador/addCoordinador.php");
        
        }elseif(isset($_REQUEST["volverAlumno"])){
            
            header("location:../views/viewalumno.php");

        }elseif(isset($_REQUEST["volverCoordinador"])){
            
            header("location:../views/viewCoordinador.php");

        }elseif(isset($_REQUEST["volverNovedad"])){
            
            header("location:../views/viewNovedades.php");

        }elseif(isset($_REQUEST["btnNewCoordinador"]) && ($_REQUEST["btnNewCoordinador"] != null)){
            $idCoordinador = $_REQUEST["newIdCoordinador"];
            $nombre = $_REQUEST["newNameCoordinador"];
            $apellido = $_REQUEST["newApellidoCoordinador"];
            $correo = $_REQUEST["newCorreoCoordinador"];
            $telefono = $_REQUEST["newTelefonoCoordinador"];
            $programa = $_REQUEST["newProgramaCoordinador"];
            $Coordinador = new Coordinador();
            $Coordinador -> addCoordinador($idCoordinador,$nombre,$apellido,$correo,$telefono,$programa);
        
        }elseif(($_REQUEST['id'] != null) && ($_REQUEST["value"] == "actualiza")){

            header("location:../Coordinador/actCoordinador.php?id=".$_REQUEST["id"]);

        }elseif(isset($_REQUEST["btnActCoordinador"]) && ($_REQUEST["btnActCoordinador"] != null)){
            $nombre = $_REQUEST["ActNameCoordinador"];
            $apellido = $_REQUEST["ActApellidoCoordinador"];
            $correo = $_REQUEST["ActCorreoCoordinador"];
            $telefono = $_REQUEST["ActTelefonoCoordinador"];
            $programa = $_REQUEST["ActProgramaCoordinador"];
            $id = $_REQUEST["ActIdCoordinador"];
            $Coordinador = new Coordinador();
            $Coordinador -> ActualizarCoordinador($nombre,$apellido,$correo,$telefono,$programa,$id);
        
        } 
    }


?>

