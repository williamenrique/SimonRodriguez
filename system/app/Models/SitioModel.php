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
	// TODO: mostrar preguntas de informacion
	public function getFaq(){
		$sql = "SELECT * FROM table_preguntas";
		$request = $this->select_all($sql);
		return $request;
	}
	// TODO: mostrar autoridades
	public function getAutoridades(){
		$sql = "SELECT * FROM table_autoridades";
		$request = $this->select_all($sql);
		return $request;
	}
	// TODO: mostrar equipo
	public function getTeam(){
		$sql = "SELECT * FROM table_equipo";
		$request = $this->select_all($sql);
		return $request;
	}
}