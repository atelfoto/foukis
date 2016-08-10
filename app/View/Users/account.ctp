<?php  echo $this->fetch('title') ?><?php  echo $this->set('title_for_layout',__('Account'));  ?>
<div class="row">
<?php $this->Html->addCrumb(__('Users'), array('controller'=>'users','action'=>'index','escape' =>false));
	echo '&nbsp;';
 	$this->Html->addCrumb($this->Session->read('Auth.User.username') ); ?>
	<div class="col-md-10 col-md-offset-1">
	 <div class="panel panel-primary">
		<div class="panel-heading">
			<h2 class="panel-title">&nbsp;</h2>
		</div>
		<div class="panel-body row">
			<div class="col-md-2">
				<?php if ($this->Session->read('Auth.User.avatar')):?>
				<?=  $this->Html->image($this->Session->read('Auth.User.avatari') . '?' . rand(),array('class'=>'img-avatar img-thumbnail')); ?>
				<?php endif ?>
			</div>
			<?=  $this->Form->create('User',array('type'=>'file','class'=>'form-horizontal')); ?>
			<fieldset class="col-md-8 ">
				<div class="form-group">
					<?=  $this->Form->input('username', array('label'=>__('Username'),'id'=>'disabledTextInput','class'=>'disabled form-control',
					 'disabled'=>true, 'readonly'=> true,'value'=>$this->Session->read('Auth.User.username'))); ?>
				</div>
				<div class="form-group"><?=  $this->Form->input('lastname', array('label'=> __('Name') ,'class'=>'form-control')); ?></div>
				<div class="form-group"><?=  $this->Form->input('firstname', array('label'=>__('firstname') ,"class"=>'form-control')); ?></div>
				<div class="form-group form-inline">
					<?=  $this->Form->input('avatarf', array('type'=>'file',"class"=>"btn btn-primary","style"=>'color:#fff;',"label"=>"image",
						"title"=>'<span style="color:#ffffff;"><i class="fa fa-paperclip"></i>&nbsp;'.__(' Download image&nbsp;').'</span>'),
						array('escape'=>false)); ?>
					<?php // echo $this->Form->input('avatarf', array('type'=>'file','class'=>'file-input-wrapper  col-sm-2 btn btn-default  btn-primary',
					//	'label'=>false,'div'=>false, "style"=>"color:#fffffff;" , "title"=>'<span style="color:#ffffff;"><i class="fa fa-paperclip"></i>
					//	&nbsp;Download image&nbsp;</span>',"required"=>false),array('escape'=>false)); ?>
					<p class="help-block"><?php echo __("Select a file from your computer") ?></p>
				</div>
				<div class="button text-right">
					<button  type="submit" class="btn btn-primary"><?= __('Change'); ?> </button>
					<button  type="reset" class="btn btn-primary"> <?= __('Reset'); ?></button>
				</div>
			</fieldset>
			<?=  $this->Form->end(); ?>
		</div>
	  </div>
	</div>
</div>
<?=  $this->Html->script(array("bootstrap.file-input"), array('inline'=>false)); ?>
<?=  $this->Html->scriptStart(array('inline'=>'false')); ?>
     $('input[type=file]').bootstrapFileInput();
	 $('.file-inputs').bootstrapFileInput();
<?= $this->Html->scriptEnd(); ?>

