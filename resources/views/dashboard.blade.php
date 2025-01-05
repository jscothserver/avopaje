<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dasboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg">
                <div class="container">
                    <form action="">
                        <div class="mb-4">
                            {{-- <x-label></x-label> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
