<?= $this->fetch('title'); ?><?=   $this->set('title_for_layout',__('Edit Link'));  ?>
<?php $this->Html->addCrumb(__('Links'), array('controller'=>'links','action'=>'adminindex','escape' =>false));
      $this->Html->addCrumb(__('Edit Link'));?>
<div class="row">
	<div class="col-md-offset-5 col-md-4 ">
	 	<div class="panel panel-primary">
			<div class="panel-heading">
				<h1 class="panel-title"><?php echo __('Edit Link'); ?></h1>
			</div>
			<div class="panel-body">
				<?php echo $this->Form->create('Link'); ?>
					<fieldset>
						<legend><?php echo __('Edit Link'); ?></legend>
					<?php
						echo $this->Form->input('id');
						echo $this->Form->input('name',array('class'=>'form-control'));
						echo $this->Form->input('url',array('class'=>'form-control'));
						echo $this->Form->input('online',array('label'=>"active ?", 'type'=>'checkbox','class'=>""));
					?>
					</fieldset>
					<div class="button text-right">
						<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-share"></i> List links'),
		 					array('action' => 'adminindex'),array('class'=>'btn btn-primary aja?','escape' =>false)); ?>
						<button  type="submit" class="btn btn-primary">
							<span class="glyphicon glyphicon-ok-sign"></span>&nbsp; <?= __('submit'); ?>
						</button>
						<button  type="reset" class="btn btn-primary">
							<span class="glyphicon glyphicon-remove"></span>&nbsp;<?= __('reset'); ?>
						</button>
					</div>
				<?php echo $this->Form->end(); ?>
			</div>
		</div>
	</div>
</div>




