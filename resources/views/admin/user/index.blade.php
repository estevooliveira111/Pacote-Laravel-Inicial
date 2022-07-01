<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Controler Usuários') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="sm:flex sm:items-center">

                        <div class="sm:flex-auto">
                            <h1 class="text-xl font-semibold text-gray-900">Usuários</h1>
                            <p class="mt-2 text-sm text-gray-700">Lista de todos os usuários em sua conta, Nome, Email e IP</p>
                        </div>
                    </div>

                    <script src="https://cdn.tailwindcss.com"></script>

                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="px-4 sm:px-6 lg:px-8">
                        <div class="mt-8 flex flex-col">
                            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-300">

                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Nome</th>
                                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Email</th>
                                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Permissão</th>
                                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">IP</th>
                                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Status</th>
                                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Primeiro Acesso</th>
                                                    <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6" >&ensp;</th>
                                                </tr>
                                            </thead>

                                            <tbody class="divide-y divide-gray-200 bg-white">

                                                @foreach ($users as $users)

                                                    <tr class="hover:bg-zinc-800">
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $users->name }}</td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $users->email }}</td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $users->getPermissionNames()[0] }}</td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $users->ip }}</td>
                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                            @if ($users->status)
                                                                <span class="text-slate-50 font-bold py-2 px-1 rounded bg-green-600 hover:bg-sky-700">Ativo</span>
                                                            @else
                                                                <span class="text-slate-50 font-bold py-2 px-1 rounded bg-red-600 hover:bg-sky-700">Inativo</span>
                                                            @endif
                                                        </td>

                                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ (new DateTime($users->login))->format( 'd-m-Y' )  }}</td>

                                                        <form style="display: none" action="{{ route('banned') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="uuid" value="{{ $users->id }}">
                                                            <input type="hidden" name="ban" value="{{ $users->id }}">
                                                            <button id="ban{{ $users->id }}" type="submit"></button>
                                                        </form>

                                                        <form style="display: none" action="{{ route('destroy') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="uuid" value="{{ $users->id }}">
                                                            <input type="hidden" name="destroy" value="{{ $users->id }}">
                                                            <button id="destroy{{ $users->id }}" type="submit"></button>
                                                        </form>

                                                        <td class="whitespace-nowrap py-4 pl-3 pr-4 text-right font-medium sm:pr-6">

                                                            {{-- <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</a>
                                                            <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ver Mais</a> --}}

                                                            <button onclick="document.getElementById('destroy{{ $users->id }}').click()" class="text-white bg-red-600 bg-red-600 hover:bg-red-700 font-bold py-2 px-4 rounded">Apagar</button>

                                                            @if ($users->status)
                                                                <button onclick="document.getElementById('ban{{ $users->id }}').click()" class="text-white bg-red-600 bg-red-600 hover:bg-red-700 font-bold py-2 px-4 rounded">banir</button>
                                                            @else
                                                                <button onclick="document.getElementById('Ban{{ $users->id }}').click()" class="text-white bg-green-600 bg-green-600 hover:bg-green-700 font-bold py-2 px-4 rounded">Ativar</button>
                                                            @endif

                                                        </td>

                                                    </tr>

                                                @endforeach

                                                {{-- @forelse($searches ?? "" as $search ?? "")

                                                <tr class="hover:bg-zinc-800">
                                                    <td
                                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                        {{ $search->name }}</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{
                                                        $search->cpf }}</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{
                                                        $search->cep }}</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{
                                                        $search->ip }}</td>
                                                    <td
                                                        class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                                        <a href="{{ route('dashboard.show', $search->cpf) }}"
                                                            class="text-indigo-600 hover:text-indigo-900">Ver Mais</a>
                                                    </td>
                                                </tr>

                                                @empty

                                                <tr>
                                                    <td>
                                                        Nenhuma Pesquisa feita.
                                                    </td>
                                                </tr>

                                                @endforelse --}}

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>


</x-app-layout>