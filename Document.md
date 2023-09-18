# Documentacion del proyecto TodoList
 Este proyecto se desarrollara con lenguaje de programacion en php y como gestor de Base de Datos el MySQL y un poco de JavaScript.
## 1. Conexion a la base de datos 

Primero, se establece una conexión a la base de datos MySQL utilizando PHP y la extensión MySQLi. A continuación, se detalla el código relevante:
### Conexión a la Base de Datos

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
## 2. Se crea el archivo index.php para implentar el login de ingreso
![Login de ingreso al aplicativo todolist](assets/login.png) 
## 3 Se crea el archivo LoginAcc.php para la Autenticación de Usuario y Verificación de Contraseña
```php
<?php

// Obtener el correo electrónico y la contraseña del formulario POST
$email = $_POST['email'];
$password = $_POST['password'];

// Requerir el archivo de conexión a la base de datos
require_once 'Conexion.php';

// Comprobar si el correo electrónico existe en la base de datos
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $mysqli->query($sql);

if ($result->num_rows == 0) {
    // El correo electrónico no fue encontrado en la base de datos
    $error_message = 'El correo electrónico no existe';
    $mysqli->close();
    header('Location: index.php?error=' . urlencode($error_message));
    exit();
}

// Obtener la contraseña hash almacenada en la base de datos
$row = $result->fetch_assoc();
$hashedPassword = $row['password'];

if (password_verify($password, $hashedPassword)) {
    // Contraseña correcta: Iniciar sesión
    session_start();
    $_SESSION['email'] = $email;
    $mysqli->close();
    header('Location: MenuPrincipal.php');
    exit();
} else {
    // Contraseña incorrecta: Redirigir al formulario de inicio de sesión con un mensaje de error
    $error_message = 'Contraseña incorrecta';
    $mysqli->close();
    header('Location: login.php?error=' . urlencode($error_message));
    exit();
}
```