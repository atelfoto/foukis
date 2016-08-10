<div class="row">
	<div class="panel-proporty" >
		<div class="col-md-10 col-md-offset-1 col-sm-6 ">
			<div class="panel panel-default" style="">
				<div class="panel-heading ">
				<span class="pull-left">
					<?php  echo  $this->Html->image('search_title.jpg',array('class'=>'img-responsive media-object')); ?>
				</span>

					 <h2 class="media-heading text-center" style=" font-weight:bolder;"><span class="media-body"> <?= __('Search') ?></span></h2>

				</div>
				<div class="panel-body">
					<p><?php // echo  $this->Html->image('/img/panels/residential_property.jpg',
						//array('title'=>__('Residential Property'),'class'=>'img-responsive','url'=>array('
						//controller'=>'properties','action'=>'index'))); ?>
					</p>
					<p> <?php // echo  $this->Html->image('/img/panels/land.jpg',
						//array('alt'=>'', 'class'=>'img-responsive','style'=>'','url'=>array(
						//'controller'=>'properties','action'=>'search'))); ?>
					</p>
					<ul class="media-list">
						<li class="media" style="border: 3px solid #eee;border-radius:8px;">
							<?php echo $this->Html->link( $this->Html->image('/img/panels/residential_property.jpg',
							array('class' => 'img-responsive media-object','style'=>'width: 112px; height: 52px;')),array(
							'controller'=>'properties','action'=>'index'),array('escape' => false, 'class' => 'pull-left')); ?>
							<div class="media-body text-center">
								<h4 class="media-heading text-center" style="padding:5px; font-weight:bolder;"><?= __('Residential') ?></h4>
								 <?= $this->Html->link(__('click here'), array('controller' => 'properties','action' => 'index'),array('class' => 'btn btn-warning btn-xs',
								  "style"=>"margin-top:-8px;")); ?>
							</div>
						</li>
						<li class="media" style="border: 3px solid #eee;border-radius:8px;">
							<?php echo $this->Html->link( $this->Html->image('/img/panels/land.jpg',
							array('class' => 'img-responsive media-object','style'=>'width: 112px; height: 52px;','title'=>__('land'))),array(
							'controller'=>'properties','action'=>'search'),array('escape' => false, 'class' => 'pull-left')); ?>
							<div class="media-body text-center">
								<h4 class="media-heading text-center" style="padding:5px; font-weight:bolder;"><?= __('Land') ?></h4>
								 <?= $this->Html->link(__('click here'), array('controller' => 'properties','action' => 'ResidentialSearch'),array('class' => 'btn btn-warning btn-xs',
								  "style"=>"margin-top:-8px;")); ?>
							</div>
						</li>
						<li class="media" style="border: 2px solid #eee;border-radius:8px;">
								<?php echo $this->Html->link( $this->Html->image('/img/panels/business_premises.jpg',
							array('class' => 'img-responsive media-object','style'=>'width: 112px; height: 52px;','title'=>__('land'))),array(
							'controller'=>'properties','action'=>'search'),array('escape' => false, 'class' => 'pull-left')); ?>
							<div class="media-body">
								<h4 class="media-heading text-center" style="padding:5px; font-weight:bolder;"><?= __('Business Premises') ?></h4>
							</div>
						</li>
						<li class="media" style="border: 3px solid #eee;border-radius:8px;">
							<?php echo $this->Html->link( $this->Html->image('/img/panels/businesses.jpg',
							array('class' => 'img-responsive media-object','style'=>'width: 112px; height: 52px;','title'=>__('land'))),array(
							'controller'=>'properties','action'=>'search'),array('escape' => false, 'class' => 'pull-left')); ?>
							<!-- </a> -->
							<div class="media-body text-center">
								<h4 class="media-heading text-center" style="padding:5px; font-weight:bolder;"><?= __('Businesses') ?></h4>
								 <?= $this->Html->link(__('click here'), array('controller' => 'residentials','action' => 'index'),array('class' => 'btn btn-warning btn-xs',
								  "style"=>"margin-top:-8px;")); ?>
							</div>
						</li>
					</ul>
				</div>
				<div class="panel-footer asidepropertysearch">
					<?php //echo $this->Form->create("property",array('controller'=>'properties','action'=>'search'));
						//	if (!isset($searchQuery)) {
						//		$searchQuery = '';
						//	}
						//	echo  $this->Form->input("searchQuery", array('value' => h($searchQuery),'label' => __('Property ID'), "class"=>"form-control" ));
					 ?>
					 <?php echo $this->Form->create("Property",array('url' => array('controller'=>'properties','action'=>'index')));
  						   echo $this->Form->input('name',array('label'=>__('Property ID'), "class"=>"form-control",
  						   	'placeholder'=>__('search...'),'escape' => false));
					   ?>

					<div class="">
						<button  id='button' style="margin-top:10px;" type="submit" class="btn btn-primary btn-block"><?= __('Search') ?></button>
					</div>
					<?=  $this->Form->end(); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-10 col-md-offset-1 col-sm-6">
		<div class="panel panel-default mapmonde">
			<div class="panel-heading text-center" >
				<address>
					<p > <span style='color:#F8851B;'>Athens - Greece</span> <br>
						32 Kaningos St
						106 82
					</p>
				</address>
			</div>
			<div class="panel-body">
				<ul class="fa-ul" style="padding-top:100px;">
					<li>
						<abbr title="phone"><i class='fa-li fa fa-mobile'></i>Tel 1: <a href="tel:00302103306333">+30 210 3306333</a></abbr>
					</li>
					<li>
						<abbr title="phone"><i class='fa-li fa fa-phone'></i>Tel 2: <a href="tel:00302103306595">+30 210 3306595</a></abbr>
					</li>
					<li>
						<abbr title="phone"><i class='fa-li fa fa-phone'></i>Tel 3: <a href="tel:00302103818830"> +30 210 3818830</a></abbr>
					</li>
					<li>
						<abbr title="phone"><i class='fa-li fa fa-phone'></i>Tel 4: <a href="tel:00302103306750">+30 210 3306750</a></abbr>
					</li>
					<li>
						<abbr title="fax"><i class='fa-li fa fa-fax'></i> Fax: +30 210 3846846</abbr>
					</li>
					<li>
						<abbr title="email"><i class="fa-li fa fa-at"></i></abbr>
							<a href="mailto:info@foukis-realestate.gr">info@foukis-realestate.gr</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
