<?php
namespace App\Controllers;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

use CodeIgniter\Controller;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\Services;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use CodeIgniter\API\ResponseTrait;

class BaseController extends Controller
{
	use ResponseTrait;

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = [];

	/**
	 * Constructor.
	 */
	public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.:
		// $this->session = \Config\Services::session();
		$this->session = Services::session();

		// $this->setModel($this->modelName);
	}

	/**
	 * Set or change the model this controller is bound to.
	 * Given either the name or the object, determine the other.
	 *
	 * @param string|object $which
	 */
	private function setModel($which = null)
	{
		// save what we have been given
		if (! empty($which))
		{
			if (is_object($which))
			{
				$this->model = $which;
			}
			else
			{
				$this->modelName = $which;
			}
		}

		// make a model object if needed
		if (empty($this->model) && ! empty($this->modelName))
		{
			if (class_exists($this->modelName))
			{
				$this->model = model($this->modelName);
			}
		}

		// determine model name if needed
		if (empty($this->modelName) && ! empty($this->model))
		{
			$this->modelName = get_class($this->model);
		}
	}

	// /**
	//  * Provides a single, simple method to return an API response, formatted
	//  * to match the requested format, with proper content-type and status code.
	//  *
	//  * @param array|string|null $data
	//  * @param integer           $status
	//  * @param string            $message
	//  *
	//  * @return mixed
	//  */
	// public function respond($data = null, int $status = null, string $message = '')
	// {
	// 	// If data is null and status code not provided, exit and bail
	// 	if ($data === null && $status === null)
	// 	{
	// 		$status = 404;

	// 		// Create the output var here in case of $this->response([]);
	// 		$output = null;
	// 	} // If data is null but status provided, keep the output empty.
	// 	elseif ($data === null && is_numeric($status))
	// 	{
	// 		$output = null;
	// 	}
	// 	else
	// 	{
	// 		$status = empty($status) ? 200 : $status;
	// 		$output = $this->format($data);
	// 	}

	// 	return $this->response->setBody($output)
	// 					->setStatusCode($status, $message);
	// }
}
