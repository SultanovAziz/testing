<?php

use testing\Router;


Router::add('^$', ['controller' => 'Home', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');