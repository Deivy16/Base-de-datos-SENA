<?php

class Coordinador{
    public $idCoordinador;
    public $nombre;
    public $apellido;
    public $correo;
    public $telefono;                             
    public $programa;
    
    public function borrarCoordinador ($idCoordinador){

        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "delete from coordinador where idCoordinador = ? ";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($idCoordinador));

        $conn = null;

        print ("
        
        <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
        <link href='https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap' rel='stylesheet'>
        <script src='https://cdn.tailwindcss.com'></script>
        <style>body{font-family: 'Inter', sans-serif;};</style>

        <div class='bg-zinc-900 w-screen h-screen flex flex-col justify-center items-center'>
        <h1 class='text-xl text-white font-bold'>El Coordinador con ID $idCoordinador ha sido borrado</h1>
        <br> <a href='../views/viewCoordinador.php' class='bg-zinc-800 px-10 py-3 rounded-lg text-white text-xs font-bold hover:bg-zinc-400'> REGRESAR </a>
        </div>

        
        
        ");
    
    }

    public function ActualizarCoordinador ( $nombre, $apellido, $correo,$telefono, $programa, $idCoordinador){

        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "UPDATE coordinador SET nombre = ?, apellido = ?, correo = ?, telefono = ?, programa = ? WHERE idCoordinador = ?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($nombre, $apellido, $correo, $telefono, $programa, $idCoordinador));
        $conn = null;

        print ("
        <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
        <link href='https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap' rel='stylesheet'>
        <script src='https://cdn.tailwindcss.com'></script>
        <style>body{font-family: 'Inter', sans-serif;};</style>

        <div class='bg-zinc-900 w-screen h-screen flex flex-col justify-center items-center'>
            <h1 class='text-xl text-white font-bold'>El Coordinador  <span class='text-red-300'>$nombre</span> ha sido actualizado</h1>
            <br> <a href='../views/viewCoordinador.php' class='bg-zinc-800 px-10 py-3 rounded-lg text-white text-xs font-bold hover:bg-zinc-400'> REGRESAR </a>
        </div>");
    
    }

    public function AddCoordinador($idCoordinador,$nombre,$apellido,$correo,$telefono,$programa){
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "insert into Coordinador (idCoordinador, nombre, apellido, correo, telefono, programa) values(?,?,?,?,?,?)";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($idCoordinador,$nombre,$apellido,$correo,$telefono,$programa));
        $consulta = null;
        print("
        <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
        <link href='https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap' rel='stylesheet'>
        <script src='https://cdn.tailwindcss.com'></script>
        <style>body{font-family: 'Inter', sans-serif;};</style>

        <div class='bg-zinc-900 w-screen h-screen flex flex-col justify-center items-center'>
            <h1 class='text-xl text-white font-bold'>El Coordinador  <span class='text-red-300'>$nombre</span> ha sido agregado</h1>
            <br> <a href='../views/viewCoordinador.php' class='bg-zinc-800 px-10 py-3 rounded-lg text-white text-xs font-bold hover:bg-zinc-400'> REGRESAR </a>
        </div>
        ");

    }

    public function consultarCoordinadorXId($idCoordinador){
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "select * from coordinador where idCoordinador = ?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($idCoordinador));
        return $consulta;

        $conn = null;
    }

    public function consultarCoordinador(){
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "select * from coordinador";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute();
        return $consulta;

        $conn = null;
    }

}


?>
