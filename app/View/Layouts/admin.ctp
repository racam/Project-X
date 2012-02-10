<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset('UTF-8'); ?>
	<?php echo $this->Html->tag('title',$title_for_layout); ?>
	<link rel="stylesheet/less" href="<?php echo $this->Html->url('/css/2.0/bootstrap.less'); ?>">
	<?php echo $this->Html->script('less.js') ?>
	<?php echo $scripts_for_layout; ?>
</head>
<body>
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container">
					<?php echo $this->Html->link("Administration",array('action'=>'','controller'=>'news'),array('class'=>'brand')); ?>
					<div class="nav-collapse">
						<ul class="nav">
							<li>
							<?php echo $this->Html->link('Actu',array('controller'=>'news', 'action'=>'index', 'prefix'=>'admin')) ?>
							</li>
							<li><a href="#">Membre</a></li>
							<li><a href="#">Faq</a></li>
							<li><a href="#">Forum</a></li>
							<li><a href="#"></a></li>
						</ul>
						<ul class="nav pull-right">
							<li><a href="#">Déconnexion</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	<div class="container-fluid">
			<div class="row-fluid">	
			<?php echo $content_for_layout; ?>	
			</div>
		</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
