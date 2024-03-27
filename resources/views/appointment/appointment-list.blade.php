<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Appointment List') }}
        </h2>
    </x-slot>

    <div class="py-0 px-10 mt-4">
        <div class="text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
            <x-success :status="session('message')" />
        </div>
    </div>

    <div class="py-0">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-sm text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-100">
                                <tr class="text-center">
                                    <th scope="col" class="px-6 py-3">
                                        ID
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Address
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Apppointment
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Edit
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Delete
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ( $appointments as $appointment)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $appointment->id }}
                                    </th>
                                    <td class="px-6 py-4 font-medium">
                                        {{ $appointment->name }}
                                    </td>
                                    <td class="px-6 py-4 font-medium">
                                        {{ $appointment->email }}
                                    </td>
                                    <td class="px-6 py-4 font-medium">
                                        {{ $appointment->address }}
                                    </td>
                                    <td class="px-6 py-4 font-medium">
                                        {{ $appointment->appointment }}
                                    </td>
                                    <td>
                                        <a href="{{ route('edit.appointment',['appointment_id' => $appointment->id]) }} " class="inline-flex items-center px-4 py-2 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 transition ease-in-out duration-150">Edit</button></a>
                                    </td>
                                    <td class="px-6 py-3">
                                        <form action="{{ route('delete.appointment',['appointment_id' => $appointment->id]) }} " method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                            class="inline-flex items-center px-4 py-2 focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 transition ease-in-out duration-150">Remove</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="px-6 py-4 text-center">
                                        No Record Found
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
