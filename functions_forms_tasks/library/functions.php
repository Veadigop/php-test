<?php

function requestGet($key){
	if(isset($_GET[$key])){
		return $_GET[$key];
	}
	return;
}

function requestPost($key){
	if(isset($_POST[$key])){
		return $_POST[$key];
	}
	return;
}

function requestFiles($key)
{
    if (isset($_FILES[$key])) {
        return $_FILES[$key];
    }
    
    return null;
}

function redirect($to)
{
    header('Location: ' . $to);
    die;
}