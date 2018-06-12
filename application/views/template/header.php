<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Queima das Fitas - Évora</title>
    <meta property="og:image" content="http://i.imgur.com/Cjm2ytq.png" />
    <meta property="og:title" content="Site Queima das Fitas 2017 Évora" />
    <link rel='shortcut icon' type='image/x-icon' href="<?php echo base_url()?>assets/imgs/favicon.ico" />
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/custom.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
</head>

<body style="<?php echo "color: white; background: url('" . base_url() . "assets/imgs/fundo_site_queima.png') no-repeat center center fixed; -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;"; ?>" >

<div class="site-container">
    <div class="<?php if (uri_string()=='precos') {echo "moldura-precario" ;} else { echo "moldura-geral"; } ?>">
      <div class="site-pusher ">
        <header class="header-container">

          <!-- ícone que aparece em ecrãs mais pequenos -->
          <a href="#" class="icone-header" id="icone-header" align="center"></a>

          <a href="<?php echo base_url()?>">
            <img class="logoaaue-header" src="<?php echo base_url()?>assets/imgs/logoaaue.svg">
          </a>

          <nav class="botoes-header">
            <a href="<?php echo base_url()?>" class="hvr-fade"
               style="text-decoration:none; color: inherit;">
              <div>
                  <p class="texto-header">Home</p>
              </div>
            </a>

            <a href="<?php echo base_url("index.php/cartaz")?>" class="hvr-fade"
               style="text-decoration:none; color: inherit;">
              <div>
                  <p class="texto-header">Cartaz</p>
              </div>
            </a>

            <a href="<?php echo base_url("index.php/precos")?>" class="hvr-fade"
               style="text-decoration:none; color: inherit;">
              <div>
                  <p class="texto-header">Preços</p>
              </div>
            </a>

              <a href="<?php echo base_url("index.php/patrocinios")?>" class="hvr-fade"
                 style="text-decoration:none; color: inherit;">
                  <div>
                      <p class="texto-header">Patrocínios</p>
                  </div>
              </a>

            <a href="https://goo.gl/forms/VP2mtV5JEEDTW3L22" class="hvr-fade contacto"
               target="blank" style="text-decoration:none; color: inherit;">
              <div>
                  <p class="texto-header">Contactos</p>
              </div>
            </a>
          </nav>

        </header>
