<?php

require("db.php");

$query = "SELECT * FROM chucherias";

// Preparar consulta PDO
$stmt = $conn->prepare($query);

// Ejecutar consulta
$stmt->execute();

// Iniciar la tabla HTML
echo '<table>';
echo '<thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Precio Unitario</th>
            <th>Peso</th>
            <th>Calorias Unidad</th>
        
        </tr>
      </thead>';
echo '<tbody>';

// Fetch de los resultados
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    // Asegúrate de que los nombres de columna coincidan con tu base de datos
    echo '<tr> 
            <td>'.$row["id"].'</td> 
            <td>'.$row["Nombre"].'</td> 
            <td>'.$row["Precio Unitario"].'</td> 
            <td>'.$row["Peso"].'</td> 
            <td>'.$row["Calorias Unidad"].'</td> 
        </tr>';
}

// Cierra tbody y la tabla
echo '</tbody>';
echo '</table>';

?>