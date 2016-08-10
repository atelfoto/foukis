<?php $this->set('title_for_layout', __('Contact Us'));  ?>
<div class="row ">
	<div class="col-xs-12 col-md-12 " id="ajax-contact"><?php //echo $this->Html->image('loading.gif', array('id' => 'indicator-contact')); ?>
		<div class="centered-form" >
			<div class="alert alert-info" role="alert">
				<p><?= __('Feel free to contact us for any questions or comments you have:'); ?></p>
			</div>
			<div>
				<div class="panel panel-default">
					<div class="text-center" id="headerContact"> <?= __('Contact Us'); ?>
					</div>
					<?= $this->Form->create('Contact');?>
					<fieldset class="" >
					<div class="panel-body text-center">
						<p class='text-left'><i class="fa fa-asterisk"></i>&nbsp;<?= __('Required field:'); ?></p>
							<div class="row">
								<div class="form-group  col-md-6">
									<label for="ContactName"> <?= __('Your Name :'); ?> <i class="fa fa-asterisk"></i></label>
									<div class="input-group">
										<div class="input-group-addon"><i class="fa fa-user"></i>
										</div>
										<?=  $this->Form->input('name', array('label' => false,'required'=>false,'class'=>"form-control","placeholder"=>__('Your Name :'))); ?>
									</div>
								</div>
								<div class="form-group  col-md-6">
									<label for="ContactEmail"> <?= __('Your Email :'); ?> <i class="fa fa-asterisk"></i></label>
									<div class="input-group">
										<div class="input-group-addon"><i class="fa fa-at"></i>
										</div>
										<?=  $this->Form->input('email', array('label' => false,'type'=>'email',
										'required'=>false,'class'=>"form-control",	"placeholder"=> __('Your Email :'))); ?>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group  col-md-6">
									<label for="ContactPhone"> <?= __('your Phone :'); ?></label>
									<div class="input-group">
										<div class="input-group-addon"><i class="fa fa-phone"></i>
										</div>
										<?=  $this->Form->input('phone', array('label' => false,
										'required'=>false,'class'=>"form-control","placeholder"=> __('your Phone :'))); ?>
									</div>
								</div>
								<div class="form-group  col-md-6">
									<label for="ContactMobile"> <?= __('Your Mobile'); ?>:&nbsp;<i class="fa fa-asterisk"></i></label>
									<div class="input-group">
										<div class="input-group-addon"><i class="fa fa-mobile"></i>
										</div>
										<?=  $this->Form->input('mobile', array('label' => false,'type'=>'tel',
										'required'=>false,'class'=>"form-control",	"placeholder"=> __('Your Mobile'))); ?>
									</div>
								</div>
							</div>
							<?=  $this->Form->input('subject', array('label'=>__('Subject').':&nbsp;<i class="fa fa-asterisk"></i>',
							'required'=>false,'class'=>"form-control","placeholder"=>__("Subject of your message:"))); ?>
							<div class="form-group ">
								<label for="ContactMessage"> <?= __('Your Message '); ?>:&nbsp;<i class="fa fa-asterisk"></i></label>
								<div class="input-group">
									<div class="input-group-addon"><i class="fa "></i>
									</div>
									<?=  $this->Form->input('message', array('label' => false,'type'=>'textarea :','required'=>false,
									'class'=>"form-control",	"placeholder"=> __('Enter Your message ...'),'style'=>"width: 100%;",'cols'=>"15")); ?>
								</div>
							</div>
							<?= $this->Form->input('website', array('label'=>false,'type'=>'text','class'=>'toto ')); ?>
					</div>
					<div class="panel-footer text-right">
						<button  type="submit" class="btn btn-primary "> <?= __('Submit'); ?></button>
						<button  type="reset" class="btn btn-primary"> <?= __('Reset'); ?></button>
					</div>
					</fieldset>
					<?= $this->Form->end(); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-md-12">
		<div class="centered-form">
			<div class="panel panel-default">
				<div class="panel-body text-center">
					<div id="map1" class=" col-xs-12">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?=  $this->Html->script("https://maps.google.com/maps/api/js?sensor=false",array('inline'=>false)); ?>
<?= $this->Html->scriptStart(); ?>
jQuery(function ($) {
function init_map1() {
var myLocation = new google.maps.LatLng(37.986028, 23.730740);
var mapOptions = {
center: myLocation,
zoom: 16
};
var marker = new google.maps.Marker({
position: myLocation,
title: "Property Location"
});
var map = new google.maps.Map(document.getElementById("map1"),
mapOptions);
marker.setMap(map);
}
init_map1();
});
<?=  $this->Html->scriptEnd(); ?>

