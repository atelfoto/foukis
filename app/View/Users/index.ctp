<?php  echo $this->set('title_for_layout',__('List Users'));  ?>
<?php $this->Html->addCrumb(__('List Users')); ?>
<div class="row">
	<div class="col-md-12">
				<legend><?php echo __('Manage Users'); ?></legend>
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover ">
				<tr class="info">
					<th class='tabid'><?php echo $this->Paginator->sort('id');?></th>
					<th><?php echo $this->Paginator->sort('username');?></th>
					<th><?php echo $this->Paginator->sort('firstname');?></th>
					<th class='tabbtn'><?php echo $this->Paginator->sort('role');?></th>
					<th class='tabbtn'><?php echo $this->Paginator->sort('active');?></th>
					<th colspan="2"><?= $this->Html->link(__('<i class="glyphicon glyphicon-import"></i> Add User'),
					 array('action' => 'add'),array('class'=>'btn btn-primary ','escape' =>false)); ?></th>
				</tr>
				<?php foreach($users as $k=>$v): $v = current($v); ?>
				<tr>
					<td class='tabid'><?= $v['id']; ?></td>
					<td><?= $v['username']; ?></td>
					<td><?= $v['firstname']; ?></td>
					<td class='tabbtn'><?= $v['role']; ?></td>
					<td class='tabbtn'><?= $v['active']=='0'?__('<span class="label label-default">Disabled</span>'):
						__('<span class="label label-success">Enabled</span>'); ?></td>
					<td class='tabbtn'>
						<?= $this->Html->link(__("<i class='glyphicon glyphicon-pencil'></i> Edit"), array('action' => 'edit',
							 $v['id']),array('class' => 'btn btn-default','escape' =>false)); ?>
					</td>
					<td class='tabbtn'>
						<?= $this->Html->link(__("<i class='glyphicon glyphicon-trash'></i> Delete"), array('action' => 'delete', $v['id']),
						array('class'=> 'btn btn-default', 'escape' =>false ),__('Do you really want delete ').$v['firstname']. __(' your users')); ?>
					</td>
				</tr>
				<?php endforeach; ?>
				</table>
			</div>
			<div class="text-center">
				<ul class="pagination">
					<?=  $this->Paginator->numbers(array('separator'=>false,'tag'=>'li'));  ?>
				</ul>
			</div>
	</div>
</div>

