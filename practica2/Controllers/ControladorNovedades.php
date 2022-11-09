<?php
include_once("../models/classNovedades.php");

    if(!isset($_REQUEST['id'])){
        $_REQUEST['id'] = 0;
    }


    if(!isset($_REQUEST["Novedades"])){
        if(($_REQUEST['id'] != null) && ($_REQUEST["value"] == "Borra")){
            $id = $_REQUEST['id'];
            $Novedades = new Novedades();
            $Novedades -> borrarNovedades( $id );
            
        }elseif(isset($_REQUEST["btnactualizarNovedades"])){
            
            $Novedades = new Novedades();
            header("location:../Novedades/addNovedades.php");
            $Novedades -> ActualizarNovedades(12,"hola", "hola","hola","Hola","hola");
            
        }elseif(isset($_REQUEST["btnRegresar"])){
            header("location:../index.php");
        }elseif(isset($_REQUEST["btnNovedades"])){
            header("location:../Novedades/addNovedades.php");
        
        }elseif(isset($_REQUEST["volverAlumno"])){
            
            header("location:../views/viewalumno.php");

        }elseif(isset($_REQUEST["volverCoordinador"])){
            
            header("location:../views/viewCoordinador.php");

        }elseif(isset($_REQUEST["volverNovedad"])){
            
            header("location:../views/viewNovedades.php");

        }elseif(isset($_REQUEST["btnNewNovedades"]) && ($_REQUEST["btnNewNovedades"] != null)){
            $idNovedades = $_REQUEST["newIdNovedades"];
            $titulo = $_REQUEST["newTituloNovedades"];
            $descripcion = $_REQUEST["newDescripcionNovedades"];
            $Novedades = new Novedades();
            $Novedades -> addNovedades($idNovedades,$titulo,$descripcion);
        
        }elseif(($_REQUEST['id'] != null) && ($_REQUEST["value"] == "actualiza")){

            header("location:../Novedades/actNovedades.php?id=".$_REQUEST["id"]);

        }elseif(isset($_REQUEST["btnActNovedades"]) && ($_REQUEST["btnActNovedades"] != null)){
            $titulo = $_REQUEST["ActTituloNovedades"];
            $descripcion = $_REQUEST["ActDescripcionNovedades"];
            $id = $_REQUEST["ActIdNovedades"];
            $Novedades = new Novedades();
            $Novedades -> ActualizarNovedades($titulo,$descripcion,$id);
        
        } 
    }


?>

