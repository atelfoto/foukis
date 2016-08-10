<div class="carrousels form">
<?php echo $this->Form->create('Carrousel'); ?>
	<fieldset>
		<legend><?php echo __('Add Carrousel'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('slug');
		echo $this->Form->input('image');
		echo $this->Form->input('content');
		echo $this->Form->input('button');
		echo $this->Form->input('title');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Carrousels'), array('action' => 'index')); ?></li>
	</ul>
</div>
