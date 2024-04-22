<!-- Sidebar.blade.php -->
<div style="background-color: #1F487E" class="text-white h-full w-1/6 fixed top-0 left-0 z-10 flex flex-col items-center">
    <!-- Logo -->
    <div class="shrink-0 flex items-center mt-5">
        <a class="w-full" href="{{ route('dashboard.index') }}">
            <x-application-logo class="block h-14 w-full text-center fill-current text-white-800" />
        </a>
    </div>

    <p class="text-2xl mt-2">Prometheus</p>

    <!-- Sidebar Menu -->
    <ul class="p-4 flex flex-col mt-5">
        <li class="mb-10 flex items-center text-2xl">
            <i class="fas fa-chart-line mr-2"></i>
            <a href="{{ route('dashboard.index') }}" class="block">Dashboard</a>
        </li>
        <li class="mb-10 flex items-center text-2xl">
            <i class="fas fa-calendar mr-2"></i>
            <a href="{{ route('calendar.index') }}" class="block">Calendar</a>
        </li>
        <li class="mb-10 flex items-center text-2xl">
            <i class="fas fa-money-bill-wave mr-2"></i>
            <a href="{{ route('budget.index') }}" class="block">Budget</a>
        </li>
        @if(auth()->check() && auth()->user()->is_admin)
            <li class="mb-10 flex items-center text-2xl">
                <i class="fas fa-users mr-2"></i>
                <a href="{{ route('users.index') }}" class="block">Users</a>
            </li>
            <li class="mb-10 flex items-center text-2xl">
                <i class="fas fa-tools mr-2"></i>
                <a href="{{ route('widgets.index') }}" class="block">Widgets</a>
            </li>
        @endif

        <li class="mb-10 flex items-center text-2xl">
            <i class="fas fa-wrench mr-2"></i>
            <a href="{{ route('settings.index') }}" class="block">Settings</a>
        </li>
    </ul>

    <!-- Logout Button -->
    <div class="absolute bottom-0 left-0 w-full bg-blue-700 py-2">
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="block text-center text-white">
                {{ __('Log Out') }}        
            </a>
        </form>    
    
    </div>
</div>