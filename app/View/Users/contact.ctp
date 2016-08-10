<div class="page-header">
	<h1><?php echo __('Contact'); ?></h1>
</div>
<div class="row">
<div class="col-md-4">

</div>
<div class="col-md-5">
<div class="row">
		<div class="col-md-12" style="height:300px;">
			<fieldset>
			<legend><?= __('Contact Form'); ?></legend>
				<?= $this->Form->create('User') ; ?>
				<?=  $this->Form->input('name', array('label'=>'Votre Nom','required')); ?>
				<?=  $this->Form->input('firstname', array('label'=>'Votre Prenom')); ?>
				<?=  $this->Form->input('email', array('label'=>'Votre Email','type'=>'email','required')); ?>
				<?=  $this->Form->input('message', array('label'=>'Votre Message','type'=>'textarea','required')); ?>
				<?php  echo $this->Form->input('website', array('label'=>false,'type'=>'text','class'=>'toto hidden')); ?>
			</fieldset>
		</div>
	<div class="col-md-12" style="postion:absolute;">
	 <?= $this->Form->end("Envoyer"); ?>
				<!-- <button id='button' type="submit" class="btn btn-primary">Envoyer</button> -->

	</div>
</div>
</div>




<div class="col-md-3">

</div>
</div>
