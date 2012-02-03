<?php

App::uses('PageRoute', 'PageRoute.Routing/Route');
Router::connect('/:page', array('controller' => 'pages', 'action' => 'display'),
	array('routeClass' => 'PageRoute')
);
if(Configure::read('PageRoute.connectHome')) {
  Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
}