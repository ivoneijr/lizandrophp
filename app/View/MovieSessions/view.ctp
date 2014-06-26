<div class="movieSessions view">
<h2><?php echo __('Sessão ') ?></h2>
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
