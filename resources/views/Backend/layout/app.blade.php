<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default"
    data-assets_backend-path="{{ asset('assets_backend/')}}" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>


    <meta name="description"
        content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/item/sneat-bootstrap-html-admin-template/">

    <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <script async="" src="../../../../www.googletagmanager.com/gtm5445.html?id=GTM-5DDHKGP"></script>
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5DDHKGP');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon"
        href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/img/favicon/favicon.ico">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets_backend/vendor/fonts/boxicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_backend/vendor/fonts/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_backend/vendor/fonts/flag-icons.css') }}">

    <!-- Core CSS -->


    <link rel="stylesheet" href="{{ asset('assets_backend/css/demo.css') }}">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets_backend/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_backend/vendor/libs/typeahead-js/typeahead.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_backend/vendor/libs/bootstrap-select/bootstrap-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_backend/vendor/libs/select2/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_backend/vendor/libs/flatpickr/flatpickr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_backend/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_backend/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_backend/vendor/libs/jquery-timepicker/jquery-timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_backend/vendor/libs/pickr/pickr-themes.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_backend/vendor/libs/typeahead-js/typeahead.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_backend/vendor/libs/tagify/tagify.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_backend/vendor/libs/form-validation/umd/styles/index.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_backend/vendor/libs/dropzone/dropzone.css')}}">
    <!-- Page CSS -->

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <!-- Helpers -->
    <script src="{{ asset('assets_backend/vendor/js/helpers.js') }}"></script>
    <style type="text/css">
        .layout-menu-fixed .layout-navbar-full .layout-menu,
        .layout-menu-fixed-offcanvas .layout-navbar-full .layout-menu {
            top: 62px !important;
        }

        .layout-page {
            padding-top: 62px !important;
        }

        .content-wrapper {
            padding-bottom: 38.95000076293945px !important;
        }
    </style>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('assets_backend/vendor/js/template-customizer.js') }}"></script>
    <style>
        #template-customizer {
            font-family: "Open Sans", BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol" !important;
            font-size: inherit !important;
            position: fixed;
            top: 0;
            right: 0;
            height: 100%;
            z-index: 99999999;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 400px;
            background: #fff;
            -webkit-box-shadow: 0 0 20px 0 rgba(0, 0, 0, .2);
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, .2);
            -webkit-transition: all .2s ease-in;
            -o-transition: all .2s ease-in;
            transition: all .2s ease-in;
            -webkit-transform: translateX(420px);
            -ms-transform: translateX(420px);
            transform: translateX(420px)
        }

        #template-customizer h5 {
            position: relative;
            font-size: 11px
        }

        #template-customizer>h5 {
            flex: 0 0 auto
        }

        #template-customizer .disabled {
            color: #d1d2d3 !important
        }

        #template-customizer .form-label {
            font-size: .9375rem
        }

        #template-customizer .form-check-label {
            font-size: .8125rem
        }

        #template-customizer .template-customizer-t-panel_header {
            font-size: 1.125rem
        }

        #template-customizer.template-customizer-open {
            -webkit-transition-delay: .1s;
            -o-transition-delay: .1s;
            transition-delay: .1s;
            -webkit-transform: none !important;
            -ms-transform: none !important;
            transform: none !important
        }

        #template-customizer.template-customizer-open .custom-option.checked {
            color: var(--bs-primary);
            border-width: 2px
        }

        #template-customizer.template-customizer-open .custom-option.checked .custom-option-content {
            border: none
        }

        #template-customizer.template-customizer-open .custom-option .custom-option-content {
            border: 1px solid rgba(0, 0, 0, 0)
        }

        #template-customizer .template-customizer-header a:hover {
            color: inherit !important
        }

        #template-customizer .template-customizer-open-btn {
            position: absolute;
            top: 180px;
            left: 0;
            z-index: -1;
            display: block;
            width: 42px;
            height: 42px;
            border-top-left-radius: 15%;
            border-bottom-left-radius: 15%;
            background: var(--bs-primary);
            color: #fff !important;
            text-align: center;
            font-size: 18px !important;
            line-height: 42px;
            opacity: 1;
            -webkit-transition: all .1s linear .2s;
            -o-transition: all .1s linear .2s;
            transition: all .1s linear .2s;
            -webkit-transform: translateX(-62px);
            -ms-transform: translateX(-62px);
            transform: translateX(-62px)
        }

        @media(max-width: 991.98px) {
            #template-customizer .template-customizer-open-btn {
                top: 145px
            }
        }

        .dark-style #template-customizer .template-customizer-open-btn {
            background: var(--bs-primary)
        }

        #template-customizer .template-customizer-open-btn::before {
            content: "";
            width: 22px;
            height: 22px;
            display: block;
            background-size: 100% 100%;
            position: absolute;
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAABClJREFUaEPtmY1RFEEQhbsjUCIQIhAiUCNQIxAiECIQIxAiECIAIpAMhAiECIQI2vquZqnZvp6fhb3SK5mqq6Ju92b69bzXf6is+dI1t1+eAfztG5z1BsxsU0S+ici2iPB3vm5E5EpEDlSVv2dZswFIxv8UkZcNy+5EZGcuEHMCOBeR951uvVDVD53vVl+bE8DvDu8Pxtyo6ta/BsByg1R15Bwzqz5/LJgn34CZwfnPInI4BUB6/1hV0cSjVxcAM4PbcBZjL0XklIPN7Is3fLCkdQPpPYw/VNXj5IhPIvJWRIhSl6p60ULWBGBm30Vk123EwRxCuIzWkkjNrCZywith10ewE1Xdq4GoAjCz/RTXW44Ynt+LyBEfT43kYfbj86J3w5Q32DNcRQDpwF+dkQXDMey8xem0L3TEqB4g3PZWad8agBMRgZPeu96D1/C2Zbh3X0p80Op1xxloztN48bMQQNoc7+eLEuAoPSPiIDY4Ooo+E6ixeNXM+D3GERz2U3CIqMstLJUgJQDe+7eq6mub0NYEkLAKwEHkiBQDCZtddZCZ8d6r7JDwFkoARklHRPZUFVDVZWbwGuNrC4EfdOzFrRABh3Wnqhv+d70AEBLGFROPmeHlnM81G69UdSd6IUuM0GgUVn1uqWmg5EmMfBeEyB7Pe3txBkY+rGT8j0J+WXq/BgDkUCaqLgEAnwcRog0veMIqFAAwCy2wnw+bI2GaGboBgF9k5N0o0rUSGUb4eO0BeO9j/GYhkSHMHMTIqwGARX6p6a+nlPBl8kZuXMD9j6pKfF9aZuaFOdJCEL5D4eYb9wCYVCanrBmGyii/tIq+SLj/HQBCaM5bLzwfPqdQ6FpVHyra4IbuVbXaY7dETC2ESPNNWiIOi69CcdgSMXsh4tNSUiklMgwmC0aNd08Y5WAES6HHehM4gu97wyhBgWpgqXsrASglprDy7CwhehMZOSbK6JMSma+Fio1KltCmlBIj7gfZOGx8ppQSXrhzFnOhJ/31BDkjFHRvOd09x0mRBA9SFgxUgHpQg0q0t5ymPMlL+EnldFTfDA0NAmf+OTQ0X0sRouf7NNkYGhrOYNrxtIaGg83MNzVDSe3LXLhP7O/yrCsCz1zlWTpjWkuZAOBpX3yVnLqI1yLCOKU6qMrmP7SSrUEw54XF4WBIK5FxCMOr3lVsfGqNSmPzBXUnJTIX1jyVBq9wO6UObOpgC5GjO98vFKnTdQMZXxEsWZlDiCZMIxAbNxQOqlpVZtobejBaZNoBnRDzMFpkxvTQOD36BlrcySZuI6p1ACB6LU3wWuf5581+oHfD1vi89bz3nFUC8Nm7ZlP3nKkFbM4bWPt/MSFwklprYItwt6cmvpWJ2IVcQBCz6bLysSCv3SaANCiTsnaNRrNRqMXVVT1/BrAqz/buu/Y38Ad3KC5PARej0QAAAABJRU5ErkJggg==);
            margin: 10px
        }

        .customizer-hide #template-customizer .template-customizer-open-btn {
            display: none
        }

        [dir=rtl] #template-customizer .template-customizer-open-btn {
            border-radius: 0;
            border-top-right-radius: 15%;
            border-bottom-right-radius: 15%
        }

        [dir=rtl] #template-customizer .template-customizer-open-btn::before {
            margin-left: -2px
        }

        #template-customizer.template-customizer-open .template-customizer-open-btn {
            opacity: 0;
            -webkit-transition-delay: 0s;
            -o-transition-delay: 0s;
            transition-delay: 0s;
            -webkit-transform: none !important;
            -ms-transform: none !important;
            transform: none !important
        }

        #template-customizer .template-customizer-inner {
            position: relative;
            overflow: auto;
            -webkit-box-flex: 0;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
            opacity: 1;
            -webkit-transition: opacity .2s;
            -o-transition: opacity .2s;
            transition: opacity .2s
        }

        #template-customizer .template-customizer-inner>div:first-child>hr:first-of-type {
            display: none !important
        }

        #template-customizer .template-customizer-inner>div:first-child>h5:first-of-type {
            padding-top: 0 !important
        }

        #template-customizer .template-customizer-themes-inner {
            position: relative;
            opacity: 1;
            -webkit-transition: opacity .2s;
            -o-transition: opacity .2s;
            transition: opacity .2s
        }

        #template-customizer .template-customizer-theme-item {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -ms-flex-align: center;
            -webkit-box-flex: 1;
            -ms-flex: 1 1 100%;
            flex: 1 1 100%;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            margin-bottom: 10px;
            padding: 0 24px;
            width: 100%;
            cursor: pointer
        }

        #template-customizer .template-customizer-theme-item input {
            position: absolute;
            z-index: -1;
            opacity: 0
        }

        #template-customizer .template-customizer-theme-item input~span {
            opacity: .25;
            -webkit-transition: all .2s;
            -o-transition: all .2s;
            transition: all .2s
        }

        #template-customizer .template-customizer-theme-item .template-customizer-theme-checkmark {
            display: inline-block;
            width: 6px;
            height: 12px;
            border-right: 1px solid;
            border-bottom: 1px solid;
            opacity: 0;
            -webkit-transition: all .2s;
            -o-transition: all .2s;
            transition: all .2s;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg)
        }

        [dir=rtl] #template-customizer .template-customizer-theme-item .template-customizer-theme-checkmark {
            border-right: none;
            border-left: 1px solid;
            -webkit-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        #template-customizer .template-customizer-theme-item input:checked:not([disabled])~span,
        #template-customizer .template-customizer-theme-item:hover input:not([disabled])~span {
            opacity: 1
        }

        #template-customizer .template-customizer-theme-item input:checked:not([disabled])~span .template-customizer-theme-checkmark {
            opacity: 1
        }

        #template-customizer .template-customizer-theme-colors span {
            display: block;
            margin: 0 1px;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            -webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, .1) inset;
            box-shadow: 0 0 0 1px rgba(0, 0, 0, .1) inset
        }

        #template-customizer.template-customizer-loading .template-customizer-inner,
        #template-customizer.template-customizer-loading-theme .template-customizer-themes-inner {
            opacity: .2
        }

        #template-customizer.template-customizer-loading .template-customizer-inner::after,
        #template-customizer.template-customizer-loading-theme .template-customizer-themes-inner::after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 999;
            display: block
        }

        @media(max-width: 1200px) {
            #template-customizer {
                display: none;
                visibility: hidden !important
            }
        }

        @media(max-width: 575.98px) {
            #template-customizer {
                width: 300px;
                -webkit-transform: translateX(320px);
                -ms-transform: translateX(320px);
                transform: translateX(320px)
            }
        }

        .layout-menu-100vh #template-customizer {
            height: 100vh
        }

        [dir=rtl] #template-customizer {
            right: auto;
            left: 0;
            -webkit-transform: translateX(-420px);
            -ms-transform: translateX(-420px);
            transform: translateX(-420px)
        }

        [dir=rtl] #template-customizer .template-customizer-open-btn {
            right: 0;
            left: auto;
            -webkit-transform: translateX(62px);
            -ms-transform: translateX(62px);
            transform: translateX(62px)
        }

        [dir=rtl] #template-customizer .template-customizer-close-btn {
            right: auto;
            left: 0
        }

        #template-customizer .template-customizer-layouts-options[disabled] {
            opacity: .5;
            pointer-events: none
        }

        [dir=rtl] .template-customizer-t-style_switch_light {
            padding-right: 0 !important
        }
    </style>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets_backend/js/config.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_backend/vendor/css/rtl/core.css') }}"
        class="template-customizer-core-css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_backend/vendor/css/rtl/theme-default.css') }}"
        class="template-customizer-theme-css">
