<?php
namespace App\Models;
use CodeIgniter\Model;
class UserModel extends Model
{

	protected $table='product';
	protected $primaryKey='id';
	protected $allowedFields=['pname','pdesc','price','image'];
	
	public function __construct()
	{
		$db= \Config\Database::connect();
		parent::__construct($db);
	}
	public function insertproduct($data)
	{
		$this->insert($data);
	}
	public function getallproducts()
	{
		return $this->findall();
	}
	public function deleteproduct($id)
	{
		$this->delete($id);
	}
    public function updateproduct($id,$data)
	{
		$this->update($id,$data);
	}
	public function getproductbyid($id)
	{
		return $this->find($id);
	}

	
}
?>
		