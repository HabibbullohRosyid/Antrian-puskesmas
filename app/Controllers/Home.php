<?php

namespace App\Controllers;

use App\Models\IndexModel;

class Home extends BaseController
{
    protected $pasien;
    protected $table = "pasien";
    protected $pasienModel;
    protected $validation;

    public function __construct()
    {
        $this->pasienModel = new IndexModel();
        $this->validation =  \Config\Services::validation();
    }

    public function index()
    {
        //$z = $this->pasien->getData();
        // $data1 = array(
        //     'datapasien' => $z,
        // );
        $data = [
            'controller'        => 'pasien',
            'title'             => 'pasien'
        ];

        return view('home', $data);
    }



    public function simpan()
    {
        $sql = sprintf('SELECT MAX(RIGHT(id_pasien,1)) AS key FROM pasien');
        //$q = $this->$db->query($sql);
        //$row = $q->row();
        $check = 1;
        if ($check == null) {
            $check = 0;
            //$id = $q;
            $name       = $this->request->getPost('name');
            $ktp        = $this->request->getPost('ktp');
            $jk         = $this->request->getPost('jk');
            $tgl        = $this->request->getPost('tgl');
            $kategori   = $this->request->getPost('kat');
            $alamat     = $this->request->getPost('ala');
            $tlp     = $this->request->getPost('tlp');

            $data = [
                // '/id_pasien' => $id,
                'no_identitas' => $ktp,
                'nama' => $name,
                'jenis_kelamin' => $jk,
                'tgl_lahir' => $tgl,
                'alamat' => $alamat,
                'no_telp' => $tlp,
                'kategori_poli ' => $kategori
            ];
            try {
                $simpan = $this->pasien->simpan($this->table, $data);
                if ($simpan) {
                    echo "<script>alert('Data berhasil disimpan'); window.location('.base_url(home)')</script>";
                } else {
                    echo "<script>alert('Data gagal disimpan'); window.location('.base_url(home)')</script>";
                }
            } catch (\Exception $e) {
                echo "<script>alert('ID Pasien sudah ada'); window.location('.base_url(home)')</script>";
            }
        } else {
            $check += 1;
            //$id = $q;
            $name       = $this->request->getPost('name');
            $ktp        = $this->request->getPost('ktp');
            $jk         = $this->request->getPost('jk');
            $tgl        = $this->request->getPost('tgl');
            $kategori   = $this->request->getPost('kat');
            $alamat     = $this->request->getPost('ala');
            $tlp     = $this->request->getPost('tlp');

            $data = [
                //'id_pasien' => $id,
                'no_identitas' => $ktp,
                'nama' => $name,
                'jenis_kelamin' => $jk,
                'tgl_lahir' => $tgl,
                'alamat' => $alamat,
                'no_telp' => $tlp,
                'kategori_poli ' => $kategori
            ];
            try {
                $simpan = $this->pasien->simpan($this->table, $data);
                if ($simpan) {
                    echo "<script>alert('Data berhasil disimpan'); window.location('.base_url(home)')</script>";
                } else {
                    echo "<script>alert('Data gagal disimpan'); window.location('.base_url(home)')</script>";
                }
            } catch (\Exception $e) {
                echo "<script>alert('ID Pasien sudah ada'); window.location('.base_url(home)')</script>";
            }
        }
    }

    public function getAll()
    {
        $response = $data['data'] = array();

        $result = $this->pasienModel->select()->findAll();

        foreach ($result as $key => $value) {

            $ops = '<div class="btn-group">';
            $ops .= '<button type="button" class=" btn btn-sm dropdown-toggle btn-info" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
            $ops .= '<i class="fa-solid fa-pen-square"></i>  </button>';
            $ops .= '<div class="dropdown-menu">';
            $ops .= '<a class="dropdown-item text-info" onClick="save(' . $value->id_pasien . ')"><i class="fa-solid fa-pen-to-square"></i>   ' .  lang("App.edit")  . '</a>';
            $ops .= '<a class="dropdown-item text-orange" ><i class="fa-solid fa-copy"></i>   ' .  lang("App.copy")  . '</a>';
            $ops .= '<div class="dropdown-divider"></div>';
            $ops .= '<a class="dropdown-item text-danger" onClick="remove(' . $value->id_pasien . ')"><i class="fa-solid fa-trash"></i>   ' .  lang("App.delete")  . '</a>';
            $ops .= '</div></div>';

            $data['data'][$key] = array(
                $value->id_pasien,
                $value->no_identitas,
                $value->nama,
                $value->jenis_kelamin,
                $value->tgl_lahir,
                $value->alamat,
                $value->no_telp,
                $value->kategori_poli,

                $ops
            );
        }

        return $this->response->setJSON($data);
    }

