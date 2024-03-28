<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add your Appointment') }}
        </h2>
    </x-slot>

    <div class="py-5 px-8">
        <div class="text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
            <x-success :status="session('message')" />
        </div>
    </div>

    <div class="py-0">
        <div class="max-w-7xl mx-auto sm:px-12 lg:px-10">
            <div class="p-2 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex">
                <div class="p-7 m-2 text-gray-900 dark:text-gray-100 w-1/2 border border-slate-400 rounded-xl">
                    <form action="{{ route('add.appointment') }}" method="post">
                        @csrf
                        {{-- Fname - Lname --}}
                        <div class="grid md:grid-cols-2 md:gap-6 caret">
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" name="fname" id="fname" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer input" placeholder=" " autocomplete="off" required />
                                <label for="fname" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First name</label>
                            </div>
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" name="lname" id="lname" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer input" placeholder=" " autocomplete="off" required />
                                <label for="lname" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last name</label>
                            </div>
                          </div>
                          {{-- Age - Phone --}}
                          <div class="grid md:grid-cols-2 md:gap-6 caret">
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" name="age" id="age" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer input" placeholder=" " autocomplete="off" required />
                                <label for="age" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Age</label>
                            </div>
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" name="phone" id="phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer input" placeholder=" " autocomplete="off" required />
                                <label for="phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone</label>
                            </div>
                          </div>
                          {{-- Address --}}
                          <div class="grid md:gap-6 caret">
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" name="address" id="address" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer input" placeholder=" " autocomplete="off" required />
                                <label for="address" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Address</label>
                            </div>
                          </div>
                          {{-- Date and Time --}}
                          <div class="grid md:grid-cols-2 md:gap-6 caret">
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="time" name="time" id="time" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer input" placeholder=" " autocomplete="off" required />
                                <label for="time" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Time</label>
                            </div>
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="date" name="date" id="date" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer input" placeholder=" " autocomplete="off" required />
                                <label for="date" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Date</label>
                            </div>
                          </div>
                          {{-- Apoointment --}}
                          <div class="grid md:gap-6 caret">
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" name="appointment" id="appointment" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer input" placeholder=" " autocomplete="off" required />
                                <label for="appointment" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Appointment</label>
                            </div>
                          </div>

                        <div class="flex justify-center">
                        <x-submit-button class="ms-3 mt-4">
                            {{ __('Add Appointment') }}
                        </x-submit-button>
                    </div>
                    </form>
                </div>

                {{-- Side --}}
                <div class="px-7 py-2 m-2 text-gray-900 dark:text-gray-100 w-1/2 border border-slate-400 rounded-xl">
                    <div class="flex justify-center dark:bg-slate-400 rounded-lg py-2 mb-2">
                        <h3>Available Doctor's</h3>
                    </div>
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-sm text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-100">
                                <tr class="text-center">
                                    <th scope="col" class="px-6 py-3">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        In
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Out
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @forelse ( $appointments as $appointment) --}}
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                                    <td class="px-6 py-4 font-medium">
                                        {{-- {{ $appointment->name }} --}}
                                        Mark Bryan Labinay
                                    </td>
                                    <td class="px-6 py-4 font-medium">
                                        {{-- {{ $appointment->email }} --}}
                                        8:00 AM
                                    </td>
                                    <td class="px-6 py-4 font-medium">
                                        {{-- {{ $appointment->address }} --}}
                                        5:00 PM
                                    </td>
                                    <td class="px-6 py-4 font-medium">
                                        {{-- {{ $appointment->appointment }} --}}
                                    </td>
                                   
                                </tr>
                                {{-- @empty --}}
                                <tr>
                                    <td class="px-6 py-4 text-center">
                                        No Record Found
                                    </td>
                                </tr>
                                {{-- @endforelse --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
