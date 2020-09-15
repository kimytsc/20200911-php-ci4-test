<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use App\Models\MyStudents;
use CodeIgniter\Config\Config;

class ExampleStudents extends BaseController
{
	public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

        // $this->article = model('App\Models\MyStudents');
        // $this->model_class = 'article';
	}

	public function index()
	{
		$message = $this->session->getFlashdata('message');
		$std = new MyStudents();
		$data['students'] = $std->findAll();
		$pager = \Config\Services::pager();
		$data['message'] = $message;
	
		return view('Admin/Example/Students',$data);
	}

	public function new()
	{
		return view('Admin/Example/StudentNew');
	}

	public function create()
	{
		$request = \Config\Services::request();
		$name  = $request->getPost('std');
		$subject  = $request->getPost('subject');
		$newStudent = [
			's_name'=>$name,
			's_subject'=>$subject,
		];
		$std = new MyStudents();
		$result = $std->insert($newStudent);

		if ($result) {
			$this->session->setFlashdata('message','You have successfully inserted the student.');
		}
		else{
			$this->session->setFlashdata('message','Oops something went wrong please try again.');
		}

		return redirect()->to(site_url('admin/example/students'));
	}

	public function edit($userId =  null)
	{
		if (!empty($userId)) {
			$std = new MyStudents();
			$result = $std->find($userId);
			if ($result) {
				$data['student'] = $result;
				return view('Admin/Example/StudentEdit',$data);
			} else {
				$this->session->setFlashdata('message','The Student is not exist');
				return redirect()->to(site_url('admin/example/students'));
			}
		}
		else{
			$this->session->setFlashdata('message','The id is not available, please try again.');
			return redirect()->to(site_url('admin/example/students'));
		}
	}

	public function update()
	{
		$request = \Config\Services::request();
		$name  = $request->getPost('std');
		$subject  = $request->getPost('subject');
		$studentId  = $request->getPost('id');

		$updateStudent = [
			's_name'=>$name,
			's_subject'=>$subject,
		];
		//echo $studentId;
		//die();
		$std = new MyStudents();
		$result = $std->update($studentId, $updateStudent);
		if ($result) {
			$this->session->setFlashdata('message','You have successfully updated the student.');
		}
		else{
			$this->session->setFlashdata('message','Oops something went wrong please try again.');
		}
		return redirect()->to(site_url('admin/example/students'));
	}

	public function delete($userId)
	{
		if (!empty($userId)) {
			$std = new MyStudents();
			$result = $std->where('s_id',$userId)->findAll();
			if (count($result) > 0) {
			$result = $std->delete($userId);
			// $result = $std->where('s_id',$userId)->delete();
			// $result = $std->find($userId)->delete();
			if ($result){
				$this->session->setFlashdata('message','You have successfully deleted.');
				// return redirect()->to(site_url('admin/example/students'));
			}
			else{
				$this->session->setFlashdata('message','You can\'t delete the student right now.');
				// return redirect()->to(site_url('admin/example/students'));
			}
			}
			else{
			$this->session->setFlashdata('message','The Student is not exist');
			// return redirect()->to(site_url('admin/example/students'));
			}
		} else {
			$this->session->setFlashdata('message','The id is not available, please try again.');
			// return redirect()->to(site_url('admin/example/students'));
		}

		return;
	}
}