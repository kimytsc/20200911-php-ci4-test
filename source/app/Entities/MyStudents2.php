<?php
namespace App\Entities;

class MyStudents2
{
	public $s_id;
	public $s_name;
	// public $s_date;
	// public $s_subject;
	// public $s_update;
	public $created_at;

	public function __get($key)
	{
		// $method = 'get_'.$key;
		// echo $method."<br>\n";
		// if (method_exists($this, $method))
		// {
		// 	$this->$method($value);
		// }

		if (property_exists($this, $key))
		{
			return $this->$key;
		}
	}

	public function __set($key, $value)
	{
		// $method = 'set_'.$key;
		// echo $method."<br>\n";
		// if (method_exists($this, $method))
		// {
		// 	$this->$method($key, $value);
		// }

		if (property_exists($this, $key))
		{
			$this->$key = $value;
		}
	}

	// protected function get_created_at(String $key, String $value)
	// {
	// 	return $this->{$key};
	// 	// return $value ?? '2020-09-13 22:00:00';
	// }

	// protected function set_created_at(String $value)
	// {
	// 	$this->{$key} = $value;
	// 	// return $value ?? '2020-09-13 22:00:00';
	// }
}
