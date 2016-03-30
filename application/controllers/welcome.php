<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
	}

	function index()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$this->load->view('home/head');
			$this->load->view('home/contenido');
			$this->load->view('home/footer');

		}
	}
	function vision(){
				if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$this->load->view('home/head');
			$this->load->view('nosotros/vision');
			$this->load->view('home/footer');

		}

	}
	function mision(){
				if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$this->load->view('home/head');
			$this->load->view('nosotros/index');
			$this->load->view('home/footer');


		}


	}
		function vista_cliente_nuevo(){
				if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$this->load->view('home/head');
			$this->load->view('cliente/index');
			$this->load->view('home/footer');


		}


	}
			function vista_cliente_consultar(){
				if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$this->load->view('home/head');
			$this->load->view('nosotros/index');
			$this->load->view('home/footer');


		}


	}

			function vista_factura_nuevo(){
				if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$this->load->view('home/head');
			$this->load->view('factura/index');
			$this->load->view('home/footer');


		}


	}

				function vista_factura_consultar(){
				if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$this->load->view('home/head');
			$this->load->view('nosotros/index');
			$this->load->view('home/footer');


		}


	}

				function vista_usuario_nuevo(){
				if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$this->load->view('home/head');
			$this->load->view('usuario/index');
			$this->load->view('home/footer');


		}


	}

			function vista_usuario_consultar(){
				if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$this->load->view('home/head');
			$this->load->view('nosotros/index');
			$this->load->view('home/footer');


		}


	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */