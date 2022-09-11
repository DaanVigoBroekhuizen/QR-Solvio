<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('sendCard') }}" method="post" class="flex flex-col">
                        @csrf

                        <label for="name">Naam</label>
                        <input type="text" id="name" name="name"><br>

                        <label for="jobTitle">Functie</label>
                        <input type="text" id="jobTitle" name="jobTitle"><br>

                        <label for="email">Email</label>
                        <input type="email" id="email" name="email"><br>

                        <label for="adres">Address</label>
                        <input type="text" id="adres" name="adres"><br>

                        <label for="residence">Woonplaats</label>
                        <input type="text" id="residence" name="residence"><br>

                        <input type="submit" id="submit" name="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
