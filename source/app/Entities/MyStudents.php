<?php
namespace App\Entities;
use CodeIgniter\Entity;

class MyStudents extends Entity
{
	protected $dates = [];

	protected $attributes = [
		's_id' => null,
		's_name' => '',
		's_date' => '',
		's_subject' => '',
		's_update' => null,
		's_delete' => null,
	];

	protected $casts = [
		's_id' => 'integer',
		's_name' => 'string',
	];

	/**
	 * Set raw data array without any mutations
	 *
	 * @param  array $data
	 * @return $this
	 */
	public function setAttributes(array $data) {
		foreach ($this->attributes as $key => $value) {
			$this->attributes[$key] = $data[$key] ?? $value;
		}
		$this->syncOriginal();
		return $this;
	}

	// public function getSName()
	// {
	// 	return $this->attributes['s_name'];
	// }
}
