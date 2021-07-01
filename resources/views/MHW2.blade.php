@extends('layouts.layout2')
@section('tasto')
@if(isset($Persona))
<form method="POST" action="{{ route('logout') }}" class="button">

                            @csrf

                           <button class='tastoLogout' type="submit">Logout</button>

                        </form>
                        @else

<a href="{{ route('login') }}">Login</a>

@endif
@endsection
@section('script')


<script src='{{ asset("js/js1.js") }}' defer="true"></script>

@endsection
    @section('sezioni')
        <section class="inizio">
            
            <div id="testoIntro">
                <h1>NOLEGGIO PATTINI</h1>
                <p>Il nostro palaghiaccio mette a disposizione un servizio di noleggio pattini. 
                </p>
            </div>
            
            <div id="barra">
                <input id="ricerca" type="search" placeholder="Cerca taglia disponibile...">
                <button>
                    CERCA
                </button>
            </div>
        
        </section>
        
        <section>
            <div class="pref hidden" >
                <h2> Preferiti </h2>
            </div>
            <div class="pattini">

            </div>
        </section>
      @endsection  
      