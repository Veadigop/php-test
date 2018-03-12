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