<!-- resources/views/details.blade.php -->

@extends('layout.app')

@section('appContents')
<div class="min-h-screen bg-gray-100 flex flex-col">

    <header class="bg-violet-500 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">

            <a href="{{ route('home') }}" class="text-xl font-bold">Sachin Tendulkar</a>


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
        <h1 class="text-4xl font-bold text-violet-800 mb-4">Ms Dhoni - Key Details</h1>

        <div class="flex flex-col md:flex-row">
          <div class="md:w-1/3 mr-8">
            <img src="{{ asset('images/msdhoni1.jpg') }}" alt="Sachin Tendulkar Profile Image" class="object-cover w-full h-64 rounded-md shadow-lg">
          </div>

          <div class="md:w-2/3">
            <ul class="list-disc pl-6 text-gray-700">
              <li><strong>Full Name:</strong> Mahendra Singh Dhoni</li>
              <li><strong>Date of Birth:</strong> 7 July 1981</li>
              <li><strong>Place of Birth:</strong> Ranchi, India</li>
              <li><strong>Nationality:</strong> Indian</li>
              <li><strong>Role:</strong>wicket-keeper-batsman</li>
              <li><strong>Debut:</strong>MS Dhoni made his debut in an ODI in Bangladesh on December 23, 2004</li>
              <li><strong>Retirement:</strong> August 15, 2020</li>
            </ul>
          </div>
        </div>

        <div class="mt-8">
          <h2 class="text-2xl font-bold text-gray-800 mb-4">Notable Records and Achievements</h2>

          <ul class="list-disc pl-6 text-gray-700">
            <li>Dhoni holds the record for playing the most T20I innings (76) and scored the most runs (1,153) before scoring a fifty</li>
            <li>Most stumpings as wicket-keeper in T20Is (34).</li>
            <li>Most catches as wicket keeper in a T20I innings (5)</li>
            <li>Most centuries (49) and half-centuries (96) in ODIs.</li>
            <li>Most centuries (51) and half-centuries (68) in Test cricket.</li>
            <li>Only player to score 30,000 international runs.</li>
            <li>World record for most centuries in international cricket (100).</li>
            <li>Won the Arjuna Award (1994), Rajiv Gandhi Khel Ratna Award (1997), and Padma Shri (1999) for his contributions to cricket.</li>
            <li>Named the Player of the Tournament in the 2003 Cricket World Cup.</li>
            <li>Awarded the Bharat Ratna, India's highest civilian award, in 2008.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection
