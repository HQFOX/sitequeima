<?php
/**
 * Created by PhpStorm.
 * User: fox
 * Date: 07-05-2018
 * Time: 14:14
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Patrocinios extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('patrocinios');
        $this->load->view('template/footer');
    }
}
