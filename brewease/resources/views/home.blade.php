@extends('layouts.main')
@section('title', 'Home')
@section('container')
    {{-- Hero Section --}}
    <section class="grid grid-cols-1 md:grid-cols-2 bg-cream h-screen font-Lexend">
        <div class="flex flex-col pl-4 md:pl-14 justify-center space-y-6 h-full">
            <span class="text-3xl md:text-5xl font-extrabold text-amber-950">FIND GREAT COFFEE EASY TO ORDER</span>
            <span class="text-xl md:text-2xl font-medium text-amber-950">Delicious Coffee, Easy in the Hand.</span>
            <div class="flex space-x-4">
                <a href="#" class="px-4 py-2 md:px-6 md:py-2 text-md md:text-lg font-medium text-white bg-amber-950 rounded-full hover:bg-amber-900">
                    <i class="ri-drinks-fill"></i> Order Now 
                </a>
            </div>
        </div>
        <div class="flex flex-col items-center justify-center text-center">
            <img src="assets/img/CoffeeBag.png" alt="Hero-Image" class="w-8/12 md:w-10/12">
        </div>
    </section>

    {{-- Product Sections --}}
    <section class="bg-cream font-Quicksand">
        <div class="text-center py-5 space-y-3">
            <h2 class="font-light text-2xl text-amber-950">Our Products</h2>
            <p class="font-bold text-2xl text-amber-950 underline underline-offset-10">Made of high-quality materials</p>
        </div>

        {{-- Rounded Selection --}}
        <div class="py-12 pr-96 pl-96">
            <div class="flex bg-cream outline outline-2 outline-amber-950 rounded-full px-1 py-1">
                <button class="flex-1 text-center py-2 rounded-full bg-amber-950 hover:bg-amber-900 text-white font-medium">Latte</button>
                <button class="flex-1 text-center py-2 text-amber-950 hover:text-amber-900 font-medium">Robusta</button>
                <button class="flex-1 text-center py-2 text-amber-950 hover:text-amber-900 font-medium">Arabica</button>
            </div>            
        </div>
    </section>
@endsection