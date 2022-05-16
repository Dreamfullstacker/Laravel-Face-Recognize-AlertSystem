<?php

return array(
    'v8.0.38' => array(
        'date'      => '30 March, 2022',
        'changelog' => array(
            'new' => array(),

            'update' => array(
                'Update and sync core assets from the HTML version.',
                'Documentation improvement.',
                'Upgrade <code>LogReader</code> plugin to work with Laravel 9',
            ),

            'fix' => array(
                'Fix dark mode for demo7.',
                'Fix <code>jstree</code> missing image.',
                'Remove <code>jquery</code> autoload in the webpack mix.',
                'Fix datatable spacing.',
                'Fix <code>LogReader</code> plugin error for datatable demo page.',
            ),
        ),
    ),

    'v8.0.37' => array(
        'date'      => '4 March, 2022',
        'changelog' => array(
            'new' => array(),

            'update' => array(
                'Improve Laravel version 9 integration.',
                'Update and sync core assets from the HTML version.',
                'Improve README file documentation.',
            ),

            'fix' => array(
                'Fix Laravel 9 installation error.',
                'Remove <code>fideloper/proxy</code> old library to support Laravel 9.',
                'Remove <code>laravel-page-speed</code> old library to support Laravel 9.',
            ),
        ),
    ),

    'v8.0.36' => array(
        'date'      => '12 February, 2022',
        'changelog' => array(
            'new' => array(
                'Added a new icons set - <code>fonticons</code>.',
                'Added a new <code>dark mode</code> dropdown menu.',
            ),

            'update' => array(
                'Upgrade Laravel version 9',
                'Update core assets from the HTML version.',
                'Improve setup documentations.',
            ),

            'fix' => array(
                'Fixed the dropdown in Datatable. Use <code>KTMenu.createInstances();</code> to reinitialize the dropdown.',
                'Fixed the authorization error after a long inactivity.',
                'Fixed code error when running <code>php artisan optimize</code> command.',
                'Fixed undefined route page and redirect to home page.',
                'Fixed missing vendor files <code>resources/views/vendor</code>',
            ),
        ),
    ),

    'v8.0.35' => array(
        'date'      => '12 January, 2022',
        'changelog' => array(
            'new' => array(
                'Added chat drawer component.',
            ),

            'update' => array(
                'Update package.json <code>@popperjs/core</code> version with <code>~2.10.1</code>',
                'Update core assets from the HTML version.',
            ),

            'fix' => array(
                'Fixed <code>popper</code> plugin dependency warning during <code>npm install</code>.',
                'Fixed <code>toastr</code> path using custom plugin <code>resources/assets/core/plugins/toastr/build/toastr.css</code>.',
                'Fixed <code>webpack-rtl-plugin</code> compilation error by updating its version to 2.0.0',
            ),
        ),
    ),

    'v8.0.34' => array(
        'date'      => '31 December, 2021',
        'changelog' => array(
            'new' => array(
                'Added engage toolbar.',
                'Added main menu toggle button in mobile view mode.',
            ),

            'update' => array(
                'Exclude pre-compiled assets.',
                'Update core assets from the HTML version.',
                'Update documentation.',
            ),

            'fix' => array(
                'Fixed active menu highlight for home page.',
            ),
        ),
    ),

    'v8.0.33' => array(
        'date'      => '17 December, 2021',
        'changelog' => array(
            'new' => array(),

            'update' => array(
                'Update core assets from the HTML version.',
                'Improved Webpack Mix integration to fix undefined jQuery plugin issues.',
                'Restrict <code>Popper</code> version to <code>v2.10.1</code> in <code>packages.json</code>.',
            ),

            'fix' => array(
                'Fixed <code>select2</code> dropdown position in the RTL mode and in the minified build.',
                'Fixed <code>select2</code> event <code>change.select2</code> not trigger',
                'Fixed undefined <code>select2</code> jquery plugin',
                'Fixed undefined <code>DataTables</code> jquery plugin when initialized multiple tables.',
                'Fixed missing <code>flatpickr</code> plugin CSS.',
                'Fixed missing <code>CSRF token</code> in the reset password page.',
                '<code>KTMenu</code> dropdown position issue caused by <code>Popper v2.11.0</code> auto update. Requires packages update with <code>Yarn</code>.',
            ),
        ),
    ),

    'v8.0.30' => array(
        'date'      => '11 November, 2021',
        'changelog' => array(
            'new' => array(),

            'update' => array(
                'Update core assets from HTML version.',
            ),

            'fix' => array(),
        ),
    ),

    'v8.0.29' => array(
        'date'      => '29 October, 2021',
        'changelog' => array(
            'new' => array(),

            'update' => array(
                'Menu title can render in the translation function <code>__(\'Title Text\')</code> via <code>config/global/menu.php</code> file.',
            ),

            'fix' => array(
                'Fixed null error in the menu permission function.',
            ),
        ),
    ),

    'v8.0.28' => array(
        'date'      => '14 October, 2021',
        'changelog' => array(
            'new' => array(
                'Added new <code>Demo 9</code>. See <a href="https://preview.keenthemes.com/metronic8/laravel/login?demo=demo9">preview</a>.',
                'Added new <code>Demo 9 Dark Mode</code>. See <a href="https://preview.keenthemes.com/metronic8/laravel/login?demo=demo9&mode=dark">preview</a>.',
            ),

            'update' => array(
                'Removed <code>index</code> from default home page URL.',
                'Use <code>preload</code> CSS files to improve application performance.',
            ),

            'fix' => array(
                'Fixed documentation file reference paths.',
                'Fixed <code>demo7</code> sample tabs menu.',
            ),
        ),
    ),

    'v8.0.27' => array(
        'date'      => '5 October, 2021',
        'changelog' => array(
            'new' => array(
                'Added new <code>Demo 8</code>. See <a href="https://preview.keenthemes.com/metronic8/laravel/login?demo=demo8">preview</a>.',
                'Added new <code>Demo 8 Dark Mode</code>. See <a href="https://preview.keenthemes.com/metronic8/laravel/login?demo=demo8&mode=dark">preview</a>.',
            ),

            'update' => array(),

            'fix' => array(
                'Removed and replaced PHP tags <code>'.htmlspecialchars('<?php ?>').'</code> with Laravel blade tags.',
            ),
        ),
    ),

    'v8.0.26' => array(
        'date'      => '30 September, 2021',
        'changelog' => array(
            'new' => array(
                'Added new <code>Demo 6</code>. See <a href="https://preview.keenthemes.com/metronic8/laravel/login?demo=demo6">preview</a>.',
            ),

            'update' => array(
                'Docs improvements to add new plugins and integrate within webpack mix.',
            ),

            'fix' => array(
                'Fixed RTL issue for <code>select2</code> dropdown plugin.',
                'Fixed token error in reset password page.',
                'Fixed demo5 webpack mix build error.',
                'Fixed demo5 login page missing images.',
            ),
        ),
    ),

    'v8.0.25' => array(
        'date'      => '20 September, 2021',
        'changelog' => array(
            'new' => array(
                'Added new <code>Demo 5</code>. See <a href="https://preview.keenthemes.com/metronic8/laravel/login?demo=demo5">preview</a>.',
                'Added new <code>Demo 7 Dark mode</code>. See <a href="https://preview.keenthemes.com/metronic8/laravel/login?demo=demo7&rtl=1">preview</a>.',
            ),

            'update' => array(
                'Update documentation for removing unused demos.',
                '<code>Bootstrap v5.1.1</code>update - <a href="https://blog.getbootstrap.com/2021/09/07/bootstrap-5-1-1/" class="fw-bold" target="_blank">Preview</a>.',
            ),

            'fix' => array(
                'Fixed null variable error <code>$info</code> in profile setting page.',
                '<code>KTMenu</code>dropdown alignment issue on mobile mode',
            ),
        ),
    ),

    'v8.0.24' => array(
        'date'      => '1 September, 2021',
        'changelog' => array(
            'new' => array(
                'Integrated demo dashboard charts (ApexCharts) with demo API calls. See <a href="https://preview.keenthemes.com/metronic8/laravel/index">preview</a>.',
            ),

            'update' => array(
                'Removed <code>data-kt-menu-flip</code> attributes from the HTML code of <code>KTMenu</code> instances to automatically handle the responsive and parent overflow modes.',
            ),

            'fix' => array(
                'Fixed <code>Overview</code> route page error.',
                'Fixed missing icons for RTL mode.',
                'Fixed <code>KTMenu</code> responsive and parent overflow issues.',
            ),
        ),
    ),

    'v8.0.23' => array(
        'date'      => '21 August, 2021',
        'changelog' => array(
            'new' => array(
                'Added new <code>Demo 3</code> layout. See <a href="https://preview.keenthemes.com/metronic8/laravel/login?demo=demo3">preview</a>.',
                'Added new <code>Demo 3</code> dark layout. See <a href="https://preview.keenthemes.com/metronic8/laravel/login?demo=demo3&mode=dark">preview</a>.',
            ),

            'update' => array(
                '<code>Duotone</code> SVG icons replaced with in-house designed <code>Duotune</code> icons',
                'Update illustration images.',
                'Improve core layout HTML classes for all demos.',
                'Support pages config for dynamic routes. Eg. <code>/users/{id}/edit</code>. See example in <code>app/Http/Controllers/UsersController.php</code>.',
            ),

            'fix' => array(
                'Fixed dropdown close when click on the input inside dropdown.',
                'Fixed webpack mix build for RTL with command. Use this command to build RTL <code>npm run dev --demo1 --rtl</code>.',
                'Fixed missing bootstrap icon files in webpack mix build.',
                '<code>.container</code> class changed to <code>.container-xxl</code> in demos layouts for better responsiveness in small to medium desktops.',
            ),
        ),
    ),

    'v8.0.22' => array(
        'date'      => '06 August, 2021',
        'changelog' => array(
            'new' => array(
                'Added new <code>Demo 4</code> layout. See <a href="https://preview.keenthemes.com/metronic8/laravel/login?demo=demo4">preview</a>.',
            ),

            'update' => array(
                'Enable dark mode for <code>Demo 2</code>. See <a href="https://preview.keenthemes.com/metronic8/laravel/login?demo=demo2&mode=dark">preview</a>.',
                'Move <code>Demo 3</code> to <code>Demo 7</code>.',
            ),

            'fix' => array(
                'Fixed menu icon path in demo1 was imported from different demo assets.',
                'Use Laravel helper function <code>asset()</code> for images.',
                'Use Laravel helper function <code>@php ... @endphp</code> for additional PHP code in the blade file.',
                'Show 404 page for non-exist demo.',
            ),
        ),
    ),

    'v8.0.21' => array(
        'date'      => '30 July, 2021',
        'changelog' => array(
            'new' => array(
                'Added new <code>Demo 3</code> layout. See <a href="https://preview.keenthemes.com/metronic8/laravel/login?demo=demo3">preview</a>.',
            ),

            'update' => array(
                'Avatar image URL path with <code>subdir</code> option',
            ),

            'fix' => array(),
        ),
    ),

    'v8.0.20' => array(
        'date'      => '26 July, 2021',
        'changelog' => array(
            'new' => array(),

            'update' => array(
                'Webpack mix enhancement for <code>Datatable</code> plugin.',
                'Rename function name <code>skin</code> to <code>mode</code> globally.',
            ),

            'fix' => array(
                'Fixed redirect <code>demo2</code> after login for preview.',
            ),
        ),
    ),

    'v8.0.19' => array(
        'date'      => '21 July, 2021',
        'changelog' => array(
            'new' => array(),

            'update' => array(
                'Rename <code>dark-skin</code> to <code>dark-mode</code> globally.',
            ),

            'fix' => array(
                'Fixed change password using wrong variable name.',
                'Error handling if <code>Spatie Permission</code> plugin exist.',
            ),
        ),
    ),

    'v8.0.18' => array(
        'date'      => '16 July, 2021',
        'changelog' => array(
            'new' => array(
                'Added new <code>Demo 2</code> layout. Updated <code>webpack.mix.js</code> to build <code>Demo 2</code> asset files. See <a href="https://preview.keenthemes.com/metronic8/laravel/login?demo=demo2">preview</a>.',
                'Added <code>Demo 1 Dark Mode</code>. Updated <code>webpack.mix.js</code> to build dark CSS files. See <a href="https://preview.keenthemes.com/metronic8/laravel/index?mode=dark">preview</a>',
            ),

            'update' => array(
                'Folder restructure of <code>view</code> and <code>assets</code> to support multi demos.',
                'Rename helper function <code>assetIfHasRTL()</code> to <code>assetCustom()</code>.',
                'Moved shared config for demos to global config <code>config/global</code>',
                'Update <code>package.json</code> plugin packages version.',
                'Update <code>composer.json</code> plugin packages version.',
                'Update <code>webpack.mix.js</code> file to rename output CSS file name <code>plugins/global/extend.bundle.css</code> to <code>plugins/global/plugins-custom.bundle.css</code>',
                'Update <code>datatable</code> plugin in <code>webpack.mix.js</code> file.',
            ),

            'fix' => array(
                'Fixed missing breadcrumb in the documentation page.',
            ),
        ),
    ),

    'v8.0.17' => array(
        'date'      => '06 July, 2021',
        'changelog' => array(
            'new' => array(),

            'update' => array(
                'New documentation layout integration.',
                'Update <code>webpack.mix.js</code> to move reusable assets to global.',
            ),

            'fix' => array(
                'Fixed page configuration with asterisk (<code>*</code>) path.',
            ),
        ),
    ),

    'v8.0.16' => array(
        'date'      => '29 June, 2021',
        'changelog' => array(
            'new' => array(
                'Added <code>Account Overview</code> demo page.',
                'Added <code>Change Password</code> feature on profile page.',
                'Added <code>Change Email</code> feature on profile page.',
                'Added <code>Audit Log</code> listing page. The logs are automatically created by the user\'s activity in the user Model. Eg. Registering, reset password, update email, update user information, etc.',
                'Added <code>Laravel Socialite</code> plugin package and demo Google login integration.',
            ),

            'update' => array(
                'Update Laravel <code>Breeze</code> package version.',
            ),

            'fix' => array(
                'Fixed page redirect to login page after successfully reset password.',
                'Fixed <code>Datatables</code> loading spinner.',
                'Fixed avatar image for internal image path and external image path registered by Google login.',
                'Fixed sample code formatting in the documentation pages.',
            ),
        ),
    ),

    'v8.0.15' => array(
        'date'      => '17 June, 2021',
        'changelog' => array(
            'new' => array(
                'Added <code>Account Settings</code> demo page with ajax form.',
                'Added <code>avatar</code> image upload and view.',
            ),

            'update' => array(
                'Separated <code>name</code> into two fields; <code>first_name</code> and <code>last_name</code>.',
            ),

            'fix' => array(
                'Fixed <code>reference</code> page to list all plugins from <code>composer.json</code>.',
                'Fixed <code>datatable</code> listing demo column width.',
            ),
        ),
    ),

    'v8.0.14' => array(
        'date'      => '8 June, 2021',
        'changelog' => array(
            'new' => array(
                'Added <code>System Error Log</code> demo page.',
            ),

            'update' => array(),

            'fix' => array(),
        ),
    ),

    'v8.0.13' => array(
        'date'      => '4 June, 2021',
        'changelog' => array(
            'new' => array(
                'Added <code>PHPUnit Test</code> for basic pages.',
            ),

            'update' => array(
                'Synced with the latest Metronic 8 HTML version core assets.',
            ),

            'fix' => array(
                'Fixed <code>@else</code> code in <code>master.blade.php</code>.',
                'Fixed SVG icon display',
            ),
        ),
    ),

    'v8.0.12' => array(
        'date'      => '31 May, 2021',
        'changelog' => array(
            'new' => array(
                '<code>Demo 1 Laravel 8</code> version - <a href="https://preview.keenthemes.com/metronic8/laravel/" class="fw-bold" target="_blank">Preview</a>.',
            ),

            'update' => array(),

            'fix' => array(),
        ),
    ),
);
