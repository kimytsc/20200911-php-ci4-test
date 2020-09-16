<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use Config\Services;

class Bootstrap extends BaseController
{
	public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);
	}

	public function eliteadmin(string $path = 'index')
	{
		switch($path) {
			case 'index2':
				// return view_extend('Layouts/Eliteadmin/Index2/Index', 'Bootstrap/Eliteadmin/'.$path);
				return view_extend('Layouts/Eliteadmin/Index2/Index', 'Bootstrap/Eliteadmin/'.$path, [
					'title' => 'Eliteadmin::'.$path
				]);
				break;
			default:
				return view('Bootstrap/Eliteadmin/'.$path, [
					'title' => 'Eliteadmin::'.$path
				]);
		}
	}

	public function _title(array $data)
	{
		// switch(strtolower($this->request->getMethod())) {
		// 	case 'get':    return '조회'; break;
		// 	case 'post':   return '갱신'; break;
		// 	case 'put':    return '수정'; break;
		// 	case 'patch':  return '수정'; break;
		// 	case 'delete': return '삭제'; break;
		// }
		return $data['title'] ?? '';
	}

	public function _toolbar(array $data)
	{
		return view('Layouts/Eliteadmin/Index2/topbar');
	}

	public function _preloader(array $data)
	{
		return view('Layouts/Eliteadmin/Index2/preloader');
	}

	public function _leftSidebar(array $data)
	{
		return view('Layouts/Eliteadmin/Index2/leftSidebar');
	}

	public function _breadCrumb(array $data)
	{
		return view('Layouts/Eliteadmin/Index2/breadCrumb');
	}

	public function _rightSidebar(array $data)
	{
		return view('Layouts/Eliteadmin/Index2/rightSidebar');
	}

	public function _footer(array $data)
	{
		return view('Layouts/Eliteadmin/Index2/footer');
	}
}
