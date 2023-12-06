<?php
// ADEL CODEIGNITER 4 CRUD GENERATOR

namespace App\Models;
use CodeIgniter\Model;

class TempModel extends Model {
    
	protected $table = 'vw_sum';
	//protected $primaryKey = 'id';
	protected $returnType = 'object';
	protected $useSoftDeletes = false;
	protected $allowedFields = ['dryMatter','moisture','crudeProtein','crudeLipids','crudeFibre','ash','nFE','nDF','aDF','totalCHO','starch','sugars','grossEnergyMJ','grossEnergyKcal','dEFishCarni','dEFishOmni','dECarp','dEShrimp','dEPorcine','dEPoultry','mEFish','mEGuelphFishCarni','mEGuelphFishOmni','mEGuelphCarp','mEGuelphShrimp','mEPoultry','mEPorcine','arginine','histidine','isoleucine','leucine','lysine','methionine','phenylalanine','threonine','tryptophan','valine','cystine','tSAAMetCys','tyrosine','pheTyr','glutamic','aspartic','glycine','serine','alanine','sumEAAs','sumNEAAs','taurine','argCoeff','hisCoeff','ileCoeff','leuCoeff','lysCoeff','metCoeff','pheCoeff','thrCoeff','trpCoeff','valCoeff','digArgFish','digHisFish','digIleFish','digLeuFish','digLysFish','digMetFish','digPheFish','digThrFish','digTrpFish','digValFish','digCysFish','digTSAAMetCys','digTyrFish','calcium','phosphorus','caCoeff','pCoeff','phytateP','boneP','cellularP','monobasicP','dibasicP','tribasicP','digPCarni','digPOmni','digPCarp','digPShrimp','sodium','chlorine','potassium','magnesium','sulfur','copper','iron','manganese','selenium','zinc','iodine','cobalt','biotinB7','folicAcidB9','niacinB3','pantothenicAcidB5','pyridoxineB6','riboflavinB2','thiaminB1','vitaminB12','vitaminC','vitaminA','vitaminD','vitaminE','vitaminK','choline','inositol','betaCarotene','xanthophylls','antioxidant','aDCDMFish','aDCCPFish','aDCLipidFish','aDCGEFish','aDCTotalCHOFish','aDCStarchFish','aDCStarchCarni','aDCStarchOmni','digDMFish','digCPFish','digLipidFish','digGEDEFishKcal','digTotalCHOFish','digStarchFish','digStarchCarni','digStarchOmni','aDCArgFish','aDCHisFish','aDCIleFish','aDCLeuFish','aDCLysFish','aDCMetFish','aDCPheFish','aDCThrFish','aDCTrpFish','aDCValFish','aDCCysFish','aDCTyrFish','palmitic160','stearic180','oleic181N9','linoleic182N6','linolenic183N3','arachidonic204N6','ePA205N3','dHA226N3','ePADHA','sAFA','mUFA','pUFA','sumN3','sumN6','phospholipids','cholesterol','plantSterols','coeff182N6','coeff183N3','coeff204N6','coeff205N3','coeff226N3','coeffSAFA','coeffMUFA','coeffPUFA','aflatoxinB','deoxynivalenolDON','zeralenoneZON','fumonicinFUM','antiTrypsicFactors','gossypol','phyticAcid','glucosinolates','sinapine','tannins','lectins','cyanogens','pCBs','dioxins','soyasaponins','isoflavones','sIDCDMPorcine','sIDCCPPorcine','sIDCArgPorcine','sIDCHisPorcine','sIDCIlePorcine','sIDCLeuPorcine','sIDCLysPorcine','sIDCMetPorcine','sIDCPhePorcine','sIDCThrPorcine','sIDCTrpPorcine','sIDCValPorcine','sIDCCysPorcine','sIDCTyrPorcine','sIDCDMPoultry','sIDCCPPoultry','sIDCArgPoultry','sIDCHisPoultry','sIDCIlePoultry','sIDCLeuPoultry','sIDCLysPoultry','sIDCMetPoultry','sIDCPhePoultry','sIDCThrPoultry','sIDCTrpPoultry','sIDCValPoultry','sIDCCysPoultry','sIDCTyrPoultry','sIDArgPorcine','sIDHisPorcine','sIDIlePorcine','sIDLeuPorcine','sIDLysPorcine','sIDMetPorcine','sIDPhePorcine','sIDThrPorcine','sIDTrpPorcine','sIDValPorcine','sIDCysPorcine','sIDTyrPorcine','sIDArgPoultry','sIDHisPoultry','sIDIlePoultry','sIDLeuPoultry','sIDLysPoultry','sIDMetPoultry','sIDPhePoultry','sIDThrPoultry','sIDTrpPoultry','sIDValPoultry','sIDCysPoultry','sIDTyrPoultry','PRCNT'];
	protected $useTimestamps = false;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';
	protected $validationRules    = [];
	protected $validationMessages = [];
	protected $skipValidation     = true;    
	
}