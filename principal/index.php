<?php include("template/header.php");?>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Servicios</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <div class="row text-center">
            <?php foreach($lista_servicios as $registros){?>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <!-- <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i> "fa-shopping-cart" -> IMAGEN DEL CARRITO-->
                        <i class="fas <?php echo $registros['icono'];?> fa-stack-1x fa-inverse"></i>
                    </span>
                    <!-- <h4 class="my-3">E-Commerce</h4> -->
                    <h4 class="my-3"><?php echo $registros['titulo'];?></h4>
                    <!-- <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p> -->
                    <p class="text-muted"><?php echo $registros['descripcion'];?></p>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Recursos Extra</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <div class="row">                
                <?php foreach($lista_portafolio as $registros){?>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal<?php echo $registros["ID"] ?>">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?php echo $url_img ?>/portfolio/<?php echo $registros["imagen"] ?>" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php echo $registros["titulo"] ?></div>
                                <div class="portfolio-caption-subheading text-muted">Illustration</div>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Modales-->
                    <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $registros["ID"] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo $url_img ?>/close-icon.svg" alt="Close modal" /></div>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="modal-body">
                                                <!-- Detalles-->
                                                <h2 class="text-uppercase"><?php echo $registros["titulo"] ?></h2>
                                                <img class="img-fluid d-block mx-auto" src="<?php echo $url_img ?>/portfolio/<?php echo $registros["imagen"] ?>" alt="..." />
                                                <?php echo $registros["descripcion"] ?>
                                                <ul class="list-inline">
                                                    <li>
                                                        <strong>Categoria:</strong>
                                                        <?php echo $registros["categoria"] ?>
                                                    </li>
                                                </ul>
                                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                                    <i class="fas fa-xmark me-1"></i>
                                                    Cerrar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                        
                <?php } ?>
            </div>
        </div>
    </section>
<?php include("template/footer.php");?>