<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear Nueva Tarea') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('tasks.store') }}" method="post">
                        @csrf
                        <div class="mb-4">
                            <label for="title"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-300">Título:</label>
                            <input type="text" name="title" id="title"
                                class="mt-1 p-2 block w-full border border-gray-500 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 bg-black"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="description"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-300">Descripción:</label>
                            <textarea name="description" id="description" rows="4"
                                class="mt-1 p-2 block w-full border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 bg-black"
                                required></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="status"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-300">Estado:</label>
                            <select name="status" id="status"
                                class="mt-1 p-2 block w-full border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 bg-black"
                                required>
                                <option value="Pendiente">Pendiente</option>
                                <option value="En Proceso">En Proceso</option>
                                <option value="Terminado">Terminado</option>
                                <option value="Custom">Personalizado</option>
                            </select>
                        </div>
                        <div class="mb-4 hidden" id="custom_status_div">
                            <label for="custom_status"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-300">Estado
                                Personalizado:</label>
                            <input type="text" name="custom_status" id="custom_status"
                                class="mt-1 p-2 block w-full border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 bg-black">
                        </div>
                        <div class="mb-4">
                            <label for="user_id"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-300">Asignar a:</label>
                            <select name="user_id" id="user_id"
                                class="mt-1 p-2 block w-full border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 bg-black"
                                required>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit"
                            class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:bg-blue-700">Crear
                            Tarea</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
