<?php
// ADEL CODEIGNITER 4 CRUD GENERATOR

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\SpecModel;
use App\Models\FormulationModel;
use App\Models\IngredientsModel;
use App\Models\SpeciesTypeModel;
use App\Models\SpeciesModel;
use App\Models\ProductionSystemModel;
use App\Models\StageWeightModel;
use Exception;

class Formulation extends BaseController
{	
    protected $specModel;
    protected $formulationModel;
    protected $ingredientsModel;
    protected $validation;
    protected $speciesTypeModel;	
    protected $speciesModel;
	protected $productionSystemModel;
	protected $stageWeightModel;
	
	public function __construct()
	{
        $this->specModel = new SpecModel();
	    $this->formulationModel = new FormulationModel();
        $this->ingredientsModel = new IngredientsModel();
        $this->speciesTypeModel = new SpeciesTypeModel();		
        $this->speciesModel = new SpeciesModel();
		$this->productionSystemModel = new ProductionSystemModel();
		$this->stageWeightModel = new StageWeightModel();

       	$this->validation =  \Config\Services::validation();
        $this->db = \Config\Database::connect();		
	}
	
	public function index()
	{
	    $data = [
                'controller'    	=> 'formulation',
                'title'     		=> 'Formulation'				
			];

        //get species type
		$result = $this->speciesTypeModel->select('id, species_type')->findAll();		
		foreach ($result as $key => $value) {		
			$data['species_type'][$value->id] = $value->species_type;
		}
        
        //get species
		$result = $this->speciesModel->select('id, species')->findAll();		
		foreach ($result as $key => $value) {		
			$data['species'][$value->id] = $value->species;
		}
		
		//get production system
		$result = $this->productionSystemModel->select('id, production_system')->findAll();		
		foreach ($result as $key => $value) {		
			$data['production_system'][$value->id] = $value->production_system;
		}
		
		//get stage weight
		$result = $this->stageWeightModel->select('id, stage_weight')->findAll();		
		foreach ($result as $key => $value) {		
			$data['stage_weight'][$value->id] = $value->stage_weight;
		}

        $result = $this->ingredientsModel->select('id, Ing_Descr_E')->findAll();
        foreach ($result as $key => $value) {		
            $data['ingredients'][$value->id] = $value->Ing_Descr_E;
        }
		
        $builder = $this->db->table('temp');
        $builder->truncate();

		return view('formulation', $data);			
	}

