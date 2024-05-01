<?php
class SitioModel extends Mysql {
        public function __construct(){
		parent::__construct();
	}

    /*********************
	 * funcion de cargar data de la DB
	 *********************/
	public function getInst(){
		$sql = "SELECT * FROM table_instituto";
		$request = $this->select($sql);
		return $request;
	}
	public function getFaq(){
		$sql = "SELECT * FROM table_preguntas";
		$request = $this->select_all($sql);
		return $request;
	}
}