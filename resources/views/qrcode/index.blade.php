<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('QRcode') }}
        </h2>
    </x-slot>

    @php

        $numero =  rand(1, 10000000000000000);

    @endphp

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <img src="https://chart.googleapis.com/chart?chs=500x500&cht=qr&chl={{ $numero }}" alt="" id="img">
                    <p>{{ $numero }}</p>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>