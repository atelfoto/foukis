<div class="row ">
	<div class="col-md-12 ">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="panel-title"><?php echo __('I am searching Residential Property:') ?></h2>
			</div>
			<div class="panel-body">
				<?php echo $this->Form->create('Property',array('controller'=>'properties','action'=>'ResidentialSearchindex'),array('role'=>'form',"class"=>"form-horizontal")); ?>
				<fieldset>
					<div class="row">
						<div class="col-md-11 col-md-offset-1" style="margin-bottom:10px;">
							<?php  $options = array('For Sale' => __('For Sale'), 'To Let'=>__('To Let'), 'Giving in exchange for' => __('Giving in exchange for'));$attributes = array('legend' => false,'required' => false,'type'=>'radio','class'=>'radio-inline');echo $this->Form->radio('status_id', $options, $attributes); ?>
						</div>
						<div class="col-md-4">
							<?php
							echo $this->Form->input('type_id',array("class"=>"form-control",'multiple' => true,'id'=>'getting-started',
								'required' => false,));
							?>
						</div>
						<div class="col-md-4">
							<?php
							 echo $this->Form->input('state_id',array("class"=>"form-control"));
							 echo $this->Form->input('area_id',array("class"=>"form-control"));
							?>
							<!-- <p>size</p> -->
							<div class='row'>
								<div class="col-md-6">
									<?= $this->Form->input('sizemin',array('class'=>'form-control','required' => false)); ?>
								</div>
								<div class="col-md-6">
									<?= $this->Form->input('sizemax',array('class'=>'form-control','label'=>'&nbsp;','required' => false)); ?>
								</div>
							</div>
							<!-- <p>price</p> -->
							<div class='row'>
								<div class="col-md-6">
									<?= $this->Form->input('pricemin',array('class'=>'form-control','required' => false)); ?>
								</div>
								<div class="col-md-6">
									<?= $this->Form->input('pricemax',array('class'=>'form-control','label'=>'&nbsp;','required' => false)); ?>
								</div>

							</div>
						</div>
						<div class="col-md-4">
							<?php
							echo $this->Form->input('characteristics',array("class"=>"form-control"));
							?>
						</div>
						<div class="col-md-12 text-center" style='margin-top:10px;'>
							<!-- <input class="btn btn-primary" type="submit" value="Recherche"> -->
							<?php  echo $this->Form->button(__('Search'), array('type' => 'search','class'=>'btn btn-primary', 'escape' => true)); ?>
						</div>
						<?php  $this->Form->end(); ?>
					</div>
				</fieldset>
			</div>
		</div>
	</div>
</div>
<?php  $this->Html->css('multiselect/bootstrap-multiselect', null, array('inline' => false)); ?>
<?php  $this->Html->script('multiselect/bootstrap-multiselect', array('inline' => false)); ?>

<?php  $this->Html->scriptStart(array('inline'=>false)); ?>
 $(document).ready(function() {
$('#getting-started').multiselect();
});
<?php  $this->Html->scriptEnd(); ?>
<?php // $this->Html->css('chosen', null, array('inline' => false)); ?>
<?php // $this->Html->script('chosen.jquery.min', array('inline' => false)); ?>
<?php // $this->Html->scriptStart(array('inline' => false)); ?>
<!-- //(function($){
//
//    $('select').chosen();
//
//})(jQuery); -->
<?php // $this->Html->scriptEnd(); ?>
