<x-app-layout>
    <x-slot name="sidebar">
        @include('components.dashboard.sidebar')
    </x-slot>
    <x-slot name="header">
        <x-dashboard.main-header :page-name="'Widgets'" />
    </x-slot>
    <x-slot name="content">
      
    </x-slot>

</x-app-layout>