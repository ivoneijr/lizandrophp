<div class="movieSessions form">
<?php echo $this->Form->create('MovieSession'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Sessão'); ?></legend>
	<?php
		echo $this->Form->input('price');
		echo $this->Form->input('start_date');
		echo $this->Form->input('end_date');
		echo $this->Form->input('room_id');
		echo $this->Form->input('movie_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
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
