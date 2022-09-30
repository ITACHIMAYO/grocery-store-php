<?php include_once 'Views/template-principal/header.php';
?>
<!-- Banner-->
<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="<?php echo BASE_URL; ?>assets/img/carrusel/burger.png" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left align-self-center">
                            <h1 class="h1 text-success"><b>BACON</b> KING</h1>
                            <h3 class="h2">No hay tal cosa como el sabor a la parrilla</h3>
                            <p>
                                Nuestra BACON KING cuenta con dos carnes de res a la parrilla, cubiertas con una porción abundante de crujiente tocino, queso americano, cátsup y cremosa mayonesa, sobre un pan suave con ajonjolí. ¡Pídela en COMBO con papas a la francesa y refresco frío!
                                1325 CAL / 336 G.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="<?php echo BASE_URL; ?>assets/img/carrusel/pasta.png" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <h1 class="h1 text-success"><b>SPAGHETTI</b> ALLA BOLOGNESE</h1>
                            <h3 class="h2">Déjate robar una sonrisa, por el sabor nuestra mesa.</h3>
                            <p>
                                Disfruta de nuestra clásica pasta al dente,
                                preparada con carne de res y nuestra exquisita salsa de tomate Italianni´s.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="<?php echo BASE_URL; ?>assets/img/carrusel/pastel.png" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <h1 class="h1 text-success"><b>PASTEL</b> DE CHOCOLATE</h1>
                            <h3 class="h2">
                                Llegas por un abre bocas y te quedas hasta el postre. </h3>
                            <p>
                                El pastel de chocolate es un postre delicioso. Se conoce también como torta o tarta de chocolate.
                                Suele estar presente en ocasiones sociales importantes como bodas y cumpleaños.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
        <i class="fa fa-chevron-right"></i>
    </a>
</div>
<!--Banner-->

<!-- Categories -->

<section class="container py-5">
    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Categorias</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, voluptatibus!
            </p>
        </div>
    </div>
    <div class="row">
        <?php foreach ($data['categorias'] as $categoria) { ?>
            <div class="col-12 col-md-3 p-5 mt-3">
                <a href="<?php echo BASE_URL . 'principal/categorias/' . $categoria['id']; ?>"><img src="<?php echo $categoria['imagen']; ?>" class=" rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3"><?php echo $categoria['categoria']; ?></h5>
            </div>
        <?php } ?>
    </div>
</section>
<!--Categories -->

<!--Product -->
<section class="bg-light">
    <div class="container py-5">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Nuevos Productos</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, adipisci!
                </p>
            </div>
        </div>
        <div class="row">
            <?php foreach ($data['nuevosProductos'] as $productos) { ?>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="<?php echo BASE_URL . 'principal/detail/' . $productos['id']; ?>">
                            <img src="<?php echo $productos['imagen']; ?>" class="card-img-top" alt="<?php echo $productos['nombre']; ?>">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-success fa fa-star"></i>
                                    <i class="text-success fa fa-star"></i>
                                    <i class="text-success fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right"><?php echo MONEDA . ' ' . $productos['precio']; ?></li>
                            </ul>
                            <a href="<?php echo BASE_URL . 'principal/detail/' . $productos['id']; ?>" class="h2 text-decoration-none text-dark"><?php echo $productos['nombre']; ?></a>
                            <p class="card-text"><?php echo $productos['descripcion']; ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!--Product -->

<?php include_once 'Views/template-principal/footer.php'; ?>