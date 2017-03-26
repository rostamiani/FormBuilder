<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
		$this->load->library('FormBuilder');

		$frm = new FormBuilder();

		$frm->form_params('/','','');
		$frm->add_input('text','name','','disabled');
		$frm->add_input('text','name2','','class="btn"');
		$frm->add_input('text','name3','','disabled');
		$frm->add_input('text','name4','','disabled');

		echo $frm->generate();
	}

}

/* End of file test.php */
/* Location: ./application/controllers/test.php */