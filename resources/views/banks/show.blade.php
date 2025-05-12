<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl py-3 text-base-content leading-tight">
            {{ __('Bank') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-base-200  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-base-content">
                    <form class="space-y-4">
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text"
                                name="name" :value="$bank->name" disabled />
                        </div>

                        <div>
                            <x-input-label for="swift" :value="__('SWIFT')" />
                            <x-text-input id="swift" class="block mt-1 w-full " type="text"
                                name="swift" :value="$bank->swift" disabled />
                        </div>

                        <div>
                            <x-input-label for="country" :value="__('Country')" />
                            <x-text-input id="country" class="block mt-1 w-full " type="text"
                                name="country" :value="$bank->country" disabled />
                        </div>

                        <div class="flex justify-end space-x-2">
                            <a href="{{ route('banks.edit', $bank) }}" class="btn btn-primary">{{ __('Edit') }}</a>
                            <form action="{{ route('banks.destroy', $bank) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>
                            </form>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
