<?php 
use \core\Controller\Controller;
/**
* 
*/
class Json extends Controller
{
	
	function index()
	{
		
	}
	
	public function commune()
	{
		if(isset($_POST['id_wilaya'])){
			//print_r($_POST);die();
			$commune = $this->model('commune');
			$id = (int) $_POST['id_wilaya'];
			$allCommune = $commune->find(['idwilaya'=>$id]);
			//var_dump($allCommune);echo $id; die();
			if(!empty($allCommune)){
				
			echo json_encode(['SUCCESS'=>true,'data'=>$allCommune]);
			}else{
				echo json_encode(['SUCCESS'=>false]);
			}
		}
	}

	public function quartie()
	{
		if(isset($_POST['id_commune'])){
			//print_r($_POST);die();
			$quartie = $this->model('quartie');
			$id = (int) $_POST['id_commune'];
			$allQuartie = $quartie->find(['idcommune'=>$id]);
			//var_dump($allCommune);echo $id; die();
			if(!empty($allQuartie)){
				
			echo json_encode(['SUCCESS'=>true,'data'=>$allQuartie]);
			}else{
				echo json_encode(['SUCCESS'=>false]);
			}
		}
	}

	public function type()
	{
		if(isset($_POST['id_type'])){
			//print_r($_POST);die();
			$medicament = $this->model('medicament');
			$id = (int) $_POST['id_type'];
			$allMedicament = $medicament->find(['idtype'=>$id]);
			//var_dump($allCommune);echo $id; die();
			if(!empty($allMedicament)){
				
			echo json_encode(['SUCCESS'=>true,'data'=>$allMedicament]);
			}else{
				echo json_encode(['SUCCESS'=>false]);
			}
		}
	}

	public function accept()
	{
		if(isset($_POST['idusers'])){
			//print_r($_POST);die();
			$users = $this->model('users');
			$id = (int) $_POST['idusers'];
			
			//var_dump($allCommune);echo $id; die();
			if($users->acceptAccount(['iduser'=>$id])){
				
			echo json_encode(['SUCCESS'=>true]);
			}else{
				echo json_encode(['SUCCESS'=>false]);
			}
		}
	}

	public function deleteUser()
	{
		if(isset($_POST['idusers'])){
			//print_r($_POST);die();
			$users = $this->model('users');
			$id = (int) $_POST['idusers'];
			
			//var_dump($allCommune);echo $id; die();
			if($users->deleteAccoount(['iduser'=>$id])){
				
			echo json_encode(['SUCCESS'=>true]);
			}else{
				echo json_encode(['SUCCESS'=>false]);
			}
		}
	}

