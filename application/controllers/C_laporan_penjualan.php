<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_laporan_penjualan extends CI_Controller {

    private $header_data;

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array("url"));
        if(isset($this->uri->segments[1]))
        {
            $this->header_data['controller'] = $this->uri->segments[1];
        }
        else
        {
            redirect('C_home');
        }

    }

    public function index()
    {
        //echo $this->uri->segments[1];
        $this->load->view('header');
        $this->load->view('side_menu', $this->header_data);
        $this->load->view('topnav');
        $this->load->view('laporan_penjualan');
        $this->load->view('footer');
    }
}

?>