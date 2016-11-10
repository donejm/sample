<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	function __construct()
    {
        parent::__construct();
    }

	function index()
	{
		$this->data['subview'] = 'admin/main/index';
    $this->load->view('admin/_layout_main', $this->data);
	}
}
