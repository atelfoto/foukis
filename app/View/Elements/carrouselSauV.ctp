<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<?=  $this->Html->image('/img/slides/big/slider-1.jpg',
			array('alt'=>__('Firstslide'))); ?>
			<div class="container">
				<div class="carousel-caption">
					<h1>
						<i class="fa fa-chevron-right fa-x2"></i>
						<i class="fa fa-chevron-right"></i>
						<i class="fa fa-chevron-right"></i>
						<?= __('Real Estate in Greece') ?>
					</h1>
					<p ><?= __('Your realty professionals'); ?></p>
					<p><a class="btn btn-lg btn-primary" href="#" role="button" ><?= __('Sign up today') ?></a></p>
				</div>
			</div>
		</div>
		<div class="item">
			<?=  $this->Html->image('/img/slides/big/slider-2.jpg',
			array('alt'=>__('Secondslide'))); ?>
			<div class="container">
				<div class="carousel-caption">
					<h1>
						<i class="fa fa-chevron-right fa-x2"></i>
						<i class="fa fa-chevron-right"></i>
						<i class="fa fa-chevron-right"></i>
						<?= __('Real Estate in Greece') ?>
					</h1>
					<p ><?= __('Your realty professionals'); ?></p>
					<p><a class="btn btn-lg btn-primary" href="#" role="button" ><?= __('Sign up today'); ?></a></p>
				</div>
			</div>
		</div>
		<div class="item">
			<?=  $this->Html->image('/img/slides/big/slider-3.jpg',
			array('alt'=>__('Thirdslide'))); ?>
			<div class="container">
				<div class="carousel-caption">
					<h1>
						<i class="fa fa-chevron-right fa-x2"></i>
						<i class="fa fa-chevron-right"></i>
						<i class="fa fa-chevron-right"></i>
						<?= __('Real Estate in Greece') ?>
					</h1>
					<p ><?= __('Your realty professionals') ?></p>
					<p><a class="btn btn-lg btn-primary" href="#" role="button" ><?= __('Sign up today'); ?></a></p>
				</div>
			</div>
		</div>
	</div>
	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only" data-replace-tmp-key="dd1f775e443ff3b9a89270713580a51b"><?= __('Previous'); ?></span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only" data-replace-tmp-key="10ac3d04253ef7e1ddc73e6091c0cd55"><?= __('Next'); ?></span>
	</a>
</div>