    public function CalculateFormula(){
        $response = array();
		$data['data'] = array();
				
		$ingre = $this->request->getPost('ingre');				
		$percent = $this->request->getPost('percent');
        $species_type = $this->request->getPost('species_type');
        $species = $this->request->getPost('species');						
		$production_system = $this->request->getPost('production_system');
		$stage_weight = $this->request->getPost('stage_weight');

        //get standard value from spec
        $builder = $this->db->table('spec');		       
		$builder = $builder->where(array(
				'species_type' => $species_type,
                'species' => $species,
				'production_system' => $production_system,
				'stage_weight' => $stage_weight				
			));           
		
		$result = $builder->get()->getResult();

        foreach ($result as $key => $value) {
            //Macro Nutrients
            if($value->NutrSpecification=="Moisture"){
                $data['std']['drymatter'] = ((100 - $value->Value) * 1000) / 100;                
            }
            if($value->NutrSpecification=="Crude Protein"){
                $data['std']['crudeprotein'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Crude Lipids"){
                $data['std']['crudefat'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Ash"){
                $data['std']['crudeash'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Crude Fibre"){
                $data['std']['crudefiber'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Dig GE (DE) - fish"){
                $data['std']['grossenergy'] = number_format((($value->Value * 1000) / 100) * 0.004184,2);                
            }
            if($value->NutrSpecification=="Starch"){
                $data['std']['starch'] = ($value->Value * 1000) / 100;                
            }
                        
            //Fiber
            if($value->NutrSpecification=="NDF"){
                $data['std']['NDF'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="ADF"){
                $data['std']['ADF'] = ($value->Value * 1000) / 100;                
            }

            //Fattyacids
            if($value->NutrSpecification=="Linoleic 18:2 n-6"){
                $data['std']['linoleic'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Linolenic 18:3 n-3"){
                $data['std']['linolenic'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="EPA 20:5 n-3"){
                $data['std']['epa'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Arachidonic 20:4 n-6"){
                $data['std']['arachidonic'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="DHA 22:6 n-3"){
                $data['std']['dha'] = ($value->Value * 1000) / 100;                
            }

            //Aminoacids
            if($value->NutrSpecification=="Arginine"){
                $data['std']['arginine'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Histidine"){
                $data['std']['histidine'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Isoleucine"){
                $data['std']['isoleucine'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Leucine"){
                $data['std']['leucine'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Lysine"){
                $data['std']['lysine'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Methionine"){
                $data['std']['methionine'] = ($value->Value * 1000) / 100;                             
            }
            if($value->NutrSpecification=="Cystine"){
                $data['std']['cystine'] = ($value->Value * 1000) / 100;                
            }
            
            $data['std']['methionine_cystine'] = (float)$data['std']['methionine'] + (float)$data['std']['cystine'];

            if($value->NutrSpecification=="Phenylalanine"){
                $data['std']['phenylalanine'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Tryptophan"){
                $data['std']['tryptophan'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Valine"){
                $data['std']['valine'] = ($value->Value * 1000) / 100;                
            }

            //Vitamins & minerals
            if($value->NutrSpecification=="Niacin-B3"){
                $data['std']['niacinb3'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Folic acid-B9"){
                $data['std']['folicacidb9'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Vitamin E"){
                $data['std']['vitamine'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Pantothenic Acid-B5"){
                $data['std']['pantothenicacidb5'] = ($value->Value * 1000) / 100;                
            }
            // if($value->NutrSpecification=="Vitamin B2"){
            //     $data['std']['Vitamin B2'] = ($value->Value * 1000) / 100;                
            // }
            if($value->NutrSpecification=="Vitamin C"){
                $data['std']['vitaminc'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Vitamin K"){
                $data['std']['vitamink'] = ($value->Value * 1000) / 100;                
            }
            // if($value->NutrSpecification=="VITAMIN B1"){
            //     $data['std']['VITAMIN B1'] = ($value->Value * 1000) / 100;                
            // }
            // if($value->NutrSpecification=="VITAMIN B6"){
            //     $data['std']['VITAMIN B6'] = ($value->Value * 1000) / 100;                
            // }
            // if($value->NutrSpecification=="VITAMIN D3"){
            //     $data['std']['VITAMIN D3'] = ($value->Value * 1000) / 100;                
            // }
            if($value->NutrSpecification=="Vitamin A"){
                $data['std']['vitamina'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Vitamin B12"){
                $data['std']['vitaminb12'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Biotin-B7"){
                $data['std']['biotinb7'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Iron"){
                $data['std']['iron'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Copper"){
                $data['std']['copper'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Zinc"){
                $data['std']['zinc'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Inositol"){
                $data['std']['inositol'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Selenium"){
                $data['std']['selenium'] = ($value->Value * 1000) / 100;                
            }
            // if($value->NutrSpecification=="Cobalt"){
            //     $data['std']['Cobalt'] = ($value->Value * 1000) / 100;                
            // }
            if($value->NutrSpecification=="Iodine"){
                $data['std']['iodine'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Manganese"){
                $data['std']['manganese'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Calcium"){
                $data['std']['calcium'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Phosphorus"){
                $data['std']['phosphorus'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Potassium"){
                $data['std']['Potassium'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Sodium"){
                $data['std']['sodium'] = ($value->Value * 1000) / 100;                
            }			
		}

        $data['std']['carbohydrate'] = number_format((float)$data['std']['drymatter'] - ((float)$data['std']['crudeprotein'] + (float)$data['std']['crudefat']),2);
        $carbonstd = (((float)$data['std']['crudeprotein'] * 47)/100) + (((float)$data['std']['crudefat'] * 70)/100) + (((float)$data['std']['carbohydrate'] * 50)/100);
        $nitrogenstd = ((float)$data['std']['crudeprotein'] * 16)/100;
        try{
            $data['std']['cn'] = number_format($carbonstd/$nitrogenstd,2);
        }catch(\Exception $e){
            $data['std']['cn'] = 0;
        }        

		//get single ingredient	
		$builder = $this->db->table('ingredients');		       
		$builder = $builder->where(array(
				'id' => $ingre
			));		       
        
		$result = $builder->get()->getResult();
        
        foreach($result as $key => $value){        
            //$fields['id'] = $this->request->getPost('id');
            $fields['Ing_Code'] = $value->Ing_Code;
            $fields['Ing_Descr_E'] = $value->Ing_Descr_E;
            $fields['Dry_Matter'] = ($value->Dry_Matter * $percent)/100;
            $fields['Moisture'] = ($value->Moisture * $percent)/100;
            $fields['Crude_Protein'] = ($value->Crude_Protein * $percent)/100;
            $fields['Crude_Lipids'] = ($value->Crude_Lipids * $percent)/100;
            $fields['Crude_Fibre'] = ($value->Crude_Fibre * $percent)/100;
            $fields['Ash'] = ($value->Ash * $percent)/100;
            $fields['NFE'] = ($value->NFE * $percent)/100;
            $fields['NDF'] = ($value->NDF * $percent)/100;
            $fields['ADF'] = ($value->ADF * $percent)/100;
            $fields['Total_CHO'] = ($value->Total_CHO * $percent)/100;
            $fields['Starch'] = ($value->Starch * $percent)/100;
            $fields['Sugars'] = ($value->Sugars * $percent)/100;
            $fields['Gross_Energy_MJ'] = ($value->Gross_Energy_MJ * $percent)/100;
            $fields['Gross_energy_Kcal'] = ($value->Gross_energy_Kcal * $percent)/100;
            $fields['DE_Fish_Carni'] = ($value->DE_Fish_Carni * $percent)/100;
            $fields['DE_Fish_Omni'] = ($value->DE_Fish_Omni * $percent)/100;
            $fields['DE_Carp'] = ($value->DE_Carp * $percent)/100;
            $fields['DE_Shrimp'] = ($value->DE_Shrimp * $percent)/100;
            $fields['DE_Porcine'] = ($value->DE_Porcine * $percent)/100;
            $fields['DE_Poultry'] = ($value->DE_Poultry * $percent)/100;
            $fields['ME_Fish'] = ($value->ME_Fish * $percent)/100;
            $fields['ME_Guelph_Fish_Carni'] = ($value->ME_Guelph_Fish_Carni * $percent)/100;
            $fields['ME_Guelph_Fish_Omni'] = ($value->ME_Guelph_Fish_Omni * $percent)/100;
            $fields['ME_Guelph_Carp'] = ($value->ME_Guelph_Carp * $percent)/100;
            $fields['ME_Guelph_Shrimp'] = ($value->ME_Guelph_Shrimp * $percent)/100;
            $fields['ME_Poultry'] = ($value->ME_Poultry * $percent)/100;
            $fields['ME_Porcine'] = ($value->ME_Porcine * $percent)/100;
            $fields['Arginine'] = ($value->Arginine * $percent)/100;
            $fields['Histidine'] = ($value->Histidine * $percent)/100;
            $fields['Isoleucine'] = ($value->Isoleucine * $percent)/100;
            $fields['Leucine'] = ($value->Leucine * $percent)/100;
            $fields['Lysine'] = ($value->Lysine * $percent)/100;
            $fields['Methionine'] = ($value->Methionine * $percent)/100;
            $fields['Phenylalanine'] = ($value->Phenylalanine * $percent)/100;
            $fields['Threonine'] = ($value->Threonine * $percent)/100;
            $fields['Tryptophan'] = ($value->Tryptophan * $percent)/100;
            $fields['Valine'] = ($value->Valine * $percent)/100;
            $fields['Cystine'] = ($value->Cystine * $percent)/100;
            $fields['TSAA_Met_Cys'] = ($value->TSAA_Met_Cys * $percent)/100;
            $fields['Tyrosine'] = ($value->Tyrosine * $percent)/100;
            $fields['Phe_Tyr'] = ($value->Phe_Tyr * $percent)/100;
            $fields['Glutamic'] = ($value->Glutamic * $percent)/100;
            $fields['Aspartic'] = ($value->Aspartic * $percent)/100;
            $fields['Glycine'] = ($value->Glycine * $percent)/100;
            $fields['Serine'] = ($value->Serine * $percent)/100;
            $fields['Alanine'] = ($value->Alanine * $percent)/100;
            $fields['Sum_EAAs'] = ($value->Sum_EAAs * $percent)/100;
            $fields['Sum_NEAAs'] = ($value->Sum_NEAAs * $percent)/100;
            $fields['Taurine'] = ($value->Taurine * $percent)/100;
            $fields['Arg_Coeff'] = ($value->Arg_Coeff * $percent)/100;
            $fields['His_Coeff'] = ($value->His_Coeff * $percent)/100;
            $fields['Ile_Coeff'] = ($value->Ile_Coeff * $percent)/100;
            $fields['Leu_Coeff'] = ($value->Leu_Coeff * $percent)/100;
            $fields['Lys_Coeff'] = ($value->Lys_Coeff * $percent)/100;
            $fields['Met_Coeff'] = ($value->Met_Coeff * $percent)/100;
            $fields['Phe_Coeff'] = ($value->Phe_Coeff * $percent)/100;
            $fields['Thr_Coeff'] = ($value->Thr_Coeff * $percent)/100;
            $fields['Trp_Coeff'] = ($value->Trp_Coeff * $percent)/100;
            $fields['Val_Coeff'] = ($value->Val_Coeff * $percent)/100;
            $fields['Dig_Arg_fish'] = ($value->Dig_Arg_fish * $percent)/100;
            $fields['Dig_His_fish'] = ($value->Dig_His_fish * $percent)/100;
            $fields['Dig_Ile_fish'] = ($value->Dig_Ile_fish * $percent)/100;
            $fields['Dig_Leu_fish'] = ($value->Dig_Leu_fish * $percent)/100;
            $fields['Dig_Lys_fish'] = ($value->Dig_Lys_fish * $percent)/100;
            $fields['Dig_Met_fish'] = ($value->Dig_Met_fish * $percent)/100;
            $fields['Dig_Phe_fish'] = ($value->Dig_Phe_fish * $percent)/100;
            $fields['Dig_Thr_fish'] = ($value->Dig_Thr_fish * $percent)/100;
            $fields['Dig_Trp_fish'] = ($value->Dig_Trp_fish * $percent)/100;
            $fields['Dig_Val_fish'] = ($value->Dig_Val_fish * $percent)/100;
            $fields['Dig_Cys_fish'] = ($value->Dig_Cys_fish * $percent)/100;
            $fields['Dig_TSAA_Met_Cys'] = ($value->Dig_TSAA_Met_Cys * $percent)/100;
            $fields['Dig_Tyr_fish'] = ($value->Dig_Tyr_fish * $percent)/100;
            $fields['Calcium'] = ($value->Calcium * $percent)/100;
            $fields['Phosphorus'] = ($value->Phosphorus * $percent)/100;
            $fields['Ca_Coeff'] = ($value->Ca_Coeff * $percent)/100;
            $fields['P_coeff'] = ($value->P_coeff * $percent)/100;
            $fields['Phytate_P'] = ($value->Phytate_P * $percent)/100;
            $fields['Bone_P'] = ($value->Bone_P * $percent)/100;
            $fields['Cellular_P'] = ($value->Cellular_P * $percent)/100;
            $fields['Monobasic_P'] = ($value->Monobasic_P * $percent)/100;
            $fields['Dibasic_P'] = ($value->Dibasic_P * $percent)/100;
            $fields['Tribasic_P'] = ($value->Tribasic_P * $percent)/100;
            $fields['Dig_P_Carni'] = ($value->Dig_P_Carni * $percent)/100;
            $fields['Dig_P_Omni'] = ($value->Dig_P_Omni * $percent)/100;
            $fields['Dig_P_Carp'] = ($value->Dig_P_Carp * $percent)/100;
            $fields['Dig_P_Shrimp'] = ($value->Dig_P_Shrimp * $percent)/100;
            $fields['Sodium'] = ($value->Sodium * $percent)/100;
            $fields['Chlorine'] = ($value->Chlorine * $percent)/100;
            $fields['Potassium'] = ($value->Potassium * $percent)/100;
            $fields['Magnesium'] = ($value->Magnesium * $percent)/100;
            $fields['Sulfur'] = ($value->Sulfur * $percent)/100;
            $fields['Copper'] = ($value->Copper * $percent)/100;
            $fields['Iron'] = ($value->Iron * $percent)/100;
            $fields['Manganese'] = ($value->Manganese * $percent)/100;
            $fields['Selenium'] = ($value->Selenium * $percent)/100;
            $fields['Zinc'] = ($value->Zinc * $percent)/100;
            $fields['Iodine'] = ($value->Iodine * $percent)/100;
            $fields['Cobalt'] = ($value->Cobalt * $percent)/100;
            $fields['Biotin_B7'] = ($value->Biotin_B7 * $percent)/100;
            $fields['Folic_acid_B9'] = ($value->folicAcidB9 * $percent)/100;
            $fields['Niacin_B3'] = ($value->niacinB3 * $percent)/100;
            $fields['Pantothenic_Acid_B5'] = ($value->pantothenicAcidB5 * $percent)/100;
            $fields['Pyridoxine_B6'] = ($value->pyridoxineB6 * $percent)/100;
            $fields['Riboflavin_B2'] = ($value->riboflavinB2 * $percent)/100;
            $fields['Thiamin_B1'] = ($value->thiaminB1 * $percent)/100;
            $fields['Vitamin_B12'] = ($value->vitaminB12 * $percent)/100;
            $fields['Vitamin_C'] = ($value->vitaminC * $percent)/100;
            $fields['Vitamin_A'] = ($value->vitaminA * $percent)/100;
            $fields['Vitamin_D'] = ($value->vitaminD * $percent)/100;
            $fields['Vitamin_E'] = ($value->vitaminE * $percent)/100;
            $fields['Vitamin_K'] = ($value->vitaminK * $percent)/100;
            $fields['Choline'] = ($value->choline * $percent)/100;
            $fields['Inositol'] = ($value->inositol * $percent)/100;
            $fields['Beta_Carotene'] = ($value->betaCarotene * $percent)/100;
            $fields['Xanthophylls'] = ($value->xanthophylls * $percent)/100;
            $fields['Antioxidant'] = ($value->antioxidant * $percent)/100;
            $fields['ADC_DM_fish'] = ($value->aDCDMFish * $percent)/100;
            $fields['ADC_CP_fish'] = ($value->aDCCPFish * $percent)/100;
            $fields['ADC_Lipid_fish'] = ($value->aDCLipidFish * $percent)/100;
            $fields['ADC_GE_fish'] = ($value->aDCGEFish * $percent)/100;
            $fields['ADC_Total_CHO_fish'] = ($value->aDCTotalCHOFish * $percent)/100;
            $fields['ADC_Starch_fish'] = ($value->aDCStarchFish * $percent)/100;
            $fields['ADC_Starch_Carni'] = ($value->aDCStarchCarni * $percent)/100;
            $fields['ADC_Starch_Omni'] = ($value->aDCStarchOmni * $percent)/100;
            $fields['Dig_DM_fish'] = ($value->digDMFish * $percent)/100;
            $fields['Dig_CP_fish'] = ($value->digCPFish * $percent)/100;
            $fields['Dig_Lipid_fish'] = ($value->digLipidFish * $percent)/100;
            $fields['Dig_GE_DE_fish_Kcal'] = ($value->digGEDEFishKcal * $percent)/100;
            $fields['Dig_Total_CHO_fish'] = ($value->digTotalCHOFish * $percent)/100;
            $fields['Dig_Starch_fish'] = ($value->digStarchFish * $percent)/100;
            $fields['Dig_Starch_carni'] = ($value->digStarchCarni * $percent)/100;
            $fields['Dig_Starch_Omni'] = ($value->digStarchOmni * $percent)/100;
            $fields['ADC_Arg_fish'] = ($value->aDCArgFish * $percent)/100;
            $fields['ADC_His_fish'] = ($value->aDCHisFish * $percent)/100;
            $fields['ADC_Ile_fish'] = ($value->aDCIleFish * $percent)/100;
            $fields['ADC_Leu_fish'] = ($value->aDCLeuFish * $percent)/100;
            $fields['ADC_Lys_fish'] = ($value->aDCLysFish * $percent)/100;
            $fields['ADC_Met_fish'] = ($value->aDCMetFish * $percent)/100;
            $fields['ADC_Phe_fish'] = ($value->aDCPheFish * $percent)/100;
            $fields['ADC_Thr_fish'] = ($value->aDCThrFish * $percent)/100;
            $fields['ADC_Trp_fish'] = ($value->aDCTrpFish * $percent)/100;
            $fields['ADC_Val_fish'] = ($value->aDCValFish * $percent)/100;
            $fields['ADC_Cys_fish'] = ($value->aDCCysFish * $percent)/100;
            $fields['ADC_Tyr_fish'] = ($value->aDCTyrFish * $percent)/100;
            $fields['Palmitic_16_0'] = ($value->palmitic160 * $percent)/100;
            $fields['Stearic_18_0'] = ($value->stearic180 * $percent)/100;
            $fields['Oleic_18_1_n_9'] = ($value->oleic181N9 * $percent)/100;
            $fields['Linoleic_18_2_n_6'] = ($value->linoleic182N6 * $percent)/100;
            $fields['Linolenic_18_3_n_3'] = ($value->linolenic183N3 * $percent)/100;
            $fields['Arachidonic_20_4_n_6'] = ($value->arachidonic204N6 * $percent)/100;
            $fields['EPA_20_5_n_3'] = ($value->ePA205N3 * $percent)/100;
            $fields['DHA_22_6_n_3'] = ($value->dHA226N3 * $percent)/100;
            $fields['EPA_DHA'] = ($value->ePADHA * $percent)/100;
            $fields['SAFA'] = ($value->sAFA * $percent)/100;
            $fields['MUFA'] = ($value->mUFA * $percent)/100;
            $fields['PUFA'] = ($value->pUFA * $percent)/100;
            $fields['Sum_n_3'] = ($value->sumN3 * $percent)/100;
            $fields['Sum_n_6'] = ($value->sumN6 * $percent)/100;
            $fields['Phospholipids'] = ($value->phospholipids * $percent)/100;
            $fields['Cholesterol'] = ($value->cholesterol * $percent)/100;
            $fields['Plant_sterols'] = ($value->plantSterols * $percent)/100;
            $fields['Coeff_18_2_n_6'] = ($value->coeff182N6 * $percent)/100;
            $fields['Coeff_18_3_n_3'] = ($value->coeff183N3 * $percent)/100;
            $fields['Coeff_20_4_n_6'] = ($value->coeff204N6 * $percent)/100;
            $fields['Coeff_20_5_n_3'] = ($value->coeff205N3 * $percent)/100;
            $fields['Coeff_22_6_n_3'] = ($value->coeff226N3 * $percent)/100;
            $fields['Coeff_SAFA'] = ($value->coeffSAFA * $percent)/100;
            $fields['Coeff_MUFA'] = ($value->coeffMUFA * $percent)/100;
            $fields['Coeff_PUFA'] = ($value->coeffPUFA * $percent)/100;
            $fields['Aflatoxin_B'] = ($value->aflatoxinB * $percent)/100;
            $fields['Deoxynivalenol_DON'] = ($value->deoxynivalenolDON * $percent)/100;
            $fields['Zeralenone_ZON'] = ($value->zeralenoneZON * $percent)/100;
            $fields['Fumonicin_FUM'] = ($value->fumonicinFUM * $percent)/100;
            $fields['Anti_trypsic_factors'] = ($value->antiTrypsicFactors * $percent)/100;
            $fields['Gossypol'] = ($value->gossypol * $percent)/100;
            $fields['Phytic_Acid'] = ($value->phyticAcid * $percent)/100;
            $fields['Glucosinolates'] = ($value->glucosinolates * $percent)/100;
            $fields['Sinapine'] = ($value->sinapine * $percent)/100;
            $fields['Tannins'] = ($value->tannins * $percent)/100;
            $fields['Lectins'] = ($value->lectins * $percent)/100;
            $fields['Cyanogens'] = ($value->cyanogens * $percent)/100;
            $fields['PCBs'] = ($value->pCBs * $percent)/100;
            $fields['Dioxins'] = ($value->dioxins * $percent)/100;
            $fields['Soyasaponins'] = ($value->soyasaponins * $percent)/100;
            $fields['Isoflavones'] = ($value->isoflavones * $percent)/100;
            $fields['SIDC_DM_porcine'] = ($value->sIDCDMPorcine * $percent)/100;
            $fields['SIDC_CP_porcine'] = ($value->sIDCCPPorcine * $percent)/100;
            $fields['SIDC_Arg_porcine'] = ($value->sIDCArgPorcine * $percent)/100;
            $fields['SIDC_His_porcine'] = ($value->sIDCHisPorcine * $percent)/100;
            $fields['SIDC_Ile_porcine'] = ($value->sIDCIlePorcine * $percent)/100;
            $fields['SIDC_Leu_porcine'] = ($value->sIDCLeuPorcine * $percent)/100;
            $fields['SIDC_Lys_porcine'] = ($value->sIDCLysPorcine * $percent)/100;
            $fields['SIDC_Met_porcine'] = ($value->sIDCMetPorcine * $percent)/100;
            $fields['SIDC_Phe_porcine'] = ($value->sIDCPhePorcine * $percent)/100;
            $fields['SIDC_Thr_porcine'] = ($value->sIDCThrPorcine * $percent)/100;
            $fields['SIDC_Trp_porcine'] = ($value->sIDCTrpPorcine * $percent)/100;
            $fields['SIDC_Val_porcine'] = ($value->sIDCValPorcine * $percent)/100;
            $fields['SIDC_Cys_porcine'] = ($value->sIDCCysPorcine * $percent)/100;
            $fields['SIDC_Tyr_porcine'] = ($value->sIDCTyrPorcine * $percent)/100;
            $fields['SIDC_DM_poultry'] = ($value->sIDCDMPoultry * $percent)/100;
            $fields['SIDC_CP_poultry'] = ($value->sIDCCPPoultry * $percent)/100;
            $fields['SIDC_Arg_poultry'] = ($value->sIDCArgPoultry * $percent)/100;
            $fields['SIDC_His_poultry'] = ($value->sIDCHisPoultry * $percent)/100;
            $fields['SIDC_Ile_poultry'] = ($value->sIDCIlePoultry * $percent)/100;
            $fields['SIDC_Leu_poultry'] = ($value->sIDCLeuPoultry * $percent)/100;
            $fields['SIDC_Lys_poultry'] = ($value->sIDCLysPoultry * $percent)/100;
            $fields['SIDC_Met_poultry'] = ($value->sIDCMetPoultry * $percent)/100;
            $fields['SIDC_Phe_poultry'] = ($value->sIDCPhePoultry * $percent)/100;
            $fields['SIDC_Thr_poultry'] = ($value->sIDCThrPoultry * $percent)/100;
            $fields['SIDC_Trp_poultry'] = ($value->sIDCTrpPoultry * $percent)/100;
            $fields['SIDC_Val_poultry'] = ($value->sIDCValPoultry * $percent)/100;
            $fields['SIDC_Cys_poultry'] = ($value->sIDCCysPoultry * $percent)/100;
            $fields['SIDC_Tyr_poultry'] = ($value->sIDCTyrPoultry * $percent)/100;
            $fields['SID_Arg_porcine'] = ($value->sIDArgPorcine * $percent)/100;
            $fields['SID_His_porcine'] = ($value->sIDHisPorcine * $percent)/100;
            $fields['SID_Ile_porcine'] = ($value->sIDIlePorcine * $percent)/100;
            $fields['SID_Leu_porcine'] = ($value->sIDLeuPorcine * $percent)/100;
            $fields['SID_Lys_porcine'] = ($value->sIDLysPorcine * $percent)/100;
            $fields['SID_Met_porcine'] = ($value->sIDMetPorcine * $percent)/100;
            $fields['SID_Phe_porcine'] = ($value->sIDPhePorcine * $percent)/100;
            $fields['SID_Thr_porcine'] = ($value->sIDThrPorcine * $percent)/100;
            $fields['SID_Trp_porcine'] = ($value->sIDTrpPorcine * $percent)/100;
            $fields['SID_Val_porcine'] = ($value->sIDValPorcine * $percent)/100;
            $fields['SID_Cys_porcine'] = ($value->sIDCysPorcine * $percent)/100;
            $fields['SID_Tyr_porcine'] = ($value->sIDTyrPorcine * $percent)/100;
            $fields['SID_Arg_poultry'] = ($value->sIDArgPoultry * $percent)/100;
            $fields['SID_His_poultry'] = ($value->sIDHisPoultry * $percent)/100;
            $fields['SID_Ile_poultry'] = ($value->sIDIlePoultry * $percent)/100;
            $fields['SID_Leu_poultry'] = ($value->sIDLeuPoultry * $percent)/100;
            $fields['SID_Lys_poultry'] = ($value->sIDLysPoultry * $percent)/100;
            $fields['SID_Met_poultry'] = ($value->sIDMetPoultry * $percent)/100;
            $fields['SID_Phe_poultry'] = ($value->sIDPhePoultry * $percent)/100;
            $fields['SID_Thr_poultry'] = ($value->sIDThrPoultry * $percent)/100;
            $fields['SID_Trp_poultry'] = ($value->sIDTrpPoultry * $percent)/100;
            $fields['SID_Val_poultry'] = ($value->sIDValPoultry * $percent)/100;
            $fields['SID_Cys_poultry'] = ($value->sIDCysPoultry * $percent)/100;
            $fields['SID_Tyr_poultry'] = ($value->sIDTyrPoultry * $percent)/100;
            $fields['percent'] = $percent;
        }

        $this->formulationModel->insert($fields);     

        //Return all data from temp table
		$result1 = $this->formulationModel->select('id, Ing_Descr_E, percent')->findAll();

		foreach ($result1 as $key => $value) {
							
			$ops = '<div class="btn-group">';
			$ops .= '	<button type="button" class="btn btn-sm btn-info" onclick="edit('. $value->id .')"><i class="fa fa-edit"></i></button>';
			$ops .= '	<button type="button" class="btn btn-sm btn-danger" onclick="remove('. $value->id .')"><i class="fa fa-trash"></i></button>';
			$ops .= '</div>';
			
			$data['data'][$key] = array(                
				$value->Ing_Descr_E,				
                $value->percent,

				$ops,
			);
		} 

        //Return sum of values from view        
		$builder = $this->db->table('vw_sum');		       
        $query = $this->db->query('SELECT * FROM vw_sum');

        foreach ($query->getResult() as $row){
            // $data['DM'] = $row->DM;  
            // $data['CP'] = $row->CP;
            // $data['CL'] = $row->CL;
            // $data['ASH'] = $row->ASH;
            // $data['CF'] = $row->CF;
            // $data['GEMJ'] = $row->GEMJ;
            // $data['STARCH'] = $row->STARCH;
            // $data['PRCNT'] = $row->PRCNT;         
            // $data['id'] = $row->id;
            // $data['Ing_Code'] = $row->ingCode;
            // $data['Ing_Descr_E'] = $row->ingDescrE;
            $data['Dry_Matter'] = $row->dryMatter;
            $data['Moisture'] = $row->moisture;
            $data['Crude_Protein'] = $row->crudeProtein;
            $data['Crude_Lipids'] = $row->crudeLipids;
            $data['Crude_Fibre'] = $row->crudeFibre;
            $data['Ash'] = $row->ash;
            $data['NFE'] = $row->nFE;
            $data['NDF'] = $row->nDF;
            $data['ADF'] = $row->aDF;
            $data['Total_CHO'] = $row->totalCHO;
            $data['Starch'] = $row->starch;
            $data['Sugars'] = $row->sugars;
            $data['Gross_Energy_MJ'] = $row->grossEnergyMJ;
            $data['Gross_energy_Kcal'] = $row->grossEnergyKcal;
            $data['DE_Fish_Carni'] = $row->dEFishCarni;
            $data['DE_Fish_Omni'] = $row->dEFishOmni;
            $data['DE_Carp'] = $row->dECarp;
            $data['DE_Shrimp'] = $row->dEShrimp;
            $data['DE_Porcine'] = $row->dEPorcine;
            $data['DE_Poultry'] = $row->dEPoultry;
            $data['ME_Fish'] = $row->mEFish;
            $data['ME_Guelph_Fish_Carni'] = $row->mEGuelphFishCarni;
            $data['ME_Guelph_Fish_Omni'] = $row->mEGuelphFishOmni;
            $data['ME_Guelph_Carp'] = $row->mEGuelphCarp;
            $data['ME_Guelph_Shrimp'] = $row->mEGuelphShrimp;
            $data['ME_Poultry'] = $row->mEPoultry;
            $data['ME_Porcine'] = $row->mEPorcine;
            $data['Arginine'] = $row->arginine;
            $data['Histidine'] = $row->histidine;
            $data['Isoleucine'] = $row->isoleucine;
            $data['Leucine'] = $row->leucine;
            $data['Lysine'] = $row->lysine;
            $data['Methionine'] = $row->methionine;
            $data['Phenylalanine'] = $row->phenylalanine;
            $data['Threonine'] = $row->threonine;
            $data['Tryptophan'] = $row->tryptophan;
            $data['Valine'] = $row->valine;
            $data['Cystine'] = $row->cystine;
            $data['TSAA_Met_Cys'] = $row->tSAAMetCys;
            $data['Tyrosine'] = $row->tyrosine;
            $data['Phe_Tyr'] = $row->pheTyr;
            $data['Glutamic'] = $row->glutamic;
            $data['Aspartic'] = $row->aspartic;
            $data['Glycine'] = $row->glycine;
            $data['Serine'] = $row->serine;
            $data['Alanine'] = $row->alanine;
            $data['Sum_EAAs'] = $row->sumEAAs;
            $data['Sum_NEAAs'] = $row->sumNEAAs;
            $data['Taurine'] = $row->taurine;
            $data['Arg_Coeff'] = $row->argCoeff;
            $data['His_Coeff'] = $row->hisCoeff;
            $data['Ile_Coeff'] = $row->ileCoeff;
            $data['Leu_Coeff'] = $row->leuCoeff;
            $data['Lys_Coeff'] = $row->lysCoeff;
            $data['Met_Coeff'] = $row->metCoeff;
            $data['Phe_Coeff'] = $row->pheCoeff;
            $data['Thr_Coeff'] = $row->thrCoeff;
            $data['Trp_Coeff'] = $row->trpCoeff;
            $data['Val_Coeff'] = $row->valCoeff;
            $data['Dig_Arg_fish'] = $row->digArgFish;
            $data['Dig_His_fish'] = $row->digHisFish;
            $data['Dig_Ile_fish'] = $row->digIleFish;
            $data['Dig_Leu_fish'] = $row->digLeuFish;
            $data['Dig_Lys_fish'] = $row->digLysFish;
            $data['Dig_Met_fish'] = $row->digMetFish;
            $data['Dig_Phe_fish'] = $row->digPheFish;
            $data['Dig_Thr_fish'] = $row->digThrFish;
            $data['Dig_Trp_fish'] = $row->digTrpFish;
            $data['Dig_Val_fish'] = $row->digValFish;
            $data['Dig_Cys_fish'] = $row->digCysFish;
            $data['Dig_TSAA_Met_Cys'] = $row->digTSAAMetCys;
            $data['Dig_Tyr_fish'] = $row->digTyrFish;
            $data['Calcium'] = $row->calcium;
            $data['Phosphorus'] = $row->phosphorus;
            $data['Ca_Coeff'] = $row->caCoeff;
            $data['P_coeff'] = $row->pCoeff;
            $data['Phytate_P'] = $row->phytateP;
            $data['Bone_P'] = $row->boneP;
            $data['Cellular_P'] = $row->cellularP;
            $data['Monobasic_P'] = $row->monobasicP;
            $data['Dibasic_P'] = $row->dibasicP;
            $data['Tribasic_P'] = $row->tribasicP;
            $data['Dig_P_Carni'] = $row->digPCarni;
            $data['Dig_P_Omni'] = $row->digPOmni;
            $data['Dig_P_Carp'] = $row->digPCarp;
            $data['Dig_P_Shrimp'] = $row->digPShrimp;
            $data['Sodium'] = $row->sodium;
            $data['Chlorine'] = $row->chlorine;
            $data['Potassium'] = $row->potassium;
            $data['Magnesium'] = $row->magnesium;
            $data['Sulfur'] = $row->sulfur;
            $data['Copper'] = $row->copper;
            $data['Iron'] = $row->iron;
            $data['Manganese'] = $row->manganese;
            $data['Selenium'] = $row->selenium;
            $data['Zinc'] = $row->zinc;
            $data['Iodine'] = $row->iodine;
            $data['Cobalt'] = $row->cobalt;
            $data['Biotin_B7'] = $row->biotinB7;
            $data['Folic_acid_B9'] = $row->folicAcidB9;
            $data['Niacin_B3'] = $row->niacinB3;
            $data['Pantothenic_Acid_B5'] = $row->pantothenicAcidB5;
            $data['Pyridoxine_B6'] = $row->pyridoxineB6;
            $data['Riboflavin_B2'] = $row->riboflavinB2;
            $data['Thiamin_B1'] = $row->thiaminB1;
            $data['Vitamin_B12'] = $row->vitaminB12;
            $data['Vitamin_C'] = $row->vitaminC;
            $data['Vitamin_A'] = $row->vitaminA;
            $data['Vitamin_D'] = $row->vitaminD;
            $data['Vitamin_E'] = $row->vitaminE;
            $data['Vitamin_K'] = $row->vitaminK;
            $data['Choline'] = $row->choline;
            $data['Inositol'] = $row->inositol;
            $data['Beta_Carotene'] = $row->betaCarotene;
            $data['Xanthophylls'] = $row->xanthophylls;
            $data['Antioxidant'] = $row->antioxidant;
            $data['ADC_DM_fish'] = $row->aDCDMFish;
            $data['ADC_CP_fish'] = $row->aDCCPFish;
            $data['ADC_Lipid_fish'] = $row->aDCLipidFish;
            $data['ADC_GE_fish'] = $row->aDCGEFish;
            $data['ADC_Total_CHO_fish'] = $row->aDCTotalCHOFish;
            $data['ADC_Starch_fish'] = $row->aDCStarchFish;
            $data['ADC_Starch_Carni'] = $row->aDCStarchCarni;
            $data['ADC_Starch_Omni'] = $row->aDCStarchOmni;
            $data['Dig_DM_fish'] = $row->digDMFish;
            $data['Dig_CP_fish'] = $row->digCPFish;
            $data['Dig_Lipid_fish'] = $row->digLipidFish;
            $data['Dig_GE_DE_fish_Kcal'] = $row->digGEDEFishKcal;
            $data['Dig_Total_CHO_fish'] = $row->digTotalCHOFish;
            $data['Dig_Starch_fish'] = $row->digStarchFish;
            $data['Dig_Starch_carni'] = $row->digStarchCarni;
            $data['Dig_Starch_Omni'] = $row->digStarchOmni;
            $data['ADC_Arg_fish'] = $row->aDCArgFish;
            $data['ADC_His_fish'] = $row->aDCHisFish;
            $data['ADC_Ile_fish'] = $row->aDCIleFish;
            $data['ADC_Leu_fish'] = $row->aDCLeuFish;
            $data['ADC_Lys_fish'] = $row->aDCLysFish;
            $data['ADC_Met_fish'] = $row->aDCMetFish;
            $data['ADC_Phe_fish'] = $row->aDCPheFish;
            $data['ADC_Thr_fish'] = $row->aDCThrFish;
            $data['ADC_Trp_fish'] = $row->aDCTrpFish;
            $data['ADC_Val_fish'] = $row->aDCValFish;
            $data['ADC_Cys_fish'] = $row->aDCCysFish;
            $data['ADC_Tyr_fish'] = $row->aDCTyrFish;
            $data['Palmitic_16_0'] = $row->palmitic160;
            $data['Stearic_18_0'] = $row->stearic180;
            $data['Oleic_18_1_n_9'] = $row->oleic181N9;
            $data['Linoleic_18_2_n_6'] = $row->linoleic182N6;
            $data['Linolenic_18_3_n_3'] = $row->linolenic183N3;
            $data['Arachidonic_20_4_n_6'] = $row->arachidonic204N6;
            $data['EPA_20_5_n_3'] = $row->ePA205N3;
            $data['DHA_22_6_n_3'] = $row->dHA226N3;
            $data['EPA_DHA'] = $row->ePADHA;
            $data['SAFA'] = $row->sAFA;
            $data['MUFA'] = $row->mUFA;
            $data['PUFA'] = $row->pUFA;
            $data['Sum_n_3'] = $row->sumN3;
            $data['Sum_n_6'] = $row->sumN6;
            $data['Phospholipids'] = $row->phospholipids;
            $data['Cholesterol'] = $row->cholesterol;
            $data['Plant_sterols'] = $row->plantSterols;
            $data['Coeff_18_2_n_6'] = $row->coeff182N6;
            $data['Coeff_18_3_n_3'] = $row->coeff183N3;
            $data['Coeff_20_4_n_6'] = $row->coeff204N6;
            $data['Coeff_20_5_n_3'] = $row->coeff205N3;
            $data['Coeff_22_6_n_3'] = $row->coeff226N3;
            $data['Coeff_SAFA'] = $row->coeffSAFA;
            $data['Coeff_MUFA'] = $row->coeffMUFA;
            $data['Coeff_PUFA'] = $row->coeffPUFA;
            $data['Aflatoxin_B'] = $row->aflatoxinB;
            $data['Deoxynivalenol_DON'] = $row->deoxynivalenolDON;
            $data['Zeralenone_ZON'] = $row->zeralenoneZON;
            $data['Fumonicin_FUM'] = $row->fumonicinFUM;
            $data['Anti_trypsic_factors'] = $row->antiTrypsicFactors;
            $data['Gossypol'] = $row->gossypol;
            $data['Phytic_Acid'] = $row->phyticAcid;
            $data['Glucosinolates'] = $row->glucosinolates;
            $data['Sinapine'] = $row->sinapine;
            $data['Tannins'] = $row->tannins;
            $data['Lectins'] = $row->lectins;
            $data['Cyanogens'] = $row->cyanogens;
            $data['PCBs'] = $row->pCBs;
            $data['Dioxins'] = $row->dioxins;
            $data['Soyasaponins'] = $row->soyasaponins;
            $data['Isoflavones'] = $row->isoflavones;
            $data['SIDC_DM_porcine'] = $row->sIDCDMPorcine;
            $data['SIDC_CP_porcine'] = $row->sIDCCPPorcine;
            $data['SIDC_Arg_porcine'] = $row->sIDCArgPorcine;
            $data['SIDC_His_porcine'] = $row->sIDCHisPorcine;
            $data['SIDC_Ile_porcine'] = $row->sIDCIlePorcine;
            $data['SIDC_Leu_porcine'] = $row->sIDCLeuPorcine;
            $data['SIDC_Lys_porcine'] = $row->sIDCLysPorcine;
            $data['SIDC_Met_porcine'] = $row->sIDCMetPorcine;
            $data['SIDC_Phe_porcine'] = $row->sIDCPhePorcine;
            $data['SIDC_Thr_porcine'] = $row->sIDCThrPorcine;
            $data['SIDC_Trp_porcine'] = $row->sIDCTrpPorcine;
            $data['SIDC_Val_porcine'] = $row->sIDCValPorcine;
            $data['SIDC_Cys_porcine'] = $row->sIDCCysPorcine;
            $data['SIDC_Tyr_porcine'] = $row->sIDCTyrPorcine;
            $data['SIDC_DM_poultry'] = $row->sIDCDMPoultry;
            $data['SIDC_CP_poultry'] = $row->sIDCCPPoultry;
            $data['SIDC_Arg_poultry'] = $row->sIDCArgPoultry;
            $data['SIDC_His_poultry'] = $row->sIDCHisPoultry;
            $data['SIDC_Ile_poultry'] = $row->sIDCIlePoultry;
            $data['SIDC_Leu_poultry'] = $row->sIDCLeuPoultry;
            $data['SIDC_Lys_poultry'] = $row->sIDCLysPoultry;
            $data['SIDC_Met_poultry'] = $row->sIDCMetPoultry;
            $data['SIDC_Phe_poultry'] = $row->sIDCPhePoultry;
            $data['SIDC_Thr_poultry'] = $row->sIDCThrPoultry;
            $data['SIDC_Trp_poultry'] = $row->sIDCTrpPoultry;
            $data['SIDC_Val_poultry'] = $row->sIDCValPoultry;
            $data['SIDC_Cys_poultry'] = $row->sIDCCysPoultry;
            $data['SIDC_Tyr_poultry'] = $row->sIDCTyrPoultry;
            $data['SID_Arg_porcine'] = $row->sIDArgPorcine;
            $data['SID_His_porcine'] = $row->sIDHisPorcine;
            $data['SID_Ile_porcine'] = $row->sIDIlePorcine;
            $data['SID_Leu_porcine'] = $row->sIDLeuPorcine;
            $data['SID_Lys_porcine'] = $row->sIDLysPorcine;
            $data['SID_Met_porcine'] = $row->sIDMetPorcine;
            $data['SID_Phe_porcine'] = $row->sIDPhePorcine;
            $data['SID_Thr_porcine'] = $row->sIDThrPorcine;
            $data['SID_Trp_porcine'] = $row->sIDTrpPorcine;
            $data['SID_Val_porcine'] = $row->sIDValPorcine;
            $data['SID_Cys_porcine'] = $row->sIDCysPorcine;
            $data['SID_Tyr_porcine'] = $row->sIDTyrPorcine;
            $data['SID_Arg_poultry'] = $row->sIDArgPoultry;
            $data['SID_His_poultry'] = $row->sIDHisPoultry;
            $data['SID_Ile_poultry'] = $row->sIDIlePoultry;
            $data['SID_Leu_poultry'] = $row->sIDLeuPoultry;
            $data['SID_Lys_poultry'] = $row->sIDLysPoultry;
            $data['SID_Met_poultry'] = $row->sIDMetPoultry;
            $data['SID_Phe_poultry'] = $row->sIDPhePoultry;
            $data['SID_Thr_poultry'] = $row->sIDThrPoultry;
            $data['SID_Trp_poultry'] = $row->sIDTrpPoultry;
            $data['SID_Val_poultry'] = $row->sIDValPoultry;
            $data['SID_Cys_poultry'] = $row->sIDCysPoultry;
            $data['SID_Tyr_poultry'] = $row->sIDTyrPoultry;
            $data['percent'] = $row->PRCNT;
        }

        $data['carbohydrate'] = number_format((float)$data['Dry_Matter'] - ((float)$data['Crude_Protein'] + (float)$data['Crude_Lipids']),2);
        $carbon = (((float)$data['Crude_Protein'] * 47)/100) + (((float)$data['Crude_Lipids'] * 70)/100) + (((float)$data['carbohydrate'] * 50)/100);
        $nitrogen = ((float)$data['Crude_Protein'] * 16)/100;
        try{
            $data['cn'] = number_format($carbon/$nitrogen,2);
        }catch(\Exception $e){
            $data['cn'] = 0;
        }        

		return $this->response->setJSON($data);
    }

    public function getStandardValues(){
        $data['data'] = array();			
		
        $species_type = $this->request->getPost('species_type');
        $species = $this->request->getPost('species');						
		$production_system = $this->request->getPost('production_system');
		$stage_weight = $this->request->getPost('stage_weight');

        //get standard value from spec
        $builder = $this->db->table('spec');		       
		$builder = $builder->where(array(
				'species_type' => $species_type,
                'species' => $species,
				'production_system' => $production_system,
				'stage_weight' => $stage_weight				
			));           
		
		$result = $builder->get()->getResult();

        foreach ($result as $key => $value) {
            //Macro Nutrients
            if($value->NutrSpecification=="Moisture"){
                $data['std']['drymatter'] = ((100 - $value->Value) * 1000) / 100;                
            }
            if($value->NutrSpecification=="Crude Protein"){
                $data['std']['crudeprotein'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Crude Lipids"){
                $data['std']['crudefat'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Ash"){
                $data['std']['crudeash'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Crude Fibre"){
                $data['std']['crudefiber'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Dig GE (DE) - fish"){
                $data['std']['grossenergy'] = number_format((($value->Value * 1000) / 100) * 0.004184,2);                
            }
            if($value->NutrSpecification=="Starch"){
                $data['std']['starch'] = ($value->Value * 1000) / 100;                
            }
            $data['std']['carbohydrate'] = number_format((float)$data['std']['drymatter'] - ((float)$data['std']['crudeprotein'] + (float)$data['std']['crudefat']),2);
            
            //Fiber
            if($value->NutrSpecification=="NDF"){
                $data['std']['NDF'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="ADF"){
                $data['std']['ADF'] = ($value->Value * 1000) / 100;                
            }

            //Fattyacids
            if($value->NutrSpecification=="Linoleic 18:2 n-6"){
                $data['std']['linoleic'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Linolenic 18:3 n-3"){
                $data['std']['linolenic'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="EPA 20:5 n-3"){
                $data['std']['epa'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Arachidonic 20:4 n-6"){
                $data['std']['arachidonic'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="DHA 22:6 n-3"){
                $data['std']['dha'] = ($value->Value * 1000) / 100;                
            }

            //Aminoacids
            if($value->NutrSpecification=="Arginine"){
                $data['std']['arginine'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Histidine"){
                $data['std']['histidine'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Isoleucine"){
                $data['std']['isoleucine'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Leucine"){
                $data['std']['leucine'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Lysine"){
                $data['std']['lysine'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Methionine"){
                $data['std']['methionine'] = ($value->Value * 1000) / 100;                             
            }
            if($value->NutrSpecification=="Cystine"){
                $data['std']['cystine'] = ($value->Value * 1000) / 100;                
            }
            $data['std']['methionine_cystine'] = (float)$data['std']['methionine'] + (float)$data['std']['cystine'];
            if($value->NutrSpecification=="Phenylalanine"){
                $data['std']['phenylalanine'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Tryptophan"){
                $data['std']['tryptophan'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Valine"){
                $data['std']['valine'] = ($value->Value * 1000) / 100;                
            }

            //Vitamins & minerals
            if($value->NutrSpecification=="Niacin-B3"){
                $data['std']['niacinb3'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Folic acid-B9"){
                $data['std']['folicacidb9'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Vitamin E"){
                $data['std']['vitamine'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Pantothenic Acid-B5"){
                $data['std']['pantothenicacidb5'] = ($value->Value * 1000) / 100;                
            }
            // if($value->NutrSpecification=="Vitamin B2"){
            //     $data['std']['Vitamin B2'] = ($value->Value * 1000) / 100;                
            // }
            if($value->NutrSpecification=="Vitamin C"){
                $data['std']['vitaminc'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Vitamin K"){
                $data['std']['vitamink'] = ($value->Value * 1000) / 100;                
            }
            // if($value->NutrSpecification=="VITAMIN B1"){
            //     $data['std']['VITAMIN B1'] = ($value->Value * 1000) / 100;                
            // }
            // if($value->NutrSpecification=="VITAMIN B6"){
            //     $data['std']['VITAMIN B6'] = ($value->Value * 1000) / 100;                
            // }
            // if($value->NutrSpecification=="VITAMIN D3"){
            //     $data['std']['VITAMIN D3'] = ($value->Value * 1000) / 100;                
            // }
            if($value->NutrSpecification=="Vitamin A"){
                $data['std']['vitamina'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Vitamin B12"){
                $data['std']['vitaminb12'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Biotin-B7"){
                $data['std']['biotinb7'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Iron"){
                $data['std']['iron'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Copper"){
                $data['std']['copper'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Zinc"){
                $data['std']['zinc'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Inositol"){
                $data['std']['inositol'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Selenium"){
                $data['std']['selenium'] = ($value->Value * 1000) / 100;                
            }
            // if($value->NutrSpecification=="Cobalt"){
            //     $data['std']['Cobalt'] = ($value->Value * 1000) / 100;                
            // }
            if($value->NutrSpecification=="Iodine"){
                $data['std']['iodine'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Manganese"){
                $data['std']['manganese'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Calcium"){
                $data['std']['calcium'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Phosphorus"){
                $data['std']['phosphorus'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Potassium"){
                $data['std']['Potassium'] = ($value->Value * 1000) / 100;                
            }
            if($value->NutrSpecification=="Sodium"){
                $data['std']['sodium'] = ($value->Value * 1000) / 100;                
            }
            
            //Ratios
            // if($value->NutrSpecification=="DP/DE (g/MJ)"){
            //     $DPDE = ($value->Value * 1000) / 100;
                
            // }
		}       
        
        $carbonstd = (((float)$data['std']['crudeprotein'] * 47)/100) + (((float)$data['std']['crudefat'] * 70)/100) + (((float)$data['std']['carbohydrate'] * 50)/100);
        $nitrogenstd = ((float)$data['std']['crudeprotein'] * 16)/100;
        try{
            $data['std']['cn'] = number_format($carbonstd/$nitrogenstd,2);
        }catch(\Exception $e){
            $data['std']['cn'] = 0;
        }        

        return $this->response->setJSON($data);
    }

    public function ReloadFormula(){
        $response = array();
		$data['data'] = array();
		
        //Return all data from temp table
		$result1 = $this->formulationModel->select('id, Ing_Descr_E, percent')->findAll();

		foreach ($result1 as $key => $value) {
							
			$ops = '<div class="btn-group">';
			$ops .= '	<button type="button" class="btn btn-sm btn-info" onclick="edit('. $value->id .')"><i class="fa fa-edit"></i></button>';
			$ops .= '	<button type="button" class="btn btn-sm btn-danger" onclick="remove('. $value->id .')"><i class="fa fa-trash"></i></button>';
			$ops .= '</div>';
			
			$data['data'][$key] = array(                
				$value->Ing_Descr_E,				
                $value->percent,

				$ops,
			);
		} 

        //Return sum of values from view        
		$builder = $this->db->table('vw_sum');
        $query = $this->db->query('SELECT * FROM vw_sum');

        foreach ($query->getResult() as $row){            
            $data['Dry_Matter'] = $row->dryMatter;
            $data['Moisture'] = $row->moisture;
            $data['Crude_Protein'] = $row->crudeProtein;
            $data['Crude_Lipids'] = $row->crudeLipids;
            $data['Crude_Fibre'] = $row->crudeFibre;
            $data['Ash'] = $row->ash;
            $data['NFE'] = $row->nFE;
            $data['NDF'] = $row->nDF;
            $data['ADF'] = $row->aDF;
            $data['Total_CHO'] = $row->totalCHO;
            $data['Starch'] = $row->starch;
            $data['Sugars'] = $row->sugars;
            $data['Gross_Energy_MJ'] = $row->grossEnergyMJ;
            $data['Gross_energy_Kcal'] = $row->grossEnergyKcal;
            $data['DE_Fish_Carni'] = $row->dEFishCarni;
            $data['DE_Fish_Omni'] = $row->dEFishOmni;
            $data['DE_Carp'] = $row->dECarp;
            $data['DE_Shrimp'] = $row->dEShrimp;
            $data['DE_Porcine'] = $row->dEPorcine;
            $data['DE_Poultry'] = $row->dEPoultry;
            $data['ME_Fish'] = $row->mEFish;
            $data['ME_Guelph_Fish_Carni'] = $row->mEGuelphFishCarni;
            $data['ME_Guelph_Fish_Omni'] = $row->mEGuelphFishOmni;
            $data['ME_Guelph_Carp'] = $row->mEGuelphCarp;
            $data['ME_Guelph_Shrimp'] = $row->mEGuelphShrimp;
            $data['ME_Poultry'] = $row->mEPoultry;
            $data['ME_Porcine'] = $row->mEPorcine;
            $data['Arginine'] = $row->arginine;
            $data['Histidine'] = $row->histidine;
            $data['Isoleucine'] = $row->isoleucine;
            $data['Leucine'] = $row->leucine;
            $data['Lysine'] = $row->lysine;
            $data['Methionine'] = $row->methionine;
            $data['Phenylalanine'] = $row->phenylalanine;
            $data['Threonine'] = $row->threonine;
            $data['Tryptophan'] = $row->tryptophan;
            $data['Valine'] = $row->valine;
            $data['Cystine'] = $row->cystine;
            $data['TSAA_Met_Cys'] = $row->tSAAMetCys;
            $data['Tyrosine'] = $row->tyrosine;
            $data['Phe_Tyr'] = $row->pheTyr;
            $data['Glutamic'] = $row->glutamic;
            $data['Aspartic'] = $row->aspartic;
            $data['Glycine'] = $row->glycine;
            $data['Serine'] = $row->serine;
            $data['Alanine'] = $row->alanine;
            $data['Sum_EAAs'] = $row->sumEAAs;
            $data['Sum_NEAAs'] = $row->sumNEAAs;
            $data['Taurine'] = $row->taurine;
            $data['Arg_Coeff'] = $row->argCoeff;
            $data['His_Coeff'] = $row->hisCoeff;
            $data['Ile_Coeff'] = $row->ileCoeff;
            $data['Leu_Coeff'] = $row->leuCoeff;
            $data['Lys_Coeff'] = $row->lysCoeff;
            $data['Met_Coeff'] = $row->metCoeff;
            $data['Phe_Coeff'] = $row->pheCoeff;
            $data['Thr_Coeff'] = $row->thrCoeff;
            $data['Trp_Coeff'] = $row->trpCoeff;
            $data['Val_Coeff'] = $row->valCoeff;
            $data['Dig_Arg_fish'] = $row->digArgFish;
            $data['Dig_His_fish'] = $row->digHisFish;
            $data['Dig_Ile_fish'] = $row->digIleFish;
            $data['Dig_Leu_fish'] = $row->digLeuFish;
            $data['Dig_Lys_fish'] = $row->digLysFish;
            $data['Dig_Met_fish'] = $row->digMetFish;
            $data['Dig_Phe_fish'] = $row->digPheFish;
            $data['Dig_Thr_fish'] = $row->digThrFish;
            $data['Dig_Trp_fish'] = $row->digTrpFish;
            $data['Dig_Val_fish'] = $row->digValFish;
            $data['Dig_Cys_fish'] = $row->digCysFish;
            $data['Dig_TSAA_Met_Cys'] = $row->digTSAAMetCys;
            $data['Dig_Tyr_fish'] = $row->digTyrFish;
            $data['Calcium'] = $row->calcium;
            $data['Phosphorus'] = $row->phosphorus;
            $data['Ca_Coeff'] = $row->caCoeff;
            $data['P_coeff'] = $row->pCoeff;
            $data['Phytate_P'] = $row->phytateP;
            $data['Bone_P'] = $row->boneP;
            $data['Cellular_P'] = $row->cellularP;
            $data['Monobasic_P'] = $row->monobasicP;
            $data['Dibasic_P'] = $row->dibasicP;
            $data['Tribasic_P'] = $row->tribasicP;
            $data['Dig_P_Carni'] = $row->digPCarni;
            $data['Dig_P_Omni'] = $row->digPOmni;
            $data['Dig_P_Carp'] = $row->digPCarp;
            $data['Dig_P_Shrimp'] = $row->digPShrimp;
            $data['Sodium'] = $row->sodium;
            $data['Chlorine'] = $row->chlorine;
            $data['Potassium'] = $row->potassium;
            $data['Magnesium'] = $row->magnesium;
            $data['Sulfur'] = $row->sulfur;
            $data['Copper'] = $row->copper;
            $data['Iron'] = $row->iron;
            $data['Manganese'] = $row->manganese;
            $data['Selenium'] = $row->selenium;
            $data['Zinc'] = $row->zinc;
            $data['Iodine'] = $row->iodine;
            $data['Cobalt'] = $row->cobalt;
            $data['Biotin_B7'] = $row->biotinB7;
            $data['Folic_acid_B9'] = $row->folicAcidB9;
            $data['Niacin_B3'] = $row->niacinB3;
            $data['Pantothenic_Acid_B5'] = $row->pantothenicAcidB5;
            $data['Pyridoxine_B6'] = $row->pyridoxineB6;
            $data['Riboflavin_B2'] = $row->riboflavinB2;
            $data['Thiamin_B1'] = $row->thiaminB1;
            $data['Vitamin_B12'] = $row->vitaminB12;
            $data['Vitamin_C'] = $row->vitaminC;
            $data['Vitamin_A'] = $row->vitaminA;
            $data['Vitamin_D'] = $row->vitaminD;
            $data['Vitamin_E'] = $row->vitaminE;
            $data['Vitamin_K'] = $row->vitaminK;
            $data['Choline'] = $row->choline;
            $data['Inositol'] = $row->inositol;
            $data['Beta_Carotene'] = $row->betaCarotene;
            $data['Xanthophylls'] = $row->xanthophylls;
            $data['Antioxidant'] = $row->antioxidant;
            $data['ADC_DM_fish'] = $row->aDCDMFish;
            $data['ADC_CP_fish'] = $row->aDCCPFish;
            $data['ADC_Lipid_fish'] = $row->aDCLipidFish;
            $data['ADC_GE_fish'] = $row->aDCGEFish;
            $data['ADC_Total_CHO_fish'] = $row->aDCTotalCHOFish;
            $data['ADC_Starch_fish'] = $row->aDCStarchFish;
            $data['ADC_Starch_Carni'] = $row->aDCStarchCarni;
            $data['ADC_Starch_Omni'] = $row->aDCStarchOmni;
            $data['Dig_DM_fish'] = $row->digDMFish;
            $data['Dig_CP_fish'] = $row->digCPFish;
            $data['Dig_Lipid_fish'] = $row->digLipidFish;
            $data['Dig_GE_DE_fish_Kcal'] = $row->digGEDEFishKcal;
            $data['Dig_Total_CHO_fish'] = $row->digTotalCHOFish;
            $data['Dig_Starch_fish'] = $row->digStarchFish;
            $data['Dig_Starch_carni'] = $row->digStarchCarni;
            $data['Dig_Starch_Omni'] = $row->digStarchOmni;
            $data['ADC_Arg_fish'] = $row->aDCArgFish;
            $data['ADC_His_fish'] = $row->aDCHisFish;
            $data['ADC_Ile_fish'] = $row->aDCIleFish;
            $data['ADC_Leu_fish'] = $row->aDCLeuFish;
            $data['ADC_Lys_fish'] = $row->aDCLysFish;
            $data['ADC_Met_fish'] = $row->aDCMetFish;
            $data['ADC_Phe_fish'] = $row->aDCPheFish;
            $data['ADC_Thr_fish'] = $row->aDCThrFish;
            $data['ADC_Trp_fish'] = $row->aDCTrpFish;
            $data['ADC_Val_fish'] = $row->aDCValFish;
            $data['ADC_Cys_fish'] = $row->aDCCysFish;
            $data['ADC_Tyr_fish'] = $row->aDCTyrFish;
            $data['Palmitic_16_0'] = $row->palmitic160;
            $data['Stearic_18_0'] = $row->stearic180;
            $data['Oleic_18_1_n_9'] = $row->oleic181N9;
            $data['Linoleic_18_2_n_6'] = $row->linoleic182N6;
            $data['Linolenic_18_3_n_3'] = $row->linolenic183N3;
            $data['Arachidonic_20_4_n_6'] = $row->arachidonic204N6;
            $data['EPA_20_5_n_3'] = $row->ePA205N3;
            $data['DHA_22_6_n_3'] = $row->dHA226N3;
            $data['EPA_DHA'] = $row->ePADHA;
            $data['SAFA'] = $row->sAFA;
            $data['MUFA'] = $row->mUFA;
            $data['PUFA'] = $row->pUFA;
            $data['Sum_n_3'] = $row->sumN3;
            $data['Sum_n_6'] = $row->sumN6;
            $data['Phospholipids'] = $row->phospholipids;
            $data['Cholesterol'] = $row->cholesterol;
            $data['Plant_sterols'] = $row->plantSterols;
            $data['Coeff_18_2_n_6'] = $row->coeff182N6;
            $data['Coeff_18_3_n_3'] = $row->coeff183N3;
            $data['Coeff_20_4_n_6'] = $row->coeff204N6;
            $data['Coeff_20_5_n_3'] = $row->coeff205N3;
            $data['Coeff_22_6_n_3'] = $row->coeff226N3;
            $data['Coeff_SAFA'] = $row->coeffSAFA;
            $data['Coeff_MUFA'] = $row->coeffMUFA;
            $data['Coeff_PUFA'] = $row->coeffPUFA;
            $data['Aflatoxin_B'] = $row->aflatoxinB;
            $data['Deoxynivalenol_DON'] = $row->deoxynivalenolDON;
            $data['Zeralenone_ZON'] = $row->zeralenoneZON;
            $data['Fumonicin_FUM'] = $row->fumonicinFUM;
            $data['Anti_trypsic_factors'] = $row->antiTrypsicFactors;
            $data['Gossypol'] = $row->gossypol;
            $data['Phytic_Acid'] = $row->phyticAcid;
            $data['Glucosinolates'] = $row->glucosinolates;
            $data['Sinapine'] = $row->sinapine;
            $data['Tannins'] = $row->tannins;
            $data['Lectins'] = $row->lectins;
            $data['Cyanogens'] = $row->cyanogens;
            $data['PCBs'] = $row->pCBs;
            $data['Dioxins'] = $row->dioxins;
            $data['Soyasaponins'] = $row->soyasaponins;
            $data['Isoflavones'] = $row->isoflavones;
            $data['SIDC_DM_porcine'] = $row->sIDCDMPorcine;
            $data['SIDC_CP_porcine'] = $row->sIDCCPPorcine;
            $data['SIDC_Arg_porcine'] = $row->sIDCArgPorcine;
            $data['SIDC_His_porcine'] = $row->sIDCHisPorcine;
            $data['SIDC_Ile_porcine'] = $row->sIDCIlePorcine;
            $data['SIDC_Leu_porcine'] = $row->sIDCLeuPorcine;
            $data['SIDC_Lys_porcine'] = $row->sIDCLysPorcine;
            $data['SIDC_Met_porcine'] = $row->sIDCMetPorcine;
            $data['SIDC_Phe_porcine'] = $row->sIDCPhePorcine;
            $data['SIDC_Thr_porcine'] = $row->sIDCThrPorcine;
            $data['SIDC_Trp_porcine'] = $row->sIDCTrpPorcine;
            $data['SIDC_Val_porcine'] = $row->sIDCValPorcine;
            $data['SIDC_Cys_porcine'] = $row->sIDCCysPorcine;
            $data['SIDC_Tyr_porcine'] = $row->sIDCTyrPorcine;
            $data['SIDC_DM_poultry'] = $row->sIDCDMPoultry;
            $data['SIDC_CP_poultry'] = $row->sIDCCPPoultry;
            $data['SIDC_Arg_poultry'] = $row->sIDCArgPoultry;
            $data['SIDC_His_poultry'] = $row->sIDCHisPoultry;
            $data['SIDC_Ile_poultry'] = $row->sIDCIlePoultry;
            $data['SIDC_Leu_poultry'] = $row->sIDCLeuPoultry;
            $data['SIDC_Lys_poultry'] = $row->sIDCLysPoultry;
            $data['SIDC_Met_poultry'] = $row->sIDCMetPoultry;
            $data['SIDC_Phe_poultry'] = $row->sIDCPhePoultry;
            $data['SIDC_Thr_poultry'] = $row->sIDCThrPoultry;
            $data['SIDC_Trp_poultry'] = $row->sIDCTrpPoultry;
            $data['SIDC_Val_poultry'] = $row->sIDCValPoultry;
            $data['SIDC_Cys_poultry'] = $row->sIDCCysPoultry;
            $data['SIDC_Tyr_poultry'] = $row->sIDCTyrPoultry;
            $data['SID_Arg_porcine'] = $row->sIDArgPorcine;
            $data['SID_His_porcine'] = $row->sIDHisPorcine;
            $data['SID_Ile_porcine'] = $row->sIDIlePorcine;
            $data['SID_Leu_porcine'] = $row->sIDLeuPorcine;
            $data['SID_Lys_porcine'] = $row->sIDLysPorcine;
            $data['SID_Met_porcine'] = $row->sIDMetPorcine;
            $data['SID_Phe_porcine'] = $row->sIDPhePorcine;
            $data['SID_Thr_porcine'] = $row->sIDThrPorcine;
            $data['SID_Trp_porcine'] = $row->sIDTrpPorcine;
            $data['SID_Val_porcine'] = $row->sIDValPorcine;
            $data['SID_Cys_porcine'] = $row->sIDCysPorcine;
            $data['SID_Tyr_porcine'] = $row->sIDTyrPorcine;
            $data['SID_Arg_poultry'] = $row->sIDArgPoultry;
            $data['SID_His_poultry'] = $row->sIDHisPoultry;
            $data['SID_Ile_poultry'] = $row->sIDIlePoultry;
            $data['SID_Leu_poultry'] = $row->sIDLeuPoultry;
            $data['SID_Lys_poultry'] = $row->sIDLysPoultry;
            $data['SID_Met_poultry'] = $row->sIDMetPoultry;
            $data['SID_Phe_poultry'] = $row->sIDPhePoultry;
            $data['SID_Thr_poultry'] = $row->sIDThrPoultry;
            $data['SID_Trp_poultry'] = $row->sIDTrpPoultry;
            $data['SID_Val_poultry'] = $row->sIDValPoultry;
            $data['SID_Cys_poultry'] = $row->sIDCysPoultry;
            $data['SID_Tyr_poultry'] = $row->sIDTyrPoultry;
            $data['percent'] = $row->PRCNT;
        }
        
        $data['carbohydrate'] = number_format((float)$data['Dry_Matter'] - ((float)$data['Crude_Protein'] + (float)$data['Crude_Lipids']),2);
        $carbon = (((float)$data['Crude_Protein'] * 47)/100) + (((float)$data['Crude_Lipids'] * 70)/100) + (((float)$data['carbohydrate'] * 50)/100);
        $nitrogen = ((float)$data['Crude_Protein'] * 16)/100;
        try{
            $data['cn'] = number_format($carbon/$nitrogen,2);
        }catch(\Exception $e){
            $data['cn'] = 0;
        }
        

		return $this->response->setJSON($data);
    }

	public function getAll()
	{
 		$response = array();		
		
	    $data['data'] = array();
 
		$result = $this->formulationModel->select('id, Ing_Code, Ing_Descr_E, Dry_Matter, Moisture, Crude_Protein, Crude_Lipids, Crude_Fibre, Ash, NFE, NDF, ADF, Total_CHO, Starch, Sugars, Gross_Energy_MJ, Gross_energy_Kcal, DE_Fish_Carni, DE_Fish_Omni, DE_Carp, DE_Shrimp, DE_Porcine, DE_Poultry, ME_Fish, ME_Guelph_Fish_Carni, ME_Guelph_Fish_Omni, ME_Guelph_Carp, ME_Guelph_Shrimp, ME_Poultry, ME_Porcine, Arginine, Histidine, Isoleucine, Leucine, Lysine, Methionine, Phenylalanine, Threonine, Tryptophan, Valine, Cystine, TSAA_Met_Cys, Tyrosine, Phe_Tyr, Glutamic, Aspartic, Glycine, Serine, Alanine, Sum_EAAs, Sum_NEAAs, Taurine, Arg_Coeff, His_Coeff, Ile_Coeff, Leu_Coeff, Lys_Coeff, Met_Coeff, Phe_Coeff, Thr_Coeff, Trp_Coeff, Val_Coeff, Dig_Arg_fish, Dig_His_fish, Dig_Ile_fish, Dig_Leu_fish, Dig_Lys_fish, Dig_Met_fish, Dig_Phe_fish, Dig_Thr_fish, Dig_Trp_fish, Dig_Val_fish, Dig_Cys_fish, Dig_TSAA_Met_Cys, Dig_Tyr_fish, Calcium, Phosphorus, Ca_Coeff, P_coeff, Phytate_P, Bone_P, Cellular_P, Monobasic_P, Dibasic_P, Tribasic_P, Dig_P_Carni, Dig_P_Omni, Dig_P_Carp, Dig_P_Shrimp, Sodium, Chlorine, Potassium, Magnesium, Sulfur, Copper, Iron, Manganese, Selenium, Zinc, Iodine, Cobalt, Biotin_B7, Folic_acid_B9, Niacin_B3, Pantothenic_Acid_B5, Pyridoxine_B6, Riboflavin_B2, Thiamin_B1, Vitamin_B12, Vitamin_C, Vitamin_A, Vitamin_D, Vitamin_E, Vitamin_K, Choline, Inositol, Beta_Carotene, Xanthophylls, Antioxidant, ADC_DM_fish, ADC_CP_fish, ADC_Lipid_fish, ADC_GE_fish, ADC_Total_CHO_fish, ADC_Starch_fish, ADC_Starch_Carni, ADC_Starch_Omni, Dig_DM_fish, Dig_CP_fish, Dig_Lipid_fish, Dig_GE_DE_fish_Kcal, Dig_Total_CHO_fish, Dig_Starch_fish, Dig_Starch_carni, Dig_Starch_Omni, ADC_Arg_fish, ADC_His_fish, ADC_Ile_fish, ADC_Leu_fish, ADC_Lys_fish, ADC_Met_fish, ADC_Phe_fish, ADC_Thr_fish, ADC_Trp_fish, ADC_Val_fish, ADC_Cys_fish, ADC_Tyr_fish, Palmitic_16_0, Stearic_18_0, Oleic_18_1_n_9, Linoleic_18_2_n_6, Linolenic_18_3_n_3, Arachidonic_20_4_n_6, EPA_20_5_n_3, DHA_22_6_n_3, EPA_DHA, SAFA, MUFA, PUFA, Sum_n_3, Sum_n_6, Phospholipids, Cholesterol, Plant_sterols, Coeff_18_2_n_6, Coeff_18_3_n_3, Coeff_20_4_n_6, Coeff_20_5_n_3, Coeff_22_6_n_3, Coeff_SAFA, Coeff_MUFA, Coeff_PUFA, Aflatoxin_B, Deoxynivalenol_DON, Zeralenone_ZON, Fumonicin_FUM, Anti_trypsic_factors, Gossypol, Phytic_Acid, Glucosinolates, Sinapine, Tannins, Lectins, Cyanogens, PCBs, Dioxins, Soyasaponins, Isoflavones, SIDC_DM_porcine, SIDC_CP_porcine, SIDC_Arg_porcine, SIDC_His_porcine, SIDC_Ile_porcine, SIDC_Leu_porcine, SIDC_Lys_porcine, SIDC_Met_porcine, SIDC_Phe_porcine, SIDC_Thr_porcine, SIDC_Trp_porcine, SIDC_Val_porcine, SIDC_Cys_porcine, SIDC_Tyr_porcine, SIDC_DM_poultry, SIDC_CP_poultry, SIDC_Arg_poultry, SIDC_His_poultry, SIDC_Ile_poultry, SIDC_Leu_poultry, SIDC_Lys_poultry, SIDC_Met_poultry, SIDC_Phe_poultry, SIDC_Thr_poultry, SIDC_Trp_poultry, SIDC_Val_poultry, SIDC_Cys_poultry, SIDC_Tyr_poultry, SID_Arg_porcine, SID_His_porcine, SID_Ile_porcine, SID_Leu_porcine, SID_Lys_porcine, SID_Met_porcine, SID_Phe_porcine, SID_Thr_porcine, SID_Trp_porcine, SID_Val_porcine, SID_Cys_porcine, SID_Tyr_porcine, SID_Arg_poultry, SID_His_poultry, SID_Ile_poultry, SID_Leu_poultry, SID_Lys_poultry, SID_Met_poultry, SID_Phe_poultry, SID_Thr_poultry, SID_Trp_poultry, SID_Val_poultry, SID_Cys_poultry, SID_Tyr_poultry, percent')->findAll();
		
		foreach ($result as $key => $value) {
							
			$ops = '<div class="btn-group">';
			$ops .= '	<button type="button" class="btn btn-sm btn-info" onclick="edit('. $value->id .')"><i class="fa fa-edit"></i></button>';
			$ops .= '	<button type="button" class="btn btn-sm btn-danger" onclick="remove('. $value->id .')"><i class="fa fa-trash"></i></button>';
			$ops .= '</div>';
			
			$data['data'][$key] = array(
				$value->id,
				$value->Ing_Code,
				$value->Ing_Descr_E,
				$value->Dry_Matter,
				$value->Moisture,
				$value->Crude_Protein,
				$value->Crude_Lipids,
				$value->Crude_Fibre,
				$value->Ash,
				$value->NFE,
				$value->NDF,
				$value->ADF,
				$value->Total_CHO,
				$value->Starch,
				$value->Sugars,
				$value->Gross_Energy_MJ,
				$value->Gross_energy_Kcal,
				$value->DE_Fish_Carni,
				$value->DE_Fish_Omni,
				$value->DE_Carp,
				$value->DE_Shrimp,
				$value->DE_Porcine,
				$value->DE_Poultry,
				$value->ME_Fish,
				$value->ME_Guelph_Fish_Carni,
				$value->ME_Guelph_Fish_Omni,
				$value->ME_Guelph_Carp,
				$value->ME_Guelph_Shrimp,
				$value->ME_Poultry,
				$value->ME_Porcine,
				$value->Arginine,
				$value->Histidine,
				$value->Isoleucine,
				$value->Leucine,
				$value->Lysine,
				$value->Methionine,
				$value->Phenylalanine,
				$value->Threonine,
				$value->Tryptophan,
				$value->Valine,
				$value->Cystine,
				$value->TSAA_Met_Cys,
				$value->Tyrosine,
				$value->Phe_Tyr,
				$value->Glutamic,
				$value->Aspartic,
				$value->Glycine,
				$value->Serine,
				$value->Alanine,
				$value->Sum_EAAs,
				$value->Sum_NEAAs,
				$value->Taurine,
				$value->Arg_Coeff,
				$value->His_Coeff,
				$value->Ile_Coeff,
				$value->Leu_Coeff,
				$value->Lys_Coeff,
				$value->Met_Coeff,
				$value->Phe_Coeff,
				$value->Thr_Coeff,
				$value->Trp_Coeff,
				$value->Val_Coeff,
				$value->Dig_Arg_fish,
				$value->Dig_His_fish,
				$value->Dig_Ile_fish,
				$value->Dig_Leu_fish,
				$value->Dig_Lys_fish,
				$value->Dig_Met_fish,
				$value->Dig_Phe_fish,
				$value->Dig_Thr_fish,
				$value->Dig_Trp_fish,
				$value->Dig_Val_fish,
				$value->Dig_Cys_fish,
				$value->Dig_TSAA_Met_Cys,
				$value->Dig_Tyr_fish,
				$value->Calcium,
				$value->Phosphorus,
				$value->Ca_Coeff,
				$value->P_coeff,
				$value->Phytate_P,
				$value->Bone_P,
				$value->Cellular_P,
				$value->Monobasic_P,
				$value->Dibasic_P,
				$value->Tribasic_P,
				$value->Dig_P_Carni,
				$value->Dig_P_Omni,
				$value->Dig_P_Carp,
				$value->Dig_P_Shrimp,
				$value->Sodium,
				$value->Chlorine,
				$value->Potassium,
				$value->Magnesium,
				$value->Sulfur,
				$value->Copper,
				$value->Iron,
				$value->Manganese,
				$value->Selenium,
				$value->Zinc,
				$value->Iodine,
				$value->Cobalt,
				$value->Biotin_B7,
				$value->Folic_acid_B9,
				$value->Niacin_B3,
				$value->Pantothenic_Acid_B5,
				$value->Pyridoxine_B6,
				$value->Riboflavin_B2,
				$value->Thiamin_B1,
				$value->Vitamin_B12,
				$value->Vitamin_C,
				$value->Vitamin_A,
				$value->Vitamin_D,
				$value->Vitamin_E,
				$value->Vitamin_K,
				$value->Choline,
				$value->Inositol,
				$value->Beta_Carotene,
				$value->Xanthophylls,
				$value->Antioxidant,
				$value->ADC_DM_fish,
				$value->ADC_CP_fish,
				$value->ADC_Lipid_fish,
				$value->ADC_GE_fish,
				$value->ADC_Total_CHO_fish,
				$value->ADC_Starch_fish,
				$value->ADC_Starch_Carni,
				$value->ADC_Starch_Omni,
				$value->Dig_DM_fish,
				$value->Dig_CP_fish,
				$value->Dig_Lipid_fish,
				$value->Dig_GE_DE_fish_Kcal,
				$value->Dig_Total_CHO_fish,
				$value->Dig_Starch_fish,
				$value->Dig_Starch_carni,
				$value->Dig_Starch_Omni,
				$value->ADC_Arg_fish,
				$value->ADC_His_fish,
				$value->ADC_Ile_fish,
				$value->ADC_Leu_fish,
				$value->ADC_Lys_fish,
				$value->ADC_Met_fish,
				$value->ADC_Phe_fish,
				$value->ADC_Thr_fish,
				$value->ADC_Trp_fish,
				$value->ADC_Val_fish,
				$value->ADC_Cys_fish,
				$value->ADC_Tyr_fish,
				$value->Palmitic_16_0,
				$value->Stearic_18_0,
				$value->Oleic_18_1_n_9,
				$value->Linoleic_18_2_n_6,
				$value->Linolenic_18_3_n_3,
				$value->Arachidonic_20_4_n_6,
				$value->EPA_20_5_n_3,
				$value->DHA_22_6_n_3,
				$value->EPA_DHA,
				$value->SAFA,
				$value->MUFA,
				$value->PUFA,
				$value->Sum_n_3,
				$value->Sum_n_6,
				$value->Phospholipids,
				$value->Cholesterol,
				$value->Plant_sterols,
				$value->Coeff_18_2_n_6,
				$value->Coeff_18_3_n_3,
				$value->Coeff_20_4_n_6,
				$value->Coeff_20_5_n_3,
				$value->Coeff_22_6_n_3,
				$value->Coeff_SAFA,
				$value->Coeff_MUFA,
				$value->Coeff_PUFA,
				$value->Aflatoxin_B,
				$value->Deoxynivalenol_DON,
				$value->Zeralenone_ZON,
				$value->Fumonicin_FUM,
				$value->Anti_trypsic_factors,
				$value->Gossypol,
				$value->Phytic_Acid,
				$value->Glucosinolates,
				$value->Sinapine,
				$value->Tannins,
				$value->Lectins,
				$value->Cyanogens,
				$value->PCBs,
				$value->Dioxins,
				$value->Soyasaponins,
				$value->Isoflavones,
				$value->SIDC_DM_porcine,
				$value->SIDC_CP_porcine,
				$value->SIDC_Arg_porcine,
				$value->SIDC_His_porcine,
				$value->SIDC_Ile_porcine,
				$value->SIDC_Leu_porcine,
				$value->SIDC_Lys_porcine,
				$value->SIDC_Met_porcine,
				$value->SIDC_Phe_porcine,
				$value->SIDC_Thr_porcine,
				$value->SIDC_Trp_porcine,
				$value->SIDC_Val_porcine,
				$value->SIDC_Cys_porcine,
				$value->SIDC_Tyr_porcine,
				$value->SIDC_DM_poultry,
				$value->SIDC_CP_poultry,
				$value->SIDC_Arg_poultry,
				$value->SIDC_His_poultry,
				$value->SIDC_Ile_poultry,
				$value->SIDC_Leu_poultry,
				$value->SIDC_Lys_poultry,
				$value->SIDC_Met_poultry,
				$value->SIDC_Phe_poultry,
				$value->SIDC_Thr_poultry,
				$value->SIDC_Trp_poultry,
				$value->SIDC_Val_poultry,
				$value->SIDC_Cys_poultry,
				$value->SIDC_Tyr_poultry,
				$value->SID_Arg_porcine,
				$value->SID_His_porcine,
				$value->SID_Ile_porcine,
				$value->SID_Leu_porcine,
				$value->SID_Lys_porcine,
				$value->SID_Met_porcine,
				$value->SID_Phe_porcine,
				$value->SID_Thr_porcine,
				$value->SID_Trp_porcine,
				$value->SID_Val_porcine,
				$value->SID_Cys_porcine,
				$value->SID_Tyr_porcine,
				$value->SID_Arg_poultry,
				$value->SID_His_poultry,
				$value->SID_Ile_poultry,
				$value->SID_Leu_poultry,
				$value->SID_Lys_poultry,
				$value->SID_Met_poultry,
				$value->SID_Phe_poultry,
				$value->SID_Thr_poultry,
				$value->SID_Trp_poultry,
				$value->SID_Val_poultry,
				$value->SID_Cys_poultry,
				$value->SID_Tyr_poultry,
                $value->percent,

				$ops,
			);
		} 

		return $this->response->setJSON($data);		
	}
	
	public function getOne()
	{
 		$response = array();
		
		$id = $this->request->getPost('id');
		
		if ($this->validation->check($id, 'required|numeric')) {			
			$data = $this->formulationModel->where('id' ,$id)->first();
			return $this->response->setJSON($data);					
		} else {			
			throw new \CodeIgniter\Exceptions\PageNotFoundException();
		}			
	}	
	
	public function add()
	{
        $response = array();

        $fields['id'] = $this->request->getPost('id');
        $fields['Ing_Code'] = $this->request->getPost('ingCode');
        $fields['Ing_Descr_E'] = $this->request->getPost('ingDescrE');
        $fields['Dry_Matter'] = $this->request->getPost('dryMatter');
        $fields['Moisture'] = $this->request->getPost('moisture');
        $fields['Crude_Protein'] = $this->request->getPost('crudeProtein');
        $fields['Crude_Lipids'] = $this->request->getPost('crudeLipids');
        $fields['Crude_Fibre'] = $this->request->getPost('crudeFibre');
        $fields['Ash'] = $this->request->getPost('ash');
        $fields['NFE'] = $this->request->getPost('nFE');
        $fields['NDF'] = $this->request->getPost('nDF');
        $fields['ADF'] = $this->request->getPost('aDF');
        $fields['Total_CHO'] = $this->request->getPost('totalCHO');
        $fields['Starch'] = $this->request->getPost('starch');
        $fields['Sugars'] = $this->request->getPost('sugars');
        $fields['Gross_Energy_MJ'] = $this->request->getPost('grossEnergyMJ');
        $fields['Gross_energy_Kcal'] = $this->request->getPost('grossEnergyKcal');
        $fields['DE_Fish_Carni'] = $this->request->getPost('dEFishCarni');
        $fields['DE_Fish_Omni'] = $this->request->getPost('dEFishOmni');
        $fields['DE_Carp'] = $this->request->getPost('dECarp');
        $fields['DE_Shrimp'] = $this->request->getPost('dEShrimp');
        $fields['DE_Porcine'] = $this->request->getPost('dEPorcine');
        $fields['DE_Poultry'] = $this->request->getPost('dEPoultry');
        $fields['ME_Fish'] = $this->request->getPost('mEFish');
        $fields['ME_Guelph_Fish_Carni'] = $this->request->getPost('mEGuelphFishCarni');
        $fields['ME_Guelph_Fish_Omni'] = $this->request->getPost('mEGuelphFishOmni');
        $fields['ME_Guelph_Carp'] = $this->request->getPost('mEGuelphCarp');
        $fields['ME_Guelph_Shrimp'] = $this->request->getPost('mEGuelphShrimp');
        $fields['ME_Poultry'] = $this->request->getPost('mEPoultry');
        $fields['ME_Porcine'] = $this->request->getPost('mEPorcine');
        $fields['Arginine'] = $this->request->getPost('arginine');
        $fields['Histidine'] = $this->request->getPost('histidine');
        $fields['Isoleucine'] = $this->request->getPost('isoleucine');
        $fields['Leucine'] = $this->request->getPost('leucine');
        $fields['Lysine'] = $this->request->getPost('lysine');
        $fields['Methionine'] = $this->request->getPost('methionine');
        $fields['Phenylalanine'] = $this->request->getPost('phenylalanine');
        $fields['Threonine'] = $this->request->getPost('threonine');
        $fields['Tryptophan'] = $this->request->getPost('tryptophan');
        $fields['Valine'] = $this->request->getPost('valine');
        $fields['Cystine'] = $this->request->getPost('cystine');
        $fields['TSAA_Met_Cys'] = $this->request->getPost('tSAAMetCys');
        $fields['Tyrosine'] = $this->request->getPost('tyrosine');
        $fields['Phe_Tyr'] = $this->request->getPost('pheTyr');
        $fields['Glutamic'] = $this->request->getPost('glutamic');
        $fields['Aspartic'] = $this->request->getPost('aspartic');
        $fields['Glycine'] = $this->request->getPost('glycine');
        $fields['Serine'] = $this->request->getPost('serine');
        $fields['Alanine'] = $this->request->getPost('alanine');
        $fields['Sum_EAAs'] = $this->request->getPost('sumEAAs');
        $fields['Sum_NEAAs'] = $this->request->getPost('sumNEAAs');
        $fields['Taurine'] = $this->request->getPost('taurine');
        $fields['Arg_Coeff'] = $this->request->getPost('argCoeff');
        $fields['His_Coeff'] = $this->request->getPost('hisCoeff');
        $fields['Ile_Coeff'] = $this->request->getPost('ileCoeff');
        $fields['Leu_Coeff'] = $this->request->getPost('leuCoeff');
        $fields['Lys_Coeff'] = $this->request->getPost('lysCoeff');
        $fields['Met_Coeff'] = $this->request->getPost('metCoeff');
        $fields['Phe_Coeff'] = $this->request->getPost('pheCoeff');
        $fields['Thr_Coeff'] = $this->request->getPost('thrCoeff');
        $fields['Trp_Coeff'] = $this->request->getPost('trpCoeff');
        $fields['Val_Coeff'] = $this->request->getPost('valCoeff');
        $fields['Dig_Arg_fish'] = $this->request->getPost('digArgFish');
        $fields['Dig_His_fish'] = $this->request->getPost('digHisFish');
        $fields['Dig_Ile_fish'] = $this->request->getPost('digIleFish');
        $fields['Dig_Leu_fish'] = $this->request->getPost('digLeuFish');
        $fields['Dig_Lys_fish'] = $this->request->getPost('digLysFish');
        $fields['Dig_Met_fish'] = $this->request->getPost('digMetFish');
        $fields['Dig_Phe_fish'] = $this->request->getPost('digPheFish');
        $fields['Dig_Thr_fish'] = $this->request->getPost('digThrFish');
        $fields['Dig_Trp_fish'] = $this->request->getPost('digTrpFish');
        $fields['Dig_Val_fish'] = $this->request->getPost('digValFish');
        $fields['Dig_Cys_fish'] = $this->request->getPost('digCysFish');
        $fields['Dig_TSAA_Met_Cys'] = $this->request->getPost('digTSAAMetCys');
        $fields['Dig_Tyr_fish'] = $this->request->getPost('digTyrFish');
        $fields['Calcium'] = $this->request->getPost('calcium');
        $fields['Phosphorus'] = $this->request->getPost('phosphorus');
        $fields['Ca_Coeff'] = $this->request->getPost('caCoeff');
        $fields['P_coeff'] = $this->request->getPost('pCoeff');
        $fields['Phytate_P'] = $this->request->getPost('phytateP');
        $fields['Bone_P'] = $this->request->getPost('boneP');
        $fields['Cellular_P'] = $this->request->getPost('cellularP');
        $fields['Monobasic_P'] = $this->request->getPost('monobasicP');
        $fields['Dibasic_P'] = $this->request->getPost('dibasicP');
        $fields['Tribasic_P'] = $this->request->getPost('tribasicP');
        $fields['Dig_P_Carni'] = $this->request->getPost('digPCarni');
        $fields['Dig_P_Omni'] = $this->request->getPost('digPOmni');
        $fields['Dig_P_Carp'] = $this->request->getPost('digPCarp');
        $fields['Dig_P_Shrimp'] = $this->request->getPost('digPShrimp');
        $fields['Sodium'] = $this->request->getPost('sodium');
        $fields['Chlorine'] = $this->request->getPost('chlorine');
        $fields['Potassium'] = $this->request->getPost('potassium');
        $fields['Magnesium'] = $this->request->getPost('magnesium');
        $fields['Sulfur'] = $this->request->getPost('sulfur');
        $fields['Copper'] = $this->request->getPost('copper');
        $fields['Iron'] = $this->request->getPost('iron');
        $fields['Manganese'] = $this->request->getPost('manganese');
        $fields['Selenium'] = $this->request->getPost('selenium');
        $fields['Zinc'] = $this->request->getPost('zinc');
        $fields['Iodine'] = $this->request->getPost('iodine');
        $fields['Cobalt'] = $this->request->getPost('cobalt');
        $fields['Biotin_B7'] = $this->request->getPost('biotinB7');
        $fields['Folic_acid_B9'] = $this->request->getPost('folicAcidB9');
        $fields['Niacin_B3'] = $this->request->getPost('niacinB3');
        $fields['Pantothenic_Acid_B5'] = $this->request->getPost('pantothenicAcidB5');
        $fields['Pyridoxine_B6'] = $this->request->getPost('pyridoxineB6');
        $fields['Riboflavin_B2'] = $this->request->getPost('riboflavinB2');
        $fields['Thiamin_B1'] = $this->request->getPost('thiaminB1');
        $fields['Vitamin_B12'] = $this->request->getPost('vitaminB12');
        $fields['Vitamin_C'] = $this->request->getPost('vitaminC');
        $fields['Vitamin_A'] = $this->request->getPost('vitaminA');
        $fields['Vitamin_D'] = $this->request->getPost('vitaminD');
        $fields['Vitamin_E'] = $this->request->getPost('vitaminE');
        $fields['Vitamin_K'] = $this->request->getPost('vitaminK');
        $fields['Choline'] = $this->request->getPost('choline');
        $fields['Inositol'] = $this->request->getPost('inositol');
        $fields['Beta_Carotene'] = $this->request->getPost('betaCarotene');
        $fields['Xanthophylls'] = $this->request->getPost('xanthophylls');
        $fields['Antioxidant'] = $this->request->getPost('antioxidant');
        $fields['ADC_DM_fish'] = $this->request->getPost('aDCDMFish');
        $fields['ADC_CP_fish'] = $this->request->getPost('aDCCPFish');
        $fields['ADC_Lipid_fish'] = $this->request->getPost('aDCLipidFish');
        $fields['ADC_GE_fish'] = $this->request->getPost('aDCGEFish');
        $fields['ADC_Total_CHO_fish'] = $this->request->getPost('aDCTotalCHOFish');
        $fields['ADC_Starch_fish'] = $this->request->getPost('aDCStarchFish');
        $fields['ADC_Starch_Carni'] = $this->request->getPost('aDCStarchCarni');
        $fields['ADC_Starch_Omni'] = $this->request->getPost('aDCStarchOmni');
        $fields['Dig_DM_fish'] = $this->request->getPost('digDMFish');
        $fields['Dig_CP_fish'] = $this->request->getPost('digCPFish');
        $fields['Dig_Lipid_fish'] = $this->request->getPost('digLipidFish');
        $fields['Dig_GE_DE_fish_Kcal'] = $this->request->getPost('digGEDEFishKcal');
        $fields['Dig_Total_CHO_fish'] = $this->request->getPost('digTotalCHOFish');
        $fields['Dig_Starch_fish'] = $this->request->getPost('digStarchFish');
        $fields['Dig_Starch_carni'] = $this->request->getPost('digStarchCarni');
        $fields['Dig_Starch_Omni'] = $this->request->getPost('digStarchOmni');
        $fields['ADC_Arg_fish'] = $this->request->getPost('aDCArgFish');
        $fields['ADC_His_fish'] = $this->request->getPost('aDCHisFish');
        $fields['ADC_Ile_fish'] = $this->request->getPost('aDCIleFish');
        $fields['ADC_Leu_fish'] = $this->request->getPost('aDCLeuFish');
        $fields['ADC_Lys_fish'] = $this->request->getPost('aDCLysFish');
        $fields['ADC_Met_fish'] = $this->request->getPost('aDCMetFish');
        $fields['ADC_Phe_fish'] = $this->request->getPost('aDCPheFish');
        $fields['ADC_Thr_fish'] = $this->request->getPost('aDCThrFish');
        $fields['ADC_Trp_fish'] = $this->request->getPost('aDCTrpFish');
        $fields['ADC_Val_fish'] = $this->request->getPost('aDCValFish');
        $fields['ADC_Cys_fish'] = $this->request->getPost('aDCCysFish');
        $fields['ADC_Tyr_fish'] = $this->request->getPost('aDCTyrFish');
        $fields['Palmitic_16_0'] = $this->request->getPost('palmitic160');
        $fields['Stearic_18_0'] = $this->request->getPost('stearic180');
        $fields['Oleic_18_1_n_9'] = $this->request->getPost('oleic181N9');
        $fields['Linoleic_18_2_n_6'] = $this->request->getPost('linoleic182N6');
        $fields['Linolenic_18_3_n_3'] = $this->request->getPost('linolenic183N3');
        $fields['Arachidonic_20_4_n_6'] = $this->request->getPost('arachidonic204N6');
        $fields['EPA_20_5_n_3'] = $this->request->getPost('ePA205N3');
        $fields['DHA_22_6_n_3'] = $this->request->getPost('dHA226N3');
        $fields['EPA_DHA'] = $this->request->getPost('ePADHA');
        $fields['SAFA'] = $this->request->getPost('sAFA');
        $fields['MUFA'] = $this->request->getPost('mUFA');
        $fields['PUFA'] = $this->request->getPost('pUFA');
        $fields['Sum_n_3'] = $this->request->getPost('sumN3');
        $fields['Sum_n_6'] = $this->request->getPost('sumN6');
        $fields['Phospholipids'] = $this->request->getPost('phospholipids');
        $fields['Cholesterol'] = $this->request->getPost('cholesterol');
        $fields['Plant_sterols'] = $this->request->getPost('plantSterols');
        $fields['Coeff_18_2_n_6'] = $this->request->getPost('coeff182N6');
        $fields['Coeff_18_3_n_3'] = $this->request->getPost('coeff183N3');
        $fields['Coeff_20_4_n_6'] = $this->request->getPost('coeff204N6');
        $fields['Coeff_20_5_n_3'] = $this->request->getPost('coeff205N3');
        $fields['Coeff_22_6_n_3'] = $this->request->getPost('coeff226N3');
        $fields['Coeff_SAFA'] = $this->request->getPost('coeffSAFA');
        $fields['Coeff_MUFA'] = $this->request->getPost('coeffMUFA');
        $fields['Coeff_PUFA'] = $this->request->getPost('coeffPUFA');
        $fields['Aflatoxin_B'] = $this->request->getPost('aflatoxinB');
        $fields['Deoxynivalenol_DON'] = $this->request->getPost('deoxynivalenolDON');
        $fields['Zeralenone_ZON'] = $this->request->getPost('zeralenoneZON');
        $fields['Fumonicin_FUM'] = $this->request->getPost('fumonicinFUM');
        $fields['Anti_trypsic_factors'] = $this->request->getPost('antiTrypsicFactors');
        $fields['Gossypol'] = $this->request->getPost('gossypol');
        $fields['Phytic_Acid'] = $this->request->getPost('phyticAcid');
        $fields['Glucosinolates'] = $this->request->getPost('glucosinolates');
        $fields['Sinapine'] = $this->request->getPost('sinapine');
        $fields['Tannins'] = $this->request->getPost('tannins');
        $fields['Lectins'] = $this->request->getPost('lectins');
        $fields['Cyanogens'] = $this->request->getPost('cyanogens');
        $fields['PCBs'] = $this->request->getPost('pCBs');
        $fields['Dioxins'] = $this->request->getPost('dioxins');
        $fields['Soyasaponins'] = $this->request->getPost('soyasaponins');
        $fields['Isoflavones'] = $this->request->getPost('isoflavones');
        $fields['SIDC_DM_porcine'] = $this->request->getPost('sIDCDMPorcine');
        $fields['SIDC_CP_porcine'] = $this->request->getPost('sIDCCPPorcine');
        $fields['SIDC_Arg_porcine'] = $this->request->getPost('sIDCArgPorcine');
        $fields['SIDC_His_porcine'] = $this->request->getPost('sIDCHisPorcine');
        $fields['SIDC_Ile_porcine'] = $this->request->getPost('sIDCIlePorcine');
        $fields['SIDC_Leu_porcine'] = $this->request->getPost('sIDCLeuPorcine');
        $fields['SIDC_Lys_porcine'] = $this->request->getPost('sIDCLysPorcine');
        $fields['SIDC_Met_porcine'] = $this->request->getPost('sIDCMetPorcine');
        $fields['SIDC_Phe_porcine'] = $this->request->getPost('sIDCPhePorcine');
        $fields['SIDC_Thr_porcine'] = $this->request->getPost('sIDCThrPorcine');
        $fields['SIDC_Trp_porcine'] = $this->request->getPost('sIDCTrpPorcine');
        $fields['SIDC_Val_porcine'] = $this->request->getPost('sIDCValPorcine');
        $fields['SIDC_Cys_porcine'] = $this->request->getPost('sIDCCysPorcine');
        $fields['SIDC_Tyr_porcine'] = $this->request->getPost('sIDCTyrPorcine');
        $fields['SIDC_DM_poultry'] = $this->request->getPost('sIDCDMPoultry');
        $fields['SIDC_CP_poultry'] = $this->request->getPost('sIDCCPPoultry');
        $fields['SIDC_Arg_poultry'] = $this->request->getPost('sIDCArgPoultry');
        $fields['SIDC_His_poultry'] = $this->request->getPost('sIDCHisPoultry');
        $fields['SIDC_Ile_poultry'] = $this->request->getPost('sIDCIlePoultry');
        $fields['SIDC_Leu_poultry'] = $this->request->getPost('sIDCLeuPoultry');
        $fields['SIDC_Lys_poultry'] = $this->request->getPost('sIDCLysPoultry');
        $fields['SIDC_Met_poultry'] = $this->request->getPost('sIDCMetPoultry');
        $fields['SIDC_Phe_poultry'] = $this->request->getPost('sIDCPhePoultry');
        $fields['SIDC_Thr_poultry'] = $this->request->getPost('sIDCThrPoultry');
        $fields['SIDC_Trp_poultry'] = $this->request->getPost('sIDCTrpPoultry');
        $fields['SIDC_Val_poultry'] = $this->request->getPost('sIDCValPoultry');
        $fields['SIDC_Cys_poultry'] = $this->request->getPost('sIDCCysPoultry');
        $fields['SIDC_Tyr_poultry'] = $this->request->getPost('sIDCTyrPoultry');
        $fields['SID_Arg_porcine'] = $this->request->getPost('sIDArgPorcine');
        $fields['SID_His_porcine'] = $this->request->getPost('sIDHisPorcine');
        $fields['SID_Ile_porcine'] = $this->request->getPost('sIDIlePorcine');
        $fields['SID_Leu_porcine'] = $this->request->getPost('sIDLeuPorcine');
        $fields['SID_Lys_porcine'] = $this->request->getPost('sIDLysPorcine');
        $fields['SID_Met_porcine'] = $this->request->getPost('sIDMetPorcine');
        $fields['SID_Phe_porcine'] = $this->request->getPost('sIDPhePorcine');
        $fields['SID_Thr_porcine'] = $this->request->getPost('sIDThrPorcine');
        $fields['SID_Trp_porcine'] = $this->request->getPost('sIDTrpPorcine');
        $fields['SID_Val_porcine'] = $this->request->getPost('sIDValPorcine');
        $fields['SID_Cys_porcine'] = $this->request->getPost('sIDCysPorcine');
        $fields['SID_Tyr_porcine'] = $this->request->getPost('sIDTyrPorcine');
        $fields['SID_Arg_poultry'] = $this->request->getPost('sIDArgPoultry');
        $fields['SID_His_poultry'] = $this->request->getPost('sIDHisPoultry');
        $fields['SID_Ile_poultry'] = $this->request->getPost('sIDIlePoultry');
        $fields['SID_Leu_poultry'] = $this->request->getPost('sIDLeuPoultry');
        $fields['SID_Lys_poultry'] = $this->request->getPost('sIDLysPoultry');
        $fields['SID_Met_poultry'] = $this->request->getPost('sIDMetPoultry');
        $fields['SID_Phe_poultry'] = $this->request->getPost('sIDPhePoultry');
        $fields['SID_Thr_poultry'] = $this->request->getPost('sIDThrPoultry');
        $fields['SID_Trp_poultry'] = $this->request->getPost('sIDTrpPoultry');
        $fields['SID_Val_poultry'] = $this->request->getPost('sIDValPoultry');
        $fields['SID_Cys_poultry'] = $this->request->getPost('sIDCysPoultry');
        $fields['SID_Tyr_poultry'] = $this->request->getPost('sIDTyrPoultry');

        $this->validation->setRules([
            'Ing_Code' => ['label' => 'Ing Code', 'rules' => 'permit_empty|numeric|max_length[5]'],
            'Ing_Descr_E' => ['label' => 'Ing Descr E', 'rules' => 'permit_empty|max_length[60]'],
            'Dry_Matter' => ['label' => 'Dry Matter', 'rules' => 'permit_empty'],
            'Moisture' => ['label' => 'Moisture', 'rules' => 'permit_empty'],
            'Crude_Protein' => ['label' => 'Crude Protein', 'rules' => 'permit_empty'],
            'Crude_Lipids' => ['label' => 'Crude Lipids', 'rules' => 'permit_empty'],
            'Crude_Fibre' => ['label' => 'Crude Fibre', 'rules' => 'permit_empty'],
            'Ash' => ['label' => 'Ash', 'rules' => 'permit_empty'],
            'NFE' => ['label' => 'NFE', 'rules' => 'permit_empty'],
            'NDF' => ['label' => 'NDF', 'rules' => 'permit_empty'],
            'ADF' => ['label' => 'ADF', 'rules' => 'permit_empty'],
            'Total_CHO' => ['label' => 'Total CHO', 'rules' => 'permit_empty'],
            'Starch' => ['label' => 'Starch', 'rules' => 'permit_empty'],
            'Sugars' => ['label' => 'Sugars', 'rules' => 'permit_empty'],
            'Gross_Energy_MJ' => ['label' => 'Gross Energy MJ', 'rules' => 'permit_empty'],
            'Gross_energy_Kcal' => ['label' => 'Gross energy Kcal', 'rules' => 'permit_empty|numeric|max_length[4]'],
            'DE_Fish_Carni' => ['label' => 'DE Fish Carni', 'rules' => 'permit_empty|numeric|max_length[4]'],
            'DE_Fish_Omni' => ['label' => 'DE Fish Omni', 'rules' => 'permit_empty|numeric|max_length[4]'],
            'DE_Carp' => ['label' => 'DE Carp', 'rules' => 'permit_empty|numeric|max_length[4]'],
            'DE_Shrimp' => ['label' => 'DE Shrimp', 'rules' => 'permit_empty|numeric|max_length[4]'],
            'DE_Porcine' => ['label' => 'DE Porcine', 'rules' => 'permit_empty'],
            'DE_Poultry' => ['label' => 'DE Poultry', 'rules' => 'permit_empty'],
            'ME_Fish' => ['label' => 'ME Fish', 'rules' => 'permit_empty|numeric|max_length[4]'],
            'ME_Guelph_Fish_Carni' => ['label' => 'ME Guelph Fish Carni', 'rules' => 'permit_empty'],
            'ME_Guelph_Fish_Omni' => ['label' => 'ME Guelph Fish Omni', 'rules' => 'permit_empty'],
            'ME_Guelph_Carp' => ['label' => 'ME Guelph Carp', 'rules' => 'permit_empty'],
            'ME_Guelph_Shrimp' => ['label' => 'ME Guelph Shrimp', 'rules' => 'permit_empty'],
            'ME_Poultry' => ['label' => 'ME Poultry', 'rules' => 'permit_empty'],
            'ME_Porcine' => ['label' => 'ME Porcine', 'rules' => 'permit_empty'],
            'Arginine' => ['label' => 'Arginine', 'rules' => 'permit_empty'],
            'Histidine' => ['label' => 'Histidine', 'rules' => 'permit_empty'],
            'Isoleucine' => ['label' => 'Isoleucine', 'rules' => 'permit_empty'],
            'Leucine' => ['label' => 'Leucine', 'rules' => 'permit_empty'],
            'Lysine' => ['label' => 'Lysine', 'rules' => 'permit_empty'],
            'Methionine' => ['label' => 'Methionine', 'rules' => 'permit_empty'],
            'Phenylalanine' => ['label' => 'Phenylalanine', 'rules' => 'permit_empty'],
            'Threonine' => ['label' => 'Threonine', 'rules' => 'permit_empty'],
            'Tryptophan' => ['label' => 'Tryptophan', 'rules' => 'permit_empty'],
            'Valine' => ['label' => 'Valine', 'rules' => 'permit_empty'],
            'Cystine' => ['label' => 'Cystine', 'rules' => 'permit_empty'],
            'TSAA_Met_Cys' => ['label' => 'TSAA Met Cys', 'rules' => 'permit_empty'],
            'Tyrosine' => ['label' => 'Tyrosine', 'rules' => 'permit_empty'],
            'Phe_Tyr' => ['label' => 'Phe Tyr', 'rules' => 'permit_empty'],
            'Glutamic' => ['label' => 'Glutamic', 'rules' => 'permit_empty'],
            'Aspartic' => ['label' => 'Aspartic', 'rules' => 'permit_empty'],
            'Glycine' => ['label' => 'Glycine', 'rules' => 'permit_empty'],
            'Serine' => ['label' => 'Serine', 'rules' => 'permit_empty'],
            'Alanine' => ['label' => 'Alanine', 'rules' => 'permit_empty'],
            'Sum_EAAs' => ['label' => 'Sum EAAs', 'rules' => 'permit_empty'],
            'Sum_NEAAs' => ['label' => 'Sum NEAAs', 'rules' => 'permit_empty'],
            'Taurine' => ['label' => 'Taurine', 'rules' => 'permit_empty'],
            'Arg_Coeff' => ['label' => 'Arg Coeff', 'rules' => 'permit_empty'],
            'His_Coeff' => ['label' => 'His Coeff', 'rules' => 'permit_empty'],
            'Ile_Coeff' => ['label' => 'Ile Coeff', 'rules' => 'permit_empty'],
            'Leu_Coeff' => ['label' => 'Leu Coeff', 'rules' => 'permit_empty'],
            'Lys_Coeff' => ['label' => 'Lys Coeff', 'rules' => 'permit_empty'],
            'Met_Coeff' => ['label' => 'Met Coeff', 'rules' => 'permit_empty'],
            'Phe_Coeff' => ['label' => 'Phe Coeff', 'rules' => 'permit_empty'],
            'Thr_Coeff' => ['label' => 'Thr Coeff', 'rules' => 'permit_empty'],
            'Trp_Coeff' => ['label' => 'Trp Coeff', 'rules' => 'permit_empty'],
            'Val_Coeff' => ['label' => 'Val Coeff', 'rules' => 'permit_empty'],
            'Dig_Arg_fish' => ['label' => 'Dig Arg fish', 'rules' => 'permit_empty'],
            'Dig_His_fish' => ['label' => 'Dig His fish', 'rules' => 'permit_empty'],
            'Dig_Ile_fish' => ['label' => 'Dig Ile fish', 'rules' => 'permit_empty'],
            'Dig_Leu_fish' => ['label' => 'Dig Leu fish', 'rules' => 'permit_empty'],
            'Dig_Lys_fish' => ['label' => 'Dig Lys fish', 'rules' => 'permit_empty'],
            'Dig_Met_fish' => ['label' => 'Dig Met fish', 'rules' => 'permit_empty'],
            'Dig_Phe_fish' => ['label' => 'Dig Phe fish', 'rules' => 'permit_empty'],
            'Dig_Thr_fish' => ['label' => 'Dig Thr fish', 'rules' => 'permit_empty'],
            'Dig_Trp_fish' => ['label' => 'Dig Trp fish', 'rules' => 'permit_empty'],
            'Dig_Val_fish' => ['label' => 'Dig Val fish', 'rules' => 'permit_empty'],
            'Dig_Cys_fish' => ['label' => 'Dig Cys fish', 'rules' => 'permit_empty'],
            'Dig_TSAA_Met_Cys' => ['label' => 'Dig TSAA Met Cys', 'rules' => 'permit_empty'],
            'Dig_Tyr_fish' => ['label' => 'Dig Tyr fish', 'rules' => 'permit_empty'],
            'Calcium' => ['label' => 'Calcium', 'rules' => 'permit_empty'],
            'Phosphorus' => ['label' => 'Phosphorus', 'rules' => 'permit_empty'],
            'Ca_Coeff' => ['label' => 'Ca Coeff', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'P_coeff' => ['label' => 'P coeff', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'Phytate_P' => ['label' => 'Phytate P', 'rules' => 'permit_empty'],
            'Bone_P' => ['label' => 'Bone P', 'rules' => 'permit_empty'],
            'Cellular_P' => ['label' => 'Cellular P', 'rules' => 'permit_empty'],
            'Monobasic_P' => ['label' => 'Monobasic P', 'rules' => 'permit_empty'],
            'Dibasic_P' => ['label' => 'Dibasic P', 'rules' => 'permit_empty'],
            'Tribasic_P' => ['label' => 'Tribasic P', 'rules' => 'permit_empty'],
            'Dig_P_Carni' => ['label' => 'Dig P Carni', 'rules' => 'permit_empty'],
            'Dig_P_Omni' => ['label' => 'Dig P Omni', 'rules' => 'permit_empty'],
            'Dig_P_Carp' => ['label' => 'Dig P Carp', 'rules' => 'permit_empty'],
            'Dig_P_Shrimp' => ['label' => 'Dig P Shrimp', 'rules' => 'permit_empty'],
            'Sodium' => ['label' => 'Sodium', 'rules' => 'permit_empty'],
            'Chlorine' => ['label' => 'Chlorine', 'rules' => 'permit_empty'],
            'Potassium' => ['label' => 'Potassium', 'rules' => 'permit_empty'],
            'Magnesium' => ['label' => 'Magnesium', 'rules' => 'permit_empty'],
            'Sulfur' => ['label' => 'Sulfur', 'rules' => 'permit_empty'],
            'Copper' => ['label' => 'Copper', 'rules' => 'permit_empty'],
            'Iron' => ['label' => 'Iron', 'rules' => 'permit_empty'],
            'Manganese' => ['label' => 'Manganese', 'rules' => 'permit_empty'],
            'Selenium' => ['label' => 'Selenium', 'rules' => 'permit_empty'],
            'Zinc' => ['label' => 'Zinc', 'rules' => 'permit_empty'],
            'Iodine' => ['label' => 'Iodine', 'rules' => 'permit_empty'],
            'Cobalt' => ['label' => 'Cobalt', 'rules' => 'permit_empty'],
            'Biotin_B7' => ['label' => 'Biotin B7', 'rules' => 'permit_empty'],
            'Folic_acid_B9' => ['label' => 'Folic acid B9', 'rules' => 'permit_empty'],
            'Niacin_B3' => ['label' => 'Niacin B3', 'rules' => 'permit_empty'],
            'Pantothenic_Acid_B5' => ['label' => 'Pantothenic Acid B5', 'rules' => 'permit_empty'],
            'Pyridoxine_B6' => ['label' => 'Pyridoxine B6', 'rules' => 'permit_empty'],
            'Riboflavin_B2' => ['label' => 'Riboflavin B2', 'rules' => 'permit_empty'],
            'Thiamin_B1' => ['label' => 'Thiamin B1', 'rules' => 'permit_empty'],
            'Vitamin_B12' => ['label' => 'Vitamin B12', 'rules' => 'permit_empty'],
            'Vitamin_C' => ['label' => 'Vitamin C', 'rules' => 'permit_empty'],
            'Vitamin_A' => ['label' => 'Vitamin A', 'rules' => 'permit_empty'],
            'Vitamin_D' => ['label' => 'Vitamin D', 'rules' => 'permit_empty'],
            'Vitamin_E' => ['label' => 'Vitamin E', 'rules' => 'permit_empty'],
            'Vitamin_K' => ['label' => 'Vitamin K', 'rules' => 'permit_empty'],
            'Choline' => ['label' => 'Choline', 'rules' => 'permit_empty'],
            'Inositol' => ['label' => 'Inositol', 'rules' => 'permit_empty'],
            'Beta_Carotene' => ['label' => 'Beta Carotene', 'rules' => 'permit_empty'],
            'Xanthophylls' => ['label' => 'Xanthophylls', 'rules' => 'permit_empty|numeric|max_length[4]'],
            'Antioxidant' => ['label' => 'Antioxidant', 'rules' => 'permit_empty'],
            'ADC_DM_fish' => ['label' => 'ADC DM fish', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'ADC_CP_fish' => ['label' => 'ADC CP fish', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'ADC_Lipid_fish' => ['label' => 'ADC Lipid fish', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'ADC_GE_fish' => ['label' => 'ADC GE fish', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'ADC_Total_CHO_fish' => ['label' => 'ADC Total CHO fish', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'ADC_Starch_fish' => ['label' => 'ADC Starch fish', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'ADC_Starch_Carni' => ['label' => 'ADC Starch Carni', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'ADC_Starch_Omni' => ['label' => 'ADC Starch Omni', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'Dig_DM_fish' => ['label' => 'Dig DM fish', 'rules' => 'permit_empty'],
            'Dig_CP_fish' => ['label' => 'Dig CP fish', 'rules' => 'permit_empty'],
            'Dig_Lipid_fish' => ['label' => 'Dig Lipid fish', 'rules' => 'permit_empty'],
            'Dig_GE_DE_fish_Kcal' => ['label' => 'Dig GE DE fish Kcal', 'rules' => 'permit_empty|numeric|max_length[4]'],
            'Dig_Total_CHO_fish' => ['label' => 'Dig Total CHO fish', 'rules' => 'permit_empty'],
            'Dig_Starch_fish' => ['label' => 'Dig Starch fish', 'rules' => 'permit_empty'],
            'Dig_Starch_carni' => ['label' => 'Dig Starch carni', 'rules' => 'permit_empty'],
            'Dig_Starch_Omni' => ['label' => 'Dig Starch Omni', 'rules' => 'permit_empty'],
            'ADC_Arg_fish' => ['label' => 'ADC Arg fish', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'ADC_His_fish' => ['label' => 'ADC His fish', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'ADC_Ile_fish' => ['label' => 'ADC Ile fish', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'ADC_Leu_fish' => ['label' => 'ADC Leu fish', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'ADC_Lys_fish' => ['label' => 'ADC Lys fish', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'ADC_Met_fish' => ['label' => 'ADC Met fish', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'ADC_Phe_fish' => ['label' => 'ADC Phe fish', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'ADC_Thr_fish' => ['label' => 'ADC Thr fish', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'ADC_Trp_fish' => ['label' => 'ADC Trp fish', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'ADC_Val_fish' => ['label' => 'ADC Val fish', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'ADC_Cys_fish' => ['label' => 'ADC Cys fish', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'ADC_Tyr_fish' => ['label' => 'ADC Tyr fish', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'Palmitic_16_0' => ['label' => 'Palmitic 16 0', 'rules' => 'permit_empty'],
            'Stearic_18_0' => ['label' => 'Stearic 18 0', 'rules' => 'permit_empty'],
            'Oleic_18_1_n_9' => ['label' => 'Oleic 18 1 n 9', 'rules' => 'permit_empty'],
            'Linoleic_18_2_n_6' => ['label' => 'Linoleic 18 2 n 6', 'rules' => 'permit_empty'],
            'Linolenic_18_3_n_3' => ['label' => 'Linolenic 18 3 n 3', 'rules' => 'permit_empty'],
            'Arachidonic_20_4_n_6' => ['label' => 'Arachidonic 20 4 n 6', 'rules' => 'permit_empty'],
            'EPA_20_5_n_3' => ['label' => 'EPA 20 5 n 3', 'rules' => 'permit_empty'],
            'DHA_22_6_n_3' => ['label' => 'DHA 22 6 n 3', 'rules' => 'permit_empty'],
            'EPA_DHA' => ['label' => 'EPA DHA', 'rules' => 'permit_empty'],
            'SAFA' => ['label' => 'SAFA', 'rules' => 'permit_empty'],
            'MUFA' => ['label' => 'MUFA', 'rules' => 'permit_empty'],
            'PUFA' => ['label' => 'PUFA', 'rules' => 'permit_empty'],
            'Sum_n_3' => ['label' => 'Sum n 3', 'rules' => 'permit_empty'],
            'Sum_n_6' => ['label' => 'Sum n 6', 'rules' => 'permit_empty'],
            'Phospholipids' => ['label' => 'Phospholipids', 'rules' => 'permit_empty'],
            'Cholesterol' => ['label' => 'Cholesterol', 'rules' => 'permit_empty|numeric|max_length[5]'],
            'Plant_sterols' => ['label' => 'Plant sterols', 'rules' => 'permit_empty|numeric|max_length[5]'],
            'Coeff_18_2_n_6' => ['label' => 'Coeff 18 2 n 6', 'rules' => 'permit_empty'],
            'Coeff_18_3_n_3' => ['label' => 'Coeff 18 3 n 3', 'rules' => 'permit_empty'],
            'Coeff_20_4_n_6' => ['label' => 'Coeff 20 4 n 6', 'rules' => 'permit_empty'],
            'Coeff_20_5_n_3' => ['label' => 'Coeff 20 5 n 3', 'rules' => 'permit_empty'],
            'Coeff_22_6_n_3' => ['label' => 'Coeff 22 6 n 3', 'rules' => 'permit_empty'],
            'Coeff_SAFA' => ['label' => 'Coeff SAFA', 'rules' => 'permit_empty'],
            'Coeff_MUFA' => ['label' => 'Coeff MUFA', 'rules' => 'permit_empty'],
            'Coeff_PUFA' => ['label' => 'Coeff PUFA', 'rules' => 'permit_empty'],
            'Aflatoxin_B' => ['label' => 'Aflatoxin B', 'rules' => 'permit_empty'],
            'Deoxynivalenol_DON' => ['label' => 'Deoxynivalenol DON', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'Zeralenone_ZON' => ['label' => 'Zeralenone ZON', 'rules' => 'permit_empty'],
            'Fumonicin_FUM' => ['label' => 'Fumonicin FUM', 'rules' => 'permit_empty|numeric|max_length[4]'],
            'Anti_trypsic_factors' => ['label' => 'Anti trypsic factors', 'rules' => 'permit_empty'],
            'Gossypol' => ['label' => 'Gossypol', 'rules' => 'permit_empty'],
            'Phytic_Acid' => ['label' => 'Phytic Acid', 'rules' => 'permit_empty'],
            'Glucosinolates' => ['label' => 'Glucosinolates', 'rules' => 'permit_empty'],
            'Sinapine' => ['label' => 'Sinapine', 'rules' => 'permit_empty'],
            'Tannins' => ['label' => 'Tannins', 'rules' => 'permit_empty'],
            'Lectins' => ['label' => 'Lectins', 'rules' => 'permit_empty'],
            'Cyanogens' => ['label' => 'Cyanogens', 'rules' => 'permit_empty'],
            'PCBs' => ['label' => 'PCBs', 'rules' => 'permit_empty'],
            'Dioxins' => ['label' => 'Dioxins', 'rules' => 'permit_empty'],
            'Soyasaponins' => ['label' => 'Soyasaponins', 'rules' => 'permit_empty'],
            'Isoflavones' => ['label' => 'Isoflavones', 'rules' => 'permit_empty'],
            'SIDC_DM_porcine' => ['label' => 'SIDC DM porcine', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'SIDC_CP_porcine' => ['label' => 'SIDC CP porcine', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Arg_porcine' => ['label' => 'SIDC Arg porcine', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_His_porcine' => ['label' => 'SIDC His porcine', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Ile_porcine' => ['label' => 'SIDC Ile porcine', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Leu_porcine' => ['label' => 'SIDC Leu porcine', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Lys_porcine' => ['label' => 'SIDC Lys porcine', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Met_porcine' => ['label' => 'SIDC Met porcine', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Phe_porcine' => ['label' => 'SIDC Phe porcine', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Thr_porcine' => ['label' => 'SIDC Thr porcine', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Trp_porcine' => ['label' => 'SIDC Trp porcine', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Val_porcine' => ['label' => 'SIDC Val porcine', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Cys_porcine' => ['label' => 'SIDC Cys porcine', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Tyr_porcine' => ['label' => 'SIDC Tyr porcine', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_DM_poultry' => ['label' => 'SIDC DM poultry', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_CP_poultry' => ['label' => 'SIDC CP poultry', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Arg_poultry' => ['label' => 'SIDC Arg poultry', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_His_poultry' => ['label' => 'SIDC His poultry', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Ile_poultry' => ['label' => 'SIDC Ile poultry', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Leu_poultry' => ['label' => 'SIDC Leu poultry', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Lys_poultry' => ['label' => 'SIDC Lys poultry', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Met_poultry' => ['label' => 'SIDC Met poultry', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Phe_poultry' => ['label' => 'SIDC Phe poultry', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Thr_poultry' => ['label' => 'SIDC Thr poultry', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Trp_poultry' => ['label' => 'SIDC Trp poultry', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Val_poultry' => ['label' => 'SIDC Val poultry', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Cys_poultry' => ['label' => 'SIDC Cys poultry', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Tyr_poultry' => ['label' => 'SIDC Tyr poultry', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SID_Arg_porcine' => ['label' => 'SID Arg porcine', 'rules' => 'permit_empty'],
            'SID_His_porcine' => ['label' => 'SID His porcine', 'rules' => 'permit_empty'],
            'SID_Ile_porcine' => ['label' => 'SID Ile porcine', 'rules' => 'permit_empty'],
            'SID_Leu_porcine' => ['label' => 'SID Leu porcine', 'rules' => 'permit_empty'],
            'SID_Lys_porcine' => ['label' => 'SID Lys porcine', 'rules' => 'permit_empty'],
            'SID_Met_porcine' => ['label' => 'SID Met porcine', 'rules' => 'permit_empty'],
            'SID_Phe_porcine' => ['label' => 'SID Phe porcine', 'rules' => 'permit_empty'],
            'SID_Thr_porcine' => ['label' => 'SID Thr porcine', 'rules' => 'permit_empty'],
            'SID_Trp_porcine' => ['label' => 'SID Trp porcine', 'rules' => 'permit_empty'],
            'SID_Val_porcine' => ['label' => 'SID Val porcine', 'rules' => 'permit_empty'],
            'SID_Cys_porcine' => ['label' => 'SID Cys porcine', 'rules' => 'permit_empty'],
            'SID_Tyr_porcine' => ['label' => 'SID Tyr porcine', 'rules' => 'permit_empty'],
            'SID_Arg_poultry' => ['label' => 'SID Arg poultry', 'rules' => 'permit_empty'],
            'SID_His_poultry' => ['label' => 'SID His poultry', 'rules' => 'permit_empty'],
            'SID_Ile_poultry' => ['label' => 'SID Ile poultry', 'rules' => 'permit_empty'],
            'SID_Leu_poultry' => ['label' => 'SID Leu poultry', 'rules' => 'permit_empty'],
            'SID_Lys_poultry' => ['label' => 'SID Lys poultry', 'rules' => 'permit_empty'],
            'SID_Met_poultry' => ['label' => 'SID Met poultry', 'rules' => 'permit_empty'],
            'SID_Phe_poultry' => ['label' => 'SID Phe poultry', 'rules' => 'permit_empty'],
            'SID_Thr_poultry' => ['label' => 'SID Thr poultry', 'rules' => 'permit_empty'],
            'SID_Trp_poultry' => ['label' => 'SID Trp poultry', 'rules' => 'permit_empty'],
            'SID_Val_poultry' => ['label' => 'SID Val poultry', 'rules' => 'permit_empty'],
            'SID_Cys_poultry' => ['label' => 'SID Cys poultry', 'rules' => 'permit_empty'],
            'SID_Tyr_poultry' => ['label' => 'SID Tyr poultry', 'rules' => 'permit_empty'],
            'percent' => ['label' => 'Percent', 'rules' => 'permit_empty'],

        ]);

        if ($this->validation->run($fields) == FALSE) {
            $response['success'] = false;
            $response['messages'] = $this->validation->listErrors();			
        } else {
            if ($this->formulationModel->insert($fields)) {												
                $response['success'] = true;
                $response['messages'] = 'Data has been inserted successfully';					
            } else {				
                $response['success'] = false;
                $response['messages'] = 'Insertion error!';				
            }
        }
		
        return $this->response->setJSON($response);	}

	public function edit()
	{
        $response = array();

        $id = $this->request->getPost('id');
        $percent = $this->request->getPost('percent');
        $fields['id'] = $id;      
        $fields['percent'] = $percent;

        $this->validation->setRules([
            'Ing_Code' => ['label' => 'Ing Code', 'rules' => 'permit_empty|numeric|max_length[5]'],
            'Ing_Descr_E' => ['label' => 'Ing Descr E', 'rules' => 'permit_empty|max_length[60]'],
            'Dry_Matter' => ['label' => 'Dry Matter', 'rules' => 'permit_empty'],
            'Moisture' => ['label' => 'Moisture', 'rules' => 'permit_empty'],
            'Crude_Protein' => ['label' => 'Crude Protein', 'rules' => 'permit_empty'],
            'Crude_Lipids' => ['label' => 'Crude Lipids', 'rules' => 'permit_empty'],
            'Crude_Fibre' => ['label' => 'Crude Fibre', 'rules' => 'permit_empty'],
            'Ash' => ['label' => 'Ash', 'rules' => 'permit_empty'],
            'NFE' => ['label' => 'NFE', 'rules' => 'permit_empty'],
            'NDF' => ['label' => 'NDF', 'rules' => 'permit_empty'],
            'ADF' => ['label' => 'ADF', 'rules' => 'permit_empty'],
            'Total_CHO' => ['label' => 'Total CHO', 'rules' => 'permit_empty'],
            'Starch' => ['label' => 'Starch', 'rules' => 'permit_empty'],
            'Sugars' => ['label' => 'Sugars', 'rules' => 'permit_empty'],
            'Gross_Energy_MJ' => ['label' => 'Gross Energy MJ', 'rules' => 'permit_empty'],
            'Gross_energy_Kcal' => ['label' => 'Gross energy Kcal', 'rules' => 'permit_empty|numeric|max_length[4]'],
            'DE_Fish_Carni' => ['label' => 'DE Fish Carni', 'rules' => 'permit_empty|numeric|max_length[4]'],
            'DE_Fish_Omni' => ['label' => 'DE Fish Omni', 'rules' => 'permit_empty|numeric|max_length[4]'],
            'DE_Carp' => ['label' => 'DE Carp', 'rules' => 'permit_empty|numeric|max_length[4]'],
            'DE_Shrimp' => ['label' => 'DE Shrimp', 'rules' => 'permit_empty|numeric|max_length[4]'],
            'DE_Porcine' => ['label' => 'DE Porcine', 'rules' => 'permit_empty'],
            'DE_Poultry' => ['label' => 'DE Poultry', 'rules' => 'permit_empty'],
            'ME_Fish' => ['label' => 'ME Fish', 'rules' => 'permit_empty|numeric|max_length[4]'],
            'ME_Guelph_Fish_Carni' => ['label' => 'ME Guelph Fish Carni', 'rules' => 'permit_empty'],
            'ME_Guelph_Fish_Omni' => ['label' => 'ME Guelph Fish Omni', 'rules' => 'permit_empty'],
            'ME_Guelph_Carp' => ['label' => 'ME Guelph Carp', 'rules' => 'permit_empty'],
            'ME_Guelph_Shrimp' => ['label' => 'ME Guelph Shrimp', 'rules' => 'permit_empty'],
            'ME_Poultry' => ['label' => 'ME Poultry', 'rules' => 'permit_empty'],
            'ME_Porcine' => ['label' => 'ME Porcine', 'rules' => 'permit_empty'],
            'Arginine' => ['label' => 'Arginine', 'rules' => 'permit_empty'],
            'Histidine' => ['label' => 'Histidine', 'rules' => 'permit_empty'],
            'Isoleucine' => ['label' => 'Isoleucine', 'rules' => 'permit_empty'],
            'Leucine' => ['label' => 'Leucine', 'rules' => 'permit_empty'],
            'Lysine' => ['label' => 'Lysine', 'rules' => 'permit_empty'],
            'Methionine' => ['label' => 'Methionine', 'rules' => 'permit_empty'],
            'Phenylalanine' => ['label' => 'Phenylalanine', 'rules' => 'permit_empty'],
            'Threonine' => ['label' => 'Threonine', 'rules' => 'permit_empty'],
            'Tryptophan' => ['label' => 'Tryptophan', 'rules' => 'permit_empty'],
            'Valine' => ['label' => 'Valine', 'rules' => 'permit_empty'],
            'Cystine' => ['label' => 'Cystine', 'rules' => 'permit_empty'],
            'TSAA_Met_Cys' => ['label' => 'TSAA Met Cys', 'rules' => 'permit_empty'],
            'Tyrosine' => ['label' => 'Tyrosine', 'rules' => 'permit_empty'],
            'Phe_Tyr' => ['label' => 'Phe Tyr', 'rules' => 'permit_empty'],
            'Glutamic' => ['label' => 'Glutamic', 'rules' => 'permit_empty'],
            'Aspartic' => ['label' => 'Aspartic', 'rules' => 'permit_empty'],
            'Glycine' => ['label' => 'Glycine', 'rules' => 'permit_empty'],
            'Serine' => ['label' => 'Serine', 'rules' => 'permit_empty'],
            'Alanine' => ['label' => 'Alanine', 'rules' => 'permit_empty'],
            'Sum_EAAs' => ['label' => 'Sum EAAs', 'rules' => 'permit_empty'],
            'Sum_NEAAs' => ['label' => 'Sum NEAAs', 'rules' => 'permit_empty'],
            'Taurine' => ['label' => 'Taurine', 'rules' => 'permit_empty'],
            'Arg_Coeff' => ['label' => 'Arg Coeff', 'rules' => 'permit_empty'],
            'His_Coeff' => ['label' => 'His Coeff', 'rules' => 'permit_empty'],
            'Ile_Coeff' => ['label' => 'Ile Coeff', 'rules' => 'permit_empty'],
            'Leu_Coeff' => ['label' => 'Leu Coeff', 'rules' => 'permit_empty'],
            'Lys_Coeff' => ['label' => 'Lys Coeff', 'rules' => 'permit_empty'],
            'Met_Coeff' => ['label' => 'Met Coeff', 'rules' => 'permit_empty'],
            'Phe_Coeff' => ['label' => 'Phe Coeff', 'rules' => 'permit_empty'],
            'Thr_Coeff' => ['label' => 'Thr Coeff', 'rules' => 'permit_empty'],
            'Trp_Coeff' => ['label' => 'Trp Coeff', 'rules' => 'permit_empty'],
            'Val_Coeff' => ['label' => 'Val Coeff', 'rules' => 'permit_empty'],
            'Dig_Arg_fish' => ['label' => 'Dig Arg fish', 'rules' => 'permit_empty'],
            'Dig_His_fish' => ['label' => 'Dig His fish', 'rules' => 'permit_empty'],
            'Dig_Ile_fish' => ['label' => 'Dig Ile fish', 'rules' => 'permit_empty'],
            'Dig_Leu_fish' => ['label' => 'Dig Leu fish', 'rules' => 'permit_empty'],
            'Dig_Lys_fish' => ['label' => 'Dig Lys fish', 'rules' => 'permit_empty'],
            'Dig_Met_fish' => ['label' => 'Dig Met fish', 'rules' => 'permit_empty'],
            'Dig_Phe_fish' => ['label' => 'Dig Phe fish', 'rules' => 'permit_empty'],
            'Dig_Thr_fish' => ['label' => 'Dig Thr fish', 'rules' => 'permit_empty'],
            'Dig_Trp_fish' => ['label' => 'Dig Trp fish', 'rules' => 'permit_empty'],
            'Dig_Val_fish' => ['label' => 'Dig Val fish', 'rules' => 'permit_empty'],
            'Dig_Cys_fish' => ['label' => 'Dig Cys fish', 'rules' => 'permit_empty'],
            'Dig_TSAA_Met_Cys' => ['label' => 'Dig TSAA Met Cys', 'rules' => 'permit_empty'],
            'Dig_Tyr_fish' => ['label' => 'Dig Tyr fish', 'rules' => 'permit_empty'],
            'Calcium' => ['label' => 'Calcium', 'rules' => 'permit_empty'],
            'Phosphorus' => ['label' => 'Phosphorus', 'rules' => 'permit_empty'],
            'Ca_Coeff' => ['label' => 'Ca Coeff', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'P_coeff' => ['label' => 'P coeff', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'Phytate_P' => ['label' => 'Phytate P', 'rules' => 'permit_empty'],
            'Bone_P' => ['label' => 'Bone P', 'rules' => 'permit_empty'],
            'Cellular_P' => ['label' => 'Cellular P', 'rules' => 'permit_empty'],
            'Monobasic_P' => ['label' => 'Monobasic P', 'rules' => 'permit_empty'],
            'Dibasic_P' => ['label' => 'Dibasic P', 'rules' => 'permit_empty'],
            'Tribasic_P' => ['label' => 'Tribasic P', 'rules' => 'permit_empty'],
            'Dig_P_Carni' => ['label' => 'Dig P Carni', 'rules' => 'permit_empty'],
            'Dig_P_Omni' => ['label' => 'Dig P Omni', 'rules' => 'permit_empty'],
            'Dig_P_Carp' => ['label' => 'Dig P Carp', 'rules' => 'permit_empty'],
            'Dig_P_Shrimp' => ['label' => 'Dig P Shrimp', 'rules' => 'permit_empty'],
            'Sodium' => ['label' => 'Sodium', 'rules' => 'permit_empty'],
            'Chlorine' => ['label' => 'Chlorine', 'rules' => 'permit_empty'],
            'Potassium' => ['label' => 'Potassium', 'rules' => 'permit_empty'],
            'Magnesium' => ['label' => 'Magnesium', 'rules' => 'permit_empty'],
            'Sulfur' => ['label' => 'Sulfur', 'rules' => 'permit_empty'],
            'Copper' => ['label' => 'Copper', 'rules' => 'permit_empty'],
            'Iron' => ['label' => 'Iron', 'rules' => 'permit_empty'],
            'Manganese' => ['label' => 'Manganese', 'rules' => 'permit_empty'],
            'Selenium' => ['label' => 'Selenium', 'rules' => 'permit_empty'],
            'Zinc' => ['label' => 'Zinc', 'rules' => 'permit_empty'],
            'Iodine' => ['label' => 'Iodine', 'rules' => 'permit_empty'],
            'Cobalt' => ['label' => 'Cobalt', 'rules' => 'permit_empty'],
            'Biotin_B7' => ['label' => 'Biotin B7', 'rules' => 'permit_empty'],
            'Folic_acid_B9' => ['label' => 'Folic acid B9', 'rules' => 'permit_empty'],
            'Niacin_B3' => ['label' => 'Niacin B3', 'rules' => 'permit_empty'],
            'Pantothenic_Acid_B5' => ['label' => 'Pantothenic Acid B5', 'rules' => 'permit_empty'],
            'Pyridoxine_B6' => ['label' => 'Pyridoxine B6', 'rules' => 'permit_empty'],
            'Riboflavin_B2' => ['label' => 'Riboflavin B2', 'rules' => 'permit_empty'],
            'Thiamin_B1' => ['label' => 'Thiamin B1', 'rules' => 'permit_empty'],
            'Vitamin_B12' => ['label' => 'Vitamin B12', 'rules' => 'permit_empty'],
            'Vitamin_C' => ['label' => 'Vitamin C', 'rules' => 'permit_empty'],
            'Vitamin_A' => ['label' => 'Vitamin A', 'rules' => 'permit_empty'],
            'Vitamin_D' => ['label' => 'Vitamin D', 'rules' => 'permit_empty'],
            'Vitamin_E' => ['label' => 'Vitamin E', 'rules' => 'permit_empty'],
            'Vitamin_K' => ['label' => 'Vitamin K', 'rules' => 'permit_empty'],
            'Choline' => ['label' => 'Choline', 'rules' => 'permit_empty'],
            'Inositol' => ['label' => 'Inositol', 'rules' => 'permit_empty'],
            'Beta_Carotene' => ['label' => 'Beta Carotene', 'rules' => 'permit_empty'],
            'Xanthophylls' => ['label' => 'Xanthophylls', 'rules' => 'permit_empty|numeric|max_length[4]'],
            'Antioxidant' => ['label' => 'Antioxidant', 'rules' => 'permit_empty'],
            'ADC_DM_fish' => ['label' => 'ADC DM fish', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'ADC_CP_fish' => ['label' => 'ADC CP fish', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'ADC_Lipid_fish' => ['label' => 'ADC Lipid fish', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'ADC_GE_fish' => ['label' => 'ADC GE fish', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'ADC_Total_CHO_fish' => ['label' => 'ADC Total CHO fish', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'ADC_Starch_fish' => ['label' => 'ADC Starch fish', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'ADC_Starch_Carni' => ['label' => 'ADC Starch Carni', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'ADC_Starch_Omni' => ['label' => 'ADC Starch Omni', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'Dig_DM_fish' => ['label' => 'Dig DM fish', 'rules' => 'permit_empty'],
            'Dig_CP_fish' => ['label' => 'Dig CP fish', 'rules' => 'permit_empty'],
            'Dig_Lipid_fish' => ['label' => 'Dig Lipid fish', 'rules' => 'permit_empty'],
            'Dig_GE_DE_fish_Kcal' => ['label' => 'Dig GE DE fish Kcal', 'rules' => 'permit_empty|numeric|max_length[4]'],
            'Dig_Total_CHO_fish' => ['label' => 'Dig Total CHO fish', 'rules' => 'permit_empty'],
            'Dig_Starch_fish' => ['label' => 'Dig Starch fish', 'rules' => 'permit_empty'],
            'Dig_Starch_carni' => ['label' => 'Dig Starch carni', 'rules' => 'permit_empty'],
            'Dig_Starch_Omni' => ['label' => 'Dig Starch Omni', 'rules' => 'permit_empty'],
            'ADC_Arg_fish' => ['label' => 'ADC Arg fish', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'ADC_His_fish' => ['label' => 'ADC His fish', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'ADC_Ile_fish' => ['label' => 'ADC Ile fish', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'ADC_Leu_fish' => ['label' => 'ADC Leu fish', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'ADC_Lys_fish' => ['label' => 'ADC Lys fish', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'ADC_Met_fish' => ['label' => 'ADC Met fish', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'ADC_Phe_fish' => ['label' => 'ADC Phe fish', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'ADC_Thr_fish' => ['label' => 'ADC Thr fish', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'ADC_Trp_fish' => ['label' => 'ADC Trp fish', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'ADC_Val_fish' => ['label' => 'ADC Val fish', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'ADC_Cys_fish' => ['label' => 'ADC Cys fish', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'ADC_Tyr_fish' => ['label' => 'ADC Tyr fish', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'Palmitic_16_0' => ['label' => 'Palmitic 16 0', 'rules' => 'permit_empty'],
            'Stearic_18_0' => ['label' => 'Stearic 18 0', 'rules' => 'permit_empty'],
            'Oleic_18_1_n_9' => ['label' => 'Oleic 18 1 n 9', 'rules' => 'permit_empty'],
            'Linoleic_18_2_n_6' => ['label' => 'Linoleic 18 2 n 6', 'rules' => 'permit_empty'],
            'Linolenic_18_3_n_3' => ['label' => 'Linolenic 18 3 n 3', 'rules' => 'permit_empty'],
            'Arachidonic_20_4_n_6' => ['label' => 'Arachidonic 20 4 n 6', 'rules' => 'permit_empty'],
            'EPA_20_5_n_3' => ['label' => 'EPA 20 5 n 3', 'rules' => 'permit_empty'],
            'DHA_22_6_n_3' => ['label' => 'DHA 22 6 n 3', 'rules' => 'permit_empty'],
            'EPA_DHA' => ['label' => 'EPA DHA', 'rules' => 'permit_empty'],
            'SAFA' => ['label' => 'SAFA', 'rules' => 'permit_empty'],
            'MUFA' => ['label' => 'MUFA', 'rules' => 'permit_empty'],
            'PUFA' => ['label' => 'PUFA', 'rules' => 'permit_empty'],
            'Sum_n_3' => ['label' => 'Sum n 3', 'rules' => 'permit_empty'],
            'Sum_n_6' => ['label' => 'Sum n 6', 'rules' => 'permit_empty'],
            'Phospholipids' => ['label' => 'Phospholipids', 'rules' => 'permit_empty'],
            'Cholesterol' => ['label' => 'Cholesterol', 'rules' => 'permit_empty|numeric|max_length[5]'],
            'Plant_sterols' => ['label' => 'Plant sterols', 'rules' => 'permit_empty|numeric|max_length[5]'],
            'Coeff_18_2_n_6' => ['label' => 'Coeff 18 2 n 6', 'rules' => 'permit_empty'],
            'Coeff_18_3_n_3' => ['label' => 'Coeff 18 3 n 3', 'rules' => 'permit_empty'],
            'Coeff_20_4_n_6' => ['label' => 'Coeff 20 4 n 6', 'rules' => 'permit_empty'],
            'Coeff_20_5_n_3' => ['label' => 'Coeff 20 5 n 3', 'rules' => 'permit_empty'],
            'Coeff_22_6_n_3' => ['label' => 'Coeff 22 6 n 3', 'rules' => 'permit_empty'],
            'Coeff_SAFA' => ['label' => 'Coeff SAFA', 'rules' => 'permit_empty'],
            'Coeff_MUFA' => ['label' => 'Coeff MUFA', 'rules' => 'permit_empty'],
            'Coeff_PUFA' => ['label' => 'Coeff PUFA', 'rules' => 'permit_empty'],
            'Aflatoxin_B' => ['label' => 'Aflatoxin B', 'rules' => 'permit_empty'],
            'Deoxynivalenol_DON' => ['label' => 'Deoxynivalenol DON', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'Zeralenone_ZON' => ['label' => 'Zeralenone ZON', 'rules' => 'permit_empty'],
            'Fumonicin_FUM' => ['label' => 'Fumonicin FUM', 'rules' => 'permit_empty|numeric|max_length[4]'],
            'Anti_trypsic_factors' => ['label' => 'Anti trypsic factors', 'rules' => 'permit_empty'],
            'Gossypol' => ['label' => 'Gossypol', 'rules' => 'permit_empty'],
            'Phytic_Acid' => ['label' => 'Phytic Acid', 'rules' => 'permit_empty'],
            'Glucosinolates' => ['label' => 'Glucosinolates', 'rules' => 'permit_empty'],
            'Sinapine' => ['label' => 'Sinapine', 'rules' => 'permit_empty'],
            'Tannins' => ['label' => 'Tannins', 'rules' => 'permit_empty'],
            'Lectins' => ['label' => 'Lectins', 'rules' => 'permit_empty'],
            'Cyanogens' => ['label' => 'Cyanogens', 'rules' => 'permit_empty'],
            'PCBs' => ['label' => 'PCBs', 'rules' => 'permit_empty'],
            'Dioxins' => ['label' => 'Dioxins', 'rules' => 'permit_empty'],
            'Soyasaponins' => ['label' => 'Soyasaponins', 'rules' => 'permit_empty'],
            'Isoflavones' => ['label' => 'Isoflavones', 'rules' => 'permit_empty'],
            'SIDC_DM_porcine' => ['label' => 'SIDC DM porcine', 'rules' => 'permit_empty|numeric|max_length[3]'],
            'SIDC_CP_porcine' => ['label' => 'SIDC CP porcine', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Arg_porcine' => ['label' => 'SIDC Arg porcine', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_His_porcine' => ['label' => 'SIDC His porcine', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Ile_porcine' => ['label' => 'SIDC Ile porcine', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Leu_porcine' => ['label' => 'SIDC Leu porcine', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Lys_porcine' => ['label' => 'SIDC Lys porcine', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Met_porcine' => ['label' => 'SIDC Met porcine', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Phe_porcine' => ['label' => 'SIDC Phe porcine', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Thr_porcine' => ['label' => 'SIDC Thr porcine', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Trp_porcine' => ['label' => 'SIDC Trp porcine', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Val_porcine' => ['label' => 'SIDC Val porcine', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Cys_porcine' => ['label' => 'SIDC Cys porcine', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Tyr_porcine' => ['label' => 'SIDC Tyr porcine', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_DM_poultry' => ['label' => 'SIDC DM poultry', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_CP_poultry' => ['label' => 'SIDC CP poultry', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Arg_poultry' => ['label' => 'SIDC Arg poultry', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_His_poultry' => ['label' => 'SIDC His poultry', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Ile_poultry' => ['label' => 'SIDC Ile poultry', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Leu_poultry' => ['label' => 'SIDC Leu poultry', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Lys_poultry' => ['label' => 'SIDC Lys poultry', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Met_poultry' => ['label' => 'SIDC Met poultry', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Phe_poultry' => ['label' => 'SIDC Phe poultry', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Thr_poultry' => ['label' => 'SIDC Thr poultry', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Trp_poultry' => ['label' => 'SIDC Trp poultry', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Val_poultry' => ['label' => 'SIDC Val poultry', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Cys_poultry' => ['label' => 'SIDC Cys poultry', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SIDC_Tyr_poultry' => ['label' => 'SIDC Tyr poultry', 'rules' => 'permit_empty|numeric|max_length[2]'],
            'SID_Arg_porcine' => ['label' => 'SID Arg porcine', 'rules' => 'permit_empty'],
            'SID_His_porcine' => ['label' => 'SID His porcine', 'rules' => 'permit_empty'],
            'SID_Ile_porcine' => ['label' => 'SID Ile porcine', 'rules' => 'permit_empty'],
            'SID_Leu_porcine' => ['label' => 'SID Leu porcine', 'rules' => 'permit_empty'],
            'SID_Lys_porcine' => ['label' => 'SID Lys porcine', 'rules' => 'permit_empty'],
            'SID_Met_porcine' => ['label' => 'SID Met porcine', 'rules' => 'permit_empty'],
            'SID_Phe_porcine' => ['label' => 'SID Phe porcine', 'rules' => 'permit_empty'],
            'SID_Thr_porcine' => ['label' => 'SID Thr porcine', 'rules' => 'permit_empty'],
            'SID_Trp_porcine' => ['label' => 'SID Trp porcine', 'rules' => 'permit_empty'],
            'SID_Val_porcine' => ['label' => 'SID Val porcine', 'rules' => 'permit_empty'],
            'SID_Cys_porcine' => ['label' => 'SID Cys porcine', 'rules' => 'permit_empty'],
            'SID_Tyr_porcine' => ['label' => 'SID Tyr porcine', 'rules' => 'permit_empty'],
            'SID_Arg_poultry' => ['label' => 'SID Arg poultry', 'rules' => 'permit_empty'],
            'SID_His_poultry' => ['label' => 'SID His poultry', 'rules' => 'permit_empty'],
            'SID_Ile_poultry' => ['label' => 'SID Ile poultry', 'rules' => 'permit_empty'],
            'SID_Leu_poultry' => ['label' => 'SID Leu poultry', 'rules' => 'permit_empty'],
            'SID_Lys_poultry' => ['label' => 'SID Lys poultry', 'rules' => 'permit_empty'],
            'SID_Met_poultry' => ['label' => 'SID Met poultry', 'rules' => 'permit_empty'],
            'SID_Phe_poultry' => ['label' => 'SID Phe poultry', 'rules' => 'permit_empty'],
            'SID_Thr_poultry' => ['label' => 'SID Thr poultry', 'rules' => 'permit_empty'],
            'SID_Trp_poultry' => ['label' => 'SID Trp poultry', 'rules' => 'permit_empty'],
            'SID_Val_poultry' => ['label' => 'SID Val poultry', 'rules' => 'permit_empty'],
            'SID_Cys_poultry' => ['label' => 'SID Cys poultry', 'rules' => 'permit_empty'],
            'SID_Tyr_poultry' => ['label' => 'SID Tyr poultry', 'rules' => 'permit_empty'],
            'percent' => ['label' => 'Percent', 'rules' => 'permit_empty'],
        ]);

        if ($this->validation->run($fields) == FALSE) {
            $response['success'] = false;
            $response['messages'] = $this->validation->listErrors();			
        } else {

            $data = $this->formulationModel->where('id' ,$this->request->getPost('id'))->first();
            //get single ingredient	
            $builder = $this->db->table('ingredients');		       
            $builder = $builder->where(array(
                    'Ing_Code' => $data->Ing_Code
                ));
            $result = $builder->get()->getResult();
            
            foreach($result as $key => $value){        
                //$fields['id'] = $this->request->getPost('id');
                $fields['Ing_Code'] = $value->Ing_Code;
                $fields['Ing_Descr_E'] = $value->Ing_Descr_E;
                $fields['Dry_Matter'] = ($value->Dry_Matter * $percent)/100;
                $fields['Moisture'] = ($value->Moisture * $percent)/100;
                $fields['Crude_Protein'] = ($value->Crude_Protein * $percent)/100;
                $fields['Crude_Lipids'] = ($value->Crude_Lipids * $percent)/100;
                $fields['Crude_Fibre'] = ($value->Crude_Fibre * $percent)/100;
                $fields['Ash'] = ($value->Ash * $percent)/100;
                $fields['NFE'] = ($value->NFE * $percent)/100;
                $fields['NDF'] = ($value->NDF * $percent)/100;
                $fields['ADF'] = ($value->ADF * $percent)/100;
                $fields['Total_CHO'] = ($value->Total_CHO * $percent)/100;
                $fields['Starch'] = ($value->Starch * $percent)/100;
                $fields['Sugars'] = ($value->Sugars * $percent)/100;
                $fields['Gross_Energy_MJ'] = ($value->Gross_Energy_MJ * $percent)/100;
                $fields['Gross_energy_Kcal'] = ($value->Gross_energy_Kcal * $percent)/100;
                $fields['DE_Fish_Carni'] = ($value->DE_Fish_Carni * $percent)/100;
                $fields['DE_Fish_Omni'] = ($value->DE_Fish_Omni * $percent)/100;
                $fields['DE_Carp'] = ($value->DE_Carp * $percent)/100;
                $fields['DE_Shrimp'] = ($value->DE_Shrimp * $percent)/100;
                $fields['DE_Porcine'] = ($value->DE_Porcine * $percent)/100;
                $fields['DE_Poultry'] = ($value->DE_Poultry * $percent)/100;
                $fields['ME_Fish'] = ($value->ME_Fish * $percent)/100;
                $fields['ME_Guelph_Fish_Carni'] = ($value->ME_Guelph_Fish_Carni * $percent)/100;
                $fields['ME_Guelph_Fish_Omni'] = ($value->ME_Guelph_Fish_Omni * $percent)/100;
                $fields['ME_Guelph_Carp'] = ($value->ME_Guelph_Carp * $percent)/100;
                $fields['ME_Guelph_Shrimp'] = ($value->ME_Guelph_Shrimp * $percent)/100;
                $fields['ME_Poultry'] = ($value->ME_Poultry * $percent)/100;
                $fields['ME_Porcine'] = ($value->ME_Porcine * $percent)/100;
                $fields['Arginine'] = ($value->Arginine * $percent)/100;
                $fields['Histidine'] = ($value->Histidine * $percent)/100;
                $fields['Isoleucine'] = ($value->Isoleucine * $percent)/100;
                $fields['Leucine'] = ($value->Leucine * $percent)/100;
                $fields['Lysine'] = ($value->Lysine * $percent)/100;
                $fields['Methionine'] = ($value->Methionine * $percent)/100;
                $fields['Phenylalanine'] = ($value->Phenylalanine * $percent)/100;
                $fields['Threonine'] = ($value->Threonine * $percent)/100;
                $fields['Tryptophan'] = ($value->Tryptophan * $percent)/100;
                $fields['Valine'] = ($value->Valine * $percent)/100;
                $fields['Cystine'] = ($value->Cystine * $percent)/100;
                $fields['TSAA_Met_Cys'] = ($value->TSAA_Met_Cys * $percent)/100;
                $fields['Tyrosine'] = ($value->Tyrosine * $percent)/100;
                $fields['Phe_Tyr'] = ($value->Phe_Tyr * $percent)/100;
                $fields['Glutamic'] = ($value->Glutamic * $percent)/100;
                $fields['Aspartic'] = ($value->Aspartic * $percent)/100;
                $fields['Glycine'] = ($value->Glycine * $percent)/100;
                $fields['Serine'] = ($value->Serine * $percent)/100;
                $fields['Alanine'] = ($value->Alanine * $percent)/100;
                $fields['Sum_EAAs'] = ($value->Sum_EAAs * $percent)/100;
                $fields['Sum_NEAAs'] = ($value->Sum_NEAAs * $percent)/100;
                $fields['Taurine'] = ($value->Taurine * $percent)/100;
                $fields['Arg_Coeff'] = ($value->Arg_Coeff * $percent)/100;
                $fields['His_Coeff'] = ($value->His_Coeff * $percent)/100;
                $fields['Ile_Coeff'] = ($value->Ile_Coeff * $percent)/100;
                $fields['Leu_Coeff'] = ($value->Leu_Coeff * $percent)/100;
                $fields['Lys_Coeff'] = ($value->Lys_Coeff * $percent)/100;
                $fields['Met_Coeff'] = ($value->Met_Coeff * $percent)/100;
                $fields['Phe_Coeff'] = ($value->Phe_Coeff * $percent)/100;
                $fields['Thr_Coeff'] = ($value->Thr_Coeff * $percent)/100;
                $fields['Trp_Coeff'] = ($value->Trp_Coeff * $percent)/100;
                $fields['Val_Coeff'] = ($value->Val_Coeff * $percent)/100;
                $fields['Dig_Arg_fish'] = ($value->Dig_Arg_fish * $percent)/100;
                $fields['Dig_His_fish'] = ($value->Dig_His_fish * $percent)/100;
                $fields['Dig_Ile_fish'] = ($value->Dig_Ile_fish * $percent)/100;
                $fields['Dig_Leu_fish'] = ($value->Dig_Leu_fish * $percent)/100;
                $fields['Dig_Lys_fish'] = ($value->Dig_Lys_fish * $percent)/100;
                $fields['Dig_Met_fish'] = ($value->Dig_Met_fish * $percent)/100;
                $fields['Dig_Phe_fish'] = ($value->Dig_Phe_fish * $percent)/100;
                $fields['Dig_Thr_fish'] = ($value->Dig_Thr_fish * $percent)/100;
                $fields['Dig_Trp_fish'] = ($value->Dig_Trp_fish * $percent)/100;
                $fields['Dig_Val_fish'] = ($value->Dig_Val_fish * $percent)/100;
                $fields['Dig_Cys_fish'] = ($value->Dig_Cys_fish * $percent)/100;
                $fields['Dig_TSAA_Met_Cys'] = ($value->Dig_TSAA_Met_Cys * $percent)/100;
                $fields['Dig_Tyr_fish'] = ($value->Dig_Tyr_fish * $percent)/100;
                $fields['Calcium'] = ($value->Calcium * $percent)/100;
                $fields['Phosphorus'] = ($value->Phosphorus * $percent)/100;
                $fields['Ca_Coeff'] = ($value->Ca_Coeff * $percent)/100;
                $fields['P_coeff'] = ($value->P_coeff * $percent)/100;
                $fields['Phytate_P'] = ($value->Phytate_P * $percent)/100;
                $fields['Bone_P'] = ($value->Bone_P * $percent)/100;
                $fields['Cellular_P'] = ($value->Cellular_P * $percent)/100;
                $fields['Monobasic_P'] = ($value->Monobasic_P * $percent)/100;
                $fields['Dibasic_P'] = ($value->Dibasic_P * $percent)/100;
                $fields['Tribasic_P'] = ($value->Tribasic_P * $percent)/100;
                $fields['Dig_P_Carni'] = ($value->Dig_P_Carni * $percent)/100;
                $fields['Dig_P_Omni'] = ($value->Dig_P_Omni * $percent)/100;
                $fields['Dig_P_Carp'] = ($value->Dig_P_Carp * $percent)/100;
                $fields['Dig_P_Shrimp'] = ($value->Dig_P_Shrimp * $percent)/100;
                $fields['Sodium'] = ($value->Sodium * $percent)/100;
                $fields['Chlorine'] = ($value->Chlorine * $percent)/100;
                $fields['Potassium'] = ($value->Potassium * $percent)/100;
                $fields['Magnesium'] = ($value->Magnesium * $percent)/100;
                $fields['Sulfur'] = ($value->Sulfur * $percent)/100;
                $fields['Copper'] = ($value->Copper * $percent)/100;
                $fields['Iron'] = ($value->Iron * $percent)/100;
                $fields['Manganese'] = ($value->Manganese * $percent)/100;
                $fields['Selenium'] = ($value->Selenium * $percent)/100;
                $fields['Zinc'] = ($value->Zinc * $percent)/100;
                $fields['Iodine'] = ($value->Iodine * $percent)/100;
                $fields['Cobalt'] = ($value->Cobalt * $percent)/100;
                $fields['Biotin_B7'] = ($value->Biotin_B7 * $percent)/100;
                $fields['Folic_acid_B9'] = ($value->folicAcidB9 * $percent)/100;
                $fields['Niacin_B3'] = ($value->niacinB3 * $percent)/100;
                $fields['Pantothenic_Acid_B5'] = ($value->pantothenicAcidB5 * $percent)/100;
                $fields['Pyridoxine_B6'] = ($value->pyridoxineB6 * $percent)/100;
                $fields['Riboflavin_B2'] = ($value->riboflavinB2 * $percent)/100;
                $fields['Thiamin_B1'] = ($value->thiaminB1 * $percent)/100;
                $fields['Vitamin_B12'] = ($value->vitaminB12 * $percent)/100;
                $fields['Vitamin_C'] = ($value->vitaminC * $percent)/100;
                $fields['Vitamin_A'] = ($value->vitaminA * $percent)/100;
                $fields['Vitamin_D'] = ($value->vitaminD * $percent)/100;
                $fields['Vitamin_E'] = ($value->vitaminE * $percent)/100;
                $fields['Vitamin_K'] = ($value->vitaminK * $percent)/100;
                $fields['Choline'] = ($value->choline * $percent)/100;
                $fields['Inositol'] = ($value->inositol * $percent)/100;
                $fields['Beta_Carotene'] = ($value->betaCarotene * $percent)/100;
                $fields['Xanthophylls'] = ($value->xanthophylls * $percent)/100;
                $fields['Antioxidant'] = ($value->antioxidant * $percent)/100;
                $fields['ADC_DM_fish'] = ($value->aDCDMFish * $percent)/100;
                $fields['ADC_CP_fish'] = ($value->aDCCPFish * $percent)/100;
                $fields['ADC_Lipid_fish'] = ($value->aDCLipidFish * $percent)/100;
                $fields['ADC_GE_fish'] = ($value->aDCGEFish * $percent)/100;
                $fields['ADC_Total_CHO_fish'] = ($value->aDCTotalCHOFish * $percent)/100;
                $fields['ADC_Starch_fish'] = ($value->aDCStarchFish * $percent)/100;
                $fields['ADC_Starch_Carni'] = ($value->aDCStarchCarni * $percent)/100;
                $fields['ADC_Starch_Omni'] = ($value->aDCStarchOmni * $percent)/100;
                $fields['Dig_DM_fish'] = ($value->digDMFish * $percent)/100;
                $fields['Dig_CP_fish'] = ($value->digCPFish * $percent)/100;
                $fields['Dig_Lipid_fish'] = ($value->digLipidFish * $percent)/100;
                $fields['Dig_GE_DE_fish_Kcal'] = ($value->digGEDEFishKcal * $percent)/100;
                $fields['Dig_Total_CHO_fish'] = ($value->digTotalCHOFish * $percent)/100;
                $fields['Dig_Starch_fish'] = ($value->digStarchFish * $percent)/100;
                $fields['Dig_Starch_carni'] = ($value->digStarchCarni * $percent)/100;
                $fields['Dig_Starch_Omni'] = ($value->digStarchOmni * $percent)/100;
                $fields['ADC_Arg_fish'] = ($value->aDCArgFish * $percent)/100;
                $fields['ADC_His_fish'] = ($value->aDCHisFish * $percent)/100;
                $fields['ADC_Ile_fish'] = ($value->aDCIleFish * $percent)/100;
                $fields['ADC_Leu_fish'] = ($value->aDCLeuFish * $percent)/100;
                $fields['ADC_Lys_fish'] = ($value->aDCLysFish * $percent)/100;
                $fields['ADC_Met_fish'] = ($value->aDCMetFish * $percent)/100;
                $fields['ADC_Phe_fish'] = ($value->aDCPheFish * $percent)/100;
                $fields['ADC_Thr_fish'] = ($value->aDCThrFish * $percent)/100;
                $fields['ADC_Trp_fish'] = ($value->aDCTrpFish * $percent)/100;
                $fields['ADC_Val_fish'] = ($value->aDCValFish * $percent)/100;
                $fields['ADC_Cys_fish'] = ($value->aDCCysFish * $percent)/100;
                $fields['ADC_Tyr_fish'] = ($value->aDCTyrFish * $percent)/100;
                $fields['Palmitic_16_0'] = ($value->palmitic160 * $percent)/100;
                $fields['Stearic_18_0'] = ($value->stearic180 * $percent)/100;
                $fields['Oleic_18_1_n_9'] = ($value->oleic181N9 * $percent)/100;
                $fields['Linoleic_18_2_n_6'] = ($value->linoleic182N6 * $percent)/100;
                $fields['Linolenic_18_3_n_3'] = ($value->linolenic183N3 * $percent)/100;
                $fields['Arachidonic_20_4_n_6'] = ($value->arachidonic204N6 * $percent)/100;
                $fields['EPA_20_5_n_3'] = ($value->ePA205N3 * $percent)/100;
                $fields['DHA_22_6_n_3'] = ($value->dHA226N3 * $percent)/100;
                $fields['EPA_DHA'] = ($value->ePADHA * $percent)/100;
                $fields['SAFA'] = ($value->sAFA * $percent)/100;
                $fields['MUFA'] = ($value->mUFA * $percent)/100;
                $fields['PUFA'] = ($value->pUFA * $percent)/100;
                $fields['Sum_n_3'] = ($value->sumN3 * $percent)/100;
                $fields['Sum_n_6'] = ($value->sumN6 * $percent)/100;
                $fields['Phospholipids'] = ($value->phospholipids * $percent)/100;
                $fields['Cholesterol'] = ($value->cholesterol * $percent)/100;
                $fields['Plant_sterols'] = ($value->plantSterols * $percent)/100;
                $fields['Coeff_18_2_n_6'] = ($value->coeff182N6 * $percent)/100;
                $fields['Coeff_18_3_n_3'] = ($value->coeff183N3 * $percent)/100;
                $fields['Coeff_20_4_n_6'] = ($value->coeff204N6 * $percent)/100;
                $fields['Coeff_20_5_n_3'] = ($value->coeff205N3 * $percent)/100;
                $fields['Coeff_22_6_n_3'] = ($value->coeff226N3 * $percent)/100;
                $fields['Coeff_SAFA'] = ($value->coeffSAFA * $percent)/100;
                $fields['Coeff_MUFA'] = ($value->coeffMUFA * $percent)/100;
                $fields['Coeff_PUFA'] = ($value->coeffPUFA * $percent)/100;
                $fields['Aflatoxin_B'] = ($value->aflatoxinB * $percent)/100;
                $fields['Deoxynivalenol_DON'] = ($value->deoxynivalenolDON * $percent)/100;
                $fields['Zeralenone_ZON'] = ($value->zeralenoneZON * $percent)/100;
                $fields['Fumonicin_FUM'] = ($value->fumonicinFUM * $percent)/100;
                $fields['Anti_trypsic_factors'] = ($value->antiTrypsicFactors * $percent)/100;
                $fields['Gossypol'] = ($value->gossypol * $percent)/100;
                $fields['Phytic_Acid'] = ($value->phyticAcid * $percent)/100;
                $fields['Glucosinolates'] = ($value->glucosinolates * $percent)/100;
                $fields['Sinapine'] = ($value->sinapine * $percent)/100;
                $fields['Tannins'] = ($value->tannins * $percent)/100;
                $fields['Lectins'] = ($value->lectins * $percent)/100;
                $fields['Cyanogens'] = ($value->cyanogens * $percent)/100;
                $fields['PCBs'] = ($value->pCBs * $percent)/100;
                $fields['Dioxins'] = ($value->dioxins * $percent)/100;
                $fields['Soyasaponins'] = ($value->soyasaponins * $percent)/100;
                $fields['Isoflavones'] = ($value->isoflavones * $percent)/100;
                $fields['SIDC_DM_porcine'] = ($value->sIDCDMPorcine * $percent)/100;
                $fields['SIDC_CP_porcine'] = ($value->sIDCCPPorcine * $percent)/100;
                $fields['SIDC_Arg_porcine'] = ($value->sIDCArgPorcine * $percent)/100;
                $fields['SIDC_His_porcine'] = ($value->sIDCHisPorcine * $percent)/100;
                $fields['SIDC_Ile_porcine'] = ($value->sIDCIlePorcine * $percent)/100;
                $fields['SIDC_Leu_porcine'] = ($value->sIDCLeuPorcine * $percent)/100;
                $fields['SIDC_Lys_porcine'] = ($value->sIDCLysPorcine * $percent)/100;
                $fields['SIDC_Met_porcine'] = ($value->sIDCMetPorcine * $percent)/100;
                $fields['SIDC_Phe_porcine'] = ($value->sIDCPhePorcine * $percent)/100;
                $fields['SIDC_Thr_porcine'] = ($value->sIDCThrPorcine * $percent)/100;
                $fields['SIDC_Trp_porcine'] = ($value->sIDCTrpPorcine * $percent)/100;
                $fields['SIDC_Val_porcine'] = ($value->sIDCValPorcine * $percent)/100;
                $fields['SIDC_Cys_porcine'] = ($value->sIDCCysPorcine * $percent)/100;
                $fields['SIDC_Tyr_porcine'] = ($value->sIDCTyrPorcine * $percent)/100;
                $fields['SIDC_DM_poultry'] = ($value->sIDCDMPoultry * $percent)/100;
                $fields['SIDC_CP_poultry'] = ($value->sIDCCPPoultry * $percent)/100;
                $fields['SIDC_Arg_poultry'] = ($value->sIDCArgPoultry * $percent)/100;
                $fields['SIDC_His_poultry'] = ($value->sIDCHisPoultry * $percent)/100;
                $fields['SIDC_Ile_poultry'] = ($value->sIDCIlePoultry * $percent)/100;
                $fields['SIDC_Leu_poultry'] = ($value->sIDCLeuPoultry * $percent)/100;
                $fields['SIDC_Lys_poultry'] = ($value->sIDCLysPoultry * $percent)/100;
                $fields['SIDC_Met_poultry'] = ($value->sIDCMetPoultry * $percent)/100;
                $fields['SIDC_Phe_poultry'] = ($value->sIDCPhePoultry * $percent)/100;
                $fields['SIDC_Thr_poultry'] = ($value->sIDCThrPoultry * $percent)/100;
                $fields['SIDC_Trp_poultry'] = ($value->sIDCTrpPoultry * $percent)/100;
                $fields['SIDC_Val_poultry'] = ($value->sIDCValPoultry * $percent)/100;
                $fields['SIDC_Cys_poultry'] = ($value->sIDCCysPoultry * $percent)/100;
                $fields['SIDC_Tyr_poultry'] = ($value->sIDCTyrPoultry * $percent)/100;
                $fields['SID_Arg_porcine'] = ($value->sIDArgPorcine * $percent)/100;
                $fields['SID_His_porcine'] = ($value->sIDHisPorcine * $percent)/100;
                $fields['SID_Ile_porcine'] = ($value->sIDIlePorcine * $percent)/100;
                $fields['SID_Leu_porcine'] = ($value->sIDLeuPorcine * $percent)/100;
                $fields['SID_Lys_porcine'] = ($value->sIDLysPorcine * $percent)/100;
                $fields['SID_Met_porcine'] = ($value->sIDMetPorcine * $percent)/100;
                $fields['SID_Phe_porcine'] = ($value->sIDPhePorcine * $percent)/100;
                $fields['SID_Thr_porcine'] = ($value->sIDThrPorcine * $percent)/100;
                $fields['SID_Trp_porcine'] = ($value->sIDTrpPorcine * $percent)/100;
                $fields['SID_Val_porcine'] = ($value->sIDValPorcine * $percent)/100;
                $fields['SID_Cys_porcine'] = ($value->sIDCysPorcine * $percent)/100;
                $fields['SID_Tyr_porcine'] = ($value->sIDTyrPorcine * $percent)/100;
                $fields['SID_Arg_poultry'] = ($value->sIDArgPoultry * $percent)/100;
                $fields['SID_His_poultry'] = ($value->sIDHisPoultry * $percent)/100;
                $fields['SID_Ile_poultry'] = ($value->sIDIlePoultry * $percent)/100;
                $fields['SID_Leu_poultry'] = ($value->sIDLeuPoultry * $percent)/100;
                $fields['SID_Lys_poultry'] = ($value->sIDLysPoultry * $percent)/100;
                $fields['SID_Met_poultry'] = ($value->sIDMetPoultry * $percent)/100;
                $fields['SID_Phe_poultry'] = ($value->sIDPhePoultry * $percent)/100;
                $fields['SID_Thr_poultry'] = ($value->sIDThrPoultry * $percent)/100;
                $fields['SID_Trp_poultry'] = ($value->sIDTrpPoultry * $percent)/100;
                $fields['SID_Val_poultry'] = ($value->sIDValPoultry * $percent)/100;
                $fields['SID_Cys_poultry'] = ($value->sIDCysPoultry * $percent)/100;
                $fields['SID_Tyr_poultry'] = ($value->sIDTyrPoultry * $percent)/100;
                $fields['percent'] = $percent;
            }

            if ($this->formulationModel->update($fields['id'], $fields)) {				
                $response['success'] = true;
                $response['messages'] = 'Successfully updated';					
            } else {				
                $response['success'] = false;
                $response['messages'] = 'Update error!';				
            }
        }
		
        return $this->response->setJSON($response);		
	}
	
	public function remove()
	{
		$response = array();		
		$id = $this->request->getPost('id');		
		if (!$this->validation->check($id, 'required|numeric')) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException();			
		} else {			
			if ($this->formulationModel->where('id', $id)->delete()) {								
				$response['success'] = true;
				$response['messages'] = 'Deletion succeeded';					
			} else {				
				$response['success'] = false;
				$response['messages'] = 'Deletion error!';				
			}
		}		
        return $this->response->setJSON($response);		
	}			
}	