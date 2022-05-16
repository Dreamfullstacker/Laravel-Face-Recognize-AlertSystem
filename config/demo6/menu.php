<?php

use App\Core\Adapters\Theme;

return array(
    'demo6-aside' => array(
        // Dashboard
        ''     => array(
            "title"      => "Home",
            "icon"       => '<i class="bi bi-house fs-2"></i>',
            "attributes" => array(
                'link' => array(
                    "data-bs-trigger"   => "hover",
                    "data-bs-dismiss"   => "click",
                    "data-bs-placement" => "right",
                ),
            ),
            "classes"    => array(
                "item" => "py-2",
                "link" => "menu-center",
                "icon" => "me-0",
            ),
            "path"       => "",
        ),

        // Account
        'account'   => array(
            "title"      => "Account",
            "icon"       => '<i class="bi bi-shield-check fs-2"></i>',
            "classes"    => array(
                "item" => "py-2",
                "link" => "menu-center",
                "icon" => "me-0",
            ),
            "attributes" => array(
                "item" => array(
                    "data-kt-menu-trigger"   => "click",
                    "data-kt-menu-placement" => Theme::isRTL() ? "left-start" : "right-start",
                ),
                'link' => array(
                    "data-bs-trigger"   => "hover",
                    "data-bs-dismiss"   => "click",
                    "data-bs-placement" => "right",
                ),
            ),
            "arrow"      => false,
            "sub"        => array(
                "class" => "menu-sub-dropdown w-225px px-1 py-4",
                "items" => array(
                    array(
                        'classes' => array('content' => ''),
                        'content' => '<span class="menu-section fs-5 fw-bolder ps-1 py-1">Account</span>',
                    ),

                    array(
                        'title'  => 'Overview',
                        'path'   => 'account/overview',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'Settings',
                        'path'   => 'account/settings',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'      => 'Security',
                        'path'       => '#',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                        'attributes' => array(
                            'link' => array(
                                "title"             => "Coming soon",
                                "data-bs-toggle"    => "tooltip",
                                "data-bs-trigger"   => "hover",
                                "data-bs-dismiss"   => "click",
                                "data-bs-placement" => "right",
                            ),
                        ),
                    ),
                ),
            ),
        ),

        // Users
        'system'    => array(
            "title"      => "System",
            "icon"       => '<i class="bi bi-layers fs-2"></i>',
            "classes"    => array(
                "item" => "py-2",
                "link" => "menu-center",
                "icon" => "me-0",
            ),
            "attributes" => array(
                "item" => array(
                    "data-kt-menu-trigger"   => "click",
                    "data-kt-menu-placement" => Theme::isRTL() ? "left-start" : "right-start",
                ),
                'link' => array(
                    "data-bs-trigger"   => "hover",
                    "data-bs-dismiss"   => "click",
                    "data-bs-placement" => "right",
                ),
            ),
            "arrow"      => false,
            "sub"        => array(
                "class" => "menu-sub-dropdown w-225px px-1 py-4",
                "items" => array(
                    array(
                        'classes' => array('content' => ''),
                        'content' => '<span class="menu-section fs-5 fw-bolder ps-1 py-1">System</span>',
                    ),

                    array(
                        'title'      => 'Settings',
                        'path'       => '#',
                        'bullet'     => '<span class="bullet bullet-dot"></span>',
                        'attributes' => array(
                            'link' => array(
                                "title"             => "Coming soon",
                                "data-bs-toggle"    => "tooltip",
                                "data-bs-trigger"   => "hover",
                                "data-bs-dismiss"   => "click",
                                "data-bs-placement" => "right",
                            ),
                        ),
                    ),
                    array(
                        'title'  => 'Audit Log',
                        'path'   => 'log/audit',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'System Log',
                        'path'   => 'log/system',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                ),
            ),
        ),

        // Resources
        'resources' => array(
            "title"      => "More",
            "icon"       => '<i class="bi bi-gear fs-2"></i>',
            "classes"    => array(
                "item" => "py-2",
                "link" => "menu-center",
                "icon" => "me-0",
            ),
            "attributes" => array(
                "item" => array(
                    "data-kt-menu-trigger"   => "click",
                    "data-kt-menu-placement" => Theme::isRTL() ? "left-start" : "right-start",
                ),
                'link' => array(
                    "data-bs-trigger"   => "hover",
                    "data-bs-dismiss"   => "click",
                    "data-bs-placement" => "right",
                ),
            ),
            "arrow"      => false,
            "sub"        => array(
                "class" => "menu-sub-dropdown w-225px px-1 py-4",
                "items" => array(
                    array(
                        'classes' => array('content' => ''),
                        'content' => '<span class="menu-section fs-5 fw-bolder ps-1 py-1">Resources</span>',
                    ),

                    // Documentation
                    array(
                        'title'      => 'Documentation',
                        "attributes" => array(
                            'link' => array(
                                "title"             => 'Check out the complete documentation',
                                "data-bs-toggle"    => "tooltip",
                                "data-bs-trigger"   => "hover",
                                "data-bs-dismiss"   => "click",
                                "data-bs-placement" => "right",
                            ),
                        ),
                        'icon'       => array(
                            'svg'  => Theme::getSvgIcon("icons/duotune/abstract/abs027.svg", "svg-icon-2"),
                            'font' => '<i class="bi bi-box fs-3"></i>',
                        ),
                        'path'       => 'documentation/getting-started/overview',
                    ),

                    // Changelog
                    array(
                        'title' => 'Changelog v'.Theme::getVersion(),
                        'icon'  => array(
                            'svg'  => Theme::getSvgIcon("icons/duotune/general/gen005.svg", "svg-icon-2"),
                            'font' => '<i class="bi bi-card-text fs-3"></i>',
                        ),
                        'path'  => 'documentation/getting-started/changelog',
                    ),
                ),
            ),
        ),
    ),
);
