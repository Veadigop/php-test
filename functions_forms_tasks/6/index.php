<?php
/*
* Создать страницу, на которой можно загрузить несколько фотографий в галерею. Все загруженные фото должны помещаться в
* папку gallery и выводиться на странице в виде таблицы.
*/

require_once '../library/functions.php';

define( 'IMAGE_JPG' ,'image/jpeg');
define( 'IMAGE_PNG' ,'image/png');

//Проверяем Валидность файла
function isImageValid($file){
	if (empty($file) || !is_array($file)) {
        return false;
    }
    
    if (!isset($file['error'])) {
        return false;
    }
	if($file['error']=== UPLOAD_ERR_OK){
		$allowedFormats = [IMAGE_JPG, IMAGE_PNG];
		$imageTypeValid = in_array($file['type'], $allowedFormats);
		return $imageTypeValid;
	}
	else{
		return false;
	}

}

//Проверяем существует ли директория и если - нет, то создаем ее 
function createDir($path_dir){
	
	if(!is_dir($path_dir) && !empty($path_dir)){
		mkdir($path_dir, 777);
	}
	return;
}


//Проверяем существует ли директория и если - нет, то создаем ее 
function uploadImage($path_dir){
	
	if(!empty($path_dir)){
		move_uploaded_file($_FILES["image"]["tmp_name"], $path_dir.basename($_FILES["image"]["name"]));
	}
}

//Получаем список файлов
function getImages(){

	$imageDir = __DIR__.DIRECTORY_SEPARATOR.'gallery';

    $filenames = @scandir($imageDir, SCANDIR_SORT_NONE);
    
	//Удаляем ненужные елементы массива и делаем начальный индекс массива 0 
	$result = array_slice(array_diff($filenames, Array( ".", ".." )), 0);

    return $result;
	
}

$file_image = requestFiles('image');	
$validation_image = isImageValid($file_image);
$result = getImages();

if($_FILES && requestFiles('image')){
	if($validation_image){
		$create_gallery_dir = createDir(__DIR__.DIRECTORY_SEPARATOR.'gallery');
		$upload_image = uploadImage($path=__DIR__.DIRECTORY_SEPARATOR.'gallery/');
		redirect('index.php');
	}
}		

include 'gallery.phtml';
