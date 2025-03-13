<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold">👋 Salom, {{ auth()->user()->name }}!</h3>
                    <p class="text-gray-600">📧 Email: {{ auth()->user()->email }}</p>
                    <p>🔰 Rol: <span class="font-bold">{{ auth()->user()->getRoleNames()->first() ?? 'Mavjud emas' }}</span></p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>