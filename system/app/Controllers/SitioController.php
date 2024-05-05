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
		$data['tlf_instituto'] = $arrData['tlf_instituto'];
		$data['email_instituto'] = $arrData['email_instituto'];
		$data['direccion_instituto'] = $arrData['direccion_instituto'];
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
		$arrDataPens = $this->model->getPensamiento('nosotros');
		$data['pensamiento'] = $arrDataPens['pensamiento'];
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
		$arrDataPens = $this->model->getPensamiento('pregunta');
		$data['pensamiento'] = $arrDataPens['pensamiento'];
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
		$data['tlf_instituto'] = $arrData['tlf_instituto'];
		$data['email_instituto'] = $arrData['email_instituto'];
		$data['direccion_instituto'] = $arrData['direccion_instituto'];
		$arrDataPens = $this->model->getPensamiento('nosotros');
		$data['pensamiento'] = $arrDataPens['pensamiento'];
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
								<div class="team-thumb">
									<img src="'.IMG.$arrData[$i]['img_autoridad'].'" alt="">
								</div>
								
								<div class="team-teacher-info text-center">
									<h1>'.$arrData[$i]['nombre_autoridad'].'</h1>
									<h2>'.$arrData[$i]['cargo_autoridad'].'</h2>
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
									<img src="'.IMG.$arrData[$i]['img_equipo'].'" alt="">
								</div>
								<div class="team-teacher-info team-teacher-info-2 text-center">
									<h1>'.$arrData[$i]['nombre_equipo'].'</h1>
									<h2>'.$arrData[$i]['cargo_equipo'].'</h2>
									<h2 class="mt-2">Participante Lcdo. Admón. RRHH</h2>
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
	public function carreras(){
		//invocar la vista con views y usamos getView y pasamos parametros esta clase y la vista
		//incluimos un arreglo que contendra toda la informacion que se enviara al home
		$data['page_tag'] = "TITULO DE PAGINA";
		$data['page_title'] = "UNESR";
		$data['page_name'] = "plantilla";
		$arrData = $this->model->getInst();
		$data['tlf_instituto'] = $arrData['tlf_instituto'];
		$data['email_instituto'] = $arrData['email_instituto'];
		$data['direccion_instituto'] = $arrData['direccion_instituto'];
		$arrDataPens = $this->model->getPensamiento('nosotros');
		$data['pensamiento'] = $arrDataPens['pensamiento'];
		$data['page_functions'] = "function.sitio.js";
		$this->views->getViews($this, "carreras", $data);
	}

	public function getPensum(){
		$html = '';
		$arrData = $this->model->getDocumento('pensum');
		if(count($arrData) > 0 ){
			for ($i=0; $i < count($arrData); $i++) {
				$html .= '
						<li>
							<a href="#">'.$arrData[$i]['nombre_documento'].'</a>
							<span><a href="../doc/'.$arrData[$i]['ruta_documento'].'" download="PENSUM">PDF</a></span>
						</li>
				';
			}
			echo $html;
			die();
		}
	}
	public function getPerfil(){
		$html = '';
		$arrData = $this->model->getDocumento('perfil');
		if(count($arrData) > 0 ){
			for ($i=0; $i < count($arrData); $i++) {
				$html .= '
						<li>
							<a href="#">'.$arrData[$i]['nombre_documento'].'</a>
							<span><a href="../doc/'.$arrData[$i]['ruta_documento'].'" download="perfil">PDF</a></span>
						</li>
				';
			}
			echo $html;
			die();
		}
	}
	/*********TODO: Vista *****************/
	public function captacion(){
		//invocar la vista con views y usamos getView y pasamos parametros esta clase y la vista
		//incluimos un arreglo que contendra toda la informacion que se enviara al home
		$data['page_tag'] = "TITULO DE PAGINA";
		$data['page_title'] = "UNESR";
		$data['page_name'] = "plantilla";
		$arrData = $this->model->getInst();
		$data['tlf_instituto'] = $arrData['tlf_instituto'];
		$data['email_instituto'] = $arrData['email_instituto'];
		$data['direccion_instituto'] = $arrData['direccion_instituto'];
		$arrDataPens = $this->model->getPensamiento('nosotros');
		$data['pensamiento'] = $arrDataPens['pensamiento'];
		$data['page_functions'] = "function.sitio.js";
		$this->views->getViews($this, "captacion", $data);
	}	
	/*********TODO: Vista *****************/
	public function proceso(){
		//invocar la vista con views y usamos getView y pasamos parametros esta clase y la vista
		//incluimos un arreglo que contendra toda la informacion que se enviara al home
		$data['page_tag'] = "TITULO DE PAGINA";
		$data['page_title'] = "UNESR";
		$data['page_name'] = "proceso";
		$arrData = $this->model->getInst();
		$data['tlf_instituto'] = $arrData['tlf_instituto'];
		$data['email_instituto'] = $arrData['email_instituto'];
		$data['direccion_instituto'] = $arrData['direccion_instituto'];
		$arrDataPens = $this->model->getPensamiento('nosotros');
		$data['pensamiento'] = $arrDataPens['pensamiento'];
		$data['page_functions'] = "function.sitio.js";
		$this->views->getViews($this, "proceso", $data);
	}
	/*********TODO: Vista *****************/
	public function periodos(){
		//invocar la vista con views y usamos getView y pasamos parametros esta clase y la vista
		//incluimos un arreglo que contendra toda la informacion que se enviara al home
		$data['page_tag'] = "TITULO DE PAGINA";
		$data['page_title'] = "UNESR";
		$data['page_name'] = "plantilla";
		$arrData = $this->model->getInst();
		$data['tlf_instituto'] = $arrData['tlf_instituto'];
		$data['email_instituto'] = $arrData['email_instituto'];
		$data['direccion_instituto'] = $arrData['direccion_instituto'];
		$arrDataPens = $this->model->getPensamiento('nosotros');
		$data['pensamiento'] = $arrDataPens['pensamiento'];
		$data['page_functions'] = "function.sitio.js";
		$this->views->getViews($this, "periodos", $data);
	}
	/*********TODO: Vista *****************/
	public function evento(){
		//invocar la vista con views y usamos getView y pasamos parametros esta clase y la vista
		//incluimos un arreglo que contendra toda la informacion que se enviara al home
		$data['page_tag'] = "TITULO DE PAGINA";
		$data['page_title'] = "UNESR";
		$data['page_name'] = "plantilla";
		$arrData = $this->model->getInst();
		$data['tlf_instituto'] = $arrData['tlf_instituto'];
		$data['email_instituto'] = $arrData['email_instituto'];
		$data['direccion_instituto'] = $arrData['direccion_instituto'];
		$arrDataPens = $this->model->getPensamiento('nosotros');
		$data['pensamiento'] = $arrDataPens['pensamiento'];
		$data['page_functions'] = "function.sitio.js";
		$this->views->getViews($this, "evento", $data);
	}

	public function eventListAll(){
		$html = '';
		$arrData = $this->model->eventListAll();
		$html .= '';
		if(count($arrData) > 0){
				$html .= '
					<div class="row">
						';
			for ($i=0; $i < count($arrData); $i++) {
				$html .= '
						<div class="col-xl-4 col-lg-4 col-md-6">
							<div class="blog-wrapper mb-30">
								<div class="blog-thumb mb-25">
									<a href="#"><img src="'.IMG.$arrData[$i]['img_evento'].'" alt=""></a>
									<span class="blog-category">'.substr($arrData[$i]['fecha_evento'], 8, 2).'</span>
								</div>
								<div class="blog-content">
									<div class="blog-meta">
										<span>'.formatear_fecha($arrData[$i]['fecha_evento']).'</span>
									</div>
									<h5><a href="#">'.$arrData[$i]['nombre_evento'].'</a></h5>
									<p>'.$arrData[$i]['cuerpo_evento'].'</p>
									<div class="read-more-btn">
										<button>Ponente :'.$arrData[$i]['ponente_evento'].'</button>
									</div>
								</div>
							</div>
						</div>
					';
			}
			$html .= '
					</div>
        
			';
		}else{
			$html .= '
				<div class="row">
					<div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
						<div class="section-title mb-50 text-center">
								<div class="section-title-heading mb-20">
									<h1 class="primary-color">No se encontraron eventos</h1>
								</div>
								<div class="section-title-para">
									<p class="primary-color">Proximamente encotraras los eventos que la universidad dictara</p>
								</div>
						</div>
					</div>';
		}
		$html .='</div> ';
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
		$data['tlf_instituto'] = $arrData['tlf_instituto'];
		$data['email_instituto'] = $arrData['email_instituto'];
		$data['direccion_instituto'] = $arrData['direccion_instituto'];
		$arrDataPens = $this->model->getPensamiento('nosotros');
		$data['pensamiento'] = $arrDataPens['pensamiento'];
		$data['page_functions'] = "function.sitio.js";
		$this->views->getViews($this, "plantilla", $data);
	}
}