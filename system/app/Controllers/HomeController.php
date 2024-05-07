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
	/****************TODO: VISTA ******************/
	public function home(){
		//invocar la vista con views y usamos getView y pasamos parametros esta clase y la vista
		//incluimos un arreglo que contendra toda la informacion que se enviara al home
		$data['page_tag'] = "TITULO DE PAGINA";
		$data['page_title'] = "UNESR";
		$data['page_name'] = "home";
		// uso para activar los link en los enlaces
		// $data['page_menu'] = "usuarios";
		// $data['page_link'] = "usuarios";
		// $data['page_menu_open'] = "user-menu";
		// $data['page_link_acitvo'] = "link-user";
		$data['page_functions'] = "function.home.js";
		$arrData = $this->model->getInst();
		$data['tlf_instituto'] =$arrData['tlf_instituto'];
		$data['email_instituto'] =$arrData['email_instituto'];
		$data['direccion_instituto'] =$arrData['direccion_instituto'];

		$this->views->getViews($this, "home", $data);
	}
	public function eventList(){
		$html = '';
		$arrData = $this->model->eventList();
		$html .= '';
		if(count($arrData) > 0){
				$html .= '
						<div class="row">
							<div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
									<div class="section-title mb-50 text-center">
											<div class="section-title-heading mb-20">
													<h1 class="white-color">Proximos eventos</h1>
											</div>
											<div class="section-title-para">
													<p class="white-color">Belis nisl adipiscing sapien sed malesu diame lacus eget erat Cras mollis scelerisqu Nullam arcu liquam here was consequat.</p>
											</div>
									</div>
							</div>
					</div>
					<div class="events-list mb-30">
						<div class="row">
						';
			for ($i=0; $i < count($arrData); $i++) {
				$html .= '
						<div class="col-xl-6 col-lg-6 single-events mb-30">
							<div class="events-wrapper">
								<div class="events-inner d-flex">
									<div class="events-thumb">
										<img src="<?= IMG ?>events/eventsthumb1.png" alt="">
									</div>
									<div class="events-text white-bg">
										<div class="event-text-heading mb-20">
											<div class="events-calendar text-center f-left">
												<span class="date">'.substr($arrData[$i]['fecha_evento'], 8, 2).'</span>
												<span class="month">'.formatear_fecha($arrData[$i]['fecha_evento']).'</span>
											</div>
											<div class="events-text-title clearfix">
												<a href="#">
													<h4>'.$arrData[$i]['nombre_evento'].'</h4>
												</a>
												<div class="time-area">
														<span class="ti-time"></span>
														<span class="published-time">'.$arrData[$i]['hora_evento'].'</span>
												</div>
											</div>
										</div>
										<div class="events-para">
											<p>'.substr($arrData[$i]['cuerpo_evento'],0,200).'...</p>
										</div>
										<div class="events-speaker">
											<h2>Ponente : <span>'.substr($arrData[$i]['ponente_evento'],0,80).'</span></h2>
										</div>
									</div>
								</div>
							</div>
						</div>
					';
			}
			$html .= '
				</div>
            </div>
            <div class="events-view-btn">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="view-all-events text-center">
                            <a href="'.base_url().'sitio/evento"class="text-white">ver todos los eventos<span>&rarr;</span></a>
                        </div>
                    </div>
                </div>
            </div>
			';
		}else{
			$html .= '
						<div class="row">
							<div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
									<div class="section-title mb-50 text-center">
											<div class="section-title-heading mb-20">
													<h1 class="white-color">No se encontraron eventos</h1>
											</div>
											<div class="section-title-para">
													<p class="white-color">Proximamente encotraras los eventos que la universidad dictara</p>
											</div>
									</div>
							</div>';
		}
		$html .='</div> ';
		echo $html;
		die();
	}
}