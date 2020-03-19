<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


/**
 * json response for ajax
 */
if (!function_exists('json_msg')) {

    function json_msg($status = false, $code = 0, $message = '')
    {
        if (!empty($status)) {
            $result['status'] = $status;
        }
        if (!empty($code)) {
            $result['code'] = $code;
        }
        if (!empty($message)) {
            $result['msg'] = $message;
        }

        return json_encode($result);
    }
}
