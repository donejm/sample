<?php
    /**
    *
    */
    class Api extends CI_Controller
    {

        function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
        }

        function index(){
          redirect(site_url('admin/main'));
        }


    }
?>
