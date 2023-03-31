<?php

namespace App\Models;

use CodeIgniter\Model;

class IndexModel extends Model
{
    protected $table = 'pasien';
    protected $primaryKey = 'id_pasien';
    protected $returnType = 'object';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['no_identitas', 'nama', 'jenis_kelamin', 'tgl_lahir', 'alamat', 'no_telp', 'kategori_poli'];
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = true;

    public function getData()
    {

        $query = $this->db->query("SELECT * FROM pasien ORDER BY id_pasien DESC");
        return $query->getResult();
    }
    public function Antrian()
    {
        $query = $this->db->query("SELECT COUNT(id_pasien) FROM pasien");
        return $query;
    }
    public function simpan($table, $data)
    {

        $this->db->table($table)->insert($data);
        return true;
    }
}
