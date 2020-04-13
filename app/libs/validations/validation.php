<?php 


/**
* 
*/
class validation 
{
	private static  $characters = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	
	public function generateCode($ln,$code='')
	{
		
		$wordln=strlen(self::$characters);
		if($ln == 0){
			return $code;
		}else{
			$code .= self::$characters[rand(0, $wordln-1)];
			$ln--;

			return $this->generateCode($ln,$code);
		}
	}

	public function checkEmail($value='')
	{
		$email = '/[a-zA-Z0-9.+_]+@[a-zA-Z0-9.+_]+.[a-zA-Z0-9]{2,3}$/';

		return preg_match($email, $value);
	}

	
	
}


 ?>