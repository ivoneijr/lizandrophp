<div class="tickets form">
<?php echo $this->Form->create('Ticket'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Ticket'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('movie_session_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tickets'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Movie Sessions'), array('controller' => 'movie_sessions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movie Session'), array('controller' => 'movie_sessions', 'action' => 'add')); ?> </li>
	</ul>
</div>
