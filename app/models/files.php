<?php 
 use \core\models\app\app;

 /**
 * 
 */
 class files extends app
 {
 	
 	function __construct()
 	{
 		parent::__construct('files');

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

 	public function addFile($value=[])
 	{
 		$param  = ['colm'=>'`url`, `idmessage`','value'=>':url,:idmessage'];
 		$values = ['url'=>$value['url'],'idmessage'=>$value['idmessage']];
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