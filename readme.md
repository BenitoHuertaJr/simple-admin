# Simple Admin

### Installation

```sh
$ composer require iamx/simple-admin
$ php artisan make:auth (for Laravel 5)
$ composer require laravel/ui="1.*" --dev (for Laravel 6.0 and above)
$ php artisan ui:auth (for Laravel 6.0 and above)
```
### Publish the assets and config file

Delete the auth folder on resources/views

```sh
$ php artisan vendor:publish --provider="iamx\SimpleAdmin\SimpleAdminServicesProvider" --tag="assets"
$ php artisan vendor:publish --provider="iamx\SimpleAdmin\SimpleAdminServicesProvider" --tag="config"
$ php artisan vendor:publish --provider="iamx\SimpleAdmin\SimpleAdminServicesProvider" --tag="authviews"
```

Now you can edit the config file where you can set you configuration

| Folder | File |
| ------ | ------ |
| config | simpleadmin.php |

### Create your views and extend from simple admin layout

```sh
@extends('simpleadmin::main')
@section('content')
   <p>Your content</p>
@endsection
```

### You can use the breadcrumb by adding the variable 'breadcrumb'

If you want to use the 'bigtitle', just add the variable if not, then remove it

```sh
@extends('simpleadmin::main', [
    'breadcrumb' => [
        'bigtitle' => 'Dashboard',
        'items' => [
            [
                'title' => 'Dashboard',
                'url' => '/',
                'active' => false
            ],
            [
                'title' => 'Home',
                'url' => '#',
                'active' => true
            ]
        ]
    ]
])

@section('content')
   <p>Your content</p>
@endsection
```
### Add a script or a style in a single view

```sh
@extends('simpleadmin::main')
@section('content')
   <p>Your content</p>
@endsection
@push('styles')
	<style>
		<!-- Your style -->
	</style>
@endpush
@push('scritps')
	<script>
		<!-- Your script -->
	</script>
@endpush
```
License
----
MIT