</head>

<body>


    <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">

            <!-- Menu -->
            @include('Backend/layout/menu')
            <!-- / Menu -->



            <!-- Layout container -->
            <div class="layout-page">

                <!-- Navbar -->
                @include('Backend/layout/navbar')
                <!-- / Navbar -->



                <!-- Content wrapper -->
                <div class="content-wrapper">

                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">

                        @yield('Content')

                    </div>
                    <!-- / Content -->




                    <!-- Footer -->
                    @include('Backend/layout/footer')
                    <!-- / Footer -->


                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>



        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>


        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>

    </div>
    <!-- / Layout wrapper -->


    <div class="buy-now">
        <a href="https://themeselection.com/item/sneat-bootstrap-html-admin-template/" target="_blank"
            class="btn btn-danger btn-buy-now">Buy Now</a>
    </div>









</body>


<script src="{{ asset('assets_backend/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('assets_backend/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('assets_backend/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets_backend/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets_backend/vendor/libs/hammer/hammer.js') }}"></script>
<script src="{{ asset('assets_backend/vendor/libs/i18n/i18n.js') }}"></script>
<script src="{{ asset('assets_backend/vendor/libs/typeahead-js/typeahead.js') }}"></script>
<script src="{{ asset('assets_backend/vendor/js/menu.js') }}"></script>

