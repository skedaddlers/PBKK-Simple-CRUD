<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/css/fonts.css')

    <title>MEME SHOP</title>
</head>

<body class="h-full px-24 pt-12 pb-24">
    <div x-data="{ open: false }" @keydown.window.escape="open = false" x-show="open"
        class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50" style="display: none;"
        @open-modal.window="open = true">
        <x-modal title="open-modal" content="Ini adalah konten modal." />

    </div>

    <nav class="px-24 pt-7 pb-3 w-full flex flex-row justify-between items-center fixed top-0 left-0 right-0 bg-white">
        <h5 class="font-[LemonMilk] font-bold text-3xl text-[#54C4DB]">MEMEMARKET</h5>
        <div class="flex flex-row gap-12 justify-center items-center font-[Poppins]">
            <p>Home</p>
            <p>Shop</p>
            <p>About Us</p>
        </div>
        <button class="flex flex-row gap-2 rounded-xl bg-[#76E8FF] px-5 py-3 hover:bg-[#4e838e]" id="modal-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                <path
                    d="M3 3.5H5L5.4 5.5M7 13.5H17L21 5.5H5.4M7 13.5L5.4 5.5M7 13.5L4.70711 15.7929C4.07714 16.4229 4.52331 17.5 5.41421 17.5H17M17 17.5C15.8954 17.5 15 18.3954 15 19.5C15 20.6046 15.8954 21.5 17 21.5C18.1046 21.5 19 20.6046 19 19.5C19 18.3954 18.1046 17.5 17 17.5ZM9 19.5C9 20.6046 8.10457 21.5 7 21.5C5.89543 21.5 5 20.6046 5 19.5C5 18.3954 5.89543 17.5 7 17.5C8.10457 17.5 9 18.3954 9 19.5Z"
                    stroke="#212122" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <h3 class="font-[LemonMilk] font-bold text-lg ">YOUR CART</h3>
        </button>
    </nav>
    <main class="w-full flex flex-col justify-center items-center pt-16 gap-9 main-content">
        <img src={{ Vite::asset('resources/images/Onlineshop/Main/hero.png') }} alt="hero" class="w-full" />
        <div class="flex flex-col gap-1 w-full items-start">
            <h1 class="font-[Poppins] font-bold text-4xl">OUR PRODUCT</h1>
            <p class="font-[Poppins] font-medium text-xl ">Check our best memes on this world</p>
        </div>
        <div class="flex flex-wrap gap-10 w-full justify-center items-center">
            <div class="card flex flex-col gap-4 items-center justify-center shadow-xl p-6 rounded-xl">
                <div class="image w-[200px] h-[200px]">
                    <img src={{ Vite::asset('resources/images/Onlineshop/Main/kentang.png') }} alt="product"
                        class="w-full h-full" />
                </div>
                <h4 class="font-[Poppins] font-bold text-lg ">kentang gedagedi</h4>
                <h5 class="harga font-[Poppins] font-bold text-base text-[#168F64]">Rp 30.000/item</h5>
                <div class="plusminus flex flex-row justify-center items-start h-9">
                    <button id="minus"
                        class="px-4 py-1 flex justify-center items-center border rounded-l-lg h-full hover:bg-black/20">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.67578 6.79314C2.67578 6.45056 2.95349 6.17285 3.29607 6.17285L10.7395 6.17285C11.0821 6.17285 11.3598 6.45056 11.3598 6.79314C11.3598 7.13572 11.0821 7.41343 10.7395 7.41343L3.29607 7.41343C2.95349 7.41343 2.67578 7.13572 2.67578 6.79314Z"
                                fill="#212122" />
                        </svg>
                    </button>
                    <div id="amount" class="px-4 py-1 flex justify-center items-center border h-full">
                        <p class="font-[Poppins] font-medium text-xs">1</p>
                    </div>
                    <button id="plus"
                        class="px-4 py-1 flex justify-center items-center border rounded-r-lg h-full hover:bg-black/20">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6.35081 2.45117C6.69338 2.45117 6.9711 2.72888 6.9711 3.07146V6.1729H10.0725C10.4151 6.1729 10.6928 6.45062 10.6928 6.79319C10.6928 7.13577 10.4151 7.41348 10.0725 7.41348H6.9711V10.5149C6.9711 10.8575 6.69338 11.1352 6.35081 11.1352C6.00823 11.1352 5.73052 10.8575 5.73052 10.5149V7.41348H2.62908C2.2865 7.41348 2.00879 7.13577 2.00879 6.79319C2.00879 6.45061 2.2865 6.1729 2.62908 6.1729L5.73052 6.1729V3.07146C5.73052 2.72888 6.00823 2.45117 6.35081 2.45117Z"
                                fill="#212122" />
                        </svg>
                    </button>
                </div>
                <div
                    class="addcart flex flex-row gap-1 px-5 py-2 justify-center items-center bg-[#168F64] hover:bg-[#7cc4ab] rounded-lg">
                    <p class="font-[Poppins] font-semibold text-xs text-white">Add Cart</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 13 13"
                        fill="none">
                        <path
                            d="M2.2417 2.26514H3.20771L3.40092 3.23115M4.17373 7.09521H9.00379L10.9358 3.23115H3.40092M4.17373 7.09521L3.40092 3.23115M4.17373 7.09521L3.06624 8.20269C2.76197 8.50697 2.97747 9.02723 3.40778 9.02723H9.00379M9.00379 9.02723C8.47028 9.02723 8.03778 9.45973 8.03778 9.99325C8.03778 10.5268 8.47028 10.9593 9.00379 10.9593C9.53731 10.9593 9.96981 10.5268 9.96981 9.99325C9.96981 9.45973 9.53731 9.02723 9.00379 9.02723ZM5.13974 9.99325C5.13974 10.5268 4.70724 10.9593 4.17373 10.9593C3.64021 10.9593 3.20771 10.5268 3.20771 9.99325C3.20771 9.45973 3.64021 9.02723 4.17373 9.02723C4.70724 9.02723 5.13974 9.45973 5.13974 9.99325Z"
                            stroke="#F9F9FA" stroke-width="0.966014" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
            <div class="card flex flex-col gap-4 items-center justify-center shadow-xl p-6 rounded-xl">
                <div class="image w-[200px] h-[200px]">
                    <img src={{ Vite::asset('resources/images/Onlineshop/Main/kentang.png') }} alt="product"
                        class="w-full h-full" />
                </div>
                <h4 class="font-[Poppins] font-bold text-lg ">kentang gedagedi</h4>
                <h5 class="harga font-[Poppins] font-bold text-base text-[#168F64]">Rp 30.000/item</h5>
                <div class="plusminus flex flex-row justify-center items-start h-9">
                    <button id="minus"
                        class="px-4 py-1 flex justify-center items-center border rounded-l-lg h-full hover:bg-black/20">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.67578 6.79314C2.67578 6.45056 2.95349 6.17285 3.29607 6.17285L10.7395 6.17285C11.0821 6.17285 11.3598 6.45056 11.3598 6.79314C11.3598 7.13572 11.0821 7.41343 10.7395 7.41343L3.29607 7.41343C2.95349 7.41343 2.67578 7.13572 2.67578 6.79314Z"
                                fill="#212122" />
                        </svg>
                    </button>
                    <div id="amount" class="px-4 py-1 flex justify-center items-center border h-full">
                        <p class="font-[Poppins] font-medium text-xs">1</p>
                    </div>
                    <button id="plus"
                        class="px-4 py-1 flex justify-center items-center border rounded-r-lg h-full hover:bg-black/20">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6.35081 2.45117C6.69338 2.45117 6.9711 2.72888 6.9711 3.07146V6.1729H10.0725C10.4151 6.1729 10.6928 6.45062 10.6928 6.79319C10.6928 7.13577 10.4151 7.41348 10.0725 7.41348H6.9711V10.5149C6.9711 10.8575 6.69338 11.1352 6.35081 11.1352C6.00823 11.1352 5.73052 10.8575 5.73052 10.5149V7.41348H2.62908C2.2865 7.41348 2.00879 7.13577 2.00879 6.79319C2.00879 6.45061 2.2865 6.1729 2.62908 6.1729L5.73052 6.1729V3.07146C5.73052 2.72888 6.00823 2.45117 6.35081 2.45117Z"
                                fill="#212122" />
                        </svg>
                    </button>
                </div>
                <div
                    class="addcart flex flex-row gap-1 px-5 py-2 justify-center items-center bg-[#168F64] hover:bg-[#7cc4ab] rounded-lg">
                    <p class="font-[Poppins] font-semibold text-xs text-white">Add Cart</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 13 13"
                        fill="none">
                        <path
                            d="M2.2417 2.26514H3.20771L3.40092 3.23115M4.17373 7.09521H9.00379L10.9358 3.23115H3.40092M4.17373 7.09521L3.40092 3.23115M4.17373 7.09521L3.06624 8.20269C2.76197 8.50697 2.97747 9.02723 3.40778 9.02723H9.00379M9.00379 9.02723C8.47028 9.02723 8.03778 9.45973 8.03778 9.99325C8.03778 10.5268 8.47028 10.9593 9.00379 10.9593C9.53731 10.9593 9.96981 10.5268 9.96981 9.99325C9.96981 9.45973 9.53731 9.02723 9.00379 9.02723ZM5.13974 9.99325C5.13974 10.5268 4.70724 10.9593 4.17373 10.9593C3.64021 10.9593 3.20771 10.5268 3.20771 9.99325C3.20771 9.45973 3.64021 9.02723 4.17373 9.02723C4.70724 9.02723 5.13974 9.45973 5.13974 9.99325Z"
                            stroke="#F9F9FA" stroke-width="0.966014" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
            <div class="card flex flex-col gap-4 items-center justify-center shadow-xl p-6 rounded-xl">
                <div class="image w-[200px] h-[200px]">
                    <img src={{ Vite::asset('resources/images/Onlineshop/Main/kentang.png') }} alt="product"
                        class="w-full h-full" />
                </div>
                <h4 class="font-[Poppins] font-bold text-lg ">kentang gedagedi</h4>
                <h5 class="harga font-[Poppins] font-bold text-base text-[#168F64]">Rp 30.000/item</h5>
                <div class="plusminus flex flex-row justify-center items-start h-9">
                    <button id="minus"
                        class="px-4 py-1 flex justify-center items-center border rounded-l-lg h-full hover:bg-black/20">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.67578 6.79314C2.67578 6.45056 2.95349 6.17285 3.29607 6.17285L10.7395 6.17285C11.0821 6.17285 11.3598 6.45056 11.3598 6.79314C11.3598 7.13572 11.0821 7.41343 10.7395 7.41343L3.29607 7.41343C2.95349 7.41343 2.67578 7.13572 2.67578 6.79314Z"
                                fill="#212122" />
                        </svg>
                    </button>
                    <div id="amount" class="px-4 py-1 flex justify-center items-center border h-full">
                        <p class="font-[Poppins] font-medium text-xs">1</p>
                    </div>
                    <button id="plus"
                        class="px-4 py-1 flex justify-center items-center border rounded-r-lg h-full hover:bg-black/20">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6.35081 2.45117C6.69338 2.45117 6.9711 2.72888 6.9711 3.07146V6.1729H10.0725C10.4151 6.1729 10.6928 6.45062 10.6928 6.79319C10.6928 7.13577 10.4151 7.41348 10.0725 7.41348H6.9711V10.5149C6.9711 10.8575 6.69338 11.1352 6.35081 11.1352C6.00823 11.1352 5.73052 10.8575 5.73052 10.5149V7.41348H2.62908C2.2865 7.41348 2.00879 7.13577 2.00879 6.79319C2.00879 6.45061 2.2865 6.1729 2.62908 6.1729L5.73052 6.1729V3.07146C5.73052 2.72888 6.00823 2.45117 6.35081 2.45117Z"
                                fill="#212122" />
                        </svg>
                    </button>
                </div>
                <div
                    class="addcart flex flex-row gap-1 px-5 py-2 justify-center items-center bg-[#168F64] hover:bg-[#7cc4ab] rounded-lg">
                    <p class="font-[Poppins] font-semibold text-xs text-white">Add Cart</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 13 13"
                        fill="none">
                        <path
                            d="M2.2417 2.26514H3.20771L3.40092 3.23115M4.17373 7.09521H9.00379L10.9358 3.23115H3.40092M4.17373 7.09521L3.40092 3.23115M4.17373 7.09521L3.06624 8.20269C2.76197 8.50697 2.97747 9.02723 3.40778 9.02723H9.00379M9.00379 9.02723C8.47028 9.02723 8.03778 9.45973 8.03778 9.99325C8.03778 10.5268 8.47028 10.9593 9.00379 10.9593C9.53731 10.9593 9.96981 10.5268 9.96981 9.99325C9.96981 9.45973 9.53731 9.02723 9.00379 9.02723ZM5.13974 9.99325C5.13974 10.5268 4.70724 10.9593 4.17373 10.9593C3.64021 10.9593 3.20771 10.5268 3.20771 9.99325C3.20771 9.45973 3.64021 9.02723 4.17373 9.02723C4.70724 9.02723 5.13974 9.45973 5.13974 9.99325Z"
                            stroke="#F9F9FA" stroke-width="0.966014" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
            <div class="card flex flex-col gap-4 items-center justify-center shadow-xl p-6 rounded-xl">
                <div class="image w-[200px] h-[200px]">
                    <img src={{ Vite::asset('resources/images/Onlineshop/Main/kentang.png') }} alt="product"
                        class="w-full h-full" />
                </div>
                <h4 class="font-[Poppins] font-bold text-lg ">kentang gedagedi</h4>
                <h5 class="harga font-[Poppins] font-bold text-base text-[#168F64]">Rp 30.000/item</h5>
                <div class="plusminus flex flex-row justify-center items-start h-9">
                    <button id="minus"
                        class="px-4 py-1 flex justify-center items-center border rounded-l-lg h-full hover:bg-black/20">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.67578 6.79314C2.67578 6.45056 2.95349 6.17285 3.29607 6.17285L10.7395 6.17285C11.0821 6.17285 11.3598 6.45056 11.3598 6.79314C11.3598 7.13572 11.0821 7.41343 10.7395 7.41343L3.29607 7.41343C2.95349 7.41343 2.67578 7.13572 2.67578 6.79314Z"
                                fill="#212122" />
                        </svg>
                    </button>
                    <div id="amount" class="px-4 py-1 flex justify-center items-center border h-full">
                        <p class="font-[Poppins] font-medium text-xs">1</p>
                    </div>
                    <button id="plus"
                        class="px-4 py-1 flex justify-center items-center border rounded-r-lg h-full hover:bg-black/20">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6.35081 2.45117C6.69338 2.45117 6.9711 2.72888 6.9711 3.07146V6.1729H10.0725C10.4151 6.1729 10.6928 6.45062 10.6928 6.79319C10.6928 7.13577 10.4151 7.41348 10.0725 7.41348H6.9711V10.5149C6.9711 10.8575 6.69338 11.1352 6.35081 11.1352C6.00823 11.1352 5.73052 10.8575 5.73052 10.5149V7.41348H2.62908C2.2865 7.41348 2.00879 7.13577 2.00879 6.79319C2.00879 6.45061 2.2865 6.1729 2.62908 6.1729L5.73052 6.1729V3.07146C5.73052 2.72888 6.00823 2.45117 6.35081 2.45117Z"
                                fill="#212122" />
                        </svg>
                    </button>
                </div>
                <div
                    class="addcart flex flex-row gap-1 px-5 py-2 justify-center items-center bg-[#168F64] hover:bg-[#7cc4ab] rounded-lg">
                    <p class="font-[Poppins] font-semibold text-xs text-white">Add Cart</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 13 13"
                        fill="none">
                        <path
                            d="M2.2417 2.26514H3.20771L3.40092 3.23115M4.17373 7.09521H9.00379L10.9358 3.23115H3.40092M4.17373 7.09521L3.40092 3.23115M4.17373 7.09521L3.06624 8.20269C2.76197 8.50697 2.97747 9.02723 3.40778 9.02723H9.00379M9.00379 9.02723C8.47028 9.02723 8.03778 9.45973 8.03778 9.99325C8.03778 10.5268 8.47028 10.9593 9.00379 10.9593C9.53731 10.9593 9.96981 10.5268 9.96981 9.99325C9.96981 9.45973 9.53731 9.02723 9.00379 9.02723ZM5.13974 9.99325C5.13974 10.5268 4.70724 10.9593 4.17373 10.9593C3.64021 10.9593 3.20771 10.5268 3.20771 9.99325C3.20771 9.45973 3.64021 9.02723 4.17373 9.02723C4.70724 9.02723 5.13974 9.45973 5.13974 9.99325Z"
                            stroke="#F9F9FA" stroke-width="0.966014" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
            <div class="card flex flex-col gap-4 items-center justify-center shadow-xl p-6 rounded-xl">
                <div class="image w-[200px] h-[200px]">
                    <img src={{ Vite::asset('resources/images/Onlineshop/Main/kentang.png') }} alt="product"
                        class="w-full h-full" />
                </div>
                <h4 class="font-[Poppins] font-bold text-lg ">kentang gedagedi</h4>
                <h5 class="harga font-[Poppins] font-bold text-base text-[#168F64]">Rp 30.000/item</h5>
                <div class="plusminus flex flex-row justify-center items-start h-9">
                    <button id="minus"
                        class="px-4 py-1 flex justify-center items-center border rounded-l-lg h-full hover:bg-black/20">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.67578 6.79314C2.67578 6.45056 2.95349 6.17285 3.29607 6.17285L10.7395 6.17285C11.0821 6.17285 11.3598 6.45056 11.3598 6.79314C11.3598 7.13572 11.0821 7.41343 10.7395 7.41343L3.29607 7.41343C2.95349 7.41343 2.67578 7.13572 2.67578 6.79314Z"
                                fill="#212122" />
                        </svg>
                    </button>
                    <div id="amount" class="px-4 py-1 flex justify-center items-center border h-full">
                        <p class="font-[Poppins] font-medium text-xs">1</p>
                    </div>
                    <button id="plus"
                        class="px-4 py-1 flex justify-center items-center border rounded-r-lg h-full hover:bg-black/20">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6.35081 2.45117C6.69338 2.45117 6.9711 2.72888 6.9711 3.07146V6.1729H10.0725C10.4151 6.1729 10.6928 6.45062 10.6928 6.79319C10.6928 7.13577 10.4151 7.41348 10.0725 7.41348H6.9711V10.5149C6.9711 10.8575 6.69338 11.1352 6.35081 11.1352C6.00823 11.1352 5.73052 10.8575 5.73052 10.5149V7.41348H2.62908C2.2865 7.41348 2.00879 7.13577 2.00879 6.79319C2.00879 6.45061 2.2865 6.1729 2.62908 6.1729L5.73052 6.1729V3.07146C5.73052 2.72888 6.00823 2.45117 6.35081 2.45117Z"
                                fill="#212122" />
                        </svg>
                    </button>
                </div>
                <div
                    class="addcart flex flex-row gap-1 px-5 py-2 justify-center items-center bg-[#168F64] hover:bg-[#7cc4ab] rounded-lg">
                    <p class="font-[Poppins] font-semibold text-xs text-white">Add Cart</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 13 13"
                        fill="none">
                        <path
                            d="M2.2417 2.26514H3.20771L3.40092 3.23115M4.17373 7.09521H9.00379L10.9358 3.23115H3.40092M4.17373 7.09521L3.40092 3.23115M4.17373 7.09521L3.06624 8.20269C2.76197 8.50697 2.97747 9.02723 3.40778 9.02723H9.00379M9.00379 9.02723C8.47028 9.02723 8.03778 9.45973 8.03778 9.99325C8.03778 10.5268 8.47028 10.9593 9.00379 10.9593C9.53731 10.9593 9.96981 10.5268 9.96981 9.99325C9.96981 9.45973 9.53731 9.02723 9.00379 9.02723ZM5.13974 9.99325C5.13974 10.5268 4.70724 10.9593 4.17373 10.9593C3.64021 10.9593 3.20771 10.5268 3.20771 9.99325C3.20771 9.45973 3.64021 9.02723 4.17373 9.02723C4.70724 9.02723 5.13974 9.45973 5.13974 9.99325Z"
                            stroke="#F9F9FA" stroke-width="0.966014" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
            <div class="card flex flex-col gap-4 items-center justify-center shadow-xl p-6 rounded-xl">
                <div class="image w-[200px] h-[200px]">
                    <img src={{ Vite::asset('resources/images/Onlineshop/Main/kentang.png') }} alt="product"
                        class="w-full h-full" />
                </div>
                <h4 class="font-[Poppins] font-bold text-lg ">kentang gedagedi</h4>
                <h5 class="harga font-[Poppins] font-bold text-base text-[#168F64]">Rp 30.000/item</h5>
                <div class="plusminus flex flex-row justify-center items-start h-9">
                    <button id="minus"
                        class="px-4 py-1 flex justify-center items-center border rounded-l-lg h-full hover:bg-black/20">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.67578 6.79314C2.67578 6.45056 2.95349 6.17285 3.29607 6.17285L10.7395 6.17285C11.0821 6.17285 11.3598 6.45056 11.3598 6.79314C11.3598 7.13572 11.0821 7.41343 10.7395 7.41343L3.29607 7.41343C2.95349 7.41343 2.67578 7.13572 2.67578 6.79314Z"
                                fill="#212122" />
                        </svg>
                    </button>
                    <div id="amount" class="px-4 py-1 flex justify-center items-center border h-full">
                        <p class="font-[Poppins] font-medium text-xs">1</p>
                    </div>
                    <button id="plus"
                        class="px-4 py-1 flex justify-center items-center border rounded-r-lg h-full hover:bg-black/20">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6.35081 2.45117C6.69338 2.45117 6.9711 2.72888 6.9711 3.07146V6.1729H10.0725C10.4151 6.1729 10.6928 6.45062 10.6928 6.79319C10.6928 7.13577 10.4151 7.41348 10.0725 7.41348H6.9711V10.5149C6.9711 10.8575 6.69338 11.1352 6.35081 11.1352C6.00823 11.1352 5.73052 10.8575 5.73052 10.5149V7.41348H2.62908C2.2865 7.41348 2.00879 7.13577 2.00879 6.79319C2.00879 6.45061 2.2865 6.1729 2.62908 6.1729L5.73052 6.1729V3.07146C5.73052 2.72888 6.00823 2.45117 6.35081 2.45117Z"
                                fill="#212122" />
                        </svg>
                    </button>
                </div>
                <div
                    class="addcart flex flex-row gap-1 px-5 py-2 justify-center items-center bg-[#168F64] hover:bg-[#7cc4ab] rounded-lg">
                    <p class="font-[Poppins] font-semibold text-xs text-white">Add Cart</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 13 13"
                        fill="none">
                        <path
                            d="M2.2417 2.26514H3.20771L3.40092 3.23115M4.17373 7.09521H9.00379L10.9358 3.23115H3.40092M4.17373 7.09521L3.40092 3.23115M4.17373 7.09521L3.06624 8.20269C2.76197 8.50697 2.97747 9.02723 3.40778 9.02723H9.00379M9.00379 9.02723C8.47028 9.02723 8.03778 9.45973 8.03778 9.99325C8.03778 10.5268 8.47028 10.9593 9.00379 10.9593C9.53731 10.9593 9.96981 10.5268 9.96981 9.99325C9.96981 9.45973 9.53731 9.02723 9.00379 9.02723ZM5.13974 9.99325C5.13974 10.5268 4.70724 10.9593 4.17373 10.9593C3.64021 10.9593 3.20771 10.5268 3.20771 9.99325C3.20771 9.45973 3.64021 9.02723 4.17373 9.02723C4.70724 9.02723 5.13974 9.45973 5.13974 9.99325Z"
                            stroke="#F9F9FA" stroke-width="0.966014" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
            <div class="card flex flex-col gap-4 items-center justify-center shadow-xl p-6 rounded-xl">
                <div class="image w-[200px] h-[200px]">
                    <img src={{ Vite::asset('resources/images/Onlineshop/Main/kentang.png') }} alt="product"
                        class="w-full h-full" />
                </div>
                <h4 class="font-[Poppins] font-bold text-lg ">kentang gedagedi</h4>
                <h5 class="harga font-[Poppins] font-bold text-base text-[#168F64]">Rp 30.000/item</h5>
                <div class="plusminus flex flex-row justify-center items-start h-9">
                    <button id="minus"
                        class="px-4 py-1 flex justify-center items-center border rounded-l-lg h-full hover:bg-black/20">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.67578 6.79314C2.67578 6.45056 2.95349 6.17285 3.29607 6.17285L10.7395 6.17285C11.0821 6.17285 11.3598 6.45056 11.3598 6.79314C11.3598 7.13572 11.0821 7.41343 10.7395 7.41343L3.29607 7.41343C2.95349 7.41343 2.67578 7.13572 2.67578 6.79314Z"
                                fill="#212122" />
                        </svg>
                    </button>
                    <div id="amount" class="px-4 py-1 flex justify-center items-center border h-full">
                        <p class="font-[Poppins] font-medium text-xs">1</p>
                    </div>
                    <button id="plus"
                        class="px-4 py-1 flex justify-center items-center border rounded-r-lg h-full hover:bg-black/20">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6.35081 2.45117C6.69338 2.45117 6.9711 2.72888 6.9711 3.07146V6.1729H10.0725C10.4151 6.1729 10.6928 6.45062 10.6928 6.79319C10.6928 7.13577 10.4151 7.41348 10.0725 7.41348H6.9711V10.5149C6.9711 10.8575 6.69338 11.1352 6.35081 11.1352C6.00823 11.1352 5.73052 10.8575 5.73052 10.5149V7.41348H2.62908C2.2865 7.41348 2.00879 7.13577 2.00879 6.79319C2.00879 6.45061 2.2865 6.1729 2.62908 6.1729L5.73052 6.1729V3.07146C5.73052 2.72888 6.00823 2.45117 6.35081 2.45117Z"
                                fill="#212122" />
                        </svg>
                    </button>
                </div>
                <div
                    class="addcart flex flex-row gap-1 px-5 py-2 justify-center items-center bg-[#168F64] hover:bg-[#7cc4ab] rounded-lg">
                    <p class="font-[Poppins] font-semibold text-xs text-white">Add Cart</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 13 13"
                        fill="none">
                        <path
                            d="M2.2417 2.26514H3.20771L3.40092 3.23115M4.17373 7.09521H9.00379L10.9358 3.23115H3.40092M4.17373 7.09521L3.40092 3.23115M4.17373 7.09521L3.06624 8.20269C2.76197 8.50697 2.97747 9.02723 3.40778 9.02723H9.00379M9.00379 9.02723C8.47028 9.02723 8.03778 9.45973 8.03778 9.99325C8.03778 10.5268 8.47028 10.9593 9.00379 10.9593C9.53731 10.9593 9.96981 10.5268 9.96981 9.99325C9.96981 9.45973 9.53731 9.02723 9.00379 9.02723ZM5.13974 9.99325C5.13974 10.5268 4.70724 10.9593 4.17373 10.9593C3.64021 10.9593 3.20771 10.5268 3.20771 9.99325C3.20771 9.45973 3.64021 9.02723 4.17373 9.02723C4.70724 9.02723 5.13974 9.45973 5.13974 9.99325Z"
                            stroke="#F9F9FA" stroke-width="0.966014" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
            <div class="card flex flex-col gap-4 items-center justify-center shadow-xl p-6 rounded-xl">
                <div class="image w-[200px] h-[200px]">
                    <img src={{ Vite::asset('resources/images/Onlineshop/Main/kentang.png') }} alt="product"
                        class="w-full h-full" />
                </div>
                <h4 class="font-[Poppins] font-bold text-lg ">kentang gedagedi</h4>
                <h5 class="harga font-[Poppins] font-bold text-base text-[#168F64]">Rp 30.000/item</h5>
                <div class="plusminus flex flex-row justify-center items-start h-9">
                    <button id="minus"
                        class="px-4 py-1 flex justify-center items-center border rounded-l-lg h-full hover:bg-black/20">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.67578 6.79314C2.67578 6.45056 2.95349 6.17285 3.29607 6.17285L10.7395 6.17285C11.0821 6.17285 11.3598 6.45056 11.3598 6.79314C11.3598 7.13572 11.0821 7.41343 10.7395 7.41343L3.29607 7.41343C2.95349 7.41343 2.67578 7.13572 2.67578 6.79314Z"
                                fill="#212122" />
                        </svg>
                    </button>
                    <div id="amount" class="px-4 py-1 flex justify-center items-center border h-full">
                        <p class="font-[Poppins] font-medium text-xs">1</p>
                    </div>
                    <button id="plus"
                        class="px-4 py-1 flex justify-center items-center border rounded-r-lg h-full hover:bg-black/20">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6.35081 2.45117C6.69338 2.45117 6.9711 2.72888 6.9711 3.07146V6.1729H10.0725C10.4151 6.1729 10.6928 6.45062 10.6928 6.79319C10.6928 7.13577 10.4151 7.41348 10.0725 7.41348H6.9711V10.5149C6.9711 10.8575 6.69338 11.1352 6.35081 11.1352C6.00823 11.1352 5.73052 10.8575 5.73052 10.5149V7.41348H2.62908C2.2865 7.41348 2.00879 7.13577 2.00879 6.79319C2.00879 6.45061 2.2865 6.1729 2.62908 6.1729L5.73052 6.1729V3.07146C5.73052 2.72888 6.00823 2.45117 6.35081 2.45117Z"
                                fill="#212122" />
                        </svg>
                    </button>
                </div>
                <div
                    class="addcart flex flex-row gap-1 px-5 py-2 justify-center items-center bg-[#168F64] hover:bg-[#7cc4ab] rounded-lg">
                    <p class="font-[Poppins] font-semibold text-xs text-white">Add Cart</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 13 13"
                        fill="none">
                        <path
                            d="M2.2417 2.26514H3.20771L3.40092 3.23115M4.17373 7.09521H9.00379L10.9358 3.23115H3.40092M4.17373 7.09521L3.40092 3.23115M4.17373 7.09521L3.06624 8.20269C2.76197 8.50697 2.97747 9.02723 3.40778 9.02723H9.00379M9.00379 9.02723C8.47028 9.02723 8.03778 9.45973 8.03778 9.99325C8.03778 10.5268 8.47028 10.9593 9.00379 10.9593C9.53731 10.9593 9.96981 10.5268 9.96981 9.99325C9.96981 9.45973 9.53731 9.02723 9.00379 9.02723ZM5.13974 9.99325C5.13974 10.5268 4.70724 10.9593 4.17373 10.9593C3.64021 10.9593 3.20771 10.5268 3.20771 9.99325C3.20771 9.45973 3.64021 9.02723 4.17373 9.02723C4.70724 9.02723 5.13974 9.45973 5.13974 9.99325Z"
                            stroke="#F9F9FA" stroke-width="0.966014" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
        </div>
        <section>
            <div class="fixed top-0 z-40 h-screen inset-0 bg-black bg-opacity-50 justify-center pt-20
                pb-20 overflow-y-auto hidden"
                id="modal">
                <div class="w-[60%] h-fit p-16 bg-white justify-start items-start rounded-2xl flex flex-col gap-8 ">
                    <div class="flex flex-row justify-between w-full">
                        <h1 class="font-[Poppins] font-bold text-5xl">Checkouts</h1>
                        <button class="hover:bg-black/20 rounded-lg close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                viewBox="0 0 48 48" fill="none">
                                <path d="M36 12L12 36M12 12L36 36" stroke="#1E1E1E" stroke-width="4"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex w-full flex-row gap-0">
                        <div class="w-[50%] justify-start flex">
                            <h3 class="font-[Poppins] text-2xl font-semibold">Memes</h3>
                        </div>
                        <div class="w-[50%] flex flex-row justify-between font-semibold">
                            <h3 class="font-[Poppins] text-2xl">Price</h3>
                            <h3 class="font-[Poppins] text-2xl">Quantity</h3>
                            <h3 class="font-[Poppins] text-2xl">Subtotal</h3>
                        </div>
                    </div>
                    <div class="flex w-full flex-col gap-3">
                        <div
                            class="card w-full items-center justify-center px-5 py-3 flex flex-row bg-[#EAEAEA] rounded-xl">
                            <div class="w-[50%] flex flex-row gap-3 items-center">
                                <div class="image w-[15%]">
                                    <img src={{ Vite::asset('resources/images/Onlineshop/Main/kentang.png') }}
                                        alt="product" class="w-full h-full" />
                                </div>
                                <p class="font-[Poppins] font-normals text-2xl ">Kentang Gedagedi</p>
                            </div>
                            <div class="w-[50%] flex flex-row justify-between items-center">
                                <p class="font-[Poppins] font-normals text-2xl ">Rp 34.000</p>
                                <p class="font-[Poppins] font-normals text-2xl ">3</p>
                                <p class="font-[Poppins] font-normals text-2xl ">Rp 102.000</p>
                            </div>
                        </div>
                        <div
                            class="card w-full items-center justify-center px-5 py-3 flex flex-row bg-[#EAEAEA] rounded-xl">
                            <div class="w-[50%] flex flex-row gap-3 items-center">
                                <div class="image w-[15%]">
                                    <img src={{ Vite::asset('resources/images/Onlineshop/Main/kentang.png') }}
                                        alt="product" class="w-full h-full" />
                                </div>
                                <p class="font-[Poppins] font-normals text-2xl ">Kentang Gedagedi</p>
                            </div>
                            <div class="w-[50%] flex flex-row justify-between items-center">
                                <p class="font-[Poppins] font-normals text-2xl ">Rp 34.000</p>
                                <p class="font-[Poppins] font-normals text-2xl ">3</p>
                                <p class="font-[Poppins] font-normals text-2xl ">Rp 102.000</p>
                            </div>
                        </div>
                        <div
                            class="card w-full items-center justify-center px-5 py-3 flex flex-row bg-[#EAEAEA] rounded-xl">
                            <div class="w-[50%] flex flex-row gap-3 items-center">
                                <div class="image w-[15%]">
                                    <img src={{ Vite::asset('resources/images/Onlineshop/Main/kentang.png') }}
                                        alt="product" class="w-full h-full" />
                                </div>
                                <p class="font-[Poppins] font-normals text-2xl ">Kentang Gedagedi</p>
                            </div>
                            <div class="w-[50%] flex flex-row justify-between items-center">
                                <p class="font-[Poppins] font-normals text-2xl ">Rp 34.000</p>
                                <p class="font-[Poppins] font-normals text-2xl ">3</p>
                                <p class="font-[Poppins] font-normals text-2xl ">Rp 102.000</p>
                            </div>
                        </div>
                        <div
                            class="card w-full items-center justify-center px-5 py-3 flex flex-row bg-[#EAEAEA] rounded-xl">
                            <div class="w-[50%] flex flex-row gap-3 items-center">
                                <div class="image w-[15%]">
                                    <img src={{ Vite::asset('resources/images/Onlineshop/Main/kentang.png') }}
                                        alt="product" class="w-full h-full" />
                                </div>
                                <p class="font-[Poppins] font-normals text-2xl ">Kentang Gedagedi</p>
                            </div>
                            <div class="w-[50%] flex flex-row justify-between items-center">
                                <p class="font-[Poppins] font-normals text-2xl ">Rp 34.000</p>
                                <p class="font-[Poppins] font-normals text-2xl ">3</p>
                                <p class="font-[Poppins] font-normals text-2xl ">Rp 102.000</p>
                            </div>
                        </div>
                        <div
                            class="card w-full items-center justify-center px-5 py-3 flex flex-row bg-[#EAEAEA] rounded-xl">
                            <div class="w-[50%] flex flex-row gap-3 items-center">
                                <div class="image w-[15%]">
                                    <img src={{ Vite::asset('resources/images/Onlineshop/Main/kentang.png') }}
                                        alt="product" class="w-full h-full" />
                                </div>
                                <p class="font-[Poppins] font-normals text-2xl ">Kentang Gedagedi</p>
                            </div>
                            <div class="w-[50%] flex flex-row justify-between items-center">
                                <p class="font-[Poppins] font-normals text-2xl ">Rp 34.000</p>
                                <p class="font-[Poppins] font-normals text-2xl ">3</p>
                                <p class="font-[Poppins] font-normals text-2xl ">Rp 102.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="grandtotal flex flex-col gap-8 py-10 bg-[#EAEAEA] w-full rounded-2xl justify-center">
                        <div class="flex flex-row justify-between items-center px-10">
                            <h3 class="font-[Poppins] text-2xl font-medium">Total</h3>
                            <h3 class="font-[Poppins] text-2xl font-medium">Rp 510.000</h3>
                        </div>
                        <div class="flex flex-row justify-between items-center px-10">
                            <h3 class="font-[Poppins] text-2xl font-medium">Tax</h3>
                            <h3 class="font-[Poppins] text-2xl font-medium">Rp 51.000</h3>
                        </div>
                        <div class="flex flex-row justify-between items-center px-10">
                            <h3 class="font-[Poppins] text-3xl font-bold">Grand Total</h3>
                            <h3 class="font-[Poppins] text-3xl font-bold">Rp 561.000</h3>
                        </div>
                        <div class="w-full flex justify-center items-center">
                            <button
                                class="w-fit flex flex-row gap-2 rounded-xl bg-[#76E8FF] px-5 py-3 hover:bg-[#4e838e]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                    viewBox="0 0 24 25" fill="none">
                                    <path
                                        d="M3 3.5H5L5.4 5.5M7 13.5H17L21 5.5H5.4M7 13.5L5.4 5.5M7 13.5L4.70711 15.7929C4.07714 16.4229 4.52331 17.5 5.41421 17.5H17M17 17.5C15.8954 17.5 15 18.3954 15 19.5C15 20.6046 15.8954 21.5 17 21.5C18.1046 21.5 19 20.6046 19 19.5C19 18.3954 18.1046 17.5 17 17.5ZM9 19.5C9 20.6046 8.10457 21.5 7 21.5C5.89543 21.5 5 20.6046 5 19.5C5 18.3954 5.89543 17.5 7 17.5C8.10457 17.5 9 18.3954 9 19.5Z"
                                        stroke="#212122" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <h3 class="font-[LemonMilk] font-bold text-lg ">PROCEED TO CHECKOUT</h3>
                            </button>
                        </div>
                    </div>
                </div>
        </section>
    </main>
