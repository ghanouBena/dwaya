<?php 
 use \core\models\app\app;

 /**
 * 
 */
 class wilaya extends app
 {
 	
 	function __construct()
 	{
 		parent::__construct('wilaya');

 		//echo self::$table;
 	}

 	function __get($key){

 		$method = 'get'.ucfirst($key);
 		$method = $this->{$method}();
 		return $method;
 	}

 	public function getAll($value='')
 	{
 		return app::query($value,__CLASS__,'ORDER BY nom_wilaya');
 	}

 	public function find($value=[])
 	{
 		$param = ['colm'=>'*','condition'=>'idwilaya = :idwilaya'];
 		$values = ['idwilaya'=>$value['idwilaya']];

 		return app::prepare($param,$values,__CLASS__,true);
 	}
 	public function addwilaya($value=[])
 	{
 		$param  = ['colm'=>'`nom_wilaya`','value'=>':nom_wilaya'];
 		$values = ['nom_wilaya'=>$value['wilaya']];
 		return app::insert($param,$values,__CLASS__);
 	}
 	public function modifywilaya($value=[])
 	{
 		$param  = ['param'=>'`nom_wilaya`=:nom_wilaya',
 		'condition'=>'idwilaya = :idwilaya'];
 		$values = ['idwilaya'=>$value['listWilaya'],'nom_wilaya'=>$value['wilaya']];
 		return app::update($param,$values,true);
 	}
 	public function getUrl()
 	{
 		return 'accuiel/'.$this->id;
 	}
 }


 ?>