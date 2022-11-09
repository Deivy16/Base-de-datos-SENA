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
<form action="../Controllers/controladoralumno.php" method="post"  >
<body class="bg-zinc-900">
<div class="flex justify-center gap-10  font-medium bg-zinc-800 text-ms">
        <button name="volverAlumno" id="volverAlumno" class=" text-white py-2.5 hover: cursor-pointer">Alumno</button>
        <button name="volverCoordinador" id="volverCoordinador" class=" text-white py-2.5  cursor-pointer">Coordinador</button>
        <button name="volverNovedad" id="volverNovedad" class=" text-white py-2.5  cursor-pointer" >Novedades</button>
    </div>
 
    <div class="w-screen  flex justify-center items-center">
    <div class=" rounded-xl  py-10 px-5 text-center mt-20">
    <H1 class="text-4xl font-black text-white  -mt-5 mb-5">CREATE ALUMNO</H1>
    <h1></h1>
        
        <div class="grid grid-cols-2 gap-2 ">
            <div>
                <input type="text" name="newNameAlumno" id="newNameAlumno" placeholder="Name" class="bg-zinc-900 border border-zinc-500 border-2 shadow-lg text-zinc-200 text-xs rounded-lg focus:ring-zinc-200 focus:border-zinc-200   p-2.5 " > <br>
            </div>
            
            <div>
                <input type="text" name="newApellidoAlumno" id="newApellidoAlumno" placeholder="Fullname" class="bg-zinc-900 border border-zinc-500 border-2 shadow-lg text-zinc-200 text-xs rounded-lg focus:ring-zinc-200 focus:border-zinc-200   p-2.5 " > <br>
            </div>

        <div>
        <input type="text" name="newCorreoAlumno" id="newCorreoAlumno" placeholder="Email" class="bg-zinc-900 border border-zinc-500 border-2 shadow-lg text-zinc-200 text-xs rounded-lg focus:ring-zinc-200 focus:border-zinc-200   p-2.5 " > <br>
        </div>
        
        <div>
            <input type="text" name="newTelefonoAlumno" id="newTelefonoAlumno" placeholder="Phone" class="bg-zinc-900 border border-zinc-500 border-2 shadow-lg text-zinc-200 text-xs rounded-lg focus:ring-zinc-200 focus:border-zinc-200   p-2.5 " > <br>
        </div>
        
        <div>
            <input type="text" name="newProgramaAlumno" id="newProgramaAlumno" placeholder="Program" class="bg-zinc-900 border border-zinc-500 border-2 shadow-lg text-zinc-200 text-xs rounded-lg focus:ring-zinc-200 focus:border-zinc-200  p-2.5 " > <br>
            
        </div>
        <div class="">
            <input type="text" name="newIdAlumno" id="newIdAlumno" placeholder="Id" class="hidden bg-zinc-900 border border-zinc-500 border-2 shadow-lg text-zinc-200 text-xs rounded-lg focus:ring-zinc-200 focus:border-zinc-200   p-2.5 " > <br>
        </div>
        
        <input type="submit" name="btnNewAlumno" value="Create" id="btnNewAlumno" class="flex items-center justify-center cursor-pointer col-span-2 bg-gray-200 px-10 py-3 rounded-lg text-zinc-900 text-xs font-bold hover:bg-zinc-500">
        
        </div>
       
    </div>
</div>  
</form>
</body>
</html>