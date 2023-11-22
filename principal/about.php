<?php include("template/header.php");?>
    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Acerca</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <ul class="timeline">
                <!-- El contador es para poder establecer una clase dentro de las listas 
                cuando este sea impar no se muestra
                cuando es par se mostrará -->
                <?php $contador=1; ?>
                <?php foreach($lista_entradas as $registros){?>
                <li <?php echo (($contador%2)==0)?'class="timeline-inverted"':""; ?>>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/<?php echo $registros["imagen"] ?>" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4><?php echo $registros["fecha"] ?></h4>
                            <h4 class="subheading"><?php echo $registros["titulo"] ?></h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted"><?php echo $registros["descripcion"] ?></p></div>
                    </div>
                </li>
                <?php $contador++; ?>
                <?php } ?>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Be Part
                            <br />
                            Of Our
                            <br />
                            Story!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- About section one-->
    <section class="py-5 bg-light" id="scroll-target">
        <div class="container px-5 my-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="https://dummyimage.com/600x400/343a40/6c757d" alt="..." /></div>
                <div class="col-lg-6">
                    <h2 class="fw-bolder">Our founding</h2>
                    <p class="lead fw-normal text-muted mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto est, ut esse a labore aliquam beatae expedita. Blanditiis impedit numquam libero molestiae et fugit cupiditate, quibusdam expedita, maiores eaque quisquam.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Team-->
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Conoce a nuestro equipo</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <?php foreach ($lista_equipo as $registro) { ?>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/<?php echo $registro["imagen"]?>" alt="..." />
                        <h4><?php echo $registro["nombrecompleto"]?></h4>
                        <p class="text-muted"><?php echo $registro["puesto"]?></p>
                        <a class="btn btn-dark btn-social mx-2" href="<?php echo $registro["X"]?>" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="<?php echo $registro["facebook"]?>" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="<?php echo $registro["linkedin"]?>" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            <?php } ?>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
            </div>
        </div>
    </section>    
<?php include("template/footer.php");?>