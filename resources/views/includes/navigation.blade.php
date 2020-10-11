<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="index.html">Start Bootstrap</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('index')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">About</a>
                </li>
{{--                <li class="nav-item">
                    <a class="nav-link" href="{{route('singlePost')}}">Single Post</a>
                </li>--}}
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                </li>

                @if (Route::has('login'))
                   {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
                        @auth
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
                        </li>

                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                            </li>
                            @endif
                        @endif
                    {{--</div>--}}
                @endif
            </ul>
        </div>
    </div>
</nav>
