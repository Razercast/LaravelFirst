<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>@section('title')My Site @show</title>

    <!-- Bootstrap core CSS -->
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">--}}

    <!-- Custom styles for this template -->
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">
</head>

<body>

<header>
    @section('header')
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">About</h4>
                    <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Contact</h4>
                    <ul class="list-unstyled">
                        <li><a href="{{route('home')}}" class="text-white">Home</a></li>
                        <li><a href="{{route('page.about')}}" class="text-white">About</a></li>
                        <li><a href="{{route('posts')}}" class="text-white">Posts</a></li>
                        <li><a href="{{route('register.create')}}" class="text-white">Register</a></li>
                        <li><a href="{{route('login.create')}}" class="text-white">Login</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
            <a href="{{route('home')}}" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                <strong>Album</strong>
            </a>
            <div class="menu" style="color: blue">
                @if(auth()->check())
                    <a href="">{{auth()->user()->name}}</a>
                    <a href="{{route('logout')}}" class="text-white">Logout</a>
                @else
                    <a href="{{route('register.create')}}" class="text-white">Register</a>
                    <a href="{{route('login.create')}}" class="text-white">Login</a>
                @endif

{{--                @auth--}}
{{--                    <a href="">{{auth()->user()->name}}</a>--}}
{{--                    <a href="{{route('logout')}}" class="text-white">Logout</a>--}}
{{--                @endauth--}}

{{--                @guest--}}
{{--                    <a href="{{route('register.create')}}" class="text-white">Register</a>--}}
{{--                    <a href="{{route('login.create')}}" class="text-white">Login</a>--}}
{{--                @endguest--}}


            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
    @show
</header>

<main role="main">
    <div class="container">
        @include('layouts.errors')
    </div>
    @yield('content');
</main>

@include('layouts.footer')

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('js/scripts.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.7/holder.min.js"></script>
</body>
</html>
