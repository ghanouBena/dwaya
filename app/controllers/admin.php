<?php 

use \core\Controller\Controller;
/**
* 
*/
class Admin extends Controller
{
	
	function index()
	{
		if(isset($_SESSION['auth']) && $_SESSION['users']['niveau'] == 3){
		$this->view('admin/accueil',['page'=>'accueil']);
		}else{
			$this->view('login',['page'=>'accueil','msg'=>'you should to connect first']);
		}
	}
	//accounts 
	public function accounts()
	{
		if(isset($_SESSION['auth']) && $_SESSION['users']['niveau'] == 3){
		$user = $this->model('users');
		$accounts = $user->find(['colm'=>'*','value'=>['accept'=>0],'condition'=>'accept = :accept']);
		//var_dump($accounts);die();
		$this->view('admin/accounts',['page'=>'Accounts','accounts'=>$accounts]);
		}else{
			$this->view('login',['page'=>'Accounts','msg'=>'you should to connect first']);
		}
	}
	//addSpecialty and modifySpecialty
	public function speciality()
	{
		if(isset($_SESSION['auth']) && $_SESSION['users']['niveau'] == 3){
		$spe = $this->model('specialite');
		$allSpe = $spe->getAll('*');
		$this->view('admin/speciality',['page'=>'Speciality','speciality'=>$allSpe]);
		}else{
			$this->view('login',['page'=>'Speciality','msg'=>'you should to connect first']);
		}
	}
	public function addSpeciality()
	{	
		if(isset($_SESSION['auth']) && $_SESSION['users']['niveau'] == 3){
		if(isset($_POST['dataF'])){
			$spe = str_replace('&', '=', $_POST['dataF']);
			$data = $this->convertArray($spe);
			//print_r($data);die();
			$spec = $this->model('specialite');
			$id = $spec->addSpeciality($data);
			if($id){
				echo json_encode(['SUCCESS'=>true,'data'=>['id'=>$id,'name'=>$data['saveSpe']]]);
			}else{
				echo json_encode(['SUCCESS'=>true]);
			}
			
		}
		}else{
			$this->view('login',['page'=>'Speciality','msg'=>'you should to connect first']);
		}
	}
	public function modifySpeciality()
	{	
		if(isset($_SESSION['auth']) && $_SESSION['users']['niveau'] == 3){
		if(isset($_POST['dataF'])){
			$spe = str_replace('&', '=', $_POST['dataF']);
			$data = $this->convertArray($spe);
			//print_r($data);die();
			$spec = $this->model('specialite');
			$id = $spec->modifySpeciality($data);
			if($id){
				echo json_encode(['SUCCESS'=>true]);
			}else{
				echo json_encode(['SUCCESS'=>true]);
			}
			
		}
		}else{
			$this->view('login',['page'=>'Speciality','msg'=>'you should to connect first']);
		}
	}

