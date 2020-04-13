<?php 
 use \core\models\app\app;

 /**
 * 
 */
 class medicament_has_ordonnance extends app
 {
 	
 	function __construct()
 	{
 		parent::__construct('medicament_has_ordonnance');

 		//echo self::$table;
 	}

 	function __get($key){

 		$method = 'get'.ucfirst($key);
 		$method = $this->{$method}();
 		return $method;
 	}

 	public function find($value=[])
 	{
 		$param =$value['colm'];
 		

 		return app::query($param,__CLASS__,$value['values']);
 	}

 	public function addMedOrd($value=[])
 	{
 		$param  = ['colm'=>'`idmedicament`, `idordonnance`, `quantite`, `description`,`etat`, `quantite_reste`',
 				   'value'=>':idmedicament,:idordonnance,:quantite,:description,:etat,:quantite_reste'];
 		$count = count($value['medName']);
 		for($i = 0; $i<$count;$i++){
 			$values = ['idmedicament'=>$value['medName'][$i],
 				   	   'idordonnance'=>$value['idordonnance'],
 				   		'quantite'=>$value['NbBox'][$i],
 				   		'description'=>$value['des'][$i],
 				   		'etat'=>0,
 				   		'quantite_reste'=>$value['NbBox'][$i]];
 			$insert = app::insert($param,$values);
 			if($insert == false){
 				return false;
 			}
 		}
 		return true;
 	}
 	public function modifyMedOrd($value=[])
 	{
 		$param  = ['param'=>$value['param'],
 		'condition'=>$value['condition']];
 		$values = $value['values'];
 		//print_r($values);die();
 		return app::update($param,$values,true);
 	}
 	public function getUrl()
 	{
 		return 'accuiel/'.$this->id;
 	}
 }


 ?>