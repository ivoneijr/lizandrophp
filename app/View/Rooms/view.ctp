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
					</td>
				</tr>
				<?php endforeach; ?>
			</table>
		<?php endif; ?>
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

