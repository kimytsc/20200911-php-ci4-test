<?php namespace App\Models;
use CodeIgniter\Model;

class MyStudents extends Model
{
	protected $DBGroup = 'default';

	protected $table = 'students';
	protected $primaryKey = 's_id';
	// protected $returnType = 'array';
	protected $returnType = '\App\Entities\MyStudents';
	protected $useTimestamps = true;
	// protected $allowedFields = ['s_name','s_date','s_subject','s_update'];
	protected $allowedFields = ['s_name','s_date','s_subject'];
	protected $createdField = 's_date';
	protected $updatedField = 's_update';
	protected $deletedField = 's_delete';
}
