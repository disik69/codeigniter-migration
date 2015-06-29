<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Test extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->addJS('123/12345.js');
        $this->addCSS('123/12345.css');
    }
    
    public function index()
    {
        $this->layout('test', array('test' => 123));
    }
}

