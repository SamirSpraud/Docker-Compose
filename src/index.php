<!DOCTYPE html>
<html>
<head>
    <title>Hola Mundo PHP</title>
</head>
<body>
    <h1>Hola Mundo desde PHP</h1>
    <?php
    $host = 'mysql';
    $user = 'root';
    $password = 'password';
    $database = 'myapp';

    // Conectar a MySQL
    $mysqli = new mysqli($host, $user, $password, $database);

    // Verificar conexión
    if ($mysqli->connect_error) {
        die('Error de Conexion (' . $mysqli->connect_errno . ') '
                . $mysqli->connect_error);
    }
    echo '<p>Conexion exitosa a MySQL!</p>';

    // Cerrar conexión
    $mysqli->close();
    ?>
</body>
</html>
