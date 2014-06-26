<?php
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->css('cake.generic');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

	<div id="container">
		
		<div id="header">
			<h1></h1>
			<div style="text-align: center">
                <?php if($logged_in): ?>
                     <?php echo $current_user['username']; ?> (<?php echo $current_user['email']; ?>) 
                     <?php echo $this->Html->link('Sair', array('controller' => 'users', 'action' => 'logout')); ?>
				<?php else: ?>
                    <?php echo $this->Html->link('Login', array('controller' => 'users', 'action' => 'login')); ?>
                <?php endif; ?>
            </div>
		</div>


		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		

		<div id="footer">
			© 2014 - Ivoneijr
			
		</div>
		
	</div>
	
</body>
</html>
