<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $curso_id = $_POST['curso_id'];

    $db = new Database();
    $db->query("INSERT INTO Estudiantes (nombre, apellido, email, curso_id) VALUES (?, ?, ?, ?)", [$nombre, $apellido, $email, $curso_id]);

    echo "Estudiante registrado correctamente";
}
?>
