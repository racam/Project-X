<h1>Les actualitées</h1>
	<?php foreach ($news as $d): ?>
	<div class="row">
		<hr class="news">
		<div class="span7 offset1">
			<?php echo $this->Html->tag('h3',$d['News']['title']) ?>
			<?php echo $this->Html->tag('h6',$d['News']['created']) ?>
			<?php echo $this->Html->para(null,$d['News']['body']) ?>
			<br>
			<div class="btn-groups">
			<?php echo $this->Html->link('Lire la suites...',
			array('controller' => 'news', 'action' => 'view', 'title'=>$d['News']['title'], 'id'=>$d['News']['id']),
			array('class' => 'btn btn-info')); ?>
			</div>
		</div>
		<ul class="thumbnails">
		  	<li class="span2">
		    	<a href="#" class="thumbnail">
		      	<img src="http://placehold.it/130x170" alt="">
		    	</a>
		  	</li>
		</ul>
	</div>
<?php endforeach; ?>