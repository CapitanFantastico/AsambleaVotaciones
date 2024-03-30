
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Usuario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .container {
            border: ridge;
            background-color: #fff;
            border-radius: 50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 25px;
            margin-bottom: 30px;
        }

        .container h2 {
            margin-bottom: 10px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group textarea {
            margin-bottom: 30px;
            width: 94%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius:30px;
        }

        .form-group input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 30px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .form-group input[type="submit"]:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

    .container ul {
        list-style-type: none;
        padding: 0;
        text-align: justify; /* Alinea los elementos del menú al centro */
        margin-top: 0px;
    margin-bottom: 0px;
    }

    .container ul li {
        display: inline-block; /* Coloca los elementos en línea */
        margin-right: 10px; /* Espacio entre los elementos */
    }

    .container ul li a {
        display: block;
        padding: 10px 20px;
        text-decoration: none;
        color: #333;
        background-color: #f2f2f2;
        border-radius: 20px;
        transition: background-color 0.3s ease;
    }

    .container ul li a:hover {
        background-color: #ccc;
    }     

    .encabezado {
        text-align: center;
        font-family: Arial, sans-serif;
        font-size: 24px;
        color: #333;
        margin-bottom: 20px;
        text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.1); /* Sombra suave */
        padding: 15px 20px; /* Ajustar el espacio alrededor del texto */
        border-radius: 50%; /* Hacer que el contenedor sea circular */
        background-color: #f2f2f2; /* Color de fondo del círculo */
        font-weight: bold; /* Texto en negrita */
        font-style: italic; /* Texto en cursiva */
    }

    .encabezado span {
        color: #007bff; /* Color azul para resaltar los datos */
        font-weight: bold; /* Texto en negrita para resaltar */
        font-style: italic; /* Texto en cursiva */
    }

    </style>
</head>
<body>

    <div class="container">
        <?php include 'encabezado.php'; ?>
        <h2>Menú</h2>
        <ul>
            <li><a href="actualizar_datos.php?id=<?php echo $id; ?>">Actualizar datos</a></li>
            <li><a href="votaciones.php?id=<?php echo $id; ?>">Votaciones</a></li>
        </ul>
    </div>

    <div class="container">
        <h2>Registro de Propuestas</h2>
        <form action="registrar_propuesta.php" method="post" class="form-group">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="titulo">Título de la Propuesta:</label>
            <input type="text" id="titulo" name="titulo" required>
            <label for="descripcion">Descripción de la Propuesta:</label>
            <textarea id="descripcion" name="descripcion" rows="4" required></textarea>
            <input type="submit" value="Registrar Propuesta">
        </form>
    </div>

    <div class="container">

        <h2>Visualización de Propuestas</h2>
        <form class="form-group">
        <table>
            <tr>
                <th>IdPropuesta</th>
                <th>Título</th>
                <th>Descripción</th>
                <th>Votos</th>
            </tr>
                <?php include 'visualizacion_propuesta.php'; ?>
        </table>
    </form>
    </div>

    <div class="container">
        <h2>Actualizacion de Propuesta</h2>
        <form action="actualizar_propuesta.php" method="post" class="form-group">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="id_propuesta">ID de la Propuesta a editar:</label>
            <input type="text" id="ideditar" name="ideditar" required>
            <label for="titulo">Título de la Propuesta:</label>
            <input type="text" id="titulo" name="titulo" required>
            <label for="descripcion">Descripción de la Propuesta:</label>
            <textarea id="descripcion" name="descripcion" rows="4" required></textarea>            
            <input type="submit" value="Actualizar Propuesta">
        </form>
    </div>

    <div class="container">
        <h2>Eliminación de Propuesta</h2>
        <form action="eliminar_propuesta.php" method="post" class="form-group">
            <label for="id_eliminar">ID de la Propuesta a Eliminar:</label>
            <input type="text" id="id_eliminar" name="id_eliminar" required>
            <input type="submit" value="Eliminar Propuesta">
        </form>
    </div>
</body>
</html>