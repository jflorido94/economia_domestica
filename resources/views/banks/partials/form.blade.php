<form action="{{ $action }}" method="POST" class="bg-white p-6 rounded shadow-md space-y-4">
    @csrf
    @if ($method !== 'POST')
        @method($method)
    @endif

    <div>
        <label for="name" class="block text-sm font-medium text-gray-700">Nombre:</label>
        <input type="text" name="name" id="name" value="{{ $bank->name ?? '' }}"
               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
    </div>

    <div>
        <label for="swift" class="block text-sm font-medium text-gray-700">SWIFT:</label>
        <input type="text" name="swift" id="swift" value="{{ $bank->swift ?? '' }}"
               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
    </div>

    <div>
        <label for="country" class="block text-sm font-medium text-gray-700">País:</label>
        <input type="text" name="country" id="country" value="{{ $bank->country ?? '' }}"
               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
    </div>

    <div class="flex justify-end">
        <x-primary-button>
            {{ $method === 'POST' ? 'Guardar' : 'Actualizar' }}
        </x-primary-button>
    </div>
</form>
