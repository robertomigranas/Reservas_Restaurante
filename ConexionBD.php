<?php

class ConexionBD{
	public static function cBD(){
		$bd = new PDO("mysql:host=localhost;dbname=restaurante", "root", "");

		$bd -> exec("set names utf8");

		return $bd;
	}
}