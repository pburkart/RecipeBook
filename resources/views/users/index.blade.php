<x-app-layout>
    <x-slot name="sidebar">
        @include('components.dashboard.sidebar')
    </x-slot>
    <x-slot name="header">
        <x-dashboard.main-header :page-name="'Users'" />
    </x-slot>
    <x-slot name="content">
        <div class="container mx-auto mt-12">
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Role</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td class="border px-4 py-2">{{ $user->id }}</td>
                        <td class="border px-4 py-2">{{ $user->name }}</td>
                        <td class="border px-4 py-2">{{ $user->email }}</td>
                        <td class="border px-4 py-2">{{ $user->is_admin ? 'Admin' : 'User' }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-slot>
</x-app-layout>