<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'La Place Cooperative') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- ... remplacer "2.x.x" par la version souhaitée ! -->
        <!-- pour IE11-->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.js" defer></script>
        <!-- pour les autres navigateurs-->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
        
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>

    <body class="font-sans antialiased">
        <x-jet-banner />
        <div class="min-h-screen bg-gray-100">
			<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">

				<!-- Primary Navigation Menu -->
				<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
					<div class="flex justify-between h-16">
						<div class="flex">
							<!-- Logo -->
							<div class="flex-shrink-0 flex items-center">
								<a href="{{ route('dashboard') }}">
									LOGO
								</a>
							</div>

							<!-- Navigation Links -->

						@if (Route::has('login'))
                			<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
								@auth
									<a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
								@else
									<a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

									@if (Route::has('register'))
										<a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
									@endif
								@endauth
							</div>
						@endif
					</div>
				</div>
			</nav>

			<!-- Page Heading -->
			@if (isset($header))
				<header class="bg-white shadow">
					<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
						<h2 class="font-semibold text-xl text-gray-800 leading-tight">Accueil</h2>
					</div>
				</header>
			@endif

			<!-- Page Content -->
			<main>
				<div class="py-12">
					<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
						<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"></div>
					</div>
				</div>
			</main>
        </div>
        @stack('modals')

        @livewireScripts
    </body>
</html>

