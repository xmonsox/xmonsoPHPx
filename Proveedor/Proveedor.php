<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Registrar Proveedor</title>
</head>
<body>

        <?php
        if(empty($_REQUEST)){
        ?>
        <div class="container-fluid">
        <form class="mx-auto" method="post" action="">
            <h4 class="text-center">Registro Proveedor</h4>
            <div class="mb-3 mt-5">
                <label for="exampleInputEmail1" class="form-label">Nombre Completo</label>
                <input type="text" class="form-control" name="nombre" id="exampleInputEmail1" aria-describedby="emailHelp">
                
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Direccion</label>
                <input type="text" class="form-control" name="direccion" >
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Telefono</label>
                <input type="text" class="form-control" name="telefono" >
            </div>

            <div class="input-group mb-3 mt-5">
                <label class="input-group-text" for="inputGroupSelect01">Options</label>
                <select name="elige" class="form-select" id="inputGroupSelect01">
                    <option selected>Elige...</option>   
                    <?php
                    include_once("conexion_input_pro.php");
                    $consulta_datos=$conexion_input_pro->query("select * from productos");
                    $i = 1;
                    while($row=$consulta_datos->fetch_array()){
                        
                        ?>
                        <option value = <?=$i?> ><?=$row['nombre'] ?></option>
                    <?php  
                    $i++;  
                    }
                    
                    ?>
                </select>        
            </div>
            
            <input type="submit" class="btn btn-success " value="Registrar"></input>
            <a href="http://localhost/Taller_php/Principal_admin/principal_admin.php" class="btn btn-warning">Atras</a>

        </form>
        
                <?php
            }else if(isset($_REQUEST['telefono'])){
                $nombre = $_REQUEST['nombre'];
                $direccion = $_REQUEST['direccion'];
                $telefono = $_REQUEST['telefono'];
                $elige = $_REQUEST['elige'];
                include_once("conexion.php");
                $conexion->query("insert into proveedor(nombre_completo, direccion, telefono, v_producto) values ('$_REQUEST[nombre]', '$_REQUEST[direccion]', 
                $_REQUEST[telefono], '$_REQUEST[elige]')");
                ?>
                
                <div class="container-fluid">
                <a href="http://localhost/Taller_php/Proveedor/consulta_g_proveedor.php" class="btn btn-success btn-lg ">Consultar Proveedores</a>
                <a href="http://localhost/Taller_php/Proveedor/Proveedor.php" class="btn btn-danger border border-secondary-subtle btn-lg ">Atras</a>
                </div>
                
            <?php
            }
            ?>
        </div>
    </div>
</body>
</html>