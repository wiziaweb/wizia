<?php
return array(
	'_root_'  => 'editor/index',  // The default route
    '_404_'   => 'editor/404',    // The main 404 route
   'page/(:any)'      => 'site/index', // Routes /blog/entry_name to /blog/entry/entry_name
);