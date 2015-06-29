<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Test extends MY_Controller
{
    public function index()
    {
        write_to_log($_ENV);
        echo '!!!';
    }
}

