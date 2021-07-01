<!DOCTYPE html>
<head>
        <meta charset = "utf-8">
        <title>Palaghiaccio</title>
        <meta name = "viewport" content ="width=device-width, initial-scale=1">
    <link rel="stylesheet"  href='{{ asset("MHW1.css") }}'>   
<link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
<script src='{{ asset("js/menu.js")}}' defer="true"></script>
<!-- yield serve per aggiungere (in questo caso lo script) nel punto in cui lo voglio mettere-->
@routes
@yield('script')

    </head>
    <body>
        <header>

            <nav>
               
               
                 <div id= "logo">
                  <img src="immagini/pa.png" alt="">
                  Ice Land
               
                </div>
               

                <div id ='menuLaterale' class=" pannelloLaterale comandi">
                <a href="javascript:void(0)" class="close">&times;</a>

                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('MHW5') }}">Chi siamo</a>
                    <a href="{{ route('MHW3') }}">La nostra Community</a>
                    <a href="{{ route('pattini2') }}">Noleggio pattini</a>
                    <a href="{{ route('abbonamento2') }}">Abbonamento</a>
                   @yield('tasto')
  
                </div>
                <button class="open" >&#9776;</button>
</nav>
        @yield('testoI')
         @yield('login')
        @yield('registrazione')
        </header>
        @yield('sezioni')
        <footer>
           <img src="immagini/face.png" alt="">
           <img src="immagini/insta.png" alt="">
           <img src="immagini/twitter.png" alt="">
           <h3>Maria Navarria</h3>
           <h3>O46001887</h3>

       </footer>
       </body>
</html>