<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <h3>Free Plan</h3>
                    <x-paddle-button :url="$payLink" class="bg-blue-600 inline-block text-white px-8 py-4" data-theme="none">
                        Subscribe
                    </x-paddle-button>

                    <h3 class="mt-8">Standard Plan</h3>
                    <x-paddle-button :url="$paylinkStandard" class="bg-blue-600 text-white px-8 py-4">
                        Subscribe to Standard
                    </x-paddle-button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
