 <?php // $pages = $this->requestAction(array('controller'=>'pages', 'action'=>'navbar','admin'=>false)); ?>
 <nav class="navbar navbar-inverse navbar-static-top" >
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
			 aria-expanded="false" aria-controls="navbar">
				<span class="sr-only" data-replace-tmp-key="">Basculer la navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a id="navbar-brand-real" class="navbar-brand" href="
			 <?= $this->Html->url(array('controller' => 'pages', 'action' => 'index')); ?>" data-replace-tmp-key="">
			 <p class="hidden-xs">Foukis Real Estate</p><p class="lead visible-xs">Foukis Real Estate</p>
			 </a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li <?php if ($this->request->controller =='posts'):?> class="active"<?php endif; ?>>
				 <?= $this->Html->link(__("Home"), array('controller' => 'posts', 'action' => 'show',"accueil")); ?>
				</li>
      			     <?php // foreach ($pages as $key => $value): $value = current($value); ?>
      			    <!--     <li>
      			        <?php // echo  $this->Html->link($value['name'],$value['link']); ?>
      			        </li>
      			      <?php //  endforeach; ?>-->
				<li <?php if ($this->request->controller =='services'):?> class="active"<?php  endif; ?>>
				 <?=  $this->Html->link(__("Services"), array('controller' => 'services', 'action' => 'index')); ?>
				</li>
				 <li <?php if ($this->request->controller =='informations'):?> class="active"<?php endif; ?>>
				 <?= $this->Html->link(__("Informations"), array('controller' => 'informations', 'action' => 'index')); ?>
				</li>
				<li <?php if ($this->request->controller =='links'):?> class="active"<?php endif; ?>>
				 <?= $this->Html->link(__("Links"), array('controller' => 'links', 'action' => 'index')); ?>
				</li>
				<li <?php if ($this->request->controller =='offerings'):?> class="active"<?php endif; ?>>
				 <?= $this->Html->link(__("Offerings"), array('controller' => 'offerings', 'action' => 'index')); ?>
				</li>
				<li <?php if ($this->request->controller =='contacts'):?> class="active"<?php endif; ?>>
				 <?= $this->Html->link(__("Contact Us"), array('controller' => 'contacts', 'action' => 'index')); ?>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="#" class="btn btn-social-icon btn-facebook" style="top:8px;" ><i class="fa fa-facebook" style="color:#fff;"></i></a>
					<!-- <a href="#" class="fa fa-facebook-square fa-2x" style="color:#3A5795;"></a> -->
				</li>
				<li><?= $this->Html->link("<i class='glyphicon glyphicon-user' style='color:white;'></i>",
		 				array('controller'=>'users', 'action'=>'index','admin'=>false),array('escape' =>false)); ?>
				</li>
			</ul>
			<ul class="flag  navbar-right"><?= $this->element('avalaibleLanguages'); ?></ul>
		</div>
	</div>
</nav>
