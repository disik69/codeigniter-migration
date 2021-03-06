<?php

defined('BASEPATH') || exit('No direct script access allowed');

function prepare_dropdown($array, $key, $value)
{
    return array_combine(
        array_column($array, $key),
        array_column($array, $value)
    );
}