	public function patients()
	{
		if(isset($_POST['nPatient'])){
			//print_r($_POST);die();
			$users = $this->model('users');
			$id = (int) $_POST['nPatient'];
			$allPatient = $users->getAll('*',' u INNER JOIN quartie q ON q.idquartie = u.idquartie
 								  INNER JOIN commune co ON co.idcommune = q.idcommune 
 								  INNER JOIN wilaya wi ON wi.idwilaya = co.idwilaya WHERE u.niveau = 0 AND u.idquartie='.$id.'
 								   ORDER BY u.nom_user');
			
			echo json_encode($allPatient);die();
			if(!empty($allPatient)){
				
				echo json_encode(['SUCCESS'=>true,'data'=>$allPatient]);
			}else{
				echo json_encode(['SUCCESS'=>false]);
			}
		}
	}

	public function validation()
	{
		if(isset($_POST['idOrd'])){
			//print_r($_POST);die();
			//$id = (int) $_POST['idOrd'];
			$dis = $this->model('disponiblite');
			$qnt = $dis->getQuantite(['colm'=>'quantite','condition'=>'idmedicament = :idmedicament AND id_ph = :id_ph','values'=>['idmedicament'=>$_POST['idMed'],'id_ph'=>$_SESSION['users']['idusers']]]);
			//echo $qnt->quantite;die();
			
			if($qnt->quantite >= $_POST['qnt']){
				$somme = ($qnt->quantite - $_POST['qnt']);
				//echo $somme;die();
			$dis = $this->model('disponiblite');
			$disp = $dis->modifyDisp(['param'=>'`quantite`=:quantite',
											  'condition'=>'idmedicament = :idmedicament AND id_ph = :id_ph',
											  'values'=>['idmedicament'=>$_POST['idMed'],'quantite'=>$somme,'id_ph'=>$_SESSION['users']['idusers']]]);
			$ord = $this->model('medicament_has_ordonnance');
			$etat = $ord->modifyMedOrd(['param'=>'`etat`=:etat,`quantite_reste`=:quantite',
											  'condition'=>'idordonnance = :idordonnance AND idmedicament = :idmedicament',
											  'values'=>['idordonnance'=>$_POST['idOrd'],'idmedicament'=>$_POST['idMed'],
											  'etat'=>1,'quantite'=>0]]);
			//echo json_encode($orDetails);die();
			if($etat){
				
				echo json_encode(['SUCCESS'=>true,'msg'=>'Medicament valided with Success']);
			}else{
				echo json_encode(['SUCCESS'=>false]);
			}
			}else{
				$dis = $this->model('disponiblite');
				$disp = $dis->modifyDisp(['param'=>'`quantite`=:quantite',
											  'condition'=>'idmedicament = :idmedicament',
											  'values'=>['idmedicament'=>$_POST['idMed'],'quantite'=>0]]);
				$ord = $this->model('medicament_has_ordonnance');
				$etat = $ord->modifyMedOrd(['param'=>'`etat`=:etat,`quantite_reste`=:quantite',
											  'condition'=>'idordonnance = :idordonnance AND idmedicament = :idmedicament',
											  'values'=>['idordonnance'=>$_POST['idOrd'],'idmedicament'=>$_POST['idMed'],
											  'etat'=>0,'quantite'=>($_POST['qnt']-$qnt->quantite)]]);
				//echo json_encode($orDetails);die();
			if($etat){
				
				echo json_encode(['SUCCESS'=>true,'msg'=>'the quantity is insufficient']);
			}else{
				echo json_encode(['SUCCESS'=>false]);
			}
			}
		}
	}

	public function validOrd()
	{
		if(isset($_POST['idOrd'])){
			//print_r($_POST);die();
			$ord = $this->model('ordonnance');
			$id = (int) $_POST['idOrd'];
			$valid = $ord->validOrd(['param'=>'	valide_par = :valid_par , data_achet_ord = :data_achet_ord',
									 'condition'=>'idordonnance = :idordonnance',
									 'values'=>['valid_par'=>$_SESSION['users']['idusers'],
									 'data_achet_ord'=>date('Y-m-d'),
									 'idordonnance'=>$id]]);
			
			//echo json_encode($allPatient);die();
			if(($valid)){
				
				echo json_encode(['SUCCESS'=>true,'msg'=>'ordonnance valided with Success']);
			}else{
				echo json_encode(['SUCCESS'=>false,'msg'=>'Something wrong try again']);
			}
		}
	}

	public function searchDP()
	{
		if(isset($_POST['name'])){
			//print_r($_POST);die();
			$name = (string) $_POST['name'];
			$users = $this->model('users');
			$allUsers = $users->find(['colm'=>'idusers,nom_user,prenom_user,url_pic,niveau',
				'condition'=>'(nom_user like :name or prenom_user like :name) AND niveau BETWEEN 1 AND 2 ORDER BY nom_user',
				'value'=>['name'=>'%'.$name.'%']]);
			//var_dump($allUsers);die();
			if(!empty($allUsers)){
				
			echo json_encode(['SUCCESS'=>true,'data'=>$allUsers]);
			}else{
				echo json_encode(['SUCCESS'=>false]);
			}
		}
	}
}

 ?>