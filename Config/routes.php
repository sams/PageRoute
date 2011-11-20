<?php

App::uses('PageRoute', 'PageRoute.Lib');
Router::connect('/:page', array('plugin' => 'page_route', 'controller' => 'pages', 'action' => 'display'),
	array('routeClass' => 'PageRoute')
);
