<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="font-poppins pb-4">
                    <span class="text-sm text-gray-600">{{ __("You're already logged in!") }}</span>
                    <a class="underline text-sm text-gray-600 hover:text-red-600 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500"
                        href="{{ route('profile') }}" wire:navigate>
                        {{ __('Check your profile') }}
                    </a>
                </div>
                <livewire:profile.logout-form />
            </div>
        </div>
    </div>
</x-app-layout>