    public function getOne()
    {
        $response = array();

        $id = $this->request->getPost('id_pasien');

        if ($this->validation->check($id, 'required|numeric')) {

            $data = $this->pasienModel->where('id_pasien', $id)->first();

            return $this->response->setJSON($data);
        } else {
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        }
    }

    public function add()
    {
        $response = array();

        $fields['id_pasien'] = $this->request->getPost('id_pasien');
        $fields['no_identitas'] = $this->request->getPost('no_identitas');
        $fields['nama'] = $this->request->getPost('nama');
        $fields['jenis_kelamin'] = $this->request->getPost('jenis_kelamin');
        $fields['tgl_lahir'] = $this->request->getPost('tgl_lahir');
        $fields['alamat'] = $this->request->getPost('alamat');
        $fields['no_telp'] = $this->request->getPost('no_telp');
        $fields['kategori_poli'] = $this->request->getPost('kategori_poli');


        $this->validation->setRules([
            'no_identitas' => ['label' => 'No identitas', 'rules' => 'required|min_length[0]|max_length[25]'],
            'nama' => ['label' => 'Nama', 'rules' => 'required|min_length[0]|max_length[150]'],
            'jenis_kelamin' => ['label' => 'Jenis kelamin', 'rules' => 'required|min_length[0]|max_length[&#39;Perempuan&#39;]'],
            'tgl_lahir' => ['label' => 'Tgl lahir', 'rules' => 'required|valid_date|min_length[0]'],
            'alamat' => ['label' => 'Alamat', 'rules' => 'required|min_length[0]'],
            'no_telp' => ['label' => 'No telp', 'rules' => 'required|numeric|min_length[0]|max_length[15]'],
            'kategori_poli' => ['label' => 'Kategori poli', 'rules' => 'required|min_length[0]|max_length[25]|is_unique[pasien.kategori_poli,id_pasien,{id_pasien}]'],

        ]);

        if ($this->validation->run($fields) == FALSE) {

            $response['success'] = false;
            $response['messages'] = $this->validation->getErrors(); //Show Error in Input Form

        } else {

            if ($this->pasienModel->insert($fields)) {

                $response['success'] = true;
                $response['messages'] = lang("App.insert-success");
            } else {

                $response['success'] = false;
                $response['messages'] = lang("App.insert-error");
            }
        }

        return $this->response->setJSON($response);
    }

    public function edit()
    {
        $response = array();

        $fields['id_pasien'] = $this->request->getPost('id_pasien');
        $fields['no_identitas'] = $this->request->getPost('no_identitas');
        $fields['nama'] = $this->request->getPost('nama');
        $fields['jenis_kelamin'] = $this->request->getPost('jenis_kelamin');
        $fields['tgl_lahir'] = $this->request->getPost('tgl_lahir');
        $fields['alamat'] = $this->request->getPost('alamat');
        $fields['no_telp'] = $this->request->getPost('no_telp');
        $fields['kategori_poli'] = $this->request->getPost('kategori_poli');


        $this->validation->setRules([
            'no_identitas' => ['label' => 'No identitas', 'rules' => 'required|min_length[0]|max_length[25]'],
            'nama' => ['label' => 'Nama', 'rules' => 'required|min_length[0]|max_length[150]'],
            'jenis_kelamin' => ['label' => 'Jenis kelamin', 'rules' => 'required|min_length[0]|max_length[15]'],
            'tgl_lahir' => ['label' => 'Tgl lahir', 'rules' => 'required|valid_date|min_length[0]'],
            'alamat' => ['label' => 'Alamat', 'rules' => 'required|min_length[0]'],
            'no_telp' => ['label' => 'No telp', 'rules' => 'required|numeric|min_length[0]|max_length[15]'],
            'kategori_poli' => ['label' => 'Kategori poli', 'rules' => 'required|min_length[0]|max_length[25]|is_unique[pasien.kategori_poli,id_pasien,{id_pasien}]'],

        ]);

        if ($this->validation->run($fields) == FALSE) {

            $response['success'] = false;
            $response['messages'] = $this->validation->getErrors(); //Show Error in Input Form

        } else {

            if ($this->pasienModel->update($fields['id_pasien'], $fields)) {

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

        $id = $this->request->getPost('id_pasien');

        if (!$this->validation->check($id, 'required|numeric')) {

            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        } else {

            if ($this->pasienModel->where('id_pasien', $id)->delete()) {

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
