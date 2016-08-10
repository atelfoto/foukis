<div class="carrousels form">
<?php echo $this->Form->create('Carrousel'); ?>
	<fieldset>
		<legend><?php echo __('Edit Carrousel'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Carrousel.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Carrousel.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Carrousels'), array('action' => 'index')); ?></li>
	</ul>
</div>
