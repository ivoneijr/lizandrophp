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
	<br/>
	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $movie['Movie']['id'])); ?></li>
		</ul>
	</div>

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
						<?php echo $this->Html->link(__('View'), array('controller' => 'movie_sessions', 'action' => 'view', $movieSession['id']));  ?>
						<?php echo $this->Html->link(__('edit'), array('controller' => 'movie_sessions', 'edit' => 'view', $movieSession['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $movieSession['id']), array(), __('Are you sure you want to delete # %s?', $movieSession['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
			</table>
			<div class="actions">
				<ul>
					<li><?php echo $this->Html->link(__('Adicionar Sessão'), array('controller' => 'movie_sessions', 'action' => 'add')); ?> </li>
				</ul>
			</div>
		<?php endif; ?>
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


