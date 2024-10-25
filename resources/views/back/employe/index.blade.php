<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Employes') }}
        </h2>
    </x-slot>
    <div class="py-4 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="overflow-x-auto ">
                    <table class="min-w-full bg-white border border-gray-300 ">
                        <thead>
                            <tr class="bg-gray-100 border-b">
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-gray-600">No</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-gray-600">Nip</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-gray-600">Nama</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-gray-600">Divisi</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-gray-600">Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-100">
                                <td class="px-6 py-4 border-b border-gray-300">1</td>
                                <td class="px-6 py-4 border-b border-gray-300">123456</td>
                                <td class="px-6 py-4 border-b border-gray-300">John Doe</td>
                                <td class="px-6 py-4 border-b border-gray-300">IT</td>
                                <td class="px-6 py-4 border-b border-gray-300">
                                    <button class="text-blue-500 hover:underline">Edit</button>
                                    <button class="text-red-500 hover:underline">Delete</button>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-100">
                                <td class="px-6 py-4 border-b border-gray-300">2</td>
                                <td class="px-6 py-4 border-b border-gray-300">654321</td>
                                <td class="px-6 py-4 border-b border-gray-300">Jane Smith</td>
                                <td class="px-6 py-4 border-b border-gray-300">HR</td>
                                <td class="px-6 py-4 border-b border-gray-300">
                                    <button class="text-blue-500 hover:underline">Edit</button>
                                    <button class="text-red-500 hover:underline">Delete</button>
                                </td>
                            </tr>
                            <!-- Tambahkan baris lainnya sesuai kebutuhan -->
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>
</x-app-layout>
