<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Aquí puedes agregar la lógica para guardar el usuario en la base de datos
    // Por ejemplo, utilizando MySQL:
    // $conn = new mysqli('localhost', 'usuario', 'contraseña', 'base_de_datos');
    // $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
    // if ($conn->query($sql) === TRUE) {
    //     echo "Registro exitoso";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }
    // $conn->close();

    // En este ejemplo, simplemente vamos a crear una sesión:
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;

    echo "Registro exitoso. Bienvenido, " . $_SESSION['username'];
}
?>
