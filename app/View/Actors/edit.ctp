<div class="actors form">
<?php echo $this->Form->create('Actor'); ?>
	<fieldset>
		<legend><?php echo __('Edit Actor'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('sex');
		echo $this->Form->input('Movie');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Actor.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Actor.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Actors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Movies'), array('controller' => 'movies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movie'), array('controller' => 'movies', 'action' => 'add')); ?> </li>
	</ul>
</div>
