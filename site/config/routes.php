<?php
return array(
	'_root_'  => 'site/index',  // The default route
	'_404_'   => 'site/404',    // The main 404 route
	
	'hello(/:name)?' => array('site/hello', 'name' => 'hello'),
);