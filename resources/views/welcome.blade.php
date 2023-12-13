<x-guest-layout>
    <div class="font-sans text-gray-900 antialiased min-h-screen flex flex-col items-center justify-center">
        <h2 class="text-xl font-semibold leading-tight text-gray-800"> Gestionale Filament PHP </h2>
        <p>Accedi per visualizzare la dashboard</p>
        <div class="flex w-1/3 justify-around mt-12">
            <x-button>
                <a href="{{ route('login') }}">Login</a>
            </x-button>
            <x-button>
                <a href="{{ route('register') }}">Sign Up</a>
            </x-button>
        </div>
    </div>
</x-guest-layout>
