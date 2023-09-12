<?php
namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;
class MyController extends BaseController
{
 public function adminhome2()
 {
	return view('adminhome2');
 }
 public function addproduct2()
 {
	return view('addproduct2');
 }
 public function insert()
 {
  $model=new UserModel();
  $validation = \Config\Services::validation();

       
            $rules = [
                'file' => [
                    'uploaded[file]',
                    'mime_in[file,image/jpg,image/jpeg,image/gif,image/png]',
                    'max_size[file,4096]',
                ]
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
			
            } 
			else {
                
                $file = $this->request->getFile('file');
                $file->move(ROOTPATH . 'public/uploads');
				$data=array('pname' => $this->request->getPost('pname'),
        'pdesc'=> $this->request->getPost('pdesc'),
        'price' => $this->request->getPost('price'),
		'image'=>$file->getName(),
       );
            }
       
	  $model->insertproduct($data);
	   return redirect()->to('/addproduct2');
	  
	}

	   public function viewproducts2()
	{
       $model=new UserModel();
		$data['products']=$model->getallproducts();
		return view('viewproducts2',$data);
	
		//echo "test okk";
	}
	public function datatable3()
	{
		$model=new UserModel();
		$data['products']=$model->getallproducts();
		return view('datatable3',$data);
	}
	public function del($id)
	{
		$model=new UserModel();
		$model->deleteproduct($id);
		return redirect()->to('/view');
	}
	public function update($id)
	{
		$model=new UserModel();
		$data['products']=$model->getproductbyid($id);
		return view('updateproduct',$data);
	}
	public function doupdateproduct()
	{
		$model=new UserModel();
		$data=array(
		'pname'=>$this->request->getPost('pname'),
		'pdesc'=>$this->request->getPost('pdesc'),
		'price'=>$this->request->getPost('price')
		);
		$id=$this->request->getPost('id');
		$model->update($id,$data);
		return redirect()->to('/view');
	}

}
?>