<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./show.css">
    <title>Sing In</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>

    <?php 
        include "../../controller/details.php";
    ?>

    <div class="container">

        <table>

            <thead>
    <th>Imagen</th>
    <th>Nombre</th>
    <th>Categoría</th>
    <th>Precio</th>
    <th>Descripción</th>
    <th>Status</th>
    <th>Acciones</th>
            </thead>

            <tbody>
    <td><img src="./pastelito.jpg" alt="pastelito"></td>
    <td>Pastelito de Papa con Queso</td>
    <td>Pastelito</td>
    <td>Bs. 40</td>
    <td>Relleno de Papa con Queso</td>
    <td>
        <button class="button_status_1">
            <i class='bx bx-check-circle'></i>
        </button>
        <button class="button_status_2">
            <i class='bx bx-x-circle'></i>
        </button>
    </td>
    <td>
        <button class="button_action_1"><i class='bx bx-edit-alt'></i></button>
        <button class="button_action_2"><i class='bx bx-trash'></i></button>
    </td>
            </tbody>

        </table>

    </div>
    

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
</body>
</html>