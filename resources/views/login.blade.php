
@extends('layout')

@section('container')
{{-- @if (session()->has('LoginError'))
    <div class="alert alert-danger">
        {{ session('LoginError') }}
    </div>
@endif

@if (session()->has('VoteSuccess'))
    <div class="alert alert-success">
        Berhasil Vote
    </div>
@endif --}}
{{-- 
    <div class="text-center">

        <div class="container">

            <main class="form-signin w-50 mt-5 m-auto">
                <form action="/login" method="post">
                    @csrf
                  <h1 class="h3 mb-3 fw-normal ">Please Login</h1>
              
        
                  <div class="form-floating mt-5">
                    <input type="text" class="form-control  @error('username') is-invalid  @enderror" id="username" placeholder="John Doe" name="username" required value="{{ old('username') }}">
                    <label for="username">Your Username</label>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}    
                        </div>    
                    @enderror
                  </div>
    
                  <div class="form-floating">
                    <input type="number" class="form-control  @error('token') is-invalid  @enderror" id="token" placeholder="Your Token" required name="token">
                    <label for="token">Your Unique Token</label>
                    @error('token')
                        <div class="invalid-feedback">
                            {{ $message }}    
                        </div>    
                    @enderror
                  </div>
              
    
                  <button class="w-100 btn btn-lg btn-primary mb-5" type="submit">Sign up</button>
    
    
                </form>
            </main>
    
        </div>
    </div>    --}}

    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                {{-- <img class="w-20 h-8 mr-2" src="/img/itsc-landscape.png" alt="logo"> --}}
                ITSC President Selection 2023/2024
            </a>
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <img class="w-20 h-8 mr-2" src="/img/itsc-landscape.png" alt="logo">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Sign in to your account
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="/login"  method="POST">
                        @csrf
                        <div>
                            <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                            <input type="text" name="username" id="username" autofocus autocomplete="off" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your Username Here">
                        </div>
                        <div>
                            <label for="token" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Token</label>
                            <input type="text" name="token" id="token" placeholder="••••••••" autocomplete="off" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        </div>
              
                        <button type="submit" class="w-full text-white bg-purple-600 hover:bg-purple-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign in</button>
      
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection