 <?php
 $cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html lang="<?= $language ; ?>" xml:lang="<?= $language ; ?>">
<head>
	<meta charset="UTF-8">
	<title><?= $this->fetch('title'); ?></title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<?php echo $this->Html->meta(array('name' => 'robots', 'content' => 'noindex')); ?>
	<?php echo $this->fetch('meta'); ?>
	<title><?= $this->fetch('title'); ?></title>
	<?php echo $this->Html->css(array('admin','//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css')); ?>
 	<?php echo $this->fetch('css'); ?>
	<?php echo $this->Html->script(array('//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js','bootstrap.min','navigation',
		'bootstrap.file-input',
		'AdminLTE/app',
	//'AdminLTE/demo'
	)); ?>
 	<?php echo $this->fetch('script'); ?>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
</head>
	<body class="skin-black">
		<!-- header logo: style can be found in header.less -->
		<header class="header">
			<?= $this->Html->link(__('See the website&nbsp; <i class="glyphicon glyphicon-new-window"></i>'),array('controller' => 'pages', 'action' =>  'index'),
					 array('class' => 'logo','target' => '_blank','escape'=>false)); ?>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top" role="navigation">
				<!-- Sidebar toggle button-->
				<a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<div class="navbar-right">
					<ul class="flag">
						<?= $this->element('avalaibleLanguages'); ?>
					</ul>
					<ul class="nav navbar-nav">
						<?php // foreach($availableLanguages as $key=>$value) {
    					//	$link = $this->Html->Link($value, array('controller' => 'pages', 'action' => 'changeLanguage', $key));
    					//	echo $this->Html->Tag('li', $link, array('class' => $key == $language ? 'selected' : ''));
						// } ?>
						<!-- Messages: style can be found in dropdown.less-->
						<li class="dropdown messages-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-envelope"></i>
								<span class="label label-success">4</span>
							</a>
							<ul class="dropdown-menu">
								<li class="header">You have 4 messages</li>
								<li>
									<!-- inner menu: contains the actual data -->
									<ul class="menu">
										<li><!-- start message -->
											<a href="#">
												<div class="pull-left">
													<!-- <img src="../img/avatar3.png" class="img-circle" alt="User Image"/> -->
												</div>
												<h4>
													Support Team
													<small><i class="fa fa-clock-o"></i> 5 mins</small>
												</h4>
												<p>Why not buy a new awesome theme?</p>
											</a>
										</li><!-- end message -->
										<li>
											<a href="#">
												<div class="pull-left">
													<!-- <img src="../img/avatar2.png" class="img-circle" alt="user image"/> -->
												</div>
												<h4>
													AdminLTE Design Team
													<small><i class="fa fa-clock-o"></i> 2 hours</small>
												</h4>
												<p>Why not buy a new awesome theme?</p>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="pull-left">
													<!-- <img src="../img/avatar.png" class="img-circle" alt="user image"/> -->
												</div>
												<h4>
													Developers
													<small><i class="fa fa-clock-o"></i> Today</small>
												</h4>
												<p>Why not buy a new awesome theme?</p>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="pull-left">
													<!-- <img src="../img/avatar2.png" class="img-circle" alt="user image"/> -->
												</div>
												<h4>
													Sales Department
													<small><i class="fa fa-clock-o"></i> Yesterday</small>
												</h4>
												<p>Why not buy a new awesome theme?</p>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="pull-left">
													<!-- <img src="../img/avatar.png" class="img-circle" alt="user image"/> -->
												</div>
												<h4>
													Reviewers
													<small><i class="fa fa-clock-o"></i> 2 days</small>
												</h4>
												<p>Why not buy a new awesome theme?</p>
											</a>
										</li>
									</ul>
								</li>
								<li class="footer"><a href="#">See All Messages</a></li>
							</ul>
						</li>
						<!-- Notifications: style can be found in dropdown.less -->
						<li class="dropdown notifications-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-warning"></i>
								<span class="label label-warning">10</span>
							</a>
							<ul class="dropdown-menu">
								<li class="header">You have 10 notifications</li>
								<li>
									<!-- inner menu: contains the actual data -->
									<ul class="menu">
										<li>
											<a href="#">
												<i class="ion ion-ios7-people info"></i> 5 new members joined today
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-users warning"></i> 5 new members joined
											</a>
										</li>
										<li>
											<a href="#">
												<i class="ion ion-ios7-cart success"></i> 25 sales made
											</a>
										</li>
										<li>
											<a href="#">
												<i class="ion ion-ios7-person danger"></i> You changed your username
											</a>
										</li>
									</ul>
								</li>
								<li class="footer"><a href="#">View all</a></li>
							</ul>
						</li>
						<!-- Tasks: style can be found in dropdown.less -->
						<li class="dropdown tasks-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-tasks"></i>
								<span class="label label-danger">9</span>
							</a>
							<ul class="dropdown-menu">
								<li class="header">You have 9 tasks</li>
								<li>
									<!-- inner menu: contains the actual data -->
									<ul class="menu">
										<li><!-- Task item -->
											<a href="#">
												<h3>
													Design some buttons
													<small class="pull-right">20%</small>
												</h3>
												<div class="progress xs">
													<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
														<span class="sr-only">20% Complete</span>
													</div>
												</div>
											</a>
										</li><!-- end task item -->
										<li><!-- Task item -->
											<a href="#">
												<h3>
													Create a nice theme
													<small class="pull-right">40%</small>
												</h3>
												<div class="progress xs">
													<div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
														<span class="sr-only">40% Complete</span>
													</div>
												</div>
											</a>
										</li><!-- end task item -->
										<li><!-- Task item -->
											<a href="#">
												<h3>
													Some task I need to do
													<small class="pull-right">60%</small>
												</h3>
												<div class="progress xs">
													<div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
														<span class="sr-only">60% Complete</span>
													</div>
												</div>
											</a>
										</li><!-- end task item -->
										<li><!-- Task item -->
											<a href="#">
												<h3>
													Make beautiful transitions
													<small class="pull-right">80%</small>
												</h3>
												<div class="progress xs">
													<div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
														<span class="sr-only">80% Complete</span>
													</div>
												</div>
											</a>
										</li><!-- end task item -->
									</ul>
								</li>
								<li class="footer">
									<a href="#">View all tasks</a>
								</li>
							</ul>
						</li>
						<!-- User Account: style can be found in dropdown.less -->
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="glyphicon glyphicon-user"></i>
								<span>
									<?php if ($this->Session->read('Auth.User.role')== "admin"): ?>
							        <?php echo $this->Session->read('Auth.User.username'); ?>
						            <?php endif ?>
						            <?php if ($this->Session->read('Auth.User.role')== "member"): ?>
							        <?php echo $this->Session->read('Auth.User.username'); ?>
						            <?php endif ?>
								<i class="caret"></i>
								</span>
							</a>
							<ul class="dropdown-menu">
								<!-- User image -->
								<li class="user-header bg-light-blue">
									<?php if ($this->Session->read('Auth.User.avatar')):?>
			                        <?=  $this->Html->image($this->Session->read('Auth.User.avatari') . '?' . rand(),
			                       	array('class'=>' img-circle ','alt'=>'User Image','title'=>'dropdown')); ?>
			                        <?php endif ?>
									<p>
									<?php if ($this->Session->read('Auth.User.role')== "admin"): ?>
							        <?php echo $this->Session->read('Auth.User.username'); ?>
						            <?php endif ?>
						            <?php if ($this->Session->read('Auth.User.role')== "member"): ?>
							        <?php echo $this->Session->read('Auth.User.username'); ?>
						            <?php endif ?>
										<small><?= __('Member since'); ?> <?php echo $this->Session->read('Auth.User.created'); ?></small>
									</p>
								</li>
								<!-- Menu Body -->
							<!-- 	<li class="user-body">
									<div class="col-xs-4 text-center">
										<a href="#">Followers</a>
									</div>
									<div class="col-xs-4 text-center">
										<a href="#">Sales</a>
									</div>
									<div class="col-xs-4 text-center">
										<a href="#">Friends</a>
									</div>
								</li> -->
								<!-- Menu Footer-->
								<li class="user-footer">
									<div class="pull-left">
										<!-- <a href="#" class="btn btn-default btn-flat fa fa-fw fa-user">Profile</a> -->
										<?php  echo $this->Html->link(__('<i class="fa fa-fw fa-user"></i> Profile'), array('controller' => 'users', 'action' => 'account'),array('escape' =>false, 'class'=>'btn btn-default')); ?>
									</div>
									<div class="pull-right">
										<!-- <a href="#" class="btn btn-default btn-flat">Sign out</a> -->
										<?= $this->Html->link(__("<i class='fa  fa-power-off'></i> Sign out"),
						 				array('controller'=>'users', 'action'=>'logout','admin'=>false),array('escape' =>false,'class'=>"btn btn-default")); ?>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<div class="wrapper row-offcanvas row-offcanvas-left">
			<!-- Left side column. contains the logo and sidebar -->
			<aside class="left-side sidebar-offcanvas">
				<!-- sidebar: style can be found in sidebar.less -->
				<section class="sidebar">
					<!-- Sidebar user panel -->
					<div class="user-panel">
						<div class="pull-left image">
							<?php if ($this->Session->read('Auth.User.avatar')):?>
			                <?=  $this->Html->image($this->Session->read('Auth.User.avatari') . '?' . rand(),
			                array('class'=>' img-circle ','alt'=>'User Image')); ?>
			                <?php endif ?>
							<!-- <img src="../img/avatar3.png" class="img-circle" alt="User Image" /> -->
						</div>
						<div class="pull-left info">
							<p><?= __('Hello'); ?>
								<?php if ($this->Session->read('Auth.User.role')== "admin"): ?>
							    <?php echo $this->Session->read('Auth.User.username'); ?>
						        <?php endif ?>
						        <?php if ($this->Session->read('Auth.User.role')== "member"): ?>
							    <?php echo $this->Session->read('Auth.User.username'); ?>
						        <?php endif ?>
						    </p>
							<a href="#"><i class="fa fa-circle text-success"></i> <?= __('Online'); ?></a>
						</div>
					</div>
					<!-- search form -->
					<form action="#" method="get" class="sidebar-form">
						<div class="input-group">
							<input type="text" name="q" class="form-control" placeholder="<?= __('Search...'); ?>"/>
							<span class="input-group-btn">
								<button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</form>
					<!-- /.search form -->
					<!-- sidebar menu: : style can be found in sidebar.less -->
					<ul class="sidebar-menu">
						<li <?php if ($this->request->controller =='dashboard'):?> class="active"<?php endif; ?>>
							<?= $this->Html->link(__("<i class='fa fa-fw fa-dashboard'></i> Dashboard"),
							 array('controller' => 'dashboard', 'action' => 'dashboard'),array('escape' =>false)); ?>
						</li>
                        <li>
                        	<?php echo $this->Html->link(__('<i class="fa fa-calendar"></i> <span>Calendar</span><small class="badge pull-right bg-red">13</small>'),
                        		array('controller'=>'Calendars','action'=>'calendar'),
                        	array('escape' =>false)); ?>
                        </li>
                        <li>
                        	<?php echo $this->Html->link('<i class="fa fa-envelope"></i> <span>Mailbox</span><small class="badge pull-right bg-yellow">130</small>',
                        	array('controller'=>'users','action'=>'mailbox'),array('escape' =>false)); ?>
                        </li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-users"></i> <span><?php echo __('Users'); ?></span>
								<i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li <?php if ($this->request->action =='index'):?> class="active"<?php endif; ?>>
									<?= $this->Html->link(__("<i class='fa fa-fw fa-users'></i> Users"),
									 array('controller' => 'users', 'action' => 'index'),array('escape' =>false)); ?>
								</li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-building"></i> <span> <?= __('Properties'); ?></span>
								<i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li <?php if ($this->request->controller =='properties'):?> class="active"<?php endif; ?>>
									<?= $this->Html->link(__('<i class="fa fa-fw fa-building"></i> Properties'),
									 array('controller' => 'properties', 'action' => 'adminindex'),array('escape' =>false)); ?>
								</li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-link"></i> <span><?php echo __('Links'); ?></span>
								<i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li <?php if ($this->request->controller =='links'):?> class="active"<?php endif; ?>>
									<?= $this->Html->link(__('<i class="fa fa-fw fa-link"></i>  Links'),
									 array('controller' => 'links', 'action' => 'adminindex'),array('escape' =>false)); ?>
								</li>
								<li <?php if ($this->request->controller =='add'):?> class="active"<?php endif; ?>>
									<?= $this->Html->link(__('<i class="fa fa-fw fa-plus"></i>  Add'),
									 array('controller' => 'links', 'action' => 'add'),array('escape' =>false)); ?>
								</li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-picture-o"></i> <span><?= __('Post') ?></span>
								<i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li <?php if ($this->request->controller =='posts'):?> class="active"<?php endif; ?>>
								<?= $this->Html->link(__('<i class="fa fa-fw fa-picture-o"></i>   Post'),
						 		array('controller' => 'posts', 'action' => 'adminindex'),array('escape' =>false)); ?>
								</li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-picture-o"></i> <span><?= __('Page') ?></span>
								<i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li <?php if ($this->request->controller =='pages'):?> class="active"<?php endif; ?>>
								<?= $this->Html->link(__('<i class="fa fa-fw fa-picture-o"></i>   Page'),
						 		array('controller' => 'pages', 'action' => 'adminindex'),array('escape' =>false)); ?>
								</li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-picture-o"></i> <span><?= __('Carrousel') ?></span>
								<i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li <?php if ($this->request->controller =='carrousels'):?> class="active"<?php endif; ?>>
								<?= $this->Html->link(__('<i class="fa fa-fw fa-picture-o"></i>   Carrousels'),
						 		array('controller' => 'carrousels', 'action' => 'index'),array('escape' =>false)); ?>
								</li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-folder"></i> <span>Examples</span>
								<i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li><?= $this->Html->link('<i class="fa fa-file-text-o"></i> Facture',
								array('controller' => 'users', 'action' =>  'invoice'),array('escape' =>false)); ?></li>
								<li><a href="examples/login.html"><i class="fa fa-angle-double-right"></i> Login</a></li>
								<li><a href="examples/register.html"><i class="fa fa-angle-double-right"></i> Register</a></li>
								<li><a href="examples/lockscreen.html"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li>
								<li><a href="examples/404.html"><i class="fa fa-angle-double-right"></i> 404 Error</a></li>
								<li><a href="examples/500.html"><i class="fa fa-angle-double-right"></i> 500 Error</a></li>
								<li><a href="examples/blank.html"><i class="fa fa-angle-double-right"></i> Blank Page</a></li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-folder"></i>  Multilevel Menu
								<i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li class="treeview">
									<a href="#">
										First level
										<i class="fa fa-angle-left pull-right"></i>
									</a>
									<ul class="treeview-menu">
										<li class="treeview">
											<a href="#">
												Second level
												<i class="fa fa-angle-left pull-right"></i>
											</a>
											<ul class="treeview-menu">
												<li>
													<a href="#">Third level</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</section>
				<!-- /.sidebar -->
			</aside>
			<!-- Right side column. Contains the navbar and content of the page -->
			<aside class="right-side">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
						<?= $this->fetch('title'); ?>
						<small><?php echo $this->fetch('title_for_layout');  ?></small>
					</h1>
					<ol class="breadcrumb">
						<li><?php  echo $this->Html->link(__("<i class='fa fa-fw fa fa-dashboard'></i> Home "),
						  		array('controller' => 'dashboard', 'action' => 'dashboard'),array('escape' =>false)); ?></li>
						<li><?php echo $this->Html->getCrumbs(' / '); ?></li>
					</ol>
					<?= $this->Session->flash(); ?>
					<?= $this->Session->flash('auth'); ?>
					<?php  echo $this->Html->image('loading.gif', array('id' => 'busy-indicator')); ?>
					<hr>
				</section>
				<!-- Main content -->
				<section class="content">
					<?= $this->fetch('content') ?>
				</section><!-- /.content -->
			</aside><!-- /.right-side -->
<footer>
<hr>
	<div class="footer text-center well">
			<p><?php  echo $cakeVersion; ?>&nbsp;Copyright &copy;&nbsp;<?php echo date('Y'); ?> <?php echo env('HTTP_HOST'); ?></p>
	</div>
</footer>
		</div><!-- ./wrapper -->
	</body>
</html>
