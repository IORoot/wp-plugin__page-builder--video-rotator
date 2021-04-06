<?php

namespace andyp\pagebuilder\rotator\filters;

use andyp\pagebuilder\rotator\build\init;

class filter_module
{

    public function __construct()
    {
        add_filter('pagebuilder_content_rotator', [$this, 'filter_code'], 10, 1);
    }


    public function filter_code($organism)
    {
        if (empty($organism['enabled'])){ return; }
        if ($organism['acf_fc_layout'] != 'content_rotator'){ return; }

        $rotator = new init;
        $rotator->set_config($organism);
        $rotator->run();

        return $rotator->get_result();
    }

}