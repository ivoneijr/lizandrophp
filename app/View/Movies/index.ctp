<div class="movies index">
	<h2><?php echo __('Movies'); ?></h2>
	<?php if($current_movie_session): ?>
		<p><?php  echo 'Passando o filme "'.$current_movie_session['Movie']['title'].'" em '.$current_movie_session['Room']['name'] ?></p>
	<?php else: ?>
		<p> Nenhum filme passando agora</p>
	<?php endif;?>
	
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('premiere_date'); ?></th>
			<th><?php echo $this->Paginator->sort('end_date'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('cover'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('censorship'); ?></th>
			<th><?php echo $this->Paginator->sort('sinopse'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($movies as $movie): ?>
	<tr>
		<td><?php echo h($movie['Movie']['id']); ?>&nbsp;</td>
		<td><?php echo h($movie['Movie']['premiere_date']); ?>&nbsp;</td>
		<td><?php echo h($movie['Movie']['end_date']); ?>&nbsp;</td>
		<td><?php echo h($movie['Movie']['title']); ?>&nbsp;</td>
		<td>
			<img src="http://localhost:8080/movietheater/img/<?php echo $movie['Movie']['cover'];?>"  style="width: 80px; height: 80px;"/>&nbsp;
		</td>
		<td><?php echo h($movie['Movie']['created']); ?>&nbsp;</td>
		<td><?php echo h($movie['Movie']['modified']); ?>&nbsp;</td>
		<td><?php echo h($movie['Movie']['censorship']); ?>&nbsp;</td>
		<td><?php echo h($movie['Movie']['sinopse']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $movie['Movie']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Sessões'), array('controller' => 'movie_sessions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Salas'), array('controller' => 'rooms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Filmes'), array('controller' => 'movies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Meus ingressos'), array('controller' => 'tickets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Comprar Ingresso'), array('controller' => 'tickets', 'action' => 'add')); ?> </li>
	</ul>
</div>