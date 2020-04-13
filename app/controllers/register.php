<?php 

use \core\Controller\Controller;
/**
* 
*/
class register extends Controller
{
	

	function index()
	{	$msg = '';
		$valid = $this->validation('validation');
		if(isset($_POST['register'])){
			$code = $valid->generateCode(8);
			$user = $this->model('users');
			$values = ['email'=>$_POST['email'],
					   'username'=>$_POST['username'],
					   'password'=>$_POST['password'],
					   'code'=>$code,
					   'active'=>0,
 				   	   'accept'=>0,
 				       'niveau'=>$_POST['niveau']];
 				       //print_r($values);die();
			$login = $user->register($values);
			if($login){$bodyHTML = '<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>Email Confirmation</title>
		</head>
		<body>
		<div>
			<h3>Hello, Mr: '.$_POST['username'].'</h3>
			<p>Thank you for your registe, now you should to confirme you email by clicking to the button confirme.</p>
			<a href="dwaya.dz/register/confirme/'.$login.'/'.$code.'" style="font-size:14px;text-decoration:none;color:#ffffff;font-weight:bold;padding:8px 14px;display:block;background-color:#77be53;border-radius:2px; width:100px;text-align:center" target="_blank">
			Confirme</a>
		</div>
		</body>
		</html>';
		$email = $this->mail();
		$sendEmail = $email->sendEmail('Email Confirmation',$bodyHTML,$values['email']);
		if($sendEmail){
			$this->render('/register/confirme');
		}else{
			echo 'error has not been sent';
		}
			}else{
				$msg = 'ERROR: can not create your account please verify your information';
			}
			//echo  json_encode($login);
			//echo '<br>'.$login->id;
			//echo '<br>'.$login->url;

		}
		

		$code = $valid->generateCode(8);
		$this->view('register',['page'=>'register','code'=>$code,'msg'=>$msg]);
	}
	function confirme($id=0,$code='')
	{
		$id = (int) $id; $code = (string) $code;

		if($id != 0 && !empty($code)){
			$user = $this->model('users');
			$code_cof = $user->checkValidCode(['iduser'=>$id]);
			if($code == $code_cof->code_confirme){
				if($user->activeAccount(['iduser'=>$id])){

						$this->view('confirme',['page'=>'Active Account',
							'msg'=>'your account is active now wait the admin accept your registration.',
							'type'=>'accept']);
				}else{
					$this->view('confirme',['page'=>'Active Account',
							'msg'=>'Error activation check your email again please.',
							'type'=>'recheck']);
				}
			}else{
				$this->view('confirme',['page'=>'Active Account',
					'msg'=>'Error Confirmation email put your email and check it.',
					'type'=>'errorEmail']);
			}
		}else{

			$this->view('confirme',['page'=>'Active Account','msg'=>'Please check your email, for confirme your email.',
				'type'=>'check']);
		}
	
	}
}

 ?>
 