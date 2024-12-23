@extends('layouts.main')
@section('title', 'Home')
@section('container')
    {{-- Hero Section --}}
    <div class="grid grid-cols-1 md:grid-cols-2 bg-cream h-screen font-Lexend">
        <div class="flex flex-col pl-4 md:pl-14 justify-center space-y-6 h-full">
            <span class="text-3xl md:text-5xl font-extrabold text-amber-950">FIND GREAT COFFEE EASY TO ORDER</span>
            <span class="text-xl md:text-2xl font-medium text-amber-950">Delicious Coffee, Easy in the Hand.</span>
            <div class="flex space-x-4">
                <a href="#" class="px-4 py-2 md:px-6 md:py-2 text-md md:text-lg font-medium text-white bg-amber-950 rounded-full hover:bg-amber-900">Order Now</a>
            </div>
        </div>
        <div class="flex flex-col items-center justify-center text-center">
            <img src="assets/img/CoffeeBag.png" alt="Hero-Image" class="w-8/12 md:w-10/12">
        </div>
    </div>
@endsection