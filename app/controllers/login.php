<?php 

use \core\Controller\Controller;
/**
* 
*/
class login extends Controller
{
	

	function index()
	{ $msg = '';
		if(isset($_POST['login'])){
			$user = $this->model('users');

			$login = $user->login($_POST);
			if(!empty($login)){
				if($login->active == 1 && $login->accept == 1){

						$_SESSION['auth'] = true;
						$llogin = (array) $login;
						switch ($login->niveau) {
							case 0:
								$_SESSION['users'] = $llogin;
								($login->complete)?$this->render('/patient/accueil'):$this->render('/patient/complete');
							break;
							case 1:
								$_SESSION['users'] = $llogin;
								($login->complete)?$this->render('/doctor/accueil'):$this->render('/doctor/complete');
								break;
							case 2:
								$_SESSION['users'] = $llogin;
								($login->complete)?$this->render('/pharmacie/accueil'):$this->render('/pharmacie/complete');
								break;
							case 3:
								$_SESSION['users'] = $llogin;
								$this->render('/admin/accueil');
								break;
						}
				}elseif($login->active == 1){
						$this->render('/login/accept');
				}else{
						$this->render('/register/confirme/');
				}
			}else{

					$msg = 'Error username or password, put the right information';
			}
			//echo  json_encode($login);
			//echo '<br>'.$login->id;
			//echo '<br>'.$login->url;

		}
		$valid = $this->validation('validation');
		$code = $valid->checkEmail('ghanou@gmail.com');
		$this->view('login',['page'=>'login','code'=>$code,'msg'=>$msg]);
	}

	public function accept()
	{
		$this->view('confirme',['page'=>'Active Account',
							'msg'=>'your account is active, please wait the admin accept your registration.',
							'type'=>'accept']);
	}

	function logout(){

		unset($_SESSION['auth']);
		unset($_SESSION['doctor']);
		unset($_SESSION['users']);
		$this->render('/login');
	}
}

 ?>
 