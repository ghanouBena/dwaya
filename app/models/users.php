<?php 
 use \core\models\app\app;

 /**
 * 
 */
 class users extends app
 {
 	
 	function __construct()
 	{
 		parent::__construct('users');

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

 	public function login($value=[])
 	{
 		$param  = ['colm'=>'*','condition'=>'username = :user AND password = :password'];
 		$values = ['user'=>$value['user'],'password'=>$value['pass']];
 		return app::prepare($param,$values,__CLASS__);
 	}

 	public function register($value=[])
 	{
 		$param  = ['colm'=>'`email_user`, `username`, `password`, `code_confirme`, `active`, `accept`, `niveau`',
 		'value'=>':email_user,:username,:password,:code_confirme,:active,:accept,:niveau'];
 		$values = ['email_user'=>$value['email'],
 				   'username'=>$value['username'],
 				   'password'=>$value['password'],
 				   'code_confirme'=>$value['code'],
 				   'active'=>$value['active'],
 				   'accept'=>$value['accept'],
 				   'niveau'=>$value['niveau']];
 		return app::insert($param,$values,true);
 	}

 	public function checkValidCode($value=[])
 	{
 		$param  = ['colm'=>'code_confirme','condition'=>'idusers = :iduser'];
 		$values = ['iduser'=>$value['iduser']];
 		return app::prepare($param,$values,__CLASS__);
 	}
 	public function activeAccount($value=[])
 	{
 		$param  = ['param'=>'active = :active','condition'=>'idusers = :iduser'];
 		$values = ['iduser'=>$value['iduser'],'active'=>1];
 		return app::update($param,$values,true);
 	}

 	public function acceptAccount($value=[])
 	{
 		$param  = ['param'=>'accept = :accept','condition'=>'idusers = :iduser'];
 		$values = ['iduser'=>$value['iduser'],'accept'=>1];
 		return app::update($param,$values,true);
 	}
 	public function updateAccount($value=[])
 	{
 		//print_r($value);die();
 		$param  = ['param'=>'`nom_user`=:nom_user,`prenom_user`=:prenom_user,`sexe`=:sexe,`data_nais`=:data_nais,`add_user`=:add_user,`tel_user`=:tel_user,`url_pic`=:url_pic,`complete`=:complete,`idquartie`=:idquartie,`idspecialite`=:idspecialite',
 		'condition'=>'idusers = :iduser'];
 		$values = [	'nom_user'=>$value['lname'],
 					'prenom_user'=>$value['fname'],
 					'sexe'=>$value['sexe'],
 					'data_nais'=>$value['b_day'],
 					'add_user'=>$value['add'],
 					'tel_user'=>$value['phone'],
 					'url_pic'=>$value['url_pic'],
 					'complete'=>1,
 					'idquartie'=>$value['quartie'],
 					'idspecialite'=>$value['spe'],
 					'iduser'=>$value['iduser']];
 		return app::update($param,$values,true);
 	}
 	public function find($values=[])
 	{
 		//print_r($values);die();
 		$param = ['colm'=>$values['colm'],'condition'=>$values['condition']];
 		

 		return app::prepare($param,$values['value'],__CLASS__,true);
 	}
 	public function getUserById($value='')
 	{
 		$pdo = \core\DB_P\DB::getPdo();
 		$prepare = $pdo->prepare("SELECT * FROM users u INNER JOIN quartie q ON q.idquartie = u.idquartie
 								  INNER JOIN commune co ON co.idcommune = q.idcommune 
 								  INNER JOIN wilaya wi ON wi.idwilaya = co.idwilaya
 								  WHERE u.idusers = :idusers");
 		$prepare->execute(['idusers'=>$value]);
 		
 		$prepare->setFetchMode(PDO::FETCH_CLASS,__CLASS__);
 		return $prepare->fetch();
 	}
 	public function deleteAccoount($value=[])
 	{
 		$param = 'idusers = :iduser';
 		$values = ['iduser'=>$value['iduser']];
 		return app::delete($param,$values,true);
 	}
 	public function getUrl($page='')
 	{
 		return '/'.$page.'/patientProfile/'.$this->idusers;
 	}

 	public function getCompose($page='')
 	{
 		return '/'.$page.'/compose/'.$this->email_user;
 	}

 	public function getMail($page='')
 	{
 		return '/'.$page.'/inbox/'.$this->idusers;
 	}
 }


 ?>