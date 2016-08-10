<?= $this->Html->css(array(	'flexslider/flexslider'),array('inline'=>false)); ?>
<?php  echo $this->set("title_for_layout",$property['Property']['name']);  ?>
<?php $this->Html->addCrumb(' Utilisateurs ', array('controller'=>'properties','action'=>'index','escape' =>false));
    //  echo "&nbsp;&nbsp;";
 	$this->Html->addCrumb($property['Property']['name']); ?>
<div class="row">
	<div class="col-md-12 block-wrapper">
					<div id="slider" class="flexslider">
  						<ul class="slides">
      							<li><img src="/img/images/house.jpg" alt=""></li>
      							<li><img src="/img/images/house.jpg" alt=""></li>
      							<li><img src="/img/images/house.jpg" alt=""></li>
      							<li><img src="/img/images/house.jpg" alt=""></li>
      							<li><img src="/img/images/house.jpg" alt=""></li>
      							<li><img src="/img/images/house.jpg" alt=""></li>
      						</ul>
					</div>
					<div id="carousel" class="flexslider">
  						<ul class="slides">
  							<li><img src="/img/images/house.jpg" alt="" class="img-responsive img-thumbnail"></li>
      						<li><img src="/img/images/house.jpg" alt="" class="img-responsive img-thumbnail"></li>
      						<li><img src="/img/images/house.jpg" alt="" class="img-responsive img-thumbnail"></li>
      						<li><img src="/img/images/house.jpg" alt="" class="img-responsive img-thumbnail"></li>
      						<li><img src="/img/images/house.jpg" alt="" class="img-responsive img-thumbnail"></li>
      						<li><img src="/img/images/house.jpg" alt="" class="img-responsive img-thumbnail"></li>
  						</ul>
  					</div>
					<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h3> <?php echo __('Property Description'); ?></h3>
						<blockquote>
							<p class=""><?php echo h($property['Property']['content']); ?></p>
						</blockquote>
						<hr>
						<h3> <?= __('Property Feature'); ?></h3>
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title"> <?php echo  __('Details'); ?></h3>
							</div>
  							<div class="panel-body">
  								<div class="row">
  									<dl class='dl-horizontal col-md-5'>
  											<dt><?php echo __('Id'); ?>&nbsp;:</dt>
  												<dd>
  													<?php echo h($property['Property']['id']); ?>
  													&nbsp;
  												</dd>
  											<dt><?php echo __('State'); ?>&nbsp;:</dt>
  												<dd><?php echo h($property['State']['name']); ?>
  												</dd>
  											<dt><?php echo __('Area'); ?>&nbsp;:</dt>
  												<dd><?php echo h($property['Area']['name']); ?>
  												</dd>
  											<dt><?php echo __('Status'); ?>&nbsp;:</dt>
  												<dd><?php echo h($property['Status']['name']); ?>
  												</dd>
  											<dt><?php echo __('Type'); ?>&nbsp;:</dt>
  												<dd>
  													<?php echo h($property['Type']['name']); ?>
  												</dd>
  										</dl>
  										<dl class="dl-horizontal col-md-7">
  											<dt><?php echo __('Size'); ?>&nbsp;:</dt>
  												<dd>
  													<?php echo h($property['Property']['size']); ?>
  													&nbsp;
  												</dd>
  											<dt><?php echo __('Created'); ?>&nbsp;:</dt>
  												<dd>
  													<?php echo h($property['Property']['created']); ?>
  													&nbsp;
  												</dd>
  											<dt><?php echo __('Year'); ?>&nbsp;:</dt>
  												<dd>
  													<?php echo h($property['Property']['dateYear']); ?>
  													&nbsp;
  												</dd>
  											<dt><?php echo __('Bedrooms'); ?>&nbsp;:</dt>
  												<dd>
  													<?php echo h($property['Property']['bedrooms']); ?>
  													&nbsp;
  												</dd>
  											<dt><?php echo __('Level'); ?>&nbsp;:</dt>
  												<dd>
  													<?php echo h($property['Property']['level']); ?>
  													&nbsp;
  												</dd>
  										</dl>
  								</div>
  								<div class="row">
  									<ul class="dl-horizontal" style='color:#f00;'>
  										<dt><?php echo __('Price'); ?></dt>
  											<dd> <b>
  												<?php echo h($property['Property']['price']); ?></b> &nbsp; €
  												&nbsp;
  											</dd>
  									</ul>
  								</div>
							</div>
						</div>
					</div>
	</div>
</div>
 <?=  $this->Html->script(array("jquery.flexslider-min","jquery.mousewheel"), array('inline'=>false)); ?>

 <?=  $this->Html->scriptStart(array(),array('inline'=>false)); ?>
 		$(window).load(function() {
  // The slider being synced must be initialized first
  $('#carousel').flexslider({
    animation: "slide",
    controlNav: true,
    animationLoop: false,
    slideshow: false,
    itemWidth: 210,
    itemMargin: 5,
    asNavFor: '#slider'
  });

  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: true,
    touch: true,
    slideshow: true,
    sync: "#carousel"
  });
});

   <?=  $this->Html->scriptEnd(); ?>


