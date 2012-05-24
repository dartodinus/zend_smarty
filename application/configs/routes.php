<?php
	// ROUTES FILE
	// PLEASE USE THE '$routes' variable as an array.
	// key shoulds be the name we want to know this by
	// value should be a call to Zend_Controller_Router_Route - correctly formatted with a route.

	// more generic rules should go above specific ones.

	// set whether or not to use default routes.
	// if you do not specify, default routes WILL be available
	$useDefaultRoutes = false;


	$routes['index'] = new Zend_Controller_Router_Route('', array('controller' => 'index','action' => 'index', 'module' => 'default'));


?>