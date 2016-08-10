<?= $this->fetch('title'); ?><?php  echo $this->set('title_for_layout',__('Properties'));  ?>
<div class="row">
	<?php foreach ($properties as $property): ?>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="min-height:620px;">
			<div class="panel panel-default pan-property" style="position:relative;overflow:hidden;">
				<div class="offer-type">
					<?php echo h($property['Status']['name']); ?>
				</div>
				<span><?=  $this->Html->image(isset($property['Property']['thumb']) ? $property['Property']['thumb']: 'http://placehold.it/356x228',array("class"=>'img-responsive')); ?></span>
				<div class="panel-body" style="min-height:85px;">
					<h4>
					<?php echo $this->Html->link($property['Property']['name'], array('action' => 'view', $property['Property']['id'])); ?>
					</h4>
				</div>
				<div class="list-group">
					<span class="list-group-item"><span class="glyphicons glyphicons-bed"></span> <?= __('Beds'); ?><span class="pull-right"><?php echo h($property['Property']['bedrooms']); ?></span></span>
					<span class="list-group-item"> <?= __('Year:'); ?> &nbsp; <span class="pull-right"><?php echo h($property['Property']['dateYear']); ?></span></span>
					<span class="list-group-item"> <?= __('House Size:'); ?><span class="pull-right"><?php echo h($property['Property']['size']); ?>&nbsp; sqft</span></span>
					<span class="list-group-item"> <?= __('Level:'); ?> <span class="pull-right"><?php echo h($property['Property']['level']); ?>&nbsp; aqres</span></span>
				</div>
				<div class="panel-footer">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<p><strong><?php echo $this->Number->currency($property['Property']['price'], ' € ',array('wholePosition'=>"after",'thousands'=>'.','decimals'=>',')); ?>&nbsp;</strong></p>
						</div>
						<div class="col-xs-12 col-sm-6 ">
							<p>
								<?php echo $this->Html->link(__('Read more'), array('action' => 'view', $property['Property']['id']),array('class'=>'btn btn-md btn-primary btn-block')); ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
	<hr>
	<div class="paging text-center col-md-12" style ="">
		<?= $this->element("pagination"); ?>
		<?= $this->element("pagination-counter"); ?>
	</div>
</div>
