<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset('UTF-8'); ?>
	<title><?php echo $title_for_layout; ?></title>
	<link rel="stylesheet/less" href="<?php echo $this->Html->url('/css/bootstrap.less'); ?>">
	<?php echo $this->Html->script('less.js') ?>
	<?php echo $scripts_for_layout; ?>
</head>
<body>
	
	<div class="topbar">
		<div class="fill">
			<div class="container">
				<h3><a href="#">AirSimu</a></h3>
				<ul>
					<li><a href="#">Mon aéroport</a></li>
					<li><a href="#">Ressources humaines</a></li>
					<li><a href="#">Gestion du matériel</a></li>
					<li><a href="#">Duty Free</a></li>
					<li><a href="#">Contrats</a></li>
				</ul>
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
				<div class="span16">
					<div class="weldl">
						<div class="row">
							<div class="span10">
								<?php echo $content_for_layout; ?>
							</div>
							<div class="span6">
							<ul class="media-grid">
								<li><a href="#">
								<img src="http://placehold.it/330x230" alt="">
								</a></li>
								<li><a href="#">
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
