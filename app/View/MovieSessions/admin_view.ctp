<div class="movieSessions view">
<h2><?php echo __('Sessão'); ?></h2>
	<dl>
		
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			R$ <?php echo h($movieSession['MovieSession']['price']); ?>,00
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($movieSession['MovieSession']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Date'); ?></dt>
		<dd>
			<?php echo h($movieSession['MovieSession']['end_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Room'); ?></dt>
		<dd>
			<?php echo $this->Html->link($movieSession['Room']['name'], array('controller' => 'rooms', 'action' => 'view', $movieSession['Room']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Movie'); ?></dt>
		<dd>
			<?php echo $this->Html->link($movieSession['Movie']['title'], array('controller' => 'movies', 'action' => 'view', $movieSession['Movie']['id'])); ?>
			&nbsp;
		</dd>
	</dl>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $movieSession['MovieSession']['id'])); ?> </li>
		</ul>
	</div>

	<div class="related"><br/><br/><br/>
	<h3><?php echo __('Tickets comprados para esta sessão'); ?></h3>
	<?php if (!empty($movieSession['Ticket'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		
		<th><?php echo __('Usuário'); ?></th>
		<th><?php echo __('Data de emissão '); ?></th>
		
		<th class="actions"><?php echo __(''); ?></th>
	</tr>
	<?php foreach ($movieSession['Ticket'] as $ticket): ?>
		<tr>
			<td><?php echo $ticket['user_id']; ?></td>
			<td><?php echo $ticket['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tickets', 'action' => 'view', $ticket['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tickets', 'action' => 'edit', $ticket['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tickets', 'action' => 'delete', $ticket['id']), array(), __('Are you sure you want to delete # %s?', $ticket['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
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
