<?php 
 use \core\models\app\app;

 /**
 * 
 */
 class ordonnance extends app
 {
 	
 	function __construct()
 	{
 		parent::__construct('ordonnance');

 		//echo self::$table;
 	}

 	function __get($key){
 		$key = explode('_', $key);
 		//print_r($key);die();
 		$method = 'get'.ucfirst($key[0]);
 		$method = $this->{$method}($key[1]);
 		return $method;
 	}

 	public function getAll($value='',$condition='')
 	{
 		return app::query($value,__CLASS__,$condition);
 	}

 	public function find($value=[])
 	{
 		$param = ['colm'=>$value['colm'],'condition'=>$value['condition']];
 		

 		return app::prepare($param,$value['values'],__CLASS__,true);
 	}

 	public function addOrd($value=[])
 	{
 		$username = $this->getUserID($value['username']);

 		$param  = ['colm'=>'`code_ordonnance`, `details`, `data_ordonnance`, `id_med`, `id_patient`',
 		           'value'=>':code_ordonnance,:details,:data_ordonnance,:id_med,:id_patient'];
 		$values = ['code_ordonnance'=>$value['code_ordonnance'],
 					'details'=>$value['details'],
 				   'data_ordonnance'=>$value['data_ordonnance'],
 				   'id_med'=>$_SESSION['users']['idusers'],
 				   'id_patient'=>$username['idusers']];
 				   //print_r($values);die();
 		return app::insert($param,$values,true);
 	}
 	public function modifyOrd($value=[])
 	{
 		$param  = ['param'=>'`nom_quartie`=:nom_quartie',
 		'condition'=>'idquartie ;  = :idquartie'];
 		$values = ['nom_quartie'=>$value['newDistrict'],'idquartie'=>$value['listQuartie']];
 		return app::update($param,$values,true);
 	}
 	public function deleteOrd($value=[])
 	{
 		$param = 'idordonnance = :idordonnance';
 		$values = ['idordonnance'=>$value['idordonnance']];
 		return app::delete($param,$values,true);
 	}

 	public function validOrd($value=[])
 	{
 		$param  = ['param'=>$value['param'],
 		'condition'=>$value['condition']];
 		$values = $value['values'];
 		//print_r($values);die();
 		return app::update($param,$values,true);
 	}
 	public function getUserID($value='')
 	{
 		$pdo = \core\DB_P\DB::getPdo();
 		$query = $pdo->prepare('SELECT idusers FROM users WHERE username = :username'); 
 		$query->execute(['username'=>$value]);
 		return $query->fetch(PDO::FETCH_ASSOC);
 	}
 	public function getUrl($page='')
 	{
 		return '/'.$page.'/ordonnance/'.$this->idordonnance;
 	}
 }


 ?>