<!-- resources/views/home.blade.php -->

@extends('layout.app')

@section('appContents')
    <div class="min-h-screen bg-gray-100 flex flex-col">
        <!-- Navigation Bar -->
        <header class="bg-violet-500 text-white p-4">
            <div class="container mx-auto flex justify-between items-center">
                <!-- Logo or Website Name -->
                <a href="{{ route('home') }}" class="text-xl font-bold">Mahendra Singh Dhoni</a>

                <!-- Navigation Links -->
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

        <!-- Page Content -->
        <div class="bg-gray-100 flex justify-center items-center">
            <div class="w-full max-w-3xl p-8 bg-white shadow-lg rounded-md">
                <div class="mb-8">
                    <img src="{{ asset('images/msdhoni3.jpg') }}" alt="Sachin Tendulkar - The Master Blaster" class="object-cover w-full h-64 rounded-md shadow-lg">
                </div>

                <div class="flex flex-col items-center">
                    <h1 class="text-4xl font-bold text-violet-800 mb-4">Welcome to Mahendra Singh Dhoni Website</h1>

                    <p class="text-gray-700 mb-4 text-center">Mahendra Singh Dhoni, commonly known as MS Dhoni, is a former Indian cricketer and captain of the Indian national cricket team.
                        He is considered one of the greatest cricketing captains of all time.</p>

                    <p class="text-gray-700 mb-4 text-center">Explore this fan page to learn more about his career and achievements.
                        Mahendra Singh Dhoni (/məˈheɪndrə ˈsɪŋ dhæˈnɪ/ ⓘ; born 7 July 1981) is an Indian professional cricketer,
                        who plays as a wicket-keeper-batsman.
                    <p class="text-gray-700 mb-4 text-center">Widely regarded as one of the world's greatest wicket-keeper-batsmen
                        and captains in the history of the sport,[a] he is known for his explosive batting, wicket-keeping and
                        leadership skills.[9] He was the captain of the Indian national team in limited-overs formats from 2007
                        to 2017 and in Test cricket from 2008 to 2014. He plays for and captains Chennai Super Kings franchise in the Indian Premier League.</p>

                    <a href="{{ route('about') }}" class="inline-block bg-violet-500 hover:bg-violet-600 text-white font-bold py-2 px-6 rounded-md transition duration-300">Learn More</a>
                </div>

                <div class="grid grid-cols-3 gap-4 mt-8">
                    <div class="bg-white shadow-lg rounded-md p-4">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">Early Years</h2>

                        <p class="text-gray-700 mb-4">He was born in Ranchi, Bihar (now Jharkhand), on July 7, 1981. His mother, Devaki Devi, works from home, while his father, Pan Singh, was a junior manager at MECON, a Ministry of Steel PSU.

                            He attended school in Shyamali, near Ranchi, Jharkhand. He was an exemplary student-athlete, but he preferred badminton and football. He was his school’s goalkeeper.

                            From 1995 to 1998, his football coach sent him to a local cricket club to be a wicketkeeper. This was an accident. He was the Commando cricket club’s regular wicketkeeper during that period.

                            From 1997–98, he made the Vinoo Mankad Trophy Under-16 Championship team. After 10th grade, he took cricket seriously.</p>

                        <p class="text-gray-700 mb-4"></p>
                    </div>

                    <div class="bg-white shadow-lg rounded-md p-4">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">International Career</h2>

                        <p class="text-gray-700 mb-4">MS Dhoni entered the international cricket scene in 2004 when he played for India against Bangladesh. Later that year, he was chosen for a tour of Zimbabwe and Kenya. In 2006, he made his Test debut against Sri Lanka and ODI debut against West Indies. He has been a regular member since then. MS Dhoni’s performance in the 2007 T20 World Cup brought him to prominence. He was named team captain for the tournament, leading them to victory against Pakistan in the final. In 2008, he became captain of India’s ODI team as well, thus making him the youngest captain in history.</p>

                        <p class="text-gray-700 mb-4"></p>
                    </div>

                    <div class="bg-white shadow-lg rounded-md p-4">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">Retirement and Legacy</h2>

                        <p class="text-gray-700 mb-4">M.S. Dhoni is well known for his calm and collected demeanour, even in the most stressful circumstances. His leadership skills are unrivalled, and he has led teams to victory frequently. We know him as one of India’s most successful captains, and he is a true inspiration to all aspiring cricket players in India.

                            Dhoni’s retirement is a huge loss for Indian cricket because of his achievements on the field and because he has become a symbol of hope for millions worldwide who look up to him as an idol.

                            Dhoni’s retirement surprises many fans and experts who thought he would continue playing for at least another year. However, Dhoni has clarified that he is ready to move on from his cricket career.</p>

                        <p class="text-gray-700 mb-4"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
