<?php
/** Classe SINGLETON
  * Conecta com o banco de dados
  */

 class DAO
 {
 	public static $singleton;

 	function __construct(){}

 	public static function getInstance(){
 		if (isset(self::$instance)) {
 			self::$instance = new PDO('mysql:host=localhost;dbname=db_usuario', 'root', '',
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
 		}
 	}

 }