<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://cdn.tailwindcss.com'></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>body{font-family: 'Inter', sans-serif;};</style>
    <title>Document</title>
</head>
<body class="bg-zinc-900">
<form action="../Controllers/controladoralumno.php" method="post"  >

<div class="flex justify-center gap-10  font-medium bg-zinc-800 text-ms">
<button name="volverAlumno" id="volverAlumno" class=" text-white py-2.5 hover: cursor-pointer">Alumno</button>
    <button name="volverCoordinador" id="volverCoordinador" class=" text-white py-2.5  cursor-pointer">Coordinador</button>
    <button name="volverNovedad" id="volverNovedad" class=" text-white py-2.5  cursor-pointer" >Novedades</button>
</div>
</form>

<div class="bg-zinc-900 w-screen flex justify-center items-center">
    
    <?php


        require_once("../models/classalummno.php");
        $id = $_REQUEST['id'];
        $alumno = new Alumno();
        $datos = $alumno -> consultarAlumnoXId($id);
        
        while ($data = $datos -> fetch(PDO::FETCH_ASSOC)){

        
        
        print('
        

        <div class=" py-10 px-5 text-center mt-20">
        <H1 class="text-3xl font-black text-white  -mt-5 mb-5">UPDATE ALUMNO</H1>
            <form action="../Controllers/controladoralumno.php" method="post"  >
            <div class="grid grid-cols-2 gap-2 ">
            <div>
            <input type="text" name="ActNameAlumno" value=" '. $data['nombre']. '" id="ActNameAlumno" placeholder="Nombre" class="bg-zinc-900 border border-zinc-500 border-2 shadow-lg text-zinc-200 text-xs rounded-lg focus:ring-zinc-200 focus:border-zinc-200   p-2.5  " > <br>
            </div>
            
            <div>
            <input type="text" name="ActApellidoAlumno" value=" '. $data['apellido']. '" id="ActApellidoAlumno" placeholder="Apellido" class="bg-zinc-900 border border-zinc-500 border-2 shadow-lg text-zinc-200 text-xs rounded-lg focus:ring-zinc-200 focus:border-zinc-200   p-2.5  " > <br>
            </div>
            
            <div>
            <input type="text" name="ActCorreoAlumno" value=" '. $data['correo']. '" id="ActCorreoAlumno" placeholder="Correo" class="bg-zinc-900 border border-zinc-500 border-2 shadow-lg text-zinc-200 text-xs rounded-lg focus:ring-zinc-200 focus:border-zinc-200   p-2.5  " > <br>
            </div>
            
            <div>
            <input type="text" name="ActTelefonoAlumno"  value=" '. $data['telefono']. '" id="ActTelefonoAlumno" placeholder="Telefono" class="bg-zinc-900 border border-zinc-500 border-2 shadow-lg text-zinc-200 text-xs rounded-lg focus:ring-zinc-200 focus:border-zinc-200   p-2.5  " > <br>
            </div>
            
            <div>
            <input type="text" name="ActProgramaAlumno" value=" '. $data['programa']. '" id="ActProgramaAlumno" placeholder="Programa" class="bg-zinc-900 border border-zinc-500 border-2 shadow-lg text-zinc-200 text-xs rounded-lg focus:ring-zinc-200 focus:border-zinc-200   p-2.5 " > <br>
            
            </div>
            <div>
                <input type="text" name="ActIdAlumno" value=" '. $data['idAlumno']. '" id="ActIdAlumno" placeholder="Id" class="hidden bg-zinc-900 border border-zinc-500 border-2 shadow-lg text-zinc-200 text-xs rounded-lg focus:ring-zinc-200 focus:border-zinc-200   p-2.5  " > <br>
            </div>
            
            <input type="submit" name="btnActAlumno" id="btnActAlumno" class="flex items-center justify-center cursor-pointer col-span-2 bg-gray-200 px-10 py-3 rounded-lg text-zinc-900 text-xs font-bold hover:bg-zinc-500">
            </div>
        
        </form>');

    }
        ?>
</div>
</div>  
</body>
</html>