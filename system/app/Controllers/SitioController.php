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
		/*********TODO: Vista *****************/
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
	/*********TODO: Vista *****************/
    public function contacto(){
		//invocar la vista con views y usamos getView y pasamos parametros esta clase y la vista
		//incluimos un arreglo que contendra toda la informacion que se enviara al home
		$data['page_tag'] = "TITULO DE PAGINA";
		$data['page_title'] = "UNESR";
		$data['page_name'] = "contacto";
		$arrData = $this->model->getInst();
		$data['tlf_instituto'] = $arrData['tlf_instituto'];
		$data['email_instituto'] = $arrData['email_instituto'];
		$data['direccion_instituto'] = $arrData['direccion_instituto'];
		$this->views->getViews($this, "contacto", $data);
	}
	/*********TODO: Vista *****************/
	public function pregunta(){
		//invocar la vista con views y usamos getView y pasamos parametros esta clase y la vista
		//incluimos un arreglo que contendra toda la informacion que se enviara al home
		$data['page_tag'] = "TITULO DE PAGINA";
		$data['page_title'] = "UNESR";
		$data['page_name'] = "pregunta";
		$arrData = $this->model->getInst();
		$data['tlf_instituto'] = $arrData['tlf_instituto'];
		$data['email_instituto'] = $arrData['email_instituto'];
		$data['direccion_instituto'] = $arrData['direccion_instituto'];
		$data['page_functions'] = "function.sitio.js";
		$this->views->getViews($this, "pregunta", $data);
	}
	public function getFaq(){
		$html = '';
		$arrData = $this->model->getFaq();
		for ($i=0; $i < count($arrData); $i++) {
			$html .= '
					<div class="card">
						<div class="card-header" id="heading'.$arrData[$i]['id_pregunta'].'">
							<h5 class="mb-0">
								<button class="btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse'.$arrData[$i]['id_pregunta'].'" aria-expanded="false" aria-controls="collapse'.$arrData[$i]['id_pregunta'].'">
									<span class="ti-help-alt"></span>
									'.$arrData[$i]['pregunta_instituto'].'
								</button>
							</h5>
						</div>

						<div id="collapse'.$arrData[$i]['id_pregunta'].'" class="collapse" aria-labelledby="heading'.$arrData[$i]['id_pregunta'].'" data-parent="#accordion" style="">
							<div class="card-body">
								'.$arrData[$i]['respuesta_instituto'].'
							</div>
						</div>
					</div>
				';
		}
		echo $html;
		die();
	}
	
	/*********TODO: Vista *****************/
	public function nosotros(){
		//invocar la vista con views y usamos getView y pasamos parametros esta clase y la vista
		//incluimos un arreglo que contendra toda la informacion que se enviara al home
		$data['page_tag'] = "TITULO DE PAGINA";
		$data['page_title'] = "UNESR";
		$data['page_name'] = "plantilla";
		$arrData = $this->model->getInst();
		$data['tlf_instituto'] =$arrData['tlf_instituto'];
		$data['email_instituto'] =$arrData['email_instituto'];
		$data['direccion_instituto'] =$arrData['direccion_instituto'];
		$data['page_functions'] = "function.sitio.js";
		$this->views->getViews($this, "nosotros", $data);
	}
	public function getAutoridades(){
		$html = '';
		$arrData = $this->model->getAutoridades();
		$html .= '<div class="row">';
		if(count($arrData) > 0 ){
			for ($i=0; $i < count($arrData); $i++) {
				$html .= '
						<div class="col-xl-3 col-lg-3 col-md-6">
							<div class="team-wrapper mb-30">
								<div class="team-thumbb">
									<img src="img/team/teammember1.jpg" alt="">
								</div>
								
								<div class="team-teacher-info text-center">
									<h1>Chase M. Bynum</h1>
									<h2>English Teacher</h2>
								</div>
							</div>
						</div>
					';
			}
		}else{
			$html .= '<p class="gray-color text-center" style="width: 100%">No se encontro autoridades</p>';
		}
		$html .= '</div>';
		echo $html;
		die();
	}
	public function getTeam(){
		$html = '';
		$arrData = $this->model->getTeam();
		$html .= '<div class="row">';
		if(count($arrData) > 0 ){
			for ($i=0; $i < count($arrData); $i++) {
				$html .= '
						<div class="col-xl-3 col-lg-3 col-md-6">
							<div class="team-wrapper team-wrapper-2 mb-30">
								<div class="team-thumb">
									<img src="img/team/teamthumb001.jpg" alt="">
								</div>
								<div class="team-social-info text-center">
									<div class="team-social-icon-list">
										<ul>
											<li><a href="#"><span class="ti-facebook"></span></a></li>
											<li><a href="#"><span class="ti-twitter-alt"></span></a></li>
											<li><a href="#"><span class="ti-google"></span></a></li>
											<li><a href="#"><span class="ti-linkedin"></span></a></li>
										</ul>
									</div>
								</div>
								<div class="team-teacher-info team-teacher-info-2 text-center">
									<h1>Chase M. Bynum</h1>
									<h2>English Teacher</h2>
								</div>
							</div>
						</div>
					';
			}
		}else{
			$html .= '<p class="gray-color text-center" style="width: 100%">No se encontro equipo</p>';
		}
		$html .= '</div>';
		echo $html;
		die();
	}
	/*********TODO: Vista *****************/
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
		$data['page_functions'] = "function.sitio.js";
		$this->views->getViews($this, "plantilla", $data);
	}
}