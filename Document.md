# Documentacion del proyecto TodoList
 Este proyecto se desarrollara con lenguaje de programacion en php y como gestor de Base de Datos el MySQL y un poco de JavaScript.
## 1 Conexion a la base de datos 

Primero, se establece una conexión a la base de datos MySQL utilizando PHP y la extensión MySQLi. A continuación, se detalla el código relevante:
## Conexión a la Base de Datos

El siguiente código PHP se utiliza para establecer una conexión a la base de datos MySQL:

```php
<?php

// Parámetros de conexión a la base de datos
$dbhost = "localhost";
$dbusername = "root";
$dbpassword = "";
$database = "task";

// Crear una nueva conexión utilizando MySQLi
$mysqli = new mysqli($dbhost, $dbusername, $dbpassword, $database);

// Verificar si la conexión se estableció correctamente
if ($mysqli->connect_error) {
    // En caso de error de conexión, se cierra la conexión y se muestra un mensaje de error
    $mysqli->close();
    die("Connection failed: " . $mysqli->connect_error);
    exit(); // Se sale del script
}
```
## Se crea el archivo index para implentar el login de ingreso
![Login de ingreso al aplicativo todolist](assets/login.png) 
