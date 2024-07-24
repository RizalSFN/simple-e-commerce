@extends('app')

@section('container')
    {{-- HOME SECTION --}}
    <div>
        <div class="absolute w-full flex justify-around items-center h-full">
            <div>
                <h1 class="font-extrabold font-comfortaa text-primary text-5xl tracking-wide">Enjoy your</h1>
                <h1 class="font-extrabold mt-1 font-comfortaa text-primary text-6xl tracking-wider">Shopping</h1>
                <p class="mt-3 text-primary font-comfortaa font-medium tracking-wider text-2xl italic">Makin Hemat, Makin
                    Nikmat</p>
            </div>
            <div class="hidden md:block lg:block">
                <img src="{{ asset('assets/img/worldwide.png') }}" alt="world-wide-image">
            </div>
        </div>

        {{-- BACKGROUND IMAGE --}}
        <img src="{{ asset('assets/img/background-image.jpg') }}" class="w-full opacity-10" alt="background-image">

    </div>

    {{-- NAVBAR --}}
    <nav class="bg-transparent fixed w-full z-20 top-0 start-0 transition-colors duration-200 ease-in-out" id="navbar">
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
                        <a href="#" class="block py-2 px-3 rounded text-primary" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#about" class="block py-2 px-3 text-white rounded hover:text-primary">About</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded hover:text-primary">Product</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded hover:text-primary">Seller</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- ABOUT SECTION --}}
    <div class="bg-white" id="about">
        <h1 class="text-3xl pt-20 pb-10 font-comfortaa font-bold text-secondary text-center w-full">INCREASE IN 2024</h1>
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
        <h1 class="text-3xl pt-20 pb-10 font-comfortaa font-bold text-secondary text-center w-full">PARTNERSHIP</h1>
        <div class="flex overflow-x-scroll border w-11/12 mx-auto no-scrollbar py-3">
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
            <i class="bi bi-person-fill text-black text-2xl"></i>
        </div>
        <br><br><br>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            window.addEventListener('scroll', function() {
                var navbar = document.getElementById('navbar')
                if (window.scrollY > 30) {
                    navbar.classList.remove('bg-transparent')
                    navbar.classList.add('bg-secondary')
                } else {
                    navbar.classList.remove('bg-secondary')
                    navbar.classList.add('bg-transparent')
                }
            })
        })
    </script>
@endsection
