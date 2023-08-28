
<x-dropdown align="center"  >
    <x-slot name="trigger">
        <button class="" >

            <div class="profile-details">
                <img  src="{{asset('assets/img/user.png')}}" width="75px" height="50px" alt="">
                <span class="admin_name">&nbsp; &nbsp; {{ Auth::user()->first_name }}  {{ Auth::user()->name}}</span>
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-1">
            </div>
        </button>
    </x-slot>

    <x-slot name="content"  >
        {{-- <x-dropdown-link class="email"  >
            {{ Auth::user()->email }}
        </x-dropdown-link> --}}

        <x-dropdown-link class="navigation " style="font-size: 20px ; color:#ffc107 ; " :href="url('/admin')">
            <i class='bx bx-user' ></i> {{ __('Admin') }}
        </x-dropdown-link>

        <x-dropdown-link class="navigation"  style="font-size: 20px ; color:#ffc107 "  :href="route('admin_profile.edit')">
            <i class='bx bx-cog' ></i> {{ __('Edit Admin') }}
        </x-dropdown-link>

        {{-- <x-dropdown-link class="navigation"  style="font-size: 20px ; color:#ffc107 "  href="{{url('/favrorites')}}">
            <i class='bx bx-heart' ></i> {{ __('Favrorites') }}
        </x-dropdown-link> --}}


        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-dropdown-link class="navigation"   style="font-size: 20px ; color:#ffc107 "  :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                <i class='bx bx-log-out'></i> {{ __('Log Out') }}
            </x-dropdown-link>
        </form>
    </x-slot>
</x-dropdown>

<!-- Hamburger -->
{{-- <div class="-mr-2 flex items-center sm:hidden">
<button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
    </svg>
</button>
</div> --}}

<!-- Responsive Navigation Menu -->
<div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
<div class="pt-2 pb-3 space-y-1">
<x-responsive-nav-link :href="route('admin')" :active="request()->routeIs('admin')">
{{ __('Admin') }}
</x-responsive-nav-link>
</div>

<!-- Responsive Settings Options -->
<div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
<div class="px-4">
<div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
</div>

<div class="mt-3 space-y-1">
<x-responsive-nav-link :href="route('admin_profile.edit')">
    {{ __('Admin') }}
</x-responsive-nav-link>

<!-- Authentication -->
<form method="POST" action="{{ route('logout') }}">
    @csrf

    <x-responsive-nav-link :href="route('logout')"
            onclick="event.preventDefault();
                        this.closest('form').submit();">
        {{ __('Log Out') }}
    </x-responsive-nav-link>
</form>
</div>
</div>
</div>
