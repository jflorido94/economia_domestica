<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl py-3 text-base-content leading-tight">
            {{ __('Create New') . ' ' . __('Bank') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-base-200  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-base-content">
                    @include('banks.partials.form', [
                        'action' => route('banks.store'),
                        'method' => 'POST',
                        'bank' => null,
                    ])
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
