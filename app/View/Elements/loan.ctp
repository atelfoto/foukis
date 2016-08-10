<div class="col-md-12">
	<h3><?= __('Loan') ?></h3>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class='panel-title'><?= __('Loan') ?></h3>
		</div>
		<div class="panel-body">
			<?php echo $this->Form->create('loan',array('role'=>'form',"class"=>"form-horizontal")); ?>
			<div class="col-md-6">
				<h4> <?= __('Loan Information:') ?></h4>
				<?=  $this->Form->input('loan',array('label'=>__('loan € :'),'class'=>'form-control','multiple'=>false)); ?>
				<?=  $this->Form->input('Interest Rate',array('label'=>'Interest Rate (%):','class'=>'form-control')); ?>
				<?=  $this->Form->input('Period in Years',array('label'=>__('Period in Years:'),'class'=>'form-control')); ?>
			</div>
			<div class="col-md-6 clearfix">
				<h4> <?= __('Payment Information:') ?></h4>
				<?=  $this->Form->input('Monthly Payment',array('label'=>__('Monthly Payment :'),'class'=>'form-control')); ?>
				<?=  $this->Form->input('Total Interest Paid',array('label'=>__('Total Interest Paid :'),'class'=>'form-control')); ?>
			</div>
		</div>
		<div class="panel-footer text-center">
			<button id='button' type="submit" class="btn btn-primary">
			<?= __('Calculate'); ?>
			</button>
		</div>
		<?=  $this->Form->end($options = null); ?>
	</div>
</div>
