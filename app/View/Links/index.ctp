<?= $this->Html->meta("description", "Links", array('inline'=>false)); ?>
<?php  echo $this->set('title_for_layout',__('Useful Links'));  ?>
<?php  $this->Html->addCrumb('Links');?>
<div class="row">
	<div class="col-md-12">
		<ul>
			<?php foreach ($links as $link): ?>
			<li><i class="fa fa-globe"></i>&nbsp;
				<a href="<?php echo h($link['Link']['url']); ?>"><?php echo h($link['Link']['name']); ?></a>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>

