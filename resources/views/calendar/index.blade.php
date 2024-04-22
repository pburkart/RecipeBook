<x-app-layout>
    <x-slot name="sidebar">
        @include('components.dashboard.sidebar')
    </x-slot>
    <x-slot name="header">
        <x-dashboard.main-header :page-name="'Calendar'" />
    </x-slot>
</x-app-layout>