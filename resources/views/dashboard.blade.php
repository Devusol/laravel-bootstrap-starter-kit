<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-semibold fs-3 text-dark">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="container px-3 px-sm-4 px-lg-5">
            <div class="card shadow-sm">
                <div class="card-body p-4 text-dark">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>