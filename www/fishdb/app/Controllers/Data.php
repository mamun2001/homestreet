<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Data extends Controller{

    public function __construct(){
        $this->db = \Config\Database::connect();        
    }

    public function getData(){

        $builder = $this->db->table('spec');
        //$builder = $builder->where("id", 4);

        $builder = $builder->where(array(
				'species_type' => 1,
				'species' => 1,
				'production_system' => 1,
				'stage_weight' => 2,
				'target_moisture_level' => 10
			));


        $data = $builder->get()->getResultArray();
        echo $this->db->getLastQuery();
        echo "<pre>";
        print_r($data);
    }

}