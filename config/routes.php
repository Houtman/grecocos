<?php
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/views/pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'users', 'action' => 'login'));

/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
	
	Router::connect('/login', array('controller' => 'users', 'action' => 'login'));  
  // Router::connect('/admin/users/login', array('controller' => 'users', 'action' => 'login'));
  // Router::connect('/admin/users/logout', array('controller' => 'users', 'action' => 'logout'));
  Router::connect('/admin', array('controller' => 'dashboard', 'action' => 'index', 'admin' => true));
  Router::connect('/admin/coordinator/orders', array('controller' => 'orders', 'action' => 'index', 'prefix' => 'admin'));
  Router::connect('/admin/supplier/orders', array('controller' => 'orders', 'action' => 'index', 'prefix' => 'supplier'));
?>