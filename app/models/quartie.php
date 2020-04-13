<?php 
 use \core\models\app\app;

 /**
 * 
 */
 class quartie extends app
 {
 	
 	function __construct()
 	{
 		parent::__construct('quartie');

 		//echo self::$table;
 	}

 	function __get($key){

 		$method = 'get'.ucfirst($key);
 		$method = $this->{$method}();
 		return $method;
 	}

 	public function find($value=[])
 	{
 		$param = ['colm'=>'*','condition'=>'idcommune = :idcommune'];
 		$values = ['idcommune'=>$value['idcommune']];

 		return app::prepare($param,$values,__CLASS__,true);
 	}

 	public function addQuartie($value=[])
 	{
 		$param  = ['colm'=>'`nom_quartie`, `idcommune`','value'=>':nom_quartie,:idcommune'];
 		$values = ['nom_quartie'=>$value['newDistrict'],'idcommune'=>$value['listCity']];
 		return app::insert($param,$values,__CLASS__);
 	}
 	public function modifyQuartie($value=[])
 	{
 		$param  = ['param'=>'`nom_quartie`=:nom_quartie',
 		'condition'=>'idquartie = :idquartie'];
 		$values = ['nom_quartie'=>$value['newDistrict'],'idquartie'=>$value['listQuartie']];
 		return app::update($param,$values,true);
 	}
 	public function getUrl()
 	{
 		return 'accuiel/'.$this->id;
 	}
 }


 ?>