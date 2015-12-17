<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'articles', 'action' => 'index'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
        
        Router::connect(
        '/users/:user_name', array(
            'controller' => 'users', // default controller 
            'action' => 'profile' // default action 
        ), array(
            'pass' => array('user_name'), //username to your action
            'username' => '[a-zA-Z0-9@_\s]+' // regular expression match parameter 
            )
        );
        
         Router::connect(
        '/processors/view/:brand/:product_name', array(
            'controller' => 'processors', // default controller 
            'action' => 'view' // default action 
        ), array(
            'pass' => array('brand','product_name'), //username to your action
            'productname' => '[a-zA-Z0-9@_\s/-]+',
            'brand' => '[a-zA-Z0-9@_\s/-]+'
        ));
         
         
         
        Router::connect(
        '/articles/:category/:subcategory/:article_url_title', array(
            'controller' => 'articles', // default controller 
            'action' => 'view' // default action 
        ), array(
            'pass' => array('category','subcategory','article_url_title'), //username to your action
            'category' => '[a-zA-Z0-9@_\s]+',
            'subcategory' => '[a-zA-Z0-9@_\s]+',
            'article_url_title' => '[a-zA-Z0-9@_\s\-]+'
            )
        );

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
