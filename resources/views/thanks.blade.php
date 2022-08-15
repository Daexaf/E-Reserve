<x-guest-layout>
    <div class="container w-full px-5 py-6 mx-auto">
        <h1>Terima Kasih</h1>
        <p>Reservasi anda sedang di proses</p>
        <p>Silahkan datang sesuai waktu yang dipilih</p>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-x-auto relative">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                Nama
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                Email
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                Tanggal Reservasi
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                Meja
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                Jumlah Tamu
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$thanks->last_name}}
                            </td>
                            <td class="py-4 px-6" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$thanks->email}}
                            </td>
                            <td class="py-4 px-6" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$thanks->res_date}}
                            </td>
                            <td class="py-4 px-6" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$thanks->table->name}}
                            </td>
                            <td class="py-4 px-6" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                                {{$thanks->guest_number}}
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-guest-layout>
