<x-app-layout>
    <x-slot name="sidebar">
        @include('components.dashboard.sidebar')
    </x-slot>
    <x-slot name="header">
        <x-dashboard.main-header :page-name="'Add a Widget'" />
    </x-slot>

    <x-slot name="content">
        <div class="w-1/3 mx-auto mt-10 px-4">
            <form method="POST" action="{{ route('widgets.store') }}" class="bg-white shadow-lg rounded px-8 pt-6 pb-8 mb-4">
                @csrf

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Widget Name:</label>
                    <input type="text" name="name" id="name" class="shadow appearance-none rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>

                <div class="mb-6">
                    <label for="code" class="block text-gray-700 text-sm font-bold mb-2">Widget Code:</label>
                    <textarea name="code" id="code" class="shadow appearance-none rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="8" required></textarea>
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create Widget</button>
                </div>
            </form>
        </div>
    </x-slot>
</x-app-layout>