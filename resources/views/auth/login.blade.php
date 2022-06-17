
@extends('layouts.guest')

@section('app')

<div class="min-h-full flex">

    <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">

        <div class="mx-auto w-full max-w-sm lg:w-96">

            <div>
                <svg class="h-12 w-auto" xmlns="http://www.w3.org/2000/svg" fill="#3B82F6" viewBox="0 0 16 16">
                    <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                </svg>
                  
                <h2 class="mt-6 text-3xl font-extrabold text-gray-900">Faça login em sua conta</h2>
            </div>

            <div class="mt-8">
                
                <div class="mt-6">

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('login') }}" class="space-y-6">
                        @csrf

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Endereço de email</label>
                            <div class="mt-1">
                                <input id="email" name="email" value="{{ old('email') }}" type="email" autocomplete="email" required
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-800 focus:border-blue-800 sm:text-sm">
                            </div>
                        </div>

                        <div class="space-y-1">
                            <label for="password" class="block text-sm font-medium text-gray-700"> Senha </label>
                            <div class="mt-1">
                                <input id="password" name="password" value="{{ old('password') }}" type="password" autocomplete="current-password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-800 focus:border-blue-800 sm:text-sm">
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input id="remember-me" name="remember-me" type="checkbox"
                                    class="h-4 w-4 text-blue-500 focus:ring-blue-800 border-gray-300 rounded">
                                <label for="remember-me" class="ml-2 block text-sm text-gray-900"> {{ __('Remember me') }} </label>
                            </div>

                            <div class="text-sm">
                                @if (Route::has('password.request'))
                                    <a class="font-medium text-blue-500 hover:text-blue-800" href="{{ route('password.request') }}"> {{ __('Esqueceu sua senha?') }} </a>
                                @endif
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-500 hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:bg-blue-800">Entrar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="hidden lg:block relative w-0 flex-1">
        <img class="absolute inset-0 h-full w-full object-cover"
            src="https://images.unsplash.com/photo-1505904267569-f02eaeb45a4c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1908&q=80"
            alt="">
    </div>

</div>

@endsection