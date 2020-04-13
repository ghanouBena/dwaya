<?php 

use \core\Controller\Controller;
/**
* 
*/
class doctor extends Controller
{
	
	function index($name='',$lname ='')
	{
		if(isset($_SESSION['auth']) && $_SESSION['users']['niveau'] == 1){
		$this->view('doctor/accueil',['page'=>'accueil']);
		}else{
			$this->view('login',['page'=>'accueil','msg'=>'you should to connect first']);
		}
	}

	public function consultation()
	{
		if(isset($_POST['save'])){
			$ord = $this->model('ordonnance');
			$_POST['data_ordonnance'] = date('Y-m-d');
			$_POST['code_ordonnance'] = date('Y-m-d').'-'.$this->validation('validation')->generateCode(6);
			//print_r($_POST);die();
			$id  = $ord->addOrd($_POST);
			$_POST['idordonnance'] = $id;
			$med_ord = $this->model('medicament_has_ordonnance');
			$medOrd = $med_ord->addMedOrd($_POST);
			var_dump($medOrd);
			if($medOrd){
				$this->render('/doctor/ordonnance/'.$id);
			}else{
				$ord->deleteOrd(['idordonnance'=>$id]);
				$this->view('doctor/addConsultation',['page'=>'Add Consultation','allmed'=>$allmed,'msg'=>'something wrongs please try again']);
			}
		}
		$med = $this->model('medicament');
		$allmed = $med->getAll('*');
		$this->view('doctor/addConsultation',['page'=>'Add Consultation','allmed'=>$allmed]);
	}

