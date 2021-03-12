<!DOCTYPE html>
<html lang="pt-BR">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ONITRANSP, transporte de produtos refrigerados, climatizados ou congelados.">
    <meta name="author" content="Jhonattas Henrique">

    <title>ONITRANSP</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo URL_BASE; ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="<?php echo URL_BASE; ?>assets/css/scrolling-nav.css" rel="stylesheet">
    <link href="<?php echo URL_BASE; ?>vendor/slick/slick.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo URL_BASE; ?>vendor/slick/slick-theme.css"/>

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo URL_BASE; ?>apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo URL_BASE; ?>apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo URL_BASE; ?>apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo URL_BASE; ?>apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo URL_BASE; ?>apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo URL_BASE; ?>apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo URL_BASE; ?>apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo URL_BASE; ?>apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo URL_BASE; ?>apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo URL_BASE; ?>android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo URL_BASE; ?>favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo URL_BASE; ?>favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo URL_BASE; ?>favicon-16x16.png">
    <link rel="manifest" href="<?php echo URL_BASE; ?>manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo URL_BASE; ?>ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <style>
      .mapouter {
        text-align: right;
        height: 300px;
        width:100%;
      }
      
      .gmap_canvas {
        overflow: hidden;
        background: none !important;
        height: 300px;
        width: 100%;
      }

      .slick-arrow {
        margin: 0 auto !important;
        text-align: center;
        float: none;
      }

      .slick-prev:before {
        color: #013355;
      }
      .slick-next:before {
        color: #013355;
      }

      .product-images, .equipments-images {
        width: 90% !important;
        margin: 0 auto !important;
      }
    </style>

    <!-- Facebook Open Graph -->
    <meta property="og:title" content="HOME" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{curr_url}}" />
    <!-- Facebook Open Graph end -->

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav" style="background-color: #013355 !important;">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">ONITRANSP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Serviços</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#transport">Transporte</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="bg-primary text-white" style="background-image: url('<?php echo URL_BASE; ?>assets/img/top.jpg');">
      <div class="container text-center">
        <h1>&nbsp;</h1>
      </div>
    </header>

    <center><img src="<?php echo URL_BASE; ?>assets/img/logo.png" style="width: 100%; max-width: 750px;"></center>

    <section id="services" style="padding: 50px 0 150px !important;">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Serviços</h2>
            <p class="lead">Transportes de produtos <u>climatizados</u>, <u>refrigerados</u>, e <u>congelados</u>:</p>
            <ul>
              <li>Entrega rápida e dentro do prazo combinado</li>
              <li>Temperatura monitorada com precisão</li>
              <li>Coletas e entregas agendadas</li>
              <li>Fretes dedicados para sua empresa ou produtos</li>
              <li>Confiabilidade total</li>
            </ul>

            <div class="equipments-images">
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/01.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  height:400px;
                ">
                &nbsp;
              </div>
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/02.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  height:400px;
                ">
                &nbsp;
              </div>
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/03.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  height:400px;
                ">
                &nbsp;
              </div>
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/04.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  height:400px;
                ">
                &nbsp;
              </div>
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/05.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  height:400px;
                ">
                &nbsp;
              </div>
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/06.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  height:400px;
                ">
                &nbsp;
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section id="transport" class="bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Produtos Transportados</h2>
            <p class="lead">Alguns dos produtos que transportamos</p>

            <div class="product-images">
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/products/01.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  background-position: center center; height: 350px;
                ">
                &nbsp;
              </div>
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/products/02.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  background-position: center center; height: 350px;
                ">
                &nbsp;
              </div>
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/products/03.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  background-position: center center; height: 350px;
                ">
                &nbsp;
              </div>
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/products/04.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  background-position: center center; height: 350px;
                ">
                &nbsp;
              </div>
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/products/05.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  background-position: center center; height: 350px;
                ">
                &nbsp;
              </div>
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/products/06.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  background-position: center center; height: 350px;
                ">
                &nbsp;
              </div>
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/products/07.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  background-position: center center; height: 350px;
                ">
                &nbsp;
              </div>
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/products/08.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  background-position: center center; height: 350px;
                ">
                &nbsp;
              </div>
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/products/09.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  background-position: center center; height: 350px;
                ">
                &nbsp;
              </div>
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/products/10.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  background-position: center center; height: 350px;
                ">
                &nbsp;
              </div>
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/products/11.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  background-position: center center; height: 350px;
                ">
                &nbsp;
              </div>
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/products/12.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  background-position: center center; height: 350px;
                ">
                &nbsp;
              </div>
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/products/13.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  background-position: center center; height: 350px;
                ">
                &nbsp;
              </div>
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/products/14.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  background-position: center center; height: 350px;
                ">
                &nbsp;
              </div>
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/products/15.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  background-position: center center; height: 350px;
                ">
                &nbsp;
              </div>
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/products/16.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  background-position: center center; height: 350px;
                ">
                &nbsp;
              </div>
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/products/17.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  background-position: center center; height: 350px;
                ">
                &nbsp;
              </div>
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/products/18.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  background-position: center center; height: 350px;
                ">
                &nbsp;
              </div>
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/products/19.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  background-position: center center; height: 350px;
                ">
                &nbsp;
              </div>
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/products/20.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  background-position: center center; height: 350px;
                ">
                &nbsp;
              </div>
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/products/21.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  background-position: center center; height: 350px;
                ">
                &nbsp;
              </div>
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/products/22.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  background-position: center center; height: 350px;
                ">
                &nbsp;
              </div>
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/products/23.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  background-position: center center; height: 350px;
                ">
                &nbsp;
              </div>
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/products/24.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  background-position: center center; height: 350px;
                ">
                &nbsp;
              </div>
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/products/25.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  background-position: center center; height: 350px;
                ">
                &nbsp;
              </div>
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/products/26.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  background-position: center center; height: 350px;
                ">
                &nbsp;
              </div>
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/products/27.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  background-position: center center; height: 350px;
                ">
                &nbsp;
              </div>
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/products/28.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  background-position: center center; height: 350px;
                ">
                &nbsp;
              </div>
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/products/29.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  background-position: center center; height: 350px;
                ">
                &nbsp;
              </div>
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/products/30.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  background-position: center center; height: 350px;
                ">
                &nbsp;
              </div>
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/products/31.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  background-position: center center; height: 350px;
                ">
                &nbsp;
              </div>
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/products/32.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  background-position: center center; height: 350px;
                ">
                &nbsp;
              </div>
              <div
                style="
                  background-image: url('<?php echo URL_BASE; ?>assets/img/products/33.jpg');
                  background-size: contain;
                  background-repeat: no-repeat;
                  background-position: center center; height: 350px;
                ">
                &nbsp;
              </div>

            </div>
            
          </div>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto" style="text-align: center;">
            <h2>Fale Conosco</h2>
            <p class="lead">
              <a 
                href="https://api.whatsapp.com/send?phone=5519999689812" 
                target="_new"
                class="btn" 
                style="background-color: #26d367; color: #ffffff;"><b><i class="fab fa-whatsapp"></i></b> (19) 999-689-812</a><br/>
              <br/>
              <a href="mailto:contato@onitransp.com.br">
                contato@onitransp.com.br
              </a><br/><br/>
              Nossa sede fica localizada em <b>Campinas-SP</b>. 
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="py-5 bg-dark" style="background-color: #013355 !important;">
      <div class="container">
        <p class="m-0 text-center text-white">ONITRANSP 2018 &copy; Todos os direitos reservados</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo URL_BASE; ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo URL_BASE; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo URL_BASE; ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="<?php echo URL_BASE; ?>assets/js/scrolling-nav.js"></script>
    <script type="text/javascript" src="<?php echo URL_BASE; ?>vendor/slick/slick.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        $('.product-images').slick({
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          arrows: true
        });

        $('.equipments-images').slick({
          infinite: true,
          dots: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          arrows: true
        });
      });
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126281066-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-126281066-1');
    </script>


  </body>

</html>
