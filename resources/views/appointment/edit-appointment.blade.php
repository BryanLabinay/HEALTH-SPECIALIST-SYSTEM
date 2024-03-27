<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add your Appointment') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-12 lg:px-10">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-7 text-gray-900 dark:text-gray-100 w-1/2">
                    <form action="{{ route('update.appointment',['appointment_id'=> $appointment->id]) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$appointment->name" required autofocus
                                autocomplete="off" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input wire:model="form.email" id="email" class="block mt-1 w-full" type="email"
                                name="email" :value="$appointment->email" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="address" :value="__('Address')" />
                            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="$appointment->address" required
                                autofocus autocomplete="off" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="appointment" :value="__('Appointment')" />
                            <x-text-input id="appointment" class="block mt-1 w-full" type="text" name="appointment" :value="$appointment->appointment"
                                required autofocus autocomplete="off" />
                        </div>

                        <x-primary-button class="ms-3 mt-4">
                            {{ __('Update') }}
                        </x-primary-button>

                        <a href="/appointment-list" class="inline-flex items-center px-4 py-2 focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 transition ease-in-out duration-150">Cancel</a>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
