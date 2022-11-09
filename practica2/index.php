<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://cdn.tailwindcss.com'></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>

    <style>

        body{
            font-family: 'Inter', sans-serif;
        };
    </style>

<div class='bg-pink-500 flex justify-center items-center w-screen h-screen gap-4 flex-col'>
        <h1 class="font-bold text-2xl text-white">¿A donde quieres ir?</h1>
        <div class="grid grid-cols-3 gap-x-3 text-center">
            <a href='./views/viewalumno.php?' class="bg-lime-500 px-10 py-3 rounded-lg text-white text-xs font-bold hover:bg-lime-600"> Alumno </a>
            <a href='./views/viewCoordinador.php' class="bg-lime-500 px-10 py-3 rounded-lg text-white text-xs font-bold hover:bg-lime-600"> Coordinador </a>
            <a href='./views/viewNovedades.php' class="bg-lime-500 px-10 py-3 rounded-lg text-white text-xs font-bold hover:bg-lime-600"> Novedades </a>
        </div>
    </div>

</body>
</html>
