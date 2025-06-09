<form action="{{ $action }}" method="POST" class="space-y-4">
    @csrf
    @if ($method !== 'POST')
        @method($method)
    @endif

    <div>
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $rol->name ?? '')" required autofocus />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="description" :value="__('Description')" />
        <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description', $rol->description ?? '')" required autofocus />
        <x-input-error :messages="$errors->get('description')" class="mt-2" />
    </div>

    <div class="flex justify-end">
        <x-primary-button>
            {{ $method === 'POST' ? __('Save') : __('Update') }}
        </x-primary-button>
    </div>
</form>
