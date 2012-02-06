<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset('UTF-8'); ?>
	<title><?php echo $title_for_layout; ?></title>
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
			<h1>lorem</h1>
			<p>Lorem ipsum dolor sit amet</p>
		</div>
		<div class="menu">
			<ul>
				<li><a href="#">Actu</a></li>
				<li><a href="#">Présentation</a></li>
				<li><a href="#">Forum</a></li>
				<li><a href="#">FAQ</a></li>
				<li><a href="#">Classements</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="#">Messagerie privée</a></li>
			</ul>
		</div>
			<div class="row">
				<div class="span12">
					<div class="welsl">
						<div class="row">
							<div class="span8">
								<?php echo $content_for_layout; ?>
							</div>
							<div class="span4">
							<ul class="thumbnails">
								<li><a href="#" class="thumbnail">
								<img src="http://placehold.it/360x268" alt="">
								</a></li>
								<li><a href="#" class="thumbnail">
								<img src="http://placehold.it/330x230" alt="">
								</a></li>
							</ul>
							</div>
						</div>
					</div>
				</div>					
			</div>
		</div>
</body>
</html>
