<?= $this->set('title_for_layout',$post['Post']['name']); ?>
<?php $this->Html->addCrumb($post['Post']['name'], array('controller'=>'posts','action'=>'index','escape' =>false));
 	$this->Html->addCrumb($post['Post']['name']); ?>
<div class="row">
	<div class="col-md-12 block-wrapper">

<?php echo $post['Post']['content']; ?>
</div>
</div>

