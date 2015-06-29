<?php

defined('BASEPATH') || exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    protected $js = array();
    
    protected $css = array();
    
    public function __construct()
    {
        parent::__construct();
    }
    
    protected function addJS($filename)
    {
        $this->js[] = $filename;
    }
    
    protected function addCSS($filename)
    {
        $this->css[] = $filename;
    }
    
    protected function layout($view, $data = array())
    {
        $layoutData['js'] = $this->js;
        $layoutData['css'] = $this->css;
        $layoutData['content'] = $this->load->view($view, $data, true);
        
        $this->load->view('layouts/index', $layoutData);
    }
}

