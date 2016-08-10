<?= $this->fetch('title'); ?><?php  echo $this->set('title_for_layout','Utilisateur');  ?>
<?php $this->Html->addCrumb(' Utilisateurss', array('controller'=>'users','action'=>'index','escape' =>false));
 	$this->Html->addCrumb(' Ajouter un Utilisateur'); ?>
<div class="row">
	<div class="col-md-6 col-md-offset-4 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h1 class="panel-title">Ajouter un utilsateur</h1>
			</div>
			<div class="panel-body">
			<?php echo $this->Form->create('User');?>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon">Nom : <span class="fa fa-lock"></span></div>
					<?php echo $this->Form->input('lastname', array('div'=>false,'label'=>false, 'class' => 'form-control','placeholder'=>"Nom")); ?>
					<div class="input-group-addon"><span class="fa fa-lock"></span></div>
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon">Prenom :</div>
					<?php echo $this->Form->input('firstname', array('div'=>false,'label'=>false,'class' => 'form-control')); ?>
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon">Login :</div>
					<?php echo $this->Form->input('username', array( 'div'=>false,'label'=>false,'class' => 'form-control')); ?>
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon">Password :</div>
					<?php echo $this->Form->input('password', array('div'=>false,'label'=>false, 'class' => 'form-control')); ?>
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
				<?php echo $this->Html->link('<i class="glyphicon glyphicon-share"></i> Liste Utilisateurs',
			 		array('action' => 'index'),array('class'=>'btn btn-primary ','escape' =>false)); ?>
				<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary ')); ?>
				<?php echo $this->Form->button('reset', array("label"=>"effacer",'class' => 'btn btn-primary ')); ?>
			</div>
			<?php echo $this->Form->end(); ?>
		</div>
	</div>
</div>
