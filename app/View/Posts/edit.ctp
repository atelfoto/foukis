<?= $this->fetch('title'); ?><?php  echo $this->set('title_for_layout',__('Edit Post'));  ?>
<?php $this->Html->addCrumb(__(' posts'), array('controller'=>'posts','action'=>'adminindex','escape' =>false));
 	$this->Html->addCrumb(__('Add post')); ?>
<?php echo $this->element('Posts/form'); ?>
