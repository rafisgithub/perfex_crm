<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Ringcentral extends AdminController
{
    public function index()
    {
        $this->load->view('index');
    }
}
