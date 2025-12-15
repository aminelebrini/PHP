<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB</title>
</head>
<body>
   <body>
    <?php 
    $servername = "localhost";
    $username   = "root";
    $serverpass = "123456";
    $dbname     = "db_test";

try {
    $connection = new PDO(
        "mysql:host=$servername;dbname=$dbname;charset=utf8",
        $username,
        $serverpass
    );
    echo "Connexion OK";
    } catch (PDOException $e) {
        echo "Erreur de connexion";
    }

?>

</body>
</body>
</html>