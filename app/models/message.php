<?php 
 use \core\models\app\app;

 /**
 * 
 */
 class message extends app
 {
 	
 	function __construct()
 	{
 		parent::__construct('message');

 		//echo self::$table;
 	}
 	public function getAll($value='',$condition)
 	{
 		return app::query($value,__CLASS__,' ms INNER JOIN users u ON u.idusers = ms.formId 
 			LEFT JOIN files f on f.idmessage = ms.idmessage
 			WHERE '.$condition.'
 		 ORDER BY time_sent DESC');
 	}
 	function __get($key){
 		$key = explode('_', $key);
 		//print_r($key);die();
 		$method = 'get'.ucfirst($key[0]);
 		$method = $this->{$method}($key[1]);
 		return $method;
 	}
 	public function find($value=[])
 	{
 		$param = ['colm'=>$value['colm'],'condition'=>$value['condition']];
 		$values = $value['values'];

 		return app::prepare($param,$values,__CLASS__,true);
 	}

 	public function addMessage($value=[])
 	{
 		$id = $this->getUserID($value['to']);
 		$param  = ['colm'=>'`formId`, `toId`, `subject`, `message`, `time_sent`, `opened`',
 				   'value'=>':formId,:toId,:subject,:message,:time_sent,:opened'];
 		$values = ['formId'=>$_SESSION['users']['idusers'],'toId'=>$id['idusers'],'subject'=>$value['subject'],
 				   'message'=>$value['message'],'time_sent'=>date('Y-m-d H:i:s'),'opened'=>0];

 		return app::insert($param,$values,__CLASS__,true);
 	}
 	public function modifyCommune($value=[])
 	{
 		$param  = ['param'=>'`nom_commune`=:nom_commune',
 		'condition'=>'idcommune = :idcommune'];
 		$values = ['nom_commune'=>$value['city'],'idcommune'=>$value['listCity']];
 		return app::update($param,$values,true);
 	}
 	public function opened($value=[])
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
 		$query = $pdo->prepare('SELECT idusers FROM users WHERE email_user = :email'); 
 		$query->execute(['email'=>$value]);
 		return $query->fetch(PDO::FETCH_ASSOC);
 	}
 	public function getUrl()
 	{
 		return 'accuiel/'.$this->id;
 	}

 	public function getMail($page='')
 	{
 		return '/'.$page.'/displayMail/'.$this->idmessage;
 	}

 	public function getCompose($page='')
 	{
 		return '/'.$page.'/compose/'.$this->email_user;
 	}
 }


 ?>