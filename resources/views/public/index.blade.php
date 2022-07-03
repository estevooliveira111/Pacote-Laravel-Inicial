@extends('layouts.guest')

@section('app')

<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth <a href="{{ url('/dashboard') }}" class="text-sm text-gray-600 hover:text-gray-900 underline">Dashboard</a>
            @else <a href="{{ route('login') }}"    class="text-sm text-gray-600 hover:text-gray-900 underline">Entrar</a>@if (Route::has('register'))
                  <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-600 hover:text-gray-900 underline">Se Cadastrar</a>
                @endif
            @endauth
        </div>
    @endif



    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Content goes here -->

        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex">

            <div class="mr-4 flex-shrink-0 self-end">
                <svg class="h-16 w-16 border border-gray-300 bg-white text-gray-300" preserveAspectRatio="none"
                    stroke="currentColor" fill="none" viewBox="0 0 200 200" aria-hidden="true">
                    <path vector-effect="non-scaling-stroke" stroke-width="1" d="M0 0l200 200M0 200L200 0" />
                </svg>
            </div>

            <div>
                <h4 class="text-lg font-bold">Bem Vindo a Tela Inicial</h4>
                <p class="mt-1">Aplicação Base para criação de novos Dashboards</p>
            </div>

        </div>

    </div>

    @endsection