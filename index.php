<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <style>
        html {
            background: grey;
        }

        div {
            background-color: grey;
            padding: 20px;
            margin: 20px auto;
            width: 80%;
        }

        table {
            width: 100%;
            border: 1px solid #f0f0f0;
            border-collapse: collapse;
        }

        tr, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        a {
            text-decoration: none;
            background: linear-gradient(45deg, aqua, lightblue,red);
            color: black;
            padding: 6px;
            border-radius: 15px;
        }

     
        .botones-derecha {
    text-align: right;
    margin-bottom: 20px;
    margin-left: auto; 
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    margin: 0 5px;
    text-decoration: none;
    border-radius: 5px;
    color: white;
    font-weight: bold;
}

.multicolor {
    background: linear-gradient(45deg, aqua, lightblue,red);
    background-size: 400% 400%;
    animation: gradientAnimation 5s ease infinite;
}

@keyframes gradientAnimation {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

.btn-guardar {
    background-color: #4CAF50; 
    border: none;
    padding: 10px 20px;
    color: white;
    border-radius: 5px;
    font-weight: bold;
    cursor: pointer; 
}


    </style>
</head>
<body>
    <div class="contenedor">

        <div class="botones">

    <div class="botones-derecha">
        <a href="nuevo.php" class="btn multicolor">Nuevo usuario</a>
        <a href="sesion.php" class="btn multicolor">Cerrar sesión</a>
    </div>
        <h1>Mostrar datos</h1>

        <table class="tabla">
            <tr>
                <td>ID</td>
                <td>USUARIO</td>
                <td>NOMBRE</td>
                <td>ACCIONES</td>
            </tr>

            <?php 
            include("conexion.php");
            $consultas = $conexion->query("SELECT * FROM usuario");

            foreach ($consultas as $fila) {
                echo "<tr>";
                echo "<td>".$fila['id']."</td>";
                echo "<td>".$fila['usuario']."</td>";
                echo "<td>".$fila['nombre']."</td>";
                echo "<td>";
                echo "<a href='editar.php?id=".$fila['id']."'>Editar</a> ";
                echo "";
                echo "<a href='eliminar.php?id=".$fila['id']."'>Eliminar</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
