<title>E-Reserve</title>
<x-guest-layout>
    <div class="container w-full px-5 py-6 mx-auto">
        <div class="flex items-center min-h-screen bg-gray-50">
            <div class="flex-1 h-full max-w-4xl mx-auto bg-white rounded-lg shadow-xl">
                <div class="flex flex-col md:flex-row">
                    <div class="h-32 md:h-auto md:w-1/2">
                        <img class="object-cover w-full h-full" src="https://cdn.pixabay.com/photo/2021/01/15/17/01/green-5919790__340.jpg" alt="img" />
                    </div>
                    <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                        <div class="w-full">
                            <h3 class="mb-4 text-xl font-bold text-blue-600">Buat Reservasi Baru</h3>

                            <div class="w-full bg-gray-200 rounded-full">
                                <div class="w-40 p-1 text-xs font-medium leading-none text-center text-blue-100 bg-blue-600 rounded-full">
                                    Langkah pertama</div>
                            </div>

                            <form method="POST" action="{{route('reservations.step.two')}}">
                                @csrf
                                <div class="sm:col-span-6">
                                    <label for="first_name" class="block text-sm font-medium text-gray-700"> Nama Depan </label>
                                    <div class="mt-1">
                                        <input type="text" id="first_name" name="first_name" value="{{old('first_name')}}" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-400 @enderror" required />
                                    </div>
                                    @error('first_name')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="sm:col-span-6">
                                    <label for="last_name" class="block text-sm font-medium text-gray-700"> Nama Belakang </label>
                                    <div class="mt-1">
                                        <input type="text" id="last_name" name="last_name" value="{{old('last_name')}}" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-400 @enderror" />
                                    </div>
                                    @error('last_name')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="sm:col-span-6">
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <div class="mt-1">
                                        <input type="text" id="email" name="email" value="{{old('email')}}" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-400 @enderror" />
                                    </div>
                                    @error('email')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="sm:col-span-6">
                                    <label for="number_telp" class="block text-sm font-medium text-gray-700"> Nomor Telepon </label>
                                    <div class="mt-1">
                                        <input type="text" id="number_telp" name="number_telp" value="{{old('number_telp')}}" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-400 @enderror" />
                                    </div>
                                    @error('number_telp')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="sm:col-span-6">
                                    <label for="res_date" class="block text-sm font-medium text-gray-700"> Tanggal Reservasi </label>
                                    <div class="mt-1">
                                        <input type="datetime-local" id="res_date" name="res_date" min="{{$min_date->format('Y-m-d\TH:i:s')}}" max="{{$max_date->format('Y-m-d\TH:i:s')}}" value="{{old('res_date')}}" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-400 @enderror" />
                                    </div>
                                    <span class="text-xs">Tolong Pilih waktu antara 11 Pagi - 10 Malam</span>
                                    @error('res_date')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class=" sm:col-span-6 mt-2">
                                    <label for="guest_number" class="block text-sm font-medium text-gray-700"> Jumlah Tamu </label>
                                    <div class="mt-1">
                                        <input type="number" id="guest_number" name="guest_number" value="{{old('guest_number')}}" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-400 @enderror" />
                                    </div>
                                    @error('guest_number')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mt-6 p-4 flex justify-end">
                                    <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded text-white
                            ">Selanjutnya</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
