<?php
include_once("../models/classalummno.php");

    if(!isset($_REQUEST['id'])){
        $_REQUEST['id'] = 0;
    }


    if(!isset($_REQUEST["alumno"])){
        if(($_REQUEST['id'] != null) && ($_REQUEST["value"] == "Borra")){
            $id = $_REQUEST['id'];
            $alumno = new Alumno();
            $alumno -> borrarAlumno( $id );
            
        }elseif(isset($_REQUEST["btnactualizarAlumno"])){
            
            $Alumno = new Alumno();
            header("location:../Alumno/addAlumno.php");
            $Alumno -> ActualizarAlumno(12,"hola", "hola","hola","Hola","hola");
            
        }elseif(isset($_REQUEST["btnRegresar"])){
            header("location:../index.php");
        }elseif(isset($_REQUEST["btnAlumno"])){
            header("location:../Alumno/addAlumno.php");
        
        }elseif(isset($_REQUEST["volverAlumno"])){
            
            header("location:../views/viewalumno.php");

        }elseif(isset($_REQUEST["volverCoordinador"])){
            
            header("location:../views/viewCoordinador.php");

        }elseif(isset($_REQUEST["volverNovedad"])){
            
            header("location:../views/viewNovedades.php");

        }elseif(isset($_REQUEST["btnNewAlumno"]) && ($_REQUEST["btnNewAlumno"] != null)){
            $idAlumno = $_REQUEST["newIdAlumno"];
            $nombre = $_REQUEST["newNameAlumno"];
            $apellido = $_REQUEST["newApellidoAlumno"];
            $correo = $_REQUEST["newCorreoAlumno"];
            $telefono = $_REQUEST["newTelefonoAlumno"];
            $programa = $_REQUEST["newProgramaAlumno"];
            $Alumno = new alumno();
            $Alumno -> addAlumno($idAlumno,$nombre,$apellido,$correo,$telefono,$programa);
        
        }elseif(($_REQUEST['id'] != null) && ($_REQUEST["value"] == "actualiza")){

            header("location:../Alumno/actAlumno.php?id=".$_REQUEST["id"]);

        }elseif(isset($_REQUEST["btnActAlumno"]) && ($_REQUEST["btnActAlumno"] != null)){
            $nombre = $_REQUEST["ActNameAlumno"];
            $apellido = $_REQUEST["ActApellidoAlumno"];
            $correo = $_REQUEST["ActCorreoAlumno"];
            $telefono = $_REQUEST["ActTelefonoAlumno"];
            $programa = $_REQUEST["ActProgramaAlumno"];
            $id = $_REQUEST["ActIdAlumno"];
            $Alumno = new alumno();
            $Alumno -> ActualizarAlumno($nombre,$apellido,$correo,$telefono,$programa,$id);
        
        } 
    }


?>

