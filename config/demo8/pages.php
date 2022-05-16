<?php
return array(
    '' => array(
        'title'       => 'Dashboard',
        'description' => '#XRS-45670',
        'view'        => 'index',
        'layout'      => array(
            'page-title' => array(
                'description' => false,
                'breadcrumb'  => true,
            ),
        ),
        'assets'      => array(
            'vendors' => array(
                'css' => array(
                    'plugins/custom/fullcalendar/fullcalendar.bundle.css',
                ),
                'js'  => array(
                    'plugins/custom/fullcalendar/fullcalendar.bundle.js',
                ),
            ),
            'layout'  => array(
                'js' => array(
                    'js/layout/toolbar.js',
                ),
            ),
        ),
    ),
);
