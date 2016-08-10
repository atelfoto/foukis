<?php  echo $this->set('title_for_layout',__('Edit User'));  ?>
<?php $this->Html->addCrumb(__('Users'), array('controller'=>'users','action'=>'index','escape' =>false));
 	$this->Html->addCrumb(__('Edit User')); ?>
<div class="row">
	<div class="col-md-6 col-md-offset-4 ">
		 <div class="panel panel-primary">
		<div class="panel-heading">
			<h1 class="panel-title"><?= __('Edit User'); ?></h1> <!-- Editer l'utilsateur -->
		</div>
		<div class="panel-body">
		<?= $this->Form->create('User',array('role'=>'form')); ?>
				<?= $this->Form->input('id'); ?>
				<div class="form-group"><?= $this->Form->input('username', array('label'=>__('Login :'),"class"=>"form-control")); ?></div>
				<div class="form-group"><?= $this->Form->input('password', array('label' =>__('Password :'),"class"=>"form-control",'required' =>false)); ?></div>
				<div class="form-group"><?= $this->Form->input('passwordconfirm', array('label' =>__("Confirm Password :"),"class"=>"form-control",'type'=>'password')); ?></div>
				<div class="form-group"><?= $this->Form->input('role', array('label' => "Role","class"=>"form-control")); ?></div>
				<div class="form-group"><?php echo $this->Form->input('active', array('label' => "active ?",'type'=>'checkbox')); ?></div>
				<div class="button text-right">
					<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-share"></i> List Users'),
		 				array('action' => 'index'),array('class'=>'btn btn-primary ','escape' =>false)); ?>
					<button id='button' type="submit" class="btn btn-primary"><?= __('Submit') ; ?></button>
					<button id='button' type="reset" class="btn btn-primary"><?= __('reset'); ?></button>
		</div>
		<?= $this->Form->end(); ?>
	</div>
	</div>
	</div>
</div>

