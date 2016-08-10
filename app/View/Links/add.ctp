<?= $this->fetch('title'); ?><?=   $this->set('title_for_layout',__('Add Link'));  ?>
<div class="row">
<?php  $this->Html->addCrumb(__('Links'), array('controller'=>'links','action'=>'adminindex','escape' =>false));
 	 $this->Html->addCrumb(__('Add Link')); ?>
	<div class="col-md-offset-5 col-md-4">
		<div class="panel panel-primary">
			<div class="panel panel-heading">
				<p class="panel-title"><?= __('Add Link'); ?> </p>
			</div>
			<div class="panel-body">
				<?php echo $this->Form->create('Link'); ?>
				<fieldset >
					<?php
						echo $this->Form->input('name', array('label'=>__('Name') ,'class'=>"required form-control") );
						echo $this->Form->input('url', array('label'=>'Url','class'=>'form-control') );
					?>
				<div class="button text-right" >
					<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-share"></i> List links'),
		 			array('action' => 'adminindex'),array('class'=>'btn btn-primary ','escape' =>false)); ?>
					<button id='button' type="submit" class="btn btn-primary"> <?= __('Submit'); ?></button>
					<button id='button' type="reset" class="btn btn-primary"> <?= __('Reset'); ?></button>
				</div>
				</fieldset>
				<?php echo $this->Form->end(); ?>
			</div>
		</div>
	</div>
</div>
