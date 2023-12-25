<?php
// ADEL CODEIGNITER 4 CRUD GENERATOR

namespace App\Models;
use CodeIgniter\Model;

class DailyexpensedetailModel extends Model {
    
	protected $table = 'daily_expense_detail';
	protected $primaryKey = 'id';
	protected $returnType = 'object';
	protected $useSoftDeletes = false;
	protected $allowedFields = ['summary_id', 'head_id', 'item_id', 'category_id', 'brand_id', 'model_id', 'size_id', 'unit_id', 'rate', 'qty', 'amount', 'project_id', 'user_id', 'comment'];
	protected $useTimestamps = false;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';
	protected $validationRules    = [];
	protected $validationMessages = [];
	protected $skipValidation     = true;    
	
}