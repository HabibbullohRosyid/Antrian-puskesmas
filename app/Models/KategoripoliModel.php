<?php
// ADEL CODEIGNITER 4 CRUD GENERATOR

namespace App\Models;
use CodeIgniter\Model;

class KategoripoliModel extends Model {
    
	protected $table = 'kategori_poli';
	protected $primaryKey = 'id_poli';
	protected $returnType = 'object';
	protected $useSoftDeletes = false;
	protected $allowedFields = ['kode_poli', 'nama_poli'];
	protected $useTimestamps = false;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';
	protected $validationRules    = [];
	protected $validationMessages = [];
	protected $skipValidation     = true;    
	
}