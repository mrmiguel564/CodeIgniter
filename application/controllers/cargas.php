<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cargas extends CI_Controller {

	function __construct(){
		parent::__construct();

		}
	public function index(){

		$this->load->view('cabezapag'); 
		$this->load->view('sidebar');	// modificar para que con una variable poder selecionar que opcion esta marcada
		$this->load->view('topbar');
		$dato['titulo'] = 'campo tarjeta'; // remplazar por lo retornado por la base de datos
		$this->load->view('subtitulo',$dato);	
		/* comienzo cuerpo*/

		$this->load->view('card');	
		$this->load->view('card');




		/* fin cuerpo*/
		$this->load->view('finalpag');

		
	}
}
