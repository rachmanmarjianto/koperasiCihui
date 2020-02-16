<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pos extends CI_Controller {

    private $header_data;

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array("url", "form"));
        $this->load->model('M_pos');

        if(isset($this->uri->segments[1]))
            $this->header_data['controller'] = $this->uri->segments[1];   
    }

    public function index()
    {
        
        $this->load->view('pos/header');
        $this->load->view('pos/topnav');
        $this->load->view('pos/pos');
        $this->load->view('pos/footer');
    }

    public function findProduct()
    {
        echo $this->M_pos->findProduct($_POST['barcode']);
    }

    public function submitForm()
    {
        print_r($_POST);
    }
}

?>