<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Ringcentral extends AdminController
{
    public function index(){
        
        $this->load->model('Ringcentral_model');
        $allringcentralRecords = $this->Ringcentral_model->getAllRecords();

        $this->load->view('index', ['allringcentralRecords' => $allringcentralRecords]);
    }
}
