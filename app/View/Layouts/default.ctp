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
	<div class="navbar-fixed-top">
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container">
					<a class="brand" href="#">AirSimu</a>
					<ul class="nav">
						<li><a href="#">Mon aéroport</a></li>
						<li><a href="#">Ressources humaines</a></li>
						<li><a href="#">Gestion du matériel</a></li>
						<li><a href="#">Duty Free</a></li>
						<li><a href="#">Contrats</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="hero-unit">
			<?php echo $this->Html->image('avion.png',array('alt' => 'Avion au décollage')); ?>
			<?php echo $this->Html->tag('h1','Lorem'); ?>
			<?php echo $this->Html->para(null,'Lorem ipsum dolor sits amet'); ?>
		</div>
		<div class="menu">
			<ul>
				<li><?php echo $this->Html->link('Actu',array('controller'=>'news', 'action'=>'index')) ?></li>
				<li><a href="#">Présentation</a></li>
				<li><a href="#">Forum</a></li>
				<li><a href="#">FAQ</a></li>
				<li><a href="#">Classements</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="#">Messagerie privée</a></li>
			</ul>
		</div>
			<div class="row">
				<div class="span11 outset1">
					<?php echo $content_for_layout; ?>
				</div>					
			</div>
		</div>
		<?php echo $this->element('sql_dump'); ?>
</body>
</html>
