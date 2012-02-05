<h1>Les news du Blog</h1>
<table>
	<tr>
		<th>Id</th>
		<th>Title</th>
		<th>Created</th>
	</tr>

	<!-- C'est ici que nous bouclons sur le tableau $news afin d'afficher les informations des news -->

	<?php foreach ($news as $d): ?>
	<tr>
		<td><?php echo $d['News']['id']; ?></td>
		<td>
			<?php echo $this->Html->link($d['News']['title'], array('controller' => 'news', 'action' => 'view', $d['News']['id'])); ?>
		</td>
		<td><?php echo $d['News']['created']; ?></td>
	</tr>
	<?php endforeach; ?>

</table>