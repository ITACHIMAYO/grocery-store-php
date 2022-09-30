<?php include_once 'Views/template-principal/header.php'; ?>

<!-- Start Content -->
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body shadow-lg">
                    <div class="table-responsive">
                        <table class="td table table-borderer table-striped align-middle" id="tableDeseo">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Content -->

<?php include_once 'Views/template-principal/footer.php'; ?>
<script src="<?php echo BASE_URL . 'assets/js/modulos/listaDeseo.js'; ?>"></script>