<x-app-layout>
    <x-slot name="header">
        <h2
            class="font-semibold text-xl py-3 text-base-content leading-tight">
            {{ __('Rols') }}
        </h2>
        <x-primary-button>
            <a href="{{ route('rols.create') }}">Crear Nuevo Banco</a>
        </x-primary-button>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <div class="bg-base-200  overflow-hidden shadow-sm sm:rounded-lg">
               <div class="p-6 text-base-content">
                    <table class="table border-collapse border border-base-content mx-auto">
                        <thead>
                            <tr class="bg-base-300">
                                <th class="border border-base-content px-4 py-2 text-center uppercase">Nombre</th>
                                <th class="border border-base-content px-4 py-2 text-center uppercase">Descripcion</th>
                                <th class="border border-base-content px-4 py-2 text-center uppercase">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rols as $rol)
                                <tr class="bg-base-100">
                                    <td class="border border-base-content px-4 py-2">{{ $rol->name }}</td>
                                    <td class="border border-base-content px-4 py-2">{{ $rol->description }}</td>
                                    <td class="border border-base-content px-4 py-2 text-center">
                                        <a href="{{ route('rols.show', $rol) }}"
                                            class="text-info ">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('rols.edit', $rol) }}"
                                            class="text-warning  ml-2">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('rols.destroy', $rol) }}" method="POST"
                                            class="inline-block ml-2">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-error"
                                                onclick="return confirm('¿Estás seguro de eliminar este banco?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
