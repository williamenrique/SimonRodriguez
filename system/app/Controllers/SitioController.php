<?php
header('Access-Control-Allow-Origin: *');
class Sitio extends Controllers{
	public function __construct(){
		// session_start();
		// if (empty($_SESSION['login'])) {
			// 	header("Location:".base_url().'home');
			// }
			//invocar para que se ejecute el metodo de la herencia
			parent::__construct();
		}
		
		public function acerca(){
		
		//invocar la vista con views y usamos getView y pasamos parametros esta clase y la vista
		//incluimos un arreglo que contendra toda la informacion que se enviara al home
		$data['page_tag'] = "TITULO DE PAGINA";
		$data['page_title'] = "UNESR";
		$data['page_name'] = IMG;
		// uso para activar los link en los enlaces
		// $data['page_menu'] = "usuarios";
		// $data['page_link'] = "usuarios";
		// $data['page_menu_open'] = "user-menu";
		// $data['page_link_acitvo'] = "link-user";

		// $data['page_functions'] = "function.enUso.js";
		$arrData = $this->model->getInst();
		$data['tlf_instituto'] =$arrData['tlf_instituto'];
		$data['email_instituto'] =$arrData['email_instituto'];
		$data['direccion_instituto'] =$arrData['direccion_instituto'];
		$this->views->getViews($this, "acerca", $data);
	}
    public function contacto(){
		//invocar la vista con views y usamos getView y pasamos parametros esta clase y la vista
		//incluimos un arreglo que contendra toda la informacion que se enviara al home
		$data['page_tag'] = "TITULO DE PAGINA";
		$data['page_title'] = "UNESR";
		$data['page_name'] = "contacto";
		$arrData = $this->model->getInst();
		$data['tlf_instituto'] =$arrData['tlf_instituto'];
		$data['email_instituto'] =$arrData['email_instituto'];
		$data['direccion_instituto'] =$arrData['direccion_instituto'];
		$this->views->getViews($this, "contacto", $data);
	}

	public function pregunta(){
		//invocar la vista con views y usamos getView y pasamos parametros esta clase y la vista
		//incluimos un arreglo que contendra toda la informacion que se enviara al home
		$data['page_tag'] = "TITULO DE PAGINA";
		$data['page_title'] = "UNESR";
		$data['page_name'] = "pregunta";
		$arrData = $this->model->getInst();
		$data['tlf_instituto'] =$arrData['tlf_instituto'];
		$data['email_instituto'] =$arrData['email_instituto'];
		$data['direccion_instituto'] =$arrData['direccion_instituto'];
		$this->views->getViews($this, "pregunta", $data);
	}
	public function plantilla(){
		//invocar la vista con views y usamos getView y pasamos parametros esta clase y la vista
		//incluimos un arreglo que contendra toda la informacion que se enviara al home
		$data['page_tag'] = "TITULO DE PAGINA";
		$data['page_title'] = "UNESR";
		$data['page_name'] = "plantilla";
		$arrData = $this->model->getInst();
		$data['tlf_instituto'] =$arrData['tlf_instituto'];
		$data['email_instituto'] =$arrData['email_instituto'];
		$data['direccion_instituto'] =$arrData['direccion_instituto'];
		$this->views->getViews($this, "plantilla", $data);
	}
}