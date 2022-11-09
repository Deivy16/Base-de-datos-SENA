<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function connect(){
            $host = "localhost";
            $user = "root";
            $pass = "";
            $database = "sena";
        

        try {
            $pdo = new PDO('mysql:host='.$host.';dbname='.$database,$user,$pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;

        }catch(PDOException $e){

            die($e->getmessage());
            
        }
    }
    ?>
</body>
</html>