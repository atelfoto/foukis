<?php $this->set('title_for_layout', __('Login'));  ?>
<div class="row centered-form">
	<div class="col-md-6 col-md-offset-3" >
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h1 class="panel-title"><?= __('Login'); ?></h1>
			</div>
			<div class="panel-body">
				<?= $this->Form->create('User'); ?>
				<fieldset>
					<div class="form-group required">
						<label for="UserUsername"> <?= __('Username'); ?> :</label>
						<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-user"></i></div>
							<?= $this->Form->input('username', array('div'=>false,'label' => false,
							"placeholder"=>__('username'),'class'=>"form-control")); ?>
						</div>
					</div>
					<div class="form-group required">
						<label for="UserPassword"><?= __('Password'); ?> : </label>
						<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-key"></i></div>
							<?= $this->Form->input('password', array('div'=>false,'label' => false,
							"placeholder"=>__('Password'),'class'=>'form-control')); ?>
						</div>
					</div>
					<div class="input checkbox">
						<?php echo  $this->Form->input('remember', array('type'=>'checkbox',
						'label'=>__('Remember me') ,'div'=>false,'class'=>'input')); ?><!-- <label for="UserRemember">Se souvenir de moi ?</label> -->
					</div>
				</fieldset>
				<div class="button">
					<button id='button' type="submit" class="btn btn-primary"><?= __('Sign In '); ?></button>
					<button id='button' type="reset" class="btn btn-primary"> <?= __('Reset'); ?></button>
				</div>
				<?= $this->Form->end(); ?>
				<ul style="margin-left:-40px; margin-top: 10px;">
					<li>
						<em style=""><?=  $this->Html->link(__('Forgot password?'), array('action' => 'forgot')); ?></em>
					</li>
					<li>
						<em style=""><?=  $this->Html->link(__('Create account') , array('action' => 'signup')); ?></em>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>




