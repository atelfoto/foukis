<?= $this->Html->meta("description", "Offer your property", array('inline'=>false)); ?>
<?php  echo $this->set('title_for_layout',__('Offer your property'));  ?>
<?php  $this->Html->addCrumb(__(' Offer your property'));?>
<div class="row">
	<div class="col-xs-12 col-md-12 " id="ajax-contact">
		<?php // echo $this->Html->image('loading.gif', array('id' => 'indicator-contact')); ?>
		<div class="centered-form" >
			<div class="col-md-12">
				<div class="alert alert-info" role="alert">
					<!-- <p> N'hésitez pas à nous contacter pour plus de précisions:</p> -->
					<p> <?= __('Feel free to contact us for any questions or comments you have:') ?></p>
				</div>
				<div class="panel panel-default">
					<?= $this->Form->create('Offering') ; ?>
					<div class="panel-body text-center">
						<p class='text-left'><i class="fa fa-asterisk"></i>&nbsp;<?= __('Required field:'); ?></p>
						<fieldset class="" >
							<div class="row">
								<div class="col-md-6">
									<div class="form-group required">
										<label for="OfferingName"> <?= __('Name'); ?> <i class="fa fa-asterisk"></i></label>
										<div class="input-group">
											<div class="input-group-addon"><i class="fa fa-user"></i></div>
											<?=  $this->Form->input('name', array('label' => false,'required'=>false,'class'=>"form-control","placeholder"=>
											__('Your Name'))); ?>
										</div>
									</div>
									<div class="form-group required">
										<label for="OfferingPhone"> <?= __('Phone'); ?>&nbsp;<i class="fa fa-asterisk"></i></label>
										<div class="input-group">
											<div class="input-group-addon"><i class="fa fa-phone"></i></div>
											<?=  $this->Form->input('phone', array('label' => false,'required'=>false,'class'=>"form-control",
											"placeholder"=>__('Your Phone'))); ?>
										</div>
									</div>
									<div class="form-group required">
										<label for="OfferingMobile"> <?= __('Your Mobile'); ?> <i class="fa fa-asterisk"></i></label>
										<div class="input-group">
											<div class="input-group-addon"><i class="fa fa-mobile"></i></div>
											<?=  $this->Form->input('mobile', array('label' => false,'required'=>false,'class'=>"form-control",
											"placeholder"=>__('Your Mobile'))); ?>
										</div>
									</div>
									<div class="form-group required">
										<label for="OfferingFax">  Fax:</label>
										<div class="input-group">
											<div class="input-group-addon"><i class="fa fa-fax"></i></div>
											<?=  $this->Form->input('fax', array('label' => false,'required'=>false,'class'=>"form-control",
											"placeholder"=>__('Your Fax'))); ?>
										</div>
									</div>
									<div class="form-group required">
										<label for="OfferingEmail">  Email : <i class="fa fa-asterisk"></i></label>
										<div class="input-group">
											<div class="input-group-addon"><i class="fa fa-at"></i></div>
											<?=  $this->Form->input('email', array('label' => false,'required'=>false,'type'=>'email',
											'required'=>false,'class'=>"form-control",	"placeholder"=>__('Your Mail'))); ?>
										</div>
									</div>
									<div class="form-group required">
										<label for="OfferingPropertyId"> <?= __('Property Type:'); ?> <i class="fa fa-asterisk"></i></label>
										<div class="input-group">
											<div class="input-group-addon"><i class="fa fa-home"></i>
											</div>
											<?php  echo $this->Form->input('property_id',
												array('options' => array(
													"Apartment"				   =>__('Apartment'),
													"Duplex / Triplex Apartmen"=> __("Duplex / Triplex Apartmen"),
													"Single Floor Apartment"   => __ ("Single Floor Apartmen"),
													"Studio"                   => __( "Studio" ),
													"Studio Apartment"         => __ ("Studio Apartment"),
													"Penthouse"                => __ ("Penthouse"),
													"House"                    => __ ("House"),
													"Villa"                    => __ ("Villa"),
													"Land"                     => __ ("Land"),
													"Agricultural Land Plot"   => __ ("Agricultural Land Plot"),
													"Island"                   => __ ("Island"),
													"Shop"                     => __ ("Shop"),
													"Office"                   => __ ("Office"),
													"Store Room"               => __ ("Store Room"),
													"Building"                 => __ ("Building"),
													"Hotel"                    => __ ("Hotel"),
													"Camping"                  => __ ("Camping"),
													"Bungalow"                 => __ ("Bungalow"),
													"Business"                 => __ ("Business"),
													"Goodwill"                 => __ ("Goodwill"),)
													,'empty' 				   => __('(choose)'),
													'required'=>false,
													"label"=>false,"class"=>"form-control")); ?>
										</div>
									</div>
									<?php 	$options = array('For Rent' => __('For Rent'), 'For Sale' => __('For Sale'));
									$attributes = array('legend' => false,'required'=>true,'id'=>'OfferingGender','type'=>'radio','class'=>'radio-inline');
									echo $this->Form->radio('gender', $options, $attributes);
									?>
								</div>
								<div class="col-md-6">
									<div class="form-group required">
										<label for="OfferingSize"> <?= __("Size:")?> <i class="fa fa-asterisk"></i></label>
										<div class="input-group">
											<div class="input-group-addon"><i class="glyphicon glyphicon-resize-full"></i></div>
											<?=  $this->Form->input('size', array('label' => false,'required'=>false,'class'=>"form-control",
											"placeholder"=>"Size")); ?>
											<div class="input-group-addon">M <sup>2</sup></div>
										</div>
									</div>
									<div class="form-group required">
										<label for="OfferingYear"> <?= __('Year'); ?></label>
										<div class="input-group">
											<div class="input-group-addon"><i class="fa fa-calendar"></i></div>
											<?=  $this->Form->input('year', array('label' => false,'class'=>"form-control",'required'=>false,
											"placeholder"=>__('Year'))); ?>
										</div>
									</div>
									<div class="form-group required">
										<label for="OfferingPrice"><?= __('Price '); ?>&nbsp;: €&nbsp;<i class="fa fa-asterisk"></i> </label>
										<div class="input-group">
											<div class="input-group-addon"><i class="fa fa-euro"></i></div>
											<?=  $this->Form->input('price', array('label' => false,'required'=>false,'class'=>"form-control",'required'=>false,
											"placeholder"=> __('Price: '))); ?>
										</div>
									</div>
									<div class="form-group required">
										<label for="OfferingAddress"><?=  __('Address :') ;?><i class="fa fa-asterisk"></i></label>
										<div class="input-group">
											<div class="input-group-addon"></div>
											<?=  $this->Form->input('address', array('label' => false,'type'=>'textarea','required'=>false,'class'=>"form-control",
											'style'=>"width: 100%;","placeholder"=>__('Your Address :'))); ?>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group required">
								<label for="OfferingMessage"> <?= __(' Message'); ?> :&nbsp;<i class="fa fa-asterisk"></i></label>
								<div class="input-group">
									<div class="input-group-addon"><i class="fa "></i></div>
									<?=  $this->Form->input('message', array('label' => false,'type'=>'textarea :',
									'required'=>false,'class'=>"form-control",	"placeholder"=>__('Enter Your message ...'),
									'style'=>"width: 100%;",'cols'=>"15")); ?>
								</div>
							</div>
							<?= $this->Form->input('website', array('label'=>false,'type'=>'text','class'=>'toto ')); ?>
							<div class="text-right">
								<button  type="submit" class="btn btn-primary "> <?= __('Submit'); ?></button>
								<button  type="reset" class="btn btn-primary"> <?= __('Reset'); ?></button>
							</div>
						</fieldset>
					</div>
					<?= $this->Form->end(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
