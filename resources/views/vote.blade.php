@extends('layout')

@section('container')
<section class="vote">

    <h1 class="text-3xl font-sans font-bold text-center mt-3">Gunakan Hak Suaramu Sekarang !</h1>
    <p class="text-1xl text-center mt-2 font-normal">Seluruh data pemilih akan bersifat anonim demi terwujudnya demokrasi yang bebas dan transparan</p>
    
    <form action="/vote" method="post">
        @csrf
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        <div class="flex justify-around cards mt-4">
            
            <div class="w-72 shadow-xl shadow-inner mt-6 bg-gray-300 border border-gray-400 rounded-2xl rounded-t-2xl shadow ">
                    <a href="#">
                        <img class="rounded-t-2xl " src="/img/Paslon1Landscape.jpg" alt="Paslon 1" />
                    </a>
                    <div class="p-5 pt-3">
                        <a href="#">
                            <h5 class="mb-2 text-amber-500 text-1xl font-bold tracking-tight">Nomor Urut 01</h5>
                        </a>
                        <div class="text text-blue-700 text-lg font-medium">
                            <p class="font-sans font-bold">Ryan Rafif Nur Rahman &</p>
                            <p class="mb-3 font-sans font-bold"> Satria Agung Wicaksana </p>
                        </div>
                        <!-- <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                    </a> -->

                    <input id="published" class="peer/published" type="radio" name="candidate_id" value="1" />
                    <label for="published" class="peer-checked/published:text-sky-500">Pilih Kandidat</label>
                </div>
            </div>
            <div class="w-72 shadow-xl shadow-inner mt-6 bg-gray-300 border border-gray-400 rounded-2xl rounded-t-2xl shadow ">
                <a href="#">
                    <img class="rounded-t-2xl " src="/img/Paslon2Lansdscape.jpg" alt="" />
                </a>
                <div class="p-5 pt-3">
                    <a href="#">
                        <h5 class="mb-2 text-amber-500 text-1xl font-bold tracking-tight">Nomor Urut 02</h5>
                    </a>
                    <div class="text text-blue-700 text-lg font-medium">
                        <p class="font-sans font-bold">Stephanie Salwa Dewanti &</p>
                        <p class="mb-3 font-sans font-bold"> Fajrul Falah Adinata</p>
                    </div>
                    <!-- <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a> -->

                    <input id="published" class="peer/published" type="radio" name="candidate_id" value="2" />
                    <label for="published" class="peer-checked/published:text-sky-500">Pilih Kandidat</label>
                </div>
            </div>
            <div class="w-72 shadow-xl shadow-inner mt-6 bg-gray-300 border border-gray-400 rounded-2xl rounded-t-2xl shadow ">
                <a href="#">
                    <img class="rounded-t-2xl " src="/img/Paslon3Landscape.jpg" alt="" />
                </a>
                <div class="p-5 pt-3">
                    <a href="#">
                        <h5 class="mb-2 text-amber-500 text-1xl font-bold tracking-tight">Nomor Urut 03</h5>
                    </a>
                    <div class="text text-blue-700 text-lg font-medium">
                        <p class="font-sans font-bold">Nayottama Putra Perdana &</p>
                        <p class="mb-3 font-sans font-bold">Jalu Jabbar Arundaya</p>
                    </div>
                    <!-- <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a> -->
                    
                    <input id="published" class="peer/published" type="radio" name="candidate_id" value="3" />
                    <label for="published" class="peer-checked/published:text-sky-500">Pilih Kandidat</label>
                </div>
            </div>
        
        
        </div>

        <div class="text-center mt-6 grid grid-cols-1">
            <button class="bg-violet-500 hover:bg-violet-700 text-white font-bold py-5 ml-16 mr-16 rounded-xl col-start-1 col-end-7">Kirim Sekarang</button>
        </div>
    </form>
</section>
@endsection