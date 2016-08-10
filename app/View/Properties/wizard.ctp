<?= $this->Html->css(array(	'//www.fuelcdn.com/fuelux/3.5.0/css/fuelux.min.css','flexslider/flexslider','upload'),array('inline'=>false)); ?>
<?php // echo $this->set("title_for_layout",$property['Property']['name']);  ?>
<?php  $this->Html->addCrumb(' Utilisateurs ', array('controller'=>'properties','action'=>'index','escape' =>false)); ?>
<?php			//		$this->Html->addCrumb($property['Property']['name']); ?>
<div class="fuelux">
	<div class="wizard col-md-12" data-initialize="wizard" id="myWizard">
		<ul class="steps">
			<li data-step="1" class="active"><span class="badge">1</span><?= __('Propriéty') ?><span class="chevron"></span></li>
			<li data-step="2"><span class="badge">2</span><?= __('Add photos'); ?><span class="chevron"></span></li>
			<li data-step="3"><span class="badge">3</span>Template<span class="chevron"></span></li>
		</ul>
		<div class="actions">
			<button type="button" class="btn btn-default btn-prev"><span class="glyphicon glyphicon-arrow-left"></span><?= __('Prev'); ?></button>
			<button type="button" class="btn btn-default btn-next" data-last="Complete"><?= __('Next'); ?><span class="glyphicon glyphicon-arrow-right"></span></button>
		</div>
		<div class="step-content">
			<div class="step-pane active sample-pane alert" data-step="1">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h1 class="panel-title"><?php echo __('Add Property'); ?></h1>
					</div>
					<div class="panel-body">
						<?php echo $this->Form->create('Property',array('role'=>'form',"class"=>"form-horizontal")); ?>
						<fieldset>
							<div class="row">
								<div class="col-md-6">
										<?php
										//echo $this->Form->input('id');
										echo $this->Form->input('name',array("class"=>"form-control"));
										echo $this->Form->input('id2',array("class"=>"form-control"));
										echo $this->Form->input('state_id',array("class"=>"form-control",'empty'=> __('choose')));
										echo $this->Form->input('area_id',array("class"=>"form-control",'empty'=> __('choose')));
										echo $this->Form->input('status_id',array("class"=>"form-control",'empty'=> __('choose')));
										echo $this->Form->input('dateYear', array(
											'type' 	  => 'date',
											'dateFormat' => 'Y',
											'minYear'    => date('Y') - 90,
											'maxYear'    => date('Y'),
											'label'      =>__('Year'),
											'empty'      => __('choose'),
											'name'       => 'data[Property][dateYear]',));
											?>
								</div>
								<div class="col-md-6">
										<?php
										echo $this->Form->input('type_id',array("class"=>"form-control",'empty'=> __('choose')));
										echo $this->Form->input('level',array("class"=>"form-control"));
										echo $this->Form->input('size',array("class"=>"form-control"));
										echo $this->Form->input('price',array("class"=>"form-control"));
										echo $this->Form->input('bedrooms',array("class"=>"form-control",'required'=>false));
										?>
								</div>
							</div>
								<?php
									// echo $this->Form->input('content',array("class"=>"form-control"));
									echo $this->Media->tinymce('content',array('label'=> __("Content")));
								?>
								<?php  echo $this->Form->input('online',array("label"=>__('online'),"class"=>"form-control",'type'=>'checkbox','label'=>__('&nbsp;&nbsp;Online ?'))); ?>
						</fieldset>
							<div class="panel-footer text-right" style="margin-top:10px;">
								<button id='button' type="submit" class="btn btn-primary">
									<?= __('Submit'); ?>
								</button>
								<button id='button' type="reset" class="btn btn-primary">
									<?= __('reset'); ?>
								</button>
							</div>
							<?php echo $this->Form->end(); ?>
						</div>
					</div>
			</div>
			<div class="step-pane sample-pane  alert" data-step="2">
				<div id="plupload">
					<div id="droparea">
						<p>Déposez vos fichiers içi</p>
						<span class="or">ou</span>
						<a href="#" id="browse">Parcourir</a>
					</div>
					<form action="" type="file">
					<div id="filelist">
					<?php foreach (glob('/img/property/$id/*.*') as  $v):  ?>
						<div class="file">

							<img src="<?php echo $v; ?>" alt=""  >
							<?php echo basename($v); ?>
							<div class="action">
								<a href="<?php  echo basename($v); ?>" class="delete">Suprimer</a>
							</div>

						</div>
						<?php endforeach; ?>
					</div>
					</form>
					<!-- <a href="#" id="upload">Envoyer</a> -->
				</div>
			</div>
			<div class="step-pane sample-pane bg-danger alert" data-step="3">
				<h4>Design Template</h4>
				<p>Nori grape silver beet broccoli kombu beet greens fava bean potato quandong celery. Bunya nuts black-eyed pea prairie turnip leek lentil turnip greens
				 parsnip. Sea lettuce lettuce water chestnut eggplant winter purslane fennel azuki bean earthnut pea sierra leone bologi leek soko chicory
				 celtuce parsley jÃ­cama salsify. </p>
			</div>
		</div>
	</div>
</div>
<?php  $this->Html->script(array("wizard","plupload/plupload.full.min","plupload/main",), array('inline'=>false)); ?>
<?=  $this->Html->scriptStart(array(),array('inline'=>false)); ?>
<!-- $('#myWizard').wizard(); -->
<?= $this->Html->scriptEnd(); ?>
