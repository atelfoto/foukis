<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html lang="fr" xml:lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <?= $this->fetch('meta'); ?>
    <?php echo $this->Html->meta(array('name' => 'robots', 'content' => '')); ?>

    <!-- <link rel="icon" href="//getbootstrap.com/examples/carousel/../../favicon.ico"> -->
    <title><?= $this->fetch('title') ?></title>

    <!-- Bootstrap core CSS -->

    <?= $this->Html->css(array('style')); ?>
    <?= $this->fetch('css'); ?>
    <?php echo   $this->Html->script(array('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js','bootstrap.min')); ?>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- <script src="//getbootstrap.com/examples/carousel/../../assets/js/ie-emulation-modes-warning.js"></script> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <!-- <link href="/fr/docs/bootstrap/examples/carousel/carousel.css" rel="stylesheet"> -->
 <!--  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-30526439-1', 'oneskyapp.com');ga('send', 'pageview');
  </script> -->
  <meta class="os-tdn" http-equiv="Content-Language" content="fr">
  <meta class="os-tdn" property="og:locale" content="fr">
</head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only" data-replace-tmp-key="6c7195551da0802a39b5e2bc7187df54"><os-p key="6c7195551da0802a39b5e2bc7187df54">Basculer la navigation</os-p></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a id="navbar-brand-real" class="navbar-brand" href="#" data-replace-tmp-key=""><os-p key="">Foukis Real Estate</os-p></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active">
                  <a href="#" data-replace-tmp-key=""><os-p key="">Home</os-p></a>
                </li>
                 <li class="">
                  <a href="#" data-replace-tmp-key=""><os-p key="">Services</os-p></a>
                </li>
                 <li class="">
                  <a href="#" data-replace-tmp-key=""><os-p key="">Informations</os-p></a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
        <?=  $this->Html->image('/img/slides/big/slider-1.jpg',
        	  array('alt'=>'Firstslide')); ?>
          <div class="container">
            <div class="carousel-caption">
              <h1 data-replace-tmp-key=""><os-p key=""> <span syle="font-size:1.2em;"> > > ></span> Real Estate in Greece</os-p></h1>
              <p data-replace-tmp-key=""><os-p key="">Your realty professionals</os-p></p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button" data-replace-tmp-key=""><os-p key="">Sign up today</os-p></a></p>
            </div>
          </div>
        </div>
        <div class="item">
        <?=  $this->Html->image('/img/slides/big/slider-2.jpg',
        	  array('alt'=>'Firstslide')); ?>
          <div class="container">
            <div class="carousel-caption">
              <h1 data-replace-tmp-key=""><os-p key=""> <span syle="font-size:1.2em;"> > > ></span> Real Estate in Greece</os-p></h1>
              <p data-replace-tmp-key=""><os-p key="">Your realty professionals</os-p></p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button" data-replace-tmp-key=""><os-p key="">Sign up today</os-p></a></p>
            </div>
          </div>
        </div>
        <div class="item">
			<?=  $this->Html->image('/img/slides/big/slider-1.jpg',
        	  array('alt'=>'Firstslide')); ?>
          <div class="container">
            <div class="carousel-caption">
              <h1 data-replace-tmp-key=""><os-p key=""> <span syle="font-size:1.2em;"> > > ></span> Real Estate in Greece</os-p></h1>
              <p data-replace-tmp-key=""><os-p key="">Your realty professionals</os-p></p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button" data-replace-tmp-key=""><os-p key="">Sign up today</os-p></a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only" data-replace-tmp-key="dd1f775e443ff3b9a89270713580a51b"><os-p key="dd1f775e443ff3b9a89270713580a51b">Précédent</os-p></span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only" data-replace-tmp-key="10ac3d04253ef7e1ddc73e6091c0cd55"><os-p key="10ac3d04253ef7e1ddc73e6091c0cd55">Suivant</os-p></span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
        <?=  $this->Html->image('/img/panels/residential_property.jpg',
        	  array('alt'=>'Firstslide', 'class','img-circle','style','width: 140px; height: 140px;')); ?>
          <h2 data-replace-tmp-key=""><os-p key="">Heading</os-p></h2>
          <p data-replace-tmp-key=""><os-p key="">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</os-p></p>
          <p><a class="btn btn-default" href="#" role="button" data-replace-tmp-key=""><os-p key="">View details &raquo;</os-p></a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
        <?=  $this->Html->image('/img/panels/residential_property.jpg',
        	  array('alt'=>'Firstslide', 'class','img-circle','style','width: 140px; height: 140px;')); ?>
          <h2 data-replace-tmp-key="0101316665d4f82adaa26d86fbbb2d6e"><os-p key="0101316665d4f82adaa26d86fbbb2d6e">Heading</os-p></h2>
          <p data-replace-tmp-key="2ea57b656fe8d25ec60e24bca2843082"><os-p key="2ea57b656fe8d25ec60e24bca2843082">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</os-p></p>
          <p><a class="btn btn-default" href="#" role="button" data-replace-tmp-key="29856fc176c96b85b83a7350a7d5359f"><os-p key="29856fc176c96b85b83a7350a7d5359f">View details &raquo;</os-p></a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
        <?=  $this->Html->image('/img/panels/residential_property.jpg',
        	  array('alt'=>'Firstslide', 'class','img-circle','style','width: 140px; height: 140px;')); ?>
          <h2 data-replace-tmp-key="0101316665d4f82adaa26d86fbbb2d6e"><os-p key="0101316665d4f82adaa26d86fbbb2d6e">Heading</os-p></h2>
          <p data-replace-tmp-key="a38d7f88c4f2e30b2d38acd735a8d51c"><os-p key="a38d7f88c4f2e30b2d38acd735a8d51c">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</os-p></p>
          <p><a class="btn btn-default" href="#" role="button" data-replace-tmp-key="29856fc176c96b85b83a7350a7d5359f"><os-p key="29856fc176c96b85b83a7350a7d5359f">View details &raquo;</os-p></a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading" data-replace-tmp-key="1b9af7e7a8f81c941f1acaca61217af0"><os-p key="1b9af7e7a8f81c941f1acaca61217af0">First featurette heading. <span class="text-muted">It'll blow your mind.</span></os-p></h2>
          <p class="lead" data-replace-tmp-key="31023dbb3702ad59937265bb124dac23"><os-p key="31023dbb3702ad59937265bb124dac23">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</os-p></p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading" data-replace-tmp-key="41f3953a896bc5dcd88a716d0b0541c7"><os-p key="41f3953a896bc5dcd88a716d0b0541c7">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></os-p></h2>
          <p class="lead" data-replace-tmp-key="31023dbb3702ad59937265bb124dac23"><os-p key="31023dbb3702ad59937265bb124dac23">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</os-p></p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading" data-replace-tmp-key="d1e46c9c773fe5d0c7de2173d2288938"><os-p key="d1e46c9c773fe5d0c7de2173d2288938">And lastly, this one. <span class="text-muted">Checkmate.</span></os-p></h2>
          <p class="lead" data-replace-tmp-key="31023dbb3702ad59937265bb124dac23"><os-p key="31023dbb3702ad59937265bb124dac23">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</os-p></p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer >
      	 <p class='text-center'><?php  echo $cakeVersion; ?>&nbsp;Copyright &copy;&nbsp;<?php echo date('Y'); ?> by  <?php echo env('HTTP_HOST'); ?>&nbsp;, all rights reserved. <a href="#">Site map</a></p>
        <p class="pull-right"><a href="#" data-replace-tmp-key=""><os-p key="">Haut de page</os-p></a></p>
        <!-- <p data-replace-tmp-key=""><os-p key="">&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></os-p></p> -->


      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/'jquery.min'.js"></script> -->
    <!-- <script src="//getbootstrap.com/examples/carousel/../../dist/js/'bootstrap.min'.js"></script> -->
    <!-- <script src="//getbootstrap.com/examples/carousel/../../assets/js/docs.min.js"></script> -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="//getbootstrap.com/examples/carousel/../../assets/js/ie10-viewport-bug-workaround.js"></script>
  <script type="text/javascript">OneSkyClientConfig = {apiKey: "U9aDnPz49ouz8J2CjMcAz74GppvQBGym",project: 19540,translate: true,locale: "fr",xdReceiver: "http://www.oneskyapp.com/docs/xd_receiver.html"};</script>
<script class="os-tdn" type="text/javascript" src="//s3.amazonaws.com/oneskyapp.static/in-context/loader.min.js"></script>
</body>
</html>


