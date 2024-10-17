<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./upload.css">
    <title>Sing In</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
    
    <?php
        include "../../controller/connection.php";
    ?>


    <div class="container">

            <form action="../../controller/actions.php" method="post" class="form-box">
    
                <div class="register-container" id="register">
        
                    <div class="top">
                        <header>Subir Producto</header>
                    </div>
                        
                    <div class="input-box">
                        <input type="text" class="input-field" placeholder="Nombre del Producto" name="name" id="name-products">
                        <i class='bx bxs-food-menu iconoOne'></i>
                    </div>
                        
                    <div class="input-box">
                        <input type="text" class="input-field" placeholder="Precio" name="price" id="price-products">
                        <i class='bx bxs-dollar-circle'></i>
                    </div>
                        

                    <div class="input-box img_box">
                        <input type="file" class="input-field" name="img" id="img-products">
                        <label for="file-upload"></label>
                        <i class='bx bxs-image-alt'></i>
                    </div>
                    
                    <input type="hidden" name="hidden" value="4">
        
                    <div class="input-box">
                        <input type="submit" class="submit" value="Subir">
                    </div>
        
                </div>

            </form>

        </section>

        <?php 
            if(@$_GET['answer']==1){ ?>
                <h2 class="h2_1">Your registration was successful</h2>
            <?php }
            if(@$_GET['answer']==2){ ?>
                <h2 class="h2_2">There were problems registering, please try again later</h2>
            <?php }
        ?>

    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
</body>
</html>