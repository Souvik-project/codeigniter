<?php
namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;
class Usercontroller extends BaseController
{
	public function fabshopping()
	{
		return view ('fabshopping');
	}
	public function shop()
	{
		$model = new UserModel();
       $data['products']=$model->getallproducts();
		return view('shop',$data);
	}
	public function singleproduct($id)
	{
		$model = new UserModel();
		$data['products']=$model->getproductbyid($id);
		return view('singleproduct',$data);
	}
}


?>