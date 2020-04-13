<?php 
 use \core\models\app\app;

 /**
 * 
 */
 class specialite extends app
 {
 	
 	function __construct()
 	{
 		parent::__construct('specialite');

 		//echo self::$table;
 	}

 	function __get($key){

 		$method = 'get'.ucfirst($key);
 		$method = $this->{$method}();
 		return $method;
 	}

 	public function getAll($value='')
 	{
 		return app::query($value,__CLASS__,'ORDER BY nom_sep');
 	}

 	public function find($value=[])
 	{
 		$param = ['colm'=>$value['colm'],'condition'=>$value['condition']];
 		$values = $value['values'];

 		return app::prepare($param,$values,__CLASS__,true);
 	}

 	public function addSpeciality($value=[])
 	{
 		$param  = ['colm'=>'`nom_sep`',
 		'value'=>':nom_sep'];
 		$values = ['nom_sep'=>$value['saveSpe']];
 		return app::insert($param,$values,true);
 	}
 	public function modifySpeciality($value=[])
 	{
 		$param  = ['param'=>'`nom_sep`=:nom_sep',
 		'condition'=>'idspecialite = :idspe'];
 		$values = ['nom_sep'=>$value['spe'],'idspe'=>$value['listSpe']];
 		return app::update($param,$values,true);
 	}
 	public function getUrl()
 	{
 		return 'accuiel/'.$this->id;
 	}
 }


 ?>