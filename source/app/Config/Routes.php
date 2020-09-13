<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->group('admin/example', [
	'namespace' => $routes->getDefaultNamespace().'Admin',
	// 'filter' => 'auth',
], function($routes) {
	$routes->resource('resource', [
		'controller' => 'Example',
		'only' => ['new', 'create', 'index', 'show', 'edit', 'update', 'delete']
	]);

	// Equivalent to the following:
	$routes->group('resources', function($routes) {
		$routes->get('new',             'Example::new');
		$routes->post('',               'Example::create');
		$routes->get('',                'Example::index');
		$routes->get('(:segment)',      'Example::show/$1');
		$routes->get('(:segment)/edit', 'Example::edit/$1');
		$routes->put('(:segment)',      'Example::update/$1');
		$routes->patch('(:segment)',    'Example::update/$1');
		$routes->delete('(:segment)',   'Example::delete/$1');
	});

	$routes->get('resources/(:segment)/(:segment)', 	'Example::shows/$1/$2');

	$routes->get('closures/(:segment)/(:segment)', function($one, $two) {
		echo 'Closures';
		var_dump($one);
		var_dump($two);
	});

	$routes->get('closure/(:any)', function(\App\Models\MyStudents $user) { // error....
		echo 'Closures';
		var_dump($user);
	});

	$routes->resource('students', [
		'controller' => 'ExampleStudents',
		'only' => ['new', 'create', 'index', 'edit', 'update', 'delete']
	]);
});

// $routes->group('swagger', [
// 	'namespace' => $routes->getDefaultNamespace().'API\v1\swagger',
// 	// 'filter' => 'api-auth',
// ], function($routes) {
//     $routes->resource('users');
// });

// $routes->group('api', [
// 	'namespace' => $routes->getDefaultNamespace().'API\v1',
// 	// 'filter' => 'api-auth',
// ], function($routes) {
//     $routes->resource('users');
// });


/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
