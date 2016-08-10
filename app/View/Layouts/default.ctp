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
<html lang="" >
<!-- <html lang="<?= $language ; ?>" xml:lang="<?= $language ; ?>"> -->
<head>
	<meta charset="utf-8">
	<link rel="alternate" href="http://www.foukis-realestate.gr/" hreflang="el-gr" />
	<link rel="alternate" href="http://www.foukis-realestate.gr/en/" hreflang="en-gb" />
	<link rel="alternate" href="http://www.foukis-realestate.gr/fr/" hreflang="fr-fr" />
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
	<?php echo   $this->Html->script(array('//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js','bootstrap.min','scroll')); ?>
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
</head>
<!-- NAVBAR
	================================================== -->
<body>
	<div class="navbar-wrapper">
		<div class="container">
			<?php   echo $this->element('navbar'); ?>
		</div>
	</div>
    <!-- Carousel
    ================================================== -->
    <?php  echo $this->element('carrouselSauv'); ?>
    <!-- /.carousel -->
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <!-- <div class="container marketing" id="marketing" style="margin-bottom:0;padding-bottom:0;"> -->
    <div class="container marketing"  style="margin-bottom:0;padding-bottom:0;">
    	<div class="row">
    		<aside class="col-md-4">
    			<?php  echo $this->element('aside-1'); ?>
    		</aside>
    		<section class="col-md-8">
    			<div class="page-header">
    				<h2><?= $this->fetch('title'); ?> </h2>
    			</div>
    			<?= $this->Session->flash(); ?>
    			<?= $this->Session->flash('auth'); ?>
    			<?php  echo $this->fetch('content') ?>
    			<hr class="featurette-divider">
    		</section>
    	</div>
    	<div class="top container  " id="top"  >
    		<a href="#"  title="<?= __('top') ?>" class='pull-right'>
    			<span class="fa fa-chevron-circle-up fa-4x  " ></span>
    		</a>
    	</div>
    	<!-- FOOTER -->
    	<footer class='footer well'>
    		<nav class='text-center'>
    			<ul class='list-inline'>
    				<li><a href=""><?= __('Imprint'); ?></a> |</li>
    				<li><a href="">Crédits</a> |</li>
    				<li><a href=""><?= __('Contact Us'); ?></a> |</li>
    				<li><a href=""><?= __('Subscribe to the newsletter'); ?></a></li>
    				<li><a href="#"><?= __('Site map'); ?></a></li>
    			</ul>
    		</nav>
    		<p class="text-center">
    		<b><?= __("Schedule agency : ") ?></b> <br>
    		<?= __('The real estate agency Th. FOUKIS works:'); ?>
    		<br> <?= __("Monday to Saturday from 8 h 30 am to 9 pm  and on weekends from 9 am to 7.3O pm."); ?>
    		</p>
    		<p class='text-center'><i> <small> &nbsp;Copyright &copy;&nbsp;<?php echo date('Y'); ?> by
    			<?php echo env('HTTP_HOST'); ?>&nbsp;, all rights reserved. </small> </i></p>
    	</footer>
    	 <?= $this->fetch('script'); ?>
    </div><!-- /.container -->
    <!-- ================================================== -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <script src="//getbootstrap.com/examples/carousel/../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
<!--     <script type="text/javascript">OneSkyClientConfig = {apiKey: "U9aDnPz49ouz8J2CjMcAz74GppvQBGym",project: 19540,translate: true,locale: "fr",xdReceiver: "http://www.oneskyapp.com/docs/xd_receiver.html"};</script>
    <script class="os-tdn" type="text/javascript" src="//s3.amazonaws.com/oneskyapp.static/in-context/loader.min.js"></script> -->

</body>
</html>
