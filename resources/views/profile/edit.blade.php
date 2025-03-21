<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-semibold fs-3 text-dark">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="container px-3 px-sm-4 px-lg-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="card shadow-sm mb-4">
                        <div class="card-body p-4 p-sm-5">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>

                    <div class="card shadow-sm mb-4">
                        <div class="card-body p-4 p-sm-5">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>

                    <div class="card shadow-sm mb-4">
                        <div class="card-body p-4 p-sm-5">
                            @include('profile.partials.delete-user-form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>