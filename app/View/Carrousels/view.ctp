<div class="carrousels view">
<h2><?php echo __('Carrousel'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($carrousel['Carrousel']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($carrousel['Carrousel']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slug'); ?></dt>
		<dd>
			<?php echo h($carrousel['Carrousel']['slug']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($carrousel['Carrousel']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($carrousel['Carrousel']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($carrousel['Carrousel']['content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Button'); ?></dt>
		<dd>
			<?php echo h($carrousel['Carrousel']['button']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($carrousel['Carrousel']['title']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Carrousel'), array('action' => 'edit', $carrousel['Carrousel']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Carrousel'), array('action' => 'delete', $carrousel['Carrousel']['id']), array(), __('Are you sure you want to delete # %s?', $carrousel['Carrousel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Carrousels'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carrousel'), array('action' => 'add')); ?> </li>
	</ul>
</div>
