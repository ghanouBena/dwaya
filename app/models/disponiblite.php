<?php 
 use \core\models\app\app;

 /**
 * 
 */
 class disponiblite extends app
 {
 	
 	function __construct()
 	{
 		parent::__construct('disponiblite');

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

 	public function addDispo($value=[])
 	{
 		$param  = ['colm'=>'`idmedicament`, `id_ph`, `quantite`, `prix_med`',
 				   'value'=>':idmedicament,:id_ph,:quantite,:prix_med'];
 		
 			$values = ['idmedicament'=>$value['med'],
 				   	   'id_ph'=>$value['id_ph'],
 				   		'quantite'=>$value['qnt'],
 				   		'prix_med'=>$value['prix_med']];
 		return	app::insert($param,$values);
 		 
 	}
 	public function modifyDisp($value=[])
 	{
 		$param  = ['param'=>$value['param'],
 		'condition'=>$value['condition']];
 		$values = $value['values'];
 		//print_r($values);die();
 		return app::update($param,$values,true);
 	}

 	public function getQuantite($values=[])
 	{
 		$param = ['colm'=>$values['colm'],'condition'=>$values['condition']];
 		

 		return app::prepare($param,$values['values'],__CLASS__);
 	}
 	public function getUrl()
 	{
 		return 'accuiel/'.$this->id;
 	}
 }


 ?>