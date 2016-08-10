<?= $this->fetch('title'); ?><?php  echo $this->set('title_for_layout',__('Add Username') );  ?>
<?php $this->Html->addCrumb(__('Users'), array('controller'=>'users','action'=>'index','escape' =>false));
 	$this->Html->addCrumb(__(' Add Username')); ?>
<div class="row">
	<div class="col-md-6 col-md-offset-4 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h1 class="panel-title"><?= __('Add a Username') ?></h1>
			</div>
			<div class="panel-body">
			<?php echo $this->Form->create('User');?>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon"><?= __('Name'); ?>:</div>
					<?php echo $this->Form->input('lastname', array('div'=>false,'label'=>false, 'class' => 'form-control','placeholder'=>__('Lastname'))); ?>
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon"><?= __('Firstname') ; ?>:</div>
					<?php echo $this->Form->input('firstname', array('div'=>false,'label'=>false,'class' => 'form-control','placeholder'=>__('Firstname'))); ?>
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon"><?= __('Username'); ?> :</div>
					<?php echo $this->Form->input('username', array( 'div'=>false,'label'=>false,'class' => 'form-control','placeholder'=>__('Username'))); ?>
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon"><?= __('Password'); ?> :</div>
					<?php echo $this->Form->input('password', array('div'=>false,'label'=>false, 'class' => 'form-control','placeholder'=>__('Password'))); ?>
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon">&nbsp; Role :</div>
					<?php echo $this->Form->input('role', array('div'=>false,'label'=>false,'class' => 'form-control',
					'options' => array('admin' => 'admin', 'customer' => 'customer','member'=>'member'))); ?>
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<?php echo $this->Form->input('active', array('type' => 'checkbox','label'=>"&nbsp; Active",)); ?>
				</div>
			</div>
			<div class="button text-right">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-share"></i> List Users'),
			 		array('action' => 'index'),array('class'=>'btn btn-primary ','escape' =>false)); ?>
				<?php echo $this->Form->button(__('Submit'), array( 'class' => 'btn btn-primary ')); ?>
				<?php echo $this->Form->button(__('Reset'), array('type'=>'reset','class' => 'btn btn-primary ')); ?>
			</div>
			<?php echo $this->Form->end(); ?>
		</div>
	</div>
</div>
