<!DOCTYPE html>

<html lang="fa" class="light-style layout-menu-fixed" dir="rtl" data-theme="theme-default"
    data-assets-path="assets-sneat/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>پنل مدیریت - @yield('title')</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets-sneat/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('assets-sneat/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets-sneat/vendor/css/core.css') }}"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets-sneat/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets-sneat/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets-sneat/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    {{-- <link rel="stylesheet" href="{{ asset('assets-sneat/vendor/libs/apex-charts/apex-charts.css') }}" /> --}}

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('assets-sneat/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets-sneat/js/config.js') }}"></script>
    @yield('custom-css')
</head>

<body dir="rtl">
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            @include('partials.dashboard.sidebar')
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                @include('partials.dashboard.header')

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">


                        @if (session('success'))
                            <div class="alert alert-success text-center">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('danger'))
                            <div class="alert alert-danger text-center">
                                {{ session('danger') }}
                            </div>
                        @endif
                        @yield('content')
                    </div>

                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('assets-sneat/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets-sneat/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets-sneat/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets-sneat/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('assets-sneat/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

    <!-- Vendors JS -->
    {{-- <script src="{{ asset('assets-sneat/vendor/libs/apex-charts/apexcharts.js') }}"></script> --}}

    <!-- Main JS -->
    <script src="{{ asset('assets-sneat/js/main.js') }}"></script>

    <!-- Page JS -->
    {{-- <script src="{{ asset('assets-sneat/js/dashboards-analytics.js') }}"></script> --}}
    @yield('script')
    <script>
        var url = window.location;
        // $('ul.list-unstyled a[href="' + url + '"]').parent().addClass('active');
        $('li.menu-item a').filter(function() {
            return this.href == url;
        }).parent().parent().parent().addClass('active open');
        $('li.menu-item a').filter(function() {
            return this.href == url;
        }).parent().addClass('active');
    </script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
