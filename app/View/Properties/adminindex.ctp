<?php echo $this->set('title_for_layout',__('Properties'));  ?>
<?php 	$this->Html->addCrumb(__("Properties")); ?>
<div class="row">
	<?php	echo $this->Form->create('Property', array('action' => 'search'));
			if (!isset($searchQuery)) {
				$searchQuery = '';
			}
			echo $this->Form->input('searchQuery', array( "label"=>false,'value' => h($searchQuery),"class"=>"form-control","div"=>array('class'=>"col-md-5 form-group") ));
			echo $this->Form->end(array("label"=>__('Search'),"div"=>array(  "class"=>'col-md-2'),"class"=>"btn btn-primary"));
	?>
</div>
<br>
<div class="row">
	<div class="col-md-12">
		<div class="table-responsive ">
			<table  class="table table-striped table-bordered table-hover">
				<thead >
					<tr class="info">
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('name',null, array('direction' => 'desc'), array('escape' => false)); ?></th>
						<th><?php echo $this->Paginator->sort('mediaQuantities',__('quanties')); ?></th>
						<th><?php echo $this->Paginator->sort('state_id'); ?></th>
						<th><?php echo $this->Paginator->sort('area_id'); ?></th>
						<th><?php echo $this->Paginator->sort('status_id'); ?></th>
						<th><?php echo $this->Paginator->sort('type_id'); ?></th>
						<th><?php echo $this->Paginator->sort('size'); ?></th>
						<th><?php echo $this->Paginator->sort('price'); ?></th>
						<th><?php echo $this->Paginator->sort('dateYear',__('Year')); ?></th>
						<th><?php echo $this->Paginator->sort('bedrooms'); ?></th>
						<th><?php echo $this->Paginator->sort('level'); ?></th>
						<th><?php echo $this->Paginator->sort('online'); ?></th>
						<th><?php echo $this->Paginator->sort('created'); ?></th>
						<th><?php echo $this->Paginator->sort('modified',__('Modified')); ?></th>
						<th colspan="2" ><?= $this->Html->link(__('<i class="glyphicon glyphicon-plus">&nbsp;</i> add '),
						array('action' => 'add'),array('class'=>'btn btn-primary ','escape' =>false)); ?></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($properties as $property): ?>
						<tr>
							<td><?php echo h($property['Property']['id']); ?>&nbsp;</td>
							<td><?php echo h($property['Property']['name']); ?>&nbsp;</td>
							<td>
								<span class="badge bg-green" ><?php echo h($property['Property']['mediaQuantities']); ?></span>
							</td>
							<td>
								<?php echo $this->Html->link($property['State']['name'], array('controller' => 'states', 'action' => 'view', $property['State']['id'])); ?>
							</td>
							<td>
								<?php echo $this->Html->link($property['Area']['name'], array('controller' => 'areas', 'action' => 'view', $property['Area']['id'])); ?>
							</td>
							<td>
								<?php echo $this->Html->link($property['Status']['name'], array('controller' => 'statuses', 'action' => 'view', $property['Status']['id'])); ?>
							</td>
							<td>
								<?php echo $this->Html->link($property['Type']['name'], array('controller' => 'types', 'action' => 'view', $property['Type']['id'])); ?>
							</td>
							<td><?php echo h($property['Property']['size']); ?>&nbsp;</td>
							<td><?php echo $this->Number->currency($property['Property']['price'], ' € ',array('wholePosition'=>"after",'thousands'=>'.','decimals'=>',')); ?>&nbsp;</td>
							<td><?php echo h($property['Property']['dateYear']); ?>&nbsp;</td>
							<td><?php echo h($property['Property']['bedrooms']); ?>&nbsp;</td>
							<td><?php echo h($property['Property']['level']); ?>&nbsp;</td>
							<td><?= $property['Property']['online']=='0'?__('<span class="label label-default">Disabled</span>'):
								__('<span class="label label-success">Enabled</span>'); ?></td>
							<td><?php echo $this->Date->french($property['Property']['created']); ?>&nbsp;</td>
							<!-- <td><?php  echo h($property['Property']['modified']); ?>&nbsp;</td> -->
							<!-- <td> <?php echo $this->Time->format($property['Property']['modified'], '%B %e, %Y %H:%M %p'); ?></td> -->
							<td> <?php echo $this->Time->nice($property['Property']['modified']); ?></td>
							<td class="actions">
								<?php echo $this->Html->link(__("<i class='glyphicon glyphicon-pencil' style='color:#00f;'></i>&nbsp;Edit"), array('action' => 'edit',
								$property['Property']['id']),array('class' => 'btn btn-default','escape' =>false)); ?>
							</td>
							<td>
								<?php echo $this->Form->postLink(__("<i class='glyphicon glyphicon-trash' style='color:#f00;'></i>&nbsp;Delete"), array('action' => 'delete',
								 $property['Property']['id']),array('class' => 'btn btn-default','escape' =>false),
								  __('Are you sure you want to delete '.$property['Property']['id'].'of your properties')); ?>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		  </div>
	</div>
	<div class="text-center"><?= $this->element('pagination'); ?>
		<?= $this->element('pagination-counter'); ?>
	</div>
</div>


