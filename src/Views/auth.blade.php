<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>{{ config('simpleadmin.title') }}</title>
        <link href="{{ asset('vendor/iamx/simple-admin/css/styles.css') }}" rel="stylesheet" />
        <style>
            .bg-primary {
                background-color: {{ config('simpleadmin.login.backgroundcolor') }} !important;
            }
        </style>    
        <script src="{{ asset('vendor/iamx/simple-admin/js/all.min.js') }}"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        @yield('content')
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; {{ config('simpleadmin.copyright') }} {{ date('Y') }}</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="{{ asset('vendor/iamx/simple-admin/js/jquery-3.5.1.slim.min.js') }}"></script>
        <script src="{{ asset('vendor/iamx/simple-admin/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('vendor/iamx/simple-admin/js/scripts.js') }}"></script>
    </body>
</html>
