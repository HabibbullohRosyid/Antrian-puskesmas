<?php
// ADEL CODEIGNITER 4 CRUD GENERATOR

namespace App\Models;
use CodeIgniter\Model;

class PasienModel extends Model {
    
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
	
}