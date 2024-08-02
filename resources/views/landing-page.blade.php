@extends('app')

@section('container')
    {{-- HOME SECTION --}}
    <section id="home" class="h-screen md:h-auto lg:h-auto">
        <div
            class="absolute w-full flex flex-col md:flex-row lg:flex-row mt-28 lg:mt-0 justify-around items-center max-h-fit lg:h-full lg:max-h-none">
            <div class="text-center">
                <h1 class="font-extrabold font-comfortaa text-primary text-3xl md:text-5xl lg:text-5xl tracking-wide">Enjoy
                    your</h1>
                <h1 class="font-extrabold mt-1 font-comfortaa text-primary text-4xl md:text-6xl lg:text-6xl tracking-wider">
                    Shopping</h1>
                <p class="mt-3 text-primary font-comfortaa font-medium tracking-wider text-2xl italic">Makin Hemat, Makin
                    Nikmat</p>
            </div>
            <div class="pt-20 md:pt-0 lg:pt-0">
                <img src="{{ asset('assets/img/worldwide.png') }}" class="h-56 md:h-52 lg:h-auto" alt="world-wide-image">
            </div>
        </div>

        {{-- BACKGROUND IMAGE --}}
        <img src="{{ asset('assets/img/background-image.jpg') }}" class="w-full opacity-10 h-screen md:h-auto lg:h-auto"
            alt="background-image">

    </section>

    {{-- UP ARROW --}}
    <a href="#home"
        class="fixed hidden z-30 py-3 px-3.5 rounded-full bottom-10 right-10 bg-yellow-400 text-white hover:bg-yellow-500"
        id="arrow-up">
        <i class="bi bi-arrow-up"></i>
    </a>

    {{-- NAVBAR --}}
    {{-- <nav class="bg-transparent fixed w-full z-20 top-0 start-0 transition-colors duration-200 ease-in-out" id="navbar">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('assets/img/basket.png') }}" class="h-10" alt="Ayamart Logo">
                <span class="self-center text-2xl font-bold tracking-wide whitespace-nowrap text-primary">AyaMart</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-2 focus:outline-none focus:ring-yellow-200 font-medium tracking-wide rounded-lg text-sm px-10 py-2 text-center uppercase">Login</button>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                    <li>
                        <a id="nav-link" href="#home" class="block py-2 px-3 rounded">Home</a>
                    </li>
                    <li>
                        <a id="nav-link" href="#about" class="block py-2 px-3 rounded">About</a>
                    </li>
                    <li>
                        <a id="nav-link" href="#product" class="block py-2 px-3 rounded">Product</a>
                    </li>
                    <li>
                        <a id="nav-link" href="#seller" class="block py-2 px-3 rounded">Seller</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> --}}

    {{-- NAVBAR RESPONSIVE --}}
    <nav class="bg-transparent dark:bg-gray-900 fixed w-full z-20 top-0 start-0 transition-colors duration-300 ease-in-out"
        id="navbar">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('assets/img/basket.png') }}" class="h-8" alt="Ayamart Logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">AyaMart</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">LOGIN</button>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 hover:text-primary rounded-lg md:hidden focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium rounded-lg bg-secondary md:bg-transparent lg:bg-transparent md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#home"
                            class="block py-2 px-3 text-primary bg-gray-800 lg:bg-transparen rounded md:bg-transparent md:text-primary md:p-0 md:dark:text-blue-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#about"
                            class="block py-2 px-3 text-white hover:text-primary md:hover:text-primary lg:hover:text-primary lg:hover:bg-transparent hover:bg-gray-800 rounded md:hover:bg-transparent md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>
                    <li>
                        <a href="#product"
                            class="block py-2 px-3 text-white hover:text-primary md:hover:text-primary lg:hover:text-primary lg:hover:bg-transparent hover:bg-gray-800 rounded md:hover:bg-transparent md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                    </li>
                    <li>
                        <a href="#seller"
                            class="block py-2 px-3 text-white hover:text-primary md:hover:text-primary lg:hover:text-primary lg:hover:bg-transparent hover:bg-gray-800 rounded md:hover:bg-transparent md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    {{-- ABOUT SECTION --}}
    <section class="bg-white" id="about">
        <h1 class="text-3xl pt-20 pb-5 font-comfortaa font-bold text-secondary text-center w-full">INCREASE IN 2024</h1>
        <div class="flex flex-wrap justify-around items-center py-10">
            <a href="#"
                class="flex flex-col px-5 md:w-3/12 lg:w-3/12 items-center bg-white border border-gray-400 rounded-lg shadow md:flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <i class="bi bi-box-fill mr-3 text-6xl text-black"></i>
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-secondary dark:text-white">PRODUCTS</h5>
                    <p class="mb-3 text-4xl font-extrabold text-secondary dark:text-gray-400">5.000++</p>
                </div>
            </a>
            <a href="#"
                class="flex flex-col px-5 md:w-3/12 lg:w-3/12 items-center bg-white border border-gray-400 rounded-lg shadow md:flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <i class="bi bi-person-fill mr-3 text-6xl text-black"></i>
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">SELLER</h5>
                    <p class="mb-3 font-extrabold text-4xl text-secondary dark:text-gray-400">750++</p>
                </div>
            </a>
            <a href="#"
                class="flex flex-col px-5 md:w-3/12 lg:w-3/12 items-center bg-white border border-gray-400 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <i class="bi bi-cart-check-fill mr-3 text-6xl text-black"></i>
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">SALE</h5>
                    <p class="mb-3 font-extrabold text-secondary text-4xl dark:text-gray-400">35.000++</p>
                </div>
            </a>
        </div>
        <h1 class="text-3xl py-10 font-comfortaa font-bold text-secondary text-center w-full">EXPEDITION</h1>
        <div class="flex overflow-x-scroll items-center w-11/12 mx-auto no-scrollbar py-7">
            <img src="{{ asset('assets/img/jnt.png') }}" alt="jnt" class="h-32">
            <img src="{{ asset('assets/img/jne.png') }}" alt="jnt" class="h-10 mx-10">
            <img src="{{ asset('assets/img/anteraja.png') }}" alt="jnt" class="h-32 mx-10">
            <img src="{{ asset('assets/img/ninjaexpress.png') }}" alt="jnt" class="h-12 mx-10">
            <img src="{{ asset('assets/img/sicepat.png') }}" alt="jnt" class="h-20 mx-10">
            <img src="{{ asset('assets/img/idexpress.png') }}" alt="jnt" class="h-20 mx-10">
            <img src="{{ asset('assets/img/jntcargo.jpg') }}" alt="jnt" class="h-20 mx-10">
            <img src="{{ asset('assets/img/gosend.jpg') }}" alt="jnt" class="h-28 mx-10">
        </div>
    </section>

    {{-- PRODUCT SECTION --}}
    <section id="product" class="bg-secondary h-screen flex py-10 px-20 justify-around items-center">
        <div class="w-3/12">
            <h1 class="text-4xl font-comfortaa font-bold text-primary w-full">BEST</h1>
            <h1 class="text-4xl font-comfortaa font-bold text-primary w-full">SELLING</h1>
            <h1 class="text-4xl font-comfortaa font-bold text-primary w-full">PRODUCT</h1>
            <h1 class="text-4xl font-comfortaa font-bold text-primary w-full">IN 2024</h1>
        </div>
        <div class="w-full flex overflow-x-scroll py-5 items-stretch no-scrollbar">
            <div class="w-full mx-5 flex flex-col justify-between bg-white border border-gray-200 rounded-lg">
                <a href="#">
                    <img class="p-8 rounded-t-lg" src="{{ asset('assets/img/hp-1.jpg') }}" alt="product image" />
                </a>
                <div class="flex flex-col justify-center px-5">
                    <a href="#" class="">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">HP 15 ryzen 5 7520u
                            16/512GB</h5>
                    </a>
                    <div class="flex items-center">
                        <div class="flex items-center space-x-1 rtl:space-x-reverse">
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                        </div>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">5.0</span>
                    </div>
                </div>
                <div class="px-5 pb-5">
                    <div class="flex flex-col">
                        <span class="text-2xl font-bold text-gray-900 dark:text-white">Rp 6.999.000</span>
                        <a href="#"
                            class="text-white mt-5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                            to cart</a>
                    </div>
                </div>
            </div>
            <div class="w-full mx-5 flex flex-col justify-between bg-white border border-gray-200 rounded-lg">
                <a href="#">
                    <img class="p-8 rounded-t-lg" src="{{ asset('assets/img/asus-1.jpg') }}" alt="product image" />
                </a>
                <div class="flex flex-col justify-center px-5">
                    <a href="#" class="">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Asus vivobook 14
                            intel core i5 12544H </h5>
                    </a>
                    <div class="flex items-center">
                        <div class="flex items-center space-x-1 rtl:space-x-reverse">
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                        </div>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">3.7</span>
                    </div>
                </div>
                <div class="px-5 pb-5">
                    <div class="flex flex-col">
                        <span class="text-2xl font-bold text-gray-900 dark:text-white">Rp 7.450.000</span>
                        <a href="#"
                            class="text-white mt-5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                            to cart</a>
                    </div>
                </div>
            </div>
            <div class="w-full mx-5 flex flex-col justify-between bg-white border border-gray-200 rounded-lg">
                <a href="#">
                    <img class="p-8 rounded-t-lg" src="{{ asset('assets/img/headset.jpeg') }}" alt="product image" />
                </a>
                <div class="flex flex-col justify-center px-5">
                    <a href="#" class="">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Logitech headset
                            gaming 8D audio</h5>
                    </a>
                    <div class="flex items-center">
                        <div class="flex items-center space-x-1 rtl:space-x-reverse">
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                        </div>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">4.0</span>
                    </div>
                </div>
                <div class="px-5 pb-5">
                    <div class="flex flex-col">
                        <span class="text-2xl font-bold text-gray-900 dark:text-white">Rp 1.399.000</span>
                        <a href="#"
                            class="text-white mt-5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                            to cart</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SELLER SECTION --}}
    <section id="seller" class="bg-white flex h-screen justify-around items-center">
        <div class="w-5/12 text-secondary px-10">
            <h1 class="text-4xl font-bold tracking-wide font-comfortaa w-full">JOIN AND</h1>
            <h1 class="text-4xl font-bold tracking-wide font-comfortaa w-full">BECOME A SELLER</h1>
        </div>
        <div class="w-5/12">
            <form action="" method="" class="block w-full px-6 pt-10 pb-5 bg-secondary rounded-lg shadow">
                <h1 class="font-bold text-xl font-comfortaa uppercase text-center w-full">Let's join with us!</h1>
                <div class="relative mt-7">
                    <input type="text" id="floating_outlined"
                        class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-white bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-primary peer"
                        placeholder=" " />
                    <label for="floating_outlined"
                        class="absolute text-sm text-white duration-300 bg-secondary transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-focus:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Full
                        Name</label>
                </div>
                <div class="relative my-5">
                    <input type="text" id="floating_outlined"
                        class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-white bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-primary peer"
                        placeholder=" " />
                    <label for="floating_outlined"
                        class="absolute text-sm text-white duration-300 bg-secondary transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-focus:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Email
                        Address</label>
                </div>
                <div class="relative">
                    <input type="text" id="floating_outlined"
                        class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-white bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-primary peer"
                        placeholder=" " />
                    <label for="floating_outlined"
                        class="absolute text-sm text-white duration-300 bg-secondary transform -translate-y-4 scale-75 top-2 z-10 origin-[0] px-2 peer-focus:px-2 peer-focus:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Telephone</label>
                </div>
                <button type="button"
                    class="text-blue-700 mt-5 w-3/12 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Submit</button>
            </form>
        </div>
    </section>

    {{-- FOOTER SECTION --}}
    <footer class="bg-secondary">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="https://flowbite.com/" class="flex items-center">
                        <img src="{{ asset('assets/img/basket.png') }}" class="h-10 me-3" alt="Ayamart Logo">
                        <span class="self-center text-2xl font-semibold whitespace-nowrap text-primary">AyaMart</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-primary uppercase dark:text-white">Creator</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4 flex items-center">
                                <i class="bi bi-geo-alt-fill me-3"></i>
                                <p>Bandung</p>
                            </li>
                            <li class="flex items-center">
                                <i class="bi bi-person-workspace me-3"></i>
                                <p>Rizal Sofiana</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3 mt-8 md:mt-0 lg:mt-0">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-primary uppercase dark:text-white">Resources</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                            </li>
                            <li>
                                <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-primary uppercase dark:text-white">Follow us</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                            </li>
                            <li>
                                <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Linkedin</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-primary uppercase dark:text-white">Legal</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="pe-16 sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a
                        href="https://flowbite.com/" class="hover:underline">AyaMart</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-primary dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 8 19">
                            <path fill-rule="evenodd"
                                d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-primary dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 21 16">
                            <path
                                d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                        </svg>
                        <span class="sr-only">Discord community</span>
                    </a>
                    <a href="https://github.com/RizalSFN"
                        class="text-gray-500 hover:text-primary dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">GitHub account</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            window.addEventListener('scroll', function() {
                var navbar = document.getElementById('navbar')
                var arrow = document.getElementById('arrow-up')
                if (window.scrollY > 30) {
                    navbar.classList.remove('bg-transparent')
                    navbar.classList.add('bg-secondary')
                    arrow.classList.remove('hidden')
                } else {
                    navbar.classList.remove('bg-secondary')
                    navbar.classList.add('bg-transparent')
                    arrow.classList.add('hidden')
                }
            })

            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('#nav-link');

            window.addEventListener('scroll', function() {
                let currentSection = '';

                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    if (pageYOffset >= sectionTop - sectionHeight / 3) {
                        currentSection = section.getAttribute('id');
                    }
                });

                navLinks.forEach(link => {
                    link.classList.remove('text-primary');
                    link.classList.add('text-white');
                    link.classList.add('hover:text-primary');
                    if (link.getAttribute('href').includes(currentSection)) {
                        link.classList.add('text-primary');
                    }
                });
            });
        })
    </script>
@endsection
