<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add your Appointment') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 w-1/2">
                   <form action="{{ route('add.appointment') }}" method="post">
                    @csrf

                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus autocomplete="off" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input wire:model="form.email" id="email" class="block mt-1 w-full" type="email" name="email" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="address" :value="__('Address')" />
                        <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" required autofocus autocomplete="off" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="appointment" :value="__('Appointment')" />
                        <x-text-input id="appointment" class="block mt-1 w-full" type="text" name="appointment" required autofocus autocomplete="off" />
                    </div>

                    <x-primary-button class="ms-3 mt-4">
                        {{ __('Add Appointment') }}
                    </x-primary-button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>