<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>{{ config('simpleadmin.title') }}</title>
        <link href="{{ asset('vendor/iamx/simple-admin/css/styles.css') }}" rel="stylesheet" />
        <style>
        	@if(config('simpleadmin.headernavbgcolor') && config('simpleadmin.headernavbgcolor') != null)
        		.navbar-dark.bg-dark {
				 	background-color: {{ config('simpleadmin.headernavbgcolor') }} !important;
				}
        	@endif
        	@if (config('simpleadmin.sidenavcolor') && config('simpleadmin.sidenavcolor') != null)
        	    .sb-sidenav-dark {
				    background-color: {{ config('simpleadmin.sidenavcolor') }} !important; 
				}
        	@endif
        </style>
        @if (config('simpleadmin.styles') && config('simpleadmin.styles') != null)
        	@foreach (config('simpleadmin.styles') as $style)
        		<!-- {{ $style['name'] }} -->
        		<link href="{{ $style['type'] == 'cdn' ? $style['src'] : asset($style['src']) }}" rel="stylesheet" />
        	@endforeach
        @endif
        @stack('styles')
        <script src="{{ asset('vendor/iamx/simple-admin/js/all.min.js') }}"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="{{ url('/') }}">{{ config('simpleadmin.title') }}</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"></div>
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    	<span class="mr-1">{{ Auth::check() ? Auth::user()->name : 'Admin' }}</span>
                    	<i class="fas fa-user fa-fw"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    	@foreach (config('simpleadmin.menuheader') as $item)
                    		<a class="dropdown-item" href="{{ url($item['url']) }}">{{ $item['title'] }}</a>
                    	@endforeach
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        	{{ config('simpleadmin.logoutmenu.title') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        	@foreach (config('simpleadmin.mainmenu') as $key => $menu)
	                    		@if ($menu['multilevel'])
	                    			@if ($menu['heading'])
	                    				<div class="sb-sidenav-menu-heading">{{ $menu['headingtitle'] }}</div>
	                    			@endif
		                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#{{ \Str::slug('collapse-' . $menu['title']) }}" aria-expanded="false" aria-controls="{{ \Str::slug('collapse-' . $menu['title']) }}">
		                                <div class="sb-nav-link-icon"><i class="{{ $menu['icon'] }}"></i></div>
		                                {{ $menu['title'] }}
		                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
		                            </a>
		                            <div class="collapse" id="{{ \Str::slug('collapse-' . $menu['title']) }}" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
		                                <nav class="sb-sidenav-menu-nested nav">
		                                    @foreach ($menu['submenu'] as $submenu)
		                                    	<a class="nav-link" href="{{ url($submenu['url']) }}">
		                                    		{{ $submenu['title'] }}
		                                    	</a>
		                                    @endforeach
	                                	</nav>
		                            </div>
	                    		@else 
		                    		@if ($menu['heading'])
	                        			<div class="sb-sidenav-menu-heading">{{ $menu['headingtitle'] }}</div>
	                        		@endif
	                        		<a class="nav-link" href="{{ $menu['url'] }}">
		                                <div class="sb-nav-link-icon"><i class="{{ $menu['icon'] }}"></i></div>
		                                {{ $menu['title'] }}
		                            </a>
	                    		@endif
	                    	@endforeach
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid @if(!isset($breadcrumb)) pt-4 @endif">
                    	@isset ($breadcrumb)
                    		@if (isset($breadcrumb['bigtitle']) && $breadcrumb['bigtitle'] != false && $breadcrumb['bigtitle'] != '')
                    			<h1 class="mt-4">{{ $breadcrumb['bigtitle'] }}</h1>
                    		@endif
						    <ol class="breadcrumb mb-4 @if (!isset($breadcrumb['bigtitle']) || $breadcrumb['bigtitle'] == false || $breadcrumb['bigtitle'] == '') mt-4 @endif">
						        @foreach ($breadcrumb['items'] as $item)
						        	<li class="breadcrumb-item @if($item['active']) active @endif">
							            <a href="{{ url($item['url']) }}">{{ $item['title'] }}</a>
							        </li>
						        @endforeach
						    </ol>
                    	@endisset
                        @yield('content')
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; {{ config('simpleadmin.copyright') }} {{ date('Y') }}</div>
                            <div></div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="{{ asset('vendor/iamx/simple-admin/js/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('vendor/iamx/simple-admin/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('vendor/iamx/simple-admin/js/scripts.js') }}"></script>
        @if (config('simpleadmin.scripts') && config('simpleadmin.scripts') != null)
        	@foreach (config('simpleadmin.scripts') as $script)
        		<!-- {{ $script['name'] }} -->
        		<script src="{{ $script['type'] == 'cdn' ? $script['src'] : asset($script['src']) }}"></script>
        	@endforeach
        @endif
        @stack('scripts')
    </body>
</html>
