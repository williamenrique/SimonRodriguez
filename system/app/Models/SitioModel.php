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
	// TODO: cargar pensamientos
	public function getPensamiento(string $srtPagina){
		$this->srtPagina = $srtPagina;
		$sql = "SELECT * FROM table_pensamiento WHERE pagina_instituto = '$this->srtPagina'";
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
	// TODO: tarer pensum
	public function getDocumento(string $srtTipo){
		$this->srtTipo = $srtTipo;
		$sql = "SELECT * FROM table_documentos WHERE tipo_documento = '$this->srtTipo'";
		$request = $this->select_all($sql);
		return $request;
	}
	// TODO: tarer perfiles
	public function getPerfil(string $srtTipo){
		$this->srtTipo = $srtTipo;
		$sql = "SELECT * FROM table_documentos WHERE tipo_documento = $this->srtTipo";
		$request = $this->select_all($sql);
		return $request;
	}
	// TODO: tarer lista de eventos
	public function eventListAll(){
		$sql = "SELECT * FROM table_evento ORDER BY fecha_evento DESC  ";
		$request = $this->select_all($sql);
		return $request;
	}
}