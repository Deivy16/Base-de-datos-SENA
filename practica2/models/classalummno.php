<?php

class alumno{
    public $idAlumno;
    public $nombre;
    public $apellido;
    public $correo;
    public $telefono;                             
    public $programa;
    
    public function borrarAlumno ($idAlumno){

        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "delete from alumno where idAlumno = ? ";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($idAlumno));

        $conn = null;

        print ("
        
        <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
        <link href='https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap' rel='stylesheet'>
        <script src='https://cdn.tailwindcss.com'></script>
        <style>body{font-family: 'Inter', sans-serif;};</style>

        <div class='bg-zinc-900 w-screen h-screen flex flex-col justify-center items-center'>
        <h1 class='text-xl text-white font-bold'>El alumno con ID $idAlumno ha sido borrado</h1>
        <br> <a href='../views/viewalumno.php' class='bg-zinc-800 px-10 py-3 rounded-lg text-white text-xs font-bold hover:bg-zinc-400'> REGRESAR </a>
        </div>

        
        
        ");
    
    }

    public function ActualizarAlumno ( $nombre, $apellido, $correo,$telefono, $programa, $idAlumno){

        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "UPDATE alumno SET nombre = ?, apellido = ?, correo = ?, telefono = ?, programa = ? WHERE idAlumno = ?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($nombre, $apellido, $correo, $telefono, $programa, $idAlumno));
        $conn = null;

        print ("
        <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
        <link href='https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap' rel='stylesheet'>
        <script src='https://cdn.tailwindcss.com'></script>
        <style>body{font-family: 'Inter', sans-serif;};</style>

        <div class='bg-zinc-900 w-screen h-screen flex flex-col justify-center items-center'>
            <h1 class='text-xl text-white font-bold'>El alumno  <span class='text-red-300'>$nombre</span> ha sido actualizado</h1>
            <br> <a href='../views/viewalumno.php' class='bg-zinc-800 px-10 py-3 rounded-lg text-white text-xs font-bold hover:bg-zinc-400'> REGRESAR </a>
        </div>");
    
    }

    public function AddAlumno($idAlumno,$nombre,$apellido,$correo,$telefono,$programa){
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "insert into alumno (idAlumno, nombre, apellido, correo, telefono, programa) values(?,?,?,?,?,?)";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($idAlumno,$nombre,$apellido,$correo,$telefono,$programa));
        $consulta = null;
        print("
        <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
        <link href='https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap' rel='stylesheet'>
        <script src='https://cdn.tailwindcss.com'></script>
        <style>body{font-family: 'Inter', sans-serif;};</style>

        <div class='bg-zinc-900 w-screen h-screen flex flex-col justify-center items-center'>
            <h1 class='text-xl text-white font-bold'>El alumno  <span class='text-red-300'>$nombre</span> ha sido agregado</h1>
            <br> <a href='../views/viewalumno.php' class='bg-zinc-800 px-10 py-3 rounded-lg text-white text-xs font-bold hover:bg-zinc-400'> REGRESAR </a>
        </div>
        ");

    }

    public function consultarAlumnoXId($idAlumno){
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "select * from alumno where idAlumno = ?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($idAlumno));
        return $consulta;

        $conn = null;
    }

    public function consultarAlumno(){
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "select * from alumno";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute();
        return $consulta;

        $conn = null;
    }

}


?>
