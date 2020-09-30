
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!-- seo tools -->
    <meta content="Especialistas en el desarrollo de sistemas web, paginas web, tiendas virtuales y aplicaciones moviles" name="description">
    <meta content="hr developer group,desarrollo web,sistemas web,tiendas virtuales,e-commerce,HR DevG,apps, apps moviles" name="keywords">
    <meta content="aplicaciones moviles,mobile app,aplicaciones web,asesoria en desarrollo web" name="keywords">
    <meta content="HR Cody" name="hrcody">
    <!-- seo tools -->
    <!-- page title -->
    <title>HR DevG <?php echo '- '.TITLE; ?></title>
    

    <!-- page title -->
    <!-- favicon -->
    <link href="<?php echo BASE_URL; ?>favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="<?php echo BASE_URL; ?>favicon.ico" rel="icon" type="image/x-icon">
    <!-- bootstrap css -->
    <link href="<?php echo BASE_URL; ?>css/bootstrap.min.css" rel="stylesheet">
    <!-- default css / Style Pages -->
    <link href="<?php echo BASE_URL; ?>style/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo BASE_URL; ?>style/navigation.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>style/preloader.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>style/megamenu-style.css" rel="stylesheet">
    <!-- responsive css -->
    <link href="<?php echo BASE_URL; ?>style/responsive.css" rel="stylesheet" type="text/css">
    <!-- animations -->
    <link href="<?php echo BASE_URL; ?>style/animate.css" rel="stylesheet" type="text/css">
    <!-- fontawesome -->
    <link href="<?php echo BASE_URL; ?>fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- google fonts -->
</head>

<body>

    <!-- preloader -->
    <div id="preloader">
        <div class="text-center " id="status">
            <img src="<?php echo BASE_URL; ?>Preloader.svg" alt="Preloader" class="img-responsive" style="margin: 0 auto">
        </div>
    </div>
    <!-- preloader -->

    <!--START OF TOP-BAR -->
    <?php include 'views/modules/estructura/top_bar.php'; ?>
    <!--END OF TOP-BAR  -->

    <!-- Start Navigation -->
    
    <?php
        include 'views/modules/estructura/nav.php';
    ?>
    <!-- End Navigation -->

    <!-- Contenido -->
    <?php
    
        $views = New Template();
        $views -> rutaController();
    ?>
    <!--Fin Contenido -->

    <!-- ===== FOOTER ===== -->
    <?php include 'views/modules/estructura/footer.php'; ?>
    <!-- ===== FOOTER / END ===== -->

    <!-- javascript -->
    <script src="<?php echo BASE_URL; ?>javascript/jquery-3.1.1.min.js"></script>
    <script src="<?php echo BASE_URL; ?>javascript/jquery.scroll-with-ease.min.js"></script>
    <script src="<?php echo BASE_URL; ?>javascript/contact.js"></script>
    <script src="<?php echo BASE_URL; ?>javascript/validator.js"></script>
    <script src="<?php echo BASE_URL; ?>javascript/parallax.js"></script>
    <script src="<?php echo BASE_URL; ?>javascript/bootsnav.js"></script>
    <script src="<?php echo BASE_URL; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL; ?>javascript/javascript.js"></script>
    <!-- javascript -->
</body>

</html>