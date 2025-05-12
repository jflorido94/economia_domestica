<form action="{{ $action }}" method="POST" class="space-y-4">
    @csrf
    @if ($method !== 'POST')
        @method($method)
    @endif

    <div>
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $bank->name ?? '')" required autofocus />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="swift" :value="__('SWIFT')" />
        <x-text-input id="swift" class="block mt-1 w-full" type="text" name="swift" :value="old('swift', $bank->swift ?? '')" required autofocus />
        <x-input-error :messages="$errors->get('swift')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="country" :value="__('Country')" />
        <x-text-input id="country" class="block mt-1 w-full" type="text" name="country" :value="old('country', $bank->country ?? '')" required autofocus />
        <x-input-error :messages="$errors->get('country')" class="mt-2" />
    </div>

    <div class="flex justify-end">
        <x-primary-button>
            {{ $method === 'POST' ? __('Save') : __('Update') }}
        </x-primary-button>
    </div>
</form>
