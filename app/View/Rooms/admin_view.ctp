<div class="rooms view">
<h2><?php echo h($room['Room']['name']); ?></h2>
	<dl>
		
		<dt><?php echo __('Capacity'); ?></dt>
		<dd>
			<?php echo h($room['Room']['capacity']); ?>
			&nbsp;
		</dd>
		
	</dl>

	<div class="related">
		<br/><br/>
		<h3><?php echo __('Sessões nesta sala'); ?></h3>
		<?php if (!empty($room['MovieSession'])): ?>
			<table cellpadding = "0" cellspacing = "0">
				<tr>
					<th><?php echo __('Movie id'); ?></th>
					<th><?php echo __('Start Date'); ?></th>
					<th><?php echo __('End Date'); ?></th>
					<th class="actions"><?php echo __(''); ?></th>
				</tr>
				<?php foreach ($room['MovieSession'] as $movieSession): ?>
				<tr>
					<td><?php echo $movieSession['movie_id']; ?></td>
					<td><?php echo $movieSession['start_date']; ?></td>
					<td><?php echo $movieSession['end_date']; ?></td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('controller' => 'movie_sessions', 'action' => 'view', $movieSession['id'])); ?>
						<?php echo $this->Html->link(__('Edit'), array('controller' => 'movie_sessions', 'action' => 'edit', $movieSession['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'movie_sessions', 'action' => 'delete', $movieSession['id']), array(), __('Are you sure you want to delete # %s?', $movieSession['id'])); ?>
				</td>
				</tr>
				<?php endforeach; ?>
			</table>
		<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Adicionar sessão'), array('controller' => 'movie_sessions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
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
