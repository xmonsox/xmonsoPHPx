<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Lecturaleza</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top menu">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost/Taller_php/Principal_admin/principal_admin.php">Agroecologia</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://localhost/Taller_php/Producto/producto.php">Registrar Productos</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="http://localhost/Taller_php/Proveedor/Proveedor.php">Registrar Proveedores</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="http://localhost/Taller_php/Producto/consulta.php">Consultar Producto</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="http://localhost/Taller_php/caja/consulta_reporte.php">Consultar Reporte</a>
                    </li>
                    
                    <li class="nav-item">
                    <a class="nav-link disabled">lecturaleza</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" name="logueo">
                </form>
            </div>
        </div>
    </nav>
    <div class="container mb-5">
        <h3 class="mt-5 text-center">Destacados</h3>
        <div class="row mt-5 ">
            <div class="col-sm-4 ">
                <div class="card" style="width: 18rem;">
                    <img src="img/cucho.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>Agricultor</h4>
                        <p class="card-text">Jorge Gonzalez</p>
                        <p>¡Descubre la magia del campo en cada bocado! Agricultores apasionados cultivando productos frescos y deliciosos para tu deleite. 
                            ¡Apoya la agricultura local y disfruta de la calidad que solo la naturaleza puede brindarte!</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="img/campesino.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>Agricultor</h4>
                        <p class="card-text">Pedro Motoa</p>
                        <p>¡Descubre la magia del campo en cada bocado! Agricultores apasionados cultivando productos frescos y deliciosos para tu deleite. 
                            ¡Apoya la agricultura local y disfruta de la calidad que solo la naturaleza puede brindarte!</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="img/campesino.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>Agricultor</h4>
                        <p class="card-text">Luis Villa</p>
                        <p>¡Descubre la magia del campo en cada bocado! Agricultores apasionados cultivando productos frescos y deliciosos para tu deleite. 
                            ¡Apoya la agricultura local y disfruta de la calidad que solo la naturaleza puede brindarte!</p>
                    </div>
                </div>
            </div>
        </div>
            <div class="text-center d-grid gap-2 col-6 mx-auto mt-3 mb-3">
                <a href="http://localhost/Taller_php/Proveedor/consulta_g_proveedor.php" class="btn btn-success">Consultar Proveedor</a>
            </div> 
        <div class="row mt-5 ">
            <div class="col-sm-4 ">
                <div class="card" style="width: 18rem;">
                    <img src="img/grisori.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>Producto</h4>
                        <p class="card-text">Serum</p>
                        <p>Revitaliza tu piel con nuestros productos líquidos de lujo. Experimenta el poder transformador de nuestras fórmulas cuidadosamente diseñadas para nutrir, hidratar y rejuvenecer tu piel.
                             ¡Sumérgete en una experiencia sensorial única y despierta tu belleza interior con nuestra gama de productos líquidos de calidad premium!</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="img/rosaori.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>Producto</h4>
                        <p class="card-text">Nine</p>
                        <p>Revitaliza tu piel con nuestros productos líquidos de lujo. Experimenta el poder transformador de nuestras fórmulas cuidadosamente diseñadas para nutrir, hidratar y rejuvenecer tu piel.
                             ¡Sumérgete en una experiencia sensorial única y despierta tu belleza interior con nuestra gama de productos líquidos de calidad premium!</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="img/verdeori.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>Producto</h4>
                        <p class="card-text">Nivea</p>
                        <p>Revitaliza tu piel con nuestros productos líquidos de lujo. Experimenta el poder transformador de nuestras fórmulas cuidadosamente diseñadas para nutrir, hidratar y rejuvenecer tu piel.
                             ¡Sumérgete en una experiencia sensorial única y despierta tu belleza interior con nuestra gama de productos líquidos de calidad premium!</p>
                    </div>
                </div>
            </div>
            
            <div class="text-center d-grid gap-2 col-6 mx-auto mt-3 mb-3">
                <a href="http://localhost/Taller_php/caja/caja.php" class="btn btn-success">Comprar Producto</a>
            </div> 
        </div>  
    </div> 
</body>
</html>