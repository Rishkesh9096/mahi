<!-- resources/views/about.blade.php -->

@extends('layout.app')

@section('appContents')
<div class="bg-gray-100 min-h-screen flex flex-col">

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
                <h1 class="text-4xl font-bold text-violet-800 mb-4">About Mahendra Singh Dhoni</h1>

                <p class="text-gray-700 mb-4">Mahendra Singh Dhoni (/məˈheɪndrə ˈsɪŋ dhæˈnɪ/ ⓘ; born 7 July 1981) is an Indian professional cricketer, who plays as a wicket-keeper-batsman. Widely regarded as one of the world's greatest wicket-keeper-batsmen and captains in the history of the sport,[a] he is known for his explosive batting, wicket-keeping and leadership skills.[9] He was the captain of the Indian national team in limited-overs formats from 2007 to 2017 and in Test cricket from 2008 to 2014. Dhoni is the first cricketer to be a winning captain of all three major ICC trophies, as under his captaincy, India won the 2007 ICC World Twenty20, the 2011 Cricket World Cup, and the 2013 ICC Champions Trophy, the most by any captain. He also led India to victory in the 2010 and 2016 Asia Cup.</p>

                <h2 class="text-2xl font-bold text-gray-800 mb-4">Early Years and Cricket Debut</h2>

                <p class="text-gray-700 mb-4">The Indian ODI team in the early 2000s saw Rahul Dravid as the wicket-keeper to ensure that the wicket-keeper spot didn't lack in batting talent.[63] The team also saw the entry of wicket-keeper/batsmen from the junior ranks, with talents like Parthiv Patel and Dinesh Karthik (both India U-19 captains) named in the Test squads.[63] With Dhoni making a mark in the India A squad, he was picked in the ODI squad for the Bangladesh tour in 2004/05.[64] Dhoni did not have a great start to his ODI career, getting run out for a duck on debut.[65] In spite of an average series against Bangladesh, Dhoni was picked for the Pakistan ODI series.[66]</p>

                <h2 class="text-2xl font-bold text-gray-800 mb-4">Unparalleled Achievements and Records</h2>

                <p class="text-gray-700 mb-4">Dhoni is the first cricketer to be a winning captain of all three major ICC trophies, as under his captaincy, India won the 2007 ICC World Twenty20, the 2011 Cricket World Cup, and the 2013 ICC Champions Trophy, the most by any captain. He also led India to victory in the 2010 and 2016 Asia Cup.</p>

                <ul class="list-disc mb-4">
                    <li>Dhoni is the first Indian wicket-keeper to score 4,000 Test runs.</li>
                    <li>After hitting a six in the third Test against England in Southampton, Dhoni completed 50 sixes as a captain, an Indian record.</li>
                    <li>Dhoni, with 294 dismissals in his career, ranks first in the all-time dismissals list by Indian wicket-keepers.</li>
                    <li>Dhoni is the third captain (and the first non-Australian) overall to win 100 games.</li>
                    <li>First player to pass 10,000 runs in ODI cricket with having a career average of over 50</li>
                </ul>

                <h2 class="text-2xl font-bold text-gray-800 mb-4">Beyond Cricket: Philanthropy and Inspiration</h2>

                <p class="text-gray-700 mb-4">Sachin Tendulkar's impact extends far beyond the cricket field. He is a role model for millions around the world, inspiring young people with his dedication, humility, and philanthropic endeavors. In 1999, he established the Tendulkar Foundation, a non-profit organization dedicated to providing education and healthcare to underprivileged children. He also serves as a UNICEF Goodwill Ambassador, advocating for the rights of children worldwide.</p>

                <ul class="list-disc mb-4">
                    <li>Dhoni holds the honorary rank of Lieutenant Colonel in the Indian Army's Parachute Regiment. He underwent training with the Territorial Army and has actively participated in various activities related to the armed forces.</li>
                    <li> Dhoni has been associated with several charitable initiatives and has made significant contributions to various causes. He has been involved in projects related to education and healthcare, focusing on providing support to underprivileged children.</li>
                    <li>Dhoni is known for his calm and composed leadership style on the cricket field. Under his captaincy, the Indian cricket team achieved numerous milestones, including winning the 2007 ICC World Twenty20, the 2010 and 2016 Asia Cups, and the 2011 ICC Cricket World Cup.</li>
                    <li>Dhoni's ability to stay calm under pressure and make strategic decisions in critical situations has been a source of inspiration for many aspiring cricketers and individuals in leadership roles.</li>

                </ul>
            </div>
        </div>
    </div>
@endsection
