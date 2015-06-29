<?php

defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Writing variable to log file
 *
 * @param mixed $expression
 *
 * @param mixed $_
 */
function write_to_log($expression, $_ = null)
{
    foreach (func_get_args() as $key => $value) {
        $output['OUTPUT ' . ++$key] = $value;
    }

    log_message('error', '<?php' . PHP_EOL . var_export($output, true) . PHP_EOL . '?>');
}
