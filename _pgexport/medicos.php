<?php
get_header( 'medicos' ); ?>

        <header class="container">
            <ul class="nav nav-tabs" role="tablist"> 
                <li class="nav-item"> 
                    <a class="nav-link active" href="#" data-toggle="tab" role="tab" aria-controls="" aria-expanded="true"><?php _e( 'Home', 'iboltema' ); ?></a> 
                </li>                 
                <li class="nav-item"> 
                    <a class="nav-link" href="#" data-toggle="tab" role="tab" aria-controls="" aria-expanded="true"><?php _e( 'Profile', 'iboltema' ); ?></a> 
                </li>                 
                <li class="nav-item"> 
                    <a class="nav-link" href="#" data-toggle="tab" role="tab" aria-controls="" aria-expanded="true"><?php _e( 'Messages', 'iboltema' ); ?></a> 
                </li>                 
                <li class="nav-item"> 
                    <a class="nav-link" href="#" data-toggle="tab" role="tab" aria-controls="" aria-expanded="true"><?php _e( 'Settings', 'iboltema' ); ?></a> 
                </li>                 
            </ul>             
            <section id="cb-navigation-1-4" class="cb-navigation-block cb-navigation-1-4">
                <div class="cb-navigation4">
                    <!-- Top Bar -->
                    <div class="top-bar d-none d-md-block d-sm-none">
                        <div class="row">
                            <div class="col-sm-8 col-xs-12">
                                <ul class="list-unstyled list-inline">
                                    <li>
                                        <div class="top">
                                            <i class="fa fa-clock"></i>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="top">
                                            <span><?php _e( 'Central de Marcações', 'iboltema' ); ?><i class="fa fa-phone"></i><?php _e( '(21) 3237-9220', 'iboltema' ); ?></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-4 col-xs-12" style="margin-top:5px;">
                                <div>
                                    <div class="float-right">
                                        <span><i class="fa fa-globe"></i> <?php _e( 'Unidades:', 'iboltema' ); ?> </span>
                                        <a class="dropdown-toggle" href="#" id="navbarDropdowncaret" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php _e( 'Botafogo', 'iboltema' ); ?> </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdowncaret">
                                            <li>
                                                <a href="#"><?php _e( 'Barra', 'iboltema' ); ?></a>
                                            </li>
                                            <li>
                                                <a href="#"><?php _e( 'Serbian', 'iboltema' ); ?></a>
                                            </li>
                                            <li>
                                                <a href="#"><?php _e( 'Spanish', 'iboltema' ); ?></a>
                                            </li>
                                            <li>
                                                <a href="#"><?php _e( 'Greek', 'iboltema' ); ?></a>
                                            </li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End / Top Bar -->
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="row">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="col-md-4">
                                <a class="navbar-brand" href="#" style="margin-left: 13px">
                                    <img src="http://www.barralife.com/site/wp-content/uploads/2014/12/logo-ibol-250x82.gif" alt="Logo" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-md-8">
                                <div class="row d-none d-lg-block">
                                    <div class="header-main fright">
                                        <ul class="info-header info-contato">
                                            <li class="info-contato-icon">
                                                <img width="20" src="https://www.saolucascopacabana.com.br/wp-content/themes/saolucascopacabana/images/headset-icon.png">
                                            </li>
                                            <li>
                                                <p><?php _e( 'CENTRAL DE MARCAÇOES', 'iboltema' ); ?></p>
                                                <div class="info">
                                                    <?php _e( 'Telefone:', 'iboltema' ); ?>
                                                    <span style="font-family: 'Raleway', sans-serif; font-weight: 500;"><?php _e( '(21)', 'iboltema' ); ?> <?php _e( '3237-9200', 'iboltema' ); ?></span>
                                                    <!--· Fax:
                                                        <span style="font-family: 'Raleway', sans-serif; font-weight: 500;">(21) 2545-4001</span>-->
                                                </div>
                                            </li>
                                            <li>
                                                <ul style="list-style: none;">
                                                    <li class="info-contato-icon">
                                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                    </li>
                                                    <li>
                                                        <p><?php _e( 'RESULTADO DE EXAMES', 'iboltema' ); ?></p>
                                                        <div class="info">
