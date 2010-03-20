<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			  
		</div>
		<div id="content">
		  <?php if($loggedIn): ?>
			  <?php e($html->link('Logout', array('controller' => 'users', 
			                                      'action' => 'logout'))); ?>
			<?php else: ?>
			  <?php e($html->link('Sign Up', array('controller' => 'users', 
			                                       'action' => 'signup'))); ?>|
        <?php e($html->link('Login', array('controller' => 'users', 
                                           'action' => 'login'))); ?>|
      <?php endif; ?>

			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt'=> __('CakePHP: the rapid development php framework', true), 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
</body>
</html>