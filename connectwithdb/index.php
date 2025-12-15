<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB</title>
</head>
<body>
    <?php 
    $servername = "localhost";
    $username   = "root";
    $serverpass = "your database password";
    $dbname     = "db_test";


    $connect = mysqli_connect($servername, $username, $serverpass, $dbname);

    if(!$connect)
    {
        echo "Erreur de connexion : " . mysqli_connect_error();
    }else{
        echo "CONNEXION OK";
    }
?>
</body>
</html>
