<div class="movieSessions index">
	<h2><?php echo __('Sessões'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('start_date'); ?></th>
			<th><?php echo $this->Paginator->sort('end_date'); ?></th>
			<th><?php echo $this->Paginator->sort('room_id'); ?></th>
			<th><?php echo $this->Paginator->sort('capacity'); ?></th>
			<th><?php echo $this->Paginator->sort('movie_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($movieSessions as $movieSession): ?>
	<tr>
		
		<td>R$ <?php echo h($movieSession['MovieSession']['price']); ?>,00&nbsp;</td>
		<td><?php echo h($movieSession['MovieSession']['start_date']); ?>&nbsp;</td>
		<td><?php echo h($movieSession['MovieSession']['end_date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($movieSession['Room']['name'], array('controller' => 'rooms', 'action' => 'view', $movieSession['Room']['id'])); ?>
		</td>
		<td><?php echo h($movieSession['Room']['capacity']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($movieSession['Movie']['title'], array('controller' => 'movies', 'action' => 'view', $movieSession['Movie']['title'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $movieSession['MovieSession']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $movieSession['MovieSession']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $movieSession['MovieSession']['id']), array(), __('Are you sure you want to delete # %s?', $movieSession['MovieSession']['id'])); ?>
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
	<h3><?php echo __('Adicionar'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Adicionar Usuario'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Sala'), array('controller' => 'rooms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Filme'), array('controller' => 'movies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Sessão'), array('controller' => 'movie_sessions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Autor'), array('controller' => 'actors', 'action' => 'add')); ?> </li>

	</ul>

	<br/><br/>
	<h3><?php echo __('Listar'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar Usuario'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Sessões'), array('controller' => 'movie_sessions', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Salas'), array('controller' => 'rooms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Filmes'), array('controller' => 'movies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Atores'), array('controller' => 'actors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Tickets'), array('controller' => 'tickets', 'action' => 'index')); ?> </li>
		
	</ul>
</div>
