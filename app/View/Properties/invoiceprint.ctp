<?= $this->Html->css(array(	'flexslider/flexslider'),array('inline'=>false)); ?>
<?php  echo $this->set("title_for_layout",$property['Property']['name']);  ?>
  <body onload="window.print();">
<div class="row">
	<div class="col-md-12 block-wrapper">

		<div class="pull-right">
			<?php echo $this->Html->link('<i class="glyphicon glyphicon-arrow-left"></i>','javascript:history.go(-1);', array('class' => 'btn btn-primary ', 'target' => '_blank','title'=>__('back'),'escape'=>false)); ?>

			<a class="btn btn-primary " href="" title="<?php echo __('mail'); ?>"><span class="glyphicon glyphicon-envelope"></span>
			</a>
			<a class="btn btn-primary " href="" title="<?php echo __('print'); ?>"><i class="glyphicon glyphicon-print"></i>
			</a>
		</div>
		<div class="clearfix"></div>
		<hr class="">
		<div id="slider" class="flexslider">
			<ul class="slides"> <!-- images -->
				<li>
					<?php echo  $this->Html->image(isset($property['Property']['thumb']) ? $property['Property']['thumb']: 'http://placehold.it/341x228',array("class"=>'img-responsive')); ?>
				</li>
				<?php  $nbre = 1;
				$nombretotal = $property['Property']['mediaQuantities']-1;
				while($nbre <= $nombretotal){ $nbre++ ?>
				<li>
					<?php // echo $this->Html->image("/img/uploads/".$property['Property']['id']."/". date("Y")."/12/".$property['Property']['id2']."-".$nbre."l.jpg",array("class"=>'img-responsive img-thumbnail')); ?>
					<?php echo $this->Html->image("/img/property/".$property['Property']['id']."/".$property['Property']['id2']."-".$nbre."l.jpg",array("class"=>'img-responsive img-thumbnail')); ?>
				</li>
				<?php  }; ?>
			</ul>
		</div>
		<div id="carousel" class="flexslider">
			<ul class="slides">  <!-- thumbnails -->
				<li>
					<?=  $this->Html->image(isset($property['Property']['thumb']) ? $property['Property']['thumb']: 'http://placehold.it/210x144',
					array("class"=>'img-responsive img-thumbnail')); ?>
				</li>
				<?php  $nbre2 = 1;
				$nombretotal2 =  $property['Property']['mediaQuantities']-1;
				while($nbre2 <= $nombretotal2){ $nbre2++ ?>
				<li>
					<?php echo  $this->Html->image("/img/property/".$property['Property']['id']."/".$property['Property']['id2']."-".$nbre2."s.jpg",array("class"=>'img-responsive img-thumbnail')); ?>
				</li>
				<?php  }; ?>
			</ul>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h3> <?php echo __('Property Description'); ?></h3>
					<?php   echo $this->Text->truncate( $property['Property']['content'],200, array(
						'ellipsis' => '...','exact' => false ,'html'=>true)); ?>
				<div class="collapse" id="collapseExample">
				    <?php  echo $property['Property']['content']; ?>
				    <?php //  echo $this->Text->tail( $property['Property']['content'],500, array(
						// 'ellipsis' => '...','exact' => true ,'html'=>true)); ?>
				</div>
				<div class="text-right">
					<button class="btn btn-primary " type="button" data-toggle="collapse" data-target="#collapseExample"
						aria-expanded="false" aria-controls="collapseExample"><?= __('Read more'); ?>
					</button>
				</div>
				<hr>
				<h3> <?= __('Property Feature'); ?></h3>
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title"> <?php echo  __('Overview'); ?></h3>
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
									<?php echo $this->Number->currency($property['Property']['price'], ' € ',array('wholePosition'=>"after",'thousands'=>'.','decimals'=>',')); ?></b>
								</dd>
							</ul>
						</div>
					</div>
				</div>
				<?= $this->element('loan'); ?>
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
		itemWidth: 150,
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
