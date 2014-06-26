<div class="rooms form">
<?php echo $this->Form->create('Room'); ?>
	<fieldset>
		<legend><?php echo __('Add Room'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('capacity');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Rooms'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Movie Sessions'), array('controller' => 'movie_sessions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movie Session'), array('controller' => 'movie_sessions', 'action' => 'add')); ?> </li>
	</ul>
</div>
