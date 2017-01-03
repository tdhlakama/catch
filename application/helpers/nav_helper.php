<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
if (!function_exists('active_link')) {

    function active_link($controller)
    {
        $CI = &get_instance();

        $class = $CI->router->fetch_class();
        return ($class == $controller) ? 'active' : '';
    }

}

if (!function_exists('active_method')) {

    function active_method($method)
    {
        $CI = &get_instance();

        $action = $CI->router->method;
        return ($action == $method) ? 'active' : '';
    }

}

if (!function_exists('get_percentage')) {
    function get_percentage($total, $number)
    {
        if ($total > 0) {
            return round($number / ($total / 100), 2);
        } else {
            return 0;
        }
    }
}

if (!function_exists('get_preferences')) {
    function get_preferences($id)
    {
        $CI =& get_instance();
        $CI->load->model('preference_model');
        if ($id != 0) {
            $CI->preference_model->get_preference_list($id);
        }
    }
}

if (!function_exists('get_number_of_allowed_preferences')) {
    function get_number_of_allowed_preferences()
    {
        $CI =& get_instance();
        $CI->load->model('setting_model');
        $CI->setting_model->get_number_of_preferences_allowed();
    }
}


if (!function_exists('valid_yes_no')) {
    function valid_yes_no($value)
    {
        if ((strcasecmp($value, 'yes') == 0) || (strcasecmp($value, 'no') == 0)) {
            return $value;
        } else {
            return '<label class="m">' . $value . '</label>';
        }
    }
}

if (!function_exists('valid_gender')) {
    function valid_gender($value)
    {
        if ((strcasecmp($value, 'm') == 0) || (strcasecmp($value, 'f') == 0)) {
            return $value;
        } else {
            return '<label class="m">' . $value . '</label>';
        }
    }
}
if (!function_exists('valid_parent_status')) {
    function valid_parent_status($value)
    {
        if ((strcasecmp($value, 'alive') == 0) || (strcasecmp($value, 'dead') == 0) || (strcasecmp($value, 'absent') == 0)) {
            return $value;
        } else {
            return '<label class="m">' . $value . '</label>';
        }
    }
}
if (!function_exists('validate_yes_no')) {
    function get_validate_yes_no()
    {
        $CI =& get_instance();
        $CI->load->model('setting_model');
        $CI->setting_model->get_number_of_preferences_allowed();
    }
}

