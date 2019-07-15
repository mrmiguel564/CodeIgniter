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
		$data['titulo'] = 'titulo'
		$this->load->view('subtitulo',$data);	
		/* comienzo cuerpo*/

		$this->load->view('card');	
		$this->load->view('card');




		/* fin cuerpo*/
		$this->load->view('finalpag');

		
	}
}