<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('assets_backend/vendor/libs/select2/select2.js') }}"></script>
<script src="{{ asset('assets_backend/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
<script src="{{ asset('assets_backend/vendor/libs/moment/moment.js') }}"></script>
<script src="{{ asset('assets_backend/vendor/libs/typeahead-js/typeahead.js') }}"></script>
<script src="{{ asset('assets_backend/vendor/libs/tagify/tagify.js') }}"></script>
<script src="{{ asset('assets_backend/vendor/libs/form-validation/umd/bundle/popular.min.js') }}"></script>
<script src="{{ asset('assets_backend/vendor/libs/form-validation/umd/plugin-bootstrap5/index.min.js') }}"></script>
<script src="{{ asset('assets_backend/vendor/libs/form-validation/umd/plugin-auto-focus/index.min.js') }}"></script>
<script src="{{ asset('assets_backend/vendor/libs/dropzone/dropzone.js')}}"></script>
<script src="{{ asset('assets_backend/js/forms-file-upload.js')}}"></script>
<script src="{{ asset('assets_backend/vendor/libs/pickr/pickr.js') }}"></script>
<script src="{{ asset('assets_backend/vendor/libs/jquery-timepicker/jquery-timepicker.js') }}"></script>
<script src="{{ asset('assets_backend/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('assets_backend/vendor/libs/jquery-timepicker/jquery-timepicker.js') }}"></script>
<script src="{{ asset('assets_backend/js/forms-pickers.js') }}"></script>
<!-- Main JS -->
<script src="{{ asset('assets_backend/js/main.js') }}"></script>


<!-- Page JS -->
<script src="{{ asset('assets_backend/js/form-validation.js') }}"></script>
</html>

<!-- beautify ignore:end -->
