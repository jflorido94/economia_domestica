<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl py-3 text-base-content leading-tight">
            {{ __('Role') }}
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
                                name="name" :value="$role->name" disabled />
                        </div>

                        <div>
                            <x-input-label for="description" :value="__('Description')" />
                            <x-text-input id="description" class="block mt-1 w-full " type="text"
                                name="description" :value="$role->description" disabled />
                        </div>


                        <div class="flex justify-end space-x-2">
                            <a href="{{ route('roles.edit', $role) }}" class="btn btn-primary">{{ __('Edit') }}</a>
                            <form action="{{ route('roles.destroy', $role) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-error">{{ __('Delete') }}</button>
                            </form>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
