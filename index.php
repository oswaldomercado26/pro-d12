<!DOCTYPE html>
<?php include('conexion.php');?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Intro</title>
</head>
<body>
    <h1>Manejador de tareas</h1>
    
    <form action="store.php" method="POST">
        <label for="nombre_tarea">Nombre de Tarea</label>
        <input type="text" name ="tarea">
        <br>
        <label for="descripcion">Descripcion</label><br>
        <textarea name="descripcion" cols ="30" rows="3"></textarea>
        <br>
        <label for="prioridad">Prioridad</label><br>
        <select name="prioridad">
            <option value="Alta">Alta</option>
            <option value="Meida">Media</option>
            <option value="Baja">Baja</option>           
        </select>
        <br>
        <input type="checkbox" name="urgente" value="1">
        <label for="urgente">Urgente</label>
        
        <br>
        <input type="radio" name="tipo" value="escuela">
        <label for="tipo">Escuela</label>

        <input type="radio" name="tipo" value="trabajo">
        <label for="tipo">Trabajo</label>
        <br>
        <input type="submit" value="Enviar">


    </form>

    <hr>

    <h2>Lista de Tareas</h2>
    <?php
    $sql ="SELECT * FROM tareas";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    echo"<table border='1'>";
    echo "<tr> <th>ID</th> <th>Tarea</th> <th>Descripcion</th> </tr>";
    foreach($stmt->fetchAll() as $tarea){
        echo "<tr>
            <td>". $tarea['id']. "</td>
            <td>". $tarea['tarea']. "</td>
            <td>". $tarea['descripcion']. "</td>
            </tr>";
    }
    echo "</table>";
   
    ?>

</body>
</html>