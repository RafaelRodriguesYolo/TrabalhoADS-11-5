<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Padaria do Barba</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>public/assetsloja/img/desenho-barba.png" rel="icon">
  <link href="<?php echo base_url(); ?>public/assetsloja/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url(); ?>public/assetsloja/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link href="<?php echo base_url(); ?>public/assetsloja/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <link href="<?php echo base_url(); ?>public/assetsloja/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>public/assetsloja/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>public/assetsloja/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="<?php echo base_url(); ?>public/assetsloja/css/variables.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>public/assetsloja/css/main.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/index.php/loja" class="logo d-flex align-items-center">
        <h1>Padaria do Barba</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/index.php/loja/noticias">Noticias</a></li>
          <li class="li li-mobile"><a href="<?php echo base_url(); ?>index.php/loja/produtos/index"><span>Produtos</span></a></li>

          <li><a href="/index.php/loja/sobre">Sobre a Loja</a></li>
          <li><a href="/index.php/loja/faleconosco">Fale Conosco</a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="position-relative">
        <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
        <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
        <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

        <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
        <i class="bi bi-list mobile-nav-toggle"></i>

        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form action="search-result.html" class="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Procurar" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->

      </div>

    </div>

  </header><!-- End Header -->

  <main id="main">

  <?= $contents ?>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">

        <div class="row g-5">
          <div class="col-lg-4">
            <h3 class="footer-heading">Sobre a Padaria do Barba</h3>
            <p>A padaria foi fundada na década de 1990, por dois amigos que tiveram a vontade e ideia de ajudar a comunidade local onde residiam...</p>
            <p><a href="/index.php/loja/sobre" class="footer-link-more">Leia mais</a></p>
          </div>
          <div class="col-6 col-lg-2">
            <h3 class="footer-heading">Navegar</h3>
            <ul class="footer-links list-unstyled">
              <li><a href="/index.php/loja"><i class="bi bi-chevron-right"></i> Inicio</a></li>
              <li><a href="/index.php/loja/noticias"><i class="bi bi-chevron-right"></i>Noticias</a></li>
              <li><a href="/index.php/loja/produtos/index"><i class="bi bi-chevron-right"></i> Produtos</a></li>
              <li><a href="/index.php/loja/sobre"><i class="bi bi-chevron-right"></i> Sobre a Loja</a></li>
              <li><a href="/index.php/loja/faleconosco"><i class="bi bi-chevron-right"></i> Fale Conosco</a></li>
            </ul>
          </div>
          <div class="col-6 col-lg-2">
            <h3 class="footer-heading">Categorias</h3>
            <ul class="footer-links list-unstyled">
              <li><a href="#"><i class="bi bi-chevron-right"></i> Bem Estar</a></li>
              <li><a href="#"><i class="bi bi-chevron-right"></i> Eventos</a></li>

            </ul>
          </div>

          <div class="col-lg-4">
            <h3 class="footer-heading">Anuncios Recentes</h3>

            <ul class="footer-links footer-blog-entry list-unstyled">
              <li>
                <a href="#" class="d-flex align-items-center">
                  <img src="<?php echo base_url(); ?>public/assetsloja/img/bolo-banana-caramelizada.jpg" alt="" class="img-fluid me-3">
                  <div>
                    <div class="post-meta d-block"><span class="date">Noticia</span> <span class="mx-1"></span></div>
                    <span>Qual a melhor maneira de compartilhar alegrias?</span>
                  </div>
                </a>
              </li>

              <li>
                <a href="#" class="d-flex align-items-center">
                  <img src="<?php echo base_url(); ?>public/assetsloja/img/torta-holandesa.png" alt="" class="img-fluid me-3">
                  <div>
                    <div class="post-meta d-block"><span class="date">Noticia</span> <span class="mx-1"></span></div>
                    <span>Venha conferir a nossa receita secreta da melhor torta holandes!!!</span>
                  </div>
                </a>
              </li>

              <li>
                <a href="#" class="d-flex align-items-center">
                  <img src="<?php echo base_url(); ?>public/assetsloja/img/cupcakes.jpg" alt="" class="img-fluid me-3">
                  <div>
                    <div class="post-meta d-block"><span class="date">Noticia</span> <span class="mx-1"></span> </div>
                    <span>Aproveite neste final de semana 07/05, será o dia do Cupcake! </span>
                  </div>
                </a>
              </li>

              <li>
                <a href="#" class="d-flex align-items-center">
                  <img src="<?php echo base_url(); ?>public/assetsloja/img/cupom-desconto.png" alt="" class="img-fluid me-3">
                  <div>
                    <div class="post-meta d-block"><span class="date">Noticia</span> <span class="mx-1"></span></div>
                    <span>Aproveite todo dia, junte 10 cupons e na troca você receberá um desconto de 30%.</span>
                  </div>
                </a>
              </li>

            </ul>

          </div>
        </div>
      </div>
    </div>

    <div class="footer-legal">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            <div class="copyright">
              © Copyright <strong><span>Padaria do Barba</span></strong>. Todos os Direitos Reservados
            </div>

          </div>

          <div class="col-md-6">
            <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

        </div>

      </div>
    </div>

  </footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url(); ?>public/assetsloja/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>public/assetsloja/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>public/assetsloja/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url(); ?>public/assetsloja/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url(); ?>public/assetsloja/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url(); ?>public/assetsloja/js/main.js"></script>

</body>

</html>