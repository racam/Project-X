<h1>Les actualitées</h1>
	<?php foreach ($news as $d): ?>
	<div class="row">
		<div class="span5 offset2">
			<h3><?php echo $d['News']['title']; ?></h3>
			<h6><?php echo $d['News']['created']; ?></h6>
			<?php echo $d['News']['body'] ?><br>
			<?php echo $this->Html->link('Lire la suite...', array('controller' => 'news', 'action' => 'view', $d['News']['id'])); ?>
		<hr>
		</div>
		<ul class="thumbnails">
		  		<li class="span3 inset1">
		    		<a href="#" class="thumbnail">
		      		<img src="http://placehold.it/160x180" alt="">
		    		</a>
		  		</li>
		</ul>
	</div>
<?php endforeach; ?>