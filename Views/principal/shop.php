<?php include_once 'Views/template-principal/header.php';
?>

<!-- Start Content -->
<div class="container py-5">
    <div class="row">

        <div class="col-lg-12">
            <div class="row">
                <?php foreach ($data['productos'] as $productos) { ?>
                    <div class="col-md-3">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="<?php echo $productos['imagen'] ?>">
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-success text-white btnAddDeseo" href="#" prod="<?php echo $productos['id'] ?>">Guardar</i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="<?php echo BASE_URL . 'principal/detail/' . $productos['id']; ?>">Observar</a></li>
                                        <li><a class="btn btn-success text-white mt-2 btnAddCarrito" href="#" prod="<?php echo $productos['id'] ?>">Comprar</i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=" card-body">
                                <a href="<?php echo BASE_URL . 'principal/detail/' . $productos['id']; ?>" class="h3 text-decoration-none"><?php echo $productos['nombre'] ?></a>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">

                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <p class="text-center mb-0"><?php echo MONEDA . ' ' . $productos['precio'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- End Content -->
<?php include_once 'Views/template-principal/footer.php';
?>