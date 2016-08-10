<?= $this->fetch('title'); ?><?php  echo $this->set('title_for_layout',__('Links'));  ?>
<?php  $this->Html->addCrumb(__(' Links'));?>
<div class="row">
	<div class="col-md-12" id="">
		<div class="table-responsive">
			<legend><?php echo __('Links'); ?></legend>
			<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('name'); ?></th>
						<th><?php echo $this->Paginator->sort('url'); ?></th>
						<th><?php echo $this->Paginator->sort('created'); ?></th>
						<th><?php echo $this->Paginator->sort('online'); ?></th>
						<th class="actions" colspan="2">
							<?= $this->Html->link(__('<i class="glyphicon glyphicon-import"></i> New Link'),
						array('action' => 'add'),array('class'=>'btn btn-primary aja?','escape' =>false)); ?>
						</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($links as $link): ?>
						<tr>
							<td/><?php  echo h($link['Link']['id']); ?>&nbsp;</td>
							<td><?php echo h($link['Link']['name']); ?>&nbsp;</td>
							<td><a href="<?= $link['Link']['url']; ?>"><?php echo h($link['Link']['url']); ?></a>&nbsp;</td>
							<a href=""></a>
							<td><?php  echo h($link['Link']['created']); ?>&nbsp;</td>
							<td>
							<?= $link['Link']['online']=='0'?__('<span class="label label-default">Disabled</span>'):
								__('<span class="label label-success">Enabled</span>'); ?>
							&nbsp;</td>
							<td class="actions">
								<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>&nbsp;Edit'), array('action' => 'edit',
								 $link['Link']['id']),array('class' => 'btn btn-default aja?','escape' =>false)); ?>
							</td>
							<td>
								<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>&nbsp;Delete'), array('action' => 'delete',
								 $link['Link']['id']), array('class'=> 'btn btn-default', 'escape' =>false ), __('Are you sure you want to delete  %s?', $link['Link']['name'])); ?>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div> <!-- /table responsive -->
		<div class="paging text-center" style ="">
				<?= $this->element("pagination"); ?>
				<?= $this->element("pagination-counter"); ?>
		</div>
	</div>
</div>
