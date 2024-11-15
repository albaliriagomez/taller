<?php
require 'db.php';

$db = new Database();
$cursos = $db->query("SELECT * FROM Cursos");

echo json_encode($cursos);
?>
