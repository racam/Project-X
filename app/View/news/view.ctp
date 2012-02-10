<h1><?php echo $news['News']['title']?></h1>
<p><small>Created: <?php echo $news['News']['created']?></small></p>
<?php echo $this->Html->link("Modifier",array('action'=>'index','controller'=>'News', 'prefix'=>'admin')); ?>
<p><?php echo $news['News']['body']?></p>
