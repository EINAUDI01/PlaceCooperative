<!--Pour indiquer le fichier de base-->
@extends('base')

<!--Pour lui donner son titre-->
@section('title')
Accueil
@endsection

@section('content')
    <body class="antialiased">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<a class="navbar-brand" href="#">PLACE<br/>COOPERATIVE</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		
		<div class="collapse navbar-collapse" id="navbarColor01">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="/Formations">Nos formations
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/Formateurs">Nos formateurs</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/Organisations">Nos organisations </a>
				</li>
			</ul>
		</div>
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
						<p class="lead">
                        	<a href="{{ url('/dashboard') }}" class="btn btn-primary">Accueil</a>
						</p>
					@else
                        <p class="lead">
				            <a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">CONNEXION</a>
                        @if (Route::has('register'))
                            <a class="btn btn-primary btn-lg" href="{{ route('register') }}" role="button">INSCRIPTION</a>
			            </p>
                        @endif
                    @endauth
                </div>
            @endif
    </nav>
 @endsection

