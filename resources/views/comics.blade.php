<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>DC Comics</title>
</head>
<body>

    <!-- Header -->
    <header>
        <div class="first_section_header">
            <span>dc power visa</span>
            <span>additional dc sites</span>
        </div>
        <nav class="second_section_header">
            <img src="{{asset('images/dc-logo.png')}}" alt="DC logo">
            <ul>
                <li> <a href="{{route('characters')}}">characters</a></li>
                <li> <a href="{{url('/')}}">comics</a></li>
                <li> <a href="{{route('movies')}}">movies</a></li>
                <li> <a href="{{route('tv')}}">tv</a></li>
                <li> <a href="{{route('games')}}">games</a></li>
                <li> <a href="{{route('collectibles')}}">collectibles</a></li>
                <li> <a href="{{route('videos')}}">videos</a></li>
                <li> <a href="{{route('fans')}}">fans</a></li>
                <li> <a href="{{route('news')}}">news</a></li>
                <li> <a href="{{route('shop')}}">shop</a></li>
            </ul>
            <input type="text" placeholder="Search">
        </nav>
        
    </header>

    <!-- Main -->
    <main>

        <section class="hero">
            <h1>Attenzione! Qui va messo il background all'hero, ma me lo compila all'infinito...</h1>
        </section>

        <section class="current_series_section">
            <span>current series</span>
            <div class="card_container">
                
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>

    </footer>
</body>
</html>