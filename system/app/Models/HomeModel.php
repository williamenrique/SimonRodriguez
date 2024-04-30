<?php
class HomeModel extends Mysql {
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
	public function eventList(){
		$sql = "SELECT * FROM table_evento WHERE status_evento = 1";
		$request = $this->select_all($sql);
		return $request;
	}
}