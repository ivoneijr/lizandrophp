<div class="actors view">
<h2><?php echo __('Actor'); ?></h2>
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
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Actor'), array('action' => 'edit', $actor['Actor']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Actor'), array('action' => 'delete', $actor['Actor']['id']), array(), __('Are you sure you want to delete # %s?', $actor['Actor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Actors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actor'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Movies'), array('controller' => 'movies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movie'), array('controller' => 'movies', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Movies'); ?></h3>
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

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Movie'), array('controller' => 'movies', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
