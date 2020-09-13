<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use App\Models\MyStudents;

class Example extends BaseController
{
	protected $modelName = 'App\Models\MyStudents';
    protected $format    = 'json';

	public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		$this->model = new MyStudents();
	}

	public function index()
	{
		echo 'index';
		// var_dump(json_encode($this->model->first()));exit;
		// var_dump(($this->model->findAll()));
		// return $this->response->setJSON($this->model->findAll());
		return $this->respond($this->model->findAll());
	}

	public function show($id)
	{
		echo 'show';
		var_dump($id);
		var_dump($this->model->find($id));
		// $std = new MyStudents();
		// $result = $std->where('s_id', $id)->first();
		// var_dump($result);
		// var_dump($this->model->findAll());
	}

	public function shows($one, $two)
	{
		echo 'shows';
		var_dump($one);
		var_dump($two);
		// var_dump($this->model->findAll());
	}

	public function create()
	{
		echo 'create';
	}

	public function edit($id)
	{
		echo 'edit - '.$id;
	}

	public function update($id)
	{
		echo 'update - '.$id;
	}

	public function delete($id)
	{
		echo 'delete - '.$id;
	}

	public function new()
	{
		echo 'new';
	}

	// public function delete($userId, $userdd)
	// {
	// 	echo $userdd;
	// 	echo $userId;exit;
	// 	var_dump($this->session);exit;
	// 	if (!empty($userId)) {
	// 		$std = new MyStudents();
	// 		$result = $std->where('s_id',$userId)->findAll();
	// 		if (count($result) > 0) {
	// 		//$result = $std->delete($userId);
	// 		$result = $std->where('s_id',$userId)->delete();
	// 		if ($result){
	// 			$session->setFlashdata('message','You have successfully deleted.');
	// 			return redirect()->to(site_url('students'));
	// 		}
	// 		else{
	// 			$session->setFlashdata('message','You can\'t delete the student right now.');
	// 			return redirect()->to(site_url('students'));
	// 		}
	// 		}
	// 		else{
	// 		$session->setFlashdata('message','The Student is not exist');
	// 		return redirect()->to(site_url('students'));
	// 		}
	// 	} else {
	// 		$session->setFlashdata('message','The id is not available, please try again.');
	// 		return redirect()->to(site_url('students'));
	// 	}
	// }
}