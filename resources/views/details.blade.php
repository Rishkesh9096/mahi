<!-- resources/views/details.blade.php -->

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
  <div class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-7xl p-8 bg-white shadow-lg rounded-md">
      <div class="mb-8">
        <h1 class="text-4xl font-bold text-violet-800 mb-4">Ms Dhoni- Key Details</h1>

        <div class="flex flex-col md:flex-row">
          <div class="md:w-1/3 mr-8">
            <img src="{{ asset('images/msdhoni.jpg') }}" alt="Sachin Tendulkar Profile Image" class="object-cover w-full h-64 rounded-md shadow-lg">
          </div>

          <div class="md:w-2/3">
            <ul class="list-disc pl-6 text-gray-700">
              <li><strong>Full Name:</strong> Mahendra singh Dhoni</li>
              <li><strong>Date of Birth:</strong>7 July 1981</li>
              <li><strong>Place of Birth:</strong> Ranchi, India</li>
              <li><strong>Nationality:</strong> Indian</li>
              <li><strong>Role:</strong>wicket-keeper-batsman</li>
              <li><strong>Debut:</strong> Ms Dhoni First International Match – MS Dhoni made his debut in an ODI in Bangladesh on December 23, 2004 </li>
              <li><strong>Retirement:</strong> 15 August 2020</li>
            </ul>
          </div>
        </div>

        <div class="mt-8">
          <h2 class="text-2xl font-bold text-gray-800 mb-4">Notable Records and Achievements</h2>

          <ul class="list-disc pl-6 text-gray-700">
            <li>Dhoni holds the record for playing the most T20I innings (76) and scored the most runs (1,153) before scoring a fifty</li>
            <li>Most stumpings as wicket-keeper in T20Is (34)</li>
            <li>Most catches as wicket keeper in a T20I innings (5)</li>
            <li>He has played the most international matches as captain (332)</li>
            <li>Dhoni is the first, and so far only, wicket-keeper to make 150 stumpings across the three forms of the game. His current total of stumpings in internationals stands at 195</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection
