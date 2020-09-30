<nav class="navbar navbar-default navbar-sticky navbar-mobile bootsnav">
    <div class="container">
        <!-- Start Atribute Navigation -->
        <div class="attr-nav">
            <ul>
                <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
            </ul>
        </div>
        <!-- End Atribute Navigation -->

        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./"><img src="<?php echo BASE_URL; ?>img/logo/logo2.png" class="logo" alt=""></a>
        </div>
        <!-- End Header Navigation -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right" data-in="slideInUp" data-out="fadeOut">
                <li class="active">
                    <a href="<?php echo BASE_URL; ?>">Home</a>
                </li>
                <li class="dropdown megamenu-fw">
                    <a href="#" class="dropdown-toggle before" data-toggle="dropdown">Nuestros Productos</a>
                    <ul class="dropdown-menu megamenu-content" role="menu">
                        <li>
                            <div class="row">
                                <div class="col-menu col-md-3">
                                    <h6 class="title">Menu Manager V1.5</h6>
                                    <div class="content">
                                        <h5>Precio <b>$25.00</b></h5>
                                        <p>Sistema para crear un menu de navegacion dinamico y gestionar perfiles de usuario para tu proximo sistema web.</p>
                                        <a href="https://hrdevelopergroup.com/demo/menu_manager/manager/" target="_blank" class="button btn btn-outline">Buy Now</a>
                                    </div>
                                </div>
                                <!-- end col-3 -->
                                <div class="col-menu col-md-3">
                                    <h6 class="title">Cloud Hosting</h6>
                                    <div class="content">
                                        <img src="img/megamenu/cloud.jpg" alt="ColorHosting" class="img-responsive">
                                        <h5>Starting from <b>$11.99</b></h5>
                                        <p>High performance Cloud hosting</p>
                                        <a href="cloud-hosting.html" class="button btn btn-outline">Buy Now</a>
                                    </div>
                                </div>
                                <!-- end col-3 -->
                                <div class="col-menu col-md-3">
                                    <h6 class="title">Virtual servers</h6>
                                    <div class="content">
                                        <img src="img/megamenu/vps.jpg" alt="ColorHosting" class="img-responsive">
                                        <h5>Starting from <b>$19.99</b></h5>
                                        <p>High performance VPS hosting</p>
                                        <a href="vps-hosting.html" class="button btn btn-outline">Buy Now</a>
                                    </div>
                                </div>
                                <div class="col-menu col-md-3">
                                    <h6 class="title">Dedicated Servers</h6>
                                    <div class="content dedicated">
                                        <h2>SALE 50%</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        <a href="dedicated.html" class="button btn btn-outline">Read More</a>
                                    </div>
                                </div>
                                <!-- end col-3 -->
                            </div>
                            <!-- end row -->
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" class="before-wd">Servicios</a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo BASE_URL; ?>servicios/desarrollo-web">Desarrollo Web</a></li>
                        <li><a href="<?php echo BASE_URL; ?>servicios/apps-moviles">Apps Moviles</a></li>
                        <li><a href="<?php echo BASE_URL; ?>servicios/software-a-medida">Software a Medida</a></li>
                        <li><a href="<?php echo BASE_URL; ?>servicios/desarrollo-de-api">Desarrollo de Api</a></li>
                        <li><a href="<?php echo BASE_URL; ?>servicios/tiendas-virtuales">Tiendas Virtuales</a></li>
                        <li><a href="<?php echo BASE_URL; ?>servicios/facturacion-electronica">Facturación Electrónica</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" class="before-wd">Desarrollos</a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo BASE_URL; ?>desarrollos/sistemas-web-empresariales">Sistemas Web Empresariales</a></li>
                        <li><a href="<?php echo BASE_URL; ?>desarrollos/aplicaciones-web">Aplicaciones Web</a></li>
                        <li><a href="<?php echo BASE_URL; ?>desarrollos/tiendas-virtuales">Tiendas Virtuales</a></li>
                        <li><a href="<?php echo BASE_URL; ?>desarrollos/paginas-web-administrables">Paginas Web Administrables</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo BASE_URL; ?>contacto">Contacto</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>

    <!-- Side Menu -->
    <div class="side">
        <a href="#" class="close-side"><i class="fa fa-times"></i></a>
        <div class="widget">
            <h6 class="title">NUESTRA ORGANIZACION</h6>
            <ul class="link">
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </div>
        
    </div>
    <!-- End Side Menu -->
</nav>