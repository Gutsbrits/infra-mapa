<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-900 leading-tight">
            {{ __('Painel de Controle') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-4xl mx-auto px-6 lg:px-8">
            <div class="bg-white shadow-lg rounded-2xl p-8 flex flex-col items-center text-center space-y-6">

                <h3 class="text-xl font-bold text-gray-800">
                    👋 Bem-vindo ao sistema de Infraestrutura!
                </h3>

                <p class="text-gray-600">
                    Você está logado como <span class="font-medium text-gray-800">{{ Auth::user()->name }}</span>.
                </p>

                <a href="{{ url('/mapa') }}" 
                   class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg shadow transition-all duration-300">
                    🗺️ Acessar o Mapa de Infraestrutura
                </a>

                <p class="text-sm text-gray-400 mt-4">
                    Obrigado por contribuir com melhorias na cidade!
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
