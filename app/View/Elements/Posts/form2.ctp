<?= $this->fetch('title'); ?><?php  echo $this->set('title_for_layout','posts');  ?>
<?php  $this->Html->addCrumb(' posts', array('controller'=>'posts','action'=>'adminindex','escape' =>false));
 ?>
 <?php // echo $this->Breadcrumb->render(); ?>
<div class="row">
	<div class="col-md-10 col-md-offset-1 ">
		<div class="panel panel-primary ">
			<div class="panel-heading">
				<h1 class="panel-title"><?php echo __('Add Post'); ?></h1>
			</div>
			<div class="panel-body">
				<?php echo $this->Form->create('Post');?>
				<div class="form-group col-md-6">
					<div class="input-group ">
						<div class="input-group-addon">Nom : <span class="fa fa-user"></span></div>
						<?php echo $this->Form->input('name', array('div'=>false,'label'=>false, 'class' => 'form-control','placeholder'=>"Nom")); ?>
					</div>
				</div>
				<div class="form-group col-md-6">
					<div class="input-group">
						<div class="input-group-addon">Url :</div>
						<?php echo $this->Form->input('slug', array('div'=>false,'label'=>false,'class' => 'form-control')); ?>
					</div>
				</div>
				<?= $this->Form->input('content', array('label' => "Contenu",'class'=>'form-control')); ?>

				<div class="form-group">
					<div class="input-group">
						<?php echo $this->Form->input('online', array('type' => 'checkbox','label'=>"&nbsp; Active",)); ?>
					</div>
				</div>
				<div class="button text-right">
					<?php echo $this->Html->link('<i class="glyphicon glyphicon-share"></i> Liste Pages',
					      array('action' => 'adminindex'),array('class'=>'btn btn-primary ','escape' =>false)); ?>
					<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary ')); ?>
					<?php echo $this->Form->button('reset', array("label"=>"effacer",'class' => 'btn btn-primary ')); ?>
				</div>
				<?php echo $this->Form->end(); ?>
			</div>
		</div>
	</div>


	<?= $this->Html->script('tinymce/tinymce.min', array('inline'=>false)); ?>
	<?= $this->Html->scriptStart(array('inline' =>false)); ?>
	tinyMCE.init({
	selector: "textarea",
	theme: "modern",
	language :"fr_FR",
	resize: "both",

	plugins: [
	"advlist autolink lists link image charmap print preview hr anchor pagebreak",
	"searchreplace wordcount visualblocks visualchars  fullscreen",
	"insertdatetime media nonbreaking save table contextmenu directionality",
	"emoticons template paste textcolor emmet visualblocks spellchecker code  "
	],

	spellchecker_languages : "+English=en,French=fr",

	toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | ",
	toolbar2: "print preview media | forecolor backcolor emoticons | spellchecker code image  ",
	image_advtab: true,
	paste_remove_styles : true,
	// image_explorer :'<?php // echo $this->Html->url(array('controller'=>'medias','action'=>'index', $this->request->data['Post']['id'])); ?>',
	image_edit :'<?= $this->Html->url(array('controller'=>'medias','action'=>'show')); ?>',
	content_css : '<?= $this->Html->url('/css/custom.css'); ?>',

	templates: [
	{title: 'Test template 1', content: 'Test 1'},
	{title: 'Test template 2', content: 'Test 2'},
	],
	relative_urls: false,

});

function send_to_editor(content){
var ed = tinyMCE.activeEditor;
ed.execCommand('mceInsertContent',false,content);

}
<?=  $this->Html->scriptEnd(); ?>
