<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#home">Personal Info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu1">Change Password</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane container active" id="home">
                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                    <div class="mt-5 sm:mt-0">
                        @livewire('profile.update-user-profile-information-form')
                    </div>
                @endif
            </div>
            <div class="tab-pane container fade" id="menu1">
                 @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                    <div class="mt-5 sm:mt-0">
                        @livewire('profile.update-password-form')
                    </div>
                @endif
            </div>
        </div>
        </div>
    </div>
</x-app-layout>
