<?php
header('Access-Control-Allow-Origin: *');
class Home extends Controllers{
	public function __construct(){
		// session_start();
		// if (empty($_SESSION['login'])) {
		// 	header("Location:".base_url().'home');
		// }
		//invocar para que se ejecute el metodo de la herencia
		parent::__construct();
	}
	public function home(){
		//invocar la vista con views y usamos getView y pasamos parametros esta clase y la vista
		//incluimos un arreglo que contendra toda la informacion que se enviara al home
		$data['page_id'] = 0;
		$data['page_tag'] = "TITULO DE PAGINA";
		$data['page_title'] = "Pagina Principal";
		$data['page_name'] = "home";
		// uso para activar los link en los enlaces
		// $data['page_menu'] = "usuarios";
		// $data['page_link'] = "usuarios";
		// $data['page_menu_open'] = "user-menu";
		// $data['page_link_acitvo'] = "link-user";

		// $data['page_functions'] = "function.enUso.js";
		$this->views->getViews($this, "home", $data);
	}

	//prueba de insertar
	public function insertar(){
		$data = $this->model->setUser('Juan',25);
		print_r($data);
	}

	//ejemplo metodo metodo ver usuario
	// public function verUsuario($id){
	// 	$data = $this->model->getUser($id);
	// 	print_r($data);
	// }
}