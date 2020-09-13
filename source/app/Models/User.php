<?
namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
	protected $DBGroup = 'default';

	protected $table = 'user';
	protected $primaryKey = 'id';
    protected $returnType = '\App\Entities\User';
	// protected $returnType   = 'array';

	protected $useSoftDeletes = true;

	protected $allowedFields = ['name', 'email'];

	protected $useTimestamps = false;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';

	protected $validationRules  = [];
	protected $validationMessages = [];
	protected $skipValidation   = false;

	public function bb()
	{
		return 'bb';
	}
}
