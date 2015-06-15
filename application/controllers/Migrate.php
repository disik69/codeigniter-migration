<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migrate extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        if (is_cli()) {
            $this->load->library('migration');
        } else {
            show_404();
        }
    }
    
    public function __call($name, $arguments)
    {
        $result = $this->migration->$name();
        $result = $this->migration->current();
        
        
        if ($result) {
            echo $result . PHP_EOL;
        } else {
            echo 'Error' . PHP_EOL;
        }
    }
}
