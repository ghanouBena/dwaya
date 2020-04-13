<?php 
 use \core\models\app\app;

 /**
 * 
 */
 class commune extends app
 {
 	
 	function __construct()
 	{
 		parent::__construct('commune');

 		//echo self::$table;
 	}
 	public function getAll($value='')
 	{
 		return app::query($value,__CLASS__,'ORDER BY nom_commune');
 	}
 	function __get($key){

 		$method = 'get'.ucfirst($key);
 		$method = $this->{$method}();
 		return $method;
 	}
 	public function find($value=[])
 	{
 		$param = ['colm'=>'*','condition'=>'idwilaya = :idwilaya'];
 		$values = ['idwilaya'=>$value['idwilaya']];

 		return app::prepare($param,$values,__CLASS__,true);
 	}

 	public function addCommune($value=[])
 	{
 		$param  = ['colm'=>'`nom_commune`, `idwilaya`','value'=>':nom_commune,:idwilaya'];
 		$values = ['nom_commune'=>$value['newCity'],'idwilaya'=>$value['listWilaya']];
 		return app::insert($param,$values,__CLASS__);
 	}
 	public function modifyCommune($value=[])
 	{
 		$param  = ['param'=>'`nom_commune`=:nom_commune',
 		'condition'=>'idcommune = :idcommune'];
 		$values = ['nom_commune'=>$value['city'],'idcommune'=>$value['listCity']];
 		return app::update($param,$values,true);
 	}
 	public function getUrl()
 	{
 		return 'accuiel/'.$this->id;
 	}
 }


 ?>