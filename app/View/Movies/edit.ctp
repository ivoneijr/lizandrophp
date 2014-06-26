<div class="movies form">
<?php echo $this->Form->create('Movie'); ?>
	<fieldset>
		<legend><?php echo __('Edit Movie'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('premiere_date');
		echo $this->Form->input('end_date');
		echo $this->Form->input('title');
		echo $this->Form->input('cover');
		echo $this->Form->input('cover_dir');
		echo $this->Form->input('censorship');
		echo $this->Form->input('sinopse');
		echo $this->Form->input('Actor');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Movie.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Movie.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Movies'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Movie Sessions'), array('controller' => 'movie_sessions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movie Session'), array('controller' => 'movie_sessions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actors'), array('controller' => 'actors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actor'), array('controller' => 'actors', 'action' => 'add')); ?> </li>
	</ul>
</div>
