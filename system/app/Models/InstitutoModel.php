<?php
class InstitutoModel extends Mysql {
        public function __construct(){
		parent::__construct();
	}

    /*********************
	 * funcion de cargar usuario de la DB
	 *********************/
	public function getInst(){
		$sql = "SELECT * FROM table_instituto";
		$request = $this->select($sql);
		return $request;
	}
}