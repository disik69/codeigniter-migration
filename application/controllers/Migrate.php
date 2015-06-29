<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migrate extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        if (is_cli()) {
            $this->load->library('migration');
            $this->db->query('SET foreign_key_checks = 0');
        } else {
            show_404();
        }
    }
    
    public function latest()
    {
        $result = $this->migration->latest() . PHP_EOL;
        
        if (!$result) {
            echo $this->migration->error_string() . PHP_EOL;
        }
        
        echo $result;
    }
    
    public function current()
    {
        $result = $this->migration->current() . PHP_EOL;
        
        if (!$result) {
            $result = $this->migration->error_string() . PHP_EOL;
        }
        
        echo $result;
    }
    
    public function reload()
    {
        $this->current();
        $this->latest();
    }
}

