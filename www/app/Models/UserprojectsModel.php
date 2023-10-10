<?php
// ADEL CODEIGNITER 4 CRUD GENERATOR

namespace App\Models;

use CodeIgniter\Model;

class UserprojectsModel extends Model
{

	protected $table = 'user_projects';
	protected $primaryKey = 'id';
	protected $returnType = 'array';
	protected $useSoftDeletes = false;
	protected $allowedFields = ['userid', 'projectid', 'status'];
	protected $useTimestamps = false;
	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $deletedField = 'deleted_at';
	protected $validationRules = [];
	protected $validationMessages = [];
	protected $skipValidation = true;

}