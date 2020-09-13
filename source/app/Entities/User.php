<?php
namespace App\Entities;

class User
{
    protected $id;
    protected $name;
    protected $email;
    protected $created_at;
    protected $updated_at;
    protected $deleted_at;

    public function __get($key)
    {
        if (property_exists($this, $key))
        {
            return $this->$key;
        }
    }

    public function __set($key, $value)
    {
        if (property_exists($this, $key))
        {
            $this->$key = $value;
        }
    }
}
