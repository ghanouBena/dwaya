<?php 
 use \core\models\app\app;

 /**
 * 
 */
 class type extends app
 {
 	
 	function __construct()
 	{
 		parent::__construct('type');

 		//echo self::$table;
 	}

 	function __get($key){

 		$method = 'get'.ucfirst($key);
 		$method = $this->{$method}();
 		return $method;
 	}
 	public function getAll($value='')
 	{
 		return app::query($value,__CLASS__,'ORDER BY nom_type');
 	}

 	public function addType($value=[])
 	{
 		$param  = ['colm'=>'`nom_type`','value'=>':nom_type'];
 		$values = ['nom_type'=>$value['addtype']];
 		return app::insert($param,$values,__CLASS__);
 	}
 	public function modifyType($value=[])
 	{
 		$param  = ['param'=>'`nom_type`=:nom_type',
 		'condition'=>'idtype = :idtype'];
 		$values = ['idtype'=>$value['typeOld'],'nom_type'=>$value['Ntype']];
 		return app::update($param,$values,true);
 	}
 	public function getUrl()
 	{
 		return 'accuiel/'.$this->id;
 	}
 }


 ?>