<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo('name'); ?> </title>

  <meta name="description" content="Indústria especializada na fabricação de ferramentais (Turn-Key), usinagem de peças de alta precisão e montagem de conjuntos.">
  <meta property="og:type" content="website"/>
  <meta property="og:title" content="Aerocris - Usinagem de Peças"/>
  <meta property="og:description" content="Indústria especializada na fabricação de ferramentais (Turn-Key), usinagem de peças de alta precisão e montagem de conjuntos."/>
  <meta property="og:url" content="http://aerocris.com"/>
  <meta property="og:image" content="http://aerocris.com/img/og-image.png"/>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() ?>/favicon.ico">

  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/normalize.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">  
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/main.min.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/translate.css">
  <?php wp_head(); ?>
</head>
<body>
  
  <header class="header container-fluid">
    <div class="row">
      <div class="col-md-12 header-op">
        <div class="language">
          <a href="javascript:void(0)" class="pt" onclick="ChangeLang('pt')" class="language-op pt-br"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/language/pt-br.png" alt="Idioma Português - Brasil"></a>
          <a href="javascript:void(0)" class="en" onclick="ChangeLang('en')" class="language-op us"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/language/us.png" alt="Idioma Inglês - Estados Unidos"></a>
          <a href="javascript:void(0)" class="es" onclick="ChangeLang('es')" class="language-op es"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/language/es.png" alt="Idioma Espanhol - Espanha"></a>
        </div>
        <div class="social">
          <i class="fa fa-phone phone" aria-hidden="true"><span><?php the_field('telefone'); ?></span></i>
          <a href="mailto:<?php the_field('email'); ?>?Subject=Contato%20pelo%20site"><i class="fa fa-envelope email" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 header-menu">
        <video autoplay="true" loop muted  class="header-intro">
          <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/intro.mp4"> 
        </video>
        <div class="header-content">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <a class="navbar-brand" href="#">
                  <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo/aerocris.png" alt="Logo da empresa Aerocris">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">
                  <ul class="navbar-nav menu-op">
                    <li class="nav-item">
                      <a class="nav-link item" href="#empresa">Empresa</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link item" href="#produtos">Produtos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link item" href="#qualidade">Qualidade</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link item" href="#estrutura">Estrutura</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link item" href="#clientes">Clientes</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link item" href="#contato">Contato</a>
                    </li>
                  </ul>
                </div>
              </nav>
        </div>
      </div>
    </div>
    <button class="up"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
  </header>
