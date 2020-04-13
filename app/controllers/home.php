<?php 

use \core\Controller\Controller;
/**
* 
*/
class home extends Controller
{
	
	function index($name='',$lname ='')
	{
		$this->view('home',['name'=>$name,'lname'=>$lname]);
	}

	function login()
	{
		if(isset($_POST['login'])){
			$user = $this->model('users');

			$login = $user->login($_POST);
			var_dump($login);
			echo '<br>'.$login->id;
			echo '<br>'.$login->url;

		}
		$valid = $this->validation('validation');
		$code = $valid->checkEmail('ghanou@gmail.com');
		$this->view('login',['page'=>'login','code'=>$code]);
	}

	public function register()
	{
		$bodyHTML = '<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>Email Confirmation</title>
		</head>
		<body>
		<div>
			<h3>Hello, Mr: abdelghani</h3>
			<p>Thank you for your registe, now you should to confirme you email by clicking to the button confirme.</p>
			<a href="medicament.com/confirme/1223" style="font-size:14px;text-decoration:none;color:#ffffff;font-weight:bold;padding:8px 14px;display:block;background-color:#77be53;border-radius:2px; width:100px;text-align:center" target="_blank">
			Confirme</a>
		</div>
		</body>
		</html>';
		$email = $this->mail();
		$sendEmail = $email->sendEmail('Email Confirmation',$bodyHTML);
		if($sendEmail){
			echo 'email has been sent';
		}else{
			echo 'error has not been sent';
		}
	}
}

 ?>
 