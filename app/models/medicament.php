<?php 
 use \core\models\app\app;

 /**
 * 
 */
 class medicament extends app
 {
 	
 	function __construct()
 	{
 		parent::__construct('medicament');

 		//echo self::$table;
 	}

 	function __get($key){

 		$method = 'get'.ucfirst($key);
 		$method = $this->{$method}();
 		return $method;
 	}
 	public function getAll($value='')
 	{
 		return app::query($value,__CLASS__,'ORDER BY nom_medicament');
 	}
 	public function addMedicament($value=[])
 	{
 		$param  = ['colm'=>'`nom_medicament`, `labo_medicament`, `idtype`','value'=>':nom_medicament,:labo_medicament,:idtype'];
 		$values = ['nom_medicament'=>$value['med'],'labo_medicament'=>$value['lab'],'idtype'=>$value['listType']];
 		return app::insert($param,$values,__CLASS__);
 	}
 	public function modifyMedicament($value=[])
 	{
 		$param  = ['param'=>'`nom_medicament`=:nom_medicament',
 		'condition'=>'idmedicament = :idmedicament'];
 		$values = ['idmedicament'=>$value['spe'],'nom_medicament'=>$value['Nspe']];
 		return app::update($param,$values,true);
 	}
 	public function find($value=[])
 	{
 		$param = ['colm'=>'*','condition'=>'idtype = :idtype'];
 		$values = ['idtype'=>$value['idtype']];

 		return app::prepare($param,$values,__CLASS__,true);
 	}
 	public function getUrl()
 	{
 		return 'accuiel/'.$this->id;
 	}
 }


 ?>