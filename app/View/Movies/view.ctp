<div class="movies view">
<h2><?php echo h($movie['Movie']['title']); ?></h2>
	<dl>
		<dt><?php echo __('Cover'); ?></dt>
		<dd>
			<td>
				<img src="http://localhost:8080/movietheater/img/<?php echo $movie['Movie']['cover'];?>"  style="width: 80px; height: 80px;"/>&nbsp;
			</td>
			&nbsp;
		</dd>

		<dt><?php echo __('Premiere Date'); ?></dt>
		<dd>
			<?php echo h($movie['Movie']['premiere_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Date'); ?></dt>
		<dd>
			<?php echo h($movie['Movie']['end_date']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($movie['Movie']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($movie['Movie']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Censorship'); ?></dt>
		<dd>
			<?php echo h($movie['Movie']['censorship']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sinopse'); ?></dt>
		<dd>
			<?php echo h($movie['Movie']['sinopse']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('Elenco'); ?></dt>
		<dd>
			<?php foreach ($movie['Actor'] as $actor): ?>
					<tr>
						
						<td class="actions">
							<?php echo $this->Html->link(__($actor['name']), array('controller' => 'actors', 'action' => 'view', $actor['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
			
		</dd>
	</dl>

	<div class="related">
		<br/><br/>
		<h3><?php echo __('Sessões deste filme'); ?></h3>
		<?php if (!empty($movie['MovieSession'])): ?>
			<table cellpadding = "0" cellspacing = "0">
				<tr>
					
					<th><?php echo __('Price'); ?></th>
					<th><?php echo __('Start Date'); ?></th>
					<th><?php echo __('End Date'); ?></th>
					<th><?php echo __('Created'); ?></th>
					<th><?php echo __('Modified'); ?></th>
					<th><?php echo __('Room Id'); ?></th>
					<th><?php echo __('Movie Id'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
			<?php foreach ($movie['MovieSession'] as $movieSession): ?>
				<tr>
					
					<td><?php echo $movieSession['price']; ?></td>
					<td><?php echo $movieSession['start_date']; ?></td>
					<td><?php echo $movieSession['end_date']; ?></td>
					<td><?php echo $movieSession['created']; ?></td>
					<td><?php echo $movieSession['modified']; ?></td>
					<td><?php echo $movieSession['room_id']; ?></td>
					<td><?php echo $movieSession['movie_id']; ?></td>
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