<!-- Small boxes (Stat box) -->
<?= $this->Html->css(array('datepicker/datepicker3','daterangepicker/daterangepicker-bs3'),array('inline'=>false)); ?>
<?= $this->fetch('title'); ?><?php  echo $this->set('title_for_layout',__('Dashboard') );  ?>
<?php $this->Html->addCrumb(__(' Dashboard '), array('controller'=>'calendars','action'=>'index','escape' =>false)); ?>
<div class="row">
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-aqua">
			<div class="inner">
				<h3><?php echo $users_count?>
				</h3>
				<p> <?php echo __('Users'); ?></p>
			</div>
			<div class="icon ">
				<i class="fa fa-users "></i>
			</div>
			<a href="<?php echo $this->params->webroot?>users" class="small-box-footer">
				<?php echo __('View users'); ?> <i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-green">
			<div class="inner">
				<h3><?php  echo $properties_count;?>
				</h3>
				<p> <?php echo __('Properties'); ?></p>
			</div>
			<div class="icon ">
				<i class="fa fa-fw fa-building "></i>
				<!-- <i class="fa fa-picture-o "></i> -->
			</div>
			<a href="<?php echo $this->params->webroot?>properties/adminindex" class="small-box-footer">
				<?php echo __('View Properties'); ?> <i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-yellow">
			<div class="inner">
				<h3><?php echo $links_count;?>
				</h3>
				<p> <?php echo __('List Links'); ?></p>
			</div>
			<div class="icon ">
				<i class="fa fa-fw fa-link "></i>
				<!-- <i class="ion ion-bag"></i> -->
			</div>
			<a href="<?php  echo $this->params->webroot?>links/adminindex" class="small-box-footer">
				<?php echo __('List Links'); ?> <i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-red">
			<div class="inner">
				<h3><?php  echo $posts_count?>
				</h3>
				<p> <?php echo __('Posts'); ?></p>
			</div>
			<div class="icon ">
				<i class="fa fa-picture-o "></i>
				<!-- <i class="ion ion-bag"></i> -->
			</div>
			<a href="<?php echo $this->params->webroot?>posts/adminindex" class="small-box-footer">
				<?php echo __('Posts'); ?> <i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
</div>
	<!-- /.row -->
	<div class="row">
	    <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
            <!-- quick email widget -->
            <div class="box box-info">
                <div class="box-header">
                    <i class="fa fa-envelope"></i>
                    <h3 class="box-title"><?= __('Quick Email'); ?></h3>
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                        <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div><!-- /. tools -->
                </div>
                <?= $this->Form->create() ; ?>
                <div class="box-body">
                    <div class="form-group">
                       <?php echo $this->Form->input("email",  array("label"=>false, "placeholder"=>__('Email to:'),"class"=>"form-control" ,"type"=>"email")); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input("subject",  array("label"=>false, "placeholder"=>__('Subject'),"class"=>"form-control" ,"type"=>"text")); ?>
                    </div>
                    <div>
					<?=  $this->Form->input('message', array('label'=>false,
						"style"=>"width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;",
						'required'=>false,"type"=>"textarea", "placeholder"=>__("Message"))); ?>
                    </div>
                </div>
                <div class="box-footer clearfix">
                    <!-- <button class="pull-right btn btn-default" id="sendEmail"><?= __('Send'); ?> <i class="fa fa-arrow-circle-right"></i></button> -->
                    <button class="pull-right btn btn-default" id='sendEmail' type="submit" class="btn btn-primary "> <?= __('Submit'); ?> <i class="fa fa-arrow-circle-right"></i></button>
                </div>
                <?php echo  $this->Form->end(); ?>
            </div>
        </section> <!-- /.Left col -->
                <!-- right col-->
        <section class="col-lg-5 connectedSortable">
            <!-- Calendar -->
            <div class="box box-solid bg-green-gradient">
                <div class="box-header">
                    <i class="fa fa-calendar"></i>
                    <h3 class="box-title"><?= __('Calendar') ?></h3>
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                        <!-- button with a dropdown -->
                        <div class="btn-group">
                            <button class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li><a href="#"><?= __('Add new event'); ?></a></li>
                                <li><a href="#"><?= __('Clear events'); ?></a></li>
                                <li class="divider"></li>
                                <li><a href="#"><?= __('View calendar'); ?></a></li>
                            </ul>
                        </div>
                        <button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div><!-- /. tools -->
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                    <!--The calendar -->
                    <div id="calendar" style="width: 100%"></div>
                </div><!-- /.box-body -->
                <div class="box-footer text-black">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- Progress bars -->
                            <div class="clearfix">
                                <span class="pull-left">Task #1</span>
                                <small class="pull-right">90%</small>
                            </div>
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                            </div>
                            <div class="clearfix">
                                <span class="pull-left">Task #2</span>
                                <small class="pull-right">70%</small>
                            </div>
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                            </div>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <div class="clearfix">
                                <span class="pull-left">Task #3</span>
                                <small class="pull-right">60%</small>
                            </div>
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
                            </div>
                            <div class="clearfix">
                                <span class="pull-left">Task #4</span>
                                <small class="pull-right">40%</small>
                            </div>
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
                            </div>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div>
            </div><!-- /.box -->
        </section>
	</div>
	<!-- /.row -->

	<?=  $this->Html->script(array('plugins/sparkline/jquery.sparkline.min',
									//'//cdnjs.cloudflare.com/ajax/libs/moment.js/2.7.0/moment.min.js',
									'plugins/daterangepicker/daterangepicker',
									'plugins/datepicker/bootstrap-datepicker'),
							array('inline'=>false));?>
	<?=  $this->Html->scriptStart(array('inline'=>false)); ?>
		$(function(){
		   //The Calender
    	$("#calendar").datepicker({
		    todayBtn: "linked",
		    calendarWeeks: true,
		    todayHighlight: true
		});
 		$('.daterange').daterangepicker(
 		           {
 		               ranges: {
 		                   'Today': [moment(), moment()],
 		                   'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
 		                   'Last 7 Days': [moment().subtract('days', 6), moment()],
 		                   'Last 30 Days': [moment().subtract('days', 29), moment()],
 		                   'This Month': [moment().startOf('month'), moment().endOf('month')],
 		                   'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
 		               },
 		               startDate: moment().subtract('days', 29),
 		               endDate: moment()
 		           },
 		   function(start, end) {
 		       alert("You chose: " + start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
 		   });
 		   });
    <?= $this->Html->scriptEnd(); ?>


