<?php include_once 'Views/template-principal/header.php';
?>


<section id="banner-contact">
    <h1>Conoce todo sobre nosotros</h1>
    <p>Nuestra ubicación</p>
</section>

<section id="contact-details" class="section-p1">
    <div class="details">
        <span>Ponerse en contacto</span>
        <h2>Visite una de nuestras ubicaciones</h2>
        <div>
            <li>
                <i class='bx bx-map-alt'></i>
                <p>Av. Cuauhtemoc 40 Acapulco Guerrero</p>
            </li>
            <li>
                <i class='bx bxs-phone'></i>
                <p>+01 2222 365 /(+52)744251555544</p>
            </li>
            <li>
                <i class='bx bxl-gmail'></i>
                <p>contact@example.com</p>
            </li>
            <li>
                <i class='bx bx-alarm'></i>
                <p>Lunes-Viernes, 10am-8:00pm</p>
            </li>
        </div>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7525.138889154291!2d-99.
                14432714857361!3d19.431000406579578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
                1!3m3!1m2!1s0x85d1f92b75aa014d%3A0x17d810d20da6e8cf!2sPalacio%20de%20Bellas%20Artes!5e0!3m2!1ses-
                419!2smx!4v1660501269155!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>


<section id="mission" class="section-p1">
    <div class="mission-p1">
        <h2>Misión</h2>
        <p>Nuestra misión es satisfacer las necesidades del sector alimentario, mediante la elaboración y comercialización de productos y servicios de óptima calidad,
            que se ajusten a las necesidades de nuestros clientes, al generar economía, desarrollo y crecimiento para el sector productos, para empleados y accionistas.</p>
        <h2>Visión</h2>
        <p>Ser la empresa líder en la comercialización, distribución de productos, la conservación y procesamiento de estos, que ofrece productos y servicios con calidad de punta, que generen valor agregado al cliente y se conviertan en alternativas para el
            desarrollo económico, social y cultural, de clientes, empleados y accionistas.</p>
        <h2>Valores</h2>
        <div class="mission-p2">
            <h5>Responsabilidad</h5>
            <p>Ser responsable con cada uno de nuestros clientes dándole la calidad que se merece en nuestros
                servicios y productos que conllevan en satisfacer sus necesidades.</p>
            <h5>Respeto</h5>
            <p>Que el cliente reciba un trato con respeto en nuestros servicios para asegurar su bienestar.</p>
            <h5>Honestidad</h5>
            <p>Usaremos la honestidad en nuestros servicios para ganarnos la confianza y credibilidad de nuestros
                clientes.</p>
        </div>
    </div>
</section>

<!-- Start Contact -->
<div class="container py-5">
    <div class="row py-5">
        <form class="col-md-9 m-auto" method="post" role="form">
            <div class="row">
                <div class="form-group col-md-6 mb-3">
                    <label for="inputname">Name</label>
                    <input type="text" class="form-control mt-1" id="name" name="name" placeholder="Name">
                </div>
                <div class="form-group col-md-6 mb-3">
                    <label for="inputemail">Email</label>
                    <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Email">
                </div>
            </div>
            <div class="mb-3">
                <label for="inputsubject">Subject</label>
                <input type="text" class="form-control mt-1" id="subject" name="subject" placeholder="Subject">
            </div>
            <div class="mb-3">
                <label for="inputmessage">Message</label>
                <textarea class="form-control mt-1" id="message" name="message" placeholder="Message" rows="8"></textarea>
            </div>
            <div class="row">
                <div class="col text-end mt-2">
                    <button type="submit" class="btn btn-success btn-lg px-3">Let’s Talk</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- End Contact -->

<?php include_once 'Views/template-principal/footer.php';
?>