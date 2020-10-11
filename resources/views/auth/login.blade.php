@section('title') Login @endSection
<x-guest-layout>
    {{--<div>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Login') }}
                </x-jet-button>
            </div>
        </form>
    </div>--}}

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card p-4">
                    <div class="card-header text-center text-uppercase h4 font-weight-light">
                        Login
                    </div>

                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="card-body py-5">
                            <div class="form-group">
                                <label class="form-control-label">Email</label>
                                <input type="email" class="form-control"  name="email" :value="old('email')" required autofocus >
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Password</label>
                                <input type="password" class="form-control"  name="password" required autocomplete="current-password">
                            </div>

                            <div class="custom-control custom-checkbox mt-4">
                                <input type="checkbox" class="custom-control-input" id="login" name="remember">
                                <label class="custom-control-label" for="login">Remember Me</label>
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary px-5">Login</button>
                                </div>

                                <div class="col-6">
                                    @if (Route::has('password.request'))
                                        <a href="#" class="btn btn-link"  href="{{ route('password.request') }}">Forgot password?</a>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <a  href="{{route('index')}}" class="btn btn-link">Back</a>
                                </div>
                                <div class="col-6">
                                    <a href="{{ route('register') }}" class="btn btn-link">Not a Member</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>




