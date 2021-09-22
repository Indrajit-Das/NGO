<!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
<ul class="app-nav">
<!-- User Menu-->
<li class="app-nav__item"><b >{{ Auth::user()->name }}</b></li>
<li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
    <ul class="dropdown-menu settings-menu dropdown-menu-right">
    <li>
        <x-jet-dropdown-link href="{{ route('profile.show') }}">
            <i class="fa fa-user fa-lg"></i> {{ __('Profile') }}
        </x-jet-dropdown-link>
    </li>
    {{-- <li><a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li> --}}
    <li>
        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-jet-dropdown-link href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                            this.closest('form').submit();">
                <i class="fa fa-sign-out fa-lg"></i> {{ __('Log Out') }}
            </x-jet-dropdown-link>
        </form>
    </li>
    </ul>
</li>
</ul>