	public function patients($id=0)
	{ $id = (int) $id;
		$wilaya = $this->model('wilaya');
		$allWilaya = $wilaya->getAll('*');
		if($id > 0){

		$users = $this->model('users');
		$allPatient = $users->getAll('*',' u INNER JOIN quartie q ON q.idquartie = u.idquartie
 								  INNER JOIN commune co ON co.idcommune = q.idcommune 
 								  INNER JOIN wilaya wi ON wi.idwilaya = co.idwilaya WHERE u.niveau = 0 AND q.idquartie='.$id.' ORDER BY u.nom_user');
		$this->view('doctor/patients',['page'=>'List Of Patients','wilaya'=>$allWilaya,'allPatient'=>$allPatient]);
		}
		
		//var_dump($allPatient);
		//echo $allPatient[0]->url_doctor;die();

		$this->view('doctor/patients',['page'=>'List Of Patients','wilaya'=>$allWilaya]);
	}
	public function complete()
	{	
		if(!isset($_SESSION['auth']) && !isset($_SESSION['users']['complete'])){
			$this->view('login',['page'=>'complete']);
			die();
		}
		$msg = '';
		$errors=NULL;
		if(isset($_POST['save'])){
			if(isset($_FILES['file'])){

				$errors = $this->upload($_FILES,'data/uploads/doctors/');
				if(isset($errors['url'])){
					$_POST['url_pic'] =$errors['url'];
					
					$_POST['iduser'] = $_SESSION['users']['idusers'];
					$_POST['b_day'] = date('Y-m-d', strtotime($_POST['b_day']));
					//print_r($_POST);
					$users = $this->model('users');
					$update = $users->updateAccount($_POST);
					if($update){
						echo "done";die();
					}else{
						echo 'errors';die();
					}
					//print_r($errors);
					//echo date('Y-m-d', strtotime($_POST['b_day']));
					die();

				}else{
					$msg = 'you have some errors in your picture when uploaded';
				}
			}else{
				$msg = 'please select your picture';
			}
			
		}
		$wilaya = $this->model('wilaya');
		$allWilaya = $wilaya->getAll('*');
		$specialite = $this->model('specialite');
		$allSpecialite = $specialite->getAll('*');
		$this->view('doctor/complete',['page'=>'Complete Account',
									   'wilaya'=>$allWilaya,
									   'specialite'=>$allSpecialite,
									   'msg'=>$msg,
									   'errors'=>$errors]);
	}

	public function generatePdf($value=0)
	{
		$pdf = $this->pdf('pageOrd');
		$pdf->page();
	}
	public function ordonnance($value=0)
	{
		$ord = $this->model('medicament_has_ordonnance');
		$ordDetails = $ord->find(['colm'=>'ord.*,mo.*,md.*,us.nom_user as nom_med,us.prenom_user as prenom_med,
										   us.add_user as add_med,us.tel_user as tel_med,u.nom_user,u.prenom_user,
										   u.add_user,u.tel_user,sp.*,co.*,wi.*,q.*',
								  'values'=>'as mo INNER JOIN ordonnance ord ON mo.idordonnance = ord.idordonnance 
											INNER JOIN medicament md ON mo.idmedicament = md.idmedicament 
											INNER JOIN users u ON u.idusers = ord.id_patient
											INNER JOIN users us ON us.idusers = ord.id_med 
											INNER JOIN specialite sp ON sp.idspecialite = us.idspecialite
											INNER JOIN quartie q ON q.idquartie = u.idquartie
 								  			INNER JOIN commune co ON co.idcommune = q.idcommune 
 								  			INNER JOIN wilaya wi ON wi.idwilaya = co.idwilaya
								 			WHERE ord.idordonnance='.$value]);
		//var_dump($ordDetails);die();
		$this->view('doctor/ordonnance',['page'=>'Consultation','ord'=>$ordDetails]);
	}
	public function patientProfile($value=0)
	{
		//print_r(var, return)
		if(isset($_SESSION['auth'])){
		$id = (int) $value;
		$users = $this->model('users');
		$patient = $users->getUserById($id);

		$ord = $this->model('ordonnance');
		$allOrd = $ord->getAll('*',' WHERE id_patient = '.$id.' ORDER BY data_ordonnance');
		//var_dump($allOrd[0]->url_doctor);die();
		$this->view('doctor/patientProfile',['page'=>'Patient Profile','patient'=>$patient,'ord'=>$allOrd]);
		}else{
			$this->view('login',['page'=>'Patient Profile','msg'=>'you should to connect first']);	
		}
	}


	public function inbox()
	{
		if(isset($_SESSION['auth']) && $_SESSION['users']['niveau'] == 1){
			$message = $this->model('message');
			$inbox = $message->getAll('ms.*,u.nom_user,u.prenom_user,u.url_pic,u.email_user,f.idfiles',
				'ms.toId ='.$_SESSION['users']['idusers'].' GROUP BY ms.idmessage ');
			//var_dump($inbox);die();
			$this->view('doctor/inbox',['page'=>'Inbox','messages'=>$inbox]);
		}else{
			$this->view('login',['page'=>'Inbox','msg'=>'you should to connect first']);
		}
	}
	public function compose($value='')
	{	//echo date('Y-m-d H:i:s');die();
		$msg='';
		$msgS='';
		$errors=NULL;
		$email = (string) $value;
		if(isset($_SESSION['auth'])){

			if(!empty($email)){
				$this->view('doctor/compose',['page'=>'Compose','email'=>$email]);
			}else{
				if(isset($_POST['send'])){
					//print_r($_POST);die();
					if(isset($_FILES['files']['name']) && !empty($_FILES['files']['name'][0])){

					$errors = $this->uploadAttachment($_FILES['files']);
					//print_r($_FILES);die();
					//print_r($errors);//die();
					if($errors['ok']){
						$message = $this->model('message');
						$send = $message->addMessage($_POST);
						if($send){

							$files = $this->model('files');
							$file = $errors['files'];
							for ($i=0,$count = count($file);$i<$count;$i++){
								$save = $files->addFile(['url'=>$file[$i]['url'],'idmessage'=>$send]);
								if(!$save){
									$msg='error to send message somethings wrongs try again';break;
									$errors=NULL;
								}
							}
							$errors=NULL;
							$msgS='message send with success';
						}else{
							$msg='error to send message somethings wrongs try again';
						}
					}else{
						//print_r($errors);die();
						$etat = $this->deleteAttachment($errors);
						if(!$etat){
							$msg = 'ERROR upload your attachment please check the right files (images) ';
						}
						
					 }
					}else{
						$message = $this->model('message');
						$send = $message->addMessage($_POST);
						if($send)$msgS='message send with success';else $msg='error to send message somethings wrongs try again';


					}

				}
				$this->view('doctor/compose',['page'=>'Compose','msg'=>$msg,'msgS'=>$msgS]);
			}
		}else{
			$this->view('login',['page'=>'Compose','msg'=>'you should to connect first']);
		}
	}

	private function uploadAttachment($files=[])
	{
		for($i=0,$count = count($files['name']);$i<$count;$i++){
			$file['file'] = ['name'=>$files['name'][$i],
							 'type'=>$files['type'][$i],
							 'tmp_name'=>$files['tmp_name'][$i],
							 'error'=>$files['error'][$i],
							 'size'=>$files['size'][$i]];


			$errors['files'][$i] = $this->upload($file,'data/uploads/messages/doctor');
			if(!isset($errors['files'][$i]['url'])){
				$errors['ok'] = false;
				return $errors;
			}
		}
		$errors['ok'] = true;
		return $errors;
	}

	private function deleteAttachment($files=[])
	{
		$file = $files['files'];
		$ok = false;
		for ($i=0,$count = count($file);$i<$count;$i++){
			if(isset($file[$i]['url']) && file_exists($file[$i]['url'])){
				//echo $file[$i]['url'];die();
				unlink($file[$i]['url']);
				$ok = true;
			}
		}

		return $ok;
	}

	public function displayMail($value=0)
	{
		$id = (int) $value;
		if(isset($_SESSION['auth']) && $_SESSION['users']['niveau'] == 1){
			if($id > 0){
				$message = $this->model('message');
				$message->opened(['param'=>'opened = :opened','condition'=>'idmessage = :idmessage','values'=>['opened'=>true,'idmessage'=>$id]]);
				$inbox = $message->getAll('ms.*,u.nom_user,u.prenom_user,u.url_pic,u.email_user,f.*',
				'ms.idmessage ='.$id);
				//var_dump($inbox);die();
				$this->view('doctor/mail',['page'=>'Display Mail','message'=>$inbox]);
			}
			 $this->view('doctor/mail',['page'=>'Display Mail','msg'=>'Opps!! no message exists']);
			
		}else{
			$this->view('login',['page'=>'Display Mail','msg'=>'you should to connect first']);
		}


	}
}

 ?>
