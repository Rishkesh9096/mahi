<!-- resources/views/contact.blade.php -->
<!-- resources/views/contact.blade.php -->

@extends('layout.app')

@section('appContents')
    <div class="min-h-screen bg-gray-100 flex flex-col">

        <header class="bg-violet-500 text-white p-4">
            <div class="container mx-auto flex justify-between items-center">

                <a href="{{ route('home') }}" class="text-xl font-bold">MS Dhoni</a>

                <nav>
                    <ul class="flex space-x-4">
                        <li><a href="{{ route('home') }}" class="hover:underline">Home</a></li>
                        <li><a href="{{ route('about') }}" class="hover:underline">About</a></li>
                        <li><a href="{{ route('history') }}" class="hover:underline">History</a></li>
                        <li><a href="{{ route('details') }}" class="hover:underline">Details</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:underline">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>


        <div class="flex-1 flex items-center justify-center">
            <div class="max-w-3xl p-10 bg-white shadow-lg rounded-md">
                <h1 class="text-4xl font-bold text-violet-800 mb-4">Connect with MS Dhoni</h1>

                <p class="text-gray-700 mb-4">
                    Mahendra Singh Dhoni, popularly known as MS Dhoni, has a strong and special connection with his fans.
                </p>

                <div class="flex flex-col md:flex-row gap-4">
                    <div class="md:w-1/2">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">Email</h2>

                        <p class="text-gray-700 mb-4">
                            You Cannot contact with MS Dhoni through internet.
                        </p>
                    </div>

                    <div class="md:w-1/2">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">Social Media</h2>

                        <p class="text-gray-700 mb-4">
                            You Cannot contact with MS Dhoni through internet.
                        </p>

                        <ul class="list-none mb-4">

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
