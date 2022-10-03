<title>E-Reserve</title>
<x-guest-layout>
    <!-- Main Hero Content -->
    <div class="container max-w-lg px-4 py-32 mx-auto text-left bg-center bg-no-repeat bg-cover md:max-w-none md:text-center" style="background-image: url('assets/images/latar6.jpg')">
        <h1 class="font-mono text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 md:text-center sm:leading-none lg:text-5xl">
            <span class="inline md:block">Sop Duren 97</span>
        </h1>
        <div class="mx-auto mt-2 text-white md:text-center lg:text-lg">
            Website untuk memesan tempat di restoran Sop Duren 97
        </div>
        <div class="flex flex-col items-center mt-12 text-center">
            <span class="relative inline-flex w-full md:w-auto">
                <a href="{{route('reservations.step.one')}}" type="button" class="inline-flex items-center justify-center px-6 py-2 text-base font-bold leading-6 text-white bg-green-600 rounded-full lg:w-full md:w-auto hover:bg-green-500 focus:outline-none">
                    Buat Reservasi Sekarang
                </a>
        </div>
    </div>
    <!-- End Main Hero Content -->
    <section class="px-2 py-32 bg-white md:px-0">
        <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
            <div class="flex flex-wrap items-center sm:-mx-3">
                <div class="w-full md:w-1/2 md:px-3">
                    <div class="w-full pb-6 space-y-4 sm:max-w-md lg:max-w-lg lg:space-y-4 lg:pr-0 md:pb-0">
                        <!-- <h1
              class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl"
            > -->
                        <h3 class="text-xl">OUR STORY
                        </h3>
                        <h2 class="text-4xl text-green-600">Selamat Datang</h2>
                        <!-- </h1> -->
                        <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl text-justify">
                            Sop duren 97 adalah sebuah tempat makan yang memiliki menu andalan yang beragam, mulai dari Sop durian, Ice Durian, hingga makanan olehan durian. Sop duren 97 juga menyajikan makanan berat lainnya dengan disuguhi tempat yang indah dan mengutamakan kenyamanan costumer.
                        </p>
                        <!-- <div class="relative flex">
                            <a href="#_" class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-green-600 rounded-md sm:mb-0 hover:bg-green-700 sm:w-auto">
                                Read More
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </a>
                        </div> -->
                    </div>
                </div>
                <div class="w-full md:w-1/2">
                    <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
                        <img src="assets/images/lantai_3.jpg" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 bg-gray-50">
        <div class="container items-center max-w-6xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
            <div class="flex flex-wrap items-center -mx-3">
                <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
                    <div class="w-full lg:max-w-md">
                        <h2 class="mb-4 text-2xl font-bold" id="about">Tentang Kami</h2>
                        <h2 class="mb-4 text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                            Kenapa harus E-Reserve?</h2>

                        <p class="mb-4 font-medium tracking-tight text-lg text-gray-400 xl:mb-6">Selain membantu pelanggan dengan Reservasi, web E-Reserve juga menyediakan beberapa fitur yang bisa dinikmati pengguna. antara lain</p>
                        <ul>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">

                                <span class="font-medium text-gray-500 text-lg">1. Menyediakan Berbagai Daftar Kategori dan Menu.</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <!-- <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg> -->
                                <span class="font-medium text-gray-500 text-lg">2. Dapat menghemat dan memilih waktu anda sendiri.</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <!-- <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                    </path>
                                </svg> -->
                                <span class="font-medium text-gray-500 text-lg">3. Dapat diakses kapan saja dan dimana saja.</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0"><img class="mx-auto sm:max-w-sm lg:max-w-full" src="assets/images/lantai_2.jpg" alt="feature image"></div>
            </div>
        </div>
    </section>
    <section class="mt-8 bg-white">
        <div class="mt-4 text-center">
            <h3 class="text-2xl font-bold">Our Menu</h3>
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                TODAY'S SPECIALITY</h2>
        </div>
        <div class="container w-full px-5 py-6 mx-auto">
            <div class="grid lg:grid-cols-4 gap-y-6">
                @foreach ($specials->menus as $menu)
                <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
                    <img class="w-full h-48" src="{{Storage::url($menu->image)}}" alt="Image" />
                    <div class="px-6 py-4">
                        <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">{{$menu->name}}</h4>
                        <p class="leading-normal text-gray-700">{{$menu->description}}</p>
                    </div>
                    <div class="flex items-center justify-between p-4">
                        <span class="text-xl text-green-600">{{$menu->price}}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="pt-4 pb-12 bg-gray-50">
        <div class="my-8 text-center">
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                Galeri Kami</h2>
            <p class="text-xl">Berikut ini adalah Galeri dari Restoran kami</p>
        </div>
        <div class="container grid gap-4 mx-auto lg:grid-cols-3">
            <div class="w-full rounded">
                <img src="assets/images/fix/20.jpeg" alt="image">
            </div>
            <div class="w-full rounded">
                <img src="assets/images/fix/15.jpeg" alt="image">
            </div>
            <div class="w-full rounded">
                <img src="assets/images/fix/9.jpeg" alt="image">
            </div>
            <div class="w-full rounded">
                <img src="assets/images/fix/3.jpeg" alt="image">
            </div>
            <div class="w-full rounded">
                <img src="assets/images/fix/8.jpeg" alt="image">
            </div>
            <div class="w-full rounded">
                <img src="assets/images/fix/14.jpeg" alt="image">
            </div>
        </div>
    </section>

    <!-- <section class="pt-4 pb-12 bg-gray-800">
        <div class="my-16 text-center">
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                Testimonial </h2>
            <p class="text-xl text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. soluta sapient</p>
        </div>
        <div class="grid gap-2 lg:grid-cols-3">
            <div class="max-w-md p-4 bg-white rounded-lg shadow-lg">
                <div class="flex justify-center -mt-16 md:justify-end">
                    <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full" src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
                </div>
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800">Food</h2>
                    <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores deserunt
                        ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis pariatur
                        minus consequuntur!</p>
                </div>
                <div class="flex justify-end mt-4">
                    <a href="#" class="text-xl font-medium text-green-500">John Doe</a>
                </div>
            </div>
            <div class="max-w-md p-4 bg-white rounded-lg shadow-lg">
                <div class="flex justify-center -mt-16 md:justify-end">
                    <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full" src="https://cdn.pixabay.com/photo/2018/01/04/21/15/young-3061652__340.jpg">
                </div>
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800">Food</h2>
                    <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores deserunt
                        ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis pariatur
                        minus consequuntur!</p>
                </div>
                <div class="flex justify-end mt-4">
                    <a href="#" class="text-xl font-medium text-green-500">John Doe</a>
                </div>
            </div>
            <div class="max-w-md p-4 bg-white rounded-lg shadow-lg">
                <div class="flex justify-center -mt-16 md:justify-end">
                    <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full" src="https://cdn.pixabay.com/photo/2018/01/18/17/48/purchase-3090818__340.jpg">
                </div>
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800">Food</h2>
                    <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores deserunt
                        ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis pariatur
                        minus consequuntur!</p>
                </div>
                <div class="flex justify-end mt-4">
                    <a href="#" class="text-xl font-medium text-green-500">John Doe</a>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section class="pt-12 pb-12 bg-red-50">
        <div class="container flex items-center justify-center p-6 mx-auto bg-white shadow-lg sm:p-12 md:w-1/2">
            <div class="w-full">

                <h1 class="mb-4 text-2xl font-bold text-center text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                    Order Now FREE AND FAST
                </h1>
                <div class="gap-2 mb-8 lg:flex">
                    <div class="w-full">
                        <label class="block text-base">
                            Your Name
                        </label>
                        <input type="text" class="w-full px-4 py-2 text-base border rounded-md focus:border-green-400 focus:outline-none focus:ring-1 focus:ring-green-600" placeholder="Your Name" />
                    </div>
                    <div class="w-full">
                        <label class="block text-base">
                            Your Number
                        </label>
                        <input type="text" class="w-full px-4 py-2 text-base border rounded-md focus:border-green-400 focus:outline-none focus:ring-1 focus:ring-green-600" placeholder="Your Number" />
                    </div>
                </div>
                <div class="gap-2 mb-8 lg:flex">
                    <div class="w-full">
                        <label class="block text-base">
                            Table Number
                        </label>
                        <input type="text" class="w-full px-4 py-2 text-base border rounded-md focus:border-green-400 focus:outline-none focus:ring-1 focus:ring-green-600" placeholder="Enter Table Number 1 to 12" />
                    </div>
                    <div class="w-full">
                        <label class="block text-base">
                            Booking Date
                        </label>
                        <input type="date" class="w-full px-4 py-2 text-base border rounded-md focus:border-green-400 focus:outline-none focus:ring-1 focus:ring-green-600" placeholder="Your Number" />
                    </div>
                </div>
                <div class="">
                    <label class="block text-base">
                        Your Message
                    </label>
                    <textarea name="" id="" rows="4" cols="30" class="w-full text-base border rounded-md focus:border-green-400 focus:outline-none focus:ring-1 focus:ring-green-600" placeholder="Message"></textarea>
                </div>
                <button class="px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-lg active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-green" href="#">
                    Book Now
                </button>

            </div>
        </div>
    </section> -->
</x-guest-layout>
