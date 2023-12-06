<?php
// ADEL CODEIGNITER 4 CRUD GENERATOR

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\IngredientsModel;

class Ingredients extends BaseController
{
	
    protected $ingredientsModel;
    protected $validation;
	
	public function __construct()
	{
	    $this->ingredientsModel = new IngredientsModel();
       	$this->validation =  \Config\Services::validation();
		
	}
	
	public function index()
	{

	    $data = [
                'controller'    	=> 'ingredients',
                'title'     		=> 'Ingredients'				
			];
		
		return view('ingredients', $data);
			
	}

	public function getAll()
	{
 		$response = array();		
		
	    $data['data'] = array();
 
		$result = $this->ingredientsModel->select('id, Ing_Descr_E, Dry_Matter, Moisture, Crude_Protein, Crude_Lipids, Crude_Fibre, Ash, NFE, NDF, ADF, Total_CHO, Starch, Sugars, Gross_Energy_MJ, Gross_energy_Kcal, DE_Fish_Carni, DE_Fish_Omni, DE_Carp, DE_Shrimp, DE_Porcine, DE_Poultry, ME_Fish, ME_Guelph_Fish_Carni, ME_Guelph_Fish_Omni, ME_Guelph_Carp, ME_Guelph_Shrimp, ME_Poultry, ME_Porcine, Arginine, Histidine, Isoleucine, Leucine, Lysine, Methionine, Phenylalanine, Threonine, Tryptophan, Valine, Cystine, TSAA_Met_Cys, Tyrosine, Phe_Tyr, Glutamic, Aspartic, Glycine, Serine, Alanine, Sum_EAAs, Sum_NEAAs, Taurine, Arg_Coeff, His_Coeff, Ile_Coeff, Leu_Coeff, Lys_Coeff, Met_Coeff, Phe_Coeff, Thr_Coeff, Trp_Coeff, Val_Coeff, Dig_Arg_fish, Dig_His_fish, Dig_Ile_fish, Dig_Leu_fish, Dig_Lys_fish, Dig_Met_fish, Dig_Phe_fish, Dig_Thr_fish, Dig_Trp_fish, Dig_Val_fish, Dig_Cys_fish, Dig_TSAA_Met_Cys, Dig_Tyr_fish, Calcium, Phosphorus, Ca_Coeff, P_coeff, Phytate_P, Bone_P, Cellular_P, Monobasic_P, Dibasic_P, Tribasic_P, Dig_P_Carni, Dig_P_Omni, Dig_P_Carp, Dig_P_Shrimp, Sodium, Chlorine, Potassium, Magnesium, Sulfur, Copper, Iron, Manganese, Selenium, Zinc, Iodine, Cobalt, Biotin_B7, Folic_acid_B9, Niacin_B3, Pantothenic_Acid_B5, Pyridoxine_B6, Riboflavin_B2, Thiamin_B1, Vitamin_B12, Vitamin_C, Vitamin_A, Vitamin_D, Vitamin_E, Vitamin_K, Choline, Inositol, Beta_Carotene, Xanthophylls, Antioxidant, ADC_DM_fish, ADC_CP_fish, ADC_Lipid_fish, ADC_GE_fish, ADC_Total_CHO_fish, ADC_Starch_fish, ADC_Starch_Carni, ADC_Starch_Omni, Dig_DM_fish, Dig_CP_fish, Dig_Lipid_fish, Dig_GE_DE_fish_Kcal, Dig_Total_CHO_fish, Dig_Starch_fish, Dig_Starch_carni, Dig_Starch_Omni, ADC_Arg_fish, ADC_His_fish, ADC_Ile_fish, ADC_Leu_fish, ADC_Lys_fish, ADC_Met_fish, ADC_Phe_fish, ADC_Thr_fish, ADC_Trp_fish, ADC_Val_fish, ADC_Cys_fish, ADC_Tyr_fish, Palmitic_16_0, Stearic_18_0, Oleic_18_1_n_9, Linoleic_18_2_n_6, Linolenic_18_3_n_3, Arachidonic_20_4_n_6, EPA_20_5_n_3, DHA_22_6_n_3, EPA_DHA, SAFA, MUFA, PUFA, Sum_n_3, Sum_n_6, Phospholipids, Cholesterol, Plant_sterols, Coeff_18_2_n_6, Coeff_18_3_n_3, Coeff_20_4_n_6, Coeff_20_5_n_3, Coeff_22_6_n_3, Coeff_SAFA, Coeff_MUFA, Coeff_PUFA, Aflatoxin_B, Deoxynivalenol_DON, Zeralenone_ZON, Fumonicin_FUM, Anti_trypsic_factors, Gossypol, Phytic_Acid, Glucosinolates, Sinapine, Tannins, Lectins, Cyanogens, PCBs, Dioxins, Soyasaponins, Isoflavones, SIDC_DM_porcine, SIDC_CP_porcine, SIDC_Arg_porcine, SIDC_His_porcine, SIDC_Ile_porcine, SIDC_Leu_porcine, SIDC_Lys_porcine, SIDC_Met_porcine, SIDC_Phe_porcine, SIDC_Thr_porcine, SIDC_Trp_porcine, SIDC_Val_porcine, SIDC_Cys_porcine, SIDC_Tyr_porcine, SIDC_DM_poultry, SIDC_CP_poultry, SIDC_Arg_poultry, SIDC_His_poultry, SIDC_Ile_poultry, SIDC_Leu_poultry, SIDC_Lys_poultry, SIDC_Met_poultry, SIDC_Phe_poultry, SIDC_Thr_poultry, SIDC_Trp_poultry, SIDC_Val_poultry, SIDC_Cys_poultry, SIDC_Tyr_poultry, SID_Arg_porcine, SID_His_porcine, SID_Ile_porcine, SID_Leu_porcine, SID_Lys_porcine, SID_Met_porcine, SID_Phe_porcine, SID_Thr_porcine, SID_Trp_porcine, SID_Val_porcine, SID_Cys_porcine, SID_Tyr_porcine, SID_Arg_poultry, SID_His_poultry, SID_Ile_poultry, SID_Leu_poultry, SID_Lys_poultry, SID_Met_poultry, SID_Phe_poultry, SID_Thr_poultry, SID_Trp_poultry, SID_Val_poultry, SID_Cys_poultry, SID_Tyr_poultry')->findAll();
		
		foreach ($result as $key => $value) {
							
			$ops = '<div class="btn-group">';
			$ops .= '	<button type="button" class="btn btn-sm btn-info" onclick="edit('. $value->id .')"><i class="fa fa-edit"></i></button>';
			$ops .= '	<button type="button" class="btn btn-sm btn-danger" onclick="remove('. $value->id .')"><i class="fa fa-trash"></i></button>';
			$ops .= '</div>';
			
			$data['data'][$key] = array(
				$value->id,
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
			
			$data = $this->ingredientsModel->where('id' ,$id)->first();

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

        ]);

        if ($this->validation->run($fields) == FALSE) {

            $response['success'] = false;
            $response['messages'] = $this->validation->listErrors();
			
        } else {

            if ($this->ingredientsModel->insert($fields)) {
												
                $response['success'] = true;
                $response['messages'] = 'Data has been inserted successfully';	
				
            } else {
				
                $response['success'] = false;
                $response['messages'] = 'Insertion error!';
				
            }
        }
		
        return $this->response->setJSON($response);
	}

	public function edit()
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

        ]);

        if ($this->validation->run($fields) == FALSE) {

            $response['success'] = false;
            $response['messages'] = $this->validation->listErrors();
			
        } else {

            if ($this->ingredientsModel->update($fields['id'], $fields)) {
				
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
		
			if ($this->ingredientsModel->where('id', $id)->delete()) {
								
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