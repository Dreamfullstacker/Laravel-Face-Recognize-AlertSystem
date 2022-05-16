<x-base-layout>

    <!--begin::Section-->
    <div class="pb-10">
        <!--begin::Heading-->
        <h1 class="anchor fw-bolder mb-5" id="title">
            <a href="#title"></a>
            {{ theme()->getPageTitle() }}
        </h1>
        <!--end::Heading-->

        <!--begin::Block-->
        <div class="py-5">
            <p class="mb-3">
                The laravel use <a href="https://laravel.com/docs/8.x/mix" target="_blank">Laravel Mix</a> provides a fluent API for defining webpack build steps.
                The Laravel Mix config can be found in <code>laravel/webpack.mix.js</code>.
            </p>
        </div>
        <!--end::Block-->

        <!--begin::List-->
        <ol class="py-5">
            <li class="pt-0 pb-3">Install the NPM plugin</li>

            <li class="py-3">Add the JS plugin path file to <code>resources/assets/core/plugins/plugins.js</code> and the CSS or SCSS file to <code>resources/assets/core/plugins/plugins.scss</code>. Check the example in this file.</li>

            <li class="py-3">Run the command <code>npm run dev --demo1</code></li>

            <li class="py-3">The output build files will be here, <code>public/demo1/plugins/global/plugins.bundle.js</code> and <code>public/demo1/plugins/global/plugins.bundle.css</code></li>
        </ol>
        <!--end::List-->
    </div>
    <!--end::Section-->

    <!--begin::Section-->
    <div class="pb-10">
        <!--begin::Heading-->
        <h1 class="anchor fw-bolder mb-5" id="js">
            <a href="#js"></a>
            JS Plugins
        </h1>
        <!--end::Heading-->

        <!--begin::Block-->
        <div class="py-5">
            <div class="py-5">
                {{ util()->highlight(file_get_contents(resource_path('assets/core/plugins/plugins.js')), 'js') }}
            </div>
        </div>
        <!--end::Block-->
    </div>
    <!--end::Section-->

    <!--begin::Section-->
    <div class="pb-10">
        <!--begin::Heading-->
        <h1 class="anchor fw-bolder mb-5" id="css">
            <a href="#css"></a>
            CSS Plugins
        </h1>
        <!--end::Heading-->

        <!--begin::Block-->
        <div class="py-5">
            <div class="py-5">
                {{ util()->highlight(file_get_contents(resource_path('assets/core/plugins/plugins.scss')), 'scss') }}
            </div>
        </div>
        <!--end::Block-->
    </div>
    <!--end::Section-->

</x-base-layout>
