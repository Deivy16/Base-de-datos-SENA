<?php

class Novedades{
    public $idNovedades;
    public $titulo;
    public $descripcion;

    
    public function borrarNovedades ($idNovedades){

        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "delete from Novedades where idNovedades = ? ";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($idNovedades));

        $conn = null;

        print ("
        
        <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
        <link href='https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap' rel='stylesheet'>
        <script src='https://cdn.tailwindcss.com'></script>
        <style>body{font-family: 'Inter', sans-serif;};</style>

        <div class='bg-zinc-900 w-screen h-screen flex flex-col justify-center items-center'>
        <h1 class='text-xl text-white font-bold'>El Novedades con ID $idNovedades ha sido borrado</h1>
        <br> <a href='../views/viewNovedades.php' class='bg-zinc-800 px-10 py-3 rounded-lg text-white text-xs font-bold hover:bg-zinc-400'> REGRESAR </a>
        </div>

        
        
        ");
    
    }

    public function ActualizarNovedades ( $titulo, $descripcion, $idNovedades){

        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "UPDATE novedades SET titulo = ?, descripcion = ? WHERE idNovedades = ?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($titulo, $descripcion, $idNovedades));
        $conn = null;

        print ("
        <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
        <link href='https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap' rel='stylesheet'>
        <script src='https://cdn.tailwindcss.com'></script>
        <style>body{font-family: 'Inter', sans-serif;};</style>

        <div class='bg-zinc-900 w-screen h-screen flex flex-col justify-center items-center'>
            <h1 class='text-xl text-white font-bold'>El Novedades  <span class='text-red-300'>$titulo</span> ha sido actualizado</h1>
            <br> <a href='../views/viewNovedades.php' class='bg-zinc-800 px-10 py-3 rounded-lg text-white text-xs font-bold hover:bg-zinc-400'> REGRESAR </a>
        </div>");
    
    }

    public function AddNovedades($idNovedades,$titulo,$descripcion){
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "insert into novedades (idNovedades, titulo, descripcion) values(?,?,?)";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($idNovedades,$titulo,$descripcion));
        $consulta = null;
        print("
        <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
        <link href='https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap' rel='stylesheet'>
        <script src='https://cdn.tailwindcss.com'></script>
        <style>body{font-family: 'Inter', sans-serif;};</style>

        <div class='bg-zinc-900 w-screen h-screen flex flex-col justify-center items-center'>
            <h1 class='text-xl text-white font-bold'>El Novedades  <span class='text-red-300'>$titulo</span> ha sido agregado</h1>
            <br> <a href='../views/viewNovedades.php' class='bg-zinc-800 px-10 py-3 rounded-lg text-white text-xs font-bold hover:bg-zinc-400'> REGRESAR </a>
        </div>
        ");

    }

    public function consultarNovedadesXId($idNovedades){
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "select * from novedades where idNovedades = ?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($idNovedades));
        return $consulta;

        $conn = null;
    }

    public function consultarNovedades(){
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "select * from novedades";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute();
        return $consulta;

        $conn = null;
    }

}


?>
