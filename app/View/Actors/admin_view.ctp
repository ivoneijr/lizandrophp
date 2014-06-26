<div class="actors view">
<h2><?php echo __('Ator'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($actor['Actor']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($actor['Actor']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sex'); ?></dt>
		<dd>
			<?php echo h($actor['Actor']['sex']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($actor['Actor']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($actor['Actor']['modified']); ?>
			&nbsp;
		</dd>
	</dl>


	<div class="related">
		<br/><br/><h3><?php echo __('Filmes que este Ator participa'); ?></h3>
		<?php if (!empty($actor['Movie'])): ?>
		<table cellpadding = "0" cellspacing = "0">
		<tr>
			<th><?php echo __('Id'); ?></th>
			<th><?php echo __('Premiere Date'); ?></th>
			<th><?php echo __('End Date'); ?></th>
			<th><?php echo __('Title'); ?></th>
			<th><?php echo __('Cover'); ?></th>
			<th><?php echo __('Cover Dir'); ?></th>
			<th><?php echo __('Created'); ?></th>
			<th><?php echo __('Modified'); ?></th>
			<th><?php echo __('Censorship'); ?></th>
			<th><?php echo __('Sinopse'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		<?php foreach ($actor['Movie'] as $movie): ?>
			<tr>
				<td><?php echo $movie['id']; ?></td>
				<td><?php echo $movie['premiere_date']; ?></td>
				<td><?php echo $movie['end_date']; ?></td>
				<td><?php echo $movie['title']; ?></td>
				<td><?php echo $movie['cover']; ?></td>
				<td><?php echo $movie['cover_dir']; ?></td>
				<td><?php echo $movie['created']; ?></td>
				<td><?php echo $movie['modified']; ?></td>
				<td><?php echo $movie['censorship']; ?></td>
				<td><?php echo $movie['sinopse']; ?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'movies', 'action' => 'view', $movie['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'movies', 'action' => 'edit', $movie['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'movies', 'action' => 'delete', $movie['id']), array(), __('Are you sure you want to delete # %s?', $movie['id'])); ?>
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

