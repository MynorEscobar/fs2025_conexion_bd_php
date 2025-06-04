<?php
// procesar.php
// Recibe datos en formato JSON
$input = file_get_contents("php://input");
$datos = json_decode($input, true);

$nombre = $datos["nombre"] ?? "Desconocido";
$edad = $datos["edad"] ?? "No especificada";

// Respuesta en formato JSON
$respuesta = [
  "mensaje" => "Hola $nombre, tienes $edad años.",
  "status" => "ok"
];

header("Content-Type: application/json");
echo json_encode($respuesta);
?>