</body>

<script>
    const modal = document.getElementById('modal');
    const modalbutton = document.getElementById('modal-button');
    const closemodal = document.querySelector('.close');

    modalbutton.addEventListener('click', () => {
        modal.classList.toggle('hidden');
        modal.classList.toggle('flex');
        document.querySelector('.main-content').classList.toggle('overflow-y-hidden');
    });

    closemodal.addEventListener('click', () => {
        modal.classList.toggle('flex');
        modal.classList.toggle('hidden');
        document.querySelector('.main-content').classList.toggle('overflow-y-hidden');
    });


    const cart = document.querySelectorAll('.addcart');
    const cartbutton = document.querySelector('.cart-button');
    const minus = document.querySelectorAll('#minus');
    const plus = document.querySelectorAll('#plus');
    const amount = document.querySelectorAll('#amount');

    // fungsikan plus dan minus untuk mengedit isi dari amount
    minus.forEach((button) => {
        button.addEventListener('click', () => {
            let value = parseInt(button.nextElementSibling.innerText);
            if (value > 1) {
                value -= 1;
                button.nextElementSibling.innerText = value;
            }
        });
    });

    plus.forEach((button) => {
        button.addEventListener('click', () => {
            let value = parseInt(button.previousElementSibling.innerText);
            value += 1;
            button.previousElementSibling.innerText = value;
        });
    });

    // fungsikan addcart untuk reset amount
    cart.forEach((button) => {
        button.addEventListener('click', () => {
            let value = parseInt(button.previousElementSibling.children[1].innerText);
            value = 1;
            button.previousElementSibling.children[1].innerText = value;
        });

    });
</script>

</html>
