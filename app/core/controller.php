<?php 

namespace core\Controller;

class Controller
{
  public function model($model)
  {
  	require_once 'app/models/'.$model.'.php';
  	return new $model();
  }
  public function view($view,$data = [])
  {
  	require_once 'app/views/'.$view.'.php';
  }

  public function render($value='')
  {
  	header("location:".$value);
  }

  public function validation($valid)
  {
  	require_once 'app/libs/validations/'.$valid.'.php';
  	return new $valid();
  }

  public function mail($page='Email')
  {
    require_once 'app/libs/PHPMailer/'.$page.'.php';
    return new $page();
  }
  public function pdf($page='fpdf')
  {
    require_once 'app/libs/fpdf/'.$page.'.php';
    return new $page();
  }
  public function getDataURI($image) {
  $typeImage = substr($image, strrpos($image, '.')+1);
  $mime = 'image/'.$typeImage;
  return 'data: '.(function_exists('mime_content_type') ? mime_content_type($image) : $mime).';base64,'.base64_encode(file_get_contents($image));
  }

  public function upload($file=[],$target_dir='/data/uploads/')
  { $errors = [];
     $typeImage=['jpg','png','jpeg','gif'];
    $target_file = $target_dir.basename($file["file"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($file["file"])) {
        $check = getimagesize($file["file"]["tmp_name"]);
        if($check !== false) {
            //echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            $errors['error_type_file_upload'] = "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        $errors['error_file_exist'] =  "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($file["file"]["size"] > 500000) {
        $errors['error_size']="Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if( !in_array($imageFileType, $typeImage)) {
        $errors['error_type_image']="Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $errors['error_uploadOk'] = "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($file["file"]["tmp_name"], $target_file)) {
          $errors['url'] = $target_file;
           //return $errors;
        } else {
            $errors['error_upload'] = "Sorry, there was an error uploading your file.";
        }
    }

    return $errors;
  }
  public function convertArray($value='')
  { 
    $spe = explode('=', $value);
    $data =[];
      foreach ($spe as $k => $v){
        if($k % 2 == 0){
          $data[$v] = str_replace(['%C3%A9','%20'],['é',' '],$spe[$k+1]);

        }
      }
      return $data;
  }

  
}


 ?>