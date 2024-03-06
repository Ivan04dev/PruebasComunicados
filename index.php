<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comunicados</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="bootstrap-icons/fonts/bootstrap-icons-min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <h1 class="display-4">Comunicados</h1>
    <div class="container-xl">
        <div class="card">
            <div class="card-body">
                <label for="titulo">Titulo: </label>
                <input class="form-control mb-4" type="text" placeholder="PRUEBA" id="titulo" name="titulo">

                <label for="descripcion">Descripción: </label>
                <input class="form-control mb-4" type="text" placeholder="DESCRIBE EL CONTENIDO" id="descripcion" name="descripcion">

                <button class="btn btn-success" id="botonArchivo"><i class="bi bi-plus-circle"></i></button>
                <br><br>

                <label for="portada">Portada</label>
                <input type="file" name="portada" id="portada">

                <label for="archivos">Archivos</label>
                <input type="file" name="archivos" id="archivos">

                <br><br>


                <h3 for="enviarA">Enviar a:</h3>

                <br>

                <div class="mt-4">
                    <h5 for="puesto">Puesto: </h5>
                    <!-- Hacer una consulta a la DB por puesto -->
                    <?php include 'conexion.php'; 
                        

                        // Obtiene los puestos de la DB
                        $sql = "SELECT DISTINCT puesto FROM atc_staff WHERE puesto NOT IN('Administrativo','Ejecutivo BO Tiendas') ORDER BY puesto DESC";
                        $result = $conn->query($sql);

                        // Paso 3: Mostrar los datos en campos checkbox
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo '<input type="checkbox" id="puesto" name="puesto[]" value="' . $puesto = $row["puesto"] . '"> ' . $row["puesto"] . '<br>';
                                // <input type="checkbox" id="miCheckbox" value="miValor" onclick="obtenerValorCheckbox()">

                            }
                        } else {
                            echo "0 resultados";
                        }
                    ?>
                        
                    <!-- <input type="checkbox" name="ejecutivoATC" id="ejecutivoATC">
                    <label for="ejecutivoATC">Ejecutivo ATC</label>

                    <input type="checkbox" name="ejecutivoSRATC" id="ejecutivoSRATC">
                    <label for="ejecutivoSRATC">Ejecutivo Sr ATC</label>

                    <input type="checkbox" name="jefeATC" id="jefeATC">
                    <label for="jefeATC">Jefe ATC</label>

                    <input type="checkbox" name="jefeRegionalATC" id="jefeRegionalATC">
                    <label for="jefeRegionalATC">Jefe Regional ATC</label>

                    <input type="checkbox" name="gerenteATC" id="gerenteATC">
                    <label for="gerenteATC">Gerente ATC</label> -->
                </div>

                <!-- Marca -->
                <div class="mt-4">
                    <!-- <h5 for="puesto">Marca: </h5>

                    <input type="checkbox" name="izzi" id="izzi">
                    <label for="izzi">izzi</label>

                    <input type="checkbox" name="wizz" id="wizz">
                    <label for="wizz">wizz</label>

                    <input type="checkbox" name="wizzplus" id="wizzplus">
                    <label for="wizzplus">wizz plus</label> -->

                    <?php
                        // Obtiene los puestos de la DB
                        $sql = "SELECT DISTINCT marca FROM atc_sucursal";
                        $result = $conn->query($sql);

                        // Paso 3: Mostrar los datos en campos checkbox
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo '<input type="checkbox" name="marca[]" value="' . $row["marca"] . '"> ' . $row["marca"] . '<br>';
                            }
                        } else {
                            echo "0 resultados";
                        }
                    ?>

                    <!-- Ver Ciudad -->
                    <div class="mt-4">
                        <input type="checkbox" name="ciudades" id="ciudades">
                        <label for="ciudades">Ver Ciudades</label>
                    </div>
                </div>

                <!-- Divisiones -->
                <div class="divisiones">
                        <?php
                            // Obtiene los puestos de la DB
                            $sql = "SELECT DISTINCT division FROM atc_sucursal ORDER BY division ASC";
                            $result = $conn->query($sql);

                            // Paso 3: Mostrar los datos en campos checkbox
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo '<input type="checkbox" name="division[]" value="' . $row["division"] . '"> ' . $row["division"] . '<br>';
                                }
                            } else {
                                echo "0 resultados";
                            }
                        ?>
                </div>

            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>   
    <script src="js/app.js"></script>
</body>
</html>