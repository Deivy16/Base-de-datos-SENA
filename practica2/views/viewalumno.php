
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <script src="./java.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Document</title>
</head>


<body class="bg-zinc-900 text-center">
    
<style>
    body{
        font-family: 'Inter', sans-serif;

    };
</style>

<body class="bg-zinc-900 text-center">
    
<style>
    body{
        font-family: 'Inter', sans-serif;

    };
</style>
<form action="../Controllers/controladoralumno.php" method="post"  >

    <div class="flex justify-center gap-10  font-medium bg-zinc-800 text-ms">
    <button name="volverAlumno" id="volverAlumno" class=" text-white py-2.5 hover: cursor-pointer">Alumno</button>
        <button name="volverCoordinador" id="volverCoordinador" class=" text-white py-2.5  cursor-pointer">Coordinador</button>
        <button name="volverNovedad" id="volverNovedad" class=" text-white py-2.5  cursor-pointer" >Novedades</button>
</div>
</form>

    <div class=" container rounded-xl shadow-lg mt-7 p-6 bg-zinc-800">
    <H1 class="container text-2xl font-black text-white  text-center">ALUMNO</H1>
    <br>
    <table id="example"  class="table-fixed w-full  border-collapse">
    <thead>
        
        <tr class="text-gray-200">
            <th>Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Program</th>
            <th class="hidden">Id</th>
            <th></th>

            
        </tr>
    </thead>
    <tbody class="text-xs font-medium text-gray-400 ">
<?php
    
        require_once("../models/classalummno.php");
        $alumno = new alumno();
        $datos = $alumno -> consultarAlumno();
        

        while($data=$datos -> fetch(PDO::FETCH_ASSOC)){

            print('

            
            
            
                <tr class="mt-10">
                
                <td>'.$data["nombre"].'</td>
                <td>'.$data["apellido"].'</td>
                <td>'.$data["correo"].'</td>
                <td>'.$data["telefono"].'</td>
                <td>'.$data["programa"].'</td>
                <td class="hidden">'. $data["idAlumno"]. ' </td>
                    
                    <td>
                        <div class="flex items-center justify-center gap-x-2">
                        <a href="../Controllers/controladoralumno.php?id='.$data["idAlumno"].'&value=actualiza">
                        <button type="submit" name="btnactualizarAlumno" id="btnactualizarAlumno" value="ACTUALIZAR" class=" flex items-center text-gray-700  bg-sky-500 p-2 rounded-lg hover:bg-sky-600 font-bold ">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                    Update
                        </button>
                        </a>
        
                        <a href="../Controllers/controladoralumno.php?id='. $data["idAlumno"]. ' &value=Borra"> 
                        <button type="button" name="btnBorrarAlumno" id="btnBorrarAlumno" value="BORRAR" class="text-gray-700 flex items-center bg-red-500 p-2 rounded-lg hover:bg-red-600 font-bold">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                        Delete
                        </button>
                        </a>
                        </div>
                   </td>
                </tr>           
        ');
        
        }
    
    ?>
    </tbody>
            
            </table> 
            
            
            
            
            </div>
            <br>
            <div class=" container flex justify-start items-center gap-2 mb-4">
                
                <form action="../Controllers/controladoralumno.php" method="REQUEST">
                <br>
                <button type="submit" value="CREAR" name="btnAlumno" id="btnAlumno" value="Crear" class="flex font-bold text-sm items-center bg-gray-50 p-2 rounded-lg hover:bg-gray-200">
                <svg class="w-5 h-5" fill="white" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                Create
                </button>
                
                
                
                
                
            
            
            </div> 
    
</body>

</html>


