<?= $this->Html->css(array(	'datepicker/datepicker3','bootstrap-toggle'),array('inline'=>false)); ?>
<?php  echo $this->set('title_for_layout',__('Edit Property'));  ?>
<?php $this->Html->addCrumb(__('Properties'), array('controller'=>'properties','action'=>'adminindex','escape' =>false));
$this->Html->addCrumb(__('Edit property')); ?>
<div class="">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo __('Edit Property'); ?></h3>
			</div>
			<?php echo $this->Form->create('Property',array('role'=>'form',"class"=>"form-horizontal")); ?>
			<div class="panel-body">
				<div class="row ">
					<?php echo $this->Form->input('online',array(
						'label'=>false,
						//'label'=>__('Online'),
						'required'=>false,
						'type'=>'checkbox',
						 'name'=>'data[Property][online]',
						 'data-toggle'=>"toggle",
						 "data-onstyle"=>"success",
						 "data-offstyle"=>"danger",
						 'data-style'=>"ios",
						 //'data-size'=>"mini",
						 "data-on"=>__('on'),
						  "data-off"=>__('off'),
						  'div'=>array('class'=>'col-md-offset-9 col-md-1 text-right'),
						 ));
					?>
					<div class="col-md-2"  style="margin-top:10px;">
						<button  type="submit" class="btn btn-success "><i class="fa fa fa-check fa-lg" style="color:#fff;">&nbsp;</i>
							<?= __('Submit'); ?>
						</button>
						<button  type="reset" class="btn btn-primary ">
							<?= __('reset'); ?>
						</button>
					<?= $this->Html->link('<i class="fa fa-times-circle fa-lg" style="color:#f00;">&nbsp;</i>'.__('Closed'),
					array('controller' => 'properties', 'action' => 'adminindex'),array('class'=>'btn btn-default ','type'=>'button','escape'=>false)); ?>
					</div>
				</div>
				<fieldset>
					<div class="row">
						<div class="col-md-6">
							<?php
							echo $this->Form->input('id');
							echo $this->Form->input('id2',array("class"=>"form-control"));
							echo $this->Form->input('name',array("class"=>"form-control"));
							echo $this->Form->input('state_id',array("class"=>"form-control"));
							echo $this->Form->input('area_id',array("class"=>"form-control"));
							echo $this->Form->input('status_id',array("class"=>"form-control"));
							?>
							<label for="PropertyDateYearYear"><?= __('Year') ?></label>
								<?php
								echo $this->Form->input('dateYear', array(
									'type' 	  => 'text',
									"div"=>array("class"=>"input-group date"),
									"before"=>'<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>',
									'maxYear'    => date('Y'),
									'label'      =>false,
									'required'=>false,
									'placeholder'      => __('choose'),
									'name'       => 'data[Property][dateYear]',
									"class"=>"form-control"));
									?>
						</div>
						<div class="col-md-6">
							<?php
							echo $this->Form->input('type_id',array("class"=>"form-control"));
							echo $this->Form->input('level',array("class"=>"form-control","required"=>false));
							echo $this->Form->input('size',array("class"=>"form-control"));
							echo $this->Form->input('price',array("class"=>"form-control"));
							echo $this->Form->input('bedrooms',array("class"=>"form-control"));
						//	echo $this->Form->input('mediaQuantities',array("class"=>"form-control"));
							?>
						</div>
					</div>
					<?php
					echo $this->Media->tinymce('content',array('label'=> __("Content"),
						"div"=>array('class'=>"col-md-12")));
					?>
				</fieldset>
				</div>
				<div class="panel-footer text-right" style="margin-top:10px;">
					<button id='button' type="submit" class="btn btn-primary">
						<?= __('Submit'); ?>
					</button>
					<button id='button' type="reset" class="btn btn-primary">
						<?= __('Reset'); ?>
					</button>
				</div>
				<?php echo $this->Form->end(); ?>
			</div>
		</div>

</div>

	<?=  $this->Html->script(array("plugins/datepicker/bootstrap-datepicker",'bootstrap-toggle.min'
	), array('inline'=>false)); ?>
	<?=  $this->Html->scriptStart(array(),array('inline'=>false)); ?>
		 $('.input-group.date').datepicker({
    		format: "yyyy",
    		startDate: "1900/",
    		endDate: "today",
    		startView: 1,
    		minViewMode: 2,
    		clearBtn: true,
    		autoclose: true,
    		orientation: "bottom left"
    		});
	<?=  $this->Html->scriptEnd();?>
