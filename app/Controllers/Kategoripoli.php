<?php
// ADEL CODEIGNITER 4 CRUD GENERATOR

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\KategoripoliModel;

class Kategoripoli extends BaseController
{
	
    protected $kategoripoliModel;
    protected $validation;
	
	public function __construct()
	{
	    $this->kategoripoliModel = new KategoripoliModel();
       	$this->validation =  \Config\Services::validation();
		
	}
	
	public function index()
	{

	    $data = [
                'controller'    	=> 'kategoripoli',
                'title'     		=> 'kategori_poli'				
			];
		
		return view('kategoripoli', $data);
			
	}

	public function getAll()
	{
 		$response = $data['data'] = array();	

		$result = $this->kategoripoliModel->select()->findAll();
		
		foreach ($result as $key => $value) {
							
			$ops = '<div class="btn-group">';
			$ops .= '<button type="button" class=" btn btn-sm dropdown-toggle btn-info" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
			$ops .= '<i class="fa-solid fa-pen-square"></i>  </button>';
			$ops .= '<div class="dropdown-menu">';
			$ops .= '<a class="dropdown-item text-info" onClick="save('. $value->id_poli .')"><i class="fa-solid fa-pen-to-square"></i>   ' .  lang("App.edit")  . '</a>';
			$ops .= '<a class="dropdown-item text-orange" ><i class="fa-solid fa-copy"></i>   ' .  lang("App.copy")  . '</a>';
			$ops .= '<div class="dropdown-divider"></div>';
			$ops .= '<a class="dropdown-item text-danger" onClick="remove('. $value->id_poli .')"><i class="fa-solid fa-trash"></i>   ' .  lang("App.delete")  . '</a>';
			$ops .= '</div></div>';

			$data['data'][$key] = array(
				$value->id_poli,
$value->kode_poli,
$value->nama_poli,

				$ops				
			);
		} 

		return $this->response->setJSON($data);		
	}
	
	public function getOne()
	{
 		$response = array();
		
		$id = $this->request->getPost('id_poli');
		
		if ($this->validation->check($id, 'required|numeric')) {
			
			$data = $this->kategoripoliModel->where('id_poli' ,$id)->first();
			
			return $this->response->setJSON($data);	
				
		} else {
			throw new \CodeIgniter\Exceptions\PageNotFoundException();
		}	
		
	}	

	public function add()
	{
        $response = array();

		$fields['id_poli'] = $this->request->getPost('id_poli');
$fields['kode_poli'] = $this->request->getPost('kode_poli');
$fields['nama_poli'] = $this->request->getPost('nama_poli');


        $this->validation->setRules([
			            'kode_poli' => ['label' => 'Kode poli', 'rules' => 'required|min_length[0]|max_length[5]'],
            'nama_poli' => ['label' => 'Nama poli', 'rules' => 'required|min_length[0]|max_length[50]'],

        ]);

        if ($this->validation->run($fields) == FALSE) {

            $response['success'] = false;
			$response['messages'] = $this->validation->getErrors();//Show Error in Input Form
			
        } else {

            if ($this->kategoripoliModel->insert($fields)) {
												
                $response['success'] = true;
                $response['messages'] = lang("App.insert-success") ;	
				
            } else {
				
                $response['success'] = false;
                $response['messages'] = lang("App.insert-error") ;
				
            }
        }
		
        return $this->response->setJSON($response);
	}

	public function edit()
	{
        $response = array();
		
		$fields['id_poli'] = $this->request->getPost('id_poli');
$fields['kode_poli'] = $this->request->getPost('kode_poli');
$fields['nama_poli'] = $this->request->getPost('nama_poli');


        $this->validation->setRules([
			            'kode_poli' => ['label' => 'Kode poli', 'rules' => 'required|min_length[0]|max_length[5]'],
            'nama_poli' => ['label' => 'Nama poli', 'rules' => 'required|min_length[0]|max_length[50]'],

        ]);

        if ($this->validation->run($fields) == FALSE) {

            $response['success'] = false;
			$response['messages'] = $this->validation->getErrors();//Show Error in Input Form

        } else {

            if ($this->kategoripoliModel->update($fields['id_poli'], $fields)) {
				
                $response['success'] = true;
                $response['messages'] = lang("App.update-success");	
				
            } else {
				
                $response['success'] = false;
                $response['messages'] = lang("App.update-error");
				
            }
        }
		
        return $this->response->setJSON($response);	
	}
	
	public function remove()
	{
		$response = array();
		
		$id = $this->request->getPost('id_poli');
		
		if (!$this->validation->check($id, 'required|numeric')) {

			throw new \CodeIgniter\Exceptions\PageNotFoundException();
			
		} else {	
		
			if ($this->kategoripoliModel->where('id_poli', $id)->delete()) {
								
				$response['success'] = true;
				$response['messages'] = lang("App.delete-success");	
				
			} else {
				
				$response['success'] = false;
				$response['messages'] = lang("App.delete-error");
				
			}
		}	
	
        return $this->response->setJSON($response);		
	}	
		
}	
