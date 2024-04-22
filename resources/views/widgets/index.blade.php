<x-app-layout>
    <x-slot name="sidebar">
        @include('components.dashboard.sidebar')
    </x-slot>
    <x-slot name="header">
        <x-dashboard.main-header :page-name="'Widgets'" />
    </x-slot>
    <x-slot name="content">
      <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="grid grid-cols-3 gap-4 p-4">
                            @if($widgets == "[]")
                                <a href="{{ route('widgets.create') }}">
                                @include('components.dashboard.widgets.placeholder')
                                </a>
                            @else
                                @foreach($widgets as $widget)
                                    {!! $widget->code !!}
                                @endforeach

                                @php
                                    $widgetCount = $widgets->count();
                                    $placeholdersNeeded = 9 - $widgetCount;
                                @endphp

                                @for ($i=0; $i < $placeholdersNeeded; $i++)
                                    <a href="{{ route('widgets.create') }}">
                                        @include('components.dashboard.widgets.placeholder')
                                    </a>
                                @endfor
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

</x-app-layout>