	//addMedicament and modifyMedicament
	public function medicament()
	{
		if(isset($_SESSION['auth']) && $_SESSION['users']['niveau'] == 3){
		$type = $this->model('type');
		$allType = $type->getAll('*');
		$medicament = $this->model('medicament');
		$allMedicament = $medicament->getAll('*');
		$this->view('admin/medicament',['page'=>'Medicament','medicament'=>$allMedicament,'type'=>$allType]);
		}else{
			$this->view('login',['page'=>'Speciality','msg'=>'you should to connect first']);
		}
	}
	public function addMedicament()
	{
		if(isset($_SESSION['auth']) && $_SESSION['users']['niveau'] == 3){
		if(isset($_POST['dataF'])){
			$spe = str_replace('&', '=', $_POST['dataF']);
			$data = $this->convertArray($spe);
			//print_r($data);die();
			$spec = $this->model('medicament');
			$id = $spec->addMedicament($data);
			if($id){
				echo json_encode(['SUCCESS'=>true]);
			}else{
				echo json_encode(['SUCCESS'=>true]);
			}
			
		}
		}else{
			$this->view('login',['page'=>'Speciality','msg'=>'you should to connect first']);
		}
	}
	public function modifyMedicament()
	{
		if(isset($_SESSION['auth']) && $_SESSION['users']['niveau'] == 3){
		if(isset($_POST['dataF'])){
			$spe = str_replace('&', '=', $_POST['dataF']);
			$data = $this->convertArray($spe);
			//print_r($data);die();
			$spec = $this->model('medicament');
			$id = $spec->modifyMedicament($data);
			if($id){
				echo json_encode(['SUCCESS'=>true]);
			}else{
				echo json_encode(['SUCCESS'=>true]);
			}
			
		}
		}else{
			$this->view('login',['page'=>'Speciality','msg'=>'you should to connect first']);
		}
	}
	//add type and  modify type
	public function addType()
	{
		if(isset($_SESSION['auth']) && $_SESSION['users']['niveau'] == 3){
		if(isset($_POST['dataF'])){
			$spe = str_replace('&', '=', $_POST['dataF']);
			$data = $this->convertArray($spe);
			//print_r($data);die();
			$spec = $this->model('type');
			$id = $spec->addType($data);
			if($id){
				echo json_encode(['SUCCESS'=>true]);
			}else{
				echo json_encode(['SUCCESS'=>true]);
			}
			
		}
		}else{
			$this->view('login',['page'=>'Speciality','msg'=>'you should to connect first']);
		}
	}
	public function modifyType()
	{
		if(isset($_SESSION['auth']) && $_SESSION['users']['niveau'] == 3){
		if(isset($_POST['dataF'])){
			$spe = str_replace('&', '=', $_POST['dataF']);
			$data = $this->convertArray($spe);
			//print_r($data);die();
			$spec = $this->model('type');
			$id = $spec->modifyType($data);
			if($id){
				echo json_encode(['SUCCESS'=>true]);
			}else{
				echo json_encode(['SUCCESS'=>true]);
			}
			
		}
		}else{
			$this->view('login',['page'=>'Speciality','msg'=>'you should to connect first']);
		}
	}
 ////addWilaya and modifyWilaya
	public function wilaya()
	{
		$wilaya = $this->model('wilaya');
		$allWilaya = $wilaya->getAll('*');
		$this->view('admin/wilaya',['page'=>'Wilaya','wilaya'=>$allWilaya]);
	}
	public function addWilaya()
	{
		if(isset($_SESSION['auth']) && $_SESSION['users']['niveau'] == 3){
		if(isset($_POST['dataF'])){
			$spe = str_replace('&', '=', $_POST['dataF']);
			$data = $this->convertArray($spe);
			//print_r($data);die();
			$spec = $this->model('wilaya');
			$id = $spec->addWilaya($data);
			if($id){
				echo json_encode(['SUCCESS'=>true]);
			}else{
				echo json_encode(['SUCCESS'=>true]);
			}
			
		}
		}else{
			$this->view('login',['page'=>'Wilaya','msg'=>'you should to connect first']);
		}
	}
	public function modifyWilaya()
	{
		if(isset($_SESSION['auth']) && $_SESSION['users']['niveau'] == 3){
		if(isset($_POST['dataF'])){
			$spe = str_replace('&', '=', $_POST['dataF']);
			$data = $this->convertArray($spe);
			//print_r($data);die();
			$spec = $this->model('wilaya');
			$id = $spec->modifyWilaya($data);
			if($id){
				echo json_encode(['SUCCESS'=>true]);
			}else{
				echo json_encode(['SUCCESS'=>true]);
			}
			
		}
		}else{
			$this->view('login',['page'=>'Wilaya','msg'=>'you should to connect first']);
		}
	}
	//addCity and modifyCity
	public function city()
	{
		$wilaya = $this->model('wilaya');
		$allWilaya = $wilaya->getAll('*');
		$this->view('admin/city',['page'=>'City','wilaya'=>$allWilaya]);
	}
	public function addCity()
	{
		if(isset($_SESSION['auth']) && $_SESSION['users']['niveau'] == 3){
		if(isset($_POST['dataF'])){
			$spe = str_replace('&', '=', $_POST['dataF']);
			$data = $this->convertArray($spe);
			//print_r($data);die();
			$spec = $this->model('commune');
			$id = $spec->addCommune($data);
			if($id){
				echo json_encode(['SUCCESS'=>true]);
			}else{
				echo json_encode(['SUCCESS'=>true]);
			}
			
		}
		}else{
			$this->view('login',['page'=>'City','msg'=>'you should to connect first']);
		}
	}
	public function modifyCity()
	{
		if(isset($_SESSION['auth']) && $_SESSION['users']['niveau'] == 3){
		if(isset($_POST['dataF'])){
			$spe = str_replace('&', '=', $_POST['dataF']);
			$data = $this->convertArray($spe);
			//print_r($data);die();
			$spec = $this->model('commune');
			$id = $spec->modifyCommune($data);
			if($id){
				echo json_encode(['SUCCESS'=>true]);
			}else{
				echo json_encode(['SUCCESS'=>true]);
			}
			
		}
		}else{
			$this->view('login',['page'=>'City','msg'=>'you should to connect first']);
		}
	}

	//addDistrict and modifyDistrict
	public function district()
	{
		if(isset($_SESSION['auth']) && $_SESSION['users']['niveau'] == 3){
		$wilaya = $this->model('wilaya');
		$allWilaya = $wilaya->getAll('*');
		$this->view('admin/district',['page'=>'District','wilaya'=>$allWilaya]);
		}else{
			$this->view('login',['page'=>'District','msg'=>'you should to connect first']);
		}
	}
	public function addDistrict()
	{
		if(isset($_SESSION['auth']) && $_SESSION['users']['niveau'] == 3){
		if(isset($_POST['dataF'])){
			$spe = str_replace('&', '=', $_POST['dataF']);
			$data = $this->convertArray($spe);
			//print_r($data);die();
			$spec = $this->model('quartie');
			$id = $spec->addQuartie($data);
			if($id){
				echo json_encode(['SUCCESS'=>true]);
			}else{
				echo json_encode(['SUCCESS'=>true]);
			}
			
		}
		}else{
			$this->view('login',['page'=>'District','msg'=>'you should to connect first']);
		}
	}
	public function modifyDistrict()
	{
		if(isset($_SESSION['auth']) && $_SESSION['users']['niveau'] == 3){
		if(isset($_POST['dataF'])){
			$spe = str_replace('&', '=', $_POST['dataF']);
			$data = $this->convertArray($spe);
			//print_r($data);die();
			$spec = $this->model('quartie');
			$id = $spec->modifyQuartie($data);
			if($id){
				echo json_encode(['SUCCESS'=>true]);
			}else{
				echo json_encode(['SUCCESS'=>true]);
			}
			
		}
		}else{
			$this->view('login',['page'=>'District','msg'=>'you should to connect first']);
		}
	}
	
}

 ?>
