
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Modificar Producto</title>
</head>
<body>
    <div class="container mt-5">
        <h3 class="text-center" >Modificar Proveedor</h3>
        <?php
        include_once ("conexion.php");
        $id = $_GET["id"];

        $sql = $conexion ->query("select * from proveedor where id_proveedor=$id ");
        while ($row=$sql->fetch_array()) {
            ?>
            <form action="" method="POST">
            
            <label for="exampleFormControlInput1" class="form-label mt-2"><h5><b>Nombre Completo</b></h5></label> 
            <input class="form-control  border border-top-0 border border-end-0 border border-start-0 border border-success-subtle border border-3 
            border-opacity-50" type="text" name="nombre" value="<?= $row['nombre_completo'] ?>"  required>

            <label for="exampleFormControlInput1" class="form-label mt-2"><h5><b>Direccion</b></h5></label> 
            <input class="form-control  border border-top-0 border border-end-0 border border-start-0 border border-success-subtle border border-3 
            border-opacity-50" type="text" name="direccion" value="<?= $row['direccion'] ?>" required >
            
            <label for="exampleFormControlInput1" class="form-label mt-2"><h5><b>Telefono</b></h5></label> 
            <input class="form-control  border border-top-0 border border-end-0 border border-start-0 border border-success-subtle border border-3 
            border-opacity-50" type="text" name="telefono" value="<?= $row['telefono'] ?>" required >

            <div class="input-group mb-3 mt-5">
                <label class="input-group-text" for="inputGroupSelect01">Productos</label>
                <select name="elige" class="form-select" id="inputGroupSelect01">
                    <option selected>Elige...</option>   
                    <?php
                    include_once("conexion_input_pro.php");
                    $consulta_datos=$conexion_input_pro->query("select * from productos");
                    
                    while($row=$consulta_datos->fetch_array()){
                        
                        ?>
                        <option value = <?=$row['nombre']?> ><?=$row['nombre'] ?></option>
                    <?php  
                     
                    }
                    
                    ?>
                </select>        
            </div>
            
            <div class="text-center">
            <input type="submit" id="button" name="btnmodificar" class="btn btn-success btn-lg mt-3" value="Modificar">
            </div> 
            <div class="text-center">
                <a href="http://localhost/Taller_php/Principal_admin/principal_admin.php" class="btn btn-danger border border-secondary-subtle btn-lg ">Atras</a>
            </div>
            </form>
            <?php
        }
        
        if(!empty($_POST['btnmodificar'])){
            if(!empty($_POST['nombre']) and !empty($_POST['direccion']) and !empty($_POST['telefono']) and !empty($_POST['elige']) ){
                $nombre = $_POST['nombre'];
                $direccion = $_POST['direccion'];
                $telefono = $_POST['telefono'];
                $producto = $_POST['elige'];
                include_once("conexion.php");
                $sql=$conexion->query("update proveedor set nombre_completo='$nombre', direccion='$direccion', telefono=$telefono, v_producto='$producto' where id_proveedor=$id");
                if ($sql==1) {
                    ?>
                    <div class="alert alert-info mt-5 text-center" role="alert">
                        !!Modificado!! (Da click para Consultar);
                    </div>
                    <div class="text-center mt-4">
                        <a href="http://localhost/Taller_php/Proveedor/consulta_g_proveedor.php" class="btn btn-warning border border-secondary-subtle btn-lg ">Volver Consultar Proveedor</a>
                    </div>
                    <?php
                }else{
                    ?>
                    <div class="alert alert-danger mt-5 text-center" role="alert">
                        !!Error!! (los datos no fueron modificados);
                    </div>
                    <div class="text-center mt-3">
                        <a href="http://localhost/Taller_php/Principal_admin/principal_admin.php" class="btn btn-danger btn-lg mb-4 ">Atras</a> 
                    </div>
                    <?php
                }
            }
        }
        ?>
        
        
    </div>
</body>
</html>