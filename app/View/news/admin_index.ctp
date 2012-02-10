	<h1>Gérer les news</h1>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>Id</th>
			<th>Titre</th>
			<th>Date</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($news as $k => $v):?>
		<tr>
			<?php echo $this->Html->tag('td',$v['News']['id']); ?>
			<?php echo $this->Html->tag('td',$v['News']['title']); ?>
			<?php echo $this->Html->tag('td',$v['News']['created']); ?>
			<?php echo $this->Html->tag('td','Supprimer'); ?>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
<div class="pagination pagination-centered">
	<ul>
		<?php echo $this->Paginator->prev(__('←'), array('tag' => 'li')); ?>
		<?php echo $this->Paginator->numbers(array('separator'=>false,'tag'=>'li')); ?>
		<?php echo $this->Paginator->next(__('→'), array('tag' => 'li')); ?>
	</ul>
</div>