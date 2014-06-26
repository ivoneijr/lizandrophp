

<div class="users form">
<?php echo $this->Session->flash('auth'); ?>

<?php echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' => 'login'))); ?>
    <fieldset>
        
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login'));?>
<?php echo $this->Html->link(__('Quero me Cadastrar'), array('action' => 'add')); ?>
</div>