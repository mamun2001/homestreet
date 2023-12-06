<?php
// ADEL CODEIGNITER 4 CRUD GENERATOR

namespace App\Models;
use CodeIgniter\Model;

class SpecModel extends Model {
    
	protected $table = 'spec';
	protected $primaryKey = 'id';
	protected $returnType = 'object';
	protected $useSoftDeletes = false;
	protected $allowedFields = ['Code_NutrSpec', 'NutrSpecification', 'Short_Name', 'Unit', 'Restriction_Type', 'Value', 'species_type', 'species', 'production_system', 'stage_weight', 'target_moisture_level'];
	protected $useTimestamps = false;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';
	protected $validationRules    = [];
	protected $validationMessages = [];
	protected $skipValidation     = true;    
	
}