</div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-4" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse menuibol" id="bs-example-navbar-collapse-4">
                                    <ul class="navbar-nav ml-auto d-flex justify-content-center align-items-center">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/index.html"><?php _e( 'HOME', 'iboltema' ); ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/unidades.html"><?php _e( 'UNIDADES', 'iboltema' ); ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><?php _e( 'ESPECIALIDADES', 'iboltema' ); ?></a>
                                        </li>
                                        <li class="dropdown nav-item">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><span class="caret"></span><?php _e( 'QUEM SOMOS', 'iboltema' ); ?></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#"><?php _e( 'Blog', 'iboltema' ); ?></a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#"><?php _e( 'Portfolio', 'iboltema' ); ?></a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#"><?php _e( 'Team', 'iboltema' ); ?></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><?php _e( 'EXAMES E CONSULTAS', 'iboltema' ); ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><?php _e( 'MÉDICOS', 'iboltema' ); ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/convenios.html"><?php _e( 'CONVÊNIOS', 'iboltema' ); ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><?php _e( 'NOTÍCIAS', 'iboltema' ); ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><?php _e( 'CONTATO', 'iboltema' ); ?></a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.navbar-collapse -->
                            </div>
                        </div>
                        <!-- /.container -->
                    </nav>
                </div>
            </section>             
        </header>         
        <main class="container">
            <div class="convenio">
                <div class="pg-empty-placeholder titulo"></div>
                <div class="conteudo">
                    <div class="row">
                        <div class="col-md-4 col-lg-12"> 
                            <section id="cb-portfolio-1-4" class="cb-portfolio-block cb-portfolio-1-4"> 
                                <div class="cb-portfolio4">
                                    <div class="container">
                                        <section id="team" class="pb-5">
                                            <div class="container">
                                                <h5 class="section-title h1"><?php _e( 'NOSSA EQUIPE MÉDICA', 'iboltema' ); ?></h5>
                                                <div class="row">
                                                    <!-- Team member -->
                                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                                                            <div class="mainflip">
                                                                <div class="frontside">
                                                                    <div class="card">
                                                                        <div class="card-body text-center">
                                                                            <p><img class=" img-fluid" src="http://ibol.com.br/img/imagens_secoes/10.jpg" alt="card image"></p>
                                                                            <h4 class="card-title"><?php _e( 'Oswaldo Moura Brasil', 'iboltema' ); ?></h4>
                                                                            <p class="card-text"><?php _e( 'Diretor.', 'iboltema' ); ?></p>
                                                                            <p class="card-text"><?php _e( 'Especialidades:', 'iboltema' ); ?></p>
                                                                            <p class="card-text"><?php _e( 'Formação:', 'iboltema' ); ?></p>
                                                                            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="backside">
                                                                    <div class="card">
                                                                        <div class="card-body text-center mt-4">
                                                                            <h4 class="card-title"><?php _e( 'Oswaldo Moura Brasil', 'iboltema' ); ?></h4>
                                                                            <p class="card-text"><?php _e( 'O Dr. Oswaldo Moura Brasil cursou a Faculdade de Medicina da Universidade Gama Filho (1966/1971) e fez residência em Oftalmologia pelo Serviço do Prof. Luiz Eurico Ferreira da Escola Médica do Rio de Janeiro, da Universidade Gama Filho (UGF) no biênio 1972 e 1973. Conquistou o título de Especialista em Oftalmologia concedido pela Associação Médica Brasileira e Conselho Brasileiro de Oftalmologia, em 1974, e o título de Especialista em Ultra-Sonografia pela Sociedade Brasileira de Ultra-Som em Medicina e Biologia, em 1979. Concluiu o mestrado em Oftalmologia pela UFRJ, em 1992.', 'iboltema' ); ?></p>
                                                                            <ul class="list-inline">
                                                                                <li class="list-inline-item">
                                                                                    <a class="social-icon text-xs-center" target="_blank" href="#"> <i class="fa fa-facebook"></i> </a>
                                                                                </li>
                                                                                <li class="list-inline-item">
                                                                                    <a class="social-icon text-xs-center" target="_blank" href="#"> <i class="fa fa-twitter"></i> </a>
                                                                                </li>
                                                                                <li class="list-inline-item">
                                                                                    <a class="social-icon text-xs-center" target="_blank" href="#"> <i class="fa fa-skype"></i> </a>
                                                                                </li>
                                                                                <li class="list-inline-item">
                                                                                    <a class="social-icon text-xs-center" target="_blank" href="#"> <i class="fa fa-google"></i> </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- ./Team member -->
                                                    <!-- Team member -->
                                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                                                            <div class="mainflip">
                                                                <div class="frontside">
                                                                    <div class="card">
                                                                        <div class="card-body text-center">
                                                                            <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_02.png" alt="card image"></p>
                                                                            <h4 class="card-title"><?php _e( 'Sunlimetech', 'iboltema' ); ?></h4>
                                                                            <p class="card-text"><?php _e( 'This is basic card with image on top, title, description and button.', 'iboltema' ); ?></p>
                                                                            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="backside">
                                                                    <div class="card">
                                                                        <div class="card-body text-center mt-4">
                                                                            <h4 class="card-title"><?php _e( 'Sunlimetech', 'iboltema' ); ?></h4>
                                                                            <p class="card-text"><?php _e( 'This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.', 'iboltema' ); ?></p>
                                                                            <ul class="list-inline">
                                                                                <li class="list-inline-item">
                                                                                    <a class="social-icon text-xs-center" target="_blank" href="#"> <i class="fa fa-facebook"></i> </a>
                                                                                </li>
                                                                                <li class="list-inline-item">
                                                                                    <a class="social-icon text-xs-center" target="_blank" href="#"> <i class="fa fa-twitter"></i> </a>
                                                                                </li>
                                                                                <li class="list-inline-item">
                                                                                    <a class="social-icon text-xs-center" target="_blank" href="#"> <i class="fa fa-skype"></i> </a>
                                                                                </li>
                                                                                <li class="list-inline-item">
                                                                                    <a class="social-icon text-xs-center" target="_blank" href="#"> <i class="fa fa-google"></i> </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- ./Team member -->
                                                    <!-- Team member -->
                                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                                                            <div class="mainflip">
                                                                <div class="frontside">
                                                                    <div class="card">
                                                                        <div class="card-body text-center">
                                                                            <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_03.png" alt="card image"></p>
                                                                            <h4 class="card-title"><?php _e( 'Sunlimetech', 'iboltema' ); ?></h4>
                                                                            <p class="card-text"><?php _e( 'This is basic card with image on top, title, description and button.', 'iboltema' ); ?></p>
                                                                            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="backside">
                                                                    <div class="card">
                                                                        <div class="card-body text-center mt-4">
                                                                            <h4 class="card-title"><?php _e( 'Sunlimetech', 'iboltema' ); ?></h4>
                                                                            <p class="card-text"><?php _e( 'This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.', 'iboltema' ); ?></p>
                                                                            <ul class="list-inline">
                                                                                <li class="list-inline-item">
                                                                                    <a class="social-icon text-xs-center" target="_blank" href="#"> <i class="fa fa-facebook"></i> </a>
                                                                                </li>
                                                                                <li class="list-inline-item">
                                                                                    <a class="social-icon text-xs-center" target="_blank" href="#"> <i class="fa fa-twitter"></i> </a>
                                                                                </li>
                                                                                <li class="list-inline-item">
                                                                                    <a class="social-icon text-xs-center" target="_blank" href="#"> <i class="fa fa-skype"></i> </a>
                                                                                </li>
                                                                                <li class="list-inline-item">
                                                                                    <a class="social-icon text-xs-center" target="_blank" href="#"> <i class="fa fa-google"></i> </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- ./Team member -->
                                                    <!-- Team member -->
                                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                                                            <div class="mainflip">
                                                                <div class="frontside">
                                                                    <div class="card">
                                                                        <div class="card-body text-center">
                                                                            <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_04.jpg" alt="card image"></p>
                                                                            <h4 class="card-title"><?php _e( 'Sunlimetech', 'iboltema' ); ?></h4>
                                                                            <p class="card-text"><?php _e( 'This is basic card with image on top, title, description and button.', 'iboltema' ); ?></p>
                                                                            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="backside">
                                                                    <div class="card">
                                                                        <div class="card-body text-center mt-4">
                                                                            <h4 class="card-title"><?php _e( 'Sunlimetech', 'iboltema' ); ?></h4>
                                                                            <p class="card-text"><?php _e( 'This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.', 'iboltema' ); ?></p>
                                                                            <ul class="list-inline">
                                                                                <li class="list-inline-item">
                                                                                    <a class="social-icon text-xs-center" target="_blank" href="#"> <i class="fa fa-facebook"></i> </a>
                                                                                </li>
                                                                                <li class="list-inline-item">
                                                                                    <a class="social-icon text-xs-center" target="_blank" href="#"> <i class="fa fa-twitter"></i> </a>
                                                                                </li>
                                                                                <li class="list-inline-item">
                                                                                    <a class="social-icon text-xs-center" target="_blank" href="#"> <i class="fa fa-skype"></i> </a>
                                                                                </li>
                                                                                <li class="list-inline-item">
                                                                                    <a class="social-icon text-xs-center" target="_blank" href="#"> <i class="fa fa-google"></i> </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- ./Team member -->
                                                    <!-- Team member -->
                                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                                                            <div class="mainflip">
                                                                <div class="frontside">
                                                                    <div class="card">
                                                                        <div class="card-body text-center">
                                                                            <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_05.png" alt="card image"></p>
                                                                            <h4 class="card-title"><?php _e( 'Sunlimetech', 'iboltema' ); ?></h4>
                                                                            <p class="card-text"><?php _e( 'This is basic card with image on top, title, description and button.', 'iboltema' ); ?></p>
                                                                            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="backside">
                                                                    <div class="card">
                                                                        <div class="card-body text-center mt-4">
                                                                            <h4 class="card-title"><?php _e( 'Sunlimetech', 'iboltema' ); ?></h4>
                                                                            <p class="card-text"><?php _e( 'This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.', 'iboltema' ); ?></p>
                                                                            <ul class="list-inline">
                                                                                <li class="list-inline-item">
                                                                                    <a class="social-icon text-xs-center" target="_blank" href="#"> <i class="fa fa-facebook"></i> </a>
                                                                                </li>
                                                                                <li class="list-inline-item">
                                                                                    <a class="social-icon text-xs-center" target="_blank" href="#"> <i class="fa fa-twitter"></i> </a>
                                                                                </li>
                                                                                <li class="list-inline-item">
                                                                                    <a class="social-icon text-xs-center" target="_blank" href="#"> <i class="fa fa-skype"></i> </a>
                                                                                </li>
                                                                                <li class="list-inline-item">
                                                                                    <a class="social-icon text-xs-center" target="_blank" href="#"> <i class="fa fa-google"></i> </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- ./Team member -->
                                                    <!-- Team member -->
                                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                                                            <div class="mainflip">
                                                                <div class="frontside">
                                                                    <div class="card">
                                                                        <div class="card-body text-center">
                                                                            <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_06.jpg" alt="card image"></p>
                                                                            <h4 class="card-title"><?php _e( 'Sunlimetech', 'iboltema' ); ?></h4>
                                                                            <p class="card-text"><?php _e( 'This is basic card with image on top, title, description and button.', 'iboltema' ); ?></p>
                                                                            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="backside">
                                                                    <div class="card">
                                                                        <div class="card-body text-center mt-4">
                                                                            <h4 class="card-title"><?php _e( 'Sunlimetech', 'iboltema' ); ?></h4>
                                                                            <p class="card-text"><?php _e( 'This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.', 'iboltema' ); ?></p>
                                                                            <ul class="list-inline">
                                                                                <li class="list-inline-item">
                                                                                    <a class="social-icon text-xs-center" target="_blank" href="#"> <i class="fa fa-facebook"></i> </a>
                                                                                </li>
                                                                                <li class="list-inline-item">
                                                                                    <a class="social-icon text-xs-center" target="_blank" href="#"> <i class="fa fa-twitter"></i> </a>
                                                                                </li>
                                                                                <li class="list-inline-item">
                                                                                    <a class="social-icon text-xs-center" target="_blank" href="#"> <i class="fa fa-skype"></i> </a>
                                                                                </li>
                                                                                <li class="list-inline-item">
                                                                                    <a class="social-icon text-xs-center" target="_blank" href="#"> <i class="fa fa-google"></i> </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- ./Team member -->
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </main>         
        <div class="pg-empty-placeholder"></div>        

<?php get_footer( 'medicos' ); ?>