<?php  $carrousels = $this->requestAction(array('controller'=>'pages', 'action'=>'carrousel','admin'=>false));
?>
<!-- Indicators -->
<ol class="carousel-indicators">
	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	<li data-target="#myCarousel" data-slide-to="1"></li>
	<li data-target="#myCarousel" data-slide-to="2"></li>
</ol>
<div class="carousel-inner" role="listbox">
  <?php foreach ($carrousels as $k => $v): $v = current($v); ?>
	<div class="item ">
		<?php echo  $this->Html->image('/img/slides/'.$v["slug"].'/'.$v["image"].'.jpg',
		array('alt'=>$v['title'])); ?>
		<div class="container">
			<div class="carousel-caption">
				<h1 data-replace-tmp-key=""><os-p key="">
					<span syle="font-size:1.2em;">
						<i class="fa fa-chevron-right fa-x2"></i><i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i>
					</span><?php echo $v['name']; ?></os-p>
				</h1>
				<p data-replace-tmp-key=""><os-p key=""><?php echo h($v['content']); ?></os-p></p>
				<p><a class="btn btn-lg btn-primary" href="#" role="button" data-replace-tmp-key=""><os-p key=""><?php echo $v['button']; ?></os-p></a></p>
			</div>
		</div>
	</div>
	<?php endforeach; ?>
</div>
<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	<span class="sr-only" data-replace-tmp-key=""><os-p key=""><?= __('Previous'); ?></os-p></span>
</a>
<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	<span class="sr-only" data-replace-tmp-key=""><os-p key=""><?= __('Next'); ?></os-p></span>
</a>
