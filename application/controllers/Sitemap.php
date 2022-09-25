<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Sitemap extends CI_Controller {


    /**
     * Index Page for this controller.
     *
     */
    public function index()
    {
        $check =array('cm','meter','feet','mm','inches','km','mile','yard');
        $data['lenths'] = $check;
        $this->load->view('sitemap', $data);
    }
    public function height()
    {
        $check =array('cm','meter','feet','mm','inches','km','mile','yard');
        $data['lenths'] = $check;
        $this->load->view('sitemap1', $data);
    }
}