<?php
return array(
	'_root_'  => 'front/hello',  // The default route
    'contact'  => 'front/contact',  // The contact route
    'fronter/dede'  => 'front/index',  // The default route

    'mobile/(:any)' => 'front/mobile',
        '(:any)' => 'front/hello',         
	'_404_'   => 'front/404',    // The main 404 route

	//'(/:segment)?' => array('front/hello', 'name' => 'hello'),
);