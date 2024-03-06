<?php
// Paso 1: Conectar a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "comunicados";

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// // Obtiene los puestos de la DB
// $sql = "SELECT DISTINCT puesto FROM atc_staff";
// $result = $conn->query($sql);

// // Paso 3: Mostrar los datos en campos checkbox
// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo '<input type="checkbox" name="puesto[]" value="' . $row["puesto"] . '"> ' . $row["puesto"] . '<br>';
//     }
// } else {
//     echo "0 resultados";
// }