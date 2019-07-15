<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My404 extends CI_Controller{
    function __construct(){
		parent::__construct();
   }
   public function index(){
   		$dato1['message'] = 'weaaaaa';
   		$dato2['heading'] = 'weaasdaaaaa';
       	$this->load->view('error_404',$dato1,$dato2);    
